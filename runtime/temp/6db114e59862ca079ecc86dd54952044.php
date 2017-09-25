<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\UPUPW\htdocs\shop\public/../application/index\view\index\index.html";i:1506131284;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>一米</title>
    <link rel="stylesheet" href="__STATIC__/index/animate.css">
    <link href="__STATIC__/index/style/header.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/footer.css" type="text/css" rel="stylesheet"/>


    <style type="text/css">


        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Microsoft Yahei", "Hiragino Sans GB", Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            color: #0d3749;
            font-size: 14px;
            line-height: 1.5;
            position: relative;
            z-index: -99999;
            height: 1000px;
        }

        .ics, .btnbar .web {
            background: url("img/ics.png") no-repeat;
        }

        .lunbo {
            width: 1200px;
            height: 500px;
            /*border: 1px solid red;*/
            margin: 0 auto;
            position: relative;
            z-index: -1;
        }

        .lunbo_img {
            width: 1200px;
            height: 460px;
        }

        .lunbo_img img {
            width: 1200px;
            height: 460px;
            display: none;
            position: absolute;
            cursor: pointer;
        }

        .lunbo ul li {
            width: 200px;
            height: 40px;
            /*border: 1px solid red;*/
            float: left;
            list-style: none;
            bottom: 0;
            position: relative;
            border-bottom: 2px solid #d6e2e6;
            transition: background 0.2s ease;
        }

        .lunbo ul li a {
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            color: #0D3749;
            display: block;
            width: 100%;
            height: 100%;
            cursor: pointer;
            transition: background 0.2s ease;
            line-height: 40px;
        }

        .lunbo ul li a:hover {
            background-color: rgba(214, 226, 230, 0.42);
        }

        .ym_wdg_simpleBlog {
            margin: 20px 0;
            padding: 20px 0;
            /* border-top: 2px solid #d6e2e6; */
            position: relative;
        }

        .container {
            width: 1200px;
        }

        .row {
            margin: 0;
            position: relative;
        }

        .ym_wdg_simpleBlog .simpleBlogArticle {
            position: relative;
            left: 77px;
            padding: 0;
            width: 22%;
            margin-right: 46px;
            float: left;
        }

        .ym_wdg_simpleBlog .img-responsive {
            width: 100%;
            display: block;
            max-width: 100%;
            height: auto;
        }

        .ym_wdg_simpleBlog p {
            line-height: 40px;
            font-size: 16px;
            font-weight: bold;
        }

        .ym_wdg_simpleBlog .abstract {
            font-size: 14px;
            line-height: 24px;
            color: #4f6269;
            font-weight: normal;
        }

        .cc, .c1, .c2, .c3, .c4, .c5, .c6, .c7, .c8, .c9 {
            width: 1200px;
            height: 722px;
            border-top: 2px solid #d6e2e6;
            clear: both;
            margin: 380px auto;
            /*border: 1px solid red;*/
        }

        .lf {
            margin-top: 20px;
            width: 340px;
            height: 97%;
            /*border: 1px solid red;*/
            float: left;
        }

        .xinpin {
            width: 250px;
            height: 400px;
            /*border: 1px solid red;*/
            float: left;
            margin-left: 20px;
        }

        .img_0 {
            width: 250px;
            height: 250px;
            background: url("__STATIC__/index/img/yimi.jpg") no-repeat;
            background-size: 250px 250px;
        }

        .xinpin h3 {
            font-size: 15px;
            margin: 12px 0 0 0;
            font-weight: bold;
            line-height: 36px;
            height: 36px;
            overflow: hidden;
            text-align: center;
        }

        .x1 {
            text-align: center;
        }

        .x1 a {
            font-size: 12px;
            color: rgba(79, 98, 105, 0.5);
            font-weight: bold;
            display: inline-block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            width: 50%;
            line-height: 24px;
        }

        .x1 span {
            font-size: 12px;
            display: inline-block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            width: 40%;
            line-height: 24px;
            color: rgba(79, 98, 105, 0.5);
            font-weight: bold;
            text-align: left;
        }

        .x1 h4 {
            display: inline;
            font-weight: 600;
            margin-right: 10px;
            color: #8cb69e;
            margin-bottom: 20px;
            text-decoration: none;
            font-size: 15px
        }

        .rank {
            width: 20px;
            height: 20px;
            background-color: #1d384c;
            color: #fff;
            font-family: 'Din-Bold';
            margin-bottom: 10px;
            text-align: center;
            font-weight: 600;
            font-size: 14px;
            line-height: 1.5;
        }

        .lr {
            margin-top: 20px;
            width: 858px;
            height: 97%;
            /*border: 1px solid red;*/
            float: left;
        }

        .lr li {
            float: left;
            width: 180px;
            height: 320px;
            /* background: #F1F2F4; */
            margin: 0px;
            padding: 0px;
            text-align: center;
            /*border: 1px solid red;*/
            list-style: none;
            margin-right: 45px;
            margin-bottom: 20px;
        }

        .img1{
            width: 180px;
            height: 180px;
            /*border: 1px solid red;*/
            background: url("__STATIC__/index/img/img1.jpg")no-repeat;
            background-size: 180px 180px;
            text-align: left;
            position: relative;
        }

        .c1 .img1 {
            background: url("__STATIC__/index/img/c12.jpg") no-repeat;
            background-size: 180px 180px;
        }

        .c2 .img1 {
            background: url("__STATIC__/index/img/c21.jpg") no-repeat;
            background-size: 180px 180px;
        }

        .c3 .img1 {
            background: url("__STATIC__/index/img/c31.jpg") no-repeat;
            background-size: 180px 180px;
        }

        .c4 .img1 {
            background: url("__STATIC__/index/img/c41.jpg") no-repeat;
            background-size: 180px 180px;
        }

        .c5 .img1 {
            background: url("__STATIC__/index/img/c51.jpg") no-repeat;
            background-size: 180px 180px;
        }

        .c6 .img1 {
            background: url("__STATIC__/index/img/c61.jpg") no-repeat;
            background-size: 180px 180px;
        }

        .c7 .img1 {
            background: url("__STATIC__/index/img/c71.jpg") no-repeat;
            background-size: 180px 180px;
        }

        .c8 .img1 {
            background: url("__STATIC__/index/img/c81.jpg") no-repeat;
            background-size: 180px 180px;
        }

        .c9 .img1 {
            background: url("__STATIC__/index/img/c91.jpg") no-repeat;
            background-size: 180px 180px;
        }

        .img1:hover .img2 {
            display: block;
        }

        .img2 {
            width: 180px;
            height: 180px;
            position: relative;
            z-index: 22;
            top: -95px;
            /*background: url("img/black_sbg.png")no-repeat;*/
            background-size: 180px 180px;
            display: none;
        }

        .num {
            text-align: center;
            position: relative;
            margin: 0;
            color: #fff;
            background: none;
        }

        .num span {
            font-size: /*16px*/ 32px;
            display: block;
            position: relative;
            font-family: 'Din-Bold';
            top: 58px;
        }

        .shu {
            width: 180px;
            height: 45px;
            /*border: 1px solid red;*/
            position: relative;
            top: 58px;
        }

        .shu a {
            width: 25%;
            height: 100%;
            position: relative;
            left: 20px;
        }

        .shu a:hover {
            text-decoration: none;

        }

        .haha {
            transform: rotate(360deg);
            transition: all 0.8s ease-in-out 0.2s;
        }

        .increase img {
            /*background: url("img/ym_icon_increase.png") no-repeat;*/
            /*background-size: 100% 100%;*/
            width: 25%;
            position: relative;
            left: 45px;

        }

        .decrease img {
            /*background: url("img/ym_icon_decrease.png") no-repeat;*/
            /*background-size: 100% 100%;*/
            width: 25%;
            position: relative;
            cursor: no-drop;
        }

        .lr h3 {
            font-size: 15px;
            margin: 12px 0 0 0;
            font-weight: bold;
            line-height: 36px;
            height: 36px;
            overflow: hidden;
        }

        .x1 h5 {
            text-decoration: line-through;
            margin-right: 5px;
            color: #8cb69e;
            font-size: 12px;
            display: inline;
        }

        h3 a:hover {
            color: #8dae98;
        }

        .img3 {
            width: 300px;
            height: 527px;
            cursor: pointer;
        }

        .img3 img {
            width: 300px;
        }

        .lf h3 {
            margin-top: 10px;
            color: #143749;
            font-weight: bold;
            font-size: 14px;
        }

        .lf h3:hover {
            text-decoration: underline;
            cursor: pointer;
        }



    </style>


