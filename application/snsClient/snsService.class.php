<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of snsService
 *
 * @author Ryan
 */
require_once APPPATH.'vendor/autoload.php';
//require_once APPPATH.'lib/amazonsns.class.php';
use Aws\Sns\SnsClient;
use Aws\Sns\Exception\SnsException;
class SmsService {
    //put your code here

    public function sendSmstoUser($mobileNumber,$message)
    {
        $AmazonSNS = new AmazonSNS('AKIAJTFOY5XZKNFOIMAQ', 'STP7Araytk+/CFMZeFioyKIxlTVvnakSQMf1oMFI');
        $AmazonSNS->setRegion('US-EAST-1');
        $topicArn = $AmazonSNS->createTopic('eHelpTestTopic');
        $result = $AmazonSNS->setTopicAttributes($topicArn, 'DisplayName', 'eHelp');
        try{
            $AmazonSNS->subscribe($topicArn, 'sms',$mobileNumber);
            $AmazonSNS->publish($topicArn,$message);
           }catch(Exception $e) {
              echo "Exception caught with message: " . $e->getMessage() . "\n";
            }

    }
//      public function sendSms($mobileNumber,$user)
//      {
//        $client = SnsClient::factory(array(
//            'key'    => 'AKIAJTFOY5XZKNFOIMAQ',
//            'secret' => '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',
//            'region' =>  'us-east-1'
//            ));
//        $topicArn = $client->createTopic(array('Name'=>'myTopic'));
//        try
//        {
//            $topicAttributes = $client->setTopicAttributes(array('TopicArn' => 'myTopic','AttributeName' => 'DisplayName','AttributeValue' => 'eHelpSMS'));
//        }catch(Exception $e){
//              echo "Exception caught with message: " . $e->getMessage() . "\n";
//        }
//        if(isset ($topicAttributes))
//            echo 'Topic Attributes are SET !!';
//      }
}
?>
