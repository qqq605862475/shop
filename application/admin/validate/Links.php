<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/15
 * Time: 18:23
 */
namespace app\admin\validate;

use think\Validate;

class Links extends Validate{

    //验证规则
    protected $rule=[

        'title'=>'require|max:25|unique:links',
        'url'=>'require|unique:links',
    ];

    //提示文字
    protected $message=[
        'title.require' => '标题必填',
        'title.max'     => '标题最多不能超过25个字符',
        'title.unique'  => '标题已存在',
        'url.require' => '链接必填',
        'url.unique'  => '链接已存在',
    ];

    //验证场景
    protected $scene=[

        'add'=>['title','url'],
        'edit'=>['title','url'],
    ];

}




