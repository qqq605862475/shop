<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\XAMPP\htdocs\shop\public/../application/index\view\register\register.html";i:1506049325;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link href="__STATIC__/index/style/header.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/footer.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/register.css" type="text/css" rel="stylesheet">
</head>
<body style="height: 200px">
<?php echo widget('Common/header'); ?>
<div class="register-container">
    <div class="register-left">
        <div class="register-title">会员注册</div>
        <div class="line">
            <div class="line-left">手机号</div>
            <div class="line-right">
                <input name="username" class="username" type="text" placeholder="请填写正确手机号">
            </div>
        </div>
        <div class="line">
            <div class="line-left">密码</div>
            <div class="line-right">
            <input name="password" class="password" type="password" placeholder="6-20个字符">
            </div>
        </div>
        <div class="line">
            <div class="line-left"></div>
            <div class="line-right">
                <p><span>密码强度：</span></p>
                <div class="pwd-strength">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="line">
            <div class="line-left">确认密码</div>
            <div class="line-right">
            <input name="password" class="check-password" type="password" placeholder="再次填写密码">
            </div>
            </div>
        <div class="line">
            <div class="line-left">校验码</div>
            <div class="line-right">
                <div class="cc-right1">
                    <input name="" class="" type="text" placeholder="填写校验码">
                </div>
                <div class="cc-right2">
                    <img src="<?php echo captcha_src(); ?>" alt="captcha" />
                </div>
                <div class="cc-right3">
                    <a>看不清楚?换一个</a>
                </div>
            </div>
        </div>
        <div class="line">
            <div class="line-left">验证码</div>
            <div class="line-right">
                <div class="vc-right1">
                    <input name="" class="" type="text" placeholder="填写验证码">
                </div>
                <div class="vc-right2">
                    <input type="submit" class="submit-btn1" value="获取短信验证码">
                </div>
            </div>
        </div>
        <div class="line">
            <div class="line-left"></div>
            <div class="line-right tip">
                <span>如未收到短信，请联络客服或拨打400-655-1212</span>
            </div>
        </div>
        <div class="line">
            <input type="checkbox">
            <div class="line-right">
                <span>我已阅读并同意  </span><a href="">会员注册协议</a>
                <span>  和  </span><a href="">隐私保护政策</a>
            </div>
        </div>
        <input type="submit" class="submit-btn2" value="注册">
    </div>
    <div class="register-right">
        <img src="__STATIC__/index/image/ymsj_register.jpg">
    </div>
</div>
<?php echo widget('Common/footer'); ?>
</body>
</html>