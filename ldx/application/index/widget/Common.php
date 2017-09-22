<?php
namespace app\index\widget;
use think\Controller;
class Common extends Controller{
    public  function  header(){
        $admin=db('cate')->select();
        $tags=db('tags')->select();
        $this->assign('cate', $admin);
        $this->assign('data', $tags);
        return $this->fetch('Admin/header');
    }
    public  function  right(){
        $admin=db('article')
            ->field('id,title,click')
            ->order('click','desc')
            ->limit('4')
            ->select();
        $date=db('article')
            ->field('id,title,state,click')
            ->order('click','desc')
           ->where('state','1')
            ->limit('4')
            ->select();
        $this->assign('data',$admin);
        $this->assign('admin',$date);
        return $this->fetch('Admin/right');
    }
    public  function  footer(){
        $data=db('article')
            ->field('id,title,pic')
            ->order('click,time','desc')
            ->limit('8')
            ->select();
        $this->assign('data',$data);
        return $this->fetch('Admin/footer');
    }
}