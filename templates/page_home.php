<?php 
	/* Template Name: Page Home
	* Template Post Type: page
    */       

//set headers to NOT cache a page
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

//or, if you DO want a file to cache, use:
header("Cache-Control: max-age=31557600"); //30days (60sec  60min  24hours * 30days)

?>
<!DOCTYPE html>
<html>

<head itemscope="" itemtype="http://schema.org/WebSite">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/core/css/style.css" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/Module/favicon.png">
  <?php wp_head(); ?>
  <?php get_template_part('Module/module_head');?>
  

</head>

<body itemscope="" itemtype="http://schema.org/WebPage">
<?php get_template_part('Module/module_body');  ?>
<?php 
  get_template_part('Module/module_header');
  get_template_part('Module/module');	
  get_template_part('Module/module_footer');

?>
<script src="<?php echo get_template_directory_uri(); ?>/core/dist/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/core/dist/lib.js"></script>
<?php get_template_part('Module/Other/gotop_1_0_0/gotop_1_0_0'); ?>
<?php get_template_part('Module/Other/messenger_1_0_0/messenger_1_0_0'); ?>
<script type="text/javascript" src="https://quangcao247.com.vn/h/config.js?v=12345"></script>

</body>
<?php 
	wp_footer(); 
?>