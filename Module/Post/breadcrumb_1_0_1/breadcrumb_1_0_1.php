<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Post/breadcrumb_1_0_1';
?>

<style>
	.breadcrumb_1_0_1 {
	font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
	}
	.breadcrumb_1_0_1 {
	width: 100%;
	height: auto;
	padding: 10px 0 10px 0px;
	font-size: 14px;
	position: relative;
	margin: 10px 0 40px;
	}
	.breadcrumb_1_0_1 .container{
	padding: 0;
	}
	.breadcrumb_1_0_1::after {
	content: "";
	background: url(<?php echo $path ?>/images/bg-breadcrum.png) center 0 no-repeat;
	background-size: 100%;
	width: 100%;
	height: 7px;
	position: absolute;
	bottom: -10px;
	left: 0;
	}
	@media (max-width: 414px) {
	.breadcrumb_1_0_1::after {
		background: #00ABE5;
		height: 3px;
		bottom: -5px;
	}
	}
	.breadcrumb_1_0_1{
		margin: 10px 0;
	}
	.breadcrumb_1_0_1 a {
	text-decoration: none;
	}
	.breadcrumb_1_0_1 p {
	margin: 0;
	}
	.breadcrumb_1_0_1 span {
	color: #333;
	}
	.breadcrumb_1_0_1 a {
	color: #333;
	}
</style>

<div class="breadcrumb_1_0_1">
	<div class="container">
		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="">','</p>');} ?>
	</div>
</div>