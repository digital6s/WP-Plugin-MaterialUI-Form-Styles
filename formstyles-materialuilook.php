<?php
/**
 * Plugin Name: Digital 6s Material Design Look for Forms Lite
 * Plugin URI: https://github.com/digital6s/Googlemap-wp
 * Description: A very lite lite form styling plugin to add material design looking styles to forms, There is no admin section on purpose. You can change the look and function of styles in the css and js file, Instructions and resources to replace and customise the code is in the js file 
 * Version: 1.0
 * Author:            Digital6s - Vanessa
 * Author URI:        https://digital6s.com
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * 
 **/

//create the function
function d6s_formstyles() { 
    wp_register_script( 'd6smdformscript',  plugin_dir_url( __FILE__ ) . 'js/scripts.js' );
  /*  Registers the style.css file that includes element css styling */
    wp_register_style( 'd6smdformsstyle',  plugin_dir_url( __FILE__ ) . 'css/style.css' );

  /* Enques the above scripts that have been registered otherwise they wont actually load */
    wp_enqueue_script('d6smdformscript');
    wp_enqueue_style('d6smdformsstyle');  
}

// Runs the function 
add_action('wp_enqueue_scripts', 'd6s_formstyles');
