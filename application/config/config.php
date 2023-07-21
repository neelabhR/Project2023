<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



$config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$config['base_url'] .= "://".$_SERVER['HTTP_HOST'];
$config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

// Force SSL here
// $config['base_url'] = 'https://mysecuredomain.com/';


$config['index_page'] = '';


$config['uri_protocol']	= 'AUTO';



$config['url_suffix'] = '';


$config['language']	= 'english';


$config['charset'] = 'UTF-8';



$config['enable_hooks'] = TRUE;



$config['subclass_prefix'] = 'MY_';


$config['composer_autoload'] = FALSE;

$config['stricton'] = FALSE;



$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';



$config['allow_get_array']		= TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger']	= 'c';
$config['function_trigger']		= 'm';
$config['directory_trigger']	= 'd'; // experimental not currently in use


$config['log_threshold'] = 0;


$config['log_path'] = '';


$config['log_file_extension'] = '';


$config['log_file_permissions'] = 0644;


$config['log_date_format'] = 'Y-m-d H:i:s';


$config['error_views_path'] = '';


$config['cache_path'] = '';

$config['cache_query_string'] = FALSE;


$config['encryption_key'] = '7Q1Vasdeo8k6T51rQn9w5DQrcGG06VMF';


$config['sess_cookie_name']		= 'lite_sess';
$config['sess_expiration']		= 7200;
$config['sess_match_ip']		= FALSE;
$config['sess_driver'] = 'files';
$config['sess_save_path'] = FCPATH.'resource/tmp/sessions/';
$config['sess_time_to_update']	= 300;
$config['sess_regenerate_destroy'] = FALSE;


$config['cookie_prefix']	= '_fo_';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= FALSE;
$config['cookie_httponly'] 	= FALSE;

$config['standardize_newlines'] = TRUE;


$config['global_xss_filtering'] = TRUE;


$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_fo_name';
$config['csrf_cookie_name'] = 'csrf_kb_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();


$config['compress_output'] = 1;


$config['time_reference'] = 'local';



$config['rewrite_short_tags'] = TRUE;



$config['proxy_ips'] = '';

 





