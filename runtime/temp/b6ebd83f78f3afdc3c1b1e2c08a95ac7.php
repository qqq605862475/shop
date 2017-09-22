<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/admin\view\goods\list.html";i:1505994904;s:84:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/admin\view\common\header.html";i:1505725262;s:82:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/admin\view\common\left.html";i:1505977779;}*/ ?>
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
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="__STATIC__/admin/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__STATIC__/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Admin/logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Admin/edit'); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">


        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">



    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Admin/index'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>


        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-calendar"></i>
                <span class="menu-text">分类</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Cate/index'); ?>">
                                    <span class="menu-text">
                                        分类列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Cate/addTopCate'); ?>">
                                    <span class="menu-text">
                                        添加顶级分类                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-tag"></i>
                <span class="menu-text">标签</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Tags/index'); ?>">
                                    <span class="menu-text">
                                        标签列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>


        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">商品</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Goods/index'); ?>">
                                    <span class="menu-text">
                                        商品列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-link"></i>
                <span class="menu-text">链接</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Links/index'); ?>">
                                    <span class="menu-text">
                                        链接列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        配置                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="http://www.chuanke.com/s2260700.html" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">视频教程</span>
                <i class="menu-expand"></i>
            </a>
        </li>



    </ul>
    <!-- /Sidebar Menu -->
</div>


        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo url('Index/index'); ?>">系统</a>
                    </li>
                    <li class="active">商品管理</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <button type="button" tooltip="添加商品" class="btn btn-sm btn-azure btn-addon"
                        onClick="javascript:window.location.href = '<?php echo url('Goods/add'); ?>'"><i class="fa fa-plus"></i>
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
                                            <th class="text-center">商品名称</th>
                                            <th class="text-center">商品分类</th>
                                            <th class="text-center">商品封面</th>
                                            <th class="text-center">商品售价</th>
                                            <th class="text-center">市场价</th>
                                            <th class="text-center">是否上架</th>
                                            <th class="text-center">库存</th>
                                            <th class="text-center">是否冻结库存</th>
                                            <th class="text-center">是否热销</th>
                                            <th class="text-center">是否新品</th>
                                            <th class="text-center">是否删除</th>
                                            <th class="text-center">添加时间</th>
                                            <th class="text-center">最近更新时间</th>
                                            <th class="text-center">最近更新管理员</th>
                                            <th class="text-center">操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data as $v): ?>
                                        <tr>
                                            <td align="center" style="padding: 0"><?php echo $v['goods_id']; ?></td>
                                            <td align="center" style="padding: 0"><?php echo $v['goods_name']; ?></td>
                                            <td align="center" style="padding: 0"><?php echo $v['name']; ?></td>
                                            <td align="center" style="padding: 0"><?php echo $v['name']; ?></td>
                                            <td align="center" style="padding: 0"><?php echo $v['sell_price']; ?></td>
                                            <td align="center" style="padding: 0"><?php echo $v['market_price']; ?></td>
                                            <td align="center" style="padding: 0"><?php echo $v['maketable']==1?'是':'否'; ?></td>
                                            <td align="center" style="padding: 0"><?php echo $v['store']; ?></td>
                                            <td align="center" style="padding: 0"><?php echo $v['freez']==1?'是':'否'; ?></td>
                                            <td align="center" style="padding: 0"><?php echo $v['is_hot']==1?'是':'否'; ?></td>
                                            <td align="center" style="padding: 0"><?php echo $v['is_new']==1?'是':'否'; ?></td>
                                            <td align="center" style="padding: 0"><?php echo $v['recycle']==1?'删除':'存在'; ?></td>
                                            <td align="center" style="padding: 0"><?php echo date("Y-m-d H:i:s",$v['create_time']); ?></td>
                                            <td align="center" style="padding: 0"><?php echo date("Y-m-d H:i:s",$v['last_modify']); ?></td>
                                            <td align="center" style="padding: 0"><?php echo $v['last_modify_id']; ?></td>

                                            <td align="center">
                                                <a href="<?php echo url('Goods/edit',['id'=>$v['goods_id']]); ?>"
                                                   class="btn btn-primary btn-sm shiny">
                                                    <i class="fa fa-edit"></i> 编辑
                                                </a>

                                                <a href="#" onClick="warning('确定要操作吗',
                                                 ' <?php echo url('Goods/del',['id'=>$v['goods_id']]); ?>'   )"
                                                   class="btn btn-danger btn-sm shiny"
                                                >
                                                    <i class="fa fa-trash-o"></i>
                                                    <?php if($v['recycle'] == 1): ?>
                                                    恢复
                                                    <?php else: ?>
                                                    删除
                                                    <?php endif; ?>
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
                <!--分页-->
            </div>
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