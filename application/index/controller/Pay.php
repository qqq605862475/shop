<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/26
 * Time: 14:52
 */
namespace app\index\controller;


class Pay extends Base{

    public function index(){
        $data=db('jm_area')->select();
        $this->assign('data',$data);


        return $this->fetch('pay');
    }
    public function city($area_id){
        $city=db('jm_area')->where(['parent_id'=>$area_id])->select();
        return json(
            $city
        );
    }

    public function town($area_id){
        $town=db('jm_area')->where(['parent_id'=>$area_id])->select();
        return json(
            $town
        );
    }

}