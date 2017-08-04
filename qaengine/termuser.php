<?php
require_once("headeruser.php");
?>
 <div class="col-md-8 main-blog-fix">
<div class="row">
<div class="col-md-12">
<div class="blog-classic-top">
<h2>Page</h2>
</div>
</div>
<div class="clearfix"></div>
<div class="col-md-12">
<div class="blog-wrapper">
<div class="row">
<div class="col-md-10 col-xs-10" id="page_content">
<div class="blog-content">
<h2 class="title-blog"><a href="term.php">term</a></h2>
<p style="color: #000000;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at lacus vel erat malesuada pharetra. Nulla at augue magna. Nullam congue ut arcu sit amet laoreet. Cras vel leo est. Curabitur aliquam eget massa quis vulputate. Praesent consequat volutpat malesuada. Ut interdum ante pulvinar diam laoreet facilisis. Etiam facilisis urna sit amet arcu blandit rhoncus eu sit amet quam. Suspendisse risus sapien, rutrum sed pellentesque et, gravida non lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus tempor justo eget pulvinar posuere. Fusce eget scelerisque urna, a dictum risus. Ut nec dui faucibus, commodo tortor mollis, varius sapien. Aenean id felis ut quam ultricies varius.</p>
<p style="color: #000000;">Praesent viverra congue magna ac aliquet. Etiam eget dolor rutrum, tincidunt eros in, vulputate nibh. Vestibulum eu massa convallis, euismod orci a, pulvinar tortor. In eros odio, gravida nec iaculis non, euismod fermentum ante. In mattis justo massa, ac sodales est hendrerit ut. Phasellus ut odio quis est eleifend vulputate sit amet sed eros. Maecenas id tortor elementum, blandit leo eget, scelerisque massa. Sed et molestie felis. Donec ac viverra ante. Mauris posuere risus vel facilisis lobortis. Suspendisse potenti. Nulla gravida velit non neque euismod lacinia. Duis quis elit eget erat iaculis hendrerit non a massa. Quisque in est a mauris luctus lobortis. Mauris venenatis hendrerit justo in vestibulum.</p>
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
