    <style>
        .cate_3_2_0 h1,
		.cate_3_2_0__box .item p {
			font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
		}

		.cate_3_2_0 {
			padding-bottom: 10px
		}

		.cate_3_2_0 h1 {
			font-size: 22px;
			color: #015440;
			text-transform: uppercase;
			font-weight: 600
		}

		.cate_3_2_0__box {
			padding-top: 20px;
			margin-top: 20px;
			border-top: 1px dashed #ccc
		}

		.cate_3_2_0__box .item {
			margin-bottom: 10px;
			display: block
		}

		.cate_3_2_0__box .item p {
			margin: 0;
			font-size: 15px;
			font-weight: 600;
			text-transform: uppercase;
			color: #015440;
			transition: all 0.4s
		}

		.cate_3_2_0__box .item .box {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			margin-top: 10px
		}

		.cate_3_2_0__box .item .box .pic {
			width: 30%
		}

		.cate_3_2_0__box .item .box .pic img {
			width: 100%;
			display: block
		}

		.cate_3_2_0__box .item .box .text {
			width: 70%;
			padding-left: 20px
		}

		.cate_3_2_0__box .item .box .text p {
			text-transform: initial;
			color: #222;
			font-weight: 400;
			font-size: 14px;
			margin-bottom: 10px
		}

		.cate_3_2_0__box .item .box .text p span:first-child {
			margin-right: 20px
		}

		.cate_3_2_0__box .item .more_link {
			text-align: right;
			padding: 5px 0;
			position: relative
		}

		.cate_3_2_0__box .item .more_link span {
			display: inline-block;
			color: #777;
			background: #e3e3e3;
			border-radius: 5px;
			padding: 5px 10px;
			z-index: 1;
			position: relative;
			transition: all 0.4s
		}

		.cate_3_2_0__box .item .more_link::before {
			content: "";
			position: absolute;
			left: 0;
			top: 20px;
			width: 100%;
			height: 1px;
			background: #E3E3E3
		}

		.cate_3_2_0__box .item .more_link:hover span {
			background: #015440;
			color: #fff;
			transition: all 0.4s
		}

		.cate_3_2_0__box .item:hover p {
			color: #FF8B0F;
			transition: all 0.4s
		}

		@media (max-width: 414px) {
			.cate_3_2_0 h1 {
				font-size: 18px
			}

			.cate_3_2_0__box .item p {
				font-size: 14px
			}

			.cate_3_2_0__box .item .box .text {
				padding-left: 10px;
				font-size: 12px
			}

			.cate_3_2_0__box .item .more_link span {
				font-size: 12px
			}
		}
	</style>
	

<div class="cate_3_2_0">
	<h1><?php echo single_cat_title();?></h1>
	<div class="cate_info_1_1_1">
		<?php
			echo category_description();
		?>
	</div>
	<div class="cate_3_2_0__box">
		
		<?php

			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					global $post; 
						$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');            
						$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
						$excerpt = wp_trim_words( get_the_excerpt($post->ID), 30 );
						$comment = wp_count_comments()->approved;
						echo '
							<a href="'.get_permalink($post->ID).'" class="item">
								<p>'.get_the_title($post->ID).'</p>
								<div class="box">
									<div class="pic">
										<img src="'.$img.'" alt="'.get_the_title($post->ID).'">
									</div>
									<div class="text">
										<p><span><i class="icon-calendar"></i> '.get_the_date('d-m-Y').' </span><span><i class="icon-chat-1"></i> '.$comment.' Comments</span></p>
										'.$excerpt.'
									</div>
								</div>
								<div class="more_link"><span>Chi tiết »</span></div>
							</a>
						';
				endwhile;
			endif;

		?>
	</div>
</div>