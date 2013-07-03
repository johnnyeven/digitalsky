<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
<?php echo $std_header; ?>
  </head>

<body>
	
<?php echo $std_nav; ?> <!-- /navbar -->

<div id="content">
	
	<div class="container">
		
		<div class="row">
			
			<?php echo $std_sidebar; ?> <!-- /span3 -->
			
			<div class="span9">
            
                <?php echo $content; ?> <!-- /widget -->
				
			</div> <!-- /span9 -->
			
			
		</div> <!-- /row -->
		
	</div> <!-- /container -->
	
</div> <!-- /content -->
					
	
<?php echo $std_footer; ?> <!-- /footer -->


    

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo site_url('resources/admin/js/jquery-1.7.2.min.js'); ?>"></script>
<script src="<?php echo site_url('resources/admin/js/excanvas.min.js'); ?>"></script>
<script src="<?php echo site_url('resources/admin/js/jquery.flot.js'); ?>"></script>
<script src="<?php echo site_url('resources/admin/js/jquery.flot.pie.js'); ?>"></script>
<script src="<?php echo site_url('resources/admin/js/jquery.flot.orderBars.js'); ?>"></script>
<script src="<?php echo site_url('resources/admin/js/jquery.flot.resize.js'); ?>"></script>
<script src="<?php echo site_url('resources/admin/js/bootstrap.js'); ?>"></script>
<script src="<?php echo site_url('resources/admin/js/charts/bar.js'); ?>"></script>

  </body>
</html>
