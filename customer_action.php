<?php
	error_reporting(0);

	$customerid=$_POST['customerid'];
	$customername=$_POST['customername'];
	$caddr="";//$_POST['caddr'];
	$cdob=$_POST['cdob'];
	$cemail=$_POST['cemail'];
	$ctel=$_POST['ctel'];
	$cdoj=$_POST['cdoj'];
	$lastaccess=$_POST['lastaccess'];
	if($cdob=="") $cdob="NULL";
	if($cdoj=="") $cdoj="NULL";
	if($lastaccess=="") $lastaccess="NULL";
	
	require('db.php');

	$sql="insert into customer(CUST_ID,CUST_NAME,CUST_DOB,CUST_ADDR,CUST_EMAIL,CUST_TEL,CUST_JOINDATE,CUST_LASTACCESS) values('$customerid','$customername','$cdob','$caddr','$cemail','$ctel','$cdoj','$lastaccess')";
	if(mysqli_query($db,$sql))
	{
		echo "<script>alert('Record Inserted !');setTimeout(function(){location.href='./?page=customer';},50);</script>";
	}
	else echo "<script>alert('Record insertion failed. ".str_replace("'","`",mysqli_error($db))."');</script>";

	mysqli_close($db);
?>