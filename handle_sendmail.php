<?php

require_once 'google/appengine/api/mail/Message.php';
use google\appengine\api\mail\Message;

if(count($_POST)>0){
  $message_body = $_POST["mailContent"];
  echo "Receive : ".$message_body."\n";
}else{
  $message_body = "You send a email with empty content";	
  echo "Empty Content";
}

//Mutliple Users
//$receivers = array('cougar0828' => "cougar0828@gmail.com",'catapult' => "catapult@mitac.com.tw", 'p413ghz' => "p413ghz@yahoo.com.tw");

$mail_options = [

   'sender' => 'catapult@mitac.com.tw',
   'to' => 'cougar0828@gmail.com',
   'subject' => 'Test of GAE Mail Service API',
   // 'htmlBody' => $message_body 
   'textBody' => $message_body
];

try{
   $message = new Message($mail_options);	 
   $message -> send(); 
   echo "Send succeful";    
 }catch(InvalidArgumentException $e){
   echo "Exception : ".$e; 
 }

?>




