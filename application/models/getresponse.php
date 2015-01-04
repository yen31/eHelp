<?php

class GetResponse extends CI_Model{
    function fetchUserResponse($userId)
    {
       $query= $this->db->query("select rq.date ,us.fname ,ca.cname,rq.rid,re.respid from users us,request rq ,response re , category ca
                  where rq.uid ='".$userId."' and re.rid=rq.rid and re.uid=us.uid and rq.cid=ca.cid
                  and rq.rid not in (select rid from request_accept)");
         
       return $query->result();
    }
}

