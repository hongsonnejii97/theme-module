<?php

/*PERSON 2.6.0*/
'id_person_2_6_0' => array(
    'key' => 'id_person_2_6_0',
    'name' => 'person_2_6_0',
    'label' => 'Person 2.6.0',
    'display' => 'block',
    'sub_fields' => array(
        /*Bắt đầu field*/
        array(
            /* Tab tiêu đề*/
            'key' => 'id_person_2_6_0_tab1',
            'label' => 'Thông Tin Chung',
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
            'key' => 'id_person_2_6_0_tab1_sub1',
            'label' => 'Tiêu đề',
            'name' => 'person_title',
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
            'key' => 'id_person_2_6_0_tab1_sub2',
            'label' => 'Khách Hàng',
            'name' => 'person_place',
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
                    'key' => 'id_person_2_6_0_tab1_sub2_layout1',
                    'label' => 'Thông tin chi tiết',
                    'name' => 'detail_place',
                    'type' => 'textarea',
                    'instructions' => '
                        Dòng 1 : Tên khách hàng <br>
                        Dòng 2 : Lời nói <br>
                        Dòng 3 : Link ảnh ( Size 640x480 ) <br>
                        Dòng 4 : Link xem chi tiết <br>
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
            ),
        ),
        
        /*End field*/
    ),
    'min' => '',
    'max' => '',
),
/*END PERSON 2.6.0*/

?>