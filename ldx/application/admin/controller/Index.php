<?php
namespace app\admin\controller;
use app\admin\controller\Verification;
class Index extends Verification{
    public function index(){
        return $this->fetch();
    }
}