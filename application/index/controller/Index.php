<?php
namespace app\index\controller;
use app\index\model\Goods;
class Index extends Base
{
    public function index()
    {
        $data=Goods::nav();
//        dump($data);exit();
      $this->assign('nav',$data);
        return $this->fetch();

    }
    public function lis(){
        $cateName=input('id');
        $cateName=array_filter(array_unique(explode(',',$cateName)));

        $data1=Goods::cate($cateName);

        $data2=$cateName[0];
        $data=[$data1,$data2];
//        dump($data);exit();
        $this->assign('data',$data);
        return $this->fetch();
        //        $this->load($cateName);
    }
    public function load(){
//        $val1=input('val1');
            $cateName=input("cateName");//取字符串
            $cateName=array_filter(array_unique(explode(',',$cateName)));

//        dump($cateName);exit();
        $data=Goods::search($cateName);
//        dump($cateName);exit();
//        $data=Goods::goods($cateName);
//        dump( $data);exit();
        $this->assign('data', $data);
        Goods::goods($cateName);
        return $this->fetch('index/goods');
    }
}
