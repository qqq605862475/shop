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
        $data=\db('goods')
            ->alias('a')//别名
            ->field('a.*,c.name')
            ->join('cate c','a.cate_id =c.id','left')//两表的关联条件
            ->paginate(2);
//        echo \db()->getLastSql();
//        exit;


        return $data;

    }
    static public function add($data){
        if(empty($data)){
            return false;
        }


        $res=db('goods')->insert($data);

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