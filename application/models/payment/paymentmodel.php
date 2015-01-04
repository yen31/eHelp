<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paymentmodel
 *
 * @author Ryan
 */
class PaymentModel extends CI_Model {
    //put your code here
    public function completePayment($data)
    {
        // Remove BANK column and store Name on Card instead
        // Create an amount column
        $this->db->set('uid', $data['uid']);
        $this->db->set('rid', $data['rid']);
        $this->db->set('firstname', $data['firstName']);
        $this->db->set('lastname', $data['lastName']);
        $this->db->set('cardname', $data['cardname']);
        $this->db->set('cardtype', $data['cardType']);
        $this->db->set('cardnum', $data['creditCardNum']);
        $this->db->set('expmonth', $data['expirationMonth']);
        $this->db->set('expyear', $data['expirationYear']);
        $this->db->set('cvv', $data['cardCvc']);
        $this->db->set('invoice',$data['invoice']);
        $this->db->set('amount',$data['amount']);
        $this->db->insert('payment');
        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    public function cancelPayment($requestId)
    {
         $this->db->where('rid', $requestId);
        $this->db->delete('payment');
        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
}
?>
