<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/index\view\article\article.html";i:1506151084;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品详情</title>
    <link rel="stylesheet" href="__STATIC__/index/animate.css">
    <link href="__STATIC__/index/style/header.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/footer.css" type="text/css" rel="stylesheet"/>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        main{
            width: 100%;
            /*border: 1px solid red;*/
        }
        .top{
            margin: auto;
            position: relative;
            min-height: 500px;
            width: 1200px;

            /*border: 1px solid red;*/
        }
        .top_lf{
            width: 800px;
            height: 447px;
            border: 1px solid red;
            float: left;

        }
        .top_lr{
            width: 360px;
            height: 447px;
            /*border: 1px solid red;*/
            float: right;
            font-weight: bold;
        }
        .keywords{
            font-size: 12px;
        }
        .img_1{
            font-size: 14px;
            position: absolute;
            right: 0;
            font-family: 'Din-bold';
            background: url(__STATIC__/index/img/bkg_rating.png) no-repeat;
            width: 37px;
            height: 39px;
            background-size: 37px;
            text-align: center;
            line-height: 39px;
        }
        .name{
            float: left;
            line-height: 1.42857143;
            font-size: 20px;
        }
        .desc{
            float: left;
            margin-top: 20px;
        }
        .desc span{
            font-size: 14px;
            line-height: 24px;
            font-weight: normal;
            color: #47515c;
        }
        .sell_price{
            font-size: 32px;
            font-family: 'Static-Bold';
            height: 36px;
            font-style: normal;
            line-height: 1.42857143;

        }
        .store{
            border-top: 1px solid #d6e2e6;
            border-bottom: 1px solid #d6e2e6;
            width: 360px;
            height: 50px;
            float: left;
            padding-bottom: 5px;
            padding-top: 5px;
            margin-bottom: 10px;
        }
        .kucun{
            padding-right: 10px;
            padding-left: 10px;
            height: 46px;
            /*border: 1px solid red;*/
            width: 98px;
            float: left;
            position: relative;
        }
        .stitle{
            overflow: hidden;
            text-align: left;
            color: rgba(21, 55, 74, 0.51);
            font-size: 11px;
        }
        .svalue{
            font-family: 'Static-Bold';
            letter-spacing: 1px;
            position: absolute;
            right: 18px;
            bottom: 0px;
            font-size: 16px;
            color: rgba(21, 55, 74, 0.67);
        }
        .shop{
            padding-bottom: 5px;
            padding-top: 5px;
            width: 360px;
            height: 70px;
            /*border: 1px solid red;*/
            float: left;
        }
        .number{
            width: 180px;
            height: 40px;
            float: left;
            /*border: 1px solid red;*/
        }
        .num_lf,.num_lr{
            background: #fff;
            width: 40px;
            height: 40px;
            color: #AFC5CD;
            font-size: 21px;
            font-weight: bold;
            border: 1px solid #AFC5CD;
            line-height: 40px;
            float: left;
            text-align: center;
            cursor: pointer;

        }
        .number input{
            width: 80px;
            text-align: center;
            height: 40px;
            line-height: 40px;
            color: #666;
            background: none;
            border: 1px solid #AFC5CD;
            border-left: 0;
            border-right: 0;
            font-family: 'Din-Bold';
            float: left;
            font-size: 14px;
        }
        .car{
            word-break: break-all;
            word-wrap: break-word;
            float: left;
            width: 180px;
            height: 40px;
        }
        .car button{
            color: #fff;
            border: 0;
            padding-left: 41px;
            height: 40px;
            width: 100%;
            border-radius: 0;
            background: url(__STATIC__/index/img/icon_cart_white.png) no-repeat #15374a;
            background-size: 22px;
            background-position: 15px 9px;
            font-size: 14px;
            cursor: pointer;
        }
        .bottom{
            margin: auto;
            position: relative;
            min-height: 500px;
            width: 1200px;
            /*border: 1px solid red;*/
        }
        .bo_lf{
            width: 800px;

            float: left;
            border: 1px solid red;
        }
        .bo_lr{
            width: 360px;

            float:right;
            border: 1px solid red;
        }
        .b_title{
            border-bottom: 1px solid #d6e2e6;
            line-height: 40px;
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 14px;
        }
        .lis li{
            list-style: none;
            width: 100%;
            height: 30px;
            /*border: 1px solid red;*/
            margin-bottom: 10px;
            line-height: normal;
        }
        .pi li{
            list-style: none;
            width: 43%;
            height: 250px;
            /*border: 1px solid red;*/
            margin-bottom: 10px;
            line-height: normal;
            float: left;
            margin-right: 20px;
        }
        .titl{
            width: 100%;
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;

        }
        .key a{
            font-size: 12px;
            color: rgba(79, 98, 105, 0.5);
            font-weight: bold;
            display: inline-block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            width: 50%;
            line-height: 24px;
            margin-left: 20%;
        }
        .price{
            display: block;
            font-weight: normal;
            margin-right: 10px;
            color: #8cb69e;
            margin-bottom: 20px;
            text-decoration: none;
            font-weight: bold;
            padding-left: 30%;
            font-size: 14px;
        }






    </style>
</head>
<body style="height:100px">
<?php echo widget('Common/header'); ?>
<main>
    <!--最上-->
    <div class="top">
        <div class="top_lf">
            <!--  商品相册  -->
            <div class="pic"></div>

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