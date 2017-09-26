<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\UPUPW\htdocs\shop\public/../application/index\view\index\index.html";i:1506326374;}*/ ?>
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
            background: url("__STATIC__/index/img/ics.png") no-repeat;
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


<?php echo widget('Common/header'); ?>


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


<?php echo widget('Common/footer'); ?>


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