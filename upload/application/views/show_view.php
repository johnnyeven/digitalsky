<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>数字天空内页</title>
<link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/images/style.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/images/show.css'); ?>" />
<script type="text/javascript" src="<?php echo site_url('resources/js/jquery-1.9.1.min.js'); ?>"></script>
</head>

<body>
<div id="cps">
	<div id="weibo">
    	<p>
        <a href="#"><img src="<?php echo site_url('resources/images/wb1.jpg'); ?>" /></a> <a href="#"><img src="<?php echo site_url('resources/images/wb2.jpg'); ?>" /></a> <a href="#"><img src="<?php echo site_url('resources/images/wb3.jpg'); ?>" /></a>
        <a href="#"><img src="<?php echo site_url('resources/images/wb4.jpg'); ?>" /></a> <a href="#"><img src="<?php echo site_url('resources/images/wb5.jpg'); ?>" /></a> <a href="#"><img src="<?php echo site_url('resources/images/wb6.jpg'); ?>" /></a> <a href="#" class="a7">官方微博</a>  <a href="#">加入收藏</a>
        </p>
    </div>
    <div id="header">
    	<div class="co1">
        	<img src="<?php echo site_url('resources/images/logo.jpg'); ?>" width="349" height="119" />
        </div>
        <div class="co2">
        	<p>
            	<a href="index.html">首页</a>
                <a href="about.html">关于数字天空</a>
                <a href="honor.html">荣誉出品</a>
                <a href="join.html">加入我们</a>
            </p>
        </div>
    </div>
    <div id="banner">
    	<img src="<?php echo site_url('resources/images/join.jpg'); ?>" width="1004" height="103" />
    </div>
    
    <div id="main">
    	<div class="pos">
        	<img src="<?php echo site_url('resources/images/zpgw.jpg'); ?>" />
        </div>
        <div class="content">
        	<div class="left">
            	<?php if(!empty($category)): ?>
            	<div><img src="<?php echo site_url(getCategoryPic($value->job_category)); ?>" /></div>
                <ul>
                	<?php foreach($category as $row): ?>
                	<li><a href="<?php echo site_url('show/job/' . $row->job_id); ?>" class="cur">▪ <?php echo $row->job_name; ?></a></li>
                	<?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
            <div class="right">
            	<div class="tit"><?php echo $value->job_name; ?></div>
                <div class="article">
                          <div>招聘开始时间：<?php echo date('Y-m-d', $value->job_posttime); ?></div>
                          <div style="display:none;">招聘截止时间：<?php echo date('Y-m-d', $value->job_endtime); ?></div>
                          <div>招聘类别：<?php echo getCategoryName($value->job_category); ?></div>
                          <div>招聘数量：<?php echo $value->job_count; ?></div>
                          <div>招聘要求：<br /><?php echo $value->job_content; ?></div>
                          <div>相关工作经验：<?php echo $value->job_exp; ?></div>

                </div>
                <div class="share">
                	分享到：
                </div>
                <p><img src="<?php echo site_url('resources/images/lxwm.jpg'); ?>" /></p>
            </div>
        </div>
    </div>
    
    <div id="bot_logo">
    	<a href="#"><img src="<?php echo site_url('resources/images/bot_logo.jpg'); ?>" /></a>
    </div>
    
    <div id="footer">
        <p>
        	数字天空 - 版权所有 增值电信业务经营许可证 XXXXXXXXXXXXXXXX
        </p>
    </div>
</div><!--#end cps-->
</body>
</html>
