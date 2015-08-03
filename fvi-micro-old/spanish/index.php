<?php
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
		header('Location: http://'.$_SERVER["HTTP_HOST"].'/spanish/mobile/index.php?source=cookie');
		
	/* If no cookies are set, run the function and forward as appropriate */
	} else {
		include('mobile_detection.php');
		mobile_device_detect(true,true,true,true,true,true,'http://'.$_SERVER["HTTP_HOST"].'/spanish/mobile/',false);
	
		/* if it makes it this far, set the desktop cookie */
		$appname = "mobileDemo";
		setcookie("desktopCookie", $appname, time()+60*60*24*365); // set cookie to expire in one year
	}
}

$tfn = '305-665-1911';
$sid = 5;
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

	<title>Florida Vocational Institute </title>

	<meta name="Description" content="Florida Vocational Institute - Affordable training in a variety of healthcare careers." />

	<meta name="Keywords" content=" Florida Vocational Institute - Affordable training in a variety of healthcare careers" />
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="shortcut icon" href="" type="image/x-icon"> 

</head>

<body>
<?php
include_once('../includes/tracking_code.php');
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
			<h1>¡Bienvenido a Florida Vocational Institute!</h1>
			  <p>Florida Vocational Institute ofrece entrenamiento accesible en una variedad de carreras en el campo de la salud. Nuestros estudiantes reciben una educación completa con el apoyo de una facultad con experiencia. Con la preparación que brindamos en Florida Vocational Institute, estarás preparado para trabajar en carreras de nivel básico en el campo de la salud. Estamos comprometidos a proveer el mejor entrenamiento posible. </p>
              <p>Florida Vocational Institute ofrece:</p>

<p><strong>Programas Profesionales:</strong>             
<ul>
  <li>Asistente médico </li>
  <li>Técnico en cuidado del paciente </li>
</ul></p>
<p><strong>Programas Académicos:</strong>             
<ul>
  <li>Asistente de salud en el hogar </li>
  <li>Electrocardiografía </li>
  <li>Flebotomía </li>
</ul></p>

<p><strong>Programas de Educación Continúa:            
</strong>
<ul>
  <li>OSHA</li>
  <li>Violencia doméstica </li>
  <li>HIV/AIDS</li>
  <li>Control de infecciones </li>
  <li>Resucitación pulmonar (CPR) </li>
  <li>Y muchos más...</li>
</ul> </p>
<p><strong>¿Por qué FVI? </strong>             
<ul>
  <li>Clases pequeñas </li>
  <li>Horarios flexibles </li>
  <li>Asistencia para conseguir empleo </li>
  <li>Entrenamiento accesible </li>
</ul></p>

<p>Ven y explora el mundo del cuidado de la salud con nosotros. </p>
<p>&nbsp;</p>
</div>



		</div>



		<div class="sidebar">
        
        

<div class="request">


<div class="inner">

<h2>¡Solicita Informaci&oacute;n Hoy!</h2>

<script src="script/val.js" language="javascript" type="text/javascript"></script>
<?php
include_once('../includes/spanish_form.php');
?>


		</div>


		  </div>


		</div>




		<div class="clear">&nbsp;</div>


	</div>

	<!-- /MAIN -->

	<div class="interest">



	<h2><strong>¡Comienza Ya!</strong></h2>



<h3>Sólo llena el formulario. ¿Quieres comenzar ahora? Llámanos al 305-665-1911


  </h3>
  </div>

	<div class="footer">  <p align="center" class="footer">&nbsp;</p>
	<a href="privacy.html" target="_blank">Política de Privacidad</a> | <a href="terms.html" target="_blank">Términos y Condiciones</a><br/><br />
	<p><strong></strong>7757 West Flagler Street, Suite 220, Miami, FL 33144</strong></p>
      <p align="center" class="footer"> Para más información acerca de nuestras tasas de graduación, la deuda media de los estudiantes que completaron el programa, y otra información importante,<br />
      por favor visita nuestra página web <a href="http://fvi.edu/disclosure/">http://fvi.edu/disclosure/</a><br />
<?php include '../includes/spanish-footer.php'; ?>


</div>


</body>

</html>
