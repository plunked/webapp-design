<?php 
$applicantName = $_POST['applicantName'];
$applicantEmail = $_POST['applicantEmail'];
$applicantStartDate = $_POST['applicantStartDate'];
$applicantExperience = $_POST['$applicantExperience'];

if(!get_magic_quotes_gpc()){
	$applicantName = addslashes($applicantName);
	$applicantExperience = addslashes($applicantExperience);
}

@ $db = new mysqli('localhost', 'root', 'password', 'caseStudy');

if(mysqli_connect_errno()){
	echo "Error: Could not connect to database. Please check if VM is running.";
	exit;
}

$query = "INSERT into jobApplicants values
			('".$applicantEmail."', '".$applicantName."', '".$applicantStartDate."', '".$applicantEmail."')";
			
$result = $db -> query($query);

$db-> close();
?>
