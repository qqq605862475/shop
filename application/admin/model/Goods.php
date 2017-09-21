<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 11:13
 */
namespace app\admin\model;

use think\Model;

class Goods extends Model {

    static public function allGoods(){
        $data=db('cate')->order('id asc')->paginate(8);

        return $data;



    }




}