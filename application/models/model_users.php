<?php

class model_users extends CI_Model
{
    public function can_log_in($email,$password) 
    {
        $this->db->where('email',$email);///$this>input->post('Email'));
        $this->db->where('pass',$password);///($thithis-s->input->post('Password')));
        $this->db->select('uid,user_type,fname,lname');
        $query=$this->db->get('users');
        if($query->num_rows()>0)
        {
            foreach ($query->result() as $row)
            {
                $data = array('usrid'=>$row->uid,'user_cat'=>$row->user_type,'email'=>$email,'fname'=>$row->fname,'lname'=>$row->lname);///email was added to test
            }
            return $data;
        }
        else 
            {return null;}   
    }
      
}