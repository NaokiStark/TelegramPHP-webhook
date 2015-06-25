<?php

//JSON Format:
//{"update_id":000000000,"message":{"message_id":000,"from":{"id":0000000,"first_name":"User","last_name":"Name","username":"UserName"},"chat":{"id":00000,"first_name":"User","last_name":"Name","username":"UserName"},"date":1454514739,"text":"Hallo world!"}}

//Get Telegram Stream
$input = file_get_contents("php://input");

//Parse JSON
$json  = json_decode($input,true);

//For example, send pong response

if(strrpos($text,'/ping')!==false){
  //Send pong
  require_once 'Requests.class.php';
  $req = new Requests();
  $parms=array(
    'chat_id'=>$json['message']['chat']['id'],
    'text'=>'pong!'
    );
  //Send request with api
  $req->postRequest('https://api.telegram.org/bot123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11/sendMessage',$parms);
}

?>
