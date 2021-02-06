<?php


$con = mysqli_connect('localhost','root','','NYKS_RR');

if(isset($_POST['course1'])) 
{
	$Name = "Mushroom Cultivation, Bee Keeping, Medicinal Plants";
	$Link = "https://www.futurelearn.com/subjects/nature-and-environment-courses/agriculture";
}
else if(isset($_POST['course2'])) 
{
	$Name = "Small Milch/Dairy Animal (Buffalo, Cow) Rearing Units";
	$Link = "https://www.classcentral.com/course/dairy-4055";
}
else if(isset($_POST['course3'])) 
{
            $Name = "Goat/ Sheep Rearing for Meat/ Woo";
	    $Link = "https://study.com/articles/Online_Animal_Husbandry_Courses_and_Classes_Overview.html";
}
else if(isset($_POST['course4'])) 
{
            $Name = "Fisheries Fish Rearing/ Seed Production in Small Ponds";
	    $Link = "https://www.fishsmarter.com.au/products/";
}
else if(isset($_POST['course5'])) 
{
            $Name = "Weaving, Processing";
	    $Link = "https://www.udemy.com/course/indian-handloom-masterclass/";
}
else if(isset($_POST['course6'])) 
{
            $Name = "Production of Handicraft Items, Processing Activities (Polishing)";
	    $Link = "https://www.udemy.com/course/indian-handloom-masterclass/";
}
else if(isset($_POST['course7'])) 
{
            $Name = "Cocoon Rearing,Reeling of Yam";
	    $Link = "https://www.classcentral.com/course/swayam-sericulture-technology-17784";
}
else if(isset($_POST['course8'])) 
{
            $Name = "Making Jam, Jelly, Murabba";
	    $Link = "https://www.futurelearn.com/courses/how-is-my-food-made";
}
else if(isset($_POST['course9'])) 
{
            $Name = "Computer and mobile repairing";
	    $Link = "https://urbanareas.net/info/training/computer-repair/";
}
else if(isset($_POST['course10'])) 
{
            $Name = "Raising Nurseries";
	    $Link = "https://www.hortcourses.com/courses/nursery-growers-course-607.aspx";
}
else if(isset($_POST['new_course']))
{
	$New_Course = $_POST['new_course_name'];
	$Link = "https://localhost/project_15_08/course1.php";
}
$username = $_POST['username'];

echo "value = $username";


$rs = mysqli_fetch_array(mysqli_query($con,"SELECT `First Name` FROM SIGN_UP_FORM WHERE UserName='$username'"),MYSQLI_BOTH);
$firstname = $rs['First Name'];


$rs = mysqli_fetch_array(mysqli_query($con,"SELECT `Last Name` FROM SIGN_UP_FORM WHERE UserName='$username'"),MYSQLI_BOTH);
$lastname = $rs['Last Name'];

$rs = mysqli_fetch_array(mysqli_query($con,"SELECT `Email ID` FROM SIGN_UP_FORM WHERE UserName='$username'"),MYSQLI_BOTH);
$emailid = $rs['Email ID'];


//	$contact_sql = "INSERT INTO `contactus` (`Id`,`Name`,`,`Email ID`,`Subject`,`Message`) VALUES('0','$Name','$Phone','$Email_id','$Subject','$Message');";
	
	if(isset($_POST['new_course']))
		$contact_sql = "INSERT INTO `COURSE` (`Id`,`First Name`,`Last Name`,`Email ID`,`Course Name`,`New Course`) VALUES('0','$firstname','$lastname','$emailid','$Name','$New_Course');";
	else
		$contact_sql = "INSERT INTO `COURSE` (`Id`,`First Name`,`Last Name`,`Email ID`,`Course Name`,`New Course`) VALUES('0','$firstname','$lastname','$emailid','$Name','');";


	$contact_r = mysqli_query($con,$contact_sql);
	if($contact_r)
	{
		header("Location: ".$Link);
	}


?>

