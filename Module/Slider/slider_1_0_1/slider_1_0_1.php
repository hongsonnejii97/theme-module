<?php
    $slide_array = array();
    if($field['slide_pc']):
        foreach($field['slide_pc'] as $key => $value):
            $slide_array[$key]['slide_pc'] = $value['url'];
            $slide_array[$key]['slide_pc_link'] = $value['description'];
        endforeach;
    endif;
    
    if($field['slide_mb']):
        foreach($field['slide_mb'] as $key => $value):
            $slide_array[$key]['slide_mb'] = $value['url'];
        endforeach;
    endif;

    if($check == 0){
        $css_inline .= '
            <style>
                .slider_1_0_1 .owl-prev::before,
                .slider_1_0_1 .owl-next::before {
                    font-family: "fontello";
                    font-style: normal;
                    font-weight: 400;
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
        
                .slider_1_0_1 {
                    padding: 0;
                    position: relative;
                    z-index: 0;
                    padding-top: 170px;
                }
        
                .slider_1_0_1 .container {
                    margin: 0 auto
                }
        
                .slider_1_0_1 .aligncenter {
                    margin: 0
                }
        
                .slider_1_0_1 .owl-dots {
                    width: 100%;
                    display: flex;
                    justify-content: center;
                    position: absolute;
                    bottom: 10px;
                    left: 0
                }
        
                .slider_1_0_1 .owl-prev,
                .slider_1_0_1 .owl-next {
                    height: 100%;
                    display: flex;
                    align-items: center;
                    position: absolute;
                    top: 0;
                    margin-top: 0 !important;
                    background: none !important;
                }
        
                .slider_1_0_1 .owl-prev::before,
                .slider_1_0_1 .owl-next::before {
                    display: block;
                    font-size: 30px;
                    color: #00abe5
                }
        
                .slider_1_0_1 .owl-prev span,
                .slider_1_0_1 .owl-next span {
                    display: none
                }
        
                .slider_1_0_1 .owl-nav {
                    margin-top: 0;
                }
                .slider_1_0_1 .owl-prev {
                    left: 10%
                }
        
                .slider_1_0_1 .owl-prev::before {
                    content: "\e889"
                }
        
                .slider_1_0_1 .owl-next {
                    right: 10%
                }
        
                .slider_1_0_1 .owl-next::before {
                    content: "\e88a"
                }
        
                @media (max-width: 1440px) {
                    .slider_1_0_1 {
                        padding-top: 130px;
                    }
                    .slider_1_0_1 .carousel-item img {
                        max-width: 100%
                    }
                }
        
                @media (max-width: 1024px) {
                    .slider_1_0_1 {
                        padding: 15px 0 0
                    }
                }
                @media (max-width: 768px) {
                    .slider_1_0_1 {
                        padding: 0;
                    }
                }
        
                @media (max-width: 414px) {
                    .slider_1_0_1 {
                        padding: 45px 0 0;
                    }
                    .slider_1_0_1 .owl-dots {
                        display: none
                    }
        
                    .slider_1_0_1 .owl-prev {
                        left: 0
                    }
        
                    .slider_1_0_1 .owl-next {
                        right: 0
                    }
                }
            </style>
        ';
        add_action('wp_footer', 'slide_1_0_1');
        function slide_1_0_1(){ 
            echo '
                <script>
                    $(".slider_1_0_1_owl").owlCarousel({loop:!0,margin:15,items:1,nav:!0,dots:!0,lazyLoad:!0,autoplay:!0,autoplayTimeout:3500});
                </script>
            ';           
        };
    }
?>

<section class="slider_1_0_1" id="page1">
    <div class="owl-carousel owl-theme slider_1_0_1_owl">
        <?php
            foreach($slide_array as $key => $value):
                echo'
                    <a href="'.$value['slide_pc_link'].'" class="slider_1_0_1_item" rel="nofollow">
                        <picture>
                            <source media="(min-width:600px)" srcset="'.$value['slide_pc'].'">
                            <img src="'.$value['slide_mb'].'" alt="">
                        </picture>
                    </a>
                ';
            endforeach;
                
        ?> 
        
    </div>
</section>



