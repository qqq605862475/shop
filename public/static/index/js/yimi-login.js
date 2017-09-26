/**
 * Created by wangjinguo on 2017/7/7.
 */
$(function () {
//----------------------加载头部尾部----------------------->>>>
    $("#heard_wrap").load("heard.html");
    $("#base").load("base.html");
//----------------------密码判断强度------------------------>>>>
    var progress=$(".progress>li");
    var proInfo=$("#strength");
    $(".sign_input[type='password']").eq(0).bind('input propertychange', function() {
        var txt=$(this).val();//获取输入框的值
        var s=0;
        if( /[a-zA-Z]/.test(txt) ){//满足正则++
            s++;
        }
        if( /[0-9]/.test(txt) ){
            s++;
        }
        if( /[^0-9a-zA-Z]/.test(txt) ){//存在除字母数字外的符号
            s++;
        }
        if( txt.length <6 ){//密码小于6位时强度为弱
            s = 0;
        }
        electProgress(s,txt);
    });
    function electProgress(pro,txt) {
        var colorStr="";
        switch (pro){
                case 0://差
                    proInfo.text("差").css({color:"#FF3D3D"});
                    break;
                case 1://弱
                    colorStr="#e88781";
                    proInfo.text("弱").css({color:colorStr});
                    break;
                case 2://中
                    colorStr="#daca86";
                    proInfo.text("中").css({color:colorStr});
                    break;
                case 3://强
                    colorStr="#8cb69e";
                    proInfo.text("强").css({color:colorStr});
                    break;
        }
        var i;
        for(i=0;i<pro;i++){
            progress.eq(i).css({backgroundColor:colorStr});
        }
        for(var j=progress.length-1;j>i-1;j--){
            progress.eq(j).removeAttr("style");
        }
        if(!txt){//判断输入为空时清除样式
            progress.removeAttr("style");
        }
    }
//-----------------------表单数据验证--------------------->>>>>>>
    var info=$(".login_li>.hint");
    var inputs=$(".sign_input");
    console.log(inputs);
    var refer=false;
    inputs.eq(0).change(function () {
        var str=$(this).val();
        var reg=/^0?(13[0-9]|15[012356789]|17[013678]|18[0-9]|14[57])[0-9]{8}$/;
        var boolReg=reg.test(str);
        if(boolReg){
            info.eq(0).fadeOut();
            $(".hint_into").fadeOut();
            refer=true;
        }
        else {
            info.eq(0).fadeIn();
            refer=false;
        }
    });
    inputs.eq(2).change(function () {
        var pass0=inputs.eq(1).val();
        var pass1=$(this).val();
        if(pass0!=pass1){
            info.eq(1).fadeIn();
            refer=false;
        }
        else {
            info.eq(1).fadeOut();
            $(".hint_into").fadeOut();
            refer=true;
        }
    });
//-----------------刷新验证码----------------------->>>>>>
    $("#trade").click(function () {
        $(this).prev("img").attr("src","/index.php/captcha.html");
    });
//-----------------表单验证------------------------->>>>>>>>>
    $(".btn_big").click(function () {
        console.log(refer);
        if(!refer) {
            info.fadeIn();
            $("#sign").submit( function () {
                return false;//阻止表单提交
            } );
        }
    });
});