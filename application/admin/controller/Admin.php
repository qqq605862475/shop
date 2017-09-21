<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Loader;
use think\Validate;

class Admin extends Base
{
    public function add()
    {
        //判断是否为post传的
        if (request()->isPost()){
            //接受函数
            $data=[
            'username'=>input('username'),
            'password'=>input('password'),
        ];
            $data['password']=md5($data['password']);

            //验证
            $validate=Loader::Validate('Admin'); //获取表中的数据 Admin是类名 必须首字母大写
            if(!$validate->scene('add')->check($data)){//加了验证场景 并验证数据
                return $this->error($validate->getError());//自动验证提示错误
            }


            //保存数据到数据库   insert
           $res= Db::name('admin')->insert($data);
            //判断添加是否成功
           if($res){
               return $this->success('添加成功',url('Admin/index'));//成功返回
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
//        $data=Db::name('admin')->select();//返回结果是二维数组

        //分页
        $data=Db::name('admin')->paginate(3);//返回结果是一个对象
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
        $data=Db::name('admin')->find($id);

        //把变量分配到模版
        $this->assign('data',$data);


      //调用函数跳转
        return $this->fetch();
    }

    public function upd(){
        //传值
        $data=[
            'id' =>input('id'),
            'username'=>input('username'),
        ];
        $password=input('password');

        //验证
         $validate=Loader::Validate('admin');
         if(!$validate->scene('edit')->check($data)){
             return $this->error($validate->getError());
         }


        //判断密码是否为空 不为空加密
        if ($password!=''){
            $data['password']=md5($password);
        }

        //链接数据库的admin表并更新  update
        $res=Db::name('admin')->update($data);

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
        $res=Db::name('admin')->delete($id);

        //判断删除是否成功
        if($res){
            return $this->success('删除成功',url('Admin/index'));
        }
        else{
            return $this->error('删除失败');
        }
    }

    //退出登录
    public function logout(){
        session('admin',null);
        //
        return $this->redirect('Login/login');
    }


}