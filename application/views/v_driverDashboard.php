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
<<<<<<< HEAD

	public function index()
	{
		
      // echo "<h1>Welcome to the world of Codeigniter</h1>";
      // die();
		$this->load->helper("url");
		//$this->load->view('welcome_message.php');
	//$this->load->view('mainpage.php');
		//$this->load->view('portfolio-details.php');
	//$this->load->view('home.php');
	$this->load->view('register.php');
	}


=======
	public function index()
	{
		$this->load->helper("url");
		//$this->load->view('welcome_message.php');
		//$this->load->view('mainpage.php');
		//$this->load->view('portfolio-details.php');
	$this->load->view('home.php');
	}

>>>>>>> origin/amarul
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */