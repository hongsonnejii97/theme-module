<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/person_2_6_0';

	if($check == 0){
		$css_inline .= '
			<style>
				.person_2_6_0__title p {
					font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
				}
		
				.person_2_6_0 {
					padding: 30px 0
				}
		
				.person_2_6_0__title p {
					font-size: 18px;
					font-weight: bold;
					text-transform: uppercase;
					color: #015440;
					padding-bottom: 10px;
					margin-bottom: 10px
				}
		
				.person_2_6_0__title p::after {
					display: block;
					width: 100px;
					border-bottom: 1px solid #ddd;
					content: "";
					margin-top: 10px
				}
		
				.person_2_6_0__box {
					margin-top: 10px
				}
		
				.person_2_6_0__box .item {
					display: flex;
					flex-wrap: wrap;
					justify-content: space-between
				}
		
				.person_2_6_0__box .item .pic {
					width: 25%
				}
		
				.person_2_6_0__box .item .pic img {
					width: 100%
				}
		
				.person_2_6_0__box .item .text {
					width: 70%;
					padding: 10px 10px 10px 20px;
					border: 1px #058a66 dotted;
					border-radius: 5px;
					position: relative
				}
		
				.person_2_6_0__box .item .text p {
					font-style: italic
				}
		
				.person_2_6_0__box .item .text a {
					color: #015440
				}
		
				.person_2_6_0__box .item .text::before {
					border-right: 8px solid #058a66;
					border-left: 8px solid transparent;
					border-bottom: 8px solid transparent;
					border-top: 8px solid transparent;
					width: 0;
					height: 0;
					content: "";
					position: absolute;
					left: -15px;
					top: 20px;
					display: block
				}
		
				@media (max-width: 414px) {
					.person_2_6_0 {
						padding: 10px 0 20px
					}
		
					.person_2_6_0__title {
						text-align: center
					}
		
					.person_2_6_0__title p {
						font-size: 16px
					}
		
					.person_2_6_0__title p::after {
						margin: 10px auto 0
					}
		
					.person_2_6_0__box .item .text p {
						font-size: 14px
					}
		
					.person_2_6_0__box .item .text a {
						font-size: 14px
					}
				}
		
				@media (max-width: 360px) {
					.person_2_6_0__box .item .text p {
						font-size: 12px
					}
		
					.person_2_6_0__box .item .text a {
						font-size: 12px
					}
				}
			</style>
        ';
		add_action('wp_footer', 'person_2_6_0');
		function person_2_6_0(){ 
			echo '
				<script>
				$(".person_2_6_0 .owl-carousel").owlCarousel({loop:!0,margin:20,items:2,nav:!1,dots:!0,responsive:{0:{items:1},414:{items:1},768:{items:2},1024:{items:2}}});
				</script>
			';           
		};		
	}
	
?>

<section class="person_2_6_0">
	<div class="container">
		<div class="person_2_6_0__title">
			<?php
				$title = $field['person_title'];
				echo '
					<p>'.$title.'</p>
				';
			?>
		</div>
		<div class="person_2_6_0__box">
			<div class="owl-carousel owl-theme">
				<?php 
					$rows = $field["person_place"];
					foreach($rows as $row):
						$detail_place = $row['detail_place'];
						$data = explode("\n", $detail_place);
						echo '
						<div class="item">
							<div class="pic">
								<img class="img-lazy" data-src="'.$data[2].'" alt="'.$data[0].'">
							</div>
							<div class="text">
								<p>'.$data[1].'</p>
								<a href="'.$data[3].'">Chi tiết <i class="icon-angle-double-right"></i></a>
							</div>
						</div>
						';
					endforeach;
				?>
			</div>
		</div>
	</div>
</section>