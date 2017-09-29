<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/28 0028
 * Time: 上午 10:15
 */
namespace app\admin\controller;
use app\admin\model\Admin as Kk;
class Order extends Base{
 public function index(){
     $data=db('order')
         ->paginate(5);
     $this->assign('data',$data);
     return $this->fetch();
 }
 public function  del($id){
     $rul=Kk::delData('order',$id);
//            判断状态
     if ($rul['state']=='succeed') {
         return $this->success($rul['msg'], ('Order/index'));
     }else {
         return $this->error($rul['msg']);
     }
 }
}