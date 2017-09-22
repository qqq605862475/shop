<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/admin\view\common\header.html";i:1506040717;s:82:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/admin\view\common\left.html";i:1505977779;s:82:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/admin\view\common\list.html";i:1506040717;}*/ ?>
<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo url('Index/index'); ?>">系统</a>
            </li>
            <li class="active">用户管理</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->

    <!-- Page Body -->
    <div class="page-body">

        <button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon"
                onClick="javascript:window.location.href = '<?php echo url('Admin/add'); ?>'"><i class="fa fa-plus"></i>
            Add
        </button>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="flip-scroll">
                            <table class="table table-bordered table-hover">
                                <thead class="">
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">用户名称</th>
                                    <th class="text-center">创建时间</th>
                                    <th class="text-center">是否冻结</th>
                                    <th class="text-center">ip地址</th>
                                    <th class="text-center">最后一次登录的时间</th>
                                    <th class="text-center">操作</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach($indexData as $v): ?>
                                <tr>
                                    <td align="center"><?php echo $v['manager_id']; ?></td>
                                    <td align="center"><?php echo $v['username']; ?></td>
                                    <td align="center"><?php echo date("Y-m-d H:i:s",$v['create_time']); ?></td>
                                    <td align="center"><?php echo !empty($v['lock'])?'是':'否'; ?></td>
                                    <td align="center"><?php echo $v['ip']; ?></td>
                                    <td align="center"><?php echo $v['login_time']; ?></td>
                                    <td align="center">
                                        <a href="<?php echo url('Admin/edit',array('id'=>$v['manager_id'])); ?>"
                                           class="btn btn-primary btn-sm shiny">
                                            <i class="fa fa-edit"></i> 编辑
                                        </a>
                                        <?php if($v['manager_id'] != 1): ?>
                                        <!--判断id是否为1  不为1  显示-->
                                        <a href="#" onClick="warning('确实要删除吗',
                                                 '<?php echo url('Admin/del',array('id'=>$v['manager_id'])); ?>')"
                                           class="btn btn-danger btn-sm shiny">
                                            <i class="fa fa-trash-o"></i> 删除
                                        </a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Body -->
</div>