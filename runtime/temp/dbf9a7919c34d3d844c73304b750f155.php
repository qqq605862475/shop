<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/index\view\article\article.html";i:1506318770;}*/ ?>
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
                <a href="#" style="background-image:url(__STATIC__/index/img/i1.jpg);opacity: 1"></a>
                <a href="#" style="background-image:url(__STATIC__/index/img/i2.jpg)" ></a>
                <a href="#" style="background-image:url(__STATIC__/index/img/i3.jpg)" ></a>
                <a href="#" style="background-image:url(__STATIC__/index/img/i4.jpg)"></a>
            </div>
            <div class="big">
                <a href="#" style="background-image:url(__STATIC__/index/img/b1.jpg);display: block" ></a>
                <a href="#" style="background-image:url(__STATIC__/index/img/b2.jpg)" ></a>
                <a href="#" style="background-image:url(__STATIC__/index/img/b3.jpg)" ></a>
                <a href="#" style="background-image:url(__STATIC__/index/img/b4.jpg)"></a>
            </div>
            <script>
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
                    <span>山中鲜</span>
                </div>
                <!--商品名称-->
                <div class="name">
                    <span>山中鲜有机鸡蛋</span>
                </div>
                <!--评分-->
                <div class="img_1">
                    <span>5.0</span>
                </div>
                <!--商品描述-->
                <div class="desc">
                    <span>有机土鸡蛋中的蛋黄较大，非常适合做煮鸡蛋和煎蛋，简单的烹调方法能将它优良的口感完全发挥出来。</span>
                </div>
                <!--售价-->
                <div class="sell_price">
                    <span>￥27.00</span>
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
                            <span>100</span>
                        </div>
                    </div>

                    <div class="kucun">
                        <div class="stitle">
                            <span>热销程度</span>
                        </div>
                        <div class="svalue">
                            <span>热销</span>
                        </div>
                    </div>

                    <div class="kucun">
                        <div class="stitle">
                            <span>新品程度</span>
                        </div>
                        <div class="svalue">
                            <span>新品</span>
                        </div>
                    </div>
                </div>

                <!--购物-->
                <div class="shop">
                    <form action="" method="post">
                        <div class="number">
                            <div class="num_lf">-</div>
                            <input type="text" name="goods[num]" value="1">
                            <div class="num_lr">+</div>

                        </div>
                        <div class="car">
                            <button type="submit" label="加入购物车" rel="_request">
                                加入购物车
                            </button>

                        </div>




                    </form>

                </div>



            </div>

        </div>
    </div>

    <!--商品详情-->
    <div class="bottom">
        <div class="bo_lf">

        </div>

        <div class="bo_lr">
            <div class="b_title">
                农友伙伴
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
                山中鲜的相关产品
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



<footer style="background-image: url(__STATIC__/index/img/footer_pic-small.jpg);position: relative;clear: both;bottom: 0" >
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