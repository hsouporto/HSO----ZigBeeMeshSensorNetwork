<?php

//settings
$environment = "local";

$initialpage = "index.php";
$loggedpage = "dashboard.php";
$notlogged = "index.php?error_login=2";
$test_session;

if ($environment=="local") {
	$dbhost = "localhost";
	$dbname = "store";
	$dbuser = "root";
	$dbpassword = "voyage";
}
else{
	echo 'Falhou a ligação à base de dados.';
}
?>
