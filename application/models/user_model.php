<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
public function __construct()
{
parent::__construct();
}
public function register_user()
{
$data=array(
'username'=>$this->input->post('username'),
'email'=>$this->input->post('email'),
'password'=>md5($this->input->post('password')),
'gender'=>$this->input->post('gender'),
'registred'=>time()
);
$this->db->insert('users',$data);
return true;
}
function login($email,$password)
{
$this->db->where("email",$email);
$this->db->where("password",md5($password));
$query=$this->db->get("users");
if($query->num_rows()>0)
{
$row=$query->row();
$userdata = array(
'user_id'  => $row->id,
'username'  => $row->username,
'email'    => $row->email,
);
$this->session->set_userdata($userdata);
return true;
}
return false;
}
}
