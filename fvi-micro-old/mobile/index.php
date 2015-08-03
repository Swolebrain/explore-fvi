<?php
session_start();
$tfn = '786.574.3350';
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
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta http-equiv="cache-control" content="max-age=200" />

<link href="style1.css" media="handheld, screen" rel="stylesheet" type="text/css" />

<title>FLORIDA VOCATIONAL INSTITUTE</title>

<meta name="keywords" content="FLORIDA VOCATIONAL INSTITUTE" />

<meta name="description" content="FLORIDA VOCATIONAL INSTITUTE" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>





<style type="text/css">

<!--

body,td,th {

	color: #000;

}



}

a:hover {

	color: #916e2f;

}



}

h1 {

	font-size: 14px;

}

a:link {

	color: #916e2f;

}

a {

	font-weight: bold;

	font-size: 16px;

}



-->

</style>

<script type="text/javascript">



 



  var _gaq = _gaq || [];



  _gaq.push(['_setAccount', 'UA-36739702-4']);



  _gaq.push(['_trackPageview']);



 



  (function() {



    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;



    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';



    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);



  })();



 



</script>





</head>

<body>

<div class="mainwrapper">

  <div id="header">

		

		<div align=right class="phone"><a href="tel:1-305-851-5511" onClick="_gaq.push(['_trackEvent', 'ClickToCall', 'Click', '855-441-4041']);" target="_self"><img src="images/call icon.gif" width="18" height="20" /><?php echo $tfn; ?></a></div>

	  <div id="logo"><img height="103" width="300" alt="logo" src="images/banner.jpg"/>	  </div>

</div>

	<div id="content">

		<div class="min-width3">

			

			<div class="box4">

				<div class="tail-top">

				<div class="tail-right">

				<div class="tail-left">

				<div class="corner-bottom-right">

				<div class="corner-bottom-left">

				<div class="corner-top-right">

				<div class="corner-top-left">

					<div class="indent">

						

						<div class="title2">

						  <h1>Welcome to FVI</h1>

					      Florida Vocational Institute offers affordable training in a variety of healthcare careers. Contact us today for more information on how to get started. Just click on the number above or complete the form below.<br />

					      <br />



 Come explore the world of healthcare by training with us! 

 <br />

						</div>

		

	<!-- FORM -->

				<?php include("./includes/form.php"); ?>

				<!-- /FORM -->

	



						

					</div>

				</div>

				</div>

				</div>

				</div>

				</div>

				</div>

				</div>

			</div>

			

			

				

<?php include '../includes/footer.php'; ?>

	  </div>



				</div>

				</div>

				</div>

				</div>

				</div>



			</div>

			

		</div>

	</div>



</div>

</body>

</html>
