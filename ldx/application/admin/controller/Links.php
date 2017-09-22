<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/16
 * Time: 11:44
 */
namespace app\admin\controller;
use think\Db;
use app\admin\controller\Verification;
class links extends Verification{
    public function index(){
        $data=Db('links')->paginate(3);
        $this->assign('data', $data);
        return $this->fetch();
    }
    public function add(){
        if (request()->isPost()) {
            $data = [
                'title' => input('title'),
                'url' => input('url'),
                'dec'=> input('dec')
            ];
            $validate = validate('Links');
            if(!$validate->scene('add')->check($data)){
                return $this->error($validate->getError());
            }
            $returned =Db('links')->insert($data);
            if ($returned) {
                return $this->success('添加成功', ('Links/add'));
            } else {
                return $this->error('添加失败');
            }
        }
        return $this->fetch();
    }
    public function edit($id)
    {
        if (request()->isPost()){
            $data = [
                'id'=>input('id'),
                'title' => input('title'),
                'url' => input('url'),
            ];
            $validate = validate('Links');
            if(!$validate->scene('edit')->check($data)){
                return $this->error($validate->getError());
            }
            $dec=input('dec');
            if ($dec!=''){
                $data['dec'] =$dec;
            }
            $rul =Db('links')->update($data);
            if ($rul!==false) {
                return $this->success('修改成功', ('Links/index'));
            } else {
                return $this->error('修改失败');
            }
        }
        $data =Db('links')->find($id);
//        echo db()->getLastSql();exit;
        $this->assign('data', $data);
       return $this->fetch();
    }
    public function del($id)
    {
        $returned = Db('links')->delete($id);
        if ($returned) {
            return $this->success('删除成功', ('Links/index'));
        } else {
            return $this->error('添加失败');
        }
    }
}