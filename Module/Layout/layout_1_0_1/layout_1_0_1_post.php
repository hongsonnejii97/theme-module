<?php 
    get_template_part('Module/Layout/layout_1_0_1/layout_1_0_1_style'); 
?>
<div class="layout_1_0_1">

    <div class="container">
        <div class="row">
            <div class="col-lg-9">    
                <!-- Breadcrumb -->
                <?php get_template_part('Module/Post/breadcrumb_1_0_1/breadcrumb_1_0_1'); ?>
                <!-- Breadcrumb -->           
                <?php include(locate_template('Module/Post/post_1_0_1/post_1_0_1.php')); ?>
                <?php
                    if(is_page()):
                        $page_field = get_field('group_page_field');
                        foreach( $page_field as $value_0):  
                            foreach( $value_0 as $value_1):  
                            foreach( $value_1 as $value_2):  
                            foreach( $value_2 as $field):  
                                if( $field['acf_fc_layout'] == 'news_3_0_3' ):
                                    include(locate_template('Module/Home/news_3_0_3/news_3_0_3.php'));
                                endif;
                                if( $field['acf_fc_layout'] == 'regist_3_0_0' ):
                                    include(locate_template('Module/Home/regist_3_0_0/regist_3_0_0.php'));
                                endif;
                                echo $css_inline;
                            endforeach;
                            endforeach;
                            endforeach;
                        endforeach;
                        
                    endif;
                    if(is_single()):
                        // echo '111111111111111111';
                        $page_field = get_field('group_page_field'); 
                        // echo '<pre>';
                        // echo $page_id;
                        // var_dump($page_field);
                        if( $list['acf_fc_layout'] == 'post_page_setup_1_0_0' ):
                            $page_id = $list['page'];
                        endif;
                        
                        if($page_id):
                            $page_field = get_field('group_page_field', $page_id);
                            foreach( $page_field as $value_0):  
                                foreach( $value_0 as $value_1):  
                                foreach( $value_1 as $value_2):  
                                foreach( $value_2 as $field):  
                                    if( $field['acf_fc_layout'] == 'regist_3_0_0' ):
                                        include(locate_template('Module/Home/regist_3_0_0/regist_3_0_0.php'));    
                                        echo $css_inline;                                 
                                    endif; 
                                    if( $field['acf_fc_layout'] == 'news_3_0_3' ):
                                        include(locate_template('Module/Home/news_3_0_3/news_3_0_3.php'));    
                                        echo $css_inline;                                 
                                    endif; 
                                    
                                endforeach;
                                endforeach;
                                endforeach;
                            endforeach;
                        endif;
                    endif;
                ?>
            </div>
            <div class="col-lg-3">
            <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
