<?php

$additional_banking_infos=$wpdb->prefix.'additional_banking_infos';
$banking_infos=$wpdb->prefix.'banking_infos';
$current_employments=$wpdb->prefix.'current_employments';
$current_residences=$wpdb->prefix.'current_residences';
$finance_summaries=$wpdb->prefix.'finance_summaries';
$previous_employments=$wpdb->prefix.'previous_employments';
$previous_residences=$wpdb->prefix.'previous_residences';
$user_references=$wpdb->prefix.'user_references';

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

$additional_banking_infos_sql = "
CREATE TABLE IF NOT EXISTS $additional_banking_infos (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  user_id int(10) unsigned NOT NULL,
  bank_add varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  bank_city varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  bank_province varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  bank_postal varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (id),
)$charset_collate;";
dbDelta( $additional_banking_infos_sql );

$banking_infos_sql="
CREATE TABLE IF NOT EXISTS $banking_infos (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  user_id int(10) unsigned NOT NULL,
  bank_name varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  years_bank varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (id)
)$charset_collate;";
dbDelta( $banking_infos_sql );

$current_employments_sql="
CREATE TABLE IF NOT EXISTS $current_employments (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  user_id int(10) unsigned NOT NULL,
  employee_type varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  occupation varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  employee_name varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  employee_phone varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  emp_add varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  emp_city varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  emp_province varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  year_emp varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  month_emp varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (id)
)$charset_collate;";
dbDelta( $current_employments_sql );

$current_residences_sql="
CREATE TABLE IF NOT EXISTS $current_residences (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  user_id int(10) unsigned NOT NULL,
  address_type varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  apartment_num varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  houseno_boxno varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  street_name varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  street_type varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  city varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  province varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  postal_code varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  direction varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  home_phone varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  years_add varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  month_add varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (id)
)$charset_collate;";
dbDelta( $current_residences_sql );

$finance_summaries_sql="
CREATE TABLE IF NOT EXISTS $finance_summaries (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  user_id int(10) unsigned NOT NULL,
  gross_salary varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  monthly_commission varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  car_allowance varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  others_income varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  others_monthly varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  total_monthly varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  current_res varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  holder_name varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  monthly_rent varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  home_market varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  mortgage_balance varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  credit_card varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  credit_card_number varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  others_monthly_obligation varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (id)
)$charset_collate;";
dbDelta( $finance_summaries_sql );

$previous_employments_sql="
CREATE TABLE IF NOT EXISTS $previous_employments (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  user_id int(10) unsigned NOT NULL,
  previous_employee_type varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  previous_occupation varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  previous_employee_name varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  previous_employee_phone varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  previous_emp_add varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  previous_emp_city varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  previous_emp_province varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  previous_year_emp varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  previous_month_emp varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (id)
)$charset_collate;";
dbDelta( $previous_employments_sql );

$previous_residences_sql="CREATE TABLE IF NOT EXISTS $previous_residences (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  user_id int(10) unsigned NOT NULL,
  previous_address_type varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  previous_apartment_num varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  previous_houseno_boxno varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  previous_street_name varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  previous_street_type varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  previous_city varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  previous_province varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  previous_postal_code varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  previous_direction varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  previous_home_phone varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  previous_years_add varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  previous_month_add varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (id)
)$charset_collate;";
dbDelta($previous_residences_sql);

$user_references_sql="CREATE TABLE IF NOT EXISTS $user_references (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  user_id int(10) unsigned NOT NULL,
  ref_full_name varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  ref_address varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  ref_ralation varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  ref_phone_number varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  updated_at timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (id)
)$charset_collate;";
dbDelta( $user_references_sql );

?>