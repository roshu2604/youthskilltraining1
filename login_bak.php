<?php




$con = mysqli_connect('localhost','root','','db_connect');

#$UserName = $_POST['UserName'];
#$Password= $_POST['Password'];

$hash = "SELECT password FROM LOGIN WHERE Username = anupa2687";

$sql = mysqli_query($con,$hash);

$row = mysql_fetch_assoc($sql);
if($row)
{
	$username = $row['Username'];
	$password = $row['Password'];
	echo "$hash";

	$valid = password_verify( $password, $hash);


	if($valid)
		echo "password matches";
	else
		echo "incorrect password";

}




?>

