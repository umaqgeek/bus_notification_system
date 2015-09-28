<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Daftar_masuk extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    
    $this->load->model('m_login');
    
    //$this->load->library(array('form_validation','session'));
    
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
                alert('Please check your username, password and level.');
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
  $this->form_validation->set_rules('full_name', 'Full Name', 'trim|required|min_length[5]|xss_clean');
  $this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[5]|xss_clean');
  $this->form_validation->set_rules('contact_num', 'Contact Number', 'trim|required|min_length[5]|xss_clean');
  $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|min_length[5]|xss_clean');
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

  
    public function choose_bus()
   {
      
         $data['i']=$this->m_login->selectBus();  
         //return the data in view  
         $this->load->view('bus_choose', $data);  
     
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

  function user_view()
  {
    $this->load->helper("url");
    $this->load->view('user_view.php');
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


   public function chooseLocation()
   {
     //$this->load->database();  
         //load the model  
     //$this->load->model('m_login'); 

     $data['h']=$this->m_login->selectLocation();  
         //return the data in view  
     $this->load->view('location_view', $data);  
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
  
  function admin_generate()
  {
    $this->load->helper("url");
    $this->load->view('admin_generate.php');
  }

  function admin_locate()
  {
    $this->load->helper("url");
    $this->load->view('admin_locate.php');
  }

  function admin_locatetype()
  {
    $this->load->helper("url");
    $this->load->view('admin_locatetype.php');
  }

  function admin_manage()
  {
    $this->load->helper("url");
    $this->load->view('admin_manage.php');
  }
  
  function driver_bus()
  {
    //$this->load->helper("url");
   $data['i']=$this->m_login->selectBus();  
         //return the data in view  
   $this->load->view('driver_bus', $data);  
  }
  
  function driver_scan()
  {
    $this->load->helper("url");
    $this->load->view('driver_scan.php');
  }
  
  function driver_maps()
  {
    //$this->load->CI_Controller("map");
    $this->load->view('driver_maps.php');
  }

}

?>
