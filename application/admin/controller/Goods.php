<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 10:48
 */

namespace app\admin\controller;

use app\admin\model\Goods as GoodsModel;
use app\admin\model\Cate as CateModel;

class Goods extends Base
{


    //商品列表
    public function index()
    {
        //查询所有商品信息
        $data = GoodsModel::allGoods();
        //把变量分配到模版
        $this->assign('data', $data);

        return $this->fetch("list");
    }

    //商品添加
    public function add()
    {
        //分类下拉
        $all=CateModel::allCate();
        $this->assign('all',$all);

        if (request()->isPost()) {
            //接受函数
            $data = [
                'goods_name' => input('goods_name'),
                'sell_price' => input('sell_price'),
                'market_price' => input('market_price'),
                'cate_id'=>input('cate_id'),
                'store' => input('store'),
                'desc' => input('desc'),
                'content' => input('content'),
            ];
            $image=[
            ];
            //判断图片有没有上传
            if ($_FILES['pic']['tmp_name']!=''){

                //上传图片
                $arr= $this->upload('pic');
                if ($arr['status']=='success'){
                    //把图片路径放入数据库
                    $image['image_url']=$arr['url'];

                    $pic = \think\Image::open('.'.$image['image_url']);
                    $dirName=dirname($image['image_url']);//路径名
                    $baseName=basename($image['image_url']);//文件名


                    $pic->thumb(650, 650)->save('.'.$dirName.'/650_'.$baseName);

                    $image['image_b_url']=$dirName.'/650_'.$baseName;

                    $pic->thumb(250, 250)->save('.'.$dirName.'/250_'.$baseName);
                    $image['image_m_url']=$dirName.'/250_'.$baseName;
                    $pic->thumb(100, 100)->save('.'.$dirName.'/100_'.$baseName);
                    $image['image_s_url']=$dirName.'/100_'.$baseName;


                }else{
                    //返回错误信息
                    return $this->error($arr['msg']);
                }


            }





            //判断是否上架
            if (input('maketable') == 'on') {
                $data['maketable'] = 1;
            } else {
                $data['maketable'] = 0;
            }

            //判断是否冻结库存
            if (input('freez') == 'on') {
                $data['freez'] = 1;
            } else {
                $data['freez'] = 0;
            }

            //判断是否热销
            if (input('is_hot') == 'on') {
                $data['is_hot'] = 1;
            } else {
                $data['is_hot'] = 0;
            }

            //判断是否新品
            if (input('is_new') == 'on') {
                $data['is_new'] = 1;
            } else {
                $data['is_new'] = 0;
            }

            //判断商品状态
               if (input('recycle') == 'on') {
                   $data['recycle'] = 1;
               } else {
                   $data['recycle'] = 0;
               }

            //接收关键字
            $keyword = input('keywords');
            $arr = str_replace('，', ',', $keyword);
            $data['keywords'] = $arr;

            //验证
            $validate= validate('Goods'); //获取表中的数据 Admin是类名 必须首字母大写
            if(!$validate->scene('add')->check($data)){//加了验证场景 并验证数据
                return $this->error($validate->getError());//自动验证提示错误
            }

            //添加时间
            $data['create_time']=time();

            //最近更新时间
            $data['last_modify']=time();

            //最近更新管理员名字

            //操作数据库
            $res=GoodsModel::add($data,$image);
            //
            //返回结果
            if($res){
                return $this->success('添加成功',url('Goods/index'));//成功返回
            }
            else{
                return $this->error('添加失败');//失败返回
            }
        }
        return $this->fetch();
    }

    //处理图片上传的方法
    private function upload($filename)
    {
        //获取表单上传的文件 判断是不是POST提交
        $file = request()->file($filename);

        //如果上传了文件
        if ($file) {
            //将上传文件存到指定路径   tp5\public\uploads
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');

            //上传成功后 获取上传信息
            if ($info) {

                //拼接图片完整路径
                $url = '/uploads/' . $info->getSaveName();
                //把路径中的反斜线替换成正斜线
                $url = str_replace('\\', '/', $url);


                return [
                    'status' => 'success',
                    'url' => $url,
                ];
            } else {
                //上传失败错误信息
                return [
                    'status' => 'error',
                    'msg' => $file->getError(),
                ];
            }
        }
    }

    //商品编辑
    public function edit(){
        $id=input('id');
        //查出分类信息
        $data=GoodsModel::getGoodsById($id);
        $this->assign('data',$data);

        //分类下拉
        $all=CateModel::allCate();
        $this->assign('all',$all);

        return $this->fetch();
    }

    //商品信息更新
    public function upd(){
        if(request()->isPost()){
            //接收参数
            $data=[
                'goods_id'=>input('goods_id'),
                'goods_name' => input('goods_name'),
                'sell_price' => input('sell_price'),
                'market_price' => input('market_price'),
                'cate_id'=>input('cate_id'),
                'store' => input('store'),
                'desc' => input('desc'),
                'content' => input('content'),
            ];
            //判断是否上架
            if (input('maketable') == 'on') {
                $data['maketable'] = 1;
            } else {
                $data['maketable'] = 0;
            }

            //判断是否冻结库存
            if (input('freez') == 'on') {
                $data['freez'] = 1;
            } else {
                $data['freez'] = 0;
            }

            //判断是否热销
            if (input('is_hot') == 'on') {
                $data['is_hot'] = 1;
            } else {
                $data['is_hot'] = 0;
            }

            //判断是否新品
            if (input('is_new') == 'on') {
                $data['is_new'] = 1;
            } else {
                $data['is_new'] = 0;
            }

            //判断商品状态
            if (input('recycle') == 'on') {
                $data['recycle'] = 1;
            } else {
                $data['recycle'] = 0;
            }

            //接收关键字
            $keyword = input('keywords');
            $arr = str_replace('，', ',', $keyword);
            $data['keywords'] = $arr;

            //验证
            $validate= validate('Goods'); //获取表中的数据 Admin是类名 必须首字母大写
            if(!$validate->scene('edit')->check($data)){     //加了验证场景 并验证数据
                return $this->error($validate->getError());      //自动验证提示错误
            }

            //最近更新时间
            $data['last_modify']=time();

            //最近更新管理员名字

            //操作数据库
            $res=GoodsModel::upd($data);

            //返回结果
            if($res){
                return $this->success('修改成功',url('Goods/index'));//成功返回
            }
            else{
                return $this->error('修改失败');//失败返回
            }


        }
    }

    //信息删除
    public function del(){
        //接收参数
        $id=input('id');
        //操作数据库
        $res=GoodsModel::del($id);
        //返回结果

        if($res){
            return $this->success('操作成功',url('Goods/index'));//成功返回
        }
        else{
            return $this->error('操作失败');//失败返回
        }



    }


}