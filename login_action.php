<?php
	error_reporting(0);
	session_start();

	$_SESSION['xs_login']=0;
	$_SESSION['xs_user_id']=0;
	$_SESSION['xs_user_name']="";
	$_SESSION['xs_user_role']="";
	
	//print_r($_POST);
	$email=$_POST['email'];
	$password=md5($_POST['password']);

	require('db.php');

	$sql="select id,username,role from user where email='".mysqli_escape_string($db,$email)."' and password='".mysqli_escape_string($db,$password)."'";
	$result=mysqli_query($db,$sql);

	if($row=mysqli_fetch_array($result))
	{
		$_SESSION['xs_login']=1;
		$_SESSION['xs_user_id']=$row['id'];
		$_SESSION['xs_user_name']=$row['username'];
		$_SESSION['xs_user_role']=$row['role'];
		
		echo "<script>setTimeout(function(){history.go(-1);},50);</script>";
	}
	else echo "<script>alert('Email ID, password combination is not correct.');setTimeout(function(){history.go(-1);},50);</script>";

	mysqli_close($db);
?>