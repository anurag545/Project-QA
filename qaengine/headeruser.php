<?php
ob_start();
session_start();
if(!isset($_SESSION["n"]))
{
header("location:error.php");
}
?>
<!DOCTYPE html>
<html lang="en-US">
<!--[if lt IE 7]> <html class="ie ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]> <html class="ie ie9 newest" lang="en"> <![endif]-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
<link rel="shortcut icon" href="#"/>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin,cyrillic,cyrillic-ext,vietnamese,latin-ext' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../files/wp-content/themes/qaengine/js/libs/selectivizr-min.js"></script>
<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
<title>QA Engine &#8211; Enginethemes &#8211; The Most Place for Questioning &amp; Answering</title>
<!--[if lt IE 9]>
                <script src="../files/wp-content/themes/qaengine/includes/aecore/assets/js/html5.js"></script>
            <![endif]-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<link rel="alternate" type="application/rss+xml" title="QA Engine - Enginethemes &raquo; Feed" href="feed/index.php"/>
<link rel="alternate" type="application/rss+xml" title="QA Engine - Enginethemes &raquo; Comments Feed" href="comments/feed/index.php"/>
<link rel="alternate" type="application/rss+xml" title="QA Engine - Enginethemes &raquo; Questions Listing Comments Feed" href="questions-listing/feed/index.php"/>
<script type="text/javascript">

			!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;if(!g||!g.fillText)return!1;switch(g.textBaseline="top",g.font="600 32px Arial",a){case"flag":return g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3;case"diversity":return g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,d=c[0]+","+c[1]+","+c[2]+","+c[3],g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e;case"simple":return g.fillText(h(55357,56835),0,0),0!==g.getImageData(16,16,1,1).data[0];case"unicode8":return g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
<style type="text/css">img.wp-smiley,img.emoji{display:inline!important;border:none!important;box-shadow:none!important;height:1em!important;width:1em!important;margin:0 .07em!important;vertical-align:-0.1em!important;background:none!important;padding:0!important;}</style>
<link rel='stylesheet' id='bootstrap-css' href='../files/wp-content/themes/qaengine/includes/aecore/assets/css/bootstrap.min43a5.css?ver=1464677288' type='text/css' media='all'/>
<link rel='stylesheet' id='wp-color-picker-css' href='../files/wp-admin/css/color-picker.mina221.css?ver=1463369189' type='text/css' media='all'/>
<link rel='stylesheet' id='demo-bar-css' href='../files/wp-content/plugins/et_demobar/css/mainb4a3.css?ver=1464666882' type='text/css' media='all'/>
<link rel='stylesheet' id='mCustomScrollbar-css' href='../files/wp-content/plugins/et_demobar/css/jquery.mCustomScrollbar.minb4a3.css?ver=1464666882' type='text/css' media='all'/>
<link rel='stylesheet' id='font-awesome-css' href='../files/wp-content/themes/qaengine/css/libs/font-awesome.min43a5.css?ver=1464677288' type='text/css' media='all'/>
<link rel='stylesheet' id='main-style-css' href='../files/wp-content/themes/qaengine/css/main43a5.css?ver=1464677288' type='text/css' media='all'/>
<link rel='stylesheet' id='editor-style-css' href='../files/wp-content/themes/qaengine/css/editor43a5.css?ver=1464677288' type='text/css' media='all'/>
<link rel='stylesheet' id='push-menu-css' href='../files/wp-content/themes/qaengine/css/libs/push-menu43a5.css?ver=1464677288' type='text/css' media='all'/>
<link rel='stylesheet' id='chosen-css' href='../files/wp-content/themes/qaengine/css/libs/chosen43a5.css?ver=1464677288' type='text/css' media='all'/>
<link rel='stylesheet' id='custom-style-css' href='../files/wp-content/themes/qaengine/css/custom43a5.css?ver=1464677288' type='text/css' media='all'/>
<link rel='stylesheet' id='date-picker-style-css' href='../files/wp-content/themes/qaengine/css/bootstrap-datetimepicker.min43a5.css?ver=1464677288' type='text/css' media='all'/>
<link rel='stylesheet' id='color-picker-style-css' href='../files/wp-content/themes/qaengine/css/colorpicker43a5.css?ver=1464677288' type='text/css' media='all'/>
<link rel='stylesheet' id='style-css' href='../files/wp-content/themes/qaengine/style8783.css?ver=1464677289' type='text/css' media='all'/>
<script type='text/javascript' src='../files/wp-includes/js/jquery/jquery2b5b.js?ver=1466532443'></script>
<script type='text/javascript' src='../files/wp-includes/js/jquery/jquery-migrate.min2b5b.js?ver=1466532443'></script>
<script type='text/javascript' src='../files/wp-includes/js/plupload/plupload.full.mina083.js?ver=1452157707'></script>
<!--[if lt IE 9]>
                <script src="../files/wp-content/themes/qaengine/includes/aecore/assets/js/html5.js"></script>
            <![endif]--><link rel='https://api.w.org/' href='wp-json/index.php'/>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd"/>
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml"/>
<meta name="generator" content="WordPress 4.5.3"/>
<link rel="canonical" href="index.php"/>
<link rel='shortlink' href='index.php'/>
</head>
<body class="home page page-id-12 page-template page-template-page-questions page-template-page-questions-php cbp-spmenu-push">
<div class="sampleClass"></div>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 left-sidebar">
<div class="widget widget-btn">
<a href="askquestion.php"><button type="button" class="action ask-question">
<i class="fa fa-plus"></i> ASK A QUESTION </button></a>
</div>
<div class="widget widget-menus">
<div class="menu-left-menu-container"><ul id="menu-left-menu" class="menu"><li id="menu-item-1765" class="fa-question-circle menu-item menu-item-type-custom menu-item-object-custom menu-item-1765"><a href="indexuser.php"><i class="fa fa-question-circle"></i>Questions</a></li>
<li id="menu-item-1742" class="fa-th-list menu-item menu-item-type-post_type menu-item-object-page menu-item-1742"><a href="cat.php"><i class="fa fa-th-list"></i>Categories</a></li>
</ul></div> </div>
<div class="clearfix"></div>
<div class="copyright">
&copy;2016 <br>
<a href="termuser.php">Terms & Privacy</a>
</div>
</div>
</div>
</div> </nav>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 right-sidebar">
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
<div class="widget widget-related-tags"></div>
<div class="widget user-widget"></div>
</div>
</div>
</div> </nav>
<nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top" id="cbp-spmenu-s3">
<ul class="menu-res">
<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-12 current_page_item menu-item-20 active "><a href="indexuser.php">Home</a></li>
<li id="menu-item-114" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-114"><a href="cat.php">Categories</a>
<ul class="sub-menu">
<?php
  session_start();

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
	print " <li id='menu-item-2188' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-2188'><a href='subcat.php?cid=$x[0]'>$x[1]</a></li> ";
}
	} ?>
