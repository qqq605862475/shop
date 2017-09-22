<?php
/**
 * Created by PhpStorm.
 * Admin: Administrator
 * Date: 2017/9/15
 * Time: 22:50
 */
namespace app\admin\validate;
use think\Validate;
class Tags extends Validate{
    protected $rule=[
        'tagsname'=>'require|max:8|unique:tags',

    ];
    protected $message  =   [
        'tagsname.require' => '名称必须',
        'tagsname.max'     => '名称最多不能超过8个字符',
        'tagsname.unique' => '名称必须唯一',
    ];
}