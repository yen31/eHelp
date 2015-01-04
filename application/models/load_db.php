<?php
Class Load_db extends CI_model{
	function insert_db($data_d){
$this->db->set('rid', $data_d['rid']);
$this->db->set('respid', $data_d['respid']);
$this->db->set('logdate', $data_d['date']);
$this->db->insert('request_accept');
	}
}
?>