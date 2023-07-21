<?php defined('BASEPATH') OR exit('No direct script access allowed.');

$config['useragent']        = 'PHPMailer';              
$config['protocol']         = 'mail';                   
$config['mailpath']         = '/usr/sbin/sendmail';
$config['smtp_host']        = 'localhost';
$config['smtp_user']        = '';
$config['smtp_pass']        = '';
$config['smtp_port']        = 25;
$config['smtp_timeout']     = 30;                       
$config['smtp_crypto']      = '';                       
$config['smtp_debug']       = 0;                        
$config['debug_output']     = '';                       
$config['smtp_auto_tls']    = true;                     
$config['smtp_conn_options'] = array(
							'ssl' => array(
				            'verify_peer'  => false,
				            'verify_peer_name'  => false,
				            'allow_self_signed' => true
				        )
				    );                 
$config['wordwrap']         = true;
$config['wrapchars']        = 76;
$config['mailtype']         = 'html';                   
$config['charset']          = null;                     
$config['validate']         = false;
$config['priority']         = 1;                        
$config['crlf']             = "\n";                     
$config['newline']          = "\n";                     
$config['bcc_batch_mode']   = false;
$config['bcc_batch_size']   = 200;
$config['encoding']         = '8bit';                   





$config['dkim_domain']      = '';                       
$config['dkim_private']     = '';                       
$config['dkim_private_string'] = '';                    
$config['dkim_selector']    = '';                       
$config['dkim_passphrase']  = '';                       
$config['dkim_identity']    = '';                       
