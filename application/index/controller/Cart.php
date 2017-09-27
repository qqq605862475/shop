<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/27 0027
 * Time: 下午 2:42
 */
namespace app\index\controller;
class Cart extends Base{
    public function index(){
        echo '123';exit();
        $num=input('kk');
        dump($num);
       return $this->fetch();
    }
}