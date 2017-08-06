<?php


session_start();
$db=mysqli_connect("localhost","root","","register");
if (isset($_POST['submit'])) {
   
	$Name=mysql_real_escape_string($_POST['Name']);
	$RollNo=mysql_real_escape_string($_POST['PhoneNo']);
	$email=mysql_real_escape_string($_POST['email']);
	$department=mysql_real_escape_string($_POST['department']);
	$pass=mysql_real_escape_string($_POST['pass']);
	$confirmpass=mysql_real_escape_string($_POST['confirmpass']);
    $year=mysql_real_escape_string($_POST['department']);
    $resume=mysql_real_escape_string($_POST['resume']);
   
	if ($pass == $confirmpass) 
	{
		$pass=md5($pass);
		$sql="INSERT INTO userss(Name,PhoneNo,email,department,pass,year,resume) VALUES('$Name','$RollNo','$email','$department','$pass','$year','$resume')";
		mysqli_query($db, $sql);
		echo "Sign up success";
		
		
	}
	else
	{
		echo "passwords dont match";
       $_SESSION['message']="The two passwords do not match";

	}
}
?>







