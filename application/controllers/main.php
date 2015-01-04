<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index()
	{
            $this->load->view('home');
	}
        
        public function login()
        {
            $this->load->view('signuplogin');
        }

        public function aboutUs()
        {
            $this->load->view('aboutUs');
        }

        public function contactUs()
        {
            $this->load->view('contactUs');
        }


        public function userwelcome()
        {
//           if($this->session->userdata('is_logged_in'))//commented by sheldon beacuse of error
//            {
                $this->load->view('userlanding');
                $this->load->view('usermainlanding'); 
                redirect('main/getresponse');
                
//            }
//            else
//            {
//                redirect('main/restricted');//commented by sheldon beacuse of error
//            }
            
            
        }
        public function newrequest()
        { 
            $this->load->library('session');
            $sessionData = $this->session->userData('userSess');
            $data['userName'] = $sessionData['fname'].' '.$sessionData['lname'];
            $this->load->view('userlanding',$data);
        }
        public function restricted()
        {
            $this->load->view('restricted');
        }
        public function login_validation()
        {
            //echo $this->input->post('Email');
            //echo 'Function should be called !!';
            //$this->load->library('form_validation');
            $this->form_validation->set_rules('Email','Email','required|valid_email');
            $this->form_validation->set_rules('Password','Password','required|trim');
            if($this->form_validation->run())  
            {
                $data=array(
                    'email'=>  $this->input->post('email'),
                    'is_logged_in'=>1
                );
                $this->session->set_userdata($data);
//                
               redirect('main/userwelcome');
                }
            
        }
        public function validate_credentials()
        {
             $this->load->library('form_validation');
             $this->load->library('session');
             $this->form_validation->set_rules('Email','Email','required|trim|xss_clean');
             $this->form_validation->set_rules('Password','Password','required|trim');
             if($this->form_validation->run())
             {
                $this->load->model('model_users');
                $session_data = $this->model_users->can_log_in($this->input->post('Email'),$this->input->post('Password'));
                if(isset($session_data))
                {
                    $testSessdata=array(
                     'email'=>$session_data['email'],
                     'usrid'=>  $session_data['usrid'],
                     'category'=>$session_data['user_cat'],
                     'fname'=>$session_data['fname'],
                     'lname'=>$session_data['lname'],
                   //'cid'=>$session_data['cid'],//added for cid
                     'is_logged_in'=>1
                     );
                    $this->session->set_userdata('userSess',$testSessdata);
                    if($testSessdata['category']=='User')
                    {
                        redirect('main/userwelcome');
                    }
                    else if($testSessdata['category']=='Service Provider')
                    {
                        redirect('main/getrequest');
                    }
                    else
                    {
                        $this->load->view('signuplogin');
                    }
                }
                else
                {
                    $data = array();
                    $data['error'] = 'Invalid User Credentials !';
                    $this->load->view('signuplogin',$data);
                }
        }
       else{
                    $data = array();
                    $data['error'] = 'Invalid User Credentials !';
                    $this->load->view('signuplogin',$data);
//                    
                    }
            //else {
           //echo "inside else";
        //}
        }
       // 
        public function signout()
        {
            //echo 'Function should be called !!';
           $this->session->sess_destroy();
            redirect('main/login');
        }
        public function getresponse()
        {
            $this->load->model('getresponse');
            $this->load->library('session');
            $sessionData = $this->session->userData('userSess');
            $uid = $sessionData['usrid'];
            $data['query']=$this->getresponse->fetchUserResponse($uid);
            $data['userName'] = $sessionData['fname'].' '.$sessionData['lname'];
            $this->load->view('usermainlanding',$data);
            
        }
        public function getrequest()
        {
            $this->load->model('getrequest');
            $this->load->library('session');
            $sessionData = $this->session->userData('userSess');
            $uid =$sessionData['usrid'];
            $data['query']=$this->getrequest->fetchUserRequest($uid);
            $data['userName'] = $sessionData['fname'].' '.$sessionData['lname'];
            $this->load->view('serviceproviderlanding',$data);
        }
        //Akshay.
        //I created this function
        public function response()//akshay
    {
        $this->load->model('load_db');
        $bvalue = $this -> input ->post('q1');
        list($rid, $respid) = preg_split('/.[_]./', $bvalue);
        $date = date("Y/m/d");
        
        $data_d = array(
            'rid' => $rid,
            'respid' => $respid,
            'date' => $date
            );
$this->load_db->insert_db($data_d);
redirect('main/getresponse');
    }

    public function sp_response()//akshay
    {
       //$this->load->library('session');
   // $email = $this->input ->post('Email');
   //     $var1 = $this->set_session($email);
       
   // $this->session->set_userdata('uid', '46');
      
      $this->load->model('load_db_spres');
       $this->load->library('session');
       $data = $this->session->userdata('userSess');
        $bvalue2 = $this -> input ->post('q2');
        //list($rid, $respid) = preg_split('/.[_]./', $bvalue);
        $date = date("Y/m/d");
        $uid = $data['usrid'];
        
        $data_dd = array(
            'rid' => $bvalue2,
            'uid' => $uid,
            'log_date' => $date
            );
//echo "SUCCESS" .$date ;
//echo "<br>User Id:" .$uid;
////echo $mysession;

$this->load_db_spres->insert_resdb($data_dd);
redirect('main/getrequest');
                 
    }
    public function getAcceptedResponses()
    {
        $this->load->model('getrequest');
        $this->load->library('session');
        $sessionData = $this->session->userData('userSess');
        $uid =$sessionData['usrid'];
        $data['query']=$this->getrequest->fetchAcceptedResponses($uid);
        $data['userName'] = $sessionData['fname'].' '.$sessionData['lname'];
        $this->load->view('myAcceptedResponse',$data);
    }
    public function create()//coded by alisha
                {
                 $this->load->library('session'); //added by sheldon
                 $data = $this->session->userdata('userSess');//added by sheldon
                 $email=$data['email'];//added by sheldon
		 //$this->load->view('userwelcome');
                 $this->load->library('form_validation');
		$this->form_validation->set_rules('categorylist','Category','required');
		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('time','Time','required');

		
		if($this->form_validation->run() == FALSE)
			$this->load->view('userlanding');
		else{
		$name = $this->input->post("categorylist");
		
		$name1 = $this->input->post("date");
		
		$address = $this->input->post("time");
		$this->load->model("request_model"); 
		$this->request_model->add_new($email,$name,$name1,$address);//$email added by sheldon
		//$this->load->view("success");
//	}
	}
}
}