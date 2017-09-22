<?php
namespace app\admin\widget;
use think\Controller;
class Common extends Controller{
    public  function  header(){
        return $this->fetch('Admin/header');
    }
   public function left(){
        return $this->fetch('Admin/left');
   }
}