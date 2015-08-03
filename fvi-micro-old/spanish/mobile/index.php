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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>


</head>

<body>

<!-- Google Tag Manager floridavocational.com 10.15.13 -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NTVC6N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NTVC6N');</script>
<!-- End Google Tag Manager -->


<div class="mainwrapper">

  <div id="header">

		

		<div align=right class="phone"><a href="tel:1-877-352-6044" onClick="_gaq.push(['_trackEvent', 'ClickToCall', 'Click', '877-352-6044']);" target="_self"><img src="images/call icon.gif" width="18" height="20" /><?php echo $tfn; ?></a></div>

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

						  <h1>¡Bienvenido a FVI!</h1>

					      Florida Vocational Institute ofrece entrenamiento accesible en una variedad de carreras en el campo de la salud. Contáctanos hoy para más información. Sólo presiona el número arriba o completa la forma. <br />

					      <br />



 Ven y explora el mundo del cuidado de la salud con nosotros.  

 <br />

						</div>

		

	<!-- FORM -->

				<?php include("includes/form.php"); ?>

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

			

			

				
<div class="footer">  <p align="center" class="footer">&nbsp;</p>
	<a href="privacy.html" target="_blank">Política de Privacidad</a> | <a href="terms.html" target="_blank">Términos y Condiciones</a><br/><br />
	<p><strong></strong>7757 West Flagler Street, Suite 220, Miami, FL 33144</strong></p>
      <p align="center" class="footer"> Para más información acerca de nuestras tasas de graduación, la deuda media de los estudiantes que completaron el programa, y otra información importante,<br />
      por favor visita nuestra página web <a href="http://fvi.edu/disclosure/">http://fvi.edu/disclosure/</a><br />
<?php include '../../includes/spanish-footer.php'; ?>

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
