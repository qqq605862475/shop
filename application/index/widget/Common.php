<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 14:43
 */
namespace app\index\widget;
use think\Controller;
class Common extends Controller{

    public function header(){

        return $this->fetch('Common/header');
    }
    public function footer(){

        return $this->fetch('Common/footer');
    }
}