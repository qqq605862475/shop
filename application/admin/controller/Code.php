<?php
namespace app\admin\controller;

use think\Controller;
use think\captcha\Captcha;


class Code extends Controller{


    //生成验证码
    public function code(){
        $captcha = new Captcha();
        return $captcha->entry();
    }

}