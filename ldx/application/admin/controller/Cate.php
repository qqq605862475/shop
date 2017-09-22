<?php
namespace app\admin\controller;
use think\Loader;
use app\admin\controller\Verification;
class Cate extends Verification{
   public function index(){
    $data=Db('cate')->paginate(3);
    $this->assign('data', $data);
    return $this->fetch();
}
    public function add(){
    if (request()->isPost()) {
        $data = [
            'catename' => input('cate')
        ];
        $validate = validate('Cate');
        if(!$validate->check($data)){
            return $this->error($validate->getError());
        }
        $returned =Db('cate')->insert($data);
        if ($returned) {
            return $this->success('添加成功', ('Cate/add'));
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
                'catename' => input('cate')
            ];
            $validate = validate('cate');
            if(!$validate->check($data)){
                return $this->error($validate->getError());
            }
            $rul =Db('cate')->update($data);
            if ($rul!==false) {
                return $this->success('修改成功', ('cate/index'));
            } else {
                return $this->error('修改失败');
            }
        }
    $data =Db('cate')->find($id);
//        echo db()->getLastSql();exit;
    $this->assign('data', $data);
    return $this->fetch();
}
    public function del($id)
{
    $returned = Db('cate')->delete($id);
    if ($returned) {
        return $this->success('删除成功', ('Cate/index'));
    } else {
        return $this->error('删除失败');
    }
}
}