<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 15:15
 */
namespace app\index\controller;


class Login extends Base
{
    public function index()
    {
       return $this->fetch('login');
    }


    }