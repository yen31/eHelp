<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//require_once APPPATH.'vendor/autoload.php';
//require_once APPPATH.'lib/amazonsns.class.php';
//require APPPATH.'snsClient/snsService.class.php';
class Request extends CI_Controller {

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
		$this->load->model("request_model");
		//$data["query"]=$this->signup_model->get_all();
		$this->load->view('userwelcome'); //signup in views
	}
	public function create(){
		// $this->load->view('userwelcome');
                $this->load->library('session');
                $this->form_validation->set_rules('categorylist','Category','required');
		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('time','Time','required');
                if($this->form_validation->run() == FALSE)
			$this->load->view('userwelcome');
		else{
                $this->load->model("request_model");
		$category = $this->input->post("categorylist");
		$date = $this->input->post("date");
		$time = $this->input->post("time");
		$this->load->model("request_model");
                $sessData = $this->session->userdata('userSess');
                $email = $sessData['email'];
                $uid = $sessData['usrid'];
                $requestId = $this->request_model->add_new($category,$date,$time,$email);
                $userName = $this->request_model->getUserName($uid);
                $payment =  $this->request_model->getPaymentForCategory($category);

                if($this->db->affected_rows() > 0)
                {
//                    $smsService = new SmsService();
//                    $resultData = $this->request_model->getUserDetailsByCategory($category);
//                    for($i=0;$i<sizeof($resultData);$i++)
//                    {
//                       $message = 'Hello '.$resultData[$i]['fname'].' '.$resultData[$i]['lname'].' there is a request for  service category '.$payment['cname'];
//
//                         $contact = $resultData[$i]['phone'];
//                         $smsService->sendSmstoUser($contact,$message);
//                    }
                    $data['requestId'] = $requestId;
                    $data['fname'] = $userName['fname'];
                    $data['lname'] = $userName['lname'];
                    $data['cost'] = $payment['cost'];
                    $data['service'] = $payment['cname'];
                    $this->load->view('payment/paymentForm',$data);
                }
            }
        }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */