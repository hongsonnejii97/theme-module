<?php 
	get_header(); 
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$slug = str_replace('/','',parse_url($actual_link)['path']);
	$categories = get_the_category();
	$category_id = $categories[0]->cat_ID;
	$cat_item =  get_category_by_slug($slug); 
	
	$cate = get_field('cate','category_'.$category_id);
	foreach($cate as $value):
		$cate_type = $value['cate_type'];
	endforeach;
	// var_dump($cate_type);
?>

<?php if($cate_type == 0): ?>
	<?php get_template_part('Module/Layout/layout_1_0_1/layout_cate'); ?>

<?php elseif($cate_type == 1): ?>

<?php elseif($cate_type == 2): ?>

<?php endif; ?>


<?php get_footer(); ?>







