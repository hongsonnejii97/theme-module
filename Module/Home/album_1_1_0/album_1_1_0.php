<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/album_1_1_0';

	if($check == 0){
		$css_inline .= '
			<style>
				.album_1_1_0__title p {
					font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
				}
			
				.album_1_1_0 {
					padding: 30px 0
				}
			
				.album_1_1_0__title p {
					font-size: 18px;
					font-weight: bold;
					text-transform: uppercase;
					color: #015440;
					padding-bottom: 10px;
					margin-bottom: 10px
				}
			
				.album_1_1_0__title p::after {
					display: block;
					width: 100px;
					border-bottom: 1px solid #ddd;
					content: "";
					margin-top: 10px
				}
			
				.album_1_1_0__box1 img {
					width: 100%
				}
			
				.album_1_1_0__box2 .owl-carousel {
					position: relative
				}
			
				.album_1_1_0__box2 .owl-carousel .owl-prev {
					position: absolute;
					left: -10px;
					top: calc(50% - 20px);
					background: #058A66 !important
				}
			
				.album_1_1_0__box2 .owl-carousel .owl-next {
					position: absolute;
					right: -10px;
					top: calc(50% - 20px);
					background: #058A66 !important
				}
			
				@media (max-width: 414px) {
					.album_1_1_0__title p {
						font-size: 16px
					}
			
					.album_1_1_0__box2 {
						margin-top: 20px
					}
				}
			</style>
        ';
		add_action('wp_footer', 'album_1_1_0');
		function album_1_1_0(){ 
			echo '
				<script>
				$(".album_1_1_0 .owl-carousel").owlCarousel({loop:!1,margin:10,items:1,nav:!0,dots:!1,responsive:{0:{items:1},414:{items:1},768:{items:1},1024:{items:1}}});
				</script>
            ';           
        };
	}
	
?>


<section class="album_1_1_0">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="album_1_1_0__box1">
					<?php
						$data1 = explode("\n", $field['detail_videoo']);
						$linkID = getIDvideo($data1[3]);
						echo '
							<div class="album_1_1_0__title">
								<p>'.$data1[0].'</p>
							</div>
							<a href="" class="modal-clip" data-video-id="'.$linkID.'">
								<img class="img-lazy" data-src="'.$data1[2].'" alt="'.$data1[1].'">
							</a>
						';
					?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="album_1_1_0__box2">
                    <div class="album_1_1_0__title">
						<?php
							$title_img = $field['title_imgg'];
							echo '
								<p>'.$title_img.'</p>
							';
						?>
                    </div>
                    <div class="owl-carousel owl-theme">
                        <?php 
							$rows = $field["image_place"];
							foreach($rows as $row):
								$place_title = $row['place_title'];
								$place_url = $row['place_url'];
								echo '
								<div class="item">
									<img class="img-lazy" data-src="'.$place_url.'" alt="'.$place_title.'">
								</div>
								';
							endforeach;
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
