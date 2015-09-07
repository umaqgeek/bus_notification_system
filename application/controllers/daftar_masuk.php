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

     public function users()
   {
        $this->grocery_crud->set_table('users');
        $output = $this->grocery_crud->render();
 
        

         $this->_example_output($output);   
    }


  

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
    
     function _example_output($output = null)
 
    {
        $this->load->view('our_templates.php',$output);    
    }


}

?>
