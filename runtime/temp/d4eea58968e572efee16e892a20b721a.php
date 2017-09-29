<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/index\view\cashier\cashier.html";i:1506567534;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="__STATIC__/index/style/header.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/footer.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/cashier.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="__STATIC__/index/jquery-1.8.3.min.js"></script>
    <style>
        .order{
            background-image: none;
            background-color: #d6e2e6;
            font-weight: bold;
            border: 0;
            min-height: 20px;
            padding: 19px;
            margin-bottom: 20px;
            border-radius: 4px;
            margin-top: 20px;
            font-size: 14px;
        }
        .order_num{
            float: right;
        }
        .pay{
            margin-bottom:150px;
            font-weight: bold;
            font-size: 14px;
            height: 16px;
        }
        .pay_title{

            font-weight: bold;
            margin-bottom: 10px;
        }
        .pay_way{
            border: 2px solid #d6e2e6;
            padding:20px 10px;
            border-radius: 4px;
            width: 20%;
            float: left;
            margin-right: 20px;
            background-repeat: no-repeat;
            background-position: 37px center;
            background-size: 145px;
            color: transparent;
        }



    </style>
</head>

<body>
<?php echo widget('Common/header'); ?>
<main>
    <div class="car-container">
        <!--结账-->
        <div class="car-title">
            <h1>收银台</h1>
            <div class="step">
                <div class="step1" style="  border:none">
                    <a href="#">
                        <span class="step_number">1</span>
                        购物篮
                    </a>
                </div>
                <div class="step_img">
                </div>
                <div class="step1" style="  border:none" >
                    <a href="#" style="text-decoration: none">
                        <span class="step_number">2</span>
                        结账
                    </a>
                </div>
                <div class="step_img">
                </div>
                <div class="step1" >
                    <a href="#" style="text-decoration: none;">
                        <span class="step_number">3</span>
                        收银台
                    </a>
                </div>

            </div>
        </div>

        <!--订单生成-->
        <div class="order">
            订单生成成功，请选择付款方式
            <span class="order_num">
                订单号
                <span>170928103167777</span>
                &nbsp;&nbsp;&nbsp;订单金额
                <span>￥48.00</span>
            </span>
        </div>

        <!--付款方式-->
        <div class="pay">
            <div class="pay_title">
                付款方式
            </div>
            <div>
                <div class="pay_way wx"></div>
                <div class="pay_way zfb"></div>
            </div>
        </div>


    </div>


</main>
<footer style="background-image: url(__STATIC__/index/img/footer_pic-small.jpg);position: relative;clear: both;bottom: 0;">
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
        <div class="footer_lr">
            <p>服务热线</p>
            <p class="number">
                400-655-1212
            </p>
            <p>周一至周日</p>
            <p class="number">
                8:00-21:00
            </p>
            <p>微信公众号</p>
            <p class="number qr"></p>

        </div>

    </div>
    <div class='footerBottom'>
        沪ICP备15037721号 | 食品流通许可证SP3101051510004275 | 上海市长宁区天山西路789号中山国际广场B座2层 | © Copyright 2015 保留所有权利
    </div>
</footer>
</body>
</html>