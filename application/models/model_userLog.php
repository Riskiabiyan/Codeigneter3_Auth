<?php
class model_userLog extends CI_Model{

  function login($username, $password){
    $periksa = $this->db->get_where('users',array('username' => $username, 'password' => md5($password)));

    if($periksa->num_rows()>0){
      return 1;
    }else{
      return 0;
    }
  }

  function register($username,$password){
    $data_user = array(
			'username'=>$username,
			'password'=>md5($password)
		);
		$this->db->insert('users',$data_user);

    $periksa = $this->db->get_where('users',array('username' => $username, 'password' => md5($password)));
    if($periksa->num_rows()>0){
      return 1;
    }else{
      return 0;
    }

	}
}
