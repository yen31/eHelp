<?php
class Request_model extends CI_Model{

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
 function add_new($name,$name1,$address){
 	$email="galaalisha@gmail.com";
 	$query = $this->db->query("SELECT uid FROM users where email ='".$email."'");

 		foreach ($query->result() as $row) {
 			$uid = $row->uid;
 			echo $uid;
 		}
 	$this->db->set("cid",$name);
 	$this->db->set("uid",$uid);
 	$this->db->set("date",$name1);
 	$this->db->set("time",$address);
 	
 	$query = $this->db->insert("request");
 	
 /*if($this->db->affected_rows() == true)
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

 	}}*/
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
