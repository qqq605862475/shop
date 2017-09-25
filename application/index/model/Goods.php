<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/23
 * Time: 11:31
 */
namespace app\index\model;
use think\Controller;
class Goods extends Controller
{
    static public function load($cateName){
        if(!isset($cateName[0])) {
            $data=db('cate')
                ->field('cate_id')
                ->select();
        }else{
            $data=[];
            for($i=0;$i<count($cateName);$i++){
                $rul=db('cate')
                    ->field('cate_id,cate_pid')
                    ->where('cate_name',trim($cateName[$i]))
                    ->select();
                if (!isset($rul[0])){
                    $rul=db('cate')
                        ->alias('a')
                        ->join('goods c','a.cate_id=c.cate_id')
                        ->field('a.cate_id')
                        ->where('c.keywords',trim($cateName[$i]))
                        ->select();
                    array_push($data,$rul[0]);
                }elseif($rul[0]['cate_pid']==0){
                    $data=db('cate')
                        ->field('cate_id,cate_pid')
                        ->where('cate_path','neq',$rul[0]['cate_id'])
                        ->where('cate_path','like',$rul[0]['cate_id'].'%')
                        ->select();
                }else{
                    array_push($data,$rul[0]);
                }
            }
        }
//     dump($data);
        $recur=[];
        for ($i=0;$i<count($data);$i++){
            array_push($recur,$data[$i]['cate_id']);
        }
        array_unique($recur);
//     dump($recur);
        return $recur;
    }

    static public function kk($cateName){
        $data=[];
        $data1=[];
        $data2=[];
        $data3=[];
        $filed=['sustainable','farmer','natural','local','visit','ancient','negative','agriculture','origin','gluten','material','gmo','produce'];
//        dump();exit();
        $ci= db('cate')
            ->where('cate_name',$cateName[0])
            ->field('cate_level,cate_id')
            ->select();
        if($ci[0]['cate_level']==0&&count($cateName)==1){
            $data=db('cate')
                ->alias('a')
                ->where('a.cate_pid', $ci[0]['cate_id'])
                ->join('goods c','a.cate_id=c.cate_id')
                ->field('c.goods_id')
                ->select();
             $data=Goods::Analysis($data);
        }else{
            $data=db('cate')
                ->alias('a')
                ->where('a.cate_pid', $ci[0]['cate_id'])
                ->join('goods c','a.cate_id=c.cate_id')
                ->field('c.goods_id')
                ->select();
            $data=Goods::Analysis($data);
//            dump(count($cateName));exit();
            for ($i=1;$i<count($cateName);$i++){
                $rul=db('cate')
                    ->alias('a')
                    ->where('a.cate_name',trim($cateName[$i]))
                    ->join('goods c','a.cate_id=c.cate_id')
                    ->field('c.goods_id')
                    ->select();
                if(isset($rul[0])){
                    $data1=array_merge($data1,Goods::Analysis($rul));
//                    $kk=Goods::insert($data,$data1);
//                    $kk=Goods::insert($kk,$data1);
                }else{
                    $rul=db('goods')
                        ->where('brand',trim($cateName[$i]))
                        ->where('goods_id', 'in', $data)
                        ->field('goods_id')
                        ->select();
                    if(isset($rul[0])){
                        $data2=array_merge($data2,Goods::Analysis($rul));
//                        $kk=Goods::insert($kk,$data2);
//                        $kk=Goods::insert($kk,$data2);
                    }else{
                        for($k=0;$k<count($filed);$k++){
                            $rul=db('select')
                                ->where($filed[$k],trim($cateName[$i]))
                                ->where('goods_id', 'in', $data)
                                ->field('goods_id')
                                ->select();
                            if(isset($rul[0])){
                                $data3=array_unique(array_merge($data3,Goods::Analysis($rul)));
//                                $kk=Goods::insert($kk,$data3);
                            }
                        }
                    }
                }
//                else{
//                    if(isset($data[0])){
//                        echo '1';
//                        $rul=db('goods')
//                        ->where('brand',trim($cateName[$i]))
//                        ->where('goods_id', 'in', $data)
//                        ->field('goods_id')
//                        ->select();
//                        $data1=array_merge($data1,Goods::Analysis($rul));
//                    }else{
//                        echo '2';
//                        $rul=db('goods')
//                        ->where('brand',trim($cateName[$i]))
//                        ->field('goods_id')
//                        ->select();
//                    }
//
//                }
//                elseif(isset($rul[0])){
//                    $rul=db('goods')
//                        ->where('brand',trim($cateName[$i]))
//                        ->where('goods_id', 'in', $data)
//                        ->field('goods_id')
//                        ->select();
//                    if(isset($rul[0])){
//                        $data=array_merge($da,Goods::Analysis($rul));
//                    }
//                }else{
//                    $rul=db('goods')
//                        ->where('brand',trim($cateName[$i]))
//                        ->field('goods_id')
//                        ->select();
//                }
            }

//            $data=Goods::Analysis($data);
        }
        $kk=[];
        array_push($kk,$data,$data1,$data2,$data3);
       for($f=1;$f<count($kk);$f++){
            if (!empty($kk[$f])){
                $data=array_intersect($data,$kk[$f]);
            }
        }
        return $data;
        }

    static public function search($cateName){
        $rul=Goods::kk($cateName);
//        dump($rul);exit();
        $data = db('goods')
            ->alias('a')
            ->where('a.goods_id','in', $rul)
            ->join('image k', 'a.goods_id=k.goods_id')
            ->where('k.is_face', '1')
            ->select();
        return $data;

}
static public function Analysis($data){
        $rul=[];
    for ($i=0;$i<count($data);$i++){
        array_push($rul,$data[$i]['goods_id']);
    }
    return $rul;
}

    static public function cate($cateName){
        $recur=Goods::load($cateName);
//        dump($recur);
        $a= db('cate')
            ->where('cate_id', 'in', $recur)
            ->field('cate_name')
            ->select();
        $b= db('cate')
            ->alias('a')
            ->join('goods c', 'a.cate_id=c.cate_id')
            ->where('a.cate_id', 'in', $recur)
            ->field('brand')
            ->select();
        $m=[];
        for ($i=0;$i<count($b);$i++){
            $array = array_values($b[$i]);
            for ($k=0;$k<count($array);$k++){
                array_push($m,$array[$k]);
                $m=array_unique($m);
            }
        }
//        dump($m);exit();
        $c= db('cate')
            ->alias('a')
            ->join('goods c', 'a.cate_id=c.cate_id')
            ->where('a.cate_id', 'in', $recur)
            ->join('select b', 'c.goods_id=b.goods_id')
            ->field('b.sustainable,b.farmer,b.natural,b.local,b.visit,b.ancient,b.negative,b.agriculture,b.origin,b.gluten,b.material,b.gmo,b.produce')
            ->select();
        $data=[];
        for ($i=0;$i<count($c);$i++){
            $array = array_values($c[$i]);
            for ($k=0;$k<count($array);$k++){
                array_push($data,$array[$k]);
                $data=array_unique($data);
                $key = array_search('', $data);
                if ($key !== false){
                    array_splice($data, $key, 1);
                }
            }
        }
        $data=[$a,$m,$data];
        return $data;
    }

    static public function goods($cateName)
    {
        $recur=Goods::load($cateName);
        $data = db('cate')
            ->alias('a')
            ->join('goods c', 'a.cate_id=c.cate_id')
            ->where('a.cate_id', 'in', $recur)
            ->join('image k', 'c.goods_id=k.goods_id')
            ->where('k.is_face', '1')
            ->select();
        return $data;
    }

}