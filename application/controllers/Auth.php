<?php
class Auth extends CI_Controller {

  function __construct(){
    parent:: __construct();

    $this->load->model('model_userLog');
  }

  public function index(){
    $this->load->view('templates/header_landing');
    $this->load->view('form-auth/login');
    $this->load->view('templates/footer');
  }

	function login(){
		if(isset($_POST['submit'])){
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $berhasil = $this->model_userLog->login($username,$password);
      if($berhasil == 1){
				$this->session->set_userdata(array('user' => $username));
				redirect('dashboard');
			}else{
				redirect('auth/login');
			}
    }else{
      $this->load->view('templates/header_landing');
      $this->load->view('form-auth/login');
      $this->load->view('templates/footer');
    }
	}

  function logout(){
    $this->session->sess_destroy();
    redirect('');
  }

  function register(){
    if(isset($_POST['submit'])){
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $berhasil = $this->model_userLog->register($username,$password);
      if($berhasil == 1){
				redirect('auth/login');
			}else{
				redirect('landing_page');
			}
    }else{
      $this->load->view('templates/header_landing');
      $this->load->view('form-auth/register');
      $this->load->view('templates/footer');
    }
	}
}
