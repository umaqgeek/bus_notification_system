<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Daftar_masuk extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    
    $this->load->model('m_login');
    
    $this->load->library(array('form_validation','session'));
    
    $this->load->database();
    
    $this->load->helper('url');

    $this->load->library('grocery_CRUD');
    
  }
  
  
  public function index()
  {
    $session = $this->session->userdata('isLogin');
    
      if($session == FALSE)
      {
        redirect('daftar_masuk/login_form');
      }else
      {
        redirect('tapak');
      }
  }
  
  
  public function login_form()
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
    $this->form_validation->set_rules('password', 'Password', 'required|md5|xss_clean');
    $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
    
      if($this->form_validation->run()==FALSE)
      {
        $this->load->view('form_login');
      }else
      {
       $username = $this->input->post('username');
       $password = $this->input->post('password');
       $level = $this->input->post('level');
       
       $cek = $this->m_login->ambilPengguna($username, $password, 1, $level);
        
        if($cek <> 0)
        {
          $this->session->set_userdata('isLogin', TRUE);
          $this->session->set_userdata('username',$username);
          $this->session->set_userdata('level',$level);
         
         redirect('tapak');
        }else
        {
         echo " <script>
		            alert('Gagal Login: Cek username , password dan level anda!');
		            history.go(-1);
		          </script>";        
        }
      }  
  }
  
  public function register()
  {
     $this->load->view('form_register');
  }
  
  public function registration()
  {
    {
    $this->load->library('form_validation');
    // field name, error message, validation rules
    /*$this->form_validation->set_rules('full_name', 'Full Name', 'trim|required|xss_clean');
    $this->form_validation->set_rules('ic_no', 'IC No', 'trim|required|xss_clean');
    $this->form_validation->set_rules('race', 'Race', 'trim|required|xss_clean');
    $this->form_validation->set_rules('gender', 'Gender', 'trim|required|xss_clean');
    $this->form_validation->set_rules('address', 'Address', 'trim|required|xss_clean');
    $this->form_validation->set_rules('religion', 'Religion', 'trim|required|xss_clean');
    $this->form_validation->set_rules('contact_no', 'Contact No', 'trim|required|max_length[10]|xss_clean');
    $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]|xss_clean');
    $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
    $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required|matches[password]');*/

    if($this->form_validation->run() == FALSE)
    {
       $this->load->view('form_register');
    }
    else
    {
       $this->user_model->add_user();
    }
     }
  }
  
  public function logout()
  {
   $this->session->sess_destroy();
   
   redirect('daftar_masuk/login_form');
  }  

   public function user()
   {
        $this->grocery_crud->set_table('user');
        $output = $this->grocery_crud->render();
 
        

         $this->_example_output($output);   
    }
    
     function _example_output($output = null)
 
    {
        $this->load->view('our_templates.php',$output);    
    }


}

?>
