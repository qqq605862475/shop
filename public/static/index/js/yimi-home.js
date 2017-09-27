/**
 * Created by wangjinguo on 2017/7/4.
 */
$(function () {
//-------------------轮播图------------------->>>>>>>>>>>
  var goods=$(".goods_slider_wrap>li");
  var cho=$(".goods_slider_thumbs>li").not(".slider_chunk");
  var choSli=$(".goods_slider_thumbs>li.slider_chunk");
  var index=0,t;
  timeOn();
  cho.click(function () {
      index=$(this).index();
      goods.eq(index).fadeIn(800).siblings().fadeOut(800);
      choSli.animate({left:240*index},800);
      clearInterval(t);
      setTimeout(function () {
          timeOn();
      },3000);
  });
  function timeOn() {
      t=setInterval(function () {
          index++;
          if(index>goods.length-1){
              index=0;
          }
          goods.eq(index).fadeIn(800).siblings().fadeOut(800);
          choSli.animate({left:240*index},800);
      },5000)
  }
//---------------------------添加减少商品(暂定待修改)---------------->>>>>>>>>
    var reduBtn=$(".goods_redu");
    var addBtn=$(".goods_add");
    reduBtn.click(function () {
        var num=$(this).siblings(".btn_add_reduce").children().first();
        var coverBg=$(this).siblings(".hover_bg");
        var redu=num.text();
        redu--;
        num.css({top:-5,opacity:0});
        if(redu>0){
            coverBg.fadeIn();
        }
        if(redu<=0){
            redu=0;
            num.css({top:0,opacity:1});
            coverBg.fadeOut();
        }
        num.animate({top:0,opacity:1}).text(redu);
    });
    addBtn.click(function () {
        var num=$(this).siblings(".btn_add_reduce").children().first();
        var coverBg=$(this).siblings(".hover_bg");
        var add=num.text();
        add++;
        num.css({top:5,opacity:0});
        coverBg.fadeIn();
        if(add>100){
            add=100;
            num.css({top:0,opacity:1});
        }
        num.animate({top:0,opacity:1}).text(add);
    });
    $(".goods_pic").hover(function () {
            $(this).children(".goods_redu").fadeIn().siblings(".btn_add_reduce").fadeIn();
            $(this).children(".goods_add").fadeIn();
        },function () {
        if($(this).children(".goods_redu").fadeOut().siblings(".btn_add_reduce").children().first().text()==0){
            $(this).children(".goods_redu").fadeOut().siblings(".btn_add_reduce").fadeOut();
        }
            $(this).children(".goods_add").fadeOut();
        })
});