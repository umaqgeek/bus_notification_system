<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sol extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD')
	}
	public function index()
	{
		
       echo "<h1>Welcome to the world of Codeigniter</h1>";
       die();
		//$this->load->helper("url");
		//$this->load->view('welcome_message.php');
		//$this->load->view('mainpage.php');
		//$this->load->view('portfolio-details.php');
	//$this->load->view('contact2.php');
	}

	public function employees()
    {
        $this->grocery_crud->set_table('employees');
        $output = $this->grocery_crud->render();
 
        echo "<pre>";
        print_r($output);
        echo "</pre>";
        die();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */