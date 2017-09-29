<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\UPUPW\htdocs\shop\public/../application/index\view\login\login.html";i:1506501261;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登入</title>
    <link href="__STATIC__/index/style/header.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/footer.css" type="text/css" rel="stylesheet"/>
    <link href="__STATIC__/index/style/login.css" type="text/css" rel="stylesheet">
</head>
<body style="height: 200px">
<?php echo widget('Common/header'); ?>
<div class="login-container">
    <div class="login-left">
        <div class="login-title1">登录</div>
        <form action="<?php echo url('Login/doLogin'); ?>" method="post">
        <div class="login-title2">登录账号</div>
        <input name="username" class="username" type="text" placeholder="用户名/邮箱地址/手机号" style="width: 360px">
        <div class="login-title2">密码</div>
        <input name="password" class="password" type="password" placeholder="填写密码" style="width: 360px">
        <div class="login-remember">
            <input type="checkbox">
            <div class="login-title2">记住账号</div>
        </div>
        <input type="submit" class="submit-btn" value="登录" style="width: 360px"  >
        <div class="login-title2">
            <a>忘记密码？</a>
        </div>
        </form>
    </div>

    <div class="login-right">
        <img src="__STATIC__/index/image/ymsj_login.png">
        <span>我不是会员， <a>要加入。</a></span>
    </div>
</div>

<?php echo widget('Common/footer'); ?>
</body>
</html>