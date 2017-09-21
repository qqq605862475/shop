<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/15
 * Time: 18:23
 */
namespace app\admin\validate;

use think\Validate;

class Cate extends Validate{

    //验证规则
    protected $rule=[

        'name'=>'require|max:25|unique:cate',

    ];

    //提示文字
    protected $message=[
        'name.require' => '分类名称必填',
        'name.max'     => '分类名称最多不能超过25个字符',
        'name.unique'  => '分类名称已存在',
    ];

    //验证场景
    protected $scene=[

        'add'=>['name'],
        'edit'=>['name'],
    ];

}




