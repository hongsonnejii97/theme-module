<style>
    .layout_1_0_1 {
        margin-top: 130px
    }

    @media (max-width: 1024px) {
        .layout_1_0_1 {
            margin-top: 90px
        }
    }

    @media (max-width: 414px) {
        .layout_1_0_1 {
            margin-top: 122px
        }
    }

    @media (max-width: 375px) {
        .layout_1_0_1 {
            margin-top: 116px
        }
    }

    @media (max-width: 320px) {
        .layout_1_0_1 {
            margin-top: 115px
        }
    }
</style>
<?php
    foreach( $page_field as $value_0):  
        foreach( $value_0 as $value_1):  
            foreach( $value_1 as $field):  
            endforeach;
        endforeach;
    endforeach;
?>
<div class="layout_1_0_1">

    <!-- Breadcrumb -->
    <?php //get_template_part('Module/Post/breadcrumb_2_0_0/breadcrumb_2_0_0'); ?>
     <!-- Breadcrumb -->

    <div class="container">
            <?php include(locate_template('Module/Post/post_1_0_1/post_1_0_1.php')); ?>
            <?php include(locate_template('Module/Home/news_3_0_3/news_3_0_3.php')); ?>
    </div>
</div>