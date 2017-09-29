<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/index\view\Lis\goods.html";i:1506506904;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品分类_一米市集</title>
    <link rel="icon" href="__STATIC__/index/img/favicon.ico">
    <link rel="stylesheet" href="__STATIC__/index/css/bootstrap.css">
    <link rel="stylesheet" href="__STATIC__/index/css/yimi-home.css">
    <link rel="stylesheet" href="__STATIC__/index/css/yimi-products.css">
</head>
<body>
   <div id="dataContent" style="width: 915px;">
       <div class="head">
           <div class="pro_count">
               <?php $cot=count($data);?>
               共 <span><?php echo $cot; ?></span> 件
           </div>
           <div class="btn">价格</div>
           <div class="btn">购买</div>
           <div class="btn">评价</div>
           <div class="btn strongTag">综合</div>
       </div>
      <?php foreach($data as $key=>$v): ?>
        <div class="goods_wrap_unit">
                    <div class="goods_wrap">
                        <div class="rank"><?php echo $key+1; ?></div>
                        <div class="goods_pic">
                            <img src="__STATIC__/index/img/hot.png" class="goods_pic_odds">
                            <a href="<?php echo url('Article/index',['id'=>$v['goods_id']]); ?>" target="_blank">
                                <div style="background-image: url('<?php echo $v['image_url']; ?>');height: 180px;" class="goods_pic_content"></div>
                            </a>
                            <div class="btn_add_reduce" style="display: none">
                                <span class="num_show">0</span>
                            </div>
                            <div class="goods_redu" style="display: none"></div>
                            <div class="goods_add" style="display: none"></div>
                            <span class="hover_bg" style="display: none"></span>
                        </div>
                        <h3 class="goods_name" style="overflow: hidden;height: 36px"><a href="<?php echo url('Article/index',['id'=>$v['goods_id']]); ?>" target="_blank"><?php echo $v['goods_name']; ?></a></h3>
                        <div>
                            <a href="" class="des">一米市集严选</a>
                            <span class="product_unit">100g/份</span>
                        </div>
                        <div class="goods_price">
                            <div class="selling_price">
                                <span class="discount_price">￥<?php echo $v['sell_price']; ?>.00</span>
                            </div>
                        </div>
                    </div>
                </div>
      <?php endforeach; ?>
   </div>
   <script>
   </script>
   <script src="__STATIC__/index/js/jquery-3.2.1.js"></script>
   <script src="__STATIC__/index/js/yimi-home.js"></script>
   <script src="__STATIC__/index/js/yimi-products.js"></script>
</body>
</html>