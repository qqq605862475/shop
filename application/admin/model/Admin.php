<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/21
 * Time: 14:46
 */
namespace app\admin\model;
use think\Controller;
class Admin extends Controller{
//    加载数据
    static public function getData($name,$id){
        if (empty($id)&&$id!='0'){
            $data=db($name)
                ->paginate(3);
        }else{
            $data=db($name)
                ->where('manager_id',$id)
                ->paginate(3);
        }
        if(!isset($data)){
            return false;
        }
        $page=$data->render();
        $data=$data->all();
        return [
            'data'=>$data,
            'page'=>$page
        ];
    }
//    用户添加
    static public function addData($data){
       $rul=db('manager')->insert($data);
        if ($rul!==false) {
            return [
                'state'=>'succeed',
                'msg'=>'添加成功',
            ];
        } else {
            return [
                'state'=>'error',
                'msg'=>'添加失败',
            ];
        }
    }
//    用户修改
    static public function editData($data){
        $rul=db('manager')->update($data);
        if ($rul!==false) {
            return [
                'state'=>'succeed',
                'msg'=>'修改成功',
            ];
        } else {
            return [
                'state'=>'error',
                'msg'=>'修改失败',
            ];
        }
    }
//    用户删除
    static public function delData($id){
        $rul=db('manager')->delete($id);
        if ($rul!==false) {
            return [
                'state'=>'succeed',
                'msg'=>'删除成功',
            ];
        } else {
            return [
                'state'=>'error',
                'msg'=>'删除失败',
            ];
        }
    }
}