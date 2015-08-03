<?php

if($_GET['view'] === 'full'){
	/* Delete mobile cookie  - uncomment to delete the mobile cookie when viewing full site*/
	//setcookie ("mobileCookie", "", time() - 3600);
} else {
	
	/* Check to see if the "desktop" cookie has been set in the past */
	if(isset($_COOKIE['desktopCookie'])){
		echo '';
	
	/* Check to see if the "mobile" cookie has been set, if so forward to the mobile site */
	} else if(isset($_COOKIE['mobileCookie'])){
		header('Location:http://'.$_SERVER["HTTP_HOST"].'/mobile/index.php?source=cookie');
		
	/* If no cookies are set, run the function and forward as appropriate */
	} else {
		include('mobile_detection.php');
		mobile_device_detect(true,true,true,true,true,true,'http://'.$_SERVER["HTTP_HOST"].'/mobile/index.php?source=function',false);
	
		/* if it makes it this far, set the desktop cookie */
		$appname = "mobileDemo";
		setcookie("desktopCookie", $appname, time()+60*60*24*365); // set cookie to expire in one year
	}
}
$tfn = '305-665-1911';
$sid = 5;
$keyword = '';
if (isset($_SERVER['HTTP_REFERER'])) {
    $host = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
    if (strstr($host, '.google.')) {
        $_SESSION['sid'] = 2;
    } else if (strstr($host, '.bing.')) {
        $_SESSION['sid'] = 146;
    }
}
if (isset($_GET['tfn']) && $_GET['tfn'] != '') {

    $_SESSION['tfn'] = $_GET['tfn'];
}
if (isset($_SESSION['tfn'])) {
    $tfn = $_SESSION['tfn'];
}
if (isset($_GET['sid']) && intval($_GET['sid']) > 0) {

    $_SESSION['sid'] = intval($_GET['sid']);
}
if (isset($_SESSION['sid'])) {
    $sid = $_SESSION['sid'];
}

if (isset($_GET['keyword']) && $_GET['keyword'] != '') {

    $_SESSION['keyword'] = $_GET['keyword'];
}
if (isset($_SESSION['keyword'])) {
    $keyword = $_SESSION['keyword'];
}
/*
	Default function values
	$iphone=true,
	$android=true,
	$opera=true,
	$blackberry=true,
	$palm=true,
	$windows=true,
	$mobileredirect=false (the URL),
	$desktopredirect=false
*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">


<head>


	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Florida Vocational Institute | Your Successful Future Awaits at Florida Vocational Institute </title>

	<meta name="Description" content="Florida Vocational Institute - Affordable training in a variety of healthcare careers." />

	<meta name="Keywords" content=" Florida Vocational Institute - Affordable training in a variety of healthcare careers" />
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="shortcut icon" href="" type="image/x-icon"> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script type="text/javascript">

 

  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-36739702-1']);

  _gaq.push(['_trackPageview']);

 

  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();

 

</script>

</head>

<body>

<div class="layout">

<div class="header">


		
<div id="phone">Call Us Now!
          <strong class="phoneColor">305-665-1911</strong>


	</div>
</div>



	<!-- MAIN -->



	<div class="main">


		<div class="page">



		  <div class="content">
			<h1>Welcome to Florida Vocational Institute! </h1>
			  <p>Florida Vocational Institute offers affordable training in a variety of healthcare careers. We provide our students with a comprehensive, career-oriented education by our experienced faculty. With the training you receive from Florida Vocational Institute, you'll be qualified to apply for entry-level positions in the ever growing health care industry - we're committed to providing the very best training. </p>
              <p>Florida Vocational Institute offers:</p>
              
<p><strong>Professional Programs:</strong>             
<ul>
<li>Medical Assistant </li>
  <li>Patient Care Technician</li>
  
</ul></p>
              
<p><strong>Academic Programs:</strong>             
<ul>
  <li>Nursing Assistant/Home Health Aide</li>
  <li>Electrocardiography </li>
  <li>Phlebotomy</li>
</ul></p>

<p><strong>Continuing Education Programs:            
</strong>
<ul>
  <li>OSHA</li>
  <li>Domestic Violence</li>
  <li>HIV/AIDS</li>
  <li>Infection Control</li>
  <li>CPR</li>
  <li>And many more...</li>
</ul> </p>
<p><strong>Why choose FVI?</strong>             
<ul>
  <li>Small class sizes</li>
  <li>Flexible class schedules</li>
  <li>Job placement assistance</li>
  <li>Affordable training</li>
</ul></p>

<p>Come explore the world of healthcare by training with us!</p>
<p>&nbsp;</p>
</div>



		</div>



		<div class="sidebar">
        
        

<div class="request">


<div class="inner">

<h2>Request Information</h2>

<script src="script/val.js" language="javascript" type="text/javascript"></script>
<?php
include_once('../includes/form.php');
?>

		</div>


		  </div>


		</div>




		<div class="clear">&nbsp;</div>


	</div>

	<!-- /MAIN -->

	<div class="interest">



	<h2><strong>Start Training Today!</strong></h2>



<h3>Simply fill out the form. 
Ready to start now? Call us at 305-665-1911


  </h3>
  </div>


	<div class="footer">  <p align="center" class="footer">&nbsp;</p>
	<a href="privacy.html" target="_blank">Privacy Policy</a> | <a href="terms.html" target="_blank">Terms and Conditions</a><br/><br />
	  <p align="center" class="footer">7757 West Flagler Street, Suite 220, Miami, FL 33144<br />
      For  more information on graduation rates, median debt of graduates completing these  programs, and other important information, visit <a href="http://fvi.edu/disclosure/">http://fvi.edu/disclosure/</a><br />Copyright &copy;2013 Florida Vocational Institute.</p>
</div>


</div>


</body>

</html>
