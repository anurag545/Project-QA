
<?php
session_start();
require_once("vars.php");
	$catid=$_GET["acid"];
		$conn=mysqli_connect(host,uname,pass,dbname) or die("Error in connection " . mysqli_connect_error());
	
	$q="delete from answer where answerid='$catid'";
	mysqli_query($conn,$q) or die("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		header("location:updateanswer.php");
	}
	else
	{
		$msg="Problem while deleting, please try again";
	}
?>