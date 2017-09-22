<?php
namespace app\admin\controller;
use think\Loader;
use app\admin\controller\Verification;
class Tags extends Verification{
   public function index(){
    $data=Db('tags')->paginate(3);
    $this->assign('data', $data);
    return $this->fetch();
}
    public function add(){
    if (request()->isPost()) {
        $data = [
            'tagsname' => input('tags')
        ];
        $validate = validate('Tags');
        if(!$validate->check($data)){
            return $this->error($validate->getError());
        }
        $returned =Db('tags')->insert($data);
        if ($returned) {
            return $this->success('添加成功', ('Tags/add'));
        } else {
            return $this->error('添加失败');
        }
    }
    return $this->fetch();
}
    public function edit($id)
{
    if(request()->isPost()){
        $data = [
            'id'=>input('id'),
            'tagsname' => input('tags')
        ];
        $validate = validate('tags');
        if(!$validate->check($data)){
            return $this->error($validate->getError());
        }
        $rul =Db('tags')->update($data);
        if ($rul!==false) {
            return $this->success('修改成功', ('Tags/index'));
        } else {
            return $this->error('修改失败');
        }
    }
    $data =Db('tags')->find($id);
//        echo db()->getLastSql();exit;
    $this->assign('data', $data);
    return $this->fetch();
}
    public function del($id)
{
    $returned = Db('tags')->delete($id);
    if ($returned) {
        return $this->success('删除成功', ('Tags/index'));
    } else {
        return $this->error('添加失败');
    }
}
}