<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/index\view\lis\lis.html";i:1506506904;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品分类_一米市集</title>
    <link rel="icon" href="__STATIC__/index/img/favicon.ico">
    <link rel="stylesheet" href="__STATIC__/index/css/bootstrap.css">
    <link rel="stylesheet" href="__STATIC__/index/css/yimi-home.css">
    <link rel="stylesheet" href="__STATIC__/index/css/yimi-products.css">
    <link href="__STATIC__/index/style/header.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/footer.css" type="text/css" rel="stylesheet"/>
</head>
<body>
 <?php echo widget('Common/header'); ?>
<div class="inner_wrap" style="height: 1500px;">
    <div class="bread_wrap">
        <div class="cate_products_them">
            <img src="__STATIC__/index/img/4eb0ce5224a45a12f02df2461fcb2c67.jpg" alt="">
        </div>
        <div class="cate_photo_goods">
            <div class="cate_img_wrap">
                <div class="cate_img">
                    <a href="" style="background-image: url('__STATIC__/index/img/cate_img1.jpg')"></a>
                    <p class="cate_promo_goods_text">
                        <span class="p_name">有机紫水晶火龙果 250-350g/个</span>
                        <span class="p_info">￥46.00</span>
                </div>
                <div class="cate_img">
                    <a href="" style="background-image: url('__STATIC__/index/img/cate_img2.jpg')"></a>
                    <p class="cate_promo_goods_text">
                        <span class="p_name">上海烧卖「一只宝」 香菇肉丁</span>
                        <span class="p_info">￥36.00</span>
                </div>
                <div class="cate_img">
                    <a href="" style="background-image: url('__STATIC__/index/img/cate_img3.jpg')"></a>
                    <p class="cate_promo_goods_text">
                        <span class="p_name">生态慢养膳博士黑猪肋排</span>
                        <span class="p_info">￥46.00</span>
                </div>
                <div class="cate_img">
                    <a href="" style="background-image: url('__STATIC__/index/img/cate_img4.jpg')"></a>
                    <p class="cate_promo_goods_text">
                        <span class="p_name">有机醉金香葡萄</span>
                        <span class="p_info">￥43.00</span>
                </div>
                <div class="cate_img">
                    <a href="" style="background-image: url('__STATIC__/index/img/cate_img5.jpg')"></a>
                    <p class="cate_promo_goods_text">
                        <span class="p_name">有机巨玫瑰葡萄</span>
                        <span class="p_info">￥38.00</span>
                </div>
            </div>
            <div class="pre_btn"></div>
            <div class="next_btn"></div>
            <div class="cate_page_dot">
                <ul>
                    <li class="cate_dot" style="background-color:#15374A"></li>
                    <li class="cate_dot"></li>
                    <li class="cate_dot"></li>
                    <li class="cate_dot"></li>
                    <li class="cate_dot"></li>
                </ul>
            </div>
        </div>
        <div class="cate_products_pic">
            <div class="cate_artPic">
                <a href="" style="background-image: url('__STATIC__/index/img/926692f3584d610e0c7b098b38f0aa8b.jpg')"></a>
            </div>
            <div class="cate_artPic">
                <a href="" style="background-image: url('__STATIC__/index/img/49830e9e2d0753b719c95e1fafd63a01.jpg')"></a>
            </div>
        </div>
    </div>
    <div class="row">
        <!--左边-->
        <div class="search_bar col-md-2" style="height: 1200px;">
            <div class="cats">
                <div class="taggle_open"></div>
                <div class="ctl_header">分类</div>
                <div class="cats_con">
                    <ul id="cat_list">
                        <?php foreach($data[0][0] as $v): ?>
                        <li>
                            <a class="goods" name="">
                                <?php echo $v['name']; ?>
                                <span></span>
                            </a>
                        </li>
                        <?php endforeach; ?>
                        <li>
                            <a id="emptyGoods">
                                清空
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="cats">
                <div class="taggle_open"></div>
                <div class="ctl_header">分类</div>
                <div class="cats_con">
                    <ul id="cat_list">
                        <?php foreach($data[0][1] as $k): ?>
                        <li>
                            <a class="goods" name="">
                                <?php echo $k; ?>
                                <span></span>
                            </a>
                        </li>
                        <?php endforeach; ?>
                        <li>
                            <a id="emptyGoods">
                                清空
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="cats">
                <div class="taggle_open"></div>
                <div class="ctl_header">分类</div>
                <div class="cats_con">
                    <ul id="cat_list">
                        <?php foreach($data[0][2] as $n): ?>
                        <li>
                            <a class="goods" name="">
                                <?php echo $n; ?>
                                <span></span>
                            </a>
                        </li>
                        <?php endforeach; ?>
                        <li>
                            <a id="emptyGoods">
                                清空
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <input type="hidden" class="parent" value=<?php echo $data[1]; ?>>
        </div>
        <!--右边-->
        <div class="search_results col-md-10"style="height:800px;">
            <iframe name="goods_wrap" src="<?php echo url('Lis/load',['cateName'=>$data[1]]); ?>" frameborder="0" style="width: 100%;height: 800px;">

            </iframe>
        </div>
    </div>
</div>
 <?php echo widget('Common/footer'); ?>
<script src="__STATIC__/index/js/jquery-3.2.1.js"></script>
<script src="__STATIC__/index/js/ym-heard.js"></script>
<script src="__STATIC__/index/js/yimi-home.js"></script>
<script src="__STATIC__/index/js/yimi-products.js"></script>
</body>
</html>