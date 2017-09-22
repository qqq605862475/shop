<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Loader;
use think\Validate;
<<<<<<< HEAD:application/admin/controller/Manager.php

class Manager extends Base
=======
use app\admin\model\Admin as Kk;
class Admin extends Base
>>>>>>> 5d6e1fcfbc437006646ad83e1c5025fa7afb3c09:application/admin/controller/Admin.php
{
//    加载管理员列表
  public function index(){
      $name='manager';
      $id=null;
      $data=Kk::getData($name,$id);
//      dump($data);exit();
      $this->assign('indexData',$data);
      return $this->fetch('admin/list');
  }
//   添加用户
    public function add(){
        //        判断是否为post模式接收数据
        if (request()->isPost()){
            $data=[
<<<<<<< HEAD:application/admin/controller/Manager.php
            'username'=>input('username'),
            'password'=>input('password'),
        ];
            $data['password']=md5($data['password']);

            //验证
            $validate=Loader::Validate('manager'); //获取表中的数据 manager是类名 必须首字母大写
            if(!$validate->scene('add')->check($data)){//加了验证场景 并验证数据
                return $this->error($validate->getError());//自动验证提示错误
            }


            //保存数据到数据库   insert
           $res= Db::name('manager')->insert($data);
            //判断添加是否成功
           if($res){
               return $this->success('添加成功',url('manager/index'));//成功返回
           }
           else{
               return $this->error('添加失败');//失败返回
           }

        }

        //调用函数跳转
        return $this->fetch();
    }
    public function index()
    {
        //查询数据
//        $data=Db::name('manager')->select();//返回结果是二维数组

        //分页
        $data=Db::name('manager')->paginate(3);//返回结果是一个对象
      //把变量分配到模版
        $this->assign('arr',$data);

        //调用函数跳转
        return $this->fetch("list");
    }

    public function edit()
    {
        //获取传来的值
        $id= input('id');

        //从数据库中根据id值查找
        $data=Db::name('manager')->find($id);

        //把变量分配到模版
        $this->assign('data',$data);


      //调用函数跳转
        return $this->fetch();
    }

    public function upd(){
        //传值
=======
                'username'=>input('username'),
                'password'=>md5(input('password')),
            ];
//            判断用户是否冻结
            if(input('lock')=='on'){
                $data['lock']=1;
            }else{
                $data['lock']=0;
            };
            $data['create_time']=time();
            $validate= validate('Admin'); //获取表中的数据 Admin是类名 必须首字母大写
            if(!$validate->scene('add')->check($data)){//加了验证场景 并验证数据
                return $this->error($validate->getError());//自动验证提示错误
            }
            $data['ip']= $_SERVER["REMOTE_ADDR"];
            $rul=Kk::addData($data);
//            判断状态
            if ($rul['state']=='succeed') {
                return $this->success($rul['msg'], ('Admin/index'));
            } else {
                return $this->error($rul['msg']);
            }
//            dump($data);exit();
        }
//      加载用户添加模版
>>>>>>> 5d6e1fcfbc437006646ad83e1c5025fa7afb3c09:application/admin/controller/Admin.php
        $data=[
            'way'=>1,
            'manager_id'=>'',
            'username'=>'示列：小明',
            'password'=>'',
            'lock'=>''
        ];
<<<<<<< HEAD:application/admin/controller/Manager.php
        $password=input('password');

        //验证
         $validate=Loader::Validate('manager');
         if(!$validate->scene('edit')->check($data)){
             return $this->error($validate->getError());
         }


        //判断密码是否为空 不为空加密
        if ($password!=''){
            $data['password']=md5($password);
        }

        //链接数据库的manager表并更新  update
        $res=Db::name('manager')->update($data);

        // update  成功返回受影响行数 失败返回false  不修改 返回0
        //判断更新是否成功
        if($res!==false){//不为false 0时执行  ===
            return $this->success('更新成功',url('index'));
        }
        else{
            return $this->error('更新失败');
        }



    }
    public function del(){

        //获取传来的id
        $id= input('id');

        //判断是否为超管  是则返回错误提示并不执行之后的代码
        if($id==1){
            return $this->error('超管不能被删除');
        }

        //从数据库中删除id值对应的数据  delete
        $res=Db::name('manager')->delete($id);

        //判断删除是否成功
        if($res){
            return $this->success('删除成功',url('manager/index'));
        }
        else{
            return $this->error('删除失败');
=======
//        dump($data);exit();
        $this->assign('aeData',$data);
        return $this->fetch('admin/list');
    }
//    编辑用户
    public function edit(){
        //        判断是否为post模式接收数据
        if (request()->isPost()){
            $data=[
                'manager_id'=>input('manager_id'),
                'username'=>input('username'),
            ];
            $password=input('password');
            if ($password!=''){
                $data['password'] = md5($password);
            }
            if(input('lock')=='on'){
                $data['lock']=1;
            }else{
                $data['lock']=0;
            };
            $validate = validate('Admin');
            if(!$validate->scene('edit')->check($data)){
                return $this->error($validate->getError());
            }
            $rul=Kk::editData($data);
//            判断状态
            if ($rul['state']=='succeed') {
                return $this->success($rul['msg'], ('Admin/index'));
            } else {
                return $this->error($rul['msg']);
            }
//            dump($data);exit();
>>>>>>> 5d6e1fcfbc437006646ad83e1c5025fa7afb3c09:application/admin/controller/Admin.php
        }
//        将要修改的用户数据取出送到模版
        $id=input('id');
        $name='manager';
        $data=Kk::getData($name,$id);
        $data['data'][0]['way']=2;
//        dump($data);exit();
//        dump($data);exit();
        $this->assign('aeData', $data['data'][0]);
        return $this->fetch('admin/list');
    }
<<<<<<< HEAD:application/admin/controller/Manager.php

    //退出登录
    public function logout(){
        session('manager',null);
        //
        return $this->redirect('Login/login');
=======
//    删除用户
    public function del($id)
    {
        $rul=Kk::delData($id);
//            判断状态
        if ($rul['state']=='succeed') {
            return $this->success($rul['msg'], ('Admin/index'));
        } else {
            return $this->error($rul['msg']);
        }
>>>>>>> 5d6e1fcfbc437006646ad83e1c5025fa7afb3c09:application/admin/controller/Admin.php
    }
}