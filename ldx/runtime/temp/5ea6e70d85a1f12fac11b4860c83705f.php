<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"C:\UPUPW_NP7.0\project\ldx\public/../application/index\view\index\index.html";i:1505955499;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>童老师ThinkPHP交流群：484519446</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="童老师ThinkPHP交流群：484519446" />
<meta name="description" content="童老师ThinkPHP交流群：484519446" /> 
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="__STATIC__/index/style/lady.css" type="text/css" rel="stylesheet" />
<script type='text/javascript' src='__STATIC__/index/style/ismobile.js'></script>
</head>

<body>

<?php echo widget('Admin/header'); ?>

<!--顶部通栏-->
<?php if(isset($da)): ?>
<div class="position"><a href='http://www.wed114.cn'>主页</a> ><?php echo $da['catename']; ?><a href=''></a> > </div>
<?php endif; ?>

<div class="position"></div>

<div class="overall">

	<div class="left">
    <?php foreach($data as $c): ?>
				<div class="xnews2">
				<div class="pic"><a target="_blank" href="<?php echo url('Index/article',['id'=>$c['id']]); ?>"><img src=<?php echo $c['pic']; ?> alt="在家如何自制烤肉 烤肉串致癌不适宜多吃"/></a></div>
				<div class="dec">
				<h3><a target="_blank" href="<?php echo url('Index/article',['id'=>$c['id']]); ?>"><?php echo $c['title']; ?></a></h3>
				<div class="time">发布时间：<?php echo date("Y-m-d H:i:s",$c['time']); ?></div>
				<p><?php echo $c['desc']; ?></p>
					<?php
					   $keywords=$c['keywords'];
					   $arr=explode(",",$keywords);
					?>
				<div class="time">
					<?php foreach($arr as $v): ?>
					<a href='z97712.html'><?php echo $v; ?></a>
					<?php endforeach; ?>
				</div>

				</div>
				</div>

		<?php endforeach; ?>
				<!--<div class="pages">-->
				<!--<div class="plist" >-->
				<!--<ul><li class="thisclass">1</li>-->
<!--<li><a href='list_117_2.html'>2</a></li>-->
<!--<li><a href='list_117_3.html'>3</a></li>-->
<!--<li><a href='list_117_4.html'>4</a></li>-->
<!--<li><a href='list_117_5.html'>5</a></li>-->
<!--<li><a href='list_117_6.html'>6</a></li>-->
<!--<li><a href='list_117_7.html'>7</a></li>-->
<!--<li><a href='list_117_8.html'>8</a></li>-->
<!--<li><a href='list_117_9.html'>9</a></li>-->
<!--<li><a href='list_117_2.html'>下一页</a></li>-->
<!--<li><a href='list_117_1201.html'>末页</a></li>-->
<!--</ul>-->
				<!--</div>-->
				<!--</div>-->
	</div>


	<?php echo widget('Admin/right'); ?>

</div>


<div class="footerd">
<ul>
<li>Copyright &#169; 2008-2016  all rights reserved 版权所有   <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow">蜀icp备08107937号</a></li> 
</ul>
</div>

<div style="display:none;"><script src='goto/my-65537.js' language='javascript'></script><script src="images/js/count_zixun.js" language="JavaScript"></script></div>

</body>
</html>