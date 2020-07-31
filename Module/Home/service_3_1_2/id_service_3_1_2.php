<?php
    /*SERVICE 3.1.2*/
    'id_service_3_1_2' => array(
        'key' => 'id_service_3_1_2',
        'name' => 'service_3_1_2',
        'label' => 'Service 3.1.2',
        'display' => 'block',
        'sub_fields' => array(
            /*Bắt đầu field*/
            array(
                /* Tab tiêu đề*/
                'key' => 'id_service_3_1_2_tab1',
                'label' => 'Tiêu Đề',
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
                'key' => 'id_service_3_1_2_tab1_sub1',
                'label' => 'Tiêu đề',
                'name' => 'service_title',
                'type' => 'textarea',
                'instructions' => '
                    Dòng 1 : Tiêu đề chính<br> 
                    Dòng 2 : Tiêu đề phụ<br>
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
                'rows' => 2,
                'new_lines' => '',
            ),           
            array(
                /* Tab Service*/
                'key' => 'id_service_3_1_2_tab2',
                'label' => ' Dịch Vụ',
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
                'key' => 'id_service_3_1_2_tab2_sub1',
                'label' => ' Danh Sách Dịch Vụ',
                'name' => 'service_info',
                'type' => 'flexible_content',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layouts' => array(
                    'layout_homeTitle' => array(
                        'key' => 'id_service_3_1_2_tab2_sub1_layout1',
                        'name' => 'service_info_box1',
                        'label' => ' Dịch Vụ',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_service_3_1_2_tab2_sub1_layout1_sub1',
                                'label' => 'Cập nhật DỊCH VỤ theo chỉ dẫn',
                                'name' => 'title',
                                'type' => 'textarea',
                                'instructions' => '
                                    Dòng 1 : Tiêu đề <br> 
                                    Dòng 2 : Link ảnh pc (210 x 210)<br>
                                    Dòng 3 : Link ảnh mb (640 x 480)<br>
                                    Dòng 4 : Link liên kết 
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
                        
                            // End Field Base						
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                ),
                'button_label' => 'Thêm Dịch Vụ',
                'min' => '',
                'max' => '',
            ),

            
            /*End field*/
        ),
        'min' => '',
        'max' => '',
    ),
    /*END SERVICE 3.1.2*/
?>