</head>
<body>
<div class="bar"></div>

<header>
    <div class="logo" style="background-image: url(__STATIC__/index/img/logo_modified.png)">
        <!--<p>跟友善农夫，买一份诚食</p>-->
    </div>
    <div class='ym_hd_products'>
        <a class='ym_hd_buttonHead' href="/products.html">所有商品</a>
        <ul>

            <li style="background-image: url('https://img.yimishiji.com/v1/img/d816053f3e405749cfbaf338f9bb1e1e.jpg');">
                <a href="/products-22.html" style="display: inline-block;width:100%;height:56px; "></a>
                <a class='tier1_cate' href="/products-22.html">四时菜蔬</a>
                <ul>
                    <li>
                        <a class='tier2_cate' href="/products-24.html">根茎类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-93.html">豆制品</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-23.html">叶菜类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-40.html">菌菇类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-39.html">豆类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-38.html">茄果瓜花类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-91.html">葱姜蒜和香料</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-142.html">冷藏冷冻菜蔬</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-153.html">蔬菜花卉盆栽</a>
                    </li>
                </ul>
            </li>

            <li style="background-image: url('https://img.yimishiji.com/v1/img/3c32ee24f160ad16d83ee1fbf80382a3.jpg');">
                <a href="/products-43.html" style="display: inline-block;width:100%;height:56px; "></a>
                <a class='tier1_cate' href="/products-43.html">安全水果</a>
                <ul>
                    <li>
                        <a class='tier2_cate' href="/products-49.html">热带水果</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-88.html">苹果和梨</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-104.html">奇异果</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-46.html">柑橘柚类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-110.html">葡萄和浆果类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-126.html">核果类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-105.html">桃李杏类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-156.html">其它水果</a>
                    </li>
                </ul>
            </li>

            <li style="background-image: url('https://img.yimishiji.com/v1/img/cf0c781d51dd3aa0217c8801997c0fc4.jpg');">
                <a href="/products-25.html" style="display: inline-block;width:100%;height:56px; "></a>
                <a class='tier1_cate' href="/products-25.html">肉禽蛋品</a>
                <ul>
                    <li>
                        <a class='tier2_cate' href="/products-51.html">蛋类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-54.html">禽类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-52.html">牛肉类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-53.html">猪肉类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-124.html">肉制品</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-149.html">火腿</a>
                    </li>
                </ul>
            </li>

            <li style="background-image: url('https://img.yimishiji.com/v1/img/e88955aef281922f68e3fe266d8eca03.jpg');">
                <a href="/products-129.html" style="display: inline-block;width:100%;height:56px; "></a>
                <a class='tier1_cate' href="/products-129.html">乳制品类</a>
                <ul>
                    <li>
                        <a class='tier2_cate' href="/products-131.html">鲜奶</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-148.html">豆浆豆奶</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-130.html">酸奶</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-133.html">奶油黄油</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-134.html">芝士乳酪</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-135.html">冰淇淋和布丁</a>
                    </li>
                </ul>
            </li>

            <li style="background-image: url('https://img.yimishiji.com/v1/img/b2231270dbb5d1d115833b1f4f70f0ce.jpg');">
                <a href="/products-57.html" style="display: inline-block;width:100%;height:56px; "></a>
                <a class='tier1_cate' href="/products-57.html">水中鲜物</a>
                <ul>
                    <li>
                        <a class='tier2_cate' href="/products-58.html">鱼类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-119.html">蟹贝软体类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-59.html">虾类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-136.html">水产制品</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-171.html">海胆</a>
                    </li>
                </ul>
            </li>

            <li style="background-image: url('https://img.yimishiji.com/v1/img/0b79c081f60dd314e5101e9b78a6eeea.jpg');">
                <a href="/products-158.html" style="display: inline-block;width:100%;height:56px; "></a>
                <a class='tier1_cate' href="/products-158.html">早餐&面点</a>
                <ul>
                    <li>
                        <a class='tier2_cate' href="/products-159.html">中式早餐</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-160.html">西式早餐</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-123.html">特色面点</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-167.html">蛋糕</a>
                    </li>
                </ul>
            </li>

            <li style="background-image: url('https://img.yimishiji.com/v1/img/13ce96366df9454ca283736083e78ece.jpg');">
                <a href="/products-31.html" style="display: inline-block;width:100%;height:56px; "></a>
                <a class='tier1_cate' href="/products-31.html">吃吃零嘴</a>
                <ul>
                    <li>
                        <a class='tier2_cate' href="/products-32.html">坚果和干果</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-101.html">糖果和巧克力</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-102.html">肉干海苔</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-111.html">蔬果干类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-103.html">豆干</a>
                    </li>
                </ul>
            </li>

            <li style="background-image: url('https://img.yimishiji.com/v1/img/8838496e189fcbbcd432d2bb2044e249.jpg');">
                <a href="/products-71.html" style="display: inline-block;width:100%;height:56px; "></a>
                <a class='tier1_cate' href="/products-71.html">饮料酒水</a>
                <ul>
                    <li>
                        <a class='tier2_cate' href="/products-73.html">果汁和软饮</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-85.html">风味饮品</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-117.html">葡萄酒</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-170.html">健康醋饮</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-118.html">精酿啤酒</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-77.html">清酒和果酒</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-115.html">咖啡和茶</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-128.html">冲调类</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-72.html">水</a>
                    </li>
                </ul>
            </li>

            <li style="background-image: url('https://img.yimishiji.com/v1/img/5c9926dd5d621e4e62919206d05fe856.jpg');">
                <a href="/products-28.html" style="display: inline-block;width:100%;height:56px; "></a>
                <a class='tier1_cate' href="/products-28.html">粮油酱醋</a>
                <ul>
                    <li>
                        <a class='tier2_cate' href="/products-63.html">米面杂粮</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-96.html">南北干货</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-29.html">酱油和醋</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-168.html">欣和酱醋</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-34.html">食用油</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-62.html">调味品</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-95.html">蜂蜜 果酱 </a>
                    </li>
                </ul>
            </li>

            <li style="background-image: url('https://img.yimishiji.com/v1/img/c8d21eb0cddfb40a1855e307814f1824.jpg');">
                <a href="/products-189.html" style="display: inline-block;width:100%;height:56px; "></a>
                <a class='tier1_cate' href="/products-189.html">环保生活</a>
                <ul>
                    <li>
                        <a class='tier2_cate' href="/products-191.html">个人洗护</a>
                    </li>
                    <li>
                        <a class='tier2_cate' href="/products-192.html">家居清洁</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class='ym_hd_theme'>
        <a class='ym_hd_buttonHead'>好事发生</a>
        <ul>
            <li class='promo'>
                <a href='http://www.yimishiji.com/article-zhuantihuodong-197.html'>新到尖货</a>
            </li>
            <li class='promo'>
                <a href='article-zhuantihuodong-104.html'>优惠推选</a>
            </li>
            <li class='promo'>
                <a href='article-zhuantihuodong-97.html'>好物预购</a>
            </li>
            <li class='promo'>
                <a href='https://www.yimishiji.com/card.html'>充值卡</a>
            </li>
        </ul>
    </div>

    <div class='ym_hd_lifestyle'>
        <a class='ym_hd_buttonHead'>吃的主张</a>
        <ul>
            <li class='promo'>
                <a href='tags.html'>做个选择</a>
            </li>
            <li class='promo'>
                <a href='farmers.html'>农友伙伴</a>
            </li>
            <li class='promo'>
                <a href='article-womenneirong-60.html'>认识我们</a>
            </li>
            <li class='promo'>
                <a href='blog-index.html'>食物记事</a>
            </li>
            <li class='promo'>
                <a href='http://www.yimishiji.com/article-zhuantihuodong-269.html'>公益伙伴</a>
            </li>
        </ul>
    </div>


    <div class='ym_hd_search'>
        <form id='search_form' action="/products.html" method="post" async="false">
            <input class="x-input" type="text" name="search_keywords" placeholder="搜索你喜欢的" value="有机杂粮"
                   id="dom_el_56ad320"/>
            <button class='search_button' style="background-image: url(__STATIC__/index/img/icon_magnifier.png)"></button>
        </form>
    </div>

    <div class='ym_hd_account'>
        <a class='ym_hd_buttonHead' href="/member.html" style="background-image: url(__STATIC__/index/img/ym_icon_user.png)"></a>
        <div class='ym_hd_profilePanel'>
            <div class="small-signin login_2193">
                <ul>
                    <li>
                        <a href="/passport-login.html">登入</a>
                    </li>
                    <li>
                        <a href="/passport-signup.html">注册</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class='ym_hd_cart'>
        <div class="minicart has-minicart" id="minicart_2193">

            <a href="/cart.html" class="ics minicart-text" style="background-image: url(__STATIC__/index/img/ym_icon_cart.png)"><span style='display:none'>购物篮</span></a>
            <b class="ics op-cart-number  minicart-info">0</b>
            <span class="ics arr"></span>
            <div class="minicart-cont" style="height: auto;">
                <div class="no-information">购物篮中空空的喔,慢慢逛，不要忘记带上「食欲」</div>
            </div>

        </div>
    </div>
