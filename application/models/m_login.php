<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_login extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  
  public function ambilPengguna($username, $password, $level)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $this->db->where('level', $level);
    $query = $this->db->get();
    
    return $query->num_rows();
  }
  
  public function dataPengguna($username)
  {
   $this->db->select('username');
   $this->db->select('full_name');
   $this->db->where('username', $username);
   $query = $this->db->get('user');
   
   return $query->row();
  }
  
  public function add_user()
 {
  $data=array(
  'full_name'=>$this->input->post('full_name'),
  'ic_no'=>$this->input->post('ic_no'),
  'address'=>$this->input->post('address'),
  'contact_no'=>$this->input->post('contact_no'),
  'gender'=>$this->input->post('gender'),
  'race'=>$this->input->post('race'),
  'religion'=>$this->input->post('religion'),
  'username'=>$this->input->post('username'),
  'email'=>$this->input->post('email'),
  'password'=>md5($this->input->post('password'))
  );
  $this->db->insert('user',$data);
 }
  
}  

?>