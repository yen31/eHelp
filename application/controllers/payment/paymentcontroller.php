<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PaymentController
 *
 * @author Ryan
 */
class PaymentController extends CI_Controller {
    //put your code here
    public  function index()
    {
        $this->load->view('payment/paymentForm');
        $this->load->helper('string');
    }

    public function completePayment()
    {
        //Remove bank column and store Name on Card instead
        $sessData = $this->session->userdata('userSess');
        $uid = $sessData['usrid'];
        
        $this->load->model('payment/paymentmodel');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('firstName', 'First Name', 'required|alpha');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required|alpha');
        $this->form_validation->set_rules('creditCardNum', 'Credit Card Number', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('cardCvc', 'Credit Card CVC', 'required|is_natural_no_zero|min_length[3]|max_length[4]');
        if ($this->form_validation->run() == FALSE)
	{
            $this->load->view('payment/paymentForm');
        }
        else
        {
            $invoice = random_string('numeric',8);
            $name = $this->input->post('nameOnCard');
            $paymentData = array(
            'uid'=>$uid,
            'rid'=>$this->input->post('requestId'),
            'firstName'=>$this->input->post('firstName'),
            'lastName'=>$this->input->post('lastName'),
            'cardname'=>$this->input->post('card'),
            'cardType'=>$this->input->post('cardType'),
            'creditCardNum'=>$this->input->post('creditCardNum'),
            'expirationMonth'=>$this->input->post('expirationMonth'),
            'expirationYear'=>$this->input->post('expirationYear'),
            'cardCvc'=>$this->input->post('cardCvc'),
            'amount'=>$this->input->post('totalAmount'),
            'invoice'=>$invoice
            );
            //echo 'Amount : '.$this->input->post('totalAmount');
            $requestData = array(
            'requestId'=>$this->input->post('requestId')
            );
             $this->session->set_userdata('requestId',$requestData);
             if($this->paymentmodel->completePayment($paymentData));
             {
                $config['business']             = 'admin@eHelp.com'; //Your PayPal account
                $config['cpp_header_image']     = ''; //Image header url [750 pixels wide by 90 pixels high]
                $config['return']               = base_url().'index.php/payment/paymentcontroller/notifyPayment';
                $config['cancel_return']        = base_url().'index.php/payment/paymentcontroller/cancelPayment';
                //$config['notify_url']           = 'process_payment.php';
                $config['production']           = FALSE; //Its false by default and will use sandbox
                //$config['discount_rate_cart']   = 20; //This means 20% discount
                $config["invoice"]              = $invoice; //The invoice id
                $this->load->library('paypal',$config);
                $this->paypal->add($this->input->post('service'),$this->input->post('totalAmount')); //First item
                //$this->paypal->add('Pants',40);       //Second item
                //$this->paypal->add('Blowse',10,10,'B-199-26'); //Third item with code
                $this->paypal->pay();
           }
        }
      }
//    function alpha_dash_space($str)
//    {
//        echo'Called!';
//        return ( ! preg_match("/^([-a-z_ ])+$/i", $str)) ? FALSE : TRUE;
//    }

    public function notifyPayment()
    {
        $sessData = $this->session->userdata('userSess');
        $data['userName'] = $sessData['fname'].' '.$sessData['lname'];
        $this->load->view('userlanding',$data);
//        $notifiedPayment = print_r($this->input->post,TRUE);
//        echo "<pre>".$notifiedPayment."</pre>";
    }

    public function cancelPayment()
    {
        $sessData = $this->session->userdata('userSess');
        $data['userName'] = $sessData['fname'].' '.$sessData['lname'];

        $sessReqData = $this->session->userdata('requestId');
        $requestId = $sessReqData['requestId'];
        
        $this->load->model('payment/paymentmodel');
        if($this->paymentmodel->cancelPayment($requestId))
        {
            $this->load->view('userlanding',$data);
            $this->session->unset_userdata($sessReqData);
        }
    }
}
?>
