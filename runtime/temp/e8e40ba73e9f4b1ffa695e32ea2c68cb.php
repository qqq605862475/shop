<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"C:\UPUPW_NP7.0\htdocs\shop\public/../application/admin\view\admin\list.html";i:1505993649;}*/ ?>
<!--挂件头部-->
<?php echo widget('Common/header'); ?>
</head>
<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">


        <!-- Page Sidebar -->
        <!--挂件菜单页-->
        <?php echo widget('Common/left'); ?>


        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <!--判断数据的状态切换模版-->
        <!--用户加载模版-->
        <?php if(isset($indexData)): ?>
        <!--挂件列表页-->
        <?php echo widget('Common/lis'); endif; ?>
        <!--用户添加模版-->
        <?php if(isset($aeData)): ?>
        <!--挂件增改页-->
        <?php echo widget('Common/ae'); endif; ?>
        <!-- /Page Content -->
    </div>
</div>

<!--Basic Scripts-->
<script src="__STATIC__/admin/style/jquery_002.js"></script>
<script src="__STATIC__/admin/style/bootstrap.js"></script>
<script src="__STATIC__/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__STATIC__/admin/style/beyond.js"></script>


</body></html>