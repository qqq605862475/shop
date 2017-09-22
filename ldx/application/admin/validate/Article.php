<?php
/**
 * Created by PhpStorm.
 * Admin: Administrator
 * Date: 2017/9/15
 * Time: 22:50
 */
namespace app\admin\validate;
use think\Validate;
class Article extends Validate{
    protected $rule=[
        'title'=>'require|max:30|unique:article',
        'desc'=>'require|max:500|unique:article',
        'keywords'=>'require|max:20|unique:article',
        'author'=>'min:2',
        'content'=>'require|unique:article',
    ];
    protected $message  =   [
        'title.require' => '名称必须',
        'title.max'     => '名称最多不能超过30个字符',
        'title.unique' => '标题必须唯一',
        'desc.require' => '简介必须',
        'desc.max'     => '简介最多不能超过100个字符',
        'desc.unique' => '简介必须唯一',
        'keywords.require' => '关键字必须',
        'keywords.max'     => '关键字最多不能超过5个字符',
        'keywords.unique' => '关键字必须唯一',
        'content.require' => '内容必须',
        'content.unique' => '内容必须唯一',
    ];
}