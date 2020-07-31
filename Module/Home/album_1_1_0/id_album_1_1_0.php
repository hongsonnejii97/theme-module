<?php

/*ALBUM 1.1.0*/
'id_album_1_1_0' => array(
    'key' => 'id_album_1_1_0',
    'name' => 'album_1_1_0',
    'label' => 'Album 1.1.0',
    'display' => 'block',
    'sub_fields' => array(
        /*B?t d?u field*/
        array(
            'key' => 'id_album_1_1_0_tab1',
            'label' => 'Video',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'id_album_1_1_0_tab1_sub1',
            'label' => 'Thông tin video',
            'name' => 'detail_video',
            'type' => 'textarea',
            'instructions' => '
                Dòng 1 : Tiêu đề chung <br>
                Dòng 2 : Tiêu đề video <br>
                Dòng 3 : Link ảnh video ( Size 490x275 )<br>
                Dòng 4 : Link video
            ',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => 4,
            'new_lines' => '',
        ),
        array(
            'key' => 'id_album_1_1_0_tab2',
            'label' => 'Hình Ảnh',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'id_album_1_1_0_tab2_sub2',
            'label' => 'Tiêu đề chung',
            'name' => 'title_img',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'hide_admin' => 0,
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'id_album_1_1_0_tab2_sub1',
            'label' => 'Hình ảnh',
            'name' => 'image_place',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'hide_admin' => 0,
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => '',
            'sub_fields' => array(
                array(
                    'key' => 'id_album_1_1_0_tab2_sub1_layout1',
                    'label' => 'Tiêu đề ảnh',
                    'name' => 'place_title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'hide_admin' => 0,
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'id_album_1_1_0_tab2_sub1_layout2',
                    'label' => 'Link ảnh',
                    'name' => 'place_url',
                    'type' => 'text',
                    'instructions' => 'Size 366x228',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'hide_admin' => 0,
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
        ),
        
        /*End field*/
    ),
    'min' => '',
    'max' => '',
),
/*END ALBUM 1.1.0*/

?>