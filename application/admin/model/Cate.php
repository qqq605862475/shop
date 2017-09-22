<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/20
 * Time: 15:46
 */
namespace app\admin\model;

use think\Model;

class Cate extends Model {


    //查出所有分类
    static public function allCate(){
        $data=db('cate')->order('path asc')->paginate(8);
        $all=db('cate')->select();

        $page=$data->render();
        //拿出所有数据 返回二维数组
        $data=$data->all();
        foreach ($data as $k =>$v){
            //把字符重复几次
            $data[$k]['name'] =str_repeat('--',$v['level']).$v['name'];

        }
        foreach ($all as $k =>$v){
            //把字符重复几次
            $all[$k]['name'] =str_repeat('--',$v['level']).$v['name'];

        }

        return [
            'data'=>$data,
            'page'=>$page,
            'all'=>$all
        ];

    }

      //添加顶级分类
    static public function addTopCate($data){
        if(empty($data)){
            return false;
        }
        //添加数据库--返回自己的主键 id
        $id=db('cate')->insertGetId($data);
        if(!$id){
            return false;
        }
        //修改path字段
        $arr=[
            'id'=>$id,//修改条件
            'path'=>$id,
        ];
        $res=db('cate')->update($arr);

        return $res!==false?true:false;
    }

    //根据分类主键id 查出分类信息
    static public function getCateById($id){
        if(!$id){
            return false;
        }
        $data=db('cate')->find($id);
        return $data??false;

    }

    //添加子分类
    static public function addCate($data){
        if(empty($data)){
            return false;
        }
        //查出父类的path和父类的level
        $parent=db('cate')->find($data['parentId']);
        if(empty($parent)){
            return false;
        }
        //定义子类的level
        $level=$parent['level']+1;
        //组装子类的数据
        $arr=[
            'name'=>$data['name'],
            'pid'=>$data['pid'],
            'level'=>$level
        ];
        //添加数据
        $pk =db('cate')->insertGetId($arr);
        if(!$pk){
            return false;
        }
        //修改子类的path
        $where=[
            'path'=>$parent['path'].','.$pk,//子类的path 就是父类的path 拼上自己的主键id 中间用英文逗号
            'id'=>$pk
        ];
        //修改数据
        $res=db('cate')->update($where);
        return $res!==false?true:false;
    }


    //修改分类名称
    static public function editCate($data){
        if(empty($data)){
            return false;
        }

        //修改数据
        $res=db('cate')->update($data);
        return $res!==false?true:false;

    }

    //删除分类
    static public function del($id){
        $response=[
            'status'=>'error',
            'msg'=>''
        ];
        if(!$id){
            $response['msg']= '参数错误';
            return $response;
        }
        //该分类下有子类 不能删除
        //判断下有没有子分类 父类的id就是子类的pid
        $data=db('cate')->where(['pid'=>$id])->find();
        if(!empty($data)){
            $response['msg']='该分类下有子类 不能删除';
            return $response;
        }
        //如果分类下有商品 不能删除分类



        //删除分类
        $res= db('cate')->delete($id);
        if ($res){
            $response=[
                'status'=>'success',
                'msg'=>'删除成功'
            ];
        }else{
            $response=[
                'status'=>'error',
                'msg'=>'删除失败'
            ];
        }

        return $response;

    }





}