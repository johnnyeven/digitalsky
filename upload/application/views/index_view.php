<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>数字天空</title>
<link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/images/style.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/images/index.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/images/move/zzsc.css'); ?>" />
<script type="text/javascript" src="<?php echo site_url('resources/js/jquery-1.9.1.min.js'); ?>"></script>
</head>

<body>
<div id="cps">
	<div id="weibo">
    	
    	<div class="p1">
        <a href="#"><img src="<?php echo site_url('resources/images/wb1.jpg'); ?>" /></a> <a href="#"><img src="<?php echo site_url('resources/images/wb2.jpg'); ?>" /></a> <a href="#"><img src="<?php echo site_url('images/wb3.jpg'); ?>" /></a>
        <a href="#"><img src="<?php echo site_url('resources/images/wb4.jpg'); ?>" /></a> <a href="#"><img src="<?php echo site_url('resources/images/wb5.jpg'); ?>" /></a> <a href="#"><img src="<?php echo site_url('images/wb6.jpg'); ?>" /></a> 
        </div>
        <div class="p2"><a href="#" class="a7">官方微博</a>  <a href="#">加入收藏</a></div>
    </div>
    <div id="header">
    	<div class="co1">
        	<img src="<?php echo site_url('resources/images/logo.jpg'); ?>" width="349" height="119" />
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
    	
        <div class="pro-switch">
		<div class="slider">
			<div class="flexslider">
				<ul class="slides">
                	<?php if(!empty($slider)): ?>
                    <?php foreach($slider as $row): ?>
                	<li>
						<div class="img">
                        <?php if(!empty($row->slider_url)): ?>
                        <a href="<?php echo $row->slider_url; ?>" target="_blank">
                        <?php endif; ?>
                        	<img src="<?php echo site_url($row->slider_pic_path); ?>" alt="" />
                        <?php if(!empty($row->slider_url)): ?>
                        </a>
                        <?php endif; ?>
                        </div>
					</li>
                    <?php endforeach; ?>
                    <?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
	


<script defer src="<?php echo site_url('resources/js/slider.js'); ?>"></script> 
<script type="text/javascript">
    $(function(){
		$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
				$('body').removeClass('loading');
			}
		});
    });
  </script>
    </div>
    
    
    <div id="main">
    	<ul>
        	<li><a href="about.html"><img src="<?php echo site_url('resources/images/home_img1.jpg'); ?>" /></a></li>
            <li><a href="join.html"><img src="<?php echo site_url('resources/images/home_img2.jpg'); ?>" /></a></li>
            <li><a href="honor.html"><img src="<?php echo site_url('resources/images/home_img3.jpg'); ?>" /></a></li>
        </ul>
    </div>
    
    <div id="bot_logo">
    	<a href="index.html"><img src="<?php echo site_url('resources/images/bot_logo.jpg'); ?>" /></a>
    </div>
    
    <div id="footer">
        <p>
        	数字天空 - 版权所有 增值电信业务经营许可证 XXXXXXXXXXXXXXXX
        </p>
    </div>
</div><!--#end cps-->
</body>
</html>
