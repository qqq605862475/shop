/**
 * Created by wangjinguo on 2017/7/8.
 */
$(function () {
//--------------------移入显示图片------------------------->>>>>>>>>
    $(".sp_thumbs>a").mouseover(function () {
        $(this).css({opacity: 1}).siblings().css({opacity:.6});
        $(".pd_main_img_wrap>img").attr({src:$(this).find("img").attr("src")});
    })
//-------------------------移入显示赠礼信息----------------------------------->>>>>>>>
    $(".pd_present").hover(function () {
        $(".i_info").slideDown().next().fadeIn().next().fadeIn();
    },function () {
        $(".i_info").slideUp().next().fadeOut().next().fadeOut();
    })
//-----------------------加入购物车----------------------------------------->>>>>>>>>
    var num=$("#num");
    var n=num.val();
    var maxNum=num.attr("max");//通过attr属性获取最大值
    console.log("商品限制"+maxNum);
    $("#sub").click(function () {
        n--;
        if(n<1){
            n=1;
        }
        num.val(n);
    });
    $("#add").click(function () {
        n++;
        if(n>=maxNum){
            n=maxNum;
        }
        num.val(n);
    });
    $("#add_cart").click(function () {
       var goods_id=$(this).attr("goodsId");//获取商品goods_id
        $.ajax({
                type:'POST',
                dataType:'json',
                data:{goods_id:goods_id,num:n},
                url:'http://wangjinguo.yimi.com/index.php/index/Cart/addCart',
                success:function (d) {
                   if(d.status=="success"){
                       alert(d.msg);
                   }
                   else {
                       alert("添加到购物车失败了！！！");
                   }
                }
        })
    });
});