<?php

//---------------------------Подключение style CSS--------------------------------//
wp_enqueue_style( 'fonts_main', get_template_directory_uri(). '/css/fonts.main.css' );
wp_enqueue_style( 'main.min', get_template_directory_uri(). '/css/main.min.css' );
wp_enqueue_style( 'animate', get_template_directory_uri(). '/libs/animate/animate.css' );
wp_enqueue_style( 'magnific-popup', get_template_directory_uri(). '/libs/magnific/magnific-popup.css' );
wp_enqueue_style( 'sectionbox', get_template_directory_uri(). '/libs/selectbox/selectbox.css' );
//-------------------------Конец подключения style CSS----------------------------//

//---------------------------Подключение javascript--------------------------------//

wp_enqueue_script( 'libs-js', get_template_directory_uri() . '/js/libs.min.js', array('jquery'), '' , true);
wp_enqueue_script( 'common-js', get_template_directory_uri() . '/js/common.js', array('jquery'), '',  true);

//------------------------Конец подключения javascript---------------------------//

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head',      'rest_output_link_wp_head');
show_admin_bar(false);

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );


add_action('customize_register', function($telephone){
    $telephone->add_section(
        'example_section_one',
        array(
            'title' => 'Телефон компанії',
            'description' => 'Тут можна вказати  телефон компанії',
            'priority' => 5,
        )
    );
    $telephone->add_setting(
        'telephone_textbox',
             array('default' => '')
    );
    $telephone->add_setting(
        'hide_text',
              array('default' => '')
    );
    $telephone->add_control(
        'telephone_textbox',
        array(
            'label' => 'Введіть номер телефона:',
            'section' => 'example_section_one',
            'type' => 'text',
        )
    );

     $telephone->add_control(
         'hide_text',
         array(
             'label' => 'отключити текст:',
             'section' => 'example_section_one',
             'type' => 'checkbox',
         )
     );
});
