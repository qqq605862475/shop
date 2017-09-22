<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/15
 * Time: 18:23
 */
namespace app\admin\validate;

use think\Validate;

class Goods extends Validate{

    //验证规则
    protected $rule=[
        'goods_name'=>'require|max:25|unique:goods',
        'sell_price'=>'require',
        'desc'=>'require',
        'market_price'=>'require',
        'store'=>'require',
        'cate_id'=>'require',
    ];

    //提示文字
    protected $message=[
        'goods_name.require' => '文章标题必填',
        'goods_name.max'     => '文章标题最多不能超过25个字符',
        'goods_name.unique'  => '文章标题已存在',
        'sell_price.require' => '销售价必填',
        'desc.require' => '文章描述必填',
        'market_price.require' => '市场价必填',
        'store.require' => '库存必填',
        'cate_id.require' => '分类必选',
    ];

    //验证场景
    protected $scene=[

        'add'=>['goods_name','sell_price', 'desc','market_price','store', 'cate_id'],
        'edit'=>['goods_name','sell_price', 'desc','market_price','store', 'cate_id'],
    ];

}




