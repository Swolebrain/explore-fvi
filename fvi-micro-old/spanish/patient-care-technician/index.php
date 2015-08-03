<?php

$post_form_program_id = 2212;
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
		header('Location:http://'.$_SERVER["HTTP_HOST"].'/spanish/mobile/index.php?source=cookie');
		
	/* If no cookies are set, run the function and forward as appropriate */
	} else {
		include('mobile_detection.php');
		mobile_device_detect(true,true,true,true,true,true,'http://'.$_SERVER["HTTP_HOST"].'/spanish/mobile/index.php?source=function',false);
	
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

	<title>Florida Vocational Institute | Técnico de Atención al Paciente</title>

	<meta name="Description" content="Florida Vocational Institute - learn everything to know about Patient Care Technician  Training." />

	<meta name="Keywords" content=" Patient Care Technician Training" />
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="shortcut icon" href="" type="image/x-icon"> 


</head>

<body>
<?php 
include_once('../../includes/tracking_code.php');
?>
<!-- Google Tag Manager floridavocational.com 10.15.13 -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NTVC6N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NTVC6N');</script>
<!-- End Google Tag Manager -->


<div class="layout">

<div class="header">


		
<div id="phone">¡Llama Ya! 
          <strong class="phoneColor"><?php echo $tfn; ?></strong>


	</div>
</div>



	<!-- MAIN -->



	<div class="main">


		<div class="page">



			<div class="content">
			  <p>¿Buscas una carrera en el área de la  salud?</p>
<p>Florida Vocational Institute ofrece  el programa de Técnico de Cuidado al Paciente, el cual te preparara en <strong>corto tiempo</strong> para una carrera de nivel básico en hospitales,  centros de diagnóstico, clínicas y otros establecimientos médicos. </p>
<p>En el programa de Técnico de Cuidado  al Paciente obtendrás conocimientos de Flebotomía, Electrocardiografía y  Asistente de Enfermería/HHA, lo cual te ayudara a obtener licencias nacionales  y estatales, brindándote mejores oportunidades laborales en cualquier lugar de  los Estados Unidos.</p> <p>Nuestros cursos son en <strong>ESPAÑOL</strong> con la terminología en inglés </p>
<ul>
  <li>Ofrecemos ayuda financiera para aquellos que califique </li>
  <li>Ayuda de colocación de empleo a todos nuestros graduados</li>
  <li>Horarios flexibles en el día y la noche</li>
  <li>También ofrecemos los programas de Flebotomía, Electrocardiografía y Asistente de Enfermería/HHA en solo dos meses</li>
</ul>

<p>&nbsp;</p>
</div>



		</div>



		<div class="sidebar">
        
        

<div class="request">


<div class="inner">

<h2>¡Solicita Informaci&oacute;n Hoy!</h2>

<script src="script/val.js" language="javascript" type="text/javascript"></script>
<?php
include_once('../../includes/spanish_form.php');
?>

				</div>


			</div>


		</div>




		<div class="clear">&nbsp;</div>


	</div>

	<!-- /MAIN -->

	<div class="interest">



	<h2><strong>Recuerda, tu futuro depende de tí. LLAMA YA! 305-665-1911</strong></h2>



<h3>Estamos en el corazón de Miami, 
Palmetto y Bird Road



  </h3>
  </div>


	<div class="footer">  <p align="center" class="footer">&nbsp;</p>
	<a href="privacy.html" target="_blank">Política de Privacidad</a> | <a href="terms.html" target="_blank">Términos y Condiciones</a><br/><br />
	<p><strong></strong>7757 West Flagler Street, Suite 220, Miami, FL 33144</strong></p>
      <p align="center" class="footer"> Para más información acerca de nuestras tasas de graduación, la deuda media de los estudiantes que completaron el programa, y otra información importante,<br />
      por favor visita nuestra página web <a href="http://fvi.edu/disclosure/">http://fvi.edu/disclosure/</a><br />
<?php include '../../includes/spanish-footer.php'; ?></div>


</div>


</body>

</html>
