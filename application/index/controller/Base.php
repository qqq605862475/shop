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


    public function _empty(){
        return $this->fetch('empty');
    }


}