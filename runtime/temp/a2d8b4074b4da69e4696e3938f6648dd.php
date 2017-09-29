<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/index\view\pay\pay.html";i:1506665089;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="__STATIC__/index/style/header.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/footer.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/pay.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="__STATIC__/index/jquery-1.8.3.min.js"></script>
    <style>



    </style>
</head>

<body>
<?php echo widget('Common/header'); ?>
<main>
    <div class="car-container">
        <!--结账-->
        <div class="car-title">
            <h1>结账</h1>
            <div class="step">
                <div class="step1" style="  border:none">
                    <a href="#">
                        <span class="step_number">1</span>
                        购物篮
                    </a>
                </div>
                <div class="step_img">
                </div>
                <div class="step1" >
                    <a href="#" style="text-decoration: none">
                        <span class="step_number">2</span>
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

        <!--收货信息-->
        <div class="address">
            <div class="d1">
                收货信息
            </div>
            <div class="d2">

                <a href="javascript:void(0);">
                    <?php if($addr == ''): ?>
                    请选择收货地址
                    <?php else: ?>
                    <?php echo $addr['area']; ?><?php echo $addr['address']; endif; ?>
                </a>

                <ul style="width: 97.5%;">
                    <li><a href="javascript:void(0);">+ 添加新地址</a></li>

                </ul>
            </div>
            <!--鼠标经过收货地址下拉-->
            <script>
                $(".d2").hover(function () {
                    $(this).children("ul").css({"display":"block"});
                    $(this).children("a").css({"background-image":"url(__STATIC__/index/img/checkout_dropdown_open.png)"});

                },function () {
                    $(this).children("ul").css({"display":"none"});
                    $(this).children("a").css({"background-image":"url(__STATIC__/index/img/checkout_dropdown_closed.png)"})
                });
                var e=1;

                $(".d2 ul li a").click(function () {
                    e++;
//                    console.log(e);
                    if (e%2==0){
                        $(".edit").css({"display":"block"});
                    }else{
                        $(".edit").css({"display":"none"});
                    }
                });

            </script>
            <div class="edit">
                <form action="<?php echo url('Pay/save'); ?>" method="post">
                <div class="row">
                    <input type="text" name="" id="" placeholder="收货人">
                    <input type="text" name="" id="" placeholder="手机/电话" style="width: 300px">
                </div>
                <div class="row">
                    <select name="" id="" disabled style=" background-color: #f7f5f0;">
                        <option value="">中国</option>
                    </select>
                    <select name="province" id="province">
                        <option value="">省份/直辖市</option>
                        <?php foreach($data as $v): if($v['parent_id'] == 1): ?>
                        <option value="<?php echo $v['area_id']; ?>" name="pp"><?php echo $v['area_name']; ?></option>
                        <?php endif; endforeach; ?>
                    </select>
                    <select name="city" id="city">
                        <option value="" >市/县</option>

                    </select>
                    <!--获取省的id值，在数据库里查出对应的县-->
                    <script>
                        $("#province").change(function () {
                            var area_id = $("#province").val();
//                            console.log(area_id);
                            $.ajax({
                                data: {area_id: area_id},
                                url: "<?php echo url('Pay/city'); ?>",
                                success:function (d) {
                                    $('#city').empty();
                                    $('#town').empty();
                                    for(var i=0;i<d.length;i++){
                                        $('#city').append("<option value="+d[i].area_id+">"+d[i].area_name+"</option>")
                                    }
                                }
                            })
                        })
                    </script>

                    <select name="town" id="town">
                        <option value="">镇/区</option>
                    </select>
                    <!--获取市的id值，在数据库里查出对应的区-->
                    <script>
                        $("#city").change(function () {
                            var area_id = $("#city").val();
//                            console.log(area_id);
                            $.ajax({
                                data: {area_id: area_id},
                                url: "<?php echo url('Pay/town'); ?>",
                                success:function (d) {
                                    $('#town').empty();
                                    for(var i=0;i<d.length;i++){
                                        $('#town').append("<option class='haha' value="+d[i].area_id+">"+d[i].area_name+"</option>")
                                    }
                                }
                            })
                        })


                    </script>
                    <input type="text" name="addr" id="addr" placeholder="收货地址" style="width: 30%;">

                </div>
                <button type="submit">
                    保存地址
                </button>
                </form>
            </div>

        </div>

        <!--收货时间-->
        <div class="address">
            <div class="d1">
                收货时间
            </div>
            <div style="height: 54px;">
                <div class="t1" >
                    <a href="#">2017-09-27</a>
                    <ul style="width: 90%;">
                        <li><a href="javascript:void(0);">2017-09-27</a></li>
                        <li><a href="javascript:void(0);">2017-09-28</a></li>
                    </ul>
                </div>
                <div class="t1">
                    <a href="#" style="float: right">请选择</a>
                    <ul style="width: 90%;left: 28px">
                        <li><a href="javascript:void(0);">请选择</a></li>
                        <li><a href="javascript:void(0);">14:00-21:00</a></li>
                    </ul>
                </div>
            </div>
            <script>
                $(".t1").hover(function () {
                    $(this).children("ul").css({"display":"block"});
                    $(this).children("a").css({"background-image":"url(__STATIC__/index/img/checkout_dropdown_open.png)"});

                },function () {
                    $(this).children("ul").css({"display":"none"});
                    $(this).children("a").css({"background-image":"url(__STATIC__/index/img/checkout_dropdown_closed.png)"})
                });
                $(".t1 ul a").click(function () {
                    $(this).parents("ul").siblings().text($(this).text())
                })
            </script>
        </div>

        <!--优惠券-->
        <div class="address">
            <div class="d1">
                优惠券
            </div>
            <div class="d2">
                <a href="javascript:void(0);" style="padding: 15px 10px">2张可用</a>
            </div>
        </div>

        <!--积分抵扣-->
        <div class="address">
            <div class="d1">
               积分抵扣
            </div>
            <div class="d3">
                <input type="radio" name="" id="jifen">积分抵扣
                <span>使用<input type="text" name="" id="" value="200">积分，抵扣2.00元 (所有积分 200)</span>
            </div>
            <!--积分点击选中-->
            <script>
                var c=1;
                $("#jifen").click(function(){
                    c++;
                    if (c%2==0){
                        $(this).addClass("check");
                    }
                    else{
                        $(this).removeClass("check");
                    }

                } )
            </script>
        </div>


        <!--余额抵扣-->
        <div class="address">
            <div class="d1">
                余额抵扣
            </div>
            <div class="d3">
                <input type="radio" name="" id="yuer">帐户余额
                <span>使用<input type="text" name="" id="" value="0.00">元 (所有余额 ￥ 0.00)
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;使用账户余额支付的部分金额将不开发票</span>
            </div>
            <!--余额点击选中-->
            <script>
                var d=1;

                $("#yuer").click(function(){
                    d++;
                    if (d%2==0){
                        $(this).addClass("check");
                    }
                    else{
                        $(this).removeClass("check");
                    }

                } )
            </script>
        </div>

        <!--付款-->
        <div class="address">
            <div class="d1">
                付款
            </div>
           <div style="height: 47px">
               <div class="d4">
                   <input type="radio" name="" id="">
               </div>
               <div class="d5">
                   <input type="radio" name="" id="">
               </div>
           </div>
        </div>
        <!--付款方式点击选中-->
        <script>

            $(".address .d4 input").click(function(){
                $(this).addClass("check");
                $(".address .d5 input").removeClass("check");
            } )

            $(".address .d5 input").click(function(){
                $(this).addClass("check");
                $(".address .d4 input").removeClass("check");
            } )
        </script>

        <!--商品清单-->
        <div class="address">
            <div class="d1">
                商品清单
            </div>
            <div class="d2">

                <a href="#" style="padding: 15px 10px">
                    <?php foreach($goodsData as $v): ?>
                    <img src="<?php echo $v['image_s_url']; ?>" style="width: 60px">

                    <span style="float: right;margin-right: 40px">共<?php echo $v['goods_num']; ?>件商品</span>
                    <br>
                    <?php endforeach; ?>
                </a>
            </div>
        </div>

        <!--发票 留言-->
        <div class="fa">
            <div class="d1">
                发票
            </div>
            <div class="ff1">
                <a href="#">不开发票</a>
                <ul style="width: 96%;">
                    <li><a href="javascript:void(0);">不开发票</a></li>
                    <li><a href="javascript:void(0);">个人发票</a></li>
                    <li><a href="javascript:void(0);">公司发票</a></li>
                </ul>
            </div>
            <script>
                $(".ff1").hover(function () {
                    $(this).children("ul").css({"display":"block"});
                    $(this).children("a").css({"background-image":"url(__STATIC__/index/img/checkout_dropdown_open.png)"});

                },function () {
                    $(this).children("ul").css({"display":"none"});
                    $(this).children("a").css({"background-image":"url(__STATIC__/index/img/checkout_dropdown_closed.png)"})
                });
                $(".ff1 ul a").click(function () {
                    $(this).parents("ul").siblings().text($(this).text())
                })
            </script>

            <div class="d1">
                留言
            </div>
            <div class="ff1">
                <textarea placeholder="可在此留言给客服"></textarea>
            </div>
        </div>

        <!--总计-->
        <div class="all">
            <ul>
                <li>
                    <span>商品小计</span>
                    <span style="float: right">￥<?php echo $total; ?>.00</span>
                </li>
                <li>
                    <span>优惠</span>
                    <span style="float: right">-￥0.00</span>
                </li>
                <li>
                    <span>运费</span>
                    <span style="float: right">+￥0.00</span>
                </li>
                <hr>
                <li>
                    <span>应付金额</span>
                    <span style="float: right">￥<?php echo $total; ?>.00</span>
                </li>
                <div>
                    <a href="#" class="a1">提交订单</a>
                </div>
                <div style="margin: 14px 5px 0px; font-size: 10px; color: rgb(21, 55, 74);">
                    <input type="checkbox" name="" id="" value="none" style="height: 20px;">不在商品清单上打印价格。
                </div>

            </ul>

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