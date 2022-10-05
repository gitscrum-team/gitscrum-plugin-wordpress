<?php

/**
 * @link              https://github.com/gitscrum-team/gitscrum-wordpress-plugin
 * @since             1.0.0
 * @package           Gitscrum
 *
 * @wordpress-plugin
 * Plugin Name:       GitScrum
 * Plugin URI:        https://github.com/gitscrum-team/gitscrum-wordpress-plugin
 * Description:       Organize work to increase performance and everything you need to manage projects remotely
 * Version:           1.0.0
 * Author:            GitScrum
 * Author URI:        https://github.com/gitscrum-team/gitscrum-wordpress-plugin
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gitscrum
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'GITSCRUM_VERSION', '1.0.0' );
add_action('admin_menu', 'gitscrum_plugin_setup_menu', 5);

function gitscrum_plugin_setup_menu(){
    add_menu_page( 'GitScrum', 'GitScrum', 'manage_options', 'gitscrum-plugin', 'gitscrum_init', 'https://site.gitscrum.com/img/fav/favicon-16x16.png', 2 );
}

function gitscrum_init(){
?>
<style>
#wpcontent {
	padding-left: 0px !important;
}
#wpfooter{
	display:none;
}
#wpbody-content {
	padding-bottom: 0 !important;
	height: calc( 100vh - 38px) !important;
}</style>
    <iframe src="https://gitscrum.com/login" frameborder="0" style="overflow:hidden;height:100%;width:100%" height="800" width="100%"></iframe>
<?php
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gitscrum-activator.php
 */
function activate_gitscrum() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gitscrum-activator.php';
	Gitscrum_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gitscrum-deactivator.php
 */
function deactivate_gitscrum() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gitscrum-deactivator.php';
	Gitscrum_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gitscrum' );
register_deactivation_hook( __FILE__, 'deactivate_gitscrum' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gitscrum.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gitscrum() {

	$plugin = new Gitscrum();
	$plugin->run();

}
run_gitscrum();
