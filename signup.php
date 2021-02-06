<?php


$con = mysqli_connect('localhost','root','','NYKS_RR');

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email_id = $_POST['Email_id'];
$UserName = $_POST['UserName'];
$MobileNumber = $_POST['MobileNumber'];
$Password= $_POST['Password'];
$Retype_password= $_POST['Retype_password'];
$Gender = $_POST['Gender'];
$Country = $_POST['Country'];


$checkMo = "SELECT * FROM `SIGN_UP_FORM` WHERE `Mobile NO.`='$MobileNumber';";
$checkEmail = "SELECT * FROM `SIGN_UP_FORM` WHERE `Email ID`='$Email_id';";
$checkUsername = "SELECT * FROM `SIGN_UP_FORM` WHERE `UserName`='$UserName';";
#$checkExists = "SELECT * FROM `SIGN_UP_FORM` WHERE `Mobile NO.`='$MobileNumber' || `Email ID`='$Email_id' || `Mobile NO.`='$UserName';"


$Norow = mysqli_fetch_assoc(mysqli_query($con, $checkMo));
$Emailrow = mysqli_fetch_assoc(mysqli_query($con, $checkEmail));
$Usernamerow = mysqli_fetch_assoc(mysqli_query($con, $checkUsername));

if(!$Norow && !$Emailrow && !$Usernamerow)
{
	$signup_sql = "INSERT INTO `SIGN_UP_FORM` (`Id`,`First Name`,`Last Name`,`Email ID`,`UserName`,`Mobile NO.`,`Password`,`Retype Password`,`Gender`,`Country`) VALUES('0','$FirstName','$LastName','$Email_id','$UserName','$MobileNumber','$Password','$Retype_password','$Gender','$Country');";

	$login_sql = "INSERT INTO `LOGIN` (`Id`,`UserName`,`Password`) VALUES('0','$UserName','$Password');";



	$signup_r = mysqli_query($con,$signup_sql) or die(mysqli_error($con));
	$login_r = mysqli_query($con,$login_sql) or die(mysqli_error($con));
	if($signup_r && $login_r)
	{
		echo "Registration Successfully done!";
	}
	else
		echo "Registration got Error";
}
elseif($Norow)
{
	echo "Mobile Number Already Exists";
	#header('Location: http://localhost/project_15_08/signup1.html');
}
elseif($Emailrow)
	echo "Email ID Already Exists";
else
	echo "UserName Already Exists";

?>

