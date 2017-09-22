<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Loader;
use think\Validate;
use app\admin\model\Admin as Kk;
class Admin extends Base
{
//    加载管理员列表
  public function index(){
      $name='manager';
      $id=null;
      $data=Kk::getData($name,$id);
//      dump($data);exit();
      $this->assign('indexData',$data);
      return $this->fetch('admin/list');
  }
//   添加用户
    public function add(){
        //        判断是否为post模式接收数据
        if (request()->isPost()){
            $data=[
                'username'=>input('username'),
                'password'=>md5(input('password')),
            ];
//            判断用户是否冻结
            if(input('lock')=='on'){
                $data['lock']=1;
            }else{
                $data['lock']=0;
            };
            $data['create_time']=time();
            $validate= validate('Admin'); //获取表中的数据 Admin是类名 必须首字母大写
            if(!$validate->scene('add')->check($data)){//加了验证场景 并验证数据
                return $this->error($validate->getError());//自动验证提示错误
            }
            $data['ip']= $_SERVER["REMOTE_ADDR"];
            $rul=Kk::addData($data);
//            判断状态
            if ($rul['state']=='succeed') {
                return $this->success($rul['msg'], ('Admin/index'));
            } else {
                return $this->error($rul['msg']);
            }
//            dump($data);exit();
        }
//      加载用户添加模版
        $data=[
            'way'=>1,
            'manager_id'=>'',
            'username'=>'示列：小明',
            'password'=>'',
            'lock'=>''
        ];
//        dump($data);exit();
        $this->assign('aeData',$data);
        return $this->fetch('admin/list');
    }
//    编辑用户
    public function edit(){
        //        判断是否为post模式接收数据
        if (request()->isPost()){
            $data=[
                'manager_id'=>input('manager_id'),
                'username'=>input('username'),
            ];
            $password=input('password');
            if ($password!=''){
                $data['password'] = md5($password);
            }
            if(input('lock')=='on'){
                $data['lock']=1;
            }else{
                $data['lock']=0;
            };
            $validate = validate('Admin');
            if(!$validate->scene('edit')->check($data)){
                return $this->error($validate->getError());
            }
            $rul=Kk::editData($data);
//            判断状态
            if ($rul['state']=='succeed') {
                return $this->success($rul['msg'], ('Admin/index'));
            } else {
                return $this->error($rul['msg']);
            }
//            dump($data);exit();
        }
//        将要修改的用户数据取出送到模版
        $id=input('id');
        $name='manager';
        $data=Kk::getData($name,$id);
        $data['data'][0]['way']=2;
//        dump($data);exit();
//        dump($data);exit();
        $this->assign('aeData', $data['data'][0]);
        return $this->fetch('admin/list');
    }
//    删除用户
    public function del($id)
    {
        $rul=Kk::delData($id);
//            判断状态
        if ($rul['state']=='succeed') {
            return $this->success($rul['msg'], ('Admin/index'));
        } else {
            return $this->error($rul['msg']);
        }
    }
}