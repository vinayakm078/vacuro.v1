                <?php 
                add_theme_support("post-thumbnails");
                function wpdocs_theme_name_scripts() {
                wp_enqueue_style( 'vacuro', get_template_directory_uri().'/css/vacuro.css' );
                wp_enqueue_style( 'bootstrap.min', get_template_directory_uri().'/css/bootstrap.min.css' );
                wp_enqueue_style( 'slickcssfile', get_template_directory_uri().'/css/slick.css' );
                wp_enqueue_style( 'slick-theme', get_template_directory_uri().'/css/slick-theme.css' );
                wp_enqueue_script('mainfile','https://code.jquery.com/jquery-3.3.1.js');
                wp_enqueue_script( 'bootstrap.min1', get_template_directory_uri() . '/jscript/bootstrap.min.js', array('jquery'), '1.0.0', true );
                wp_enqueue_script('boxslider',get_template_directory_uri().'/jscript/boxslider.js',array('jquery'),'1.0.0',true);
                wp_enqueue_script( 'vacuro3', get_template_directory_uri() . '/jscript/vacuro.js', array('jquery'), '1.4.0', true );
                wp_enqueue_script('fonts','https://use.fontawesome.com/releases/v5.0.10/js/all.js');
                wp_enqueue_script('validatemainfile','https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js',array('jquery'),'',true);
                wp_enqueue_script('validate',get_template_directory_uri() .'/jscript/formvalidation.js',array('jquery'),'1.2.0',true);
                wp_enqueue_script( 'bootstrap.min1', get_template_directory_uri() . '/jscript/bootstrap.min.js', array('jquery'), '1.0.0', true );
                wp_enqueue_script('bootstrap.min1', get_template_directory_uri() . '/jscript/rareranser.js', array('jquery'), '1.0.0', true );wp_enqueue_script('bootstrap.min2', get_template_directory_uri() . '/jscript/produkter.js', array(), '1.0.0', true );
                wp_enqueue_script('bootstrap.min3', get_template_directory_uri() . '/jscript/jquery.directional-hover.min.js', array('jquery'), '1.0.0', true );
                wp_enqueue_script('slick.css', get_template_directory_uri() . '/jscript/slick.min.js', array('jquery'), '1.0.0', true );
                wp_localize_script('mainfile', 'myAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
                wp_enqueue_script('mainfile');
                }
                add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');
                function wpb_custom_new_menu(){
                register_nav_menus( array(
                    'header' => ('header'),
                    'footer' => ('footer'),
                ) );
                }
                        add_action('init','wpb_custom_new_menu');
                        function themeslug_theme_customizer($wp_customize) {
                        // Fun code will go here
                            $wp_customize->add_section( 'themeslug_logo_section' , array(
                            'title'       =>__('Logo','themeslug'),
                            'priority'    =>30,
                            'description' =>'Upload a logo to replace the default site name and description in the header',
                        ) );
                           $wp_customize->add_setting( 'themeslug_logo' ); 
                            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
                            'label'    => __( 'Logo', 'themeslug' ),
                            'section'  =>'themeslug_logo_section',
                            'settings' =>'themeslug_logo',
                        ) ) );
                        }
                        add_action('customize_register', 'themeslug_theme_customizer');
                        function myword_press_image(){
                            add_theme_support('post-thumbnails');
                        } 
                        add_action('after_setup_theme','myword_press_image');
                        function custom_widgets() {
                            register_sidebar(array(
                                'id' => 'footer-widget-area-1',
                                'name' => 'Footer Widget Area 1',
                                'description' => 'The widget area in the footer. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
                                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                                'after_widget' => '</div>',
                                'before_title' => '<h4 class="widget-title">',
                                'after_title' => '</h4>',
                            ));

                            register_sidebar(array(
                                'id' => 'footer-widget-area-2',
                                'name' => 'Footer Widget Area 2',
                                'description' => 'The widget area in the footer. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
                                'before_widget' =>'<div id="%1$s" class="widget %2$s">',
                                'after_widget' =>'</div>',
                                'before_title' =>'<h4 class="widget-title">',
                                'after_title' => '</h4>',
                            ));
                            
                            register_sidebar(array(
                                'id' => 'footer-widget-area-3',
                                'name' => 'Footer Widget Area 3',
                                'description' => 'The widget area in the footer. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
                                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                                'after_widget' => '</div>',
                                'before_title' => '<h4 class="widget-title">',
                                'after_title' => '</h4>',
                            ));
                            
                                register_sidebar(array(
                                'id' => 'footer-widget-area-4',
                                'name' => 'Footer Widget Area 4',
                                'description' => 'The widget area in the footer. ***For shortcodes, images, maps etc. you MUST set the appropriate width.***',
                                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                                'after_widget' => '</div>',
                                'before_title' => '<h4 class="widget-title">',
                                'after_title' => '</h4>',
                            ));
                        }
                        add_action('widgets_init', 'custom_widgets');
                        function myp_warning_section($wp_customize){
                            $wp_customize->add_section('bottom_right_section',array(
                        'title'=>'bottom_right_section'
                            ));

                            $wp_customize->add_setting('bottom_right_section_headline',array(
                                'default'=>'enter heading'
                            ));
                            
                            $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                             'bottom_right_section_headline_control',array(
                             'label'=>'Headline',
                             'section'=>'bottom_right_section',
                             'settings'=>'bottom_right_section_headline'    
                            )));
                        }
                        add_action('customize_register','myp_warning_section');




