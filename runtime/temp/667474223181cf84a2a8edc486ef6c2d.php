<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:96:"C:\Users\Administrator\Desktop\UPUPW_NP7.0\shop\public/../application/admin\view\admin\list.html";i:1506336982;s:99:"C:\Users\Administrator\Desktop\UPUPW_NP7.0\shop\public/../application/admin\view\common\header.html";i:1506316236;s:97:"C:\Users\Administrator\Desktop\UPUPW_NP7.0\shop\public/../application/admin\view\common\left.html";i:1506340047;s:101:"C:\Users\Administrator\Desktop\UPUPW_NP7.0\shop\public/../application/admin\view\common\memberAe.html";i:1506341399;}*/ ?>
<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <a href="#">系统</a>
            </li>
            <li>
                <a href="<?php echo url('Member/index'); ?>">用户列表</a>
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
                    <?php if($memberAe['way'] == 1): ?>
                    <div class="widget-header bordered-bottom bordered-blue">
                        <span class="widget-caption">新增用户</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            <form class="form-horizontal" role="form" action="<?php echo url('Member/add'); ?>" method="post" enctype="multipart/form-data">
                                <?php else: ?>
                                <div class="widget-header bordered-bottom bordered-blue">
                                    <span class="widget-caption">修改用户</span>
                                </div>
                                <div class="widget-body">
                                    <div id="horizontal-form">
                                        <form class="form-horizontal" role="form" action="<?php echo url('Member/edit'); ?>" method="post" enctype="multipart/form-data">
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">用户名</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="username" placeholder="" name="username" required="" type="text" value=<?php echo $memberAe['username']; ?>>
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>

                                            <div class="form-group">
                                                <label for="password" class="col-sm-2 control-label no-padding-right">密码</label>
                                                <div class="col-sm-6">
                                                    <?php if($memberAe['way'] == 1): ?>
                                                    <input class="form-control" id="author" placeholder="" name="password" required="" type="text" value=''>
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                                <?php else: ?>
                                                <input class="form-control" id="author" placeholder="" name="password"  type="text" value=''>
                                            </div>
                                                <?php endif; ?>
                                            </div>

                                            <div class="form-group">
                                                <label for="pic" class="col-sm-2 control-label no-padding-right">头像</label>
                                                <div class="col-sm-6">
                                                    <input type="file" name="pic" id="pic">
                                                    <?php if($memberAe['pic'] != ''): ?>
                                                    <img src=<?php echo $memberAe['pic']; ?> alt="" width="50px">
                                                    <?php elseif($memberAe['way'] != 1): ?>
                                                    <p class="help-block col-sm-4 ">暂无头像</p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="mobile" class="col-sm-2 control-label no-padding-right">手机</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="mobile" placeholder="" name="mobile" type="text" value=<?php echo $memberAe['mobile']; ?>>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label no-padding-right">邮箱</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control" id="email" placeholder="" name="email" type="text" value=<?php echo $memberAe['email']; ?>>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="lock" class="col-sm-2 control-label no-padding-right">是否冻结</label>
                                                <div class="col-xs-4">
                                                    <label>
                                                        <input class="checkbox-slider slider-icon yesno" name="lock" <?php if($memberAe['lock'] == 1): ?>checked="checked"<?php endif; ?> type="checkbox">
                                                        <span class="text"></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <input type="hidden" name="member_id" value=<?php echo $memberAe['member_id']; ?>>

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
        <!-- /Page Content -->
    </div>
</div>