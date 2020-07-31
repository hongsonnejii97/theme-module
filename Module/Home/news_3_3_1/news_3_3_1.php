<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/news_3_3_1';
	if($check == 0){
		$css_inline .= '
			<style>
                .news_3_3_1__title p,
                .news_3_3_1__box2 .item .text p {
                    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
                }
        
                .news_3_3_1__box2 .item .text::before,
                .news_3_3_1__box3 .item .text::before {
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
        
                .news_3_3_1 {
                    padding: 30px 0;
                    background: #eee
                }
        
                .news_3_3_1__title p {
                    font-size: 18px;
                    font-weight: bold;
                    text-transform: uppercase;
                    color: #015440;
                    padding-bottom: 10px;
                    margin-bottom: 10px
                }
        
                .news_3_3_1__title p:after {
                    display: block;
                    width: 100px;
                    border-bottom: 1px solid #ddd;
                    content: "";
                    margin-top: 10px
                }
        
                .news_3_3_1__box1 .item {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 10px
                }
        
                .news_3_3_1__box1 .item .pic {
                    width: 19%
                }
        
                .news_3_3_1__box1 .item .pic img {
                    width: 100%
                }
        
                .news_3_3_1__box1 .item .text {
                    width: 81%;
                    padding-left: 15px;
                    color: #015440
                }
        
                .news_3_3_1__box2 .item {
                    margin-bottom: 10px;
                    display: block
                }
        
                .news_3_3_1__box2 .item .pic img {
                    width: 100%;
                    display: block
                }
        
                .news_3_3_1__box2 .item .text {
                    position: relative;
                    padding-left: 25px
                }
        
                .news_3_3_1__box2 .item .text p {
                    color: #015440;
                    margin-bottom: 5px
                }
        
                .news_3_3_1__box2 .item .text span {
                    font-style: italic;
                    color: #999
                }
        
                .news_3_3_1__box2 .item .text::before {
                    content: "\e821";
                    color: #015440;
                    position: absolute;
                    left: 0;
                    top: 5px
                }
        
                .news_3_3_1__box2 .item:first-child {
                    margin-bottom: 20px;
                    display: block
                }
        
                .news_3_3_1__box2 .item:first-child .text {
                    margin-top: 10px;
                    padding: 0
                }
        
                .news_3_3_1__box2 .item:first-child .text::before {
                    display: none
                }
        
                .news_3_3_1__box2 .item:first-child .text p {
                    text-transform: uppercase;
                    font-weight: 600;
                    font-size: 14px
                }
        
                .news_3_3_1__box3 {
                    background: #fff;
                    padding: 10px;
                    border-radius: 5px
                }
        
                .news_3_3_1__box3 .item {
                    margin-bottom: 10px;
                    display: block
                }
        
                .news_3_3_1__box3 .item .text {
                    padding-left: 25px;
                    position: relative
                }
        
                .news_3_3_1__box3 .item .text p {
                    color: #015440;
                    font-weight: 600;
                    margin-bottom: 5px;
                    font-size: 14px
                }
        
                .news_3_3_1__box3 .item .text span {
                    font-style: italic;
                    font-size: 12px;
                    color: #222
                }
        
                .news_3_3_1__box3 .item .text::before {
                    content: "\e831";
                    color: #015440;
                    position: absolute;
                    left: 0;
                    top: 5px
                }
        
                @media (max-width: 414px) {
                    .news_3_3_1__title {
                        text-align: center
                    }
        
                    .news_3_3_1__title p {
                        font-size: 16px
                    }
        
                    .news_3_3_1__title p::after {
                        margin: 10px auto 0
                    }
        
                    .news_3_3_1__box1 .item .text {
                        font-size: 14px
                    }
        
                    .news_3_3_1 .row .col-md-4 {
                        margin-top: 20px
                    }
        
                    .news_3_3_1 .row .col-md-4:first-child {
                        margin-top: 0
                    }
                }
        
                @media (max-width: 320px) {
                    .news_3_3_1__box1 .item .text {
                        font-size: 12px
                    }
        
                    .news_3_3_1__box2 .item .text p {
                        font-size: 12px
                    }
        
                    .news_3_3_1__box3 .item .text p {
                        font-size: 12px
                    }
                }
			</style>
        ';
        add_action('wp_footer', 'news_3_3_1');
        
	}
	
?>

<section class="news_3_3_1">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="news_3_3_1__title">
                    <?php
                        $title1 = $field['title1'];
                        echo '
                            <p>'.$title1.'</p>
                        ';
                    ?>
                </div>
                <div class="news_3_3_1__box1">
                    <?php
                        foreach($field['content1'] as $key => $post):
                            setup_postdata($post);
                            $des = get_the_excerpt($post->ID);
                            $link = get_permalink();
                            $title = get_the_title();
                            $img = get_the_post_thumbnail_url();
                            $excerpt = wp_trim_words( get_the_excerpt(), 30 );
                                echo'
                                    <a href="'.$link.'" class="item">
                                        <div class="pic">
                                            <img class="img-lazy" data-src="'.$img.'" alt="'.$title.'">
                                        </div>
                                        <div class="text">
                                        '.$title.'
                                        </div>
                                    </a>
                                ';
                        endforeach;
                        wp_reset_postdata(); 
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news_3_3_1__title">
                    <?php
                        $title2 = $field['title2'];
                        echo '
                            <p>'.$title2.'</p>
                        ';
                    ?>
                </div>
                <div class="news_3_3_1__box2">
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
                                            <div class="pic">
                                                <img class="img-lazy" data-src="/rs/?w=360&h=154&src='.$img.'" alt="'.$title.'">
                                            </div>
                                            <div class="text">
                                                <p>'.$title.'</p>
                                            </div>
                                        </a>
                                    ';
                                else:
                                    echo '
                                        <a href="'.$link.'" class="item">
                                            <div class="text">
                                                <p>'.$title.'</p>
                                                <span>'.get_the_date('d/m/Y').'</span>
                                            </div>
                                        </a>
                                    ';
                                endif;
                        endforeach;
                        wp_reset_postdata(); 
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news_3_3_1__title">
                    <?php
                        $title3 = $field['title3'];
                        echo '
                            <p>'.$title3.'</p>
                        ';
                    ?>
                </div>
                <div class="news_3_3_1__box3">
                    <?php
                        foreach($field['content3'] as $key => $post):
                            setup_postdata($post);
                            $des = get_the_excerpt($post->ID);
                            $link = get_permalink();
                            $title = get_the_title();
                            $img = get_the_post_thumbnail_url();
                            $excerpt = wp_trim_words( get_the_excerpt(), 20 );
                                echo '
                                    <a href="'.$link.'" class="item">
                                        <div class="text">
                                            <p>'.$title.'</p>
                                            <span>'.$excerpt.'</span>
                                        </div>
                                    </a>
                                ';
                        endforeach;
                        wp_reset_postdata(); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

