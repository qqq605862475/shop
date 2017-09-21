<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/15
 * Time: 18:23
 */
namespace app\admin\validate;

use think\Validate;

class Article extends Validate{

    //验证规则
    protected $rule=[

        'title'=>'require|max:25|unique:article',
        'cateid'=>'require',
        'desc'=>'require',
        'author'=>'require',
    ];

    //提示文字
    protected $message=[
        'title.require' => '文章标题必填',
        'title.max'     => '文章标题最多不能超过25个字符',
        'title.unique'  => '文章标题已存在',
        'cateid.require' => '栏目必选',
        'desc.require' => '文章描述必填',
        'author.require' => '文章作者必填',
    ];

    //验证场景
    protected $scene=[

        'add'=>['title','cateid', 'desc','author'],
        'edit'=>['title', 'desc','author'],
    ];

}




