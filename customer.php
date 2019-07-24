<style>
	input{width:200px;}
</style>
<br>
<h1>Customer</h1>
 <form action="./customer_action.php" method="post">
 	<table border="0">
 		<tr><td>Customer ID:</td><td><input type="text" name="customerid" value=""></td></tr>
 		<tr><td>Customer Name:</td><td><input type="text" name="customername" value=""></td></tr>
 		<tr><td>Customer Date of Birth:</td><td><input type="date" name="cdob" value=""></td></tr>
 		<tr><td>Customer E-mail:</td><td><input type="text" name="cemail" value=""></td></tr>
 		<tr><td>Cutomer Telephone:</td><td><input type="text" name="ctel" value=""></td></tr>
 		<tr><td>Customer Date of Joining:</td><td><input type="datetime-local" name="cdoj" value=""></td></tr>
 		<tr><td>Customer Last Access:</td><td><input type="date" name="lastaccess" value=""></td></tr>
 		<tr><td></td><td></td></tr>
 		<tr><td></td><td><button type="submit">Submit</button></td></tr>
 		
 	</table>
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/customer_action.php".</p>
