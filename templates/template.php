<?php 
	/* Template Name: Page Template
	* Template Post Type: page */       
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
  <?php wp_head(); ?>
  

</head>

<body itemscope="" itemtype="http://schema.org/WebPage">
<?php  
	get_template_part('Module/module');
	wp_footer();  
?>


