<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"D:\UPUPW\htdocs\shop\public/../application/index\view\car\car.html";i:1506513933;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>car</title>
    <link href="__STATIC__/index/style/header.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/footer.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/car.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="__STATIC__/index/jquery-1.8.3.min.js"></script>


</head>
<body style="height: 200px">
<?php echo widget('Common/header'); ?>
<div class="car-container">
    <div class="car-title">
        <h1>购物车</h1>
        <div class="step">
            <div class="step1">
                <a href="#">
                    <span class="step_number">1</span>
                    购物篮
                </a>
            </div>
            <div class="step_img">
            </div>
            <div class="step1" style="  border:none">
                <a href="#" style="text-decoration: none;color: #88a7b3;">
                    <span class="step_number" style="color: #88a7b3;">2</span>
                    结账
                </a>
            </div>
            <div class="step_img">
            </div>
            <div class="step1" style="  border:none">
                <a href="#" style="text-decoration: none;color: #88a7b3;">
                    <span class="step_number" style="color: #88a7b3;">3</span>
                    收银台
                </a>
            </div>

        </div>
    </div>
</div>
<div class="tab">
    <form action="" method="post">
        <table>
            <thead>
            <tr class="t1">
                <th style="width: 45px;">
                    <input type="checkbox">
                </th>
                <th style="width: 75px;">商品</th>
                <th style="width: 374px;"></th>
                <th style="width: 150px;">售价</th>
                <th style="width: 135px;">数量</th>
                <th style="width: 150px;">小计</th>
                <th style="width: 90px;">操作</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($data['data'] as $v): ?>
            <tr class="t2">
                <td style="width: 45px;">
                    <input type="checkbox">
                </td>
                <td style="width: 75px;">
                    <a href="#" class="a1">
                        <img src="<?php echo $v['image_s_url']; ?>" alt="" class="img1">
                    </a>
                </td>
                <td style="width: 374px;"><a href="" class="a2"><?php echo $v['goods_name']; ?></a></td>
                <!--单价-->
                <td style="width: 150px;"><span>￥<?php echo $v['sell_price']; ?>.00</span></td>
                <!--数量-->
                <td style="width: 135px;">
                    <div class="price">
                        <a id="reduce" href="" class="p_lf">
                            <span>-</span>
                        </a>


                        <input id="goods_num" type="text" class="p_mid" value="<?php echo $v['goods_num']; ?>">


                        <a id="add" href="" class="p_lr">
                            <span>+</span>
                        </a>
                    </div>

                </td>
                <!--小计-->
                <td style="width: 150px;"><span>￥<?php echo $v['sell_price']*$v['goods_num']; ?>.00</span></td>
                <td style="width: 90px;">
                    <div class="dele">
                        <a href="javascript:void(0);" class="a3"></a>
                    </div>
                </td>
            </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="7">
                    <div class="t3">
                        <button onclick="">清空购物车</button>
                        <button onclick="">删除勾选</button>
                    </div>
                    <div class="t4">
                        <p>订单金额</p>
                        <p style="font-size: 28px;" id="pp">￥<?php echo $data['total']; ?>.00</p>
                        <p style="display: block; font-weight: normal; color: rgb(20, 55, 72);
                        font-size: 12px;">不含运费</p>
                    </div>
                    <div class="t5">
                        <a id="topay" href="javascript:void(0);" class="a4">订单结算</a>
                    </div>
                    <!--//跳转到提交订单 结算页面-->
                    <script>
                        $(function () {
                            $("#topay").click(function () {
                                //判断是否有提交


                                location.href = "<?php echo url('Car/pay'); ?>";
                                return;
                            })
                        })
                    </script>
                </td>
            </tr>

            </tfoot>
        </table>
        <div class="pay">
            <h3>金额明细</h3>
            <div>
                <ul>
                    <li>
                        <span>商品小计</span>
                        <span style="float: right;">￥<?php echo $data['total']; ?>.00</span>
                    </li>
                    <hr/>
                    <li>
                        <span>购买金额</span>
                        <span style="float: right;">
                            <span style="padding-right: 5px;
                        padding-left: 5px;font-size: 24px;">￥<?php echo $data['total']; ?>.00</span>
                        </span>
                    </li>
                    <li>
                        <span>可得积分</span>
                        <span style="float: right;"><?php echo $data['total']; ?>.00点</span>
                    </li>
                </ul>
                <button>查看优惠详情</button>
            </div>
        </div>
    </form>
</div>

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