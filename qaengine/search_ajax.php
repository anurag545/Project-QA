
<?php
require_once("vars.php");
$getdata= $_GET["q"];
	$conn=mysqli_connect(host,uname,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
$q="select * from addqueston where Question LIKE '%$getdata%'";
$res=mysqli_query($conn,$q) or die("Error in query 1" . mysqli_error($conn));
$show_data= "";
while($result=mysqli_fetch_array($res))
{
    $show_data="<h3>$result[3]</h3>";
}
echo $show_data;
?>