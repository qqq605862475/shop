<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/15
 * Time: 17:41
 */
namespace app\admin\widget;


use think\Controller;

class Common extends Controller {

    public function header(){

      return $this->fetch('common/header');

  }
    public function left(){

        return $this->fetch('common/left');

    }
}