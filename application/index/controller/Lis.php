<?php
namespace app\index\controller;
use app\index\model\Goods;
class Lis extends Base
{
    public function lis(){
        $cate=input('id');
        $cate=array_filter(array_unique(explode(',',$cate)));
        $data1=Goods::cate($cate);
//        dump($data1);exit();
        $data2=implode(',',$cate);
//        $data2=$cate[0];
        $data=[$data1,$data2];
//        dump($data);
        $this->assign('data',$data);
        return $this->fetch();
        //        $this->load($cateName);
    }
    public function load(){
        $cateName=input("cateName");
        $cateName=array_filter(array_unique(explode(',',$cateName)));
        $data=Goods::search($cateName);
//        dump($cateName);exit();
//        $data=Goods::goods($cateName);
//        dump( $data);exit();
        $this->assign('data', $data);
//        Goods::goods($cateName);
        return $this->fetch('Lis/goods');
    }
}