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
 function add_new($name,$date,$time,$email){
 	$query = $this->db->query("SELECT uid FROM users where email ='".$email."'");

 		foreach ($query->result() as $row) {
 			$uid = $row->uid;
 			//echo $uid;
 		}
 	$this->db->set("cid",$name);
 	$this->db->set("uid",$uid);
 	$this->db->set("date",$date);
 	$this->db->set("time",$time);
        $query = $this->db->insert("request");
        $respId = 0;
        if($this->db->affected_rows() > 0)
        {
            $queryReturnRespId = $this->db->query("SELECT rid FROM request where uid='".$uid."' and cid='".$name."' and date='".$date."' and time='".$time."'");

 		foreach ($queryReturnRespId->result() as $row) {
 			$respId = $row->rid;
 			//echo $uid;
 		}
        }
 	return $respId;
 }
    public function getUserName($uid)
    {
        $query = $this->db->query("SELECT fname,lname FROM users where uid='".$uid."'");
        $data = array();
        foreach ($query->result() as $row)
        {
            $data['fname']= $row->fname;
            $data['lname']= $row->lname;
        }
        return $data;
    }
    public function getPaymentForCategory($cid)
    {
        $query = $this->db->query("SELECT cost,cname FROM category where cid='".$cid."'");
        $data = array();
        foreach ($query->result() as $row)
        {
            $data['cost']= $row->cost;
            $data['cname'] = $row->cname;
        }
        return $data;
    }
    public function getUserDetailsByCategory($cid)
    {
        $query = $this->db->query("select us.fname as fname,us.lname as lname,us.phone as phone from users us,user_cat us_cat where us.uid = us_cat.uid and us_cat.cid = '".$cid."'");
        $data = array();
        $i=0;
        if($query->num_rows()>0)
        {
            $i =0;
            foreach ($query->result() as $row) {
            $data[$i]['fname'] = $row->fname;
            $data[$i]['lname'] = $row->lname;
            $data[$i]['phone'] =$row->phone;
            $i++;
            }
        return $data;
        }
        return $data;
    }
}
