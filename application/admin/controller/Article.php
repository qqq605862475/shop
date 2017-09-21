<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Loader;
use think\Validate;

class Article extends Base
{

    public function add()
    {
        //判断是否为post传的
        if (request()->isPost()) {

//            dump($_POST);
            //接受函数
            $data=[
                'title'=>input('title'),
                'desc'=>input('desc'),

                'content'=>input('content'),
                'author'=>input('author'),
                'cateid'=>input('cateid'),
            ];

        //判断state
        if(input('state')=='on'){
            $data['state']=1;
        }else{
            $data['state']=0;
        }
        //接收关键字
            $keyword=input('keyword');
            $arr=str_replace('，',',',$keyword);
            $data['keyword']=$arr;

        //验证
            $validate= validate('Article'); //获取表中的数据 Admin是类名 必须首字母大写
            if(!$validate->scene('add')->check($data)){//加了验证场景 并验证数据
                return $this->error($validate->getError());//自动验证提示错误
            }

        //发布时间
        $data['time']=time();

        //图片处理
        //判断图片有没有上传
        if ($_FILES['pic']['tmp_name']!=''){

            //上传图片
            $arr= $this->upload('pic');
            if ($arr['status']=='success'){
                //把图片路径放入数据库
                $data['pic']=$arr['url'];
            }else{
                //返回错误信息
                return $this->error($arr['msg']);
            }


        }
//        dump($data);
//        exit;



            //保存数据到数据库   insert
            $res= Db::name('article')->insert($data);
            //判断添加是否成功
            if($res){
                return $this->success('添加成功',url('Article/index'));//成功返回
            }
            else{
                return $this->error('添加失败');//失败返回
            }

        }

        //查询所有栏目 放在判断是否post提交之外
        $cateData=db('cate')->select();
        //分配到模块
        $this->assign('cateData',$cateData);

        //调用函数跳转
        return $this->fetch();
    }

    //处理图片上传的方法
    private function upload($filename){
        //获取表单上传的文件
        $file=request()->file($filename);

        //如果上传了文件
        if ($file){
            //将上传文件存到指定路径   tp5\public\uploads
            $info=$file->move(ROOT_PATH.'public'.DS.'uploads');

            //上传成功后 获取上传信息
            if ($info){

                //拼接图片完整路径
                $url='/uploads/'.$info->getSaveName();
                //把路径中的反斜线替换成正斜线
                $url=str_replace('\\','/',$url);
               return [
                   'status'=>'success',
                   'url'=>$url,
               ];
            } else{
                //上传失败错误信息
                return [
                    'status'=>'error',
                    'msg'=>$file->getError(),
                ];
            }
        }
    }


  public function index(){
      //查询数据
//        $data=Db::name('admin')->select();//返回结果是二维数组
        //分页
//        $data=Db::name('article')->paginate(2);//返回结果是一个对象

      //两表连查 join
//      Db::table('think_artist')
//          ->alias('a')
//          ->join('think_work w','a.id = w.artist_id')
//          ->join('think_card c','a.card_id = c.id')
//          ->select();
      $data=\db('article')
          ->alias('a')//别名
          ->field('a.id,a.title,a.author,a.time,a.pic,a.state,a.keywords,a.click,c.catename')
          ->join('cate c','a.cateid =c.id')//两表的关联条件
          ->paginate(3);
      //打印sql语句
//      echo \db()->getLastSql();

        //把变量分配到模版
        $this->assign('arr',$data);

        //调用函数跳转
        return $this->fetch("list");
    }
//
  public function edit(){
      //获取传来的值
      $id= input('id');


      //查询所有栏目 放在判断是否post提交之外

      $cateData=db('cate')->select();
      $this->assign('cateData',$cateData);

      //从数据库中根据id值查找
     $data=\db('article')->find($id);

        //把变量分配到模版
        $this->assign('data',$data);


        //调用函数跳转
        return $this->fetch();
    }

  public function upd(){

        //传值
        $data=[
            'id'=>input('id'),
            'title'=>input('title'),
            'desc'=>input('desc'),
           // 'keywords'=>input('keywords'),
            'content'=>input('content'),
            'author'=>input('author'),
            'cateid'=>input('cateid'),
        ];
      //接收关键字
      $keyword=input('keyword');
      $keyword=str_replace('，',',',$keyword);
      $data['keyword']=$keyword;

      //验证
      $validate = validate('Article');
      if(!$validate->scene('edit')->check($data)){
          return $this->error($validate->getError());
      }

      //判断state
      if(input('state')=='on'){
          $data['state']=1;
      }else{
          $data['state']=0;
      }


      //图片处理
      //判断图片有没有上传
      if ($_FILES['pic']['tmp_name']!=''){

          //上传图片
          $arr= $this->upload('pic');
          if ($arr['status']=='success'){
              //删除图片
              //查出图片路径--只查pic这个字段
              $picData=\db('article')->field('pic')->find($data['id']);
              $pic=$picData['pic'];
              //unlink删除文件
              //把绝对路径转为相对路径
              @unlink('.'.$pic);


              //把图片路径放入数据库
              $data['pic']=$arr['url'];
          }else{
              //返回错误信息
              return $this->error($arr['msg']);
          }
      }

//      dump($data);
//      exit;

      //链接数据库的admin表并更新  update
        $res=\db('article')->update($data);

        // update  成功返回受影响行数 失败返回false  不修改 返回0
        //判断更新是否成功
        if($res!==false){//不为false 0时执行  ===
            return $this->success('更新成功','Article/index');
        }
        else{
            return $this->error('更新失败');
        }
  }

  public function del(){

        //获取传来的id
        $id= input('id');

        //查出图片路径--只查pic这个字段
        $picData=\db('article')->field('pic')->find($id);
        $pic=$picData['pic'];
        //unlink删除文件
        //把绝对路径转为相对路径
        @unlink('.'.$pic);

        $res=Db::name('article')->delete($id);



        //判断删除是否成功
        if($res){
            return $this->success('删除成功',url('Article/index'));
        }
        else{
            return $this->error('删除失败');
        }
    }


}