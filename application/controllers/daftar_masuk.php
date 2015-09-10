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
  $this->load->view('registration_view');//loads the register_view.php file in views folder
 }
  
  public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('ic_no', 'Ic No', 'trim|required|min_length[5]|xss_clean');
  //$this->form_validation->set_rules('full_name', 'Full Name', 'trim|required|min_length[5]|xss_clean');
  $this->form_validation->set_rules('contact_num', 'Contact Number', 'trim|required|min_length[5]|xss_clean');
  $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
  $this->form_validation->set_rules('gender', 'Gender', 'trim|required|""');

  if($this->form_validation->run() == FALSE)
  {
   
    $this->load->view('registration_view');
  }
  else
  {
   $this->m_login->add_user();
   //$this->thank();
   $this->load->view('success');
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

    // public function users()
   //{
      //  $this->grocery_crud->set_table('users');
       // $output = $this->grocery_crud->render();
 
        

         //$this->_example_output($output);   
    //}
  

   public function bus()
   {
        $this->grocery_crud->set_table('bus');
        $output = $this->grocery_crud->render();
 
        

         $this->_example_output($output);   
    }

    public function busDriver()
   {
        $this->grocery_crud->set_table('bus_driver');
        $output = $this->grocery_crud->render();
 
        

         $this->_example_output($output);   
    }

    public function driverLocation()
   {
        $this->grocery_crud->set_table('driver_location');
        $output = $this->grocery_crud->render();
 
        

         $this->_example_output($output);   
    }


    public function location()
   {
        $this->grocery_crud->set_table('location');
        $output = $this->grocery_crud->render();
 
        

         $this->_example_output($output);   
    }

    public function QR()
   {
        //$this->grocery_crud->set_table('location');
        //$output = $this->grocery_crud->render();
        redirect('qr_code_generate');
        

         $this->_example_output($output);   
    }


    public function _example_output($output = null)
      {
            $this->load->view('example.php',$output);
      }
  

}

?>
