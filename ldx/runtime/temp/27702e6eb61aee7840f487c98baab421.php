<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"C:\UPUPW_NP7.0\project\ldx\public/../application/index\view\Admin\header.html";i:1505872143;s:77:"C:\UPUPW_NP7.0\project\ldx\public/../application/index\view\Admin\right.html";i:1505885447;}*/ ?>
<div class="right">
    <!--右侧各种广告-->
    <!--猜你喜欢-->
    <div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
        <div class="hm-t-container" style="width: 298px;"><div class="hm-t-main"><div class="hm-t-header">热门点击</div><div class="hm-t-body">
            <ul class="hm-t-list hm-t-list-img">
                <?php foreach($data as $v): ?>
            <li class="hm-t-item hm-t-item-img"><a data-pos="0" title=<?php echo $v['title']."(".$v['click'].")"; ?> target="_blank" href="<?php echo url('Index/article',['id'=>$v['id']]); ?>" class="hm-t-img-title" style="visibility: visible;"><span><?php echo $v['title']."(".$v['click'].")"; ?></span></a></li>
            <?php endforeach; ?>
            </ul>
        </div></div></div>

    </div></div>
    <div style="height:15px"></div>
    <div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
        <div style="width: 298px;" class="hm-t-container"><div class="hm-t-main"><div class="hm-t-header">推荐阅读</div><div class="hm-t-body"><ul class="hm-t-list hm-t-list-img">
            <?php foreach($admin as $a): ?>
            <li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="<?php echo url('Index/article',['id'=>$a['id']]); ?>" target="_blank" title="深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)" data-pos="0"><span><?php echo $a['title']."(".$a['click'].")"; ?></span></a></li>
             <?php endforeach; ?>
        </ul>
        </div></div></div>

    </div></div>
    <div style="height:15px"></div>

    <div id="bdcs"><div class="bdcs-container"><meta content="IE=9" http-equiv="x-ua-compatible">   <!-- 嵌入式 -->  <div id="default-searchbox" class="bdcs-main bdcs-clearfix">      <div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">
        <form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form" target="_blank" method="post" action="<?php echo url('Index/index'); ?>">
        <input type="text" placeholder="请输入关键词" id="bdcs-search-form-input" class="bdcs-search-form-input" name="keywords" autocomplete="off" style="line-height: 30px; width:220px;">
        <input type="submit" value="搜索" id="bdcs-search-form-submit" class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">
       </form>
    </div>
        <div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 552px; width: 239px;">
        <ul id="bdcs-search-sug-list" class="bdcs-search-sug-list"></ul>
    </div>
    </div>
    </div>
    </div>

    <div style="height:15px"></div>



</div>