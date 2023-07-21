<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class App_hooks
{
	private $ignore_pages = array('/auth/login', '/auth/logout', '/auth/register/', '/auth/forgot_password', '/auth/register', '/auth/resend_activation','login','logout','register','set_language');

	public function __construct()
	{
		$this->ci =& get_instance();
	}

	public function fix_cache(){
		$this->ci->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->ci->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->ci->output->set_header('Pragma: no-cache');
        $this->ci->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	}

	public function prep_redirect()
	{
		if (!class_exists('CI_Session'))
		{
			$this->ci->load->library('session');
		}

		if (!in_array($this->ci->uri->uri_string(), $this->ignore_pages))
		{
			$this->ci->session->set_userdata('previous_page', current_url());
		}
	}

	public function save_requested()
	{
		if (!class_exists('CI_Session'))
		{
			$this->ci->load->library('session');
		}

		if (!in_array($this->ci->uri->uri_string(), $this->ignore_pages))
		{
			$this->ci->session->set_userdata('requested_page', current_url());
		}
	}

}
