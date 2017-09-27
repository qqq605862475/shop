/**
 * Created by wangjinguo on 2017/7/7.
 */
//---------------------------导航条-------------------------->>>>>>>>>>>
$(function () {
    $(".ym_head_products,.ym_goods,.ym_eatlive,.ym_head_acc,.ym_head_shopcart").hover(
        function () {
            $(this).children().last().fadeIn();
        },
        function () {
            $(this).children().last().fadeOut();
        });
//-------------------------预设值搜索----------------------->>>>>>>>
    var seaInp=$(".ym_head_search input");
    var seaVal=seaInp.val();
    seaInp.focus(function () {
        $(this).val("");
    });
    seaInp.blur(function () {
        $(this).val(seaVal);
    });
//----------------------滚动显示隐藏---------------------------->>>>>>>>>>
    var s=0;
    $(window).scroll(function () {
        var topS=$(this).scrollTop();
        if(topS==0){
            $(".ym_head").css({display:"block",position:"relative",top:0,zIndex:100,height:80,backgroundColor:"transparent",boxShadow:"none"}).find("*").not("li").removeAttr("style");
            $(".ym_head_header").css({backgroundColor:"white"});
            $(".show_div").css({bottom:0});
        }
        else if(topS>s){
            $(".ym_head").css({display:"none"});
        }
        else {
            $(".ym_head_shopcart .ics").css({marginBottom:-5});
            $(".show_div").removeAttr("style");
            $(".ym_head_logo").css({backgroundImage:"url('/static/index/img/simple_logo.png')",height:36,backgroundPosition:"center"});
            $(".ym_head").css({display:"block",position:"fixed",top:0,zIndex:100,height:44,backgroundColor: "rgba(255, 255, 255, 0.8)",boxShadow:"0 1px 2px rgb(204, 204, 204)"}).children().last().css({height:34});
            $(".ym_head_header").css({backgroundColor: "transparent"}).find("* a").not("ul a").css({marginTop:6,height:20});
            $(".ym_head_shopcart").css({height:36});
            $(".ym_head_acc").css({height:36});
            $(".ym_head_search").css({borderBottom:"solid 2px transparent"}).css({marginTop:0}).find("input").css({border:"solid 1px #ccc",backgroundColor: "rgba(255, 255, 255, 0.8)"});
        }
        s=topS;
    })
});