</header>


<div class="lunbo">
    <div class="lunbo_img">
        <img src="__STATIC__/index/img/lunbo1.jpg" style="display: block">
        <img src="__STATIC__/index/img/lunbo2.jpg">
        <img src="__STATIC__/index/img/lunbo3.jpg">
        <img src="__STATIC__/index/img/lunbo4.jpg">
        <img src="__STATIC__/index/img/lunbo5.jpg">
        <img src="__STATIC__/index/img/lunbo6.jpg">
    </div>
    <ul>
        <li style=" border-bottom: 5px solid #d6e2e6;"><a href="#">99元慢食组合</a></li>
        <li><a href="#">有机紫水晶火龙果</a></li>
        <li><a href="#">纸袋回收计划</a></li>
        <li><a href="#">大规格</a></li>
        <li><a href="#">10分钟搞定快手菜</a></li>
        <li><a href="#">满赠</a></li>
    </ul>
</div>


<div class="container clearfix ym_wdg_simpleBlog">
    <div class="row">

        <div class="col-md-3 col-sm-3 col-xs-3 simpleBlogArticle">
            <div>

                <div>

                    <a href="https://www.yimishiji.com/products-0-%E6%B2%99%E6%8B%89%E7%93%B6%E5%AD%90.html"
                       class="js_count" attr="可以喝的沙拉">
                        <img class="img-responsive"
                             src="https://img.yimishiji.com/v1/img/8d79c5063d9e0711488b77fdf0ca7b3c.jpg" alt="可以喝的沙拉">
                    </a>

                </div>

                <div>

                    <p>
                        <a href="https://www.yimishiji.com/products-0-%E6%B2%99%E6%8B%89%E7%93%B6%E5%AD%90.html"
                           class="js_count" attr="可以喝的沙拉">
                            可以喝的沙拉
                        </a>
                    </p>


                    <div class='abstract'>均衡全食饮，可以喝的沙拉！1瓶包含10种蔬果、粗粮谷物、植物蛋白，维生素和酶的活性完整保存。红瓶抗氧化，绿瓶清肠道，健康好味道！</div>
                </div>
            </div>
        </div>


        <div class="col-md-3 col-sm-3 col-xs-3 simpleBlogArticle">
            <div>

                <div>

                    <a href="https://www.yimishiji.com/article-zhuantihuodong-104.html" class="js_count" attr="优惠专区">
                        <img class="img-responsive"
                             src="https://img.yimishiji.com/v1/img/26436fae973d9eab96276fc4dffb8b6b.jpg" alt="优惠专区">
                    </a>

                </div>

                <div>

                    <p>
                        <a href="https://www.yimishiji.com/article-zhuantihuodong-104.html" class="js_count"
                           attr="优惠专区">
                            优惠专区
                        </a>
                    </p>


                    <div class='abstract'>在这个优惠自选区里，有很多好的食材值得一试，只要经过简单的处理，就可以享受到美食的味道。</div>
                </div>
            </div>
        </div>


        <div class="col-md-3 col-sm-3 col-xs-3 simpleBlogArticle">
            <div>

                <div>

                    <a href="https://www.yimishiji.com/products-0-%E6%B5%B7%E6%8B%943300%E7%B1%B3%E5%B0%8F%E9%87%91%E9%9D%92%E8%8B%B9%E6%9E%9C.html"
                       class="js_count" attr="海拔3300米小金青苹果 ">
                        <img class="img-responsive"
                             src="https://img.yimishiji.com/v1/img/14d99fd39aea631ddfecc35e9d58a9a4.jpg"
                             alt="海拔3300米小金青苹果 ">
                    </a>

                </div>

                <div>

                    <p>
                        <a href="https://www.yimishiji.com/products-0-%E6%B5%B7%E6%8B%943300%E7%B1%B3%E5%B0%8F%E9%87%91%E9%9D%92%E8%8B%B9%E6%9E%9C.html"
                           class="js_count" attr="海拔3300米小金青苹果 ">
                            海拔3300米小金青苹果
                        </a>
                    </p>


                    <div class='abstract'>川藏高原独特的气候环境给予最自然的味道；生产过程不用农药、化肥和除草剂 ,果实甘甜可口，吸引周边鸟儿们每天来吃。</div>
                </div>
            </div>
        </div>


        <div class="col-md-3 col-sm-3 col-xs-3 simpleBlogArticle" style="margin-right: 0">
            <div>

                <div>

                    <a href="https://www.yimishiji.com/farmer-481.html" class="js_count" attr="膳博士冰鲜黑猪肉">
                        <img class="img-responsive"
                             src="https://img.yimishiji.com/v1/img/dec724a4c8a7c79f546db5ae66b1d8d8.jpg" alt="膳博士冰鲜黑猪肉">
                    </a>

                </div>

                <div>

                    <p>
                        <a href="https://www.yimishiji.com/farmer-481.html" class="js_count" attr="膳博士冰鲜黑猪肉">
                            膳博士冰鲜黑猪肉
                        </a>
                    </p>


                    <div class='abstract'>喝山中水，吃五谷杂粮、苜蓿草，慢慢长足10个月的「太湖黑」，猪肉胶原蛋白丰富，鲜香美味。</div>
                </div>
            </div>
        </div>

    </div>
