<?php

$con = mysqli_connect('localhost','root','','NYKS_RR');
$username = $_POST['Username'];
$password = $_POST['Password'];


$result1 = mysqli_query($con,"SELECT username, password FROM LOGIN WHERE Username = '".$username."' AND  Password = '".$password."'");

if(mysqli_num_rows($result1) > 0 )
{
	#$Current_user = "INSERT INTO CURRENT_LOGIN (`Id`,`UserName`) VALUE ('0','$username');";
	#mysqli_query($con,$Current_user) or die(mysqli_error($con));
	#echo "login successfully";
	header('Location: http://localhost/project_15_08/course1.php?username='.$username);
}
else
{
	echo 'Incorrect username or password!';
}


?>

