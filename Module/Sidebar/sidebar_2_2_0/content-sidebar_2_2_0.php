<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Sidebar/sidebar_2_2_0'; 
    if($check == 0){
        $css_inline .= '
			<style>
				.sidebar_2_2_0__newslq ul li a::before,
				.sidebar_2_2_0__newsnb .sb-tabs .sb-tab::after,
				.sidebar_2_2_0__newsnb .sb-box ul li a::before {
					font-family: "fontello";
					font-style: normal;
					font-weight: 400;
					speak: none;
					display: inline-block;
					text-decoration: inherit;
					width: 1em;
					margin-right: .2em;
					text-align: center;
					font-variant: normal;
					text-transform: none;
					line-height: 1em;
					margin-left: .2em;
					-webkit-font-smoothing: antialiased;
					-moz-osx-font-smoothing: grayscale
				}
		
				.sidebar_2_2_0__margin {
					height: 30px
				}
		
				.sidebar_2_2_0__title {
					padding: 10px;
					font-size: 14px;
					font-weight: 500;
					text-transform: uppercase;
					border-bottom: 3px #e3e3e3 solid;
					border-left: 1px #e3e3e3 solid;
					border-right: 1px #e3e3e3 solid;
					border-top: 1px #004283 solid;
					background: #015440;
					margin-bottom: 2px;
					color: #fff;
					line-height: 22px;
					font-weight: 500;
					border-radius: 5px;
					position: relative;
					margin-top: 30px;
				}

				.sidebar_2_2_0__title:first-child{
					margin-top: 0;
				}

				.sidebar_2_2_0__newsnb{
					margin-top: 30px;
				}
		
				.sidebar_2_2_0__newslq ul {
					padding-left: 0;
					margin: 0;
					list-style: none;
					background: #F8F8F8
				}
		
				.sidebar_2_2_0__newslq ul li {
					border-bottom: 1px solid #e3e3e3
				}
		
				.sidebar_2_2_0__newslq ul li a {
					font-weight: 400;
					color: #015440;
					padding: 10px;
					display: block;
					font-size: 14px;
					position: relative;
					padding-left: 20px;
					transition: all 0.4s
				}
		
				.sidebar_2_2_0__newslq ul li a::before {
					content: "\e887";
					position: absolute;
					left: 0;
					top: 12px;
					color: #B5B5B5
				}
		
				.sidebar_2_2_0__newslq ul li a:hover {
					background: #029687;
					color: #fff;
					transition: all 0.4s
				}
		
				.sidebar_2_2_0__newsnb .sb-tabs {
					display: flex;
					flex-wrap: wrap;
					align-items: center;
					justify-content: space-between
				}
		
				.sidebar_2_2_0__newsnb .sb-tabs .sb-tab {
					width: 49%;
					text-align: center;
					background: #DDDDDD;
					color: #015440;
					padding: 10px;
					position: relative
				}
		
				.sidebar_2_2_0__newsnb .sb-tabs .sb-tab.active {
					background: #015440;
					color: #fff
				}
		
				.sidebar_2_2_0__newsnb .sb-tabs .sb-tab.active::after {
					display: block
				}
		
				.sidebar_2_2_0__newsnb .sb-tabs .sb-tab::after {
					content: "\e884";
					color: #015440;
					font-size: 25px;
					position: absolute;
					bottom: -15px;
					left: calc(50% - 20px);
					display: none
				}
		
				.sidebar_2_2_0__newsnb .sb-box {
					display: none
				}
		
				.sidebar_2_2_0__newsnb .sb-box.active {
					display: block
				}
		
				.sidebar_2_2_0__newsnb .sb-box ul {
					padding-left: 0;
					margin: 0;
					list-style: none;
					margin-top: 20px
				}
		
				.sidebar_2_2_0__newsnb .sb-box ul li {
					border-bottom: 1px solid #e3e3e3
				}
		
				.sidebar_2_2_0__newsnb .sb-box ul li a {
					font-weight: 400;
					color: #015440;
					padding: 10px;
					display: block;
					font-size: 14px;
					position: relative;
					padding-left: 20px;
					transition: all 0.4s
				}
		
				.sidebar_2_2_0__newsnb .sb-box ul li a::before {
					content: "\e887";
					position: absolute;
					left: 0;
					top: 12px;
					color: #B5B5B5
				}
		
				.sidebar_2_2_0__newsnb .sb-box ul li a:hover {
					background: #029687;
					color: #fff;
					transition: all 0.4s
				}
		
				@media (max-width: 1024px) {
					.sidebar_2_2_0__title {
						font-size: 12px
					}
		
					.sidebar_2_2_0__newslq ul li a {
						font-size: 12px
					}
		
					.sidebar_2_2_0__newsnb .sb-tabs .sb-tab {
						font-size: 12px
					}
		
					.sidebar_2_2_0__newsnb .sb-box ul li a {
						font-size: 12px
					}
		
					.sidebar_2_2_0__newsVideo img {
						width: 100%
					}
				}
		
				@media (max-width: 414px) {
					.sidebar_2_2_0 {
						display: none
					}
				}
			</style>
		';
		
		add_action('wp_footer', 'sidebar_2_2_0');
        function sidebar_2_2_0(){ 
            echo '
                <script>
				$(".owl-img.owl-carousel").owlCarousel({loop:!0,margin:20,items:1,nav:!1,dots:!1,autoplay:!0,responsive:{0:{items:1},414:{items:1},768:{items:1},1024:{items:1}}}),$(".sb-tabs .sb-tab").click(function(){var s=$(this).attr("data-tab");$(".sb-tabs .sb-tab").removeClass("active"),$(".sb-box.active").removeClass("active"),$(this).addClass("active"),$("#"+s).addClass("active")});
                </script>
            ';           
        };
    }
