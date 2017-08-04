<?php
require_once("headeruser.php");
?>
 <div itemtype="http://schema.org/ItemList" class="col-md-8 main-content">
<link itemprop="url" href="subcat.php?cid=$x[0]" style="display: none;"/>
<div class="clearfix"></div>
<div class="row select-category">
<div itemprop="mainEntityOfPage" class="col-md-6 col-xs-6 current-category">
<span itemprop="name">Answers For You</span>
</div>
<div class="col-md-6 col-xs-6">
<div class="select-categories-wrapper">
<div class="outer-filter-wrapper">

<div class="filter-by-select"></div>
</div>
</div>
</div>
</div> 
<div class="row q-filter-waypoints collapse" id="q_filter_waypoints">
<div class="col-md-2 col-xs-2">
<a href="askquestion.php"><button type="button" data-toggle="modal" class="action ask-question">
<i class="fa fa-plus"></i> ASK A QUESTION </button></a>
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
<a class="active" href="indexuser.php">
Latest </a></li>
</ul> 
</div>
<div class="col-md-5 col-sm-6 col-xs-6 categories-wrapper">
<div class="select-categories-wrapper fixed">
<span class="label-filter">Filter by</span>
<div class="select-categories">
<select class="select-grey-bg chosen-select" id="move_to_category">
<option>Filter by category</option>
<?php

require_once("vars.php");

	$conn=mysqli_connect(host,uname,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="select * from addcat";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		print "No Category available";
	}
	else
	{
	while($x=mysqli_fetch_array($res))
{
	print " <option><a href='subcat.php?cid=$x[0]'>$x[1]</a></option> ";
}
	} ?>
</select>
</div>
</div> 

</div>
</div>
</div>
</div>
<div class="main-questions-list">
<style>
.main-questions-list{
width:800px;	
margin:auto;
margin-bottom:200px;	
	}
</style>
<?php
require_once("vars.php");
if(isset($_POST["submit"]))
{
  $ans=$_POST["answer"];
  $un=$_SESSION["un"];
  $n=$_SESSION["n"];
   $qid=$_GET["qid"];
   $pic=$_SESSION["pic"];
    date_default_timezone_set("Asia/Kolkata");
  $dt=date('Y-m-d H:i:s');
   $conn=mysqli_connect(host,uname,pass,dbname) or die ("Error in connection". mysqli_connect_error());
	$q="insert into answer(questionid,answer,name,email,profilepic,answerdate) values('$qid','$ans','$n','$un','$pic','$dt')";
	mysqli_query($conn,$q) or die ("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==1)
	{
		$msg="Answer Submitted";
		
		
	}
	else
	{
		$msg="Error in Submitting";
	}
	
}
?>	
<ul id="main_questions_list">
<?php
require_once("vars.php");
    $qid=$_GET["qid"];
	$conn=mysqli_connect(host,uname,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="select * from addquestion where questionid='$qid'";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		print "<h2>No Question Available</h2>";
	}
	else
	{  
		$x=mysqli_fetch_array($res);
	      $msgdate=$x[4];
		  $date=date_create($msgdate);
		  $sdate=date_format($date,"d/M/Y");
		print "	<font color='#000'><b><h1 itemprop='name'>
$x[3]
</h1></b></font>"; 
	}?>
    <div class="answer">
 <div class="showanswer">
 <script>
 
 function xyz()
 {
	 if(document.form1.answer.value.length<10)
	 {
		 alert("Plz fill the answer alteast 10 characters");
		 return false;
		 }
	 }
 </script>
 <?php
require_once("vars.php");
   
	$conn=mysqli_connect(host,uname,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="select * from answer where questionid='$qid'";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		print "No Answer Available";
	}
	else
	{  
		while($a=mysqli_fetch_array($res))
		{
	      $msgdate=$a[6];
		  $date=date_create($msgdate);
		  $sdate=date_format($date,"d/M/Y");
		print "<div>
<li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem' class='question-item post-2212 poll type-poll status-publish format-standard hentry question_category-music' data-id='2212'><font color='#000'>
<div itemprop='item' itemscope itemtype='http://schema.org/Question'>
<div class='col-md-8 col-xs-8 q-left-content'>
<div class='q-ltop-content'>

<span class='author-avatar'>
<img height='50' width='50' itemprop='image' src='Uploads/$a[5]' class='avatar'/> </span>
<span itemprop='name' class='author-name'>$a[3]</span>
</div></font>
<div class='q-lbtm-content'>
<div itemprop='text' class='question-excerpt'>
<p>$a[2]</p>
</div>
<div class='question-cat'>
<ul class='question-tags'>
</ul>
<div class='clearfix'></div>
<span class='question-category'>
<span itemprop='dateCreated' datetime='on January 20, 2016' class='question-time'>
Answered on $sdate </span>
</span> </div>
</div>
</div>  
<div class='clearfix'></div>
</div>
</li>
</div>";
		}
	}?>
 </div>   
<form name="form1"  id="signup_form" class="form_modal_style" method="post" onSubmit="return xyz()">     
<label for="answer"></label>
<textarea name="answer" cols="70" rows="5" id="answer" placeholder="Write Your Answer"></textarea>
<?php 
if(isset($msg))
print $msg;
?>
<input type="submit" name="submit" value="Submit" width="5">
</form>
</div> 
</ul> 
</div>
<div class="clearfix grey-line"></div></div>
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
</div>
<div style="display:none;">
<div id="wp-temp_id-wrap" class="wp-core-ui wp-editor-wrap html-active"><link rel='stylesheet' id='dashicons-css' href='../files/wp-includes/css/dashicons.minc74f.css?ver=1463369188' type='text/css' media='all'/>
<link rel='stylesheet' id='editor-buttons-css' href='../files/wp-includes/css/editor.minc74f.css?ver=1463369188' type='text/css' media='all'/>
<div id="wp-temp_id-editor-container" class="wp-editor-container"><textarea class="wp-editor-area" rows="20" tabindex="5" cols="40" name="post_content" id="temp_id"></textarea></div>
</div>
</div>
<?php  
require_once("scriptfooter.php");
?>  

</body> 

</html>
