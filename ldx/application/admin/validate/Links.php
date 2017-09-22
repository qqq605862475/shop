<?php
/**
 * Created by PhpStorm.
 * Admin: Administrator
 * Date: 2017/9/15
 * Time: 22:50
 */
namespace app\admin\validate;
use think\Validate;
class Links extends Validate{
    protected $rule=[
        'title'=>'require|max:8|unique:links',
        'url'=>'require|min:6|url',
        'dec'=>'min:6|max:30',
    ];
    protected $message  =   [
        'title.require' => '名称必须',
        'title.max'     => '名称最多不能超过8个字符',
        'title.unique' => '名称必须唯一',
        'url.require' => '密码必须',
        'url.min' => '链接不能少于6个字符',
        'url.url' => '链接必须有效',
        'dec.min' => '链接描述最多不能超过30个字符',
    ];
    protected $scene= [
        'edit'  =>  ['title','url'],
        'add'  =>  ['title','url','dec'],
    ];
}