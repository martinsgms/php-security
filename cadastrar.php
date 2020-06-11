<?php

$email = $_POST['email'];

/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
	"secret"=>"6LffkIwUAAAAAB-SwEpiAIZXAB7WoFXLbxaKsl6J",
	"response"=>$_POST["g-recaptcha-response"],
	"remoteip"=>$_SERVER["REMOTE_ADDR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

echo "<pre>";
if($recaptcha["success"] == true){
	echo "OK: " . $_POST['email'];
}else{
	header("location: recaptcha.php");
}
echo "<pre>";
