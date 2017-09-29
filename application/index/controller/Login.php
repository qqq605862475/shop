<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 15:15
 */
namespace app\index\controller;


class Login extends Base
{
    public function index()
    {
       return $this->fetch('login');
    }

    public function doLogin(){
        //获取参数
        $data=[
            'username'=>input('username'),
            'password'=>input('password'),
        ];
        //验证是否为空
        if(!$data['username']){
            return $this->error('用户名不能为空');
        }
        if(!$data['password']){
            return $this->error('密码不能为空');
        }
        //链接数据库
        $info=db('member')->where(array('username'=>$data['username']))->find();
        //验证用户名
        if ($data['username']!=$info['username']){
            return $this->error("用户名或密码错误",'Login/index');
        }

        //验证密码
        //if (md5($data['password'])!=$info['password']){
            if ($data['password']!=$info['password']){
            return $this->error("用户名或密码错误",'Login/index');
        }

        //登录成功后  将用户信息存到session
        session('member',$info);


        //成功返回

        return $this->success('登录成功 正在跳转...',session('next_url'));



    }

    //退出登录
    public function logout(){
        session('member',null);
        return $this->redirect('Index/index');

    }

    }