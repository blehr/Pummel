<?php
/**
 * brandon Theme Customizer
 *
 * @package Pummel
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bpl_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_section( 'colors' )->priority = 20;
	

	
	//header color
	$wp_customize->add_setting(
      'bpl_header_color',
      array(
          'default'          => '#3F51B5',
          'transport'         => 'postMessage',
          'priority'			=> 5,
          'sanitize_callback' => 'sanitize_text' 
       )
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bpl_header_color', 
		array(
			'label'      => __( 'Header Color', 'bpl' ),
			'section'    => 'colors',
			'settings'   => 'bpl_header_color',
			'wp-head-callback'       => 'bpl_customizer_output',
		) ) 
	);
	
	
	//link color
	$wp_customize->add_setting(
      'bpl_link_color',
      array(
          'default'          => '#3F51B5',
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
       )
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bpl_link_color', 
		array(
			'label'      => __( 'Link Color', 'bpl' ),
			'section'    => 'colors',
			'settings'   => 'bpl_link_color',
			'wp-head-callback'       => 'bpl_customizer_output',
		) ) 
	);
	
	//link visited color
	$wp_customize->add_setting(
      'bpl_link_visited_color',
      array(
          'default'          => '#7986CB',
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
       )
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bpl_link_visited_color', 
		array(
			'label'      => __( 'Visited Link Color (may not show on preview)', 'bpl' ),
			'section'    => 'colors',
			'settings'   => 'bpl_link_visited_color',
			'wp-head-callback'       => 'bpl_customizer_output',
		) ) 
	);
	

		//Frontpage middle widget background color
	$wp_customize->add_setting(
      'bpl_frontpage_middle_widgets_background_color',
      array(
          'default'          => '#3F51B5',
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
       )
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bpl_frontpage_middle_widgets_background_color', 
		array(
			'label'      => __( 'Frontpage Middle Widgets Area Background Color', 'bpl' ),
			'section'    => 'colors',
			'settings'   => 'bpl_frontpage_middle_widgets_background_color',
			'wp-head-callback'       => 'bpl_customizer_output',
		) ) 
	);
	
	
	//Frontpage middle widget text color
	$wp_customize->add_setting(
      'bpl_frontpage_middle_widgets_text_color',
      array(
          'default'          => '#C5CAE9',
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
       )
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bpl_frontpage_middle_widgets_text_color', 
		array(
			'label'      => __( 'Frontpage Middle Widgets Text and Link Color', 'bpl' ),
			'section'    => 'colors',
			'settings'   => 'bpl_frontpage_middle_widgets_text_color',
			'wp-head-callback'       => 'bpl_customizer_output',
		) ) 
	);
	

	//Comment Accent color
	$wp_customize->add_setting(
      'bpl_comment_accent_color',
      array(
          'default'          => '#3F51B5',
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
       )
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bpl_comment_accent_color', 
		array(
			'label'      => __( 'Comment Accent Color', 'bpl' ),
			'section'    => 'colors',
			'settings'   => 'bpl_comment_accent_color',
			'wp-head-callback'       => 'bpl_customizer_output',
		) ) 
	);
	
	//Footer widget Accent color
	$wp_customize->add_setting(
      'bpl_footer_widget_accent_color',
      array(
          'default'          => '#3F51B5',
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
       )
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bpl_footer_widget_accent_color', 
		array(
			'label'      => __( 'Footer Widget Accent Color', 'bpl' ),
			'section'    => 'colors',
			'settings'   => 'bpl_footer_widget_accent_color',
			'wp-head-callback'       => 'bpl_customizer_output',
		) ) 
	);
	
	//Body Text Color 
	$wp_customize->add_setting(
      'bpl_body_text_color',
      array(
          'default'          => '#404040',
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
       )
    );
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bpl_body_text_color', 
		array(
			'label'      => __( 'Body Text Color', 'bpl' ),
			'section'    => 'colors',
			'settings'   => 'bpl_body_text_color',
			'wp-head-callback'       => 'bpl_customizer_output',
		) ) 
	);
	
	

	// Add Social Media Section
	$wp_customize->add_section( 'social-media' , array(
	    'title' => __( 'Social Media', 'bpl' ),
	    'priority' => 22,
	    'description' => __( 'Enter the URL to your account for each service for the icon to appear in the header.', 'bpl' )
	) );
	
	
	// Add Display Social Links in Header Setting
	$wp_customize->add_setting( 'bpl_display_social_header' , array( 'default' => 1, 'sanitize_callback' => 'sanitize_text'  ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bpl_display_social_header', array(
	    'label' => __( 'Display Social Links in Header', 'bpl' ),
	    'section' => 'social-media',
	    'settings' => 'bpl_display_social_header',
	    'type'  => 'checkbox',
	) ) );
	
	// Add Display Social Links in Header Setting
	$wp_customize->add_setting( 'bpl_display_social_footer' , array( 'default' => 1, 'sanitize_callback' => 'sanitize_text'  ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bpl_display_social_footer', array(
	    'label' => __( 'Display Social Links in Footer', 'bpl' ),
	    'section' => 'social-media',
	    'settings' => 'bpl_display_social_footer',
	    'type'  => 'checkbox',
	) ) );
	

	// Add Twitter Setting
	$wp_customize->add_setting( 'twitter' , array( 'default' => '', 'sanitize_callback' => 'sanitize_text'  ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
	    'label' => __( 'Twitter', 'bpl' ),
	    'section' => 'social-media',
	    'settings' => 'twitter',
	) ) );
	
	// Add Google Plus Setting
	$wp_customize->add_setting( 'google_plus' , array( 'default' => '', 'sanitize_callback' => 'sanitize_text'  ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'google_plus', array(
	    'label' => __( 'Google Plus', 'bpl' ),
	    'section' => 'social-media',
	    'settings' => 'google_plus',
	) ) );
	
	// Add Facebook Setting
	$wp_customize->add_setting( 'facebook' , array( 'default' => '', 'sanitize_callback' => 'sanitize_text'  ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
	    'label' => __( 'Facebook', 'bpl' ),
	    'section' => 'social-media',
	    'settings' => 'facebook',
	) ) );
	
	// Add Github Setting
	$wp_customize->add_setting( 'github' , array( 'default' => '', 'sanitize_callback' => 'sanitize_text'  ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'github', array(
	    'label' => __( 'Github', 'bpl' ),
	    'section' => 'social-media',
	    'settings' => 'github',
	) ) );
	
	// Add LinkedIn Setting
	$wp_customize->add_setting( 'linkedin' , array( 'default' => '', 'sanitize_callback' => 'sanitize_text'  ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin', array(
	    'label' => __( 'Linkedin', 'bpl' ),
	    'section' => 'social-media',
	    'settings' => 'linkedin',
	) ) );
	
	// Add Instagram Setting
	$wp_customize->add_setting( 'instagram' , array( 'default' => '', 'sanitize_callback' => 'sanitize_text'  ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram', array(
	    'label' => __( 'Instagram', 'bpl' ),
	    'section' => 'social-media',
	    'settings' => 'instagram',
	) ) );
	
	// Add Pinterest Setting
	$wp_customize->add_setting( 'pinterest' , array( 'default' => '', 'sanitize_callback' => 'sanitize_text'  ));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pinterest', array(
	    'label' => __( 'Pinterest', 'bpl' ),
	    'section' => 'social-media',
	    'settings' => 'pinterest',
	) ) );
	
	// Add Custom CSS Textfield
  $wp_customize->add_section( 'custom_css_field' , array(
    'title'      => __('Custom CSS','bpl'), 
    'priority'   => 40    
  ) );  
  $wp_customize->add_setting(
      'bpl_custom_css',
      array(          
          'sanitize_callback' => 'sanitize_textarea'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_css',
            array(
                'label'          => __( 'Add custom CSS here', 'bpl' ),
                'section'        => 'custom_css_field',
                'settings'       => 'bpl_custom_css',
                'type'           => 'textarea',
                'wp-head-callback'       => 'bpl_customizer_output'
            )
        )
   );
   
   	// Add Front page middle header Text
  $wp_customize->add_section( 'frontpage_middle' , array(
    'title'      => __('Frontpage Middle Section','bpl'), 
    'priority'   => 30    
  ) );  
  $wp_customize->add_setting(
      'bpl_frontpage_middle_header',
      array(   
      		'default'         => 'There Be Widgets Below',	
	        'sanitize_callback' => 'sanitize_text',
	         'transport'         => 'postMessage'
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'bpl_frontpage_middle_header',
            array(
                'label'          => __( 'Add header text here', 'bpl' ),
                'section'        => 'frontpage_middle',
                'settings'       => 'bpl_frontpage_middle_header',
                'type'           => 'text'
            )
        )
   );

	$wp_customize->get_control( 'bpl_header_color' )->priority = 10; 
	$wp_customize->get_control( 'header_textcolor' )->priority = 20; 
	$wp_customize->get_control( 'background_color' )->priority = 30; 
	$wp_customize->get_control( 'bpl_body_text_color' )	->priority = 40; 
	$wp_customize->get_control( 'bpl_link_color' )	->priority = 50;
	$wp_customize->get_control( 'bpl_link_visited_color' )	->priority = 60;
	$wp_customize->get_control( 'bpl_frontpage_middle_widgets_background_color' )->priority = 70; 
	$wp_customize->get_control( 'bpl_frontpage_middle_widgets_text_color' )->priority = 80; 
	$wp_customize->get_control( 'bpl_comment_accent_color' )->priority = 90; 
	$wp_customize->get_control( 'bpl_footer_widget_accent_color' )->priority = 100;

}
add_action( 'customize_register', 'bpl_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bpl_customize_preview_js() {
	wp_enqueue_script( 'bpl_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'bpl_customize_preview_js' );

// Sanitize text 
function sanitize_text( $text ) {
    
    return sanitize_text_field( $text );

}

// Sanitize textarea 
function sanitize_textarea( $text ) {
    
    return esc_textarea( $text );

}

function bpl_customizer_output() {
    ?>
    
    <style type="text/css">
    
    .site-header {
	    background-color: <?php echo get_theme_mod('bpl_header_color', '#3F51B5'); ?>;
    }
	  
  	a {
	    color: <?php echo get_theme_mod('bpl_link_color', '#3F51B5'); ?>;
	}
	
	a:visited {
	    color: <?php echo get_theme_mod('bpl_link_visited_color', '#7986CB'); ?>;
	}
	
	.site-content {
		color: <?php echo get_theme_mod('bpl_body_text_color', '#404040'); ?>;
	}
	  
   	.media-body {
        border-left: 2px solid <?php echo get_theme_mod('bpl_comment_accent_color', '#3F51B5'); ?>;
        border-bottom: 2px solid <?php echo get_theme_mod('bpl_comment_accent_color', '#3F51B5'); ?>;
	}
	 
 	.site-footer .widget {
	   border-left: 2px solid <?php echo get_theme_mod('bpl_footer_widget_accent_color', '#3F51B5'); ?>;
	   border-bottom: 2px solid <?php echo get_theme_mod('bpl_footer_widget_accent_color', '#3F51B5'); ?>;
	}
	
	.frontpage-middle-widgets {
		background-color: <?php echo get_theme_mod('bpl_frontpage_middle_widgets_background_color', '#3F51B5'); ?>;
	}
	
	.frontpage-middle-widgets,
	.frontpage-middle-widgets a {
		color: <?php echo get_theme_mod('bpl_frontpage_middle_widgets_text_color', '#C5CAE9'); ?>;
	}

	<?php if( get_theme_mod('bpl_custom_css') != '' ) {
        echo get_theme_mod('bpl_custom_css');
  	} ?>
  	
    </style>
    
    <?php
}

add_action( 'wp_head', 'bpl_customizer_output');

