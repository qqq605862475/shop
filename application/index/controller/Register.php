<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 15:26
 */
namespace app\index\controller;


class Register extends Base
{
    public function index()
    {
        return $this->fetch('register');
    }

}