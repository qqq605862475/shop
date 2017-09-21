<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/15
 * Time: 18:23
 */
namespace app\admin\validate;

use think\Validate;

class Tags extends Validate{

    //验证规则
    protected $rule=[

        'tagname'=>'require|max:25|unique:tags',

    ];

    //提示文字
    protected $message=[
        'tagname.require' => '标题必填',
        'tagname.max'     => '标题最多不能超过25个字符',
        'tagname.unique'  => '标题已存在',
    ];

    //验证场景
    protected $scene=[

        'add'=>['tagname'],
        'edit'=>['tagname'],
    ];

}




