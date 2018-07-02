<?php
	
	show_admin_bar(false);

	function balloons_script_enqueue(){
		wp_enqueue_style('customstyle', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');

		// wp_enqueue_style('customquerys', get_template_directory_uri() . '/root/style/css/querys.css', array(), '1.0.0', 'all');

		wp_enqueue_script('customjs', get_template_directory_uri() . '/root/js/script.js', array(), '1.0.0', true);

		wp_enqueue_script('googlemapsapi', "https://maps.googleapis.com/maps/api/js?key=AIzaSyAM-cPYdy_lgiz5W7gFdUmjH1h6kjgyi-o&callback=initMap", array(), '1.0.0', true);
	}

	function balloons_theme_setup(){
		add_theme_support('menus');
		register_nav_menu('primary', 'Primary Header Navigation');
	}

	add_action('wp_enqueue_scripts', 'balloons_script_enqueue');

	add_action('init', 'balloons_theme_setup');

	add_theme_support( 'title-tag' );

//custom menu

function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Social Media Links', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

// Twitter
function setting_instagram() { ?>
  <input type="text" name="instagram" id="instagram" value="<?php echo get_option( 'instagram' ); ?>" />
<?php }

function setting_facebook(){
	?>
		<input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>"/>
	<?php
}

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section' );
  add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');

  register_setting('section', 'instagram');
  register_setting('section', 'facebook');
}
add_action( 'admin_init', 'custom_settings_page_setup' );