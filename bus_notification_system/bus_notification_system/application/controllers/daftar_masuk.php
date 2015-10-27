<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Daftar_masuk extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    
    $this->load->model('m_login');
    $this->load->model('m_location');
    $this->load->model('m_conndb');
    $this->load->model('m_driver_location');
    //$this->load->model('grocery_crud_model.php');
    
    $this->load->library('session');
    
    $this->load->database();
    
    $this->load->helper('url');

    $this->load->library('grocery_CRUD');

    $this->load->library('encrypt');

    $this->load->library('QRGenerator');

    $this->load->library('my_func');
    
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
  
  
  //ni borang and function untuk login
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
  
  //ni form untuk register
  public function register()
 {
  $this->load->view('registration_view');//loads the register_view.php file in views folder
 }
  
  //ni function untuk registration
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
  
  //ni function untuk logout
  public function logout()
  {
   $this->session->sess_destroy();
   
   redirect('daftar_masuk/login_form');
  }  

   //ni grocery crud untuk table user
   public function user()
   {
        $this->grocery_crud->set_table('user');
        $output = $this->grocery_crud->render();
        $this->_example_output($output);   
    }


      //ni untuk display table grocery crud user
     function _example_output($output = null)
 
    {
        $this->load->view('manage_user.php',$output);    
    }


  function user_view()
  {
    $this->load->helper("url");
    $this->load->view('user_view.php');
  }
  
  //ni function untuk user update
  function user_update()
  {
    $this->load->helper("url");
    $this->load->model("m_login");
    $users = $this->m_login->getUser();           
    $data['user'] = $users;
    $this->load->view('user_update.php',$data);
  }

   //ni grocery crud untuk table bus
   public function bus()
   {
        $this->grocery_crud->set_table('bus');
        $output = $this->grocery_crud->render();
        $this->_example_output($output);   
    }
    
    // //ni grocery crud untuk table bus_driver
    public function busDriver()
   {
        $this->grocery_crud->set_table('bus_driver');
        $output = $this->grocery_crud->render();
        $this->_example_output($output);   
    }

     //ni grocery crud untuk table locate_type
    public function locatetype()
   {
        $this->grocery_crud->set_table('driver_location');
        $output = $this->grocery_crud->render();
        $this->_admin_locatetype($output);   
    }

  
     //ni untuk display grocery_crud table locate_type   
     function _admin_locatetype($output = null)
  {
    $this->load->view('admin_locatetype.php',$output);
  }


    //ni grocery crud untuk table location
    public function location()
   {
        $this->grocery_crud->set_table('location');
        $output = $this->grocery_crud->render();
        $this->_admin_locate($output);   
    }

  
     // ni untuk display grocery crud table location  
     function _admin_locate($output = null)
  {
    $this->load->view('admin_locate.php',$output);
  }


  //ni function untuk generate qr code
  function admin_generate()
  {
     $data['location'] = $this->m_location->getAll();
            if ($this->input->get('location')) 
            {
                $lo_idx = $this->input->get('location');
                $lo_id = $this->my_func->decrypt($lo_idx);
                $data['lo'] = $this->m_conndb->get('location lo', 'lo.lo_id', $lo_id);
            }

   //$this->load->helper("url");
   $this->load->view('admin_generate.php',$data);
  }

  //function untuk generate pdf
  function generate_pdf()
  {
   $this->load->library('cezpdf');

    $this->cezpdf->ezText('Bus report', 12, array('justification' => 'center'));
    $this->cezpdf->ezSetDy(-10);

    $content = 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog.
          Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs.';

    $this->cezpdf->ezText($content, 10);

    $this->cezpdf->ezStream();
  }

  function tables()
  {
    $this->load->library('cezpdf');

    $db_data[] = array('name' => 'Jon Doe', 'phone' => '111-222-3333', 'email' => 'jdoe@someplace.com');
    $db_data[] = array('name' => 'Jane Doe', 'phone' => '222-333-4444', 'email' => 'jane.doe@something.com');
    $db_data[] = array('name' => 'Jon Smith', 'phone' => '333-444-5555', 'email' => 'jsmith@someplacepsecial.com');
    
    $col_names = array(
      'name' => 'Name',
      'phone' => 'Phone Number',
      'email' => 'E-mail Address'
    );
    
    $this->cezpdf->ezTable($table_data, $col_names, 'Contact List', array('width'=>550));
    $this->cezpdf->ezStream();
  }

  
  function headers()
  {
    $this->load->library('cezpdf');
    $this->load->helper('pdf');
    
    prep_pdf(); // creates the footer for the document we are creating.

    $db_data[] = array('name' => 'Jon Doe', 'phone' => '111-222-3333', 'email' => 'jdoe@someplace.com');
    $db_data[] = array('name' => 'Jane Doe', 'phone' => '222-333-4444', 'email' => 'jane.doe@something.com');
    $db_data[] = array('name' => 'Jon Smith', 'phone' => '333-444-5555', 'email' => 'jsmith@someplacepsecial.com');
    
    $col_names = array(
      'name' => 'Name',
      'phone' => 'Phone Number',
      'email' => 'E-mail Address'
    );
    
    $this->cezpdf->ezTable($db_data, $col_names, 'Contact List', array('width'=>550));
    $this->cezpdf->ezStream();
  }


    function getList1()
        {
            $data['driver_location'] = $this->m_driver_location->getAll();
            $this->load->view('ajax/v_get_list', $data);
        }
        
        function testGroceryCrud($page)
        {
            try{
                    $crud = new grocery_CRUD();

                    $crud->set_theme('datatables');
                    
                    $crud->set_table('user');
                    
                    $output = $crud->render();

                    $this->_example_output($page, $output);

            }catch(Exception $e){
                    show_error($e->getMessage().' --- '.$e->getTraceAsString());
            }
        }
        


  function admin_manage()
  {
    $this->load->helper("url");
    $this->load->view('admin_manage.php');
  }

  function admin_update()
  {
    $this->load->helper("url");
    $this->load->model("m_login");
    $users = $this->m_login->getUser();           
    $data['user'] = $users;
    $this->load->view('admin_update.php',$data);
  }
  
  function driver_bus()
  {
    $this->load->helper("url");
    $this->load->model("m_login");
    $deptresult = $this->m_login->getBus();           
    $data['bus'] = $deptresult;
    $this->load->view('driver_bus.php',$data);
  }
  
  function driver_scan()
  {
    $this->load->helper("url");
    $this->load->view('driver_scan.php');
  }
  
  function driver_maps()
  {
    $this->load->helper("url");
    $this->load->view('driver_maps.php');
  }

  function driver_update()
  {
    $this->load->helper("url");
    $this->load->model("m_login");
    $users = $this->m_login->getUser();           
    $data['user'] = $users;
    $this->load->view('driver_update.php',$data);
  }

}

?>
