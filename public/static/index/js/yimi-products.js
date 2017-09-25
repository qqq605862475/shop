/**
 * Created by wangjinguo on 2017/7/27.
 */
//----------------------图片轮播--------------------->>>>>>>>>>
$(function () {
    var inPage=0;
    var dot=$(".cate_page_dot>ul>.cate_dot");
    var cateImg=$(".cate_img_wrap>.cate_img");
    var t;
    dot.click(function () {
        inPage=$(this).index();
        hie(inPage);
        dot.eq(inPage).css({backgroundColor:"#15374A"}).siblings().css({backgroundColor:"#ffffff"});
        cateImg.eq(inPage).fadeIn().siblings().fadeOut();
    });
    $(".cate_photo_goods>.pre_btn").click(function () {
        inPage--;
        if(inPage<0){
            inPage=dot.length-1;
        }
        hie(inPage);
        dot.eq(inPage).css({backgroundColor:"#15374A"}).siblings().css({backgroundColor:"#ffffff"});
        cateImg.eq(inPage).fadeIn().siblings().fadeOut();
    });
    $(".cate_photo_goods>.next_btn").click(function () {
        inPage++;
        if(inPage>dot.length-1){
            inPage=0;
        }
        hie(inPage);
        dot.eq(inPage).css({backgroundColor:"#15374A"}).siblings().css({backgroundColor:"#ffffff"});
        cateImg.eq(inPage).fadeIn().siblings().fadeOut();
    });
    function hie(inPage) {//隐藏显示上一张下一张
        if (inPage==0){
            $(".cate_photo_goods>.pre_btn").fadeOut();
            $(".cate_photo_goods>.next_btn").fadeIn();
        }
        else if (inPage==dot.length-1){
            $(".cate_photo_goods>.next_btn").fadeOut();
            $(".cate_photo_goods>.pre_btn").fadeIn();
        }
        else {
            $(".cate_photo_goods>.pre_btn").fadeIn();
            $(".cate_photo_goods>.next_btn").fadeIn();
        }
    }
    timeAuto();//默认调用计时器
    function timeAuto() {//计时器函数
        t=setInterval(function () {//变量t等于计时器，容易清除计时器
            inPage++;
            if(inPage>dot.length-1){
                inPage=0;
            }
            hie(inPage);
            dot.eq(inPage).css({backgroundColor:"#15374A"}).siblings().css({backgroundColor:"#ffffff"});
            cateImg.eq(inPage).fadeIn().siblings().fadeOut();
        },5000);
    }
    $(".cate_img_wrap").hover(function () {//移入清除计时器，移出调用计时器
        clearInterval(t);//移入清除计时器t
    },function () {
        clearInterval(t);
        timeAuto();//移出调用计时器t
    });
//------------------商品检索选择-------------------->>>>>>>>>>
    var pidname=$('.parent').val();
    var queryPart=[pidname];
    $(".cats>.taggle_open").click(function () {
        $(this).toggleClass("open");
        $(this).siblings(".cats_con").slideToggle();
    });
    $("#cat_list>li>a.goods").click(function () {
        $(this).children("span").toggleClass("select");
        var cateName=$(this).text();
        var on=$(this).children("span").hasClass("select");
        if(on){
            cateName=cateName.trim();
            console.log(cateName);
            if(queryPart.indexOf(cateName)==-1){
                queryPart+=","+cateName;
                queryPart=queryPart.split(",");
            }
            $.ajax({
                type: "GET",//数据发送的方式（post 或者 get）
                url: "{:url('Index/load')}",
                data:{val1:"我的大中国"},//要发送的数据（参数）格式为{'val1':"1","val2":"2"}
                dataType: "json",//后台处理后返回的数据格式
                success: function (data) {//ajax请求成功后触发的方法
                    // alert('请求成功');
                },
                error: function (msg) {//ajax请求失败后触发的方法
                    alert(msg);//弹出错误信息
                }
            });
            window.open('http://ldx.com/index.php/index/Index/load/cateName/'+queryPart,'goods_wrap');
        }
        else {
            console.log(cateName);
            cateName=cateName.trim();
            queryPart.splice(queryPart.indexOf(cateName),1);
            window.open('http://ldx.com/index.php/index/Index/load/cateName/'+queryPart,'goods_wrap');

        }
        console.log(queryPart);
    });
    $("#cat_list>li>#emptyGoods").click(function () {//清空
        $(this).parent().siblings().find("span").removeClass("select");//清除class属性值
        window.open('http://ldx.com/index.php/index/Index/load/cateName/'+[pidname],'goods_wrap');
    });

});