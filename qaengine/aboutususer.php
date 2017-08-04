<?php
require_once("headeruser.php");
?>
<div class="col-md-8 main-blog-fix">
<div class="row">
<div class="col-md-12">
<div class="blog-classic-top">
<h2 class="title-blog"><a href="aboutus.php">About us</a></h2>
</div>
</div>
<div class="clearfix"></div>
<div class="col-md-12">
<div class="blog-wrapper">
<div class="row">
 
<div class="col-md-10 col-xs-10" id="page_content">
<div class="blog-content">
 
<p style="color: #7b7b7b; text-align: center;"> <a class="qa-blog-zoom" href="../cdn.enginethemes.com/qaengine/2014/06/bird-code-min.png" target="_blank" rel="nofollow"><img class="alignnone size-medium wp-image-2088" src="../cdn.enginethemes.com/qaengine/2014/06/bird-code-min-300x300.png" alt="bird-code-min" width="300" height="300"/></a></p>
<p style="color: #7b7b7b;"><strong>QAEngine</strong> is made basically for helping peoples.In real life people see so many problems and have so many questions in his/her mind so to remove their problem and tensions we make this site to help them.In this site everyone is going to share their views on each questions so this help a lots to a questioner..Soo i hope you help us to increase our moto.. </p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class='clearfix grey-line'></div>
</div>
<div class="row q-filter-waypoints collapse" id="q_filter_waypoints">
<div class="col-md-2 col-xs-2">
<button type="button" data-toggle="modal" class="action ask-question">
<i class="fa fa-plus"></i> ASK A QUESTION </button>
</div>
<div class="col-md-8 col-sm-10 col-xs-10">
<div class="row">
<div class="col-md-2 hidden-xs hidden-sm">
<span class="q-f-title">
All Questions </span>
</div> 
<div class="col-md-5 col-sm-6 col-xs-6">
<ul class="q-f-sort">
<li>
<a class="active" href="index.html">
Latest </a>
</li>
<li>

</li>
<li>

</li>
</ul> 
</div>
<div class="col-md-5 col-sm-6 col-xs-6 categories-wrapper">
<div class="select-categories-wrapper fixed">

</div>  
</div>
</div>
</div>
</div>


<div class="col-md-2 disable-mobile right-sidebar">
<div class="widget widget-statistic">
<ul>
<li class="questions-count">
<p>Questions<p>
<span><?php
require_once("vars.php");

	$conn=mysqli_connect(host,uname,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="select QuestionID from addquestion";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		print "No question available";
	}
	else
	{   $count=0;
		while($x=mysqli_fetch_array($res))
		$count++;
	print $count;
	}
	?></span>
</li>
<li class="members-count">
<p>Members<p>
<span><?php
require_once("vars.php");

	$conn=mysqli_connect(host,uname,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="select Email from signup";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		print "No member available";
	}
	else
	{   $count=0;
		while($x=mysqli_fetch_array($res))
		$count++;
	print $count;
	}
	?></span>
</li>
</ul>
</div>
<?php  
require_once("scriptfooter.php");
?>
  

</body> 

</html>
