<?php
/**
 * Created by PhpStorm.
 * Admin: Administrator
 * Date: 2017/9/15
 * Time: 22:50
 */
namespace app\admin\validate;
use think\Validate;
class Cate extends Validate{
    protected $rule=[
        'catename'=>'require|max:8|unique:cate',

    ];
    protected $message  =   [
        'catename.require' => '名称必须',
        'catename.max'     => '名称最多不能超过8个字符',
        'catename.unique' => '名称必须唯一',
    ];
}