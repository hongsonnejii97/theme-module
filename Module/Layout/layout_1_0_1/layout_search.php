<?php 
    get_template_part('Module/Layout/layout_1_0_1/layout_1_0_1_style'); 
?>
<div class="layout_1_0_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <!-- Post Main -->
                <?php get_template_part('Module/Category/search_1_0_0/search_1_0_0'); ?>
                <?php get_template_part('Module/Category/cate_1_0_1/cate_1_0_1'); ?>
            </div>
            <div class="col-lg-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

