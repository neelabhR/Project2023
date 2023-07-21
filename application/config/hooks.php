<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$hook['pre_controller'][] = array(
                                         'class'         => 'App_hooks',
                                         'function'      => 'save_requested',
                                         'filename'      => 'App_hooks.php',
                                         'filepath'      => 'hooks',
                                         'params'        => ''
                                                        );


$hook['post_controller'][] = array(
                                         'class'         => 'App_hooks',
                                         'function'      => 'prep_redirect',
                                         'filename'      => 'App_hooks.php',
                                         'filepath'      => 'hooks',
                                         'params'        => ''
                                                        );

                                                        

$hook['pre_controller'][] = array(
                                        'class'    => '',
                                        'function' => 'load_config',
                                        'filename' => 'App_config.php',
                                        'filepath' => 'hooks'
                                                        );


$hook['pre_controller'][] = array(
                                        'class'    => '',
                                        'function' => 'set_lang',
                                        'filename' => 'App_lang.php',
                                        'filepath' => 'hooks'
                                                        );

