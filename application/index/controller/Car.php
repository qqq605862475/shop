<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 18:12
 */
namespace app\index\controller;

class Car extends Base {
    public function index(){
        return $this->fetch('Car');
    }
    public function car(){
        //接收参数
        $goods_id=input('goods_id');
        $goods_num=input('goods_num');
        //判断是否登录
        $isLogin=$this->isLogin();
        if(!$isLogin){
            //未登录
            //获取cookie里的商品数据  看是否为空
            $car=unserialize(cookie('car'));
            //如果是空的 二维数组直接拿输入数据，序列化后存入到cookie
            //如果非空  判断是否已有相同的商品
            if(empty($car)){
                $data[$goods_id]=[
                    'goods_id'=>$goods_id,
                    'goods_num'=>$goods_num,
                    'selected'=>1
                ];
                cookie('car',serialize($data));

            }else{
                if(array_key_exists($goods_id,$car)){
                    $car[$goods_id]['goods_num']+=$goods_num;
                }else{
                    $car[$goods_id]=[
                        'goods_id'=>$goods_id,
                        'goods_num'=>$goods_num,
                        'selected'=>1
                    ];
                }
                cookie('car',serialize($car));

            }

        }else{
            //已登录
            //查出登录用户购物车中的所有数据
            $carData=db('car')->where(['member_id'=>$isLogin['member_id']])->select();
            if(empty($carData)){
                //购物车是空的
                $arr=[
                  'goods_id'=>$goods_id,
                  'goods_num'=>$goods_num,
                  'selected'=>1,
                  'member_id'=>$isLogin['member_id']
                ];
                db('car')->insert($arr);
            }else{
                //购物车不是空的
                foreach ($carData as $key=>$val){
                    $carData[$val['goods_id']]=$val;
                }
                if(array_key_exists($goods_id,$carData)){
                    //购物车里已有该商品
                    $carData[$goods_id]['goods_num']+=$goods_num;
                    db('car')->update($carData[$goods_id]);
                }else{
                    //购物车里没有该商品
                    db('car')->insert([
                       'goods_id'=>$goods_id,
                       'goods_num'=>$goods_num,
                       'selected'=>1,
                       'member_id'=>$isLogin['member_id']
                    ]);
                }


            }
        }
        return json([
           'status'=>'success',
           'msg'=>'添加成功'
        ]);

    }
}