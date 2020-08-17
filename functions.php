<?php 

    // Enqueuing
    
    function load_scripts() {
        // CSS inladen
        wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,700');
        wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_style('slick', get_template_directory_uri().'/css/slick.css');
        wp_enqueue_style('slick-theme', get_template_directory_uri().'/css/slick-theme.css');
        wp_enqueue_style('nouislider', get_template_directory_uri().'/css/nouislider.min.css');
        wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
        wp_enqueue_style('main-css', get_template_directory_uri().'/css/style.css');
        
        // JS inladen
        wp_enqueue_script('jquery-min-js',get_template_directory_uri().'/js/jquery.min.js',array(),'1.1',true);
        wp_enqueue_script('bootstrap-min-js',get_template_directory_uri().'/js/bootstrap.min.js',array(),'1.1',true);
        wp_enqueue_script('slick-min-js',get_template_directory_uri().'/js/slick.min.js',array(),'1.1',true);
        wp_enqueue_script('nouislider-min-js',get_template_directory_uri().'/js/nouislider.min.js',array(),'1.1',true);
        wp_enqueue_script('jquery-zoom-min-js',get_template_directory_uri().'/js/jquery.zoom.min.js',array(),'1.1',true);
        wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js',array(),'1.1',true);
    }
    add_action('wp_enqueue_scripts','load_scripts');

    // Sidebars

//    add_action('widgets_unit','techshack_sidebars');
//    function techshack_sidebars() {
//        register_sidebar(
//            array(
//                'name' => 'Titeltekst',
//                'id' => 'titel',
//                'description' => 'Typ hier je tekst...',
//                'before_widget' => '<div class="widget-wrapper">',
//                'after_widget' => '</div>',
//                'before' => '<div class="widget-title">',
//                'after_title' => '</div>'
//            )
//        );
//    }

    // Add support

    add_theme_support('post-thumbnails');
?>