<?php
    $module_id =  get_option('mfpd_option_name');
    $page_field = get_field('group_page_field',$module_id);
    // var_dump($page_field);
    // Đường dẫn đến theme
    $path = get_template_directory_uri();
    $arrcheck = array();
    // $inline = '';
    $css_inline = '';
    $js_inline = '';
    $view = '';

    foreach($page_field as $field_0){
        foreach($field_0 as $field){
            $name = $field['acf_fc_layout'];
            if(in_array($name,$arrcheck)){
                $check = 1;
            }else{
                array_push($arrcheck,$name);
                $check = 0;
            }
            include(locate_template('template-sidebar/content-'.$name.'.php'));
            // echo '<pre>';
            // var_dump($field);
        }
    }
    echo $css_inline;
    
?>

<script src="<?php echo get_template_directory_uri(); ?>/core/dist/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/core/dist/lib.js"></script>