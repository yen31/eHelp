<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index()
	{
		$this->login();
	}
        
        public function login()
        {
            $this->load->view('userlogin');
            
        }
        public function userwelcome()
        {
            if($this->session->userdata('is_logged_in'))
            {
                //$this->load->view('userlanding');
                //$this->load->view('usermainlanding'); 
                redirect('main/getresponse');
                
            }
            else
            {
                redirect('main/restricted');
            }
            
            
        }
        public function newrequest()
        { 
            if($this->session->userdata('is_logged_in'))
            {
            $this->load->view('userlanding');
            }else
            {
                redirect('main/restricted');
            }
            
        }
        public function restricted()
        {
            $this->load->view('restricted');
            
        }
//        public function login_validation()
//        {
//            //echo $this->input->post('Email');
//            //echo 'Function should be called !!';
//            $this->load->library('form_validation');
//            $this->load->library('session');
//            $this->form_validation->set_rules('Email','Email','required|trim|xss_clean|callback_validate_credentials');
//           $this->form_validation->set_rules('Password','Password','required|trim');
//            if($this->form_validation->run())  
//                {
//                $data=array(
//                    'email'=>  $this->input->post('email'),
//                    'is_logged_in'=>1
//                );
//                $this->session->set_userdata($data);
//                
//               redirect('main/userwelcome');
//                }
//            else{
//               $this->load->view('userlogin');
//                }
//        }
        public function validate_credentials()
        {
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->model('model_users');
            
            $session_data = $this->model_users->can_log_in($this->input->post('Email'),$this->input->post('Password'));
            if(isset($session_data))
            {
                $data=array(
                    'userid'=>  $session_data['usrid'],
                    'category'=>$session_data['user_cat'],
                    //'cid'=>$session_data['cid'],//added for cid
                    'is_logged_in'=>1
                );
                
              $this->session->set_userdata($data);
              
              //echo 'User Cat :'.$data['category'];
              
              if($data['category']=='User')
                {
                  //echo $data['userid'];
              redirect('main/userwelcome',$data);
               }
                else if($data['category']=='Service Provider')
                {
                    //echo $data['userid'];
                    //$this->load->view('Serviceproviderlanding');
                    redirect('main/getrequest',$data);
                }
            else{
                echo 'Invalid Credentials';
               $this->load->view('userlogin');
                }
            }
        }
        public function signout()
        {
            //echo 'Function should be called !!';
           $this->session->sess_destroy();
            redirect('main/login');
        }
        public function getresponse()
        {
            $this->load->model('getresponse');
            $data['query']=$this->getresponse->getresponse();
            //$this->load->view('view',$data); for testing purpose
            $this->load->view('usermainlanding',$data);
            
        }
        public function getrequest()
        {
          
            $this->load->model('getrequest');
            $data['query']=$this->getrequest->getrequest();
            //$this->load->view('view',$data); //for testing purpose
            $this->load->view('serviceproviderlanding',$data);
            
        }
        //Akshay.
        //I created this function
        public function response()
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
echo "SUCCESS" .$date ;
echo "<br>" .$respid;
echo "<br>" .$rid;

$this->load_db->insert_db($data_d);
    }
    
    	public function create()//coded by alisha
                {
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
		$this->request_model->add_new($name,$name1,$address);
		//$this->load->view("success");
//	}
	}
}
}