<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   function set_lang()
   {
    $CI =& get_instance();
    $system_lang = $CI->Inithook->get_lang();
 
    $CI->config->set_item('language', $system_lang);
    
    $CI->lang->load('hd', $system_lang ? $system_lang : 'english');
 
    date_default_timezone_set($CI->config->item('timezone'));
 
   }