</div>
<div>
    <div class="cc">
        <div class="lf">
            <div style="float: left">
                <img src="__STATIC__/index/img/热购.jpg" style="width: 37px">
            </div>
            <div class="xinpin">
                <div class="rank">1</div>
                <div class="img_0">
                    <img src="__STATIC__/index/img/新品.png" style="width: 125px">
                </div>
                <h3>
                    <a href="#" title="[预售]两周年庆典发布会门票">[预售]两周年庆典发布会门票</a>
                </h3>
                <div class="x1">
                    <a href="#" title="一米市集严选">一米市集严选</a>
                    <span>
                             1张/份    </span>
                    <h4>￥49.00</h4>
                </div>
            </div>
        </div>
        <div class="lr">
            <ul>
                <li>
                    <div class="rank">2</div>
                    <div class="img1"
                    >
                        <img src="__STATIC__/index/img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="__STATIC__/index/img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="__STATIC__/index/img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">3</div>
                    <div class="img1" >
                        <img src="__STATIC__/index/img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="__STATIC__/index/img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="__STATIC__/index/img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">4</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">5</div>
                    <div class="img1" >
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">6</div>
                    <div class="img1" >
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">7</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">8</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">9</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>

            </ul>

        </div>

    </div>

    <div class="c1" style="margin-top: -320px">
        <div class="lf">
            <div class="img3">
                <img src="__STATIC__/index/img/c1.jpg">
            </div>
            <h3>更多新到尖货 >></h3>
        </div>
        <div class="lr">
            <ul>
                <li>
                    <div class="rank">2</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">3</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">4</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">5</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">6</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">7</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">8</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">9</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>

            </ul>

        </div>

    </div>

    <div class="c2" style="margin-top: -320px">
        <div class="lf">
            <div class="img3">
                <img src="__STATIC__/index/img/c2.jpg">
            </div>
            <h3>更多新到尖货 >></h3>
        </div>
        <div class="lr">
            <ul>
                <li>
                    <div class="rank">2</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">3</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">4</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">5</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">6</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">7</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">8</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">9</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>

            </ul>

        </div>

    </div>

    <div class="c3" style="margin-top: -320px">
        <div class="lf">
            <div class="img3">
                <img src="img/c3.jpg">
            </div>
            <h3>更多新到尖货 >></h3>
        </div>
        <div class="lr">
            <ul>
                <li>
                    <div class="rank">2</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">3</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">4</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">5</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">6</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">7</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">8</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">9</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>

            </ul>

        </div>

    </div>

    <div class="c4" style="margin-top: -320px">
        <div class="lf">
            <div class="img3">
                <img src="img/c4.jpg">
            </div>
            <h3>更多新到尖货 >></h3>
        </div>
        <div class="lr">
            <ul>
                <li>
                    <div class="rank">2</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">3</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">4</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">5</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">6</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">7</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">8</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">9</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>

            </ul>

        </div>

    </div>

    <div class="c5" style="margin-top: -320px">
        <div class="lf">
            <div class="img3">
                <img src="img/c5.jpg">
            </div>
            <h3>更多新到尖货 >></h3>
        </div>
        <div class="lr">
            <ul>
                <li>
                    <div class="rank">2</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">3</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">4</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">5</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">6</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">7</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">8</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">9</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>

            </ul>

        </div>

    </div>

    <div class="c6" style="margin-top: -320px">
        <div class="lf">
            <div class="img3">
                <img src="img/c6.jpg">
            </div>
            <h3>更多新到尖货 >></h3>
        </div>
        <div class="lr">
            <ul>
                <li>
                    <div class="rank">2</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">3</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">4</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">5</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">6</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">7</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">8</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">9</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>

            </ul>

        </div>

    </div>

    <div class="c7" style="margin-top: -320px">
        <div class="lf">
            <div class="img3">
                <img src="img/c7.jpg">
            </div>
            <h3>更多新到尖货 >></h3>
        </div>
        <div class="lr">
            <ul>
                <li>
                    <div class="rank">2</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">3</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">4</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">5</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">6</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">7</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">8</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">9</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>

            </ul>

        </div>

    </div>

    <div class="c8" style="margin-top: -320px">
        <div class="lf">
            <div class="img3">
                <img src="img/c8.jpg">
            </div>
            <h3>更多新到尖货 >></h3>
        </div>
        <div class="lr">
            <ul>
                <li>
                    <div class="rank">2</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">3</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">4</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">5</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">6</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">7</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">8</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">9</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>

            </ul>

        </div>

    </div>

    <div class="c9" style="margin-top: -320px">
        <div class="lf">
            <div class="img3">
                <img src="img/c9.jpg">
            </div>
            <h3>更多新到尖货 >></h3>
        </div>
        <div class="lr">
            <ul>
                <li>
                    <div class="rank">2</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">3</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">4</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">5</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">6</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">7</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li>
                    <div class="rank">8</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>
                <li style="margin-right: 0">
                    <div class="rank">9</div>
                    <div class="img1">
                        <img src="img/特惠.png" style="width: 90px">
                        <div class="img2">
                            <div class="num">
                                <span>0</span>
                            </div>
                            <div class="shu">
                                <a href="javascript:void(0)" class="decrease">
                                    <img src="img/ym_icon_decrease.png">
                                </a>
                                <a href="javascript:void(0)" class="increase">
                                    <img src="img/ym_icon_increase.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3><a href="#">长的慢-食材好 A</a></h3>
                    <div class="x1">
                        <a href="#" title="一米市集严选">一米市集严选</a>
                        <span>
                             1组/份    </span>
                        <h4>￥99.00</h4><h5>￥114.00</h5>
                    </div>
                </li>

            </ul>

        </div>

    </div>
