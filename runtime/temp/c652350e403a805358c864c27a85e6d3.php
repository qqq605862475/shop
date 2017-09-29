<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:108:"C:\Users\Administrator\Desktop\UPUPW_NP7.0\htdocs\shop\public/../application/index\view\article\article.html";i:1506673706;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品详情</title>
    <link rel="stylesheet" href="__STATIC__/index/animate.css">
    <link href="__STATIC__/index/style/header.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/footer.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/article.css" type="text/css" rel="stylesheet"/>
    <script src="__STATIC__/index/jquery-1.8.3.min.js"></script>



</head>
<body style="height:100px">
<?php echo widget('Common/header'); ?>
<main>
    <!--最上-->
    <div class="top">
        <div class="top_lf">
            <!--  商品相册  -->
            <div class="pic">
                <?php foreach($pic as $v): ?>
                <a href="#" style="background-image:url(<?php echo $v['image_s_url']; ?>);opacity: 0.3"></a>
                <?php endforeach; ?>
            </div>
            <div class="big">
                <?php foreach($pic as $v): ?>
                <a href="#" style="background-image:url(<?php echo $v['image_b_url']; ?>);display: none"></a>
                <?php endforeach; ?>
            </div>
            <script>
                $(function () {
                    $(".pic a").eq(0).css({"opacity":"1"});
                    $(".big a").eq(0).css({"display":"block"});
                })
                $(".pic a").hover(function () {
                    var i=$(this).index();
//                    console.log(i);
                    $(this).css({"opacity":"1"}).siblings().css({"opacity":"0.3"});
                    $(".big a").eq(i).css({"display":"block"}).siblings().css({"display":"none"});
                });


            </script>


        </div>

        <div class="top_lr">
            <div class="titie">
                <!--关键字-->
                <div class="keywords">
                    <span><?php echo $data['keywords']; ?></span>
                </div>
                <!--商品名称-->
                <div class="name">
                    <span><?php echo $data['goods_name']; ?></span>
                </div>
                <!--评分-->
                <div class="img_1">
                    <span>5.0</span>
                </div>
                <!--商品描述-->
                <div class="desc">
                    <span><?php echo $data['desc']; ?></span>
                </div>
                <!--售价-->
                <div class="sell_price">
                    <span>￥<?php echo $data['sell_price']; ?>.00</span>
                </div>
                <div style="width: 360px;height: 200px;float: left">
                </div>

                <!--库存-->
                <div class="store">
                    <div class="kucun">
                        <div class="stitle">
                            <span>库存</span>
                        </div>
                        <div class="svalue">
                            <span><?php echo $data['store']; ?></span>
                        </div>
                    </div>

                    <div class="kucun">
                        <div class="stitle">
                            <span>热销程度</span>
                        </div>
                        <div class="svalue">
                            <span><?php echo $data['is_hot']==1?"热销":"一般"; ?></span>
                        </div>
                    </div>

                    <div class="kucun">
                        <div class="stitle">
                            <span>新品程度</span>
                        </div>
                        <div class="svalue">
                            <span><?php echo $data['is_new']==1?"新品":"一般"; ?></span>
                        </div>
                    </div>
                </div>

                <!--购物-->
                <div class="shop">
                    <div class="number">
                        <div class="num_lf">-</div>
                        <input id="num" type="text" name="goods_num" value="1">
                        <div class="num_lr">+</div>
                    </div>

                    <div class="car">
                        <button id="toCar" type="button" label="加入购物车" rel="_request" goods_id="<?php echo $data['goods_id']; ?>">
                            加入购物车
                        </button>
                    </div>


                </div>
                <script>
                    $(function () {
                        $('#toCar').click(function () {
                            var goods_id = $('#toCar').attr('goods_id');
                            var goods_num = $('#num').val();
                            $.ajax({
                                type:'POST',
                                dataType:'json',
                                data:{goods_id:goods_id,goods_num:goods_num},
                                //点击加入购物车跳转到下面方法（执行car方法）
                                url:"<?php echo url('Car/car'); ?>",
                                //加入购物车成功后跳转到购物车详情页（执行index方法）
                                success:function (d) {
                                    if(d.status == 'success'){
                                        alert(d.msg);
                                        location.href= "<?php echo url('Car/index'); ?>";
                                    }
                                }
                            })


                        })
                    })
                </script>



            </div>

        </div>
    </div>

    <!--商品详情-->
    <div class="bottom">
        <div class="bo_lf" >
            <?php echo $data['content']; ?>

        </div>

        <div class="bo_lr">
            <div class="b_title">
                相关分类---<?php echo $data['name']; ?>
            </div>
            <div class="lis">
                <ul>
                    <li><a href="#" target="_blank">相关阅读</a></li>
                    <li><a href="#" target="_blank">相关阅读</a></li>
                    <li><a href="#" target="_blank">相关阅读</a></li>
                    <li><a href="#" target="_blank">相关阅读</a></li>
                </ul>
            </div>
            <div class="b_title">
                <?php echo $data['keywords']; ?>的相关产品
            </div>
            <div class="pi">
                <ul>
                    <li>
                       <div class="img_2">
                           <img src="__STATIC__/index/img/c21.jpg" width="100%">
                       </div>
                        <div class="titl">
                            <a href="#">山中鲜有机鸡蛋2盒</a>
                        </div>
                        <div class="key">
                            <a href="#" title="山中鲜">山中鲜</a>
                        </div>
                        <div class="price">
                            <p>￥54.00</p>
                        </div>
                    </li>
                    <li>
                        <div class="img_2">
                            <img src="__STATIC__/index/img/c21.jpg" width="100%">
                        </div>
                        <div class="titl">
                            <a href="#">山中鲜有机鸡蛋2盒</a>
                        </div>
                        <div class="key">
                            <a href="#" title="山中鲜">山中鲜</a>
                        </div>
                        <div class="price">
                            <p>￥54.00</p>
                        </div>
                    </li>
                    <li>
                        <div class="img_2">
                            <img src="__STATIC__/index/img/c21.jpg" width="100%">
                        </div>
                        <div class="titl">
                            <a href="#">山中鲜有机鸡蛋2盒</a>
                        </div>
                        <div class="key">
                            <a href="#" title="山中鲜">山中鲜</a>
                        </div>
                        <div class="price">
                            <p>￥54.00</p>
                        </div>
                    </li>
                    <li>
                        <div class="img_2">
                            <img src="__STATIC__/index/img/c21.jpg" width="100%">
                        </div>
                        <div class="titl">
                            <a href="#">山中鲜有机鸡蛋2盒</a>
                        </div>
                        <div class="key">
                            <a href="#" title="山中鲜">山中鲜</a>
                        </div>
                        <div class="price">
                            <p>￥54.00</p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

    </div>