?>      

<div class="sidebar_2_2_0">

	<?php
		foreach( $field as $key2 => $value):  
			foreach( $value as $key3 => $list):
				if( $list['acf_fc_layout'] == 'sidebar_title' ):
					echo'
						<div class="sidebar_2_2_0__title">
							<i class="icon-videocam"></i>
							'.$list['title'].'
						</div>
					';
					// End Tieu De

				elseif( $list['acf_fc_layout'] == 'sidebar_new' ):
					echo '
						<div class="sidebar_2_2_0__newslq">
						<ul>
					';
								
					foreach($list['content'] as $key => $post):
						setup_postdata($post);
						$des = get_the_excerpt($post->ID);
						$link = get_permalink();
						$title = get_the_title();
						$img = get_the_post_thumbnail_url();
						$excerpt = wp_trim_words( get_the_excerpt(), 30 );
							echo'
								<li><a href="'.$link.'">'.$title.'</a></li>
							';
					endforeach;
					wp_reset_postdata();

					echo '
						</ul>
						</div>
					';
					 
					// End List Dich Vu

				elseif( $list['acf_fc_layout'] == 'sidebar_clip' ):
					$data = explode("\n",  $list["detail_video"]);
					$data_ytb = $data[2];
					$linkID = getIDvideo($data_ytb);
					echo '
						<div class="sidebar_2_2_0__newsVideo">
							<a href="" class="modal-clip" data-video-id="'.$linkID.'">
								<img src="'.$data[1].'" alt="'.$data[0].'">
							</a>
						</div>
					';
					
				elseif( $list['acf_fc_layout'] == 'sidebar_img' ):
					echo '
						<div class="sidebar_2_2_0__newsImg">
						<div class="owl-carousel owl-theme owl-img">
					';
					$rows = $list["img_place"];
					foreach($rows as $row):
						$place_title = $row['place_title'];
						$place_url = $row['place_url'];
						echo '
							<div class="item">
								<img src="'.$place_url.'" alt="'.$place_title.'">
							</div>
						';
					endforeach;
					echo '
						</div>
						</div>
					';

				elseif( $list['acf_fc_layout'] == 'sidebar_postlist' ):
					echo '
						<div class="sidebar_2_2_0__newsnb">
						<div class="sb-tabs">
					';
					$rows = $list["postlist_place"];
					foreach($rows as $key5 => $row):
						$place_tab = $row['place_tab'];
						$content2 = $row['content2'];
						if($key5 == 0):
							$active = 'active';
						else:
							$active = '';
						endif;	
						echo '
							<a class="sb-tab '.$active.'" data-tab="nb-'.$key5.'">'.$place_tab.'</a>
						';
					endforeach;
					echo '
						</div>
						
					';
					$rows = $list["postlist_place"];
					foreach($rows as $key5 => $row):
						$place_tab = $row['place_tab'];
						$content2 = $row['content2'];
						if($key5 == 0):
							$active = 'active';
						else:
							$active = '';
						endif;
						echo '
							<div id="nb-'.$key5.'" class="sb-box '.$active.'">
								<ul>
						';
						foreach($content2 as $key6 => $post):
                            setup_postdata($post);
                            $des = get_the_excerpt($post->ID);
                            $link = get_permalink();
                            $title = get_the_title();
                            $img = get_the_post_thumbnail_url();
                            $excerpt = wp_trim_words( get_the_excerpt(), 30 );
                                echo'
									<li><a href="'.$link.'">'.$title.'</a></li>
                                ';
                        endforeach;
						wp_reset_postdata(); 
						
						echo '
							</ul>
							</div>
						';
						
					endforeach;
							
				endif;

			endforeach;
		endforeach;
	?>

</div>


