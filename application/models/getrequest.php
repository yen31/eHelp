<?php

class GetRequest extends CI_Model{
    function fetchUserRequest($uid)
    {
        $query= $this->db->query("
select distinct us.fname,c.cname,us.address ,rq.date ,rq.time,rq.rid 
from request rq, category c,users us
where rq.cid = c.cid
and us.uid=rq.uid
and rq.date>= now()
and c.cid in(
select cid from user_cat
where uid ='".$uid."')
and rq.rid not in(
select rid from request_accept
)
and rq.rid not in
(
select rid from response
where uid = '".$uid."' and response_made ='TRUE'
)
and rq.cid = c.cid
and rq.rid in
(
select rid from payment
)");

       return $query->result();
    }

    function fetchAcceptedResponses($uid)
    {
        $query= $this->db->query("select us.fname as firstName,us.lname as lastName,us.address as address,cat.cname as category,req.date,req.time from response resp
        inner join request req
        on resp.rid = req.rid
        and req.date >= now()
        inner join user_cat ucat
        on resp.uid = ucat.uid
        inner join category cat
        on ucat.cid = cat.cid
        and req.cid = cat.cid
        inner join users us
        on us.uid = req.uid
        where resp.uid = '".$uid."'");

       return $query->result();
    }
}