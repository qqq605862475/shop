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
}
