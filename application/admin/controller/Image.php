<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 10:24
 */
namespace app\admin\controller;

use app\admin\model\Image as ImageModel;


class Image extends Base{

     public function index(){

         $id=input('id');

         //查询所有图片信息
         $data = ImageModel::allGoods($id);
         //把变量分配到模版


         $this->assign('data', $data);

         return $this->fetch('list');
     }

     //更改封面
     public function upd(){
         //接收参数
         $i_id=input('i_id');
         $g_id=input('g_id');



         //操作数据库
         $res=ImageModel::upd($i_id,$g_id);

         return $this->redirect('Image/index',['id'=>$g_id]);
     }
     //删除图片
    public function del(){

        //获取传来的id
        $id= input('id');

       //操作数据库
        $res=ImageModel::del($id);
        dump($res);
        exit;


        //判断删除是否成功
        if($res['res']!==false){
            return $this->success('删除成功',url('Image/index',['id'=>$res['id']]));
        }
        else{
            return $this->error('删除失败');
        }
    }
    //添加图片
    public function add()
    {
        //获取参数
        $id=input('id');
       $data=db('goods')->find($id);
       $this->assign('data',$data);
        //判断是否为post传的
        if (request()->isPost()) {
            $id=input('id');
            $goodsBase=db('goods')->find($id);


            $data=[
                'goods_id'=>$goodsBase['goods_id'],
                'is_face'=>0,
            ];






            //图片处理
            //判断图片有没有上传
            if ($_FILES['pic']['tmp_name']!=''){

                //上传图片
                $arr= $this->upload('pic');
                if ($arr['status']=='success'){
                    //把图片路径放入数据库
                    $data['image_url']=$arr['url'];
                }else{
                    //返回错误信息
                    return $this->error($arr['msg']);
                }


            }


            //操作数据库
            $res=ImageModel::add($data);


            //判断添加是否成功
            if($res!==false){
                return $this->success('添加成功',url('Image/index',['id'=>$id]));//成功返回
            }
            else{
                return $this->error('添加失败');//失败返回
            }


        }



        return $this->fetch();
    }

    //处理图片上传的方法
    private function upload($filename){
        //获取表单上传的文件 判断是不是POST提交
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


}