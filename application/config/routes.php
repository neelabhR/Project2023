<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] 	= 'home';
$route['404_override'] 		= 'errors/error_404';
$route['translate_uri_dashes'] = FALSE;

$route['dashboard'] = 'dashboard';
$route['contact'] = 'contact';
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';

if($route['default_controller'] == 'home') {
    require_once( BASEPATH .'database/DB'. EXT );
    $db =& DB();
    $query = $db->get( 'posts' );
    $result = $query->result();
    foreach( $result as $row )
    {
        $route[ $row->slug ] = 'pages/page/$1';
    }
}
