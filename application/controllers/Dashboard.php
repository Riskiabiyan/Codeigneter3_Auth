<?php

class Dashboard extends CI_Controller {

	function __construct(){
  parent:: __construct();

  if(empty($this->session->userdata('user'))){
    redirect('auth/login');
  }
}

	public function index()
	{
    $this->load->view('templates/header');
		$this->load->view('pages/dashboard');
    $this->load->view('templates/footer');
	}
}
