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
     var pi= pidname.split(",");
     var queryPart=[pi[0]];
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
                queryPart+=","+cateName;
                queryPart=queryPart.split(",");
                // console.log(queryPart);



            window.open('http://ldx.com/index.php/index/Lis/load/cateName/'+queryPart,'goods_wrap');

        }
        else {
            cateName=cateName.trim();
            queryPart.splice(queryPart.indexOf(cateName),1);

            window.open('http://ldx.com/index.php/index/Lis/load/cateName/'+queryPart,'goods_wrap');

        }
        // console .log(queryPart)
    });
    $("#cat_list>li>#emptyGoods").click(function () {//清空
         queryPart=[[pi][0]];
        $(this).parent().siblings().find("span").removeClass("select");//清除class属性值

        window.open('http://ldx.com/index.php/index/Lis/load/cateName/'+queryPart,'goods_wrap');

    });
});