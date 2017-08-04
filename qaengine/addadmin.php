<?php
ob_start();
session_start();
if(!isset($_SESSION["n"]) or $_SESSION["utype"]!="admin")
{
header("location:error.php");
}
?>
<?php
require_once("headeradmin.php");
?>
<div itemtype="http://schema.org/ItemList" class="col-md-8 main-content">
<link itemprop="url" href="index.php" style="display: none;"/>
<div class="clearfix"></div>
<div class="row select-category">
<div itemprop="mainEntityOfPage" class="col-md-6 col-xs-6 current-category">
<span itemprop="name"><h2><a href="addadmin.php">Add Admin</a></h2></span></div>
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
<div class="adminpanel">
	<script type="text/javascript">
function xyz()
{

if (document.form1.co.selectedIndex== 0)
{
	alert('please choose country');
	return false;
}

if(document.form1.email.value.length<1||document.form1.email.value.indexOf("@")<3||document.form1.email.value.indexOf(".")<4)
{
	alert("please fill proper email id");
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
	if(document.form1.password.value.length<6)
{
	alert("please fill atleast 6 digits in password");
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




</script>
<?php
if(!isset($_SESSION["n"]) or $_SESSION["utype"]!="admin")
{
header("location:error.php");
}
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
	$q="insert into signup values('$na','$ph','$ad','$city','$sta','$em','$pa','$gen','$co','$dob','$fn','admin')";
	mysqli_query($conn,$q) or die ("Error in query" . mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	if($cnt==1)
	{
	$msg="Admin Added Succesfully";
	}
	else
	{
		$msg="Error in adding,plz try after sometime";
	}
	}
}
?>
<form name="form1"  id="signup_form" class="form_modal_style" method="post" enctype="multipart/form-data" on onSubmit="return xyz()">

<label for="username">
Username </label>
<input type="text" class="name_user" name="name" id="username"/>
<label for="phone">
Phone </label>
<input type="text" class="phone_user" name="phone" id="phone" onKeyPress="return isNumberKey(event)"/>
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
<input type="text" class="email_user" name="email" id="email"/>
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
<option>Select</option>
        <option>India</option>
        <option>USA</option>
        <option>UK</option>
        <option>China</option>
        <option>Pakistan</option>
        <option>SriLanka</option>
      </select></label><br/>
 <label for="dateofbirth">
 Date Of Birth </label>
<input name="dateofbirth" type="text" id="datepicker" readonly>
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
<font color="#FF0000">
<?php
if(isset($msg))
print $msg;
?></font>
<input type="submit" name="submit" value="Sign up" class="btn-submit">
<input type="reset" name="reset" value="Reset" class="btn-submit">
<div class="clearfix"></div>
<p class="policy-sign-up">
By clicking "Sign up" you are going to add new <font color="#000000">ADMIN</font>  </p>
</form>
</div>
<div class="clearfix grey-line"></div>
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
<h4 class="modal-title modal-title-sign-in" id="myModalLabel">Sign In</h4>
</div>
</div>
</div>
</div>
<script type="text/template" id="tag_item">

			<input type="hidden" name="tags[]" value="{{= stripHTML(name) }}" />
			{{= stripHTML(name) }} <a href="javascript:void(0)" class="delete"><i class="fa fa-times"></i></a>

		</script>
<script type="text/javascript">
			function stripHTML(html)
			{
			   var tmp = document.createElement("DIV");
			   tmp.innerHTML = html;
			   return tmp.textContent||tmp.innerText;
			}
		</script>
<script type="text/template" id="search_preview_template">
	<# _.each(questions, function(question){ #>
	<div class="i-preview">
		<a href="{{= question.permalink }}">
			<div class="i-preview-content">
				<span class="i-preview-title">
					{{= question.post_title.replace( search_term, '<strong>' + search_term + "</strong>" ) }}
				</span>
			</div>
		</a>
	</div>
	<# }); #>
	<div class="i-preview i-preview-showall">
		<# if ( total > 0 && pages > 1 ) { #>
		<a href="{{= search_link }}">View all {{= total }} results</a>
		<# } else if ( pages == 1) { #>
		<a href="{{= search_link }}">View all results</a>
		<# } else { #>
		<a> No results found </a>
		<# } #>
	</div>
</script>

<style type="text/css"></style>

<script type="text/template" id="poll_tag_item">

            <input type="hidden" name="qa_tag[][name]" value="{{= stripHTML(name) }}" />
            {{= stripHTML(name) }} <a href="javascript:void(0)" class="delete"><i class="fa fa-times"></i></a>

        </script>
<script type="text/javascript">
            function stripHTML(html)
            {
                var tmp = document.createElement("DIV");
                tmp.innerHTML = html;
                return tmp.textContent||tmp.innerText;
            }
        </script>
<script type="text/template" id="edit_poll_answer_item">
            <input type="text" class="input-answer" placeholder="{{= placeholder }}" name="poll_answers[]" value="{{= post_title }}">
            <input type="hidden" class="answer-color-picker" value="#e6e6e6">
            <div class="function-right">
                <span class="color-box" style="background: {{= poll_answer_color }}"></span>
                <span class="remove-box"><i class="fa fa-trash"></i></span>
            </div>
        </script>
<script type='text/javascript' src='../files/wp-includes/js/underscore.minc74f.js?ver=1463369188'></script>
<script type='text/javascript' src='../files/wp-includes/js/backbone.minc74f.js?ver=1463369188'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/includes/aecore/assets/js/marionette8783.js?ver=1464677289'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ae_globals = {"ajaxURL":"http:\/\/qaengine.enginethemes.com\/wp-admin\/admin-ajax.php","imgURL":"http:\/\/qaengine.enginethemes.com\/wp-content\/themes\/qaengine\/img\/","jsURL":"http:\/\/qaengine.enginethemes.com\/wp-content\/themes\/qaengine\/includes\/aecore\/assets\/js\/","loadingImg":"<img class=\"loading loading-wheel\" src=\"http:\/\/qaengine.enginethemes.com\/wp-content\/themes\/qaengine\/includes\/aecore\/assets\/img\/loading.gif\" alt=\"Loading...\">","loading":"Loading","ae_is_mobile":"0","plupload_config":{"max_file_size":"3mb","url":"http:\/\/qaengine.enginethemes.com\/wp-admin\/admin-ajax.php","flash_swf_url":"http:\/\/qaengine.enginethemes.com\/wp-includes\/js\/plupload\/plupload.flash.swf","silverlight_xap_url":"http:\/\/qaengine.enginethemes.com\/wp-includes\/js\/plupload\/plupload.silverlight.xap"},"homeURL":"http:\/\/qaengine.enginethemes.com","is_submit_post":"","is_submit_project":"","is_single":"","max_images":"5","user_confirm":"0","max_cat":"3","confirm_message":"Are you sure to archive this?","map_zoom":"8","map_center":{"latitude":10,"longitude":106},"fitbounds":"","limit_free_msg":"You have reached the maximum number of Free posts. Please select another plan.","error":"Please fill all require fields.","geolocation":"0","date_format":"F j, Y","time_format":"g:i a","dates":{"days":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"daysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat","Sun"],"daysMin":["Su","Mo","Tu","We","Th","Fr","Sa","Su"],"months":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthsShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]},"global_map_style":null,"posts_per_page":"12","pending_questions":"0","pending_answers":"0","introURL":"http:\/\/qaengine.enginethemes.com\/intro-2\/","buy_pump_link":"http:\/\/qaengine.enginethemes.com\/buy-package\/","gplus_client_id":"","max_width_title":"150","user_id":"0","upload_images":"1","is_infinite":""};
/* ]]> */
</script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/includes/aecore/assets/js/appengine8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/functions8783.js?ver=1464677289'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var qa_front = {"form_auth":{"error_msg":"Please fill out all fields required.","error_user":"Please enter your user name.","error_email":"Please enter a valid email address.","error_username":"Please enter a valid username.","error_repass":"Please enter the same password as above.","error_url":"Please enter a valid URL.","error_cb":"You must accept the terms & privacy."},"texts":{"require_login":"You must be logged in to perform this action.","enought_points":"You don't have enought points to perform this action.","create_topic":"Create Topic","upload_images":"Upload Images","insert_codes":"Insert Code","no_file_choose":"No file chosen.","require_tags":"Please insert at least one tag.","add_comment":"Add comment","cancel":"Cancel","sign_up":"Sign Up","sign_in":"Sign In","accept_txt":"Accept","best_ans_txt":"Best answer","forgotpass":"Forgot Password","close_tab":"You have made some changes which you might want to save.","confirm_account":"You must activate your account first to create questions \/ answers!.","cancel_auth":"User cancelled login or did not fully authorize.","banned_account":"You account has been banned, you can't make this action!","buy_pump":"You must activate your account first to buy pump package.","uploading":"Uploading...","insert":"Insert"}};
/* ]]> */
</script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/front8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/pumping8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/libs/jquery-countdown/jquery.plugin.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/libs/jquery-countdown/jquery.countdown.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/core.min1be2.js?ver=1432020660'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/widget.mina083.js?ver=1452157707'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/mouse.min1be2.js?ver=1432020660'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/draggable.min1be2.js?ver=1432020660'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/slider.min1be2.js?ver=1432020660'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/jquery.ui.touch-punch1be2.js?ver=1432020660'></script>
<script type='text/javascript' src='../files/wp-admin/js/iris.min1be2.js?ver=1432020660'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var poll_settings = {"max_answer":"5","max_answer_error_text":"You can only create 5 answers.","answer_placeholder":"Your answer","poll_chart_type":"pie_chart","user_voted":""};
/* ]]> */
</script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/poll8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/includes/aecore/assets/js/bootstrap.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/libs/modernizr8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/libs/jquery.simple-text-rotator.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/includes/aecore/assets/js/jquery.validate.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/position.mina083.js?ver=1452157707'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/menu.min1be2.js?ver=1432020660'></script>
<script type='text/javascript' src='../files/wp-includes/js/wp-a11y.mina083.js?ver=1452157707'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var uiAutocompleteL10n = {"noResults":"No search results.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate."};
/* ]]> */
</script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/ui/autocomplete.min1be2.js?ver=1432020660'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/libs/waypoints.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/libs/waypoints-sticky8783.js?ver=1464677289'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var raty = {"hint":["bad","poor","nice","good","gorgeous"]};
/* ]]> */
</script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/includes/aecore/assets/js/chosen8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/libs/classie8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/scripts8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/moment.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/bootstrap-datetimepicker.min8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/themes/qaengine/js/colorpicker8783.js?ver=1464677289'></script>
<script type='text/javascript' src='../files/wp-content/plugins/et_demobar/js/jquery.mCustomScrollbar.concat.minb4a3.js?ver=1464666882'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var main = {"ajaxUrl":"http:\/\/qaengine.enginethemes.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='../files/wp-content/plugins/et_demobar/js/mainb4a3.js?ver=1464666882'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpColorPickerL10n = {"clear":"Clear","defaultString":"Default","pick":"Select Color"};
/* ]]> */
</script>
<script type='text/javascript' src='../files/wp-admin/js/color-picker.minaf47.js?ver=1452157706'></script>
<script type='text/javascript' src='../files/wp-includes/js/wp-embed.minc63f.js?ver=1462563126'></script>
<script type="text/javascript">
		tinyMCEPreInit = {
			baseURL: "",
			suffix: ".min",
						mceInit: {},
			qtInit: {},
			ref: {plugins:"",theme:"modern",language:""},
			load_ext: function(url,lang){var sl=tinymce.ScriptLoader;sl.markDone(url+'/langs/'+lang+'.js');sl.markDone(url+'/langs/'+lang+'_dlg.js');}
		};
		</script>
<script type="text/javascript">
		var ajaxurl = "wp-admin/admin-ajax.php";
		( function() {
			var init, id, $wrap;

			if ( typeof tinymce !== 'undefined' ) {
				for ( id in tinyMCEPreInit.mceInit ) {
					init = tinyMCEPreInit.mceInit[id];
					$wrap = tinymce.$( '#wp-' + id + '-wrap' );

					if ( ( $wrap.hasClass( 'tmce-active' ) || ! tinyMCEPreInit.qtInit.hasOwnProperty( id ) ) && ! init.wp_skip_init ) {
						tinymce.init( init );

						if ( ! window.wpActiveEditor ) {
							window.wpActiveEditor = id;
						}
					}
				}
			}

			if ( typeof quicktags !== 'undefined' ) {
				for ( id in tinyMCEPreInit.qtInit ) {
					quicktags( tinyMCEPreInit.qtInit[id] );

					if ( ! window.wpActiveEditor ) {
						window.wpActiveEditor = id;
					}
				}
			}
		}());
		</script>
<style type="text/css">.post-a-job .step .toggle-title,.btn-background,.icon-border{box-sizing:content-box;}.et-plugin-demobar .icon:before{font-size:20px;}</style>
<script type="text/javascript">
			jQuery(document).ready(function($) {
									if( window.location.hash == '#register' ){
							setTimeout(function(){
								$('.login-url').trigger('click');
							},300);
						}
								});
		</script>

<noscript><iframe src="http://www.googletagmanager.com/ns.php?id=GTM-TS4RDD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
				j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
				'../www.googletagmanager.com/gtm5445.php?id='+i+dl;f.parentNode.insertBefore(j,f);
				})(window,document,'script','dataLayer','GTM-TS4RDD');</script>
<script type="text/javascript">
            _.templateSettings = {
                evaluate: /\<\#(.+?)\#\>/g,
                interpolate: /\{\{=(.+?)\}\}/g,
                escape: /\{\{-(.+?)\}\}/g
            };
        </script>

<script type="text/javascript" id="current_user">
					 	currentUser = {"id":0,"ID":0}		</script>

<script type="text/javascript">
            (function ($) {
                if(typeof $.validator !== 'undefined' ) {
                    $.extend($.validator.messages, {
                        required: "This field is required.",
                        email: "Please enter a valid email address.",
                        url: "Please enter a valid URL.",
                        number: "Please enter a valid number.",
                        digits: "Please enter only digits.",
                        equalTo: "Please enter the same value again.",
                        date: "Please enter a valid date.",
                        creditcard: "Please enter a valid credit card number.",
                        accept: "Please enter a value with a valid extension.",

                        maxlength: $.validator.format("Please enter no more than {0} characters."),
                        minlength: $.validator.format("Please enter at least {0} characters."),
                        rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
                        range: jQuery.validator.format("Please enter a value between {0} and {1}."),
                        min : $.validator.format("Please enter a value greater than or equal to {0}."),
                        max : $.validator.format("Please enter a value less than or equal to {0}.")

                    });
                }


            })(jQuery);
        </script>
</body>

<!-- Mirrored from qaengine.enginethemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2016 13:52:04 GMT -->
</html>
