<?php
namespace app\index\controller;
use think\Controller;
class Index extends  Verification{
    public function index(){
        $id=input('id');
        if (request()->isPost()){
                $keywords=input('keywords');
            $map['keywords']  = ['like','%'.$keywords.'%'];
            $data=db('article')
                ->field('id,title,pic,desc,time,cateid,keywords')
                ->where($map)
                ->order('time','desc')
                ->select();
        }
        elseif(empty($id)||!isset($id)){
            $data=db('article')
                ->field('id,title,pic,desc,time,keywords')
                ->order('time','desc')
                ->select();
        }else{
            $data=db('article')
                ->field('id,title,pic,desc,time,cateid,keywords')
                ->where('cateid',$id)
                ->order('time','desc')
                ->select();
            $da=db('article')
                ->alias('a')
                ->join('cate c','a.cateid=c.id')
                ->field('a.cateid,c.catename')
                ->where('a.cateid',$id)
                ->select();
//            dump($da);exit();
            $this->assign('da',$da[0]);
        }
//        dump($data);exit();
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function article($id){
        $data=db('article')
            ->field('content')
            ->find($id);
//        dump($data);exit();
        $this->assign('data',$data);
        return $this->fetch();
    }
}