<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:81:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/admin\view\admin\list.html";i:1506040717;s:84:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/admin\view\common\header.html";i:1506040717;s:82:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/admin\view\common\left.html";i:1505977779;s:80:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/admin\view\common\ae.html";i:1506040717;}*/ ?>
<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo url('Index/index'); ?>">系统</a>
            </li>
            <li>
                <a href="<?php echo url('Admin/index'); ?>">用户管理</a>
            </li>
            <li class="active">添加用户</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->

    <!-- Page Body -->
    <div class="page-body">

        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-blue">
                        <span class="widget-caption">新增用户</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            <form class="form-horizontal" role="form" action="<?php echo url('Admin/edit'); ?>" method="post">

                                <div class="form-group">
                                    <label for="username"
                                           class="col-sm-2 control-label no-padding-right">用户</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="username" placeholder="" name="username" value=<?php echo $aeData['username']; ?>
                                               type="text">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="password"
                                           class="col-sm-2 control-label no-padding-right">密码</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="password" placeholder="" name="password"
                                               type="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="lock" class="col-sm-2 control-label no-padding-right">用户是否冻结</label>
                                    <div class="col-xs-4">
                                        <label>
                                            <input class="checkbox-slider slider-icon yesno" name="lock" checked="checked" type="checkbox" <?php if($aeData['lock'] == 1): ?>checked="checked"<?php endif; ?>>
                                            <span class="text"></span>
                                        </label>
                                    </div>
                                </div>
                                <input type="hidden" name="manager_id" value=<?php echo $aeData['manager_id']; ?>>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">保存信息</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Page Body -->
</div>