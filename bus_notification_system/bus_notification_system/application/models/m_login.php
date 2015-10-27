<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_login extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  
  public function ambilPengguna($username, $password, $status, $level)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $this->db->where('status', $status);
    $this->db->where('level', $level);
    $query = $this->db->get();
    
    return $query->num_rows();
  }
  
  
  public function dataPengguna($username)
  {
   $this->db->select('username');
   $this->db->select('full_name');
   $this->db->select('address');
   $this->db->select('ic_no');
   $this->db->select('contact_no');
   $this->db->select('email');
   $this->db->select('gender');
   $this->db->select('race');
   $this->db->select('religion');
   $this->db->select('level');
   $this->db->select('status');
   $this->db->select('password');
   $this->db->where('username', $username);
   $query = $this->db->get('user');
   
   return $query->row();
  }
  
  public function add_user()
  {
     $data=array(
                 'ic_no'=>$this->input->post('ic_no'),
                 'full_name'=>$this->input->post('full_name'),
                 'race'=>$this->input->post('race'),
                 'gender'=>$this->input->post('gender'),
                 'address'=>$this->input->post('address'),
                 'religion'=>$this->input->post('religion'),
                 'contact_no'=>$this->input->post('contact_num'),
                 'username'=>$this->input->post('user_name'),
                 'email'=>$this->input->post('email_address'),
                 'password'=>md5($this->input->post('password')),
                 'level'=>"3",
                 'status'=>"1"
                 );
     $this->db->insert('user',$data);
     return true;
  }

  function getBus()
  {
    $q = $this->db->query("SELECT * FROM bus");
 
    if($q->num_rows() > 0)
    {
      foreach ($q->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }
  }

  function getUser()
  {
    $r = $this->db->query("SELECT * FROM user");
 
    if($r->num_rows() > 0)
    {
      foreach ($r->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }
  }
  
}  

?>