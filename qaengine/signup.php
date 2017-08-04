<?php
ob_start();
?>
<?php
require_once("header.php");
?> <script type="text/javascript">
function xyz()
{
	
	if (document.form1.co.selectedIndex== 0) 
	{
 		alert('please choose country');
		return false;
	}
    		if(document.form1.name.value.length<4)
	{
		alert("please fill atleast 4 characters in Name");
		return false;
	}
			if(document.form1.phone.value.length<10)
	{
		alert("please fill atleast 10 digits in Phone");
		return false;
	}
	
	if(document.form1.address.value.length<3)
	{
		alert("please fill atleast 3 characters in address");
		return false;
	}

			if(document.form1.city.value.length<3)
	{
		alert("please fill atleast 3 digits in city");
		return false;
	}
			if(document.form1.state.value.length<3)
	{
		alert("please fill atleast 3 digits in state");
		return false;
	}

	if(document.form1.email.value.length<1||document.form1.email.value.indexOf("@")<3||document.form1.email.value.indexOf(".")<4)
	{
		alert("please fill proper email id");
		return false;
	}
			if(document.form1.password.value.length<6)
	{
		alert("please fill atleast 6 digits in password");
		return false;
	}
	var p1,p2;
	p1=document.form1.password.value
	p2=document.form1.re_password.value
	if(p1!=p2)
	{
		alert("Passwords doesn't match");
	    return false
	}

	if(document.form1.gen[0].checked==false&&document.form1.gen[1].checked==false)
	{
		alert("Choose gender");
		return false;
	}
}

       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
			{
             return false;
			}
			else {
          return true; }
       }
       



</script>  <div itemtype="http://schema.org/ItemList" class="col-md-8 main-content">
<link itemprop="url" href="index.php" style="display: none;"/>
<div class="clearfix"></div>
<div class="row select-category">
<div itemprop="mainEntityOfPage" class="col-md-6 col-xs-6 current-category">
<span itemprop="name"><h2><a href="signup.php">SignUp</a></h2></span></div>
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
<div class="signup">
<?php
require_once("vars.php");
if(isset($_POST["submit"]))
{
  $na=$_POST["name"];
  $ph=$_POST["phone"];
  $ad=$_POST["address"];
  $city=$_POST["city"];
  $sta=$_POST["state"];
  $em=$_POST["email"];
  $pa=$_POST["password"];
  $gen=$_POST["gen"];
  $co=$_POST["co"];
  $dob=$_POST["dateofbirth"];
  $err=$_FILES["profilepic"]["error"];
  if($err==0)
  {
	  $date=date_create();
	  $tstamp=date_timestamp_get($date);
	  $fn=$tstamp.$_FILES["profilepic"]["name"]; 
	  $tname=$_FILES["profilepic"]["tmp_name"];
	  move_uploaded_file($tname,"Uploads/$fn");
   }
   else
   {
   $fn="images.png";
   }
   $conn=mysqli_connect(host,uname,pass,dbname) or die ("Error in connection". mysqli_connect_error());
	$q1="select * from signup where Email='$em'";
		mysqli_query($conn,$q1) or die ("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==1)
	{
		$msg="Email is already registed";
	}
	else
	{
	$q="insert into signup values('$na','$ph','$ad','$city','$sta','$em','$pa','$gen','$co','$dob','$fn','normal')";
	mysqli_query($conn,$q) or die ("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==1)
	{
		$msg="Signup Succesfull,Plz Login Now";
		
		
	}
	else
	{
		$msg="Error in signup,plz try after sometime";
	}
	}
}
?>
<font color="#FF0000">
<?php
if(isset($msg))
print $msg;
?></font>	
<form name="form1"  id="signup_form" class="form_modal_style" method="post" enctype="multipart/form-data" onSubmit="return xyz()">

<label for="username">
Username </label>
<input type="text" class="name_user" name="name" id="username"/>
<label for="phone">
Phone </label>
<input type="text" class="phone_user" name="phone" onKeyPress=" return isNumberKey(event)" />
<label for="address">
Address </label>
<input type="text" class="address_user" name="address" id="address"/>
<label for="city">
City </label>
<input type="text" class="city_user" name="city" id="city"/>
<label for="state">
State </label>
<input type="text" class="state_user" name="state" id="state"/>
<label for="email">
Email </label>
<input type="text" class="email_user" name="email" id="email" />
<label for="password1">
Password </label>
<input type="password" class="password_user_signup" id="password1" name="password"/>
<label for="re_password">
Retype Password </label>
<input type="password" class="repeat_password_user_signup" id="re_password" name="re_password"/>
<label for="gender">
Gender </label> 
<style>
#gen_0{
	width:17px;
	height:17px;
	margin-right:7px;
	display:inline;}
	#gen_1{
	width:17px;
	height:17px;
	margin-right:7px;
	display:inline;}
#day {
	margin-top:10px;
	margin-bottom:5px;
}
</style>
<label for="MF">
<input name="gen" type="radio" value="Male" id="gen_0">Male &nbsp; &nbsp;
<input name="gen" type="radio" value="Female" id="gen_1">Female</label> 
<label for="country">
Country 
<select name="co" id="co">
<option>select</option>
        <option>India</option>
        <option>USA</option>
        <option>UK</option>
        <option>China</option>
        <option>Pakistan</option>
        <option>SriLanka</option>
      </select></label><br/>
 <label for="dateofbirth">
 Date Of Birth </label>     
<input name="dateofbirth" type="text" id="datepicker">
          <script src="moment.min.js"></script>
 <script src="pikaday.js"></script>

    <script>

    var picker = new Pikaday(
    {
        field: document.getElementById('datepicker'),
		format: 'YYYY-MM-DD',
        firstDay: 1,
        minDate: new Date(1930,1,1),
        maxDate: new Date(2020, 12, 31),
        yearRange: [1930,2020],
		
    });

    </script>              
<label for="profile">
Profile Pic</label> 
<input type="file" name="profilepic" id="profilepic" />

<input type="submit" name="submit" value="Sign up" class="btn-submit">
<input type="reset" name="reset" value="Reset" class="btn-submit">
<a href="login.php" class="link_sign_in">Sign in</a>
<div class="clearfix"></div>
<p class="policy-sign-up">
By clicking "Sign up" you indicate that you have read and agree to the privacy policy and <a target="_blank" href="term.php">terms of service.</a> </p>
</form>

</div>  
<div class="clearfix"></div>
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
