<?php

/**
 * Plugin Name: Car Loan Application.
 * Plugin URI: http://bloodsoft.org/plugin/loanapp
 * Description: A car loan application plugin.
 * Version: 1.0.0
 * Author: Bloodsoft
 * Author URI: http://bloodsoft.org
 */

defined('ABSPATH') or die("No script kiddies please!");

global $loan_app_version;
$loan_app_version = '1.0';


register_activation_hook( __FILE__, 'loanapp_activate' );

function loanapp_activate()
{
global $wpdb;
$table_name=$wpdb->prefix.'loanapp';
$charset_collate = $wpdb->get_charset_collate();

$sql = "CREATE TABLE IF NOT EXISTS $table_name (
		loanapp_id int(11) NOT NULL AUTO_INCREMENT,
  		personal_information text,
  		residence_information text,
  		employment_information text,
  		finance_information text,
  		banking_information text,
		application_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  		status tinyint(2) DEFAULT '0',
  		user_id int(11) NOT NULL,
		PRIMARY KEY id (loanapp_id)
	) $charset_collate;";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );


//add_option( 'loan_app_version', $loan_app_version );
}

add_action('admin_menu', 'loanapp_admin_actions');

function loanapp_admin_actions(){
add_options_page('Loan Application', 'Loan Application', 'manage_options', __FILE__, 'loanapp_admin' );
}

function loanapp_admin()
{
echo "Loan Application";
}


?>