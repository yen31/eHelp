<?php
class Signup_model extends CI_Model{

function get_all(){
$query = $this->db->query("SELECT * FROM users");
if($query->num_rows()>0){

	foreach ($query->result() as $row) {
		$data[]=$row;
	}
	return $data;
}	

}	
/*function return_query()
{
    return $this->_compile_select();
}*/
 function add_new2($name,$name1,$address,$city,$state,$email,$password,$contact,$radio){
 	$this->db->set("fname",$name);
 	$this->db->set("lname",$name1);
 	$this->db->set("address",$address);
 	$this->db->set("city",$city);
 	$this->db->set("state",$state);
 	$this->db->set("email",$email);
 	$this->db->set("pass",$password);
 	//$this->db->set("fname",$name);
 	$this->db->set("phone",$contact);
 	$this->db->set("user_type",$radio);
 	$query = $this->db->insert("users");
 	return;
 	}

 function add_new($name,$name1,$address,$city,$state,$email,$password,$contact,$radio,$data){
 	$this->db->set("fname",$name);
 	$this->db->set("lname",$name1);
 	$this->db->set("address",$address);
 	$this->db->set("city",$city);
 	$this->db->set("state",$state);
 	$this->db->set("email",$email);
 	$this->db->set("pass",$password);
 	//$this->db->set("fname",$name);
 	$this->db->set("phone",$contact);
 	$this->db->set("user_type",$radio);
 	$query = $this->db->insert("users");
 	
 if($this->db->affected_rows() == true)
 	{

 		$query = $this->db->query("SELECT uid FROM users where email ='".$email."'");

 		foreach ($query->result() as $row) {
 			$uid = $row->uid;
 		}
 		foreach($data as $sel){
 		
 		$this->db->set("uid",$uid);
 		$this->db->set("cid",$sel);
 		$this->db->set("rating",4);
        $query = $this->db->insert("user_cat");

        //echo $uid;

 	}}
 	/*	foreach($data as $sel){
 		
 		$this->db->set("uid",$uid);
 		$this->db->set("cid",$sel);
 		$this->db->set("rating",4);
        $query = $this->db->insert("user_cat");*/
		//$string =   $this->db->return_query();
		//echo $string;
 		/*$this->db->select('uid');
 		$this->db->from('users');
 		$this->db>where('fname',$name);
}*/

 //	}
 	return;
 }

}
