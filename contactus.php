<?php


$con = mysqli_connect('localhost','root','','NYKS_RR');

$Name = $_POST['Name'];
$Phone = $_POST['Phone'];
$Email_id = $_POST['Email_id'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];

$checkMo = "SELECT * FROM `SIGN_UP_FORM` WHERE `Mobile NO.`='$Phone';";
$checkEmail = "SELECT * FROM `SIGN_UP_FORM` WHERE `Email ID`='$Email_id';";

$Norow = mysqli_fetch_assoc(mysqli_query($con, $checkMo));
$Emailrow = mysqli_fetch_assoc(mysqli_query($con, $checkEmail));



if($Norow && $Emailrow )
{
	$contact_sql = "INSERT INTO `contactus` (`Id`,`Name`,`Phone`,`Email ID`,`Subject`,`Message`) VALUES('0','$Name','$Phone','$Email_id','$Subject','$Message');";
	//$contact_sql = "INSERT INTO `LOGIN` (`Id`,`UserName`,`Password`) VALUES('0','igas','gfas');";


	$contact_r = mysqli_query($con,$contact_sql);
	if($contact_r)
	{
		echo "Message Sent SuccessFully";
	}
	else
		echo "Can't send Message";
}
elseif(!$Norow)
{
	echo "mobile number is not Registered";
	#header('Location: http://localhost/project_15_08/signup1.html');
}
else
	echo "Email ID is not Registered";

?>

