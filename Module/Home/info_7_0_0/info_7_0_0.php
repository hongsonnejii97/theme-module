<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/info_7_0_0';

	if($check == 0){
		$css_inline .= '
			<style>
				.info_7_0_0__title p {
					font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
				}
		
				.info_7_0_0 {
					background: #F5F5F5;
					padding: 30px 0
				}
		
				.info_7_0_0__title p {
					font-size: 18px;
					font-weight: bold;
					text-transform: uppercase;
					color: #015440;
					padding-bottom: 10px;
					margin-bottom: 10px
				}
		
				.info_7_0_0__title p::after {
					display: block;
					width: 100px;
					border-bottom: 1px solid #ddd;
					content: "";
					margin-top: 10px
				}
		
				.info_7_0_0__box1 {
					display: flex;
					flex-wrap: wrap;
					justify-content: space-between;
					width: 95%;
					margin: 0 auto;
					margin-left: 0
				}
		
				.info_7_0_0__box1 .item {
					width: 48%;
					margin-bottom: 20px
				}
		
				.info_7_0_0__box1 .item .pic {
					overflow: hidden;
					transition: all 0.4s
				}
		
				.info_7_0_0__box1 .item .pic img {
					width: 100%;
					display: block
				}
		
				.info_7_0_0__box1 .item .text {
					margin-top: 10px;
					transition: all 0.4s
				}
		
				.info_7_0_0__box1 .item:hover .text {
					color: #FF8B0F;
					transition: all 0.4s
				}
		
				.info_7_0_0__box1 .item:hover .pic {
					overflow: hidden;
					transition: all 0.4s
				}
		
				.info_7_0_0__box1 .item:hover .pic img {
					transform: scale(1.1);
					transition: all 0.4s
				}
		
				.info_7_0_0__box2 ul {
					padding: 0;
					list-style: none
				}
		
				.info_7_0_0__box2 ul li {
					padding-bottom: 20px
				}
		
				.info_7_0_0__box2 ul li a {
					display: flex;
					align-items: center;
					color: #015440;
					transition: all 0.4s
				}
		
				.info_7_0_0__box2 ul li span {
					background: #FF8B0F;
					width: 26px;
					height: 26px;
					color: #fff;
					display: flex;
					align-items: center;
					justify-content: center;
					margin-right: 20px;
					position: relative;
					border-radius: 3px
				}
		
				.info_7_0_0__box2 ul li span::after {
					border-left: 5px solid #FF8B0F;
					border-right: 5px solid transparent;
					border-bottom: 5px solid transparent;
					border-top: 5px solid transparent;
					width: 0;
					height: 0;
					content: "";
					position: absolute;
					left: 26px;
					top: 9px;
					display: block
				}
		
				.info_7_0_0__box2 ul li:hover a {
					color: #FF8B0F;
					transition: all 0.4s
				}
		
				@media (max-width: 1024px) {
					.info_7_0_0__title p {
						font-size: 15px
					}
				}
		
				@media (max-width: 414px) {
					.info_7_0_0 {
						padding-bottom: 10px
					}
		
					.info_7_0_0__title {
						text-align: center
					}
		
					.info_7_0_0__title p {
						font-size: 16px
					}
		
					.info_7_0_0__title p::after {
						margin: 10px auto 0
					}
		
					.info_7_0_0__box1 {
						margin-bottom: 10px
					}
		
					.info_7_0_0__box1 .item {
						text-align: center
					}
		
					.info_7_0_0__box1 .item .text {
						font-size: 14px
					}
		
					.info_7_0_0__box2 ul li a {
						font-size: 14px
					}
				}
			</style>
        ';
		add_action('wp_footer', 'info_7_0_0');
	}
	
?>


<section class="info_7_0_0">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="info_7_0_0__title">
					<?php
						$title1 = $field['title1'];
						echo '<p>'.$title1.'</p>';
					?>
				</div>
				<div class="info_7_0_0__box1">
					
					<?php 
						$rows = $field["info1_place"];
						foreach($rows as $row):
							$detail1_place = $row['detail1_place'];
							$data1 = explode("\n", $detail1_place);
							echo '
							<a href="'.$data1[2].'" class="item">
								<div class="pic">
									<img class="img-lazy" data-src="'.$data1[1].'" alt="'.$data1[0].'">
								</div>
								<div class="text">
								'.$data1[0].'
								</div>
							</a>
							';
						endforeach;
					?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="info_7_0_0__title">
					<?php
						$title2 = $field['title2'];
						echo '<p>'.$title2.'</p>';
					?>
				</div>
				<div class="info_7_0_0__box2">
					<ul>
						<?php 
							$i = 1;
							$rows = $field["info2_place"];
							foreach($rows as $key => $row):
								$detail2_place = $row['detail2_place'];
								$url_place = $row['url_place'];
								echo '
								<li><a href="'.$url_place.'"><span>'.$i.'</span>'.$detail2_place.'</a></li>
								';
								$i++;
							endforeach;
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>