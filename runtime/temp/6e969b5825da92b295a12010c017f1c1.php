<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:96:"C:\Users\Administrator\Desktop\UPUPW_NP7.0\shop\public/../application/admin\view\admin\list.html";i:1506336982;}*/ ?>
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
        <!--用户加载-->
        <?php if(isset($memberList)): ?>

        <!--挂件列表页-->
        <?php echo widget('Common/memberList'); endif; if(isset($memberAe)): ?>
        <!--挂件增改页-->
        <?php echo widget('Common/memberAe'); endif; if(isset($memberaE)): ?>
        <!--挂件增改页-->
        <?php echo widget('Common/memberAe'); endif; ?>
    </div>
</div>

<!--Basic Scripts-->
<script src="__STATIC__/admin/style/jquery_002.js"></script>
<script src="__STATIC__/admin/style/bootstrap.js"></script>
<script src="__STATIC__/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__STATIC__/admin/style/beyond.js"></script>


</body></html>