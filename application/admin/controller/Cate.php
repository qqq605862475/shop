<?php
namespace app\admin\controller;

use think\Controller;
use app\admin\model\Cate as CateModel;

class Cate extends Base
{

    public function index()
    {
        //查询所有分类
        $data=CateModel::allCate();
        //把变量分配到模版
        $this->assign('data',$data);

        //调用函数跳转
        return $this->fetch("list");
    }

    //添加顶级分类
    public function addTopCate(){

        if (request()->isPost()){
            //接收参数
        $data=[
            'name'=>input('name')
        ];
        $data['pid']=0;
        $data['level']=0;
        //验证
        $validate= validate('Cate'); //获取表中的数据 Admin是类名 必须首字母大写
        if(!$validate->scene('add')->check($data)){     //加了验证场景 并验证数据
            return $this->error($validate->getError());      //自动验证提示错误
        }

        //操作数据库
        $res=CateModel::addTopCate($data);
        //返回结果
        if($res){
            return $this->success('添加成功',url('Cate/index'));//成功返回
        }
        else{
            return $this->error('添加失败');//失败返回
        }

        }
        return $this->fetch();
    }

    //添加子分类
    public function addCate(){
        if(request()->isPost()){
            $data=[
                'name'=>input('name'),
            ];
            //接收父类的id
            $parentId=input('id');
            $data['parentId']=$parentId;
            //子类的pid是父类的id
            $data['pid']=$parentId;

            //验证
            $validate= validate('Cate'); //获取表中的数据 Admin是类名 必须首字母大写
            if(!$validate->scene('add')->check($data)){     //加了验证场景 并验证数据
                return $this->error($validate->getError());      //自动验证提示错误
            }
            //添加子分类
            $res=CateModel::addCate($data);
            //
            //返回结果
            if($res){
                return $this->success('添加成功',url('Cate/addCate'));//成功返回
            }
            else{
                return $this->error('添加失败');//失败返回
            }

        }

        //接收分类id
        $id=input('id');
        //查出数据
        $data= CateModel::getCateById($id);
        $this->assign('data',$data);

        return $this->fetch();
    }

    //编辑分类名称
    public function edit(){
        //查出参数
        $id=input('id');
        if(request()->isPost()){
            $data=[
                'id'=>$id,
                'name'=>input('name')
            ];
            //验证
            $validate= validate('Cate'); //获取表中的数据 Admin是类名 必须首字母大写
            if(!$validate->scene('add')->check($data)){     //加了验证场景 并验证数据
                return $this->error($validate->getError());      //自动验证提示错误
            }
            //操作数据库
            $res=CateModel::editCate($data);

            //返回结果
            if($res){
                return $this->success('修改成功',url('Cate/index'));//成功返回
            }
            else{
                return $this->error('修改失败');//失败返回
            }
        }

        //查出分类信息
        $data=CateModel::getCateById($id);
        $this->assign('data',$data);

        return $this->fetch();
    }

    //删除分类
    public function del(){
        $id=input('id');
        //删除分类
        $res=CateModel::del($id);
        if($res['status']=='success'){
            return $this->success($res['msg'],'index');
        }else{
            return $this->error($res['msg']);
        }

    }

    //添加分类
    public function add(){

        $all=CateModel::allCate();
        $this->assign('all',$all);
        if(request()->isPost()){
            $data=[
                'name'=>input('name'),
            ];
            $parentId = input('id');

            //验证
            $validate= validate('Cate'); //获取表中的数据 Admin是类名 必须首字母大写
            if(!$validate->scene('add')->check($data)){     //加了验证场景 并验证数据
                return $this->error($validate->getError());      //自动验证提示错误
            }

            if(!empty($parentId)){
                $data['parentId']=$parentId;
                //子类的pid是父类的id
                $data['pid']=$parentId;
                $res=CateModel::addCate($data);

            }else{
                $data['pid']=0;
                $data['level']=0;
                $res=CateModel::addTopCate($data);

            }
            //返回结果
            if($res){
                return $this->success('添加成功',url('Cate/index'));//成功返回
            }
            else{
                return $this->error('添加失败');//失败返回
            }


        }






       return $this->fetch();
    }



}