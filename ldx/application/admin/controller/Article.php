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
class Article extends Verification
{
    public function index()
    {
        $data = db('article')
            ->alias('a')
            ->field('a.id,a.title,a.author,a.time,a.pic,a.state,a.keywords,a.click,b.catename')
            ->join('cate b', 'a.cateid=b.id')
            ->paginate(3);
//        echo db()->getLastSql();exit();
        $this->assign('data', $data);
        return $this->fetch();
//        Db::table('acticle')
//            ->alias('a')
//            ->join('think_work w','a.id = w.artist_id')
//            ->join('think_card c','a.card_id = c.id')
//            ->select();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = [
                'title' => input('title'),
                'cateid' => input('cateid'),
                'desc' => input('desc'),
                'keywords' => input('keywords'),
                'author' => input('author'),
                'content' => input('content')
            ];
            if (input('state') == 'on') {
                $data['state'] = 1;
            } else {
                $data['state'] = 0;
            }
            $data['time'] = time();
            if ($_FILES['pic']['tmp_name'] != '') {
                $arr = $this->upload('pic');
                if ($arr['status'] == 'success') {
                    $data['pic'] = $arr['url'];
                } else {
                    return $this->error($arr['msg']);
                }
            }
            $validate = validate('Article');
            if(!$validate->check($data)){
                return $this->error($validate->getError());
            }
            $returned = Db('article')->insert($data);
            if ($returned) {
                return $this->success('添加成功', ('Article/add'));
            } else {
                return $this->error('添加失败');
            }

        }
        $data = Db('cate')->select();
        $this->assign('data', $data);
        return $this->fetch();
    }

    public function edit($id)
     {
     if(request()->isPost()){
         $data = [
             'id'=>input('id'),
             'title' => input('title'),
             'desc' => input('desc'),
             'cateid' => input('cateid'),
             'author' => input('author'),
             'content' => input('content'),
         ];
           $keywords=input('keywords');
           $keyword=str_replace('，',',',$keywords);
         $data['keywords']=$keyword;
         if (input('state') == 'on') {
             $data['state'] = 1;
         } else {
             $data['state'] = 0;
         }
            $validate = validate('Article');
            if(!$validate->scene('edit')->check($data)){
                return $this->error($validate->getError());
            }
         if ($_FILES['pic']['tmp_name'] != '') {
             $arr = $this->upload('pic');
             if ($arr['status'] == 'success') {
                 $urlDate=db('article')->field('pic')->find($data['id']);
                 @unlink('.'.$urlDate['pic']);
                 $data['pic'] = $arr['url'];
             } else {
                 return $this->error($arr['msg']);
             }

         }
         $rul =Db('article')->update($data);
         if ($rul!==false) {
             return $this->success('修改成功', ('Article/index'));
         } else {
             return $this->error('修改失败');
         }
     }
        $data1 =Db('article')->find($id);
        $data2 = Db('cate')->select();
//        echo db()->getLastSql();exit;
        $this->assign('data1',$data1);
        $this->assign('data2',$data2);
        return $this->fetch();
    }
    public function del($id)
    {

        $returned = Db('Article')->field('pic')->find($id);
//        dump($url);exit();
        $url= $returned['pic'];
        $rel=@unlink('.'.$url);
        $cc = Db('Article')->delete($id);
        if ($cc) {
            return $this->success('删除成功', ('Article/index'));
        } else {
            return $this->error('删除失败');
        }

    }
    private function upload($filename)
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file($filename);

        // 移动到框架应用根目录/public/uploads/ 目录下
        if ($file) {
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if ($info) {
                // 成功上传后 获取上传信息
                // 输出 jpg
//                echo $info->getExtension();
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                $url = '/uploads/' . $info->getSaveName();
                $url = str_replace('\\', '/', $url);
                return [
                    'status' => 'success',
                    'url' => $url
                ];
//                echo $info->getSaveName();
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
//                echo $info->getFilename();
            } else {
                // 上传失败获取错误信息
//                echo $file->getError();
                return [
                    'status' => 'error',
                    'msg' => $file->getError()
                ];
            }
        }
    }
}