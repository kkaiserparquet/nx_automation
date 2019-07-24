<br><br><form action="login_action.php" method="post" onSubmit="return fn_check_value()">
<table border="0" style="margin: 0px auto;">
	<tr><td>Email ID</td><td><input type="text" name="email" id="txt_email" placeholder="Email ID"></td></tr>
	<tr><td>Password</td><td><input type="password" name="password" id="txt_password" placeholder="Password"></td></tr>
	<tr><td></td><td><input type="submit" value="Submit"></td></tr>
</table>


</form>


<script>
	function fn_check_value(o)
	{
		if(document.getElementById('txt_email').value==null || document.getElementById('txt_email').value=="")
		{
			alert('Email ID empty.');
			return false;
		}
		if(document.getElementById('txt_password').value==null || document.getElementById('txt_password').value=="")
		{
			alert('Password empty.');
			return false;
		}
		return true;
	}
</script>