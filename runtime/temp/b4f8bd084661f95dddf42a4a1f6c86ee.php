<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"D:\UPUPW\htdocs\shop\public/../application/index\view\car\Car.html";i:1506318670;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>nocar</title>
    <link href="__STATIC__/index/style/header.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/footer.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/car.css" type="text/css" rel="stylesheet">
</head>
<body style="height: 200px">
<?php echo widget('Common/header'); ?>
<div class="car-container">
<div class="car-title">
    <a>购物车</a>
</div>
<div class="car-wrap">
    <form>
        <div class="order-single">
        <ul class="trHead">
            <li class="td-first">
                <input type="checkbox" class="cb">
                <span>商品</span>
            </li>
            <li>
                <span>售价</span>
            </li>
            <li>
                <span>数量</span>
            </li>
            <li>
                <span>小计</span>
            </li>
            <li class="td-last">
                <span>操作</span>
            </li>
        </ul>

        <ul class="trBody">
            <li class="td-first">
                <input type="checkbox" class="cb">
                <img>
                <a>零农残佳沛金果 4个（约480g）</a>
            </li>
            <li>
                <span>￥44.00</span>
            </li>
            <li>
                <div class="quantity">
                    <span> - </span>
                    <span class="myquantity"> 1 </span>
                    <span> + </span>
                </div>
            </li>
            <li>
                <span>￥44.00</span>
            </li>
            <li class="td-last">
                <img src="">
            </li>
        </ul>

            <ul class="trFoot">
                    <li class="tf1">
                        <button>清空购物车</button>
                        <button>删除勾选</button>
                    </li>
                    <li class="tf2">
                        <p>订单金额</p>
                        <p class="tfootPrice" >
                            <span class="tfootPriceTag">￥</span><span class="tfootPriceNumber">45.00</span></p>
                        <p style="font-weight: normal; color: rgb(20, 55, 72); font-size: 12px; position: absolute; top: 40px; left: 0px;">不含运费</p>
                    </li>
                    <li class="tf3">
                    <input type="submit" class="ym_button_important action-settle" name="Submit">订单结算</input>
                    </li>
            </ul>
        </div>
    </form>
</div>
<div class="amount-wrap"></div>
</div>
</body>
</html>