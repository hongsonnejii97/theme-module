<style>
	.post_new_other_4_0_0 p {
		font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
	}

	.post_new_other_4_0_0 {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
		margin-bottom: 20px
	}

	.post_new_other_4_0_0 p {
		background: #015440;
		padding: 10px 0 10px 20px;
		font-size: 16px;
		color: #fff;
		clear: both;
		text-transform: uppercase;
		font-weight: 500;
		margin: 8px 0
	}

	.post_new_other_4_0_0 .box {
		width: 49%;
		border-right: 1px dashed #ccc;
		padding-right: 15px
	}

	.post_new_other_4_0_0 .box:last-child {
		border: none
	}

	.post_new_other_4_0_0 .box ul {
		padding-left: 20px;
		color: #015440
	}

	.post_new_other_4_0_0 .box ul li a {
		color: #015440;
		font-size: 14px
	}

	@media (max-width: 414px) {
		.post_new_other_4_0_0 .box {
			width: 100%;
			border: none;
			padding: 0
		}
	}
</style>

<div class="post_new_other_4_0_0">
	<div class="box">
		<p><i class="icon-doc-text-inv"></i> Tin liên quan</p>
			
		<?php
			$categories = get_the_category($post->ID);
			if ($categories){
				$category_ids = array();
				foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
				$args=array(
					'category__in'   => $category_ids,
					'post__not_in'   => array($post->ID), //Bỏ qua bài viết hiện tại
					'posts_per_page' =>10, // Số bài viết bạn muốn hiển thị.
					'caller_get_posts'=>1,
					'no_found_rows'   =>true //Bỏ qua load phân trang tăng hiệu suât query
				);
				$my_query = new wp_query($args);

				if( $my_query->have_posts() ){
				echo '
					<ul>
				';
			while ($my_query->have_posts()){
				$my_query->the_post();
		?>

			<li><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>

		<?php
			}
			echo '</ul>';
			}
			}
		?>

	</div>
	<div class="box">
		<p><i class="icon-doc-text-inv"></i> Tin mới nhất</p>
		<ul>

			<?php 
				$args = array(
					'post_status' => 'publish', // Chỉ lấy những bài viết được publish
					'showposts' => 10, // số lượng bài viết
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';  ?>
			<?php endwhile; wp_reset_postdata(); ?>

		</ul>
	</div>
</div>