</div>


<footer style="background-image: url(__STATIC__/index/img/footer_pic-small.jpg)">
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


<script type="text/javascript" src="__STATIC__/index/jquery-1.8.3.min.js"></script>
<script>
    $(function () {

        //        //c9点击效果
        var c9 = [0, 0, 0, 0, 0, 0, 0, 0];

        $(".c9 .increase").click(function () {
            var cishu = $(this).parents("li").index();
            $(".c9 .img2").eq(cishu).css({
                "background": "url(img/black_sbg.png)no-repeat",
                "background-size": "180px 180px"
            });
            c9[cishu]++;
            $(".c9 .num span").eq(cishu).text(c9[cishu]);
            $(".c9 .decrease img").eq(cishu).css({"cursor": "pointer"});
        });

        $(".c9 .decrease").click(function () {
            var cishu = $(this).parents("li").index();
            c9[cishu]--;
            if (c9[cishu] <= 0) {
                c9[cishu] = 0;
                $(".c9 .decrease img").eq(cishu).css({"cursor": "no-drop"});
                $(".c9 .img2").eq(cishu).css({"background": "none"});
            }
            $(".c9 .num span").eq(cishu).text(c9[cishu]);
        });


        //        //c8点击效果
        var c8 = [0, 0, 0, 0, 0, 0, 0, 0];

        $(".c8 .increase").click(function () {
            var cishu = $(this).parents("li").index();
            $(".c8 .img2").eq(cishu).css({
                "background": "url(img/black_sbg.png)no-repeat",
                "background-size": "180px 180px"
            });
            c8[cishu]++;
            $(".c8 .num span").eq(cishu).text(c8[cishu]);
            $(".c8 .decrease img").eq(cishu).css({"cursor": "pointer"});
        });

        $(".c8 .decrease").click(function () {
            var cishu = $(this).parents("li").index();
            c8[cishu]--;
            if (c8[cishu] <= 0) {
                c8[cishu] = 0;
                $(".c8 .decrease img").eq(cishu).css({"cursor": "no-drop"});
                $(".c8 .img2").eq(cishu).css({"background": "none"});
            }
            $(".c8 .num span").eq(cishu).text(c8[cishu]);
        });


        //        //c7点击效果
        var c7 = [0, 0, 0, 0, 0, 0, 0, 0];

        $(".c7 .increase").click(function () {
            var cishu = $(this).parents("li").index();
            $(".c7 .img2").eq(cishu).css({
                "background": "url(img/black_sbg.png)no-repeat",
                "background-size": "180px 180px"
            });
            c7[cishu]++;
            $(".c7 .num span").eq(cishu).text(c7[cishu]);
            $(".c7 .decrease img").eq(cishu).css({"cursor": "pointer"});
        });

        $(".c7 .decrease").click(function () {
            var cishu = $(this).parents("li").index();
            c7[cishu]--;
            if (c7[cishu] <= 0) {
                c7[cishu] = 0;
                $(".c7 .decrease img").eq(cishu).css({"cursor": "no-drop"});
                $(".c7 .img2").eq(cishu).css({"background": "none"});
            }
            $(".c7 .num span").eq(cishu).text(c7[cishu]);
        });


        //        //c6点击效果
        var c6 = [0, 0, 0, 0, 0, 0, 0, 0];

        $(".c6 .increase").click(function () {
            var cishu = $(this).parents("li").index();
            $(".c6 .img2").eq(cishu).css({
                "background": "url(img/black_sbg.png)no-repeat",
                "background-size": "180px 180px"
            });
            c6[cishu]++;
            $(".c6 .num span").eq(cishu).text(c6[cishu]);
            $(".c6 .decrease img").eq(cishu).css({"cursor": "pointer"});
        });

        $(".c6 .decrease").click(function () {
            var cishu = $(this).parents("li").index();
            c6[cishu]--;
            if (c6[cishu] <= 0) {
                c6[cishu] = 0;
                $(".c6 .decrease img").eq(cishu).css({"cursor": "no-drop"});
                $(".c6 .img2").eq(cishu).css({"background": "none"});
            }
            $(".c6 .num span").eq(cishu).text(c6[cishu]);
        });

        //        //c5点击效果
        var c5 = [0, 0, 0, 0, 0, 0, 0, 0];

        $(".c5 .increase").click(function () {
            var cishu = $(this).parents("li").index();
            $(".c5 .img2").eq(cishu).css({
                "background": "url(img/black_sbg.png)no-repeat",
                "background-size": "180px 180px"
            });
            c5[cishu]++;
            $(".c5 .num span").eq(cishu).text(c5[cishu]);
            $(".c5 .decrease img").eq(cishu).css({"cursor": "pointer"});
        });

        $(".c5 .decrease").click(function () {
            var cishu = $(this).parents("li").index();
            c5[cishu]--;
            if (c5[cishu] <= 0) {
                c5[cishu] = 0;
                $(".c5 .decrease img").eq(cishu).css({"cursor": "no-drop"});
                $(".c5 .img2").eq(cishu).css({"background": "none"});
            }
            $(".c5 .num span").eq(cishu).text(c5[cishu]);
        });

        //        //c4点击效果
        var c4 = [0, 0, 0, 0, 0, 0, 0, 0];

        $(".c4 .increase").click(function () {
            var cishu = $(this).parents("li").index();
            $(".c4 .img2").eq(cishu).css({
                "background": "url(img/black_sbg.png)no-repeat",
                "background-size": "180px 180px"
            });
            c4[cishu]++;
            $(".c4 .num span").eq(cishu).text(c4[cishu]);
            $(".c4 .decrease img").eq(cishu).css({"cursor": "pointer"});
        });

        $(".c4 .decrease").click(function () {
            var cishu = $(this).parents("li").index();
            c4[cishu]--;
            if (c4[cishu] <= 0) {
                c4[cishu] = 0;
                $(".c4 .decrease img").eq(cishu).css({"cursor": "no-drop"});
                $(".c4 .img2").eq(cishu).css({"background": "none"});
            }
            $(".c4 .num span").eq(cishu).text(c4[cishu]);
        });

        //        //c3点击效果
        var c3 = [0, 0, 0, 0, 0, 0, 0, 0];

        $(".c3 .increase").click(function () {
            var cishu = $(this).parents("li").index();
            $(".c3 .img2").eq(cishu).css({
                "background": "url(img/black_sbg.png)no-repeat",
                "background-size": "180px 180px"
            });
            c3[cishu]++;
            $(".c3 .num span").eq(cishu).text(c3[cishu]);
            $(".c3 .decrease img").eq(cishu).css({"cursor": "pointer"});
        });

        $(".c3 .decrease").click(function () {
            var cishu = $(this).parents("li").index();
            c3[cishu]--;
            if (c3[cishu] <= 0) {
                c3[cishu] = 0;
                $(".c3 .decrease img").eq(cishu).css({"cursor": "no-drop"});
                $(".c3 .img2").eq(cishu).css({"background": "none"});
            }
            $(".c3 .num span").eq(cishu).text(c3[cishu]);

        });


        //        //c2点击效果
        var c2 = [0, 0, 0, 0, 0, 0, 0, 0];

        $(".c2 .increase").click(function () {
            var cishu = $(this).parents("li").index();
            $(".c2 .img2").eq(cishu).css({
                "background": "url(img/black_sbg.png)no-repeat",
                "background-size": "180px 180px"
            });
            c2[cishu]++;
            $(".c2 .num span").eq(cishu).text(c2[cishu]);
            $(".c2 .decrease img").eq(cishu).css({"cursor": "pointer"});
        });

        $(".c2 .decrease").click(function () {
            var cishu = $(this).parents("li").index();
            c2[cishu]--;
            if (c2[cishu] <= 0) {
                c2[cishu] = 0;
                $(".c2 .decrease img").eq(cishu).css({"cursor": "no-drop"});
                $(".c2 .img2").eq(cishu).css({"background": "none"});
            }
            $(".c2 .num span").eq(cishu).text(c2[cishu]);

        });


//        //c1点击效果
        var c1 = [0, 0, 0, 0, 0, 0, 0, 0];

        $(".c1 .increase").click(function () {
            var cishu = $(this).parents("li").index();
            $(".c1 .img2").eq(cishu).css({
                "background": "url(img/black_sbg.png)no-repeat",
                "background-size": "180px 180px"
            });
            c1[cishu]++;
            $(".c1 .num span").eq(cishu).text(c1[cishu]);
            $(".c1 .decrease img").eq(cishu).css({"cursor": "pointer"});
        });

        $(".c1 .decrease").click(function () {
            var cishu = $(this).parents("li").index();
            c1[cishu]--;
            if (c1[cishu] <= 0) {
                c1[cishu] = 0;
                $(".c1 .decrease img").eq(cishu).css({"cursor": "no-drop"});
                $(".c1 .img2").eq(cishu).css({"background": "none"});
            }
            $(".c1 .num span").eq(cishu).text(c1[cishu]);

        });


// 热购商品点击效果
        var c = [0, 0, 0, 0, 0, 0, 0, 0];

        $(".cc .increase").click(function () {
            var cishu = $(this).parents("li").index();
            $(".cc .img2").eq(cishu).css({
                "background": "url(__STATIC__/index/img/black_sbg.png)no-repeat",
                "background-size": "180px 180px"
            });

//            console.log(cishu);
            c[cishu]++;
            $(".cc .num span").eq(cishu).text(c[cishu]);
            //$(this).parents(".shu").prev().children()
            $(".cc .decrease img").eq(cishu).css({"cursor": "pointer"});
        });

        $(".cc .decrease").click(function () {
            var cishu = $(this).parents("li").index();
//            console.log(cishu);
            c[cishu]--;
            if (c[cishu] <= 0) {
                c[cishu] = 0;
                $(".cc .decrease img").eq(cishu).css({"cursor": "no-drop"});
                $(".cc .img2").eq(cishu).css({"background": "none"});
            }
            $(".cc .num span").eq(cishu).text(c[cishu]);

        });


//+和-鼠标经过动画效果
        $(".increase").hover(function () {
            $(".increase img").addClass("haha animated")
        }, function () {
            $(".increase img").removeClass("haha animated")
        });

        $(".decrease").hover(function () {
            $(".decrease img").addClass("haha animated")
        }, function () {
            $(".decrease img").removeClass("haha animated")
        });


        //轮播 轮播效果
        var i = 0;
        var lunbo = setInterval(lunn, 2000);

        function lunn() {
            i = i >= $(".lunbo_img img").length ? 0 : i;
            $(".lunbo_img img").eq(i).fadeIn().siblings().fadeOut();
            $(".lunbo li").eq(i).css({"border-bottom": "5px solid #d6e2e6"}).siblings().css({"border-bottom": "2px solid #d6e2e6"});
            i++;
        }

        $(".lunbo").hover(function () {
            clearInterval(lunbo)
        }, function () {
            lunbo = setInterval(lunn, 2000);
        });
        //轮播 鼠标点击切换
        $(".lunbo li").click(function () {
            var x = $(this).index();
            console.log(x);
            $(".lunbo_img img").eq(x).fadeIn().siblings().fadeOut();
            $(".lunbo li").eq(x).css({"border-bottom": "5px solid #d6e2e6"}).siblings().css({"border-bottom": "2px solid #d6e2e6"});
            $(".lunbo li").eq(x).siblings().children().hover(function () {
                $(this).css({"background-color": "rgba(214, 226, 230, 0.42)"})
            }, function () {
                $(this).css({"background-color": "white"})
            });
            $(".lunbo li").eq(x).children().hover(function () {
                $(this).css({"background-color": "white"})
            }, function () {
                $(this).css({"background-color": "white"})
            });
            i = x;
        });


        //首页搜索框获取焦点 失去焦点效果
        $(".x-input").focus(function () {
            $(".x-input").val("");
        });
        $(".x-input").blur(function () {
            $(".x-input").val("有机杂粮");
        })
    })


</script>

</body>
</html>