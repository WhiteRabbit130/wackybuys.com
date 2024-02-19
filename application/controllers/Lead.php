<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lead extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Lead_model');

		// $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		// $this->lang->load('auth');
	}

	function index()
	{

	}

	function add()
	{
		if (!$this->ion_auth->logged_in()) {
			//redirect them to the login page
			redirect('auth/login', 'refresh');
		} else {
			$this->load->view('lead/add');
		}
	}
}
