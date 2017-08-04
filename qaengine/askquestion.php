<?php
require_once("headeruser.php");
?>
  <div itemtype="http://schema.org/ItemList" class="col-md-8 main-content">
<link itemprop="url" href="index.php" style="display: none;"/>
<div class="clearfix"></div>
<div class="row select-category">
<div itemprop="mainEntityOfPage" class="col-md-6 col-xs-6 current-category">
<span itemprop="name"><h2><a href="askquestion.php">Ask Question</a></h2></span></div>
<div class="col-md-6 col-xs-6">
<div class="select-categories-wrapper">
<div class="outer-filter-wrapper">
<div class="select-categories-filter">
<span class="label-filter"></span>
  <div class="select-categories">
  <p>
  	   </p>
</div>
</div>
<div class="filter-by-select"></div>
</div>
</div>
</div>
</div>
<style type="text/css">
.addquestion {
width:400px;
margin:auto;
margin-top:50px;
margin-bottom:200px;
}
#catid,#subcatid
{
	height:28px;
	border-radius:3px;
	}
#question{
border-radius:3px;
}
</style>
<div class="addquestion">

<?php

require_once("vars.php");
if(isset($_POST["submit"]))
{
   $cid=$_POST["catid"];
   $scid=$_POST["subcatid"];
   $ques=$_POST["question"];
  date_default_timezone_set("Asia/Kolkata");
  $dt=date('Y-m-d H:i:s');
   $conn=mysqli_connect(host,uname,pass,dbname) or die ("Error in connection". mysqli_connect_error());
	$q="insert into addquestion(CatID,SubCatID,Question,QuestionDate) values ('$cid','$scid','$ques','$dt')"; 
	mysqli_query($conn,$q) or die ("Error in query2" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==1)
	{   
	 $msg="question Submitted";
	}
	else
	{
		$msg="Problem while adding,plz try again";
    }
}
else {
	$msg="Plz select category,subcategory first";
	}
?>
<form name="form1"  id="subcatform" class="form_modal_style" method="post" onSubmit="return xyz()">
<label for="categoryid">
Choose Category</label>
        <select name="catid" id="catid">
          <option>select</option>
          <?php
		   $conn=mysqli_connect(host,uname,pass,dbname) or die ("Error in connection". mysqli_connect_error());
	$q="select * from addcat"; 
	$res=mysqli_query($conn,$q) or die ("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{ 
	print "<option>No category available</opotion>";  
	
	}
	else
	{
	 while($x=mysqli_fetch_array($res))
	 {
		 if(isset($_POST["viewsubcat"]))
		 {
			 $cid=$_POST["catid"];
			 if($x[0]==$cid)
			 {
	 print "<option value='$x[0]' selected='selected'>$x[1]</option>";				     
	         }
		else
		{
	        print "<option value='$x[0]'>$x[1]</option>";
		 }	 
	 }
	else{
	 print "<option value='$x[0]'>$x[1]</option>";
	 }	
    } 
	}
		  ?>
      </select>
      <input type="submit" name="viewsubcat" id="viewsubcat" value="Go" />
<label for="succategoryid">
Choose SubCategory</label>
        <select name="subcatid" id="subcatid">
          <option>select</option>
          <?php
		  if(isset($_POST["viewsubcat"]))
		  { 
		  $cid=$_POST["catid"];
		   $conn=mysqli_connect(host,uname,pass,dbname) or die ("Error in connection". mysqli_connect_error());
	$q="select * from addsubcat where CatID='$cid'"; 
	$res=mysqli_query($conn,$q) or die ("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==0)
	{ 
	print "<option>No category available</opotion>";  
	
	}
	else
	{
	 while($x=mysqli_fetch_array($res))
	 {
	 print "<option value='$x[0]'>$x[2]</option>";
	 }	
    } 
}
		  ?>
        </select> 
        <br/> <br/>    
<label for="question">
Your Question </label>
<textarea name="question" cols="40" rows="7" class="name_user" id="question" placeholder="Enter Your Question"></textarea><br/>           
<font color="#FF0000"><b>
<?php
if(isset($msg))
print $msg;
?></b></font></br>
<input type="submit" name="submit" value="Ask Question" class="btn-submit">
</form>
</div>
  
<div class="clearfix grey-line"></div>
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