// add warning section//


// function myp_warning_section($wp_customize){
//     $wp_customize->add_section('myp_warning_section_part',array(
// 'title'=>'warning-section'
//     ));

//     $wp_customize->add_setting('myp_warning_section_headline',array(
//         'default'=>'enter heading'
//     ));
    
//     $wp_customize->add_control(new WP_Customize_Control($wp_customize,
//      'myp_warning_section_headline_control',array(
//      'label'=>'Headline',
//      'section'=>'myp_warning_section_part',
//      'settings'=>'myp_warning_section_headline'

     
//     )));

//      $wp_customize->add_setting('myp_warning_section_text',array(
//         'default'=>'enter sub heading'
//     ));
    
//     $wp_customize->add_control(new WP_Customize_Control($wp_customize,
//      'myp_warning_section_text_control',array(
//      'label'=>'Sub Headline',
//      'section'=>'myp_warning_section_part',
//      'settings'=>'myp_warning_section_text',
      
     
//     )));


//        $wp_customize->add_setting('myp_warning_section_left_image',array(
        
//     ));
    
//     $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,
//      'myp_warning_section_image_control_left',array(
//      'label'=>'Image right',
//      'section'=>'myp_warning_section_part',
//      'settings'=>'myp_warning_section_left_image',
      
     
//     )));

//     $wp_customize->add_setting('myp_warning_section_right_image',array(
      
//     ));
    
//     $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,
//      'myp_warning_section_image_control_right',array(
//      'label'=>'Image left',
//      'section'=>'myp_warning_section_part',
//      'settings'=>'myp_warning_section_right_image',
      
     
//     )));


// }

// add_action('customize_register','myp_warning_section');



// add warning section//



// function my_information_section($wp_customize){
//  $wp_customize->add_section('myp_information_section_part',array(
// 'title'=>'Information Section'
//     ));

//     $wp_customize->add_setting('myp_information_section_headline',array(
//         'default'=>'enter heading'
//     ));
    
//     $wp_customize->add_control(new WP_Customize_Control($wp_customize,
//      'myp_information_section_headline_control',array(
//      'label'=>'Left heading',
//      'section'=>'myp_information_section_part',
//      'settings'=>'myp_information_section_headline'
//     )));
//     $wp_customize->add_setting('myp_information_section_headline_right',array(
//     'default'=>'enter heading'
//     ));
    
//     $wp_customize->add_control(new WP_Customize_Control($wp_customize,
//      'myp_information_section_headline_right_control',array(
//      'label'=>'Right heading',
//      'section'=>'myp_information_section_part',
//      'settings'=>'myp_information_section_headline_right'     
//     )));
//         $wp_customize->add_setting('myp_information_section_para_left',array(
//     'default'=>'enter heading'
//     ));    
//     $wp_customize->add_control(new WP_Customize_Control($wp_customize,
//      'myp_information_section_info_left_control',array(
//      'label'=>'information ',
//      'section'=>'myp_information_section_part',
//      'settings'=>'myp_information_section_para_left',
//      'type'=>'textarea'     
//     )));
//      $wp_customize->add_setting('myp_information_section_sub_heading_left',array(
//     'default'=>'enter heading'
//     ));    
//     $wp_customize->add_control(new WP_Customize_Control($wp_customize,
//      'myp_information_section_sub_heading_left_control',array(
//      'label'=>'subheading ',
//      'section'=>'myp_information_section_part',
//      'settings'=>'myp_information_section_sub_heading_left',   
//)));
// }.
// add_action('customize_register','my_information_section');
                    function display(){
                        $ts=time();
                        add_post_meta('100','form_data_'.$ts,$_POST);
                        $data1=get_post_meta('100','form_data_'.$ts,true);
                        $contents = array();
                        $contents['response']=$data1;
                        echo json_encode($contents);exit;
                    }
                    add_action('wp_ajax_nopriv_display','display');
                    add_action('wp_ajax_display','display');