</ul>
<li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="askquestion.php">Ask Question</a></li>
<li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="aboutususer.php">AboutUs</a></li>
<li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="useranswer.php">Answers</a></li>
</ul>
</nav>
<div class="container-fluid">
<div class="row">
<header id="header">
<div class="col-md-2 col-xs-2" id="logo">
<a href="indexuser.php">
<img src="../files/wp-content/themes/qaengine/img/logo.png">
</a>
</div>
<div id="menu_qa" class="col-md-8 col-xs-8">
<div class="header-menu">
<ul>
<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-12 current_page_item menu-item-20 active "><a href="indexuser.php">Home</a></li>
<li id="menu-item-114" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-114"><a href="cat.php">Categories </i></a>
<ul class="sub-menu">
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
	print " <li id='menu-item-2188' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-2188'><a href='subcat.php?cid=$x[0]'>$x[1]</a></li> ";
}
	} ?>
</ul>
<li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="askquestion.php">Ask Question</a></li>
<li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="aboutususer.php">AboutUs</a></li>
<li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="useranswer.php">Answers</a></li>
</ul>
</div>
<div class="header-search-wrapper">
<section class="buttonset">
<button id="showLeftPush"><i class="fa fa-question"></i></button>
<button id="showRightPush"><i class="fa fa-bar-chart-o"></i></button>

<button id="showTop"><i class="fa fa-list"></i></button>
</section>
<form id="header_search" method="POST" class="disable-mobile-search" onSubmit="return abc()">
<input type="text" name="keyword"  placeholder="Enter Keywords" autocomplete="off"/>
<button name="search" id="sea">Search</button>
<style>
#sea
{
border-radius:3px;
border:0;
height:28px;
background-color:#3498db;
color:#FFF;
	}
</style>
<?php
if(isset($_POST["search"]))
{
	$search=$_POST["keyword"];
header("location:search.php?sea=$search");
}
?>
<div id="search_preview" class="search-preview empty"></div>
</form>
</div>
</div>
<div id="login_qa" class="col-md-2 col-xs-2 btn-group ">
  <table width="75" cellspacing="0" cellpadding="5px" align="center">
    <tr height="40" valign="middle">
      <td><a href="changepassword.php">ChangePassword</a></br></td>
    </tr>
    <tr height="40" valign="middel" align="center">
      <td><a href="signout.php">SignOut</a></td>
    </tr>
  </table>
</div>
</header>
<div class="col-md-12 col-xs-12" id="header_sidebar">
</div> <div class="col-md-2 disable-mobile left-sidebar">
<div class="widget widget-btn">
<a href="askquestion.php"><button type="button" class="action ask-question">
<i class="fa fa-plus"></i> ASK A QUESTION </button></a>
</div>
<div class="widget widget-menus">
<div class="menu-left-menu-container"><ul id="menu-left-menu-1" class="menu"><li class="fa-question-circle menu-item menu-item-type-custom menu-item-object-custom menu-item-1765"><a href="indexuser.php"><i class="fa fa-question-circle"></i>Questions</a></li>
<li class="fa-th-list menu-item menu-item-type-post_type menu-item-object-page menu-item-1742"><a href="cat.php"><i class="fa fa-th-list"></i>Categories</a></li>
</ul></div> </div>
<div class="clearfix"></div>
<div class="copyright">
&copy;2016 <br>
<a href="termuser.php">Terms & Privacy</a>
</div>
</div>
