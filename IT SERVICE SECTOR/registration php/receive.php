<?php

$firstname=$_POST['first'];
$lastname=$_POST['last'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];

?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	
	<title></title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />	
	
</head>

<body>


<div class="container">

<table class="table table-primary mt-3">


<tr>

	<th>First Name</th>
	<td><input type="" value="<?php echo $firstname; ?>" /></td>

</tr>

<tr>

	<th>Last Name</th>
	<td><input type="" value="<?php echo $lastname; ?>" /></td>

</tr>

<tr>

	<th>Email</th>
	<td><input type="" value="<?php echo $email; ?>" /></td>

</tr>

<tr>

	<th>DATE OF BIRTH</th>
	<td><input type="" value="<?php echo implode('-',$birthday); ?>" /></td>

</tr>


<tr>

	<th>Gender</th>
	<td><input type="" value="<?php echo implode(',',$gender); ?>" /></td>

</tr>


<tr>

	<th>Mobile Number</th>
	<td><input type="" value="<?php echo $mobile; ?>" /></td>

</tr>


</table>




</div>


</body>

</html>