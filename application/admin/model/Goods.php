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


        //两表连查 join
//      Db::table('think_artist')
//          ->alias('a')
//          ->join('think_work w','a.id = w.artist_id')
//          ->join('think_card c','a.card_id = c.id')
//          ->select();
        $data=db('goods')
            ->alias('a')//别名
            ->field('a.goods_id,a.goods_name,a.sell_price,a.market_price,
            a.maketable,a.store,a.freez,a.recycle,a.last_modify,a.last_modify_id,
            c.name,d.is_face,d.image_url')
            ->join('cate c','a.cate_id =c.id','left')
            ->join('image d','d.goods_id=a.goods_id','left')
            ->where(['d.is_face'=>1])
            ->paginate(6);
//        echo \db()->getLastSql();
//        exit;


        return $data;

    }
    static public function add($data,$image){
        if(empty($data)){
            return false;
        }
        if(empty($image)){
            return false;
        }


        $res=db('goods')->insert($data);


        $goods=db('goods')->where(['goods_name'=>$data['goods_name']])->find();
        $image['goods_id']=$goods['goods_id'];
        $image['is_face']=1;


        $imgageBase=db('image')->insert($image);



        return $res!==false?true:false;

    }

    //编辑商品信息
    static public function edit($data){
        if(empty($data)){
            return false;
        }

        //修改数据
        $res=db('goods')->update($data);
        return $res!==false?true:false;

    }

    //根据ID获取全部数据
    static public function getGoodsById($id){
        if(!$id){
            return false;
        }
        $data=db('goods')->find($id);
        return $data??false;
    }

    //更新商品信息
    static public function upd($data){
        if(empty($data)){
            return false;
        }
        $res=db('goods')->update($data);
        return $res!==false?true:false;
    }
      //删除商品信息
    static public function del($id){
        if(empty($id)){
            return false;
        }

        $data=db('goods')->find($id);

        if ($data['recycle']==1){
            $data['recycle']=0;


        }else if($data['recycle']==0){
            $data['recycle']=1;
        }

        $res=db('goods')->update($data);

        return $res!==false?true:false;


    }




}