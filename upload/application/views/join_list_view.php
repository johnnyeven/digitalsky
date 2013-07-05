<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $config->config_title; ?>——加入我们更多</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/images/style.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/images/show.css'); ?>" />
<script type="text/javascript" src="<?php echo base_url('resources/js/jquery-1.9.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('resources/js/favorite.js'); ?>"></script>
</head>

<body>
<div id="cps">
	<div id="weibo">
    	<p>
        <a href="#"><img src="<?php echo base_url('resources/images/wb1.jpg'); ?>" /></a> <a href="#"><img src="<?php echo base_url('resources/images/wb2.jpg'); ?>" /></a> <a href="#"><img src="<?php echo base_url('resources/images/wb3.jpg'); ?>" /></a>
        <a href="#"><img src="<?php echo base_url('resources/images/wb4.jpg'); ?>" /></a> <a href="#"><img src="<?php echo base_url('resources/images/wb5.jpg'); ?>" /></a> <a href="#"><img src="<?php echo base_url('resources/images/wb6.jpg'); ?>" /></a> <a href="#" class="a7">官方微博</a>  <a href="javascript:addFavorite()">加入收藏</a>
        </p>
    </div>
    <div id="header">
    	<div class="co1">
        	<img src="<?php echo base_url('resources/images/logo.jpg'); ?>" width="349" height="119" />
        </div>
        <div class="co2">
        	<p>
            	<a href="<?php echo site_url('index'); ?>">首页</a>
                <a href="<?php echo site_url('about'); ?>">关于数字天空</a>
                <a href="<?php echo site_url('honor'); ?>">荣誉出品</a>
                <a href="<?php echo site_url('join'); ?>">加入我们</a>
            </p>
        </div>
    </div>
    <div id="banner">
    	<img src="<?php echo base_url('resources/images/join.jpg'); ?>" width="1004" height="103" />
    </div>
    
    <div id="main">
    	<div class="pos41">
        	<img src="<?php echo base_url('resources/images/zpgw.jpg'); ?>" />
        </div>
        <ul class="join_zpgw">
        	<li class="l1"><img src="<?php echo base_url('resources/images/zp_js.jpg'); ?>" /></li>
            <li class="l2">
            <?php if(!empty($result1)): ?>
            	<?php foreach($result1 as $row): ?>
            	<a href="<?php echo site_url('show/job/' . $row->job_id); ?>">▪ <?php echo $row->job_name; ?></a>
            	<?php endforeach; ?>
            <?php else: ?>
            	<a href="javascript:void(0)">当前分类下没有职位</a>
            <?php endif; ?>
            </li>
        </ul>
        <ul class="join_zpgw">
        	<li class="l1"><img src="<?php echo base_url('resources/images/zp_yw.jpg'); ?>" /></li>
            <li class="l2">
            <?php if(!empty($result2)): ?>
            	<?php foreach($result2 as $row): ?>
            	<a href="<?php echo site_url('show/job/' . $row->job_id); ?>">▪ <?php echo $row->job_name; ?></a>
            	<?php endforeach; ?>
            <?php else: ?>
            	<a href="javascript:void(0)">当前分类下没有职位</a>
            <?php endif; ?>
            </li>
        </ul>
        <ul class="join_zpgw">
        	<li class="l1"><img src="<?php echo base_url('resources/images/zp_ms.jpg'); ?>" /></li>
            <li class="l2">
            <?php if(!empty($result3)): ?>
            	<?php foreach($result3 as $row): ?>
            	<a href="<?php echo site_url('show/job/' . $row->job_id); ?>">▪ <?php echo $row->job_name; ?></a>
            	<?php endforeach; ?>
            <?php else: ?>
            	<a href="javascript:void(0)">当前分类下没有职位</a>
            <?php endif; ?>
            </li>
        </ul>
        <ul class="join_zpgw">
        	<li class="l1"><img src="<?php echo base_url('resources/images/zp_zn.jpg'); ?>" /></li>
            <li class="l2">
            <?php if(!empty($result4)): ?>
            	<?php foreach($result4 as $row): ?>
            	<a href="<?php echo site_url('show/job/' . $row->job_id); ?>">▪ <?php echo $row->job_name; ?></a>
            	<?php endforeach; ?>
            <?php else: ?>
            	<a href="javascript:void(0)">当前分类下没有职位</a>
            <?php endif; ?>
            </li>
        </ul>
        
        
        
        
        
        	
        <div class="pos41" style="margin-top:50px;">
        	<img src="<?php echo base_url('resources/images/lxfs.jpg'); ?>" />
        </div>
        <div class="contact">
        	<?php echo $article->article_content; ?>
        </div>
        
    </div>
    
    <div id="bot_logo">
    	<a href="#"><img src="<?php echo base_url('resources/images/bot_logo.jpg'); ?>" /></a>
    </div>
    
    <div id="footer">
        <?php echo $config->config_footer; ?>
    </div>
</div><!--#end cps-->
</body>
</html>
