<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//require_once APPPATH.'vendor/autoload.php';
//require_once APPPATH.'lib/amazonsns.class.php';
//require APPPATH.'snsClient/snsService.class.php';
class Signup extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//echo "Hello";
		$this->load->model("signup_model");
		//$data["query"]=$this->signup_model->get_all();
		$this->load->view('signuplogin'); //signup in views
	}
	public function create(){
		//  $this->load->view('signuplogin'); 
		$this->form_validation->set_rules('name','First_Name','required');
		$this->form_validation->set_rules('name1','Last_Name','required');
		$this->form_validation->set_rules('address','Address','required');

		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('state','State','required');
		$this->form_validation->set_rules('zip','Zip','required');

		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[confirm]');
		$this->form_validation->set_rules('confirm', 'Password Confirmation', 'required');
		//$this->form_validation->set_rules('contact','Contact','required');
		$this->form_validation->set_rules('contact', 'Phone number', 'trim|xss_clean|required|callback__check_phone');
		$this->form_validation->set_rules('radio','Select a radio button','required');
		if($this->form_validation->run() == FALSE)
			$this->load->view('signuplogin');
		else{
		$name = $this->input->post("name");
		$name1 = $this->input->post("name1");
		$address = $this->input->post("address");
		$city = $this->input->post("city");
		$state = $this->input->post("state");
		$zip = $this->input->post("zip");
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		//$confirm = $this->input->post("confirm");
		$contact = $this->input->post("contact");
		$radio = $this->input->post("radio");
		
//if(isset($_POST['submit'])){//to run PHP script on submit
if(isset($_POST['plumber'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['plumber'] as $selected){
//echo $name, $selected;
//}
$data[]=$selected;
}

}

			/*if(isset($_POST['plumber']))
		{
			$check[] = $this->input->post("plumber");
		}
		if(isset($_POST['tutor']))
		{
			$check[] = $this->input->post("tutor");
		}
		if(isset($_POST['babysitter']))
		{
			$check[] = $this->input->post("babysitter");
		}*/
		
		$this->load->model("signup_model"); 
		if($radio == "Service Provider")
		$this->signup_model->add_new($name,$name1,$address,$city,$state,$email,$password,$contact,$radio,$data);
		else
		$this->signup_model->add_new2($name,$name1,$address,$city,$state,$email,$password,$contact,$radio);
		if($this->db->affected_rows() > 0)
                {
                    // Send SMS to service provider
                    $smsService = new SmsService();
                    $message = 'Hello '.$name.''.$name1.' Please subscribe to eHelp !';
                    $smsService->sendSmstoUser($contact,$message);
                    $data = array();
                    $data['account'] = 'Account created !Please login !';
                    $this->load->view('signuplogin',$data);
                }
	}
	}
	public function _check_phone($contact)
        {
          if(preg_match('/^[1]{1}-[0-9]{3}-[0-9]{3}-[0-9]{4}$/i',$contact))
           {
               return true;
           } else {
                   $this->form_validation->set_message('_check_phone', '%s '.$contact.' is invalid format');
                   return false;
           }
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */