<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config['gravatar_base_url'] = 'https://www.gravatar.com/';
$config['gravatar_secure_base_url'] = 'https://secure.gravatar.com/';
$config['gravatar_image_extension'] = '.png'; // '', '.png' or '.jpg'.
$config['gravatar_image_size'] = 80;
$config['gravatar_default_image'] = ''; // '', '404', 'mm', 'identicon', 'monsterid', 'wavatar', 'retro', 'blank'.

$config['gravatar_force_default_image'] = false;
$config['gravatar_rating'] = ''; // '', 'g' (default), 'pg', 'r', 'x'.

$config['gravatar_useragent'] = 'PHP Gravatar Library';