</main>



<footer style="background-image: url(__STATIC__/index/img/footer_pic-small.jpg);
position: relative;clear: both;bottom: 0" >
    <div class="f1">
        <div class="footer_lf">
            <div class="footerlogo">
            </div>
            <p>我们希望从每个家庭餐桌上的最小单位一粒米开始，以线上市集的方法，
                让更多人结识友善耕耘的农夫，一步一步、一米一米地改善全中国的饮食生态。</p>
        </div>
        <div class="footer_mid">
            <div class="m1">
                <ul>
                    <li><a href="#">相识一米市集</a></li>
                    <li><a href="#">邀约农友</a></li>
                    <li><a href="#">退换货办法</a></li>
                    <li><a href="#">常遇问题</a></li>
                    <li><a href="#">会员积分及感谢制度</a></li>
                </ul>
            </div>
            <div class="m1">
                <ul>
                    <li><a href="#">全程冷链</a></li>
                    <li><a href="#">送达范围及时段</a></li>
                    <li><a href="#">运费提示</a></li>
                </ul>
            </div>
            <div class="m1">
                <ul>
                    <li><a href="#">发票提示</a></li>
                    <li><a href="#">优惠券用法</a></li>
                    <li><a href="#">支付方式</a></li>
                </ul>
            </div>

        </div>
        <div class="footer_lr" style="height: 100%">
            <p>服务热线</p>
            <p class="number">
                400-655-1212
            </p>
            <p>周一至周日</p>
            <p class="number">
                8:00-21:00
            </p>
            <p>微信公众号</p>
            <p class="number qr"  style="height: 100%"></p>

        </div>

    </div>
    <div class='footerBottom'>
        沪ICP备15037721号 | 食品流通许可证SP3101051510004275 | 上海市长宁区天山西路789号中山国际广场B座2层 | © Copyright 2015 保留所有权利
    </div>
</footer>

</body>

</html>