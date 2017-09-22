<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"C:\UPUPW_NP7.0\project\ldx\public/../application/index\view\index\article.html";i:1505884439;s:78:"C:\UPUPW_NP7.0\project\ldx\public/../application/index\view\Admin\header.html";i:1505872143;s:78:"C:\UPUPW_NP7.0\project\ldx\public/../application/index\view\Admin\footer.html";i:1505894070;}*/ ?>

<!--相关阅读 -->
<div class="xgread">
    <div class="til"><h4>相关阅读</h4></div>
    <div class="lef"><!--相关阅读主题链接--><script src='/jiehun/goto/my-65540.js' language='javascript'></script></div>
    <div class="rig">
        <ul>
            <?php foreach($data as $v): ?>
            <li><a href='<?php echo url("Index/article",["id"=>$v['id']]); ?>' target="_blank"><?php echo $v['title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<!--频道推荐-->
<div class="hotsnew">
    <div class="til"><h4>频道推荐</h4></div>
    <ul>
        <?php foreach($data as $a): ?>
        <li><div class="tu"><a href='<?php echo url("Index/article",["id"=>$a['id']]); ?>' target="_blank"><img src=<?php echo $a['pic']; ?> alt=<?php echo $a['title']; ?>/></a></div><p><a href='./images/20160920156214.html'><?php echo $a['title']; ?></a></p></li>
        <?php endforeach; ?>
    </ul>
</div>