<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 18:12
 */
namespace app\index\controller;
use app\index\model\GoodsCL;
class Car extends Base {

    //跳转到购物车详情页后做的一些事情
    public function index(){
        //cookie('car',null);
        //判断是否登录
        $isLogin = $this->isLogin();
        if($isLogin){
            //已登录
            //直接查表，返回二维数组
            $data = GoodsCL::goodsByMemberId($isLogin['member_id']);
        }else{
            //未登录
            $data = cookie('car');
            $data = unserialize($data);
        }
        //如果商品数据不为空
        if(!empty($data)){
            //通过二维数据把goods_id拿出来    1,2
            $goods_ids = '';
            foreach($data as $key=>$val){
                $goods_ids .= $val['goods_id'].',';
            }
            //多个id之间用逗号隔开  rtrim（）函数将最后一个多出来的逗号去掉
            $goods_ids = rtrim($goods_ids,',');
            $arr = GoodsCL::goodsItems($goods_ids);
            foreach ($arr as $key=>$val){
                foreach ($data as $k=>$v){
                    if($val['goods_id'] == $v['goods_id']){
                        //把数量放到$arr里面
                        $arr[$key]['goods_num'] = $v['goods_num'];
                    }
                }
            }

            //总计
            $total = '';

            foreach ($arr as $k=>$v){
                $total += $v['sell_price']*$v['goods_num'];
            }
            $data = [
                'total'=>$total,
                'data'=>$arr,
            ];
            $data = $data?$data:[];
            $this->assign('data',$data);
            return $this->fetch('car');
        }else{
            //如果没有商品信息 跳转到空购物车页面
            return $this->fetch('nocar/nocar');
        }


    }

    //点击加入购物车时候做的一些事情
    //页面通过ajax跳转过来 结尾处返回success
    public function car(){
        //接收参数
        $goods_id=input('goods_id');
        $goods_num=input('goods_num');
        $isLogin = $this->isLogin();
        if(!$isLogin){
            //未登录
            //获取cookie里的商品数据  看是否为空
            $car=unserialize(cookie('car'));
            //如果是空的 二维数组直接拿输入数据，序列化后存入到cookie
            //如果非空  判断是否已有相同的商品
          if(empty($car)){
              //没有商品的购物车
                $data[$goods_id]=[
                    'goods_id'=>$goods_id,
                    'goods_num'=>$goods_num,
                    'selected'=>1
                ];
                cookie('car',serialize($data));

            }else{
              //加载有商品的购物车数据
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





    //点击+按钮的方法
    public function add(){
        //接收参数
        $goods_id=input('goods_id');
        $goods_num=input('goods_num');
        //判断是否登录
        $isLogin=$this->isLogin();
        if(!$isLogin){
            //未登录
            $car=unserialize(cookie('car'));
            $this->assign('car',$car);
            $car[$goods_id]['goods_num']+=1;
            cookie('car',serialize($car));
        }else{
            //已登录
            $carData=db('car')->where(['member_id'=>$isLogin['member_id']])->select();
            $this->assign('carData',$carData);

                foreach ($carData as $key=>$val){
                    $carData[$val['goods_id']]=$val;
                }

                var_dump($carData[$goods_id]['goods_num']);exit();
                    $carData[$goods_id]['goods_num']+=1;
                    db('car')->update($carData[$goods_id]);
        }
        return $this->fetch('car');
    }
    //点击-按钮的方法
    public function reduce(){
        //接收参数
        $goods_id=input('goods_id');
        $goods_num=input('goods_num');
        //判断是否登录
        $isLogin=$this->isLogin();
        if(!$isLogin){
            //未登录
            $car=unserialize(cookie('car'));
            $car[$goods_id]['goods_num']-=1;
            cookie('car',serialize($car));
        }else{
            //已登录
            $carData=db('car')->where(['member_id'=>$isLogin['member_id']])->select();
            foreach ($carData as $key=>$val){
                $carData[$val['goods_id']]=$val;
            }
            $carData[$goods_id]['goods_num']-=1;
            db('car')->update($carData[$goods_id]);
        }
        return $this->fetch('car');
    }
}