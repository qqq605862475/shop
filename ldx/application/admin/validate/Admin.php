<?php
/**
 * Created by PhpStorm.
 * Admin: Administrator
 * Date: 2017/9/15
 * Time: 22:50
 */
namespace app\admin\validate;
use think\Validate;
class Admin extends Validate{
    protected $rule=[
        'username'=>'require|max:10|unique:admin',
        'password'=>'require|min:6',
    ];
    protected $message  =   [
        'username.require' => '名称必须',
        'username.max'     => '名称最多不能超过10个字符',
        'username.unique' => '名称必须唯一',
        'password.require' => '密码必须',
        'password.unique' => '密码必须唯一',
    ];
    protected $scene= [
        'edit'  =>  ['username'],
        'add'  =>  ['username','password'],
    ];
}