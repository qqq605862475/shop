<?php
namespace app\index\controller;
use app\index\model\Goods;
class Index extends Base
{
    public function index()
    {
        return $this->fetch();

    }
    public function lis(){
        $cateName=['四时蔬菜'];
//        dump($cateName);
        $data=Goods::cate($cateName);
//        dump($data);exit();
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function load(){
//        $val1=input('val1');
//        dump($val1);exit();
        $cateName=trim(input("cateName"));//取字符串
        $cateName=array_filter(array_unique(explode(',',$cateName)));
//        dump($cateName);exit();
        $data=Goods::search($cateName);
//        dump($cateName);exit();
//        $data=Goods::goods($cateName);
//        dump( $data);exit();
        $this->assign('data', $data);
        $cateName=['四时蔬菜'];
        Goods::goods($cateName);
        return $this->fetch('index/goods');
    }
}
