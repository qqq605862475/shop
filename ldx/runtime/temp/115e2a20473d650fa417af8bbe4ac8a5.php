<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"C:\UPUPW_NP7.0\project\ldx\public/../application/admin\view\article\index.html";i:1505872985;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title></title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__STATIC__/admin/style/bootstrap.css" rel="stylesheet">
    <link href="__STATIC__/admin/style/font-awesome.css" rel="stylesheet">
    <link href="__STATIC__/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__STATIC__/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__STATIC__/admin/style/demo.css" rel="stylesheet">
    <link href="__STATIC__/admin/style/typicons.css" rel="stylesheet">
    <link href="__STATIC__/admin/style/animate.css" rel="stylesheet">

</head>
<body>
<!-- 头部 -->
<?php echo widget('Admin/header'); ?>

<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <?php echo widget('Admin/left'); ?>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="#">系统</a>
                    </li>
                    <li class="active">文章管理</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <button type="button" tooltip="添加文章" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('Article/add'); ?>'"> <i class="fa fa-plus"></i> Add
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
                                            <th class="text-center">缩略图</th>
                                            <th class="text-center">文章名称</th>
                                            <th class="text-center">所属栏目</th>
                                            <th class="text-center">关键字</th>
                                            <th class="text-center">作者</th>
                                            <th class="text-center">发布时间</th>
                                            <th class="text-center">点击量</th>
                                            <th class="text-center">是否推荐</th>
                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <?php foreach($data as $arr): ?>
                                            <td align="center"><?php echo $arr['id']; ?></td>
                                            <td align="center"><?php if($arr['pic'] != ''): ?><img src="<?php echo $arr['pic']; ?>" width="80px"><?php else: ?>
                                                暂无缩略图
                                                <?php endif; ?></td>
                                            <td align="center"><?php echo $arr['title']; ?></td>
                                            <td align="center"><?php echo $arr['catename']; ?></td>
                                            <td align="center"><?php echo $arr['keywords']; ?></td>
                                            <td align="center"><?php echo $arr['author']; ?></td>
                                            <td align="center"><?php echo date("Y-m-d H:i:s",$arr['time']); ?></td>
                                            <td align="center"><?php echo $arr['click']; ?></td>
                                            <td align="center"><?php echo !empty($arr['state'])?'是':'否'; ?></td>
                                            <td align="center">
                                                <a href="<?php echo url("Article/edit",array('id'=>$arr['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                                <i class="fa fa-edit"></i> 编辑
                                                </a>
                                                <a href="#" onClick="warning('确实要删除吗', '<?php echo url("Article/del",array('id'=>$arr['id'])); ?>')" class="btn btn-danger btn-sm shiny">
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
            </div>
            <?php echo $data->render(); ?>
            <!-- /Page Body -->
        </div>
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