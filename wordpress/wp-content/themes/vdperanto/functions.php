<?php add_action( 'wp_enqueue_scripts', 'vdperanto_theme_css',999);
	function vdperanto_theme_css() {
	wp_enqueue_style( 'vdperanto-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'vdperanto-child-style', get_stylesheet_uri(), array( 'vdperanto-parent-style' ) );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'custom-style-css', get_stylesheet_directory_uri()."/css/custom.css" );
	wp_dequeue_style( 'custom-css', get_template_directory_uri() .'/css/custom.css');	
}

add_action( 'after_setup_theme', 'vdperanto' );
function vdperanto()
{	
	load_theme_textdomain( 'vdperanto', get_stylesheet_directory() . '/languages' );
	
	require( get_stylesheet_directory() . '/functions/customizer/custo_general_settings.php' );
}


function vdperanto_default_data(){
	return array(
	// general settings
	'footer_copyright_text' => '<p>'.__( '<a href="https://wordpress.org">Proudly powered by WordPress</a> | Theme: <a href="https://webriti.com" rel="designer">vdperanto</a> by Webriti', 'vdperanto' ).'</p>',
	);
}


add_action( 'after_switch_theme', 'import_busiprof_theme_data_in_busiprof_child_theme' );
/**
* Import theme mods when switching from Busiprof child theme to Busiprof
*/
function import_busiprof_theme_data_in_busiprof_child_theme() {

    // Get the name of the previously active theme.
    $previous_theme = strtolower( get_option( 'theme_switched' ) );

    if ( ! in_array(
        $previous_theme, array(
            'busiprof',
			'vdequator',
			'arzine',
			'lazyprof',
        )
    ) ) {
        return;
    }

    // Get the theme mods from the previous theme.
    $previous_theme_content = get_option( 'theme_mods_' . $previous_theme );

    if ( ! empty( $previous_theme_content ) ) {
        foreach ( $previous_theme_content as $previous_theme_mod_k => $previous_theme_mod_v ) {
            set_theme_mod( $previous_theme_mod_k, $previous_theme_mod_v );
        }
    }
} 


?>