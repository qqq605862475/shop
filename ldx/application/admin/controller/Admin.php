<?php
namespace app\admin\controller;
use think\Loader;
use app\admin\controller\Verification;
class Admin extends Verification
{
    public function add()
    {
        if (request()->isPost()) {
//          $data=[
//              'username'=>$_POST['username'],
//              'password'=>$_POST['password']
//          ];
            $data = [
                'username' => input('username'),
                'password' => input('password')
            ];
            $validate =Loader::validate('Admin');
//            var_dump($validate);exit();
            if(!$validate->scene('add')->check($data)){
                return $this->error($validate->getError());
            }
            $data['password'] = md5($data['password']);
            $returned = \think\Db::name('admin')->insert($data);
            if ($returned) {
                return $this->success('添加成功', ('Admin/add'));
            } else {
                return $this->error('添加失败');
            }
        }
        return $this->fetch();
    }

    public function edit($id){
        if(request()->isPost()){
            $data = [
                'id'=>input('id'),
                'username' => input('username'),
            ];
//        $validate = \think\Loader::validate('Admin');
            $validate = validate('Admin');
            if(!$validate->scene('edit')->check($data)){
                return $this->error($validate->getError());
            }
            $password=input('password');
            if ($password!=''){
                $data['password'] = md5($password);
            }
            $rul = \think\Db::name('admin')->update($data);
            session('admin',$data);
            if ($rul!==false) {
                return $this->success('修改成功', ('Admin/lis'));
            } else {
                return $this->error('修改失败');
            }

        }
        $data = \think\Db::name('admin')->find($id);
//        echo db()->getLastSql();exit;
        $this->assign('data', $data);
        return $this->fetch();
    }

    public function lis()
    {
//        $admin=\think\Db::name('admin')->select();
        $admin = db('admin')->paginate(3);
        $this->assign('data', $admin);
        return $this->fetch('list');
    }

    public function del($id)
    {
//       $id=input("id");
//       echo $id;
        if ($id == 1) {
            return $this->error('管理员不能被删除');
        }
        $returned = \think\Db::name('admin')->delete($id);
        if ($returned) {
            return $this->success('删除成功', ('Admin/lis'));
        } else {
            return $this->error('添加失败');
        }
    }


    }
