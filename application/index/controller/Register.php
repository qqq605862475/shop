<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 15:26
 */
namespace app\index\controller;

use think\Controller;

class Register extends Controller
{
    public function index()
    {
        return $this->fetch('register');
    }

}