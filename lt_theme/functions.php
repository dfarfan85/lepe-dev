<?php
// remove version from head
remove_action('wp_head', 'wp_generator');

// remove version from rss
add_filter('the_generator', '__return_empty_string');

// remove version from scripts and styles
function shapeSpace_remove_version_scripts_styles($src) {
	if (strpos($src, 'ver=')) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}
add_filter('style_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);


function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
	wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.13/js/all.js' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'jquery_slim', 'https://code.jquery.com/jquery-3.3.1.slim.min.js' );
	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js' );
	wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

function register_my_menu() {
	register_nav_menu('parent-menu',__( 'Parent Menu' ));
  }
  add_action( 'init', 'register_my_menu' );


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

function my_walker_nav_menu_start_el($item_output, $item, $depth, $args) {
	$classes     = 'nav-link';
	$item_output = preg_replace('/<a /', '<a class="'.$classes.'"', $item_output, 1);
	return $item_output;
}
add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);




// Custom settings
function custom_settings_add_menu() {
add_menu_page( 'Social Media', 'Social Media', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

function custom_settings_page() { ?>
	<div class="wrap">
		<h1>Social Media Links</h1>
		<form method="post" action="options.php">
			<?php
           settings_fields('section');
           do_settings_sections('theme-options');      
           submit_button(); 
       ?>
		</form>
	</div>
	<?php }
// Twitter
function setting_instagram() { ?>
	<input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>" class="regular-text code" />
<?php }
function setting_facebook() { ?>
	<input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" class="regular-text code" />
<?php }
function setting_youtube() { ?>
	<input type="text" name="youtube" id="youtube" value="<?php echo get_option('youtube'); ?>" class="regular-text code" />
<?php }
function setting_twitter() { ?>
	<input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" class="regular-text code" />
<?php }
function custom_settings_page_setup() {
	add_settings_section('section', 'All Settings', null, 'theme-options');
	add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section' );
	add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section' );
	add_settings_field( 'youtube', 'Youtube URL', 'setting_youtube', 'theme-options', 'section' );
	add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
  
	register_setting( 'section', 'instagram' );
	register_setting( 'section', 'facebook' );
	register_setting( 'section', 'youtube' );
	register_setting( 'section', 'twitter' );
}
add_action( 'admin_init', 'custom_settings_page_setup' );





// Iterate through a page's custom fields and returns an array of the 
// custom field values. Used to generate cards on pages.
function get_cust_vals($custom_fields_array){
	foreach ( $custom_fields_array as $key => $value ) {
		$clean_key = trim($key);
		if ( '_' == $clean_key{0} )
			continue;
		$custom_values[] = $value[0];
	}

	return $custom_values;
}






/* AGENT MENU COMEBACK
  function agents_add_menu () {
	add_menu_page('Agents Menu', 'Agents Menu', 'manage_options', 'agents-menu', 'agents_menu_page', null, 99);
  }
  add_action( 'admin_menu', 'agents_add_menu' ); 

  */
  