<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/index\view\car\Car.html";i:1506319801;}*/ ?>
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
        <table class="goods-wrap" >
            <thead>
            <tr class="trHead">
                <td class="td-first">
                    <input type="checkbox" class="cb">
                    <span>商品</span>
                </td>
                <td>
                    <span>售价</span>
                </td>
                <td>
                    <span>数量</span>
                </td>
                <td>
                    <span>小计</span>
                </td>
                <td class="td-last">
                    <span>操作</span>
                </td>
            </tr>
            </thead>
            <tbody>
        <tr class="trBody">
            <td class="td-first">
                <input type="checkbox" class="cb">
                <img>
                <a>零农残佳沛金果 4个（约480g）</a>
            </td>
            <td>
                <span>￥44.00</span>
            </td>
            <td>
                <div class="quantity">
                    <span> - </span>
                    <span class="myquantity"> 1 </span>
                    <span> + </span>
                </div>
            </td>
            <td>
                <span>￥44.00</span>
            </td>
            <td class="td-last">
                <img src="">
            </td>
        </tr>
            </tbody>
        </table>


            <ul>
                <li>
                    <div class="tf1">
                        <button>清空购物车</button>
                        <button>删除勾选</button>
                    </div>
                    <div class="tf2">
                        <p>订单金额</p>
                        <p class="tfootPrice" style="position: relative;"><span class="tfootPriceTag">￥</span><span class="tfootPriceNumber">45.00</span><span style="display: block; font-weight: normal; color: rgb(20, 55, 72); font-size: 12px; position: absolute; top: 40px; left: 0px;">不含运费</span></p>
                    </div>
                    <div class="tf3">
                    <a class="ym_button_important action-settle" name="Submit">订单结算</a>
                    </div>
                </li>
            </ul>


    </form>


</div>

</body>
</html>