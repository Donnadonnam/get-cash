#  /*
#  * Plugin URI: https://theafricanboss.com/get-cash
#  * Author: The African Boss
#  * Version: 2.1
#  * Created: 2021
#  */
#  // Reach out to The African Boss for website and mobile app development services at theafricanboss@gmail.com
#  
#  // via email at theafricanboss@gmail.com on your thoughts and what you would like improved
#  if ( ! defined( 'ABSPATH' ) ) {
#  }
#  include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
#  include_once( ABSPATH . 'wp-includes/option.php');
#  add_filter( 'widget_text', 'do_shortcode');
#  define('GET_CASH_PLUGIN_DIR', plugin_dir_path(__FILE__) );
#  define('GET_CASH_PLUGIN_DIR_URL', plugins_url( '/' , __FILE__ ));
#  
#  	add_action( 'activated_plugin', function ( $plugin ) {
#  			exit( wp_redirect( admin_url( 'admin.php?page=get-cash', __FILE__ ) ) );
#  	});
#  	add_action( 'admin_notices', function () {
#  	} );
#  	if ( is_plugin_active( 'get-cash-pro/get-cash.php' ) ) {
#  		activate_plugin( 'get-cash-pro/get-cash.php');
#  	wp_die( '<div><p>Get Cash has been deactivated because the PRO version is activated.
		<strong>Enjoy the upgrade</strong></p></div>
		<div><a href="' .  esc_url( admin_url( 'admin.php?page=get-cash-pro', __FILE__ ) ) . '">Set up the plugin</a> | <a href="' . admin_url('plugins.php') . '">Return</a></div>' );
	}

	include_once GET_CASH_PLUGIN_DIR . 'pro/index.php';
}

require_once GET_CASH_PLUGIN_DIR . 'includes/class-get_cash.php';

?>