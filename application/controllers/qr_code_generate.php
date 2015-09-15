
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Qr_code_generate extends CI_Controller {

	private $_controller_url 		= 'qr_code_generate/';
	private $_method_url 			= '';
	private $_form_attributes 		= array();

	public  $data 					= array();
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/** 
	 * index  
	 * Default Method to display locations dashboard
	 * 
	 * @access public 
	 * @param  
	 * @return   
	 */
	public function index()
	{ 		
		$this->_method_url = "/".$this->_controller_url . 'index';  
		$this->_form_attributes['form_action'] = site_url(). $this->_method_url;
		$this->_form_attributes['hidden_fields'] = array('submitted' => TRUE);
		$this->load->helper('form'); 
		$this->_form_attributes['attributes'] = array('class' => 'form-horizontal', 'id' => 'frm_generate_qr_code', 'method' => 'post');
		$this->data['form_open'] = form_open($this->_form_attributes['form_action'], $this->_form_attributes['attributes'], $this->_form_attributes['hidden_fields']);
		if($this->input->post('submitted') === FALSE)
		{
			$this->load->view('qr_code_generate', $this->data); 
			
		}
		else
		{
			$this->load->library('ci_qr_code');
			$this->config->load('qr_code');
			$qr_code_config = array(); 
			$qr_code_config['cacheable'] 	= $this->config->item('cacheable');
			$qr_code_config['cachedir'] 	= $this->config->item('cachedir');
			$qr_code_config['imagedir'] 	= $this->config->item('imagedir');
			$qr_code_config['errorlog'] 	= $this->config->item('errorlog');
			$qr_code_config['ciqrcodelib'] 	= $this->config->item('ciqrcodelib');
			$qr_code_config['quality'] 		= $this->config->item('quality');
			$qr_code_config['size'] 		= $this->config->item('size');
			$qr_code_config['black'] 		= $this->config->item('black');
			$qr_code_config['white'] 		= $this->config->item('white');

			$this->ci_qr_code->initialize($qr_code_config);

			$image_name = 'qr_code_test.png';
			$phoneNo = '(049)011-1068-7851';
			$avatarJpegFileName = 'uitm_logo.jpg'; 
			$name = 'hatta muhd'; 
            $sortName = 'muhd;hatta'; 
            $phone = '(049)012-345-678'; 
            $phonePrivate = '(049)012-345-987'; 
            $phoneCell = '(049)888-123-123'; 
            $orgName = 'tuffah inc.'; 
            $email = 'hatta@example.com'; 

            // if not used - leave blank! 
            $addressLabel = 'Our Office'; 
            $addressPobox = ''; 
            $addressExt = 'Suite 123'; 
            $addressStreet = '7th Avenue'; 
            $addressTown = 'melaka'; 
            $addressRegion = 'jasin'; 
            $addressPostCode = '91921-1234'; 
            $addressCountry = 'malaysia'; 

            // we building raw data 
            $codeContents  = 'BEGIN:VCARD'."\n"; 
            $codeContents .= 'VERSION:2.1'."\n"; 
            $codeContents .= 'PHOTO;JPEG;ENCODING=BASE64:'.base64_encode(file_get_contents($avatarJpegFileName))."\n"; 
            $codeContents .= 'N:'.$sortName."\n"; 
            $codeContents .= 'FN:'.$name."\n"; 
            $codeContents .= 'ORG:'.$orgName."\n"; 
            $codeContents .= 'TEL;WORK;VOICE:'.$phone."\n"; 
            $codeContents .= 'TEL;HOME;VOICE:'.$phonePrivate."\n"; 
            $codeContents .= 'TEL;TYPE=cell:'.$phoneCell."\n"; 
            $codeContents .= 'ADR;TYPE=work;'. 
                             'LABEL="'.$addressLabel.'":' 
                                      .$addressPobox.';' 
                                      .$addressExt.';' 
                                      .$addressStreet.';' 
                                      .$addressTown.';' 
                                      .$addressPostCode.';' 
                                      .$addressCountry 
                                       ."\n"; 
            $codeContents .= 'EMAIL:'.$email."\n"; 
            $codeContents .= 'END:VCARD';  
             // we building raw data 
           // $codeContents = 'tel:'.$phoneNo; 
            


            $params['data'] = ($codeContents); 
           
			//$params['data'] = 'This QR Code was generated at ' . site_url() . $this->_method_url;
			$params['level'] = ($this->input->post('level')) ? $this->input->post('level') : 'H';
			$params['size'] = ($this->input->post('size')) ? $this->input->post('size') : 10;
			
            


			if($this->input->post('display_format') == 'image')
			{
				$params['savename'] = FCPATH.$qr_code_config['imagedir'].$image_name;
				$this->ci_qr_code->generate($params); 
				$this->data['qr_code_image_url'] = base_url().$qr_code_config['imagedir'].$image_name;
				//$this->data1['qr_code_image_url'] = base_url().$qr_code_config['imagedir'].$image_name;
				// Display the QR Code here on browser uncomment the below line
				//echo '<img src="'.base_url().$qr_code_config['imagedir'].$image_name.'" />'; 
				$this->load->view('qr_code', $this->data); 
				//$this->load->view('qr_code', $this->data1);
			}
			else
			{
				header("Content-Type: image/png"); 
				$this->ci_qr_code->generate($params);
			} 
		}
	}
}
// END qr_code_generate Controller class
/* End of file qr_code_generate.php */
/* Location: ./application/controllers/qr_code_generate.php */