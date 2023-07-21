<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  function load_config()
  {
   $CI =& get_instance();
   foreach($CI->Inithook->get_config()->result() as $site_config)
   {
    $CI->config->set_item($site_config->config_key,$site_config->value);
   }
  }
?>