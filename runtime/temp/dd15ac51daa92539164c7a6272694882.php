<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/admin\view\index\index.html";i:1505469134;s:84:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/admin\view\common\header.html";i:1505725262;s:82:"E:\upupw\UPUPW_NP7.0\htdocs\shop\public/../application/admin\view\common\left.html";i:1505977779;}*/ ?>
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