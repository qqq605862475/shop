<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 10:48
 */
namespace app\admin\controller;
 use app\admin\model\Goods as GoodsModel;

class Goods extends Base{

    public function index(){
        //查询所有分类
        $data=GoodsModel::allGoods();
        //把变量分配到模版
        $this->assign('data',$data);

        return $this->fetch("list");
    }



}