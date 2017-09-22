<?php
namespace app\admin\controller;
use think\Controller;
use think\Loader;
use think\Request;
class Verification extends Controller{
   public function __construct()
   {
       parent::__construct();
//       $admin=session('admin');
////       dump($admin);exit();
//        if (empty($admin)||!isset($admin)){
//            return $this->error('用户未登录，请登录。。。。。','Login/login');
//        }
   }
}