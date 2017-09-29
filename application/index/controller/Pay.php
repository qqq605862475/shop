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
        $goodsData = $this->goods();


        $this->assign('data',$data);
        $this->assign('goodsData',$goodsData['goods']);
        $this->assign('total',$goodsData['total']);


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

    public function goods(){
        //获取登录用户的id
        $id=session('member')['member_id'];
        //查询购物车表、商品表和图片管理表
        $data=db('car')
            ->alias('c')//别名
            ->join('goods g','g.goods_id=c.goods_id','left')
            ->join('image i','i.goods_id=c.goods_id','left')
            ->field('c.goods_num,g.sell_price,i.image_s_url')
            ->where(['c.member_id'=>$id,'i.is_face'=>1])
            ->select();
        //计算总价
        $total = '';
        foreach ($data as $k=>$v){
            $total += $v['sell_price']*$v['goods_num'];
        }




            return [
                'goods'=>$data,
                  'total'=>  $total];
    }

    public function order(){
        //获取登录用户的id
        $id=session('member')['member_id'];
        //查询购物车表、商品表和图片管理表
        $data=db('car')
            ->alias('c')//别名
            ->join('goods g','g.goods_id=c.goods_id','left')
            ->field('c.goods_num,g.sell_price')
            ->where(['c.member_id'=>$id])
            ->select();
        //计算总价
        $total = '';
        foreach ($data as $k=>$v){
            $total += $v['sell_price']*$v['goods_num'];
        }
        //获取下单时间
        $create_time=time();
        //把需要存到order表的数据放到arr数组
        $arr=[
            'member_id'=>$id,
            'total'=>$total,
            'create_time'=>$create_time,
        ];
    }
}