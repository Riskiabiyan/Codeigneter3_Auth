<?php

class About extends CI_Controller {

	function __construct(){
  parent:: __construct();

  if(empty($this->session->userdata('user'))){
    redirect('auth/login');
  }
}

	public function index()
	{
    $this->load->view('templates/header_nobg');
		$this->load->view('pages/about');
    $this->load->view('templates/footer');
	}
}
