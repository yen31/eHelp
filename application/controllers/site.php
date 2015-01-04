<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
public function index()
{

 $this->views_view();
}


public function views_view()
{
    $data['var1']="2";
    $data['var2']="3";
    $this->load->model("math");
    $data['addTotal']=$this->math->add($data['$var1'],$data['$var2']);
    $data['subTotal']=$this->math->sub($data['$var1'],$data['$var2']);
    $data['mulTotal']=$this->math->mul($data['$var1'],$data['$var2']);
    $data['divTotal']=$this->math->divi($data['$var1'],$data['$var2']);
    
    $this->load->view("view");
}
}
