<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/service_3_1_2';

	if($check == 0){
		$css_inline .= '
		<style>
            .service_3_1_2__title p,
            .service_3_1_2__title span {
                font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
            }

            .service_3_1_2 {
                padding: 30px 0
            }

            .service_3_1_2__title {
                text-align: center
            }

            .service_3_1_2__title p {
                font-size: 22px;
                font-weight: 700;
                text-transform: uppercase;
                color: #015440
            }

            .service_3_1_2__title span {
                max-width: 600px;
                margin: 20px auto;
                line-height: 20px;
                color: #015440;
                font-weight: 400;
                display: block
            }

            .service_3_1_2__box {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                margin-top: 50px
            }

            .service_3_1_2__box .item {
                width: 23%;
                text-align: center
            }

            .service_3_1_2__box .item .pic {
                margin: 0 20px 10px
            }

            .service_3_1_2__box .item .pic img {
                width: 100%;
                transition: all 0.4s
            }

            .service_3_1_2__box .item .text {
                color: #3a3a3a
            }

            .service_3_1_2__box .item:hover .pic img {
                transform: scale(1.1);
                transition: all 0.4s
            }

            @media (max-width: 812px) {
                .service_3_1_2__title p {
                    font-size: 20px
                }

                .service_3_1_2__title span {
                    margin: 10px auto 30px
                }

                .service_3_1_2__box {
                    margin-top: 30px
                }

                .service_3_1_2__box .item .text {
                    font-size: 12px
                }
            }

            @media (max-width: 414px) {
                .service_3_1_2 {
                    padding: 20px 0
                }

                .service_3_1_2__title p {
                    font-size: 16px
                }

                .service_3_1_2__title span {
                    font-size: 14px;
                    margin-bottom: 20px
                }

                .service_3_1_2__box {
                    margin-top: 0
                }

                .service_3_1_2__box .item {
                    width: 48%;
                    margin-bottom: 15px
                }

                .service_3_1_2__box .item .pic {
                    margin: 0 auto
                }

                .service_3_1_2__box .item .text {
                    font-size: 12px
                }
            }
    	</style>
        ';
		add_action('wp_footer', 'service_3_1_2');
		
	}
?>

<section class="service_3_1_2">
    <div class="container">
        <div class="service_3_1_2__title">
            <?php
                $title = $field['service_title']; 
                $data1 = explode("\n",  $title);
                echo '
                <p>'.$data1[0].'</p>
                <span>'.$data1[1].'</span>
                ';
            ?>
        </div>
        <div class="service_3_1_2__box">
            <?php
                foreach($field['service_info'] as $key => $value):
                    $data = explode("\n",  $value["title"]);
                    echo'
                    <a href="'.$data[3].'" class="item">
                        <div class="pic">
                            <picture>
                                <source media="(min-width:600px)" class="imgSet-lazy" data-srcset="'.$data[1].'">
                                <img class="img-lazy" data-src="'.$data[2].'" alt="'.$data[0].'">
                            </picture>
                        </div>
                        <div class="text">
                        '.$data[0].'
                        </div>
                    </a>
                    ';
                endforeach;
            ?>
        </div>
    </div>
</section>