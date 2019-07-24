<?php
	//error_reporting(0);
	ini_set('display_errors','1');

	if(isset($_GET['page']))
		$page=$_GET['page'];
	else $page='';

	session_start();
	if(!isset($_SESSION['xs_login']))
		$login=0;
	else $login=$_SESSION['xs_login'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>WELCOME TO THE NX CLUSTER BUILD SYSTEM</title>
</head>
<body>
<?php if($login==0) require('login.php');
else{
	require('menu.php');
	if($page!="") require($page.'.php');
}
?>
	
</body>
</html>
