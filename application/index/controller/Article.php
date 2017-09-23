<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/23
 * Time: 10:27
 */
namespace app\index\controller;

class Article extends Base{
   public function index(){

       return $this->fetch('article');
   }




}
