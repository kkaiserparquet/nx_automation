<?php
	error_reporting(0);

	$field=$values="";
	foreach($_POST as $key=>$value)
	{
		$field .= $key.",";
		$values .= "'".$value."',";
	}

	$field=trim($field,",");
	$values=trim($values,",");
	
	require('db.php');

	$sql="insert into buildbook($field) values($values)";

	if(mysqli_query($db,$sql))
	{
		echo "<script>alert('Record Inserted !');setTimeout(function(){location.href='./?page=buildbook';},50);</script>";
	}
	else echo "<script>alert('Record insertion failed. ".str_replace("'","`",mysqli_error($db))."');</script>";

	mysqli_close($db);
?>