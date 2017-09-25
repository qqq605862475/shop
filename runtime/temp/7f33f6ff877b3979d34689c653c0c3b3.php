<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:96:"C:\Users\Administrator\Desktop\UPUPW_NP7.0\shop\public/../application/admin\view\admin\list.html";i:1506336982;s:99:"C:\Users\Administrator\Desktop\UPUPW_NP7.0\shop\public/../application/admin\view\common\header.html";i:1506316236;s:97:"C:\Users\Administrator\Desktop\UPUPW_NP7.0\shop\public/../application/admin\view\common\left.html";i:1506340047;s:103:"C:\Users\Administrator\Desktop\UPUPW_NP7.0\shop\public/../application/admin\view\common\memberList.html";i:1506339650;}*/ ?>
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
                onClick="javascript:window.location.href = '<?php echo url('Member/add'); ?>'"><i class="fa fa-plus"></i>
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
                                    <th class="text-center">缩略图</th>
                                    <th class="text-center">手机</th>
                                    <th class="text-center">邮箱</th>
                                    <th class="text-center">创建时间</th>
                                    <th class="text-center">登录次数</th>
                                    <th class="text-center">最后一次登录时间</th>
                                    <th class="text-center">是否冻结</th>
                                    <th class="text-center">ip地址</th>
                                    <th class="text-center">操作</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach($memberList['data'] as $v): ?>
                                <tr>
                                    <td align="center"><?php echo $v['member_id']; ?></td>
                                    <td align="center"><?php echo $v['username']; ?></td>
                                    <td align="center"><?php if($v['pic'] != ''): ?>
                                        <img src=<?php echo $v['pic']; ?> alt="" width="50px">
                                        <?php else: ?>
                                        暂无缩略图
                                        <?php endif; ?>
                                    </td>
                                    <td align="center"><?php echo $v['mobile']; ?></td>
                                    <td align="center"><?php echo $v['email']; ?></td>
                                    <td align="center"><?php echo date("Y-m-d H:i:s",$v['reg_time']); ?></td>
                                    <td align="center"><?php echo $v['login_count']; ?></td>
                                    <td align="center"><?php echo date("Y-m-d H:i:s",$v['login_time']); ?></td>
                                    <td align="center"><?php echo !empty($v['lock'])?'是':'否'; ?></td>
                                    <td align="center"><?php echo $v['ip']; ?></td>
                                    <td align="center">
                                        <a href="<?php echo url('Member/edit',array('member_id'=>$v['member_id'])); ?>"
                                           class="btn btn-primary btn-sm shiny">
                                            <i class="fa fa-edit"></i> 编辑
                                        </a>
                                        <?php if($v['member_id'] != 1): ?>
                                        <!--判断id是否为1  不为1  显示-->
                                        <a href="#" onClick="warning('确实要删除吗',
                                                 '<?php echo url('Member/del',array('member_id'=>$v['member_id'])); ?>')"
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
        <?php echo $memberList['page']; ?>
    </div>
    <!-- /Page Body -->
</div>