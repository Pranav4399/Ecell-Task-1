<?php
$db=mysqli_connect("localhost","root","","register");
if (isset($_POST['submit'])) {
   
	$Name=mysql_real_escape_string($_POST['Name']);
	$RollNo=mysql_real_escape_string($_POST['PhoneNo']);
	$email=mysql_real_escape_string($_POST['email']);
	$department=mysql_real_escape_string($_POST['department']);
	$year=mysql_real_escape_string($_POST['year']);
    $resume=mysql_real_escape_string($_POST['resume']);
   
		$sql="INSERT INTO userss(Name,PhoneNo,email,department,year,resume) VALUES('$Name','$RollNo','$email','$department','$year','$resume')";
		mysqli_query($db, $sql);
		echo "Sign up success";
		
		
	
	   

}
?>







