<?php
Class Load_db_spres extends CI_model{
function insert_resdb($data_dd){
$this->db->set('rid', $data_dd['rid']);
$this->db->set('uid', $data_dd['uid']);
$this->db->set('log_date', $data_dd['log_date']);
$this->db->insert('response');
	}
	/*ALTER TABLE `eHelp`.`response` 
DROP FOREIGN KEY `response_ibfk_2`;
ALTER TABLE `eHelp`.`response` 
DROP INDEX `uid` ;*/

}
