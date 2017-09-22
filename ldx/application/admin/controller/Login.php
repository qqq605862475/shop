<?php
namespace app\admin\controller;
use think\Controller;
use think\Loader;
class Login extends Controller{
    public function login()
    {
        if(request()->isPost()){
            $data = [
                'username' => input('username'),
                'password' => input('password'),
                'code'=> input('code')
            ];
            if(!$data['username']){
                return $this->error('用户名不能为空');
            }
            if(!$data['password']){
                return $this->error('密码不能为空');
            }
            if(!$data['code']){
                return $this->error('验证码不能为空');
            }
//            判断验证码是否为空
            if (!captcha_check($data['code'])){
                return $this->error('验证码错误',url('Login/login'));
            }
            $admin=db('admin')->where(array('username'=>$data['username']))->find();
            if (!isset($admin)||empty($admin)){
                return $this->error('用户名或密码错误');
            }
            if ($admin['password']!=md5($data['password'])){
                return $this->error('用户名或密码错误');
            }
             session('admin',$admin);
//            dump($admin);exit();
            return $this->success('登录成功，马上跳转',url('Index/index'));
        }
        return $this->fetch();
    }
    public function loginout(){
        session('admin',null);
        return $this->success('退出成功，马上跳转',url('Login/login'));
//        return $this->redirect('Login/login');
    }
}