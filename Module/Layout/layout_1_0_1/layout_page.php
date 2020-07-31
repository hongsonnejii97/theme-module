<?php 
    get_template_part('Module/Layout/layout_1_0_1/layout_1_0_1_style'); 
?>
<div class="layout_1_0_1">

    <!-- Breadcrumb -->
    <?php get_template_part('Module/Post/breadcrumb_2_0_0/breadcrumb_2_0_0'); ?>
     <!-- Breadcrumb -->

    <div class="container">
        <div class="row">
            <div class="col-lg-9">               
                <?php include(locate_template('Module/Post/post_1_0_1/post_1_0_1.php')); ?>
            </div>
            <div class="col-lg-3">
            <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>