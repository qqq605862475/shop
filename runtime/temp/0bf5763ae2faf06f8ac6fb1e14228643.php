<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:104:"C:\Users\Administrator\Desktop\UPUPW_NP7.0\htdocs\shop\public/../application/admin\view\order\index.html";i:1506671951;}*/ ?>
<!--挂件头部-->
<?php echo widget('Common/header'); ?>
</head>
<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">


        <!-- Page Sidebar -->
        <!--挂件菜单页-->
        <?php echo widget('Common/left'); ?>

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
                                            <th class="text-center">订单ID</th>
                                            <th class="text-center">总金额</th>
                                            <th class="text-center">用户ID</th>
                                            <th class="text-center">状态</th>
                                            <th class="text-center">支付状态</th>
                                            <th class="text-center">订单生成时间</th>
                                            <th class="text-center">最后一次修改的时间</th>
                                            <th class="text-center">商品名称</th>
                                            <th class="text-center">手机号</th>
                                            <th class="text-center">库存</th>
                                            <th class="text-center">数量</th>
                                            <th class="text-center">备注</th>
                                            <th class="text-center">备注</th>
                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($data as $v): ?>
                                        <tr>
                                            <td align="center"><?php echo $v['order_id']; ?></td>
                                            <td align="center"><?php echo $v['total_amount']; ?></td>
                                            <td align="center"><?php echo $v['member_id']; ?></td>
                                            <td align="center"><?php echo $v['status']; ?></td>
                                            <td align="center"><?php echo $v['pay_status']; ?></td>
                                            <td align="center"><?php echo $v['pay_method']; ?></td>
                                            <td align="center"><?php echo date("Y-m-d H:i:s",$v['create_time']); ?></td>
                                            <td align="center"><?php echo $v['last_modify']; ?></td>
                                            <td align="center"><?php echo $v['ship_name']; ?></td>
                                            <td align="center"><?php echo $v['ship_mobile']; ?></td>
                                            <td align="center"><?php echo $v['ship_area']; ?></td>
                                            <td align="center"><?php echo $v['ship_addr']; ?></td>
                                            <td align="center"><?php echo $v['memo']; ?></td>
                                            <td align="center">
                                                <a href="#" onClick="warning('确实要删除吗',
                                                '<?php echo url("Oder/del",["id"=>$v['order_id']]); ?>' )"
                                                class="btn btn-danger btn-sm shiny">
                                                <i class="fa fa-trash-o"></i> 删除
                                                </a>
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
                <?php echo $data->render(); ?>
            </div>
            <!-- /Page Body -->
        </div>
    </div>
</div>

<!--Basic Scripts-->
<script src="__STATIC__/admin/style/jquery_002.js"></script>
<script src="__STATIC__/admin/style/bootstrap.js"></script>
<script src="__STATIC__/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__STATIC__/admin/style/beyond.js"></script>


</body></html>