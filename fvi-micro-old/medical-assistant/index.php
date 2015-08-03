<?php

$post_form_program_id = 2211;
session_start();
if (isset($_GET['view']) && $_GET['view'] === 'full') {
	/* Delete mobile cookie  - uncomment to delete the mobile cookie when viewing full site*/
	//setcookie ("mobileCookie", "", time() - 3600);
} else {
	
	/* Check to see if the "desktop" cookie has been set in the past */
	if(isset($_COOKIE['desktopCookie'])){
		echo '';
	
	/* Check to see if the "mobile" cookie has been set, if so forward to the mobile site */
	} else if(isset($_COOKIE['mobileCookie'])){
		header('Location: http://explore.fvi.edu/mobile/index.php?source=cookie');
		
	/* If no cookies are set, run the function and forward as appropriate */
	} else {
		include('mobile_detection.php');
		mobile_device_detect(true,true,true,true,true,true,'http://explore.fvi.edu/mobile/index.php?source=function',false);
	
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

	<title>Florida Vocational Institute | Medical Assistant</title>

	<meta name="Description" content="Florida Vocational Institute - learn everything to know about Medical Assistant Training." />

	<meta name="Keywords" content=" Medical Assistant Training" />

	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="shortcut icon" href="" type="image/x-icon">

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 


<!--Google Analytics Code for the www.floridavocational.com/medical-assistant site  12.05.12-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36739702-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>






</head>

<body>
	
	<?php
include_once('../includes/tracking_code.php');
?>

<div class="layout">

<div class="header">


		
<div id="phone">Call Us Now!
          <strong class="phoneColor"><?php echo $tfn; ?></strong>


	</div>
</div>



	<!-- MAIN -->



	<div class="main">


		<div class="page">



			<div class="content">
				<h1>Medical Assistant Program</h1>
			  <p>The Medical  Assistant program at Florida Vocational Institute prepares you for an exciting  career in the healthcare industry. Medical Assisting is one of the more popular  healthcare positions that are currently projected to grow in upcoming years.  According to the U.S. Bureau of Labor Statistics, medical assisting employment  rates are expected to grow 31% from 2010 to 2020.* Florida Vocational Institute  is committed to providing its students with the very best training to qualify  them to take advantage of these employment opportunities!</p>
<p>Our  graduates are trained for entry-level positions in hospitals, doctors&rsquo; offices,  urgent care clinics, and several other medical facilities in all the relevant  aspects of administrative, laboratory, and clinical procedures. These include:</p>
              <ul>
  <li>Bookkeeping, record management, medical supply  inventory, and appointment scheduling</li>
  <li>Understanding of insurance claims, billing, and  prescription orders</li>
  <li>Preparation of patients for examinations </li>
  <li>Completion of routine clinical tasks such as  recording patient history, collecting vital signs, blood pressure, height,  temperature, and weight</li>
  <li>Ability to perform medical and lab tests  including urinalysis, phlebotomy, and limited X-rays</li>
  <li>Completing blood samples, injections, and suture  removals</li>
  <li>Providing therapeutic care and patient education</li>
</ul>
<p>&nbsp;</p>
<p>At Florida Vocational  Institute, you&rsquo;ll receive a comprehensive education in a supportive  environment. Come explore the world of healthcare by pursuing a Medical  Assistant career by training with us!</p>
<p>For more  information about our Medical Assistant program, call toll free <br />
  1-855-408-8400  or fill out the short form. </p>
<p class="listHeaders">
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



<h3>Simply fill out the form. Ready to start now? Call us at 305-665-1911


  </h3>
  </div>


	<?php include '../includes/footer.php'; ?>


</div>


</body>

</html>
