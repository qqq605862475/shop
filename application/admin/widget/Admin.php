<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 13:48
 */
namespace app\admin\widget;

use think\Controller;

class Admin extends Controller{
    public function index(){

        return $this->fetch();
    }
    public function header(){

        return $this->fetch('common/header');

    }
    public function left(){

        return $this->fetch('common/left');

    }
    public function lis(){

        return $this->fetch('common/list');

    }
    public function ae(){

        return $this->fetch('common/ae');

    }
    public function memberList(){

        return $this->fetch('common/ae');

    }

}