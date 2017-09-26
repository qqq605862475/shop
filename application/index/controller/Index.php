<?php
namespace app\index\controller;
use app\index\model\Goods;
class Index extends Base
{
    public function index()
    {
        $data=db('goods')
            ->alias('a')//别名
            ->field('a.goods_id,a.goods_name,a.keywords,a.sell_price,a.market_price,a.store,
            d.image_id,d.is_face,d.image_m_url')
            ->join('image d','d.goods_id=a.goods_id','left')
            ->where(['d.is_face'=>1])
            ->limit(8)
            ->select();
        $this->assign('data',$data);

        $goods=db('goods')
            ->alias('a')//别名
            ->field('a.goods_id,a.goods_name,a.keywords,a.sell_price,a.market_price,a.store,
            d.image_id,d.is_face,d.image_m_url')
            ->join('image d','d.goods_id=a.goods_id','left')
            ->select();
        $this->assign('goods',$goods);



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
