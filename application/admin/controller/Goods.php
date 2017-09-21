<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 10:48
 */
namespace app\admin\controller;

class Goods extends Base{

    public function index(){

        return $this->fetch("list");
    }



}