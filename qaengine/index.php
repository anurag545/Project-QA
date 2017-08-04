<?php
require_once("header.php");
?>  <div itemtype="http://schema.org/ItemList" class="col-md-8 main-content">
<link itemprop="url" href="index.php" style="display: none;"/>
<div class="clearfix"></div>
<div class="row select-category">
<div itemprop="mainEntityOfPage" class="col-md-6 col-xs-6 current-category">
<span itemprop="name">All Questions</span>
</div>
<div class="col-md-6 col-xs-6">
<div class="select-categories-wrapper">
<div class="outer-filter-wrapper">
<div class="select-categories-filter">
<span class="label-filter"></span>
<div class="select-categories">

</div>
</div> 
</div>
</div>
</div>
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
<a class="active" href="index.php">
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
<div class="row question-filter" id="question_filter">
<div class="col-md-6 col-xs-6 sort-questions">
<ul>
<li>
<a class="active" href="index.php">
Latest </a>
</li>
<li></li>
<li></li>
</ul>
</div>
<div class="col-md-6 col-xs-6">
<div class="number-of-questions-wrapper"></div>
</div>
</div> 
<div class="main-questions-list">
<ul id="main_questions_list">
<?php
require_once("vars.php");
    
	$conn=mysqli_connect(host,uname,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q="select * from addquestion order by questiondate desc limit 5";
	$res=mysqli_query($conn,$q) or die("Error in query " . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{
		print "<h2>No Question Available</h2>";
	}
	else
	{  
		while($x=mysqli_fetch_array($res))
	{   
	      $msgdate=$x[4];
		  $date=date_create($msgdate);
		  $sdate=date_format($date,"d/M/Y");
	$conne=mysqli_connect(host,uname,pass,dbname) or die("Error in connection " . mysqli_connect_error());	
	$q3="select * from answer where questionid='$x[0]'";
	$res1=mysqli_query($conne,$q3) or die("Error in query " . mysqli_error($conne));
	$cnto=mysqli_affected_rows($conne);
	$x1=mysqli_fetch_array($res1);
	$rest=substr("$x1[2]",0,15);
	
		print "	

<li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem' class='question-item post-2212 poll type-poll status-publish format-standard hentry question_category-music' data-id='2212'><font color='#000'>
<div itemprop='item' itemscope itemtype='http://schema.org/Question'>
<div class='col-md-8 col-xs-8 q-left-content'>
<div class='q-ltop-content'>
<h1 itemprop='name'>
<a itemprop='url' href='login.php?returnurl=answer.php?qid=$x[0]' class='question-title'>$x[3]</a>
</h1>
</div></font>
<div class='q-lbtm-content'>
<div itemprop='text' class='question-excerpt'>
<p><p>$rest..........</p></p>
</div>
<div class='question-cat'>
<ul class='question-tags'>
</ul>
<div class='clearfix'></div>
<a itemprop='author' itemscope itemtype='http://schema.org/Person' href='blog/member/admin/index.php'>
<span class='author-avatar'>
 </span>
<span itemprop='name' class='author-name'></span>
</a>
<span itemprop='dateCreated' datetime='on January 20, 2016' class='question-time'>
Asked on $sdate </span>
<span class='question-category'>
</span> </div><br/>
<span class='mask-poll'><a href='login.php?returnurlanswer.php?qid=$x[0]'>$cnto Answer</a></span>
</div>
</div> 
<div class='col-md-4 col-xs-4 q-right-content'>

<div class='pumping'>
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
<div class="row paginations home">
<div class="col-md-12">
<ul class='page-numbers'>
<li><span class='page-numbers current'>1</span></li>
<li><a class='page-numbers' onClick="alert('Plz Login First')">2</a></li>
<li><a class="next page-numbers" onClick="alert('Plz Login First')">></a></li>
</ul>
</div>
</div> 
<div class="clearfix"></div>
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
<div id="wp-temp_id-wrap" class="wp-core-ui wp-editor-wrap html-active"><link rel='stylesheet' id='dashicons-css' href=../files/wp-includes/css/dashicons.minc74f.css?ver=1463369188' type='text/css' media='all'/>
<link rel='stylesheet' id='editor-buttons-css' href=../files/wp-includes/css/editor.minc74f.css?ver=1463369188' type='text/css' media='all'/>
<div id="wp-temp_id-editor-container" class="wp-editor-container"><textarea class="wp-editor-area" rows="20" tabindex="5" cols="40" name="post_content" id="temp_id"></textarea></div>
</div>
</div>
 
<div class="modal fade modal-submit-questions" id="login_register" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
<h4 class="modal-title modal-title-sign-in" id="myModalLabel">Sign In First</h4>
</div>
</div>
</div>
</div>  
<?php
require_once("scriptfooter.php");
?>
</body> 

<!-- Mirrored from qaengine.enginethemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2016 13:52:04 GMT -->
</html>
