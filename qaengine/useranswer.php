<?php
ob_start();
session_start();
if(!isset($_SESSION["n"]) or $_SESSION["utype"]!="admin")
{
header("location:error.php");
}
?>
<?php
require_once("headeruser.php");
?>
 <div itemtype="http://schema.org/ItemList" class="col-md-8 main-content">
<link itemprop="url" href="subcat.php?cid=$x[0]" style="display: none;"/>
<div class="clearfix"></div>
<div class="row select-category">
<div itemprop="mainEntityOfPage" class="col-md-6 col-xs-6 current-category">
<span itemprop="name">Your Answers</span>
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
<style>
</style>
<div class="main-questions-list">
<ul id="main_questions_list">
<?php
require_once("vars.php");
    $un=$_SESSION["un"];
	$conn=mysqli_connect(host,uname,pass,dbname) or die("Error in connection " . mysqli_connect_error());
	$q2="select addquestion.question, answer.answer, answer.answerdate from addquestion,answer where answer.email='$un' and addquestion.questionid=answer.questionid  order by answer.answerdate desc";
	$res=mysqli_query($conn,$q2) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		print "<h2>No Answer</h2><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
	}
	else
	{

		while($ya=mysqli_fetch_array($res))
	{
	        	      $msgdate=$ya[2];
		  $date = date_create($msgdate);
		  $sdate=date_format($date,"d/M/Y");

		print "

<li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem' class='question-item post-2212 poll type-poll status-publish format-standard hentry question_category-music' data-id='2212'><font color='#000'>
<div itemprop='item' itemscope itemtype='http://schema.org/Question'>
<div class='col-md-8 col-xs-8 q-left-content'>
<div class='q-ltop-content'>
<h4 itemprop='name'>
$ya[0]
</h4>
</div></font>
<div class='q-lbtm-content'>
<div itemprop='text' class='question-excerpt'>
Your Answer :<p>$ya[1]</p>
</div>
<div class='question-cat'>
<ul class='question-tags'>
</ul>
<div class='clearfix'></div>
<span itemprop='dateCreated' datetime='on January 20, 2016' class='question-time'>
Answered on  $sdate </span>
 </div>
</div>
</div>

<div class='clearfix'></div>
</div>
</li>
 ";
	}
	}
	?>
</ul>
</div>

<div class='clearfix grey-line'></div>
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
<div class="widget widget-hot-questions"></div>
<div class="widget user-widget">
  <div class="hot-user-question">  </div>
</div>
</div>  </div>
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
