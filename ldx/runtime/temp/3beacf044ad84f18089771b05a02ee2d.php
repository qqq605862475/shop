<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"C:\UPUPW_NP7.0\project\ldx\public/../application/index\view\Admin\header.html";i:1505872143;}*/ ?>
<div class="ladytop">
    <div class="nav">
        <div class="left"><a href=""><img src="__STATIC__/index/images/hunshang.png" alt="wed114婚尚"></a></div>
        <div class="right">
            <div class="box">'
                <a href="<?php echo url('Index/index'); ?>"  rel='dropmenu209'>首页</a>
                <?php foreach($cate as $a): ?>
                <a href="<?php echo url('Index/index',['id'=>$a['id']]); ?>"  rel='dropmenu209'><?php echo $a['catename']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="hotmenu">
    <div class="con">
        热门标签：
        <?php foreach($data as $v): ?>
        <a href='qiwenqushi/'><?php echo $v['tagsname']; ?></a>
        <?php endforeach; ?>
    </div>
</div>
