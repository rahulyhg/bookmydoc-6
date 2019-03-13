<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		check_installer();
		if(!$this->session->userdata('frontend_logged_in')) {
			redirect(base_url());
		}
 	}
	
	function index() {
		$this->session->unset_userdata('frontend_logged_in');
		session_destroy();
		redirect(base_url());
	}
}