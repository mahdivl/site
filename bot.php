<?php
/*
$massage=file_get_contents("php://input");
$result=json_decode($massage,true);
$token="";
if($result["massage"]["text"]==/date){
  $text=date("Y-m-d");
}else if($result["massage"]["text"]==/time){
  $text=date("H:i:s");
}else {
  $text="none";
}
$url="https://api.telegram.org/bot".$token."/sendMessage?chat_id=`.$result["message"]["chat"]["id"]."&text=".$text;
file_put_contents($url);
//file_put_contents("test.txt",var_export(json_decode($massage,true)));
*/
?>

$URL="https://mahdivl.github.io/site/bot.php";
$token="";
$url="https://api.telegram.org/bot".$token."/setwebhook?url=".$URL;
$result=file_get_contents($url);
var_dump(json_decode($result));
