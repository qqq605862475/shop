<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/18
 * Time: 14:10
 */
namespace app\index\controller;

use think\Controller;

class Base extends Controller{


    public function _initialize()
    {
        parent::_initialize();
//        $member = session('member');
//        if (empty($member) || !isset($member)) {
//            return $this->error('请先登录', url('Login/login'));
//        }
    }


}