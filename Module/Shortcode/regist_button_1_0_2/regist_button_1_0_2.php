<?php
/*Dang Ky Ngay*/
function regist_button_1_0_2_shortcode($atts,$content=null){
    static $count = 0;
    $count++;
	$title = $atts['title'];
	$note = $atts['note'];
    $link = $atts['link'];
    $button = $atts['button'];
    $style = '
    <style>
        .post_7_0_0__mainBanner{
            position: relative; 
            padding: 20px 0;
        }
        .post_7_0_0__mainBanner .banner_pic {
            text-align: center;
        }
        .post_7_0_0__mainBanner .banner_pic img {
            width: 100%; 
        }
        .post_7_0_0__mainBanner .banner_sub {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            width: 70%;
            margin: 0 auto;
            color: #fff;
            position: absolute;
            top: 0;
            height: 100%;
            left: 15%; 
        }
        .post_7_0_0__mainBanner .banner_sub__text {
            width: 50%; 
        }
        .post_7_0_0__mainBanner .banner_sub__text p {
            text-transform: uppercase;
            font-weight: bold;
            font-size: 18px; 
        }
        .post_7_0_0__mainBanner .banner_sub__more {
            width: 35%;
            color: #fff;
            background-color: #EF4324;
            padding: 8px 20px;
            text-align: center; 
        }
        .post_7_0_0__adt {
            margin-top: 20px;
            text-align: center; 
        }

        @media (max-width: 1024px) {
            .post_7_0_0 h1 {
                font-size: 22px; 
            }
            .post_7_0_0 h2 {
                font-size: 18px; 
            }
            .post_7_0_0 .sapo {
                margin-top: 20px;
            }
            .post_7_0_0__mainBanner .banner_sub__text {
                font-size: 13px;
            }
            .post_7_0_0__mainBanner .banner_sub__text p {
                font-size: 16px; 
            } 
        }

        @media (max-width: 812px) {
            .post_7_0_0 {
                font-size: 14px; 
            }
            .post_7_0_0 .col-md-9 {
                flex: 0 0 100%;
                max-width: 100%;
            }
            .post_7_0_0 h1 {
                font-size: 18px; 
            }
            .post_7_0_0 img {
                width: 100%;
            }
            .post_7_0_0 .sapo {
                font-size: 14px; 
            }
            .post_7_0_0__mainBanner .banner_sub {
                bottom: 23%; 
            }
            .post_7_0_0__mainBanner .banner_sub__text {
                font-size: 12px; 
            }
            .post_7_0_0__mainBanner .banner_sub__text p {
                font-size: 15px;
                margin-bottom: 5px; 
            }
            .post_7_0_0__mainBanner .banner_sub__more {
                width: 40%;
                padding: 8px 5px;
                font-size: 14px; 
            } 
        }

        @media (max-width: 414px) {
            .post_7_0_0__mainBanner .banner_pic {
                display: none; 
            }
            .post_7_0_0__mainBanner .banner_sub {
                position: relative;
                bottom: auto;
                left: auto;
                background-color: #13569A;
                width: 100%;
                padding: 15px 10px; 
            }
            .post_7_0_0__mainBanner .banner_sub__text {
                width: 55%;
                font-size: 11px; 
            } 
        }

        @media (max-width: 360px) {
            .post_7_0_0 h1 {
                font-size: 16px; 
            }
            .post_7_0_0 h2 {
                font-size: 15px;
            }
            .post_7_0_0 h3 {
                font-size: 13px; 
            }
            .post_7_0_0__mainBanner .banner_sub__text p {
                font-size: 13px;
            }
            .post_7_0_0__mainBanner .banner_sub__more {
                font-size: 12px; 
            } 
        }
    </style>';
    if ($count > 1):
        $style = '';
    endif;
	return $style.'  
        
        <div class="post_7_0_0__mainBanner">
            <div class="banner_pic">
                <img src="'.$link.'" alt="'.$title.'" />
            </div>
            <div class="banner_sub">
                <div class="banner_sub__text">
                    <p>'.$title.'</p>
                    <span>'.$note.'</span>
                </div>
                <a class="banner_sub__more" href="">
                    '.$button.'
                </a>
            </div>
        </div>
	';
}
add_shortcode('regist_button_1_0_2','regist_button_1_0_2_shortcode');
/*End Dang Ky Ngay*/
?>