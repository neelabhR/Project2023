<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['phpass_hash_portable'] = TRUE;
$config['phpass_hash_strength'] = 8;


$config['allow_registration'] = TRUE;

$config['email_activation'] = FALSE;
$config['email_activation_expire'] = 60*60*24*2;

$config['use_username'] = TRUE;

$config['username_min_length'] = 4;
$config['username_max_length'] = 20;
$config['password_min_length'] = 4;
$config['password_max_length'] = 20;

$config['login_by_username'] = TRUE;
$config['login_by_email'] = TRUE;
$config['login_record_ip'] = TRUE;
$config['login_record_time'] = TRUE;
$config['login_count_attempts'] = TRUE;
$config['login_max_attempts'] = 15;
$config['login_attempt_expire'] = 60*60*24;

$config['autologin_cookie_name'] = '_fo_autologin';
$config['autologin_cookie_life'] = 60*60*24*31*2;

$config['forgot_password_expire'] = 60*60*24;

$config['captcha_path'] = 'resource/captcha/';
$config['captcha_fonts_path'] = 'resource/captcha.fonts/4.ttf';
$config['captcha_width'] = 200;
$config['captcha_height'] = 40;
$config['captcha_font_size'] = 18;
$config['captcha_grid'] = FALSE;
$config['captcha_expire'] = 180;
$config['captcha_case_sensitive'] = FALSE;

$config['db_table_prefix'] = 'hd_';




