<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/news_3_4_0';
	if($check == 0){
		$css_inline .= '
			<style>
                .news_3_4_0__title p {
                    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
                }
        
                .news_3_4_0__box .item::before {
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
        
                .news_3_4_0 {
                    padding-bottom: 30px
                }
        
                .news_3_4_0__title p {
                    background: #f7f4f4;
                    border: 1px solid #e3e3e3;
                    padding: 3px 10px;
                    display: table;
                    margin-top: -1px;
                    color: #015440;
                    text-transform: uppercase;
                    border-bottom-left-radius: 8px;
                    border-bottom-right-radius: 8px;
                    font-weight: 700
                }
        
                .news_3_4_0__box {
                    margin-top: 20px
                }
        
                .news_3_4_0__box .item {
                    color: #015440;
                    margin-bottom: 10px;
                    display: block;
                    font-size: 14px;
                    transition: all 0.4s
                }
        
                .news_3_4_0__box .item img {
                    width: 100%;
                    display: block
                }
        
                .news_3_4_0__box .item::before {
                    content: "\e887";
                    color: #015440
                }
        
                .news_3_4_0__box .item:first-child::before {
                    display: none
                }
        
                .news_3_4_0__box .item:hover {
                    color: #FF8B0F;
                    transition: all 0.4s
                }
        
                @media (max-width: 414px) {
                    .news_3_4_0 {
                        padding-bottom: 0
                    }
        
                    .news_3_4_0 .row .col-md-3 {
                        width: 50%;
                        margin-bottom: 20px;
                        padding: 0 10px
                    }
        
                    .news_3_4_0__box .item {
                        font-size: 12px
                    }
                }
			</style>
        ';
        add_action('wp_footer', 'news_3_4_0');
        
	}
	
?>

<section class="news_3_4_0">
    <div class="container">
        <div class="news_3_4_0__title">
            <?php
                $title = $field['title'];
                echo '
                    <p>'.$title.'</p>
                ';
            ?>
        </div>
        <div class="news_3_4_0__box">
            <div class="row">
                <div class="col-md-3">
                    <?php
                        foreach($field['content1'] as $key => $post):
                            setup_postdata($post);
                            $des = get_the_excerpt($post->ID);
                            $link = get_permalink();
                            $title = get_the_title();
                            $img = get_the_post_thumbnail_url();
                            $excerpt = wp_trim_words( get_the_excerpt(), 30 );
                                if($key == 0):
                                    echo '
                                        <a href="'.$link.'" class="item">
                                            <img class="img-lazy" data-src="/rs/?w=263&h=166&src='.$img.'" alt="'.$title.'">
                                        </a>
                                    ';
                                else:
                                    echo '
                                        <a href="'.$link.'" class="item">'.$title.'</a>
                                    ';
                                endif;
                        endforeach;
                        wp_reset_postdata(); 
                    ?>
                </div>
                <div class="col-md-3">
                    <?php
                        foreach($field['content2'] as $key => $post):
                            setup_postdata($post);
                            $des = get_the_excerpt($post->ID);
                            $link = get_permalink();
                            $title = get_the_title();
                            $img = get_the_post_thumbnail_url();
                            $excerpt = wp_trim_words( get_the_excerpt(), 30 );
                                if($key == 0):
                                    echo '
                                        <a href="'.$link.'" class="item">
                                            <img class="img-lazy" data-src="/rs/?w=263&h=166&src='.$img.'" alt="'.$title.'">
                                        </a>
                                    ';
                                else:
                                    echo '
                                        <a href="'.$link.'" class="item">'.$title.'</a>
                                    ';
                                endif;
                        endforeach;
                        wp_reset_postdata(); 
                    ?>
                </div>
                <div class="col-md-3">
                    <?php
                        foreach($field['content3'] as $key => $post):
                            setup_postdata($post);
                            $des = get_the_excerpt($post->ID);
                            $link = get_permalink();
                            $title = get_the_title();
                            $img = get_the_post_thumbnail_url();
                            $excerpt = wp_trim_words( get_the_excerpt(), 30 );
                                if($key == 0):
                                    echo '
                                        <a href="'.$link.'" class="item">
                                            <img class="img-lazy" data-src="/rs/?w=263&h=166&src='.$img.'" alt="'.$title.'">
                                        </a>
                                    ';
                                else:
                                    echo '
                                        <a href="'.$link.'" class="item">'.$title.'</a>
                                    ';
                                endif;
                        endforeach;
                        wp_reset_postdata(); 
                    ?>
                </div>
                <div class="col-md-3">
                    <?php
                        foreach($field['content4'] as $key => $post):
                            setup_postdata($post);
                            $des = get_the_excerpt($post->ID);
                            $link = get_permalink();
                            $title = get_the_title();
                            $img = get_the_post_thumbnail_url();
                            $excerpt = wp_trim_words( get_the_excerpt(), 30 );
                                if($key == 0):
                                    echo '
                                        <a href="'.$link.'" class="item">
                                            <img class="img-lazy" data-src="/rs/?w=263&h=166&src='.$img.'" alt="'.$title.'">
                                        </a>
                                    ';
                                else:
                                    echo '
                                        <a href="'.$link.'" class="item">'.$title.'</a>
                                    ';
                                endif;
                        endforeach;
                        wp_reset_postdata(); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>