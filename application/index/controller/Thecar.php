<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 18:12
 */
namespace app\index\controller;

class Thecar extends Base {
    public function index(){
        return $this->fetch('thecar');
    }
}