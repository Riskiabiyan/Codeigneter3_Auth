<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing_page extends CI_Controller {
	public function index()
	{
    $this->load->view('templates/header_landing');
		$this->load->view('pages/landing_page');
    $this->load->view('templates/footer');
	}
}
