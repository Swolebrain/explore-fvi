<?php include 'includes/tfn.php'; ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asistente Medico Online</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/banner/flexslider.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/expand.js"></script>
<script type="text/javascript">
var $j = jQuery.noConflict();
$j(function() {
    $j("#demo1 h3.expand").toggler();
    $j("#demo2 h3.expand").toggler({initShow: "div.collapse:eq(0)"});

    $j("#demo1").expandAll({
      trigger: "h3.expand",
      ref: "h3.expand",
      showMethod: "slideDown",
      hideMethod: "slideUp"
    });
    $j("#demo2").expandAll({
      trigger: "h3.expand",
      ref: "h3.expand",
      showMethod: "slideDown",
      hideMethod: "slideUp",
      oneSwitch : false
    });
});

</script>


</head>

<body>
<?php include 'includes/tagmanager.php'; ?>
<div id="wrapper" class="innerpage"> 
  <!-- header starts -->

       <?php include 'includes/menu.php'; ?>
      </div>
    </div>
  </div>
  <div class="banner_wrapper banner_wrapperinner med">
    <div class="banner_inner">
      <div class="banner">
        <div class="slide banner1" >
          <div class="info">
            <!--<h2 class="bannertitle">Get the career <br>
              training you need! </h2>
            <h3 class="bannertitle"> Advance your Career. </h3>-->
          </div>
         <!-- <img class="form_btm" src="images/banner_inner.png">--> </div>
      </div>
        <?php include 'includes/form.php'; ?>
          <div style="clear:both"></div>
  <!-- body starts -->
  <div class="body_wrapper">
    <div class="body_inner">
      <div class="content_left_inner">
        <h2 class="tag1">Asistente Medico Online</h2>
                       <p>El programa de asistente médico online está diseñado para formar a los estudiantes en todos los aspectos relevantes de la gestión de la oficina médica:</p>
                           <ul>
                                <li>Recepción</li>
                                <li>Reserva de citas</li>
                                <li>La administración de registros médicos</li>
                                <li>Informática</li>
                                <li>La facturación del seguros médicos</li>
                                <li>Preparar a los pacientes para los exámenes físicos y cirugías menores</li>
                            </ul>
                           
<h3>Realización de exámenes médicos especializados, entre ellos:</h3>
                            <ul>
                                <li>Análisis de orina</li>
                                <li>Recogida de muestras biológicas</li>
                                <li>Flebotomía</li>
                                <li>EKG</li>
                                <li>Rayos X Limitados</li>
                                <li>Procesamiento y registro de datos farmacológicos</li>
                           </ul>
<p>Los graduados de este programa estarán preparados con las habilidades y la experiencia necesaria para trabajar con un nivel de entrada adecuado en los consultorios médicos, clínicas y diversas prácticas médicas. El programa online de asistente  médico tiene 70% online y el resto será complementado en los laboratorios del campus.</p>

    
<!--<h3>Why Choose FVI?</h3>
                            <ul>
                                <li>Small class sizes</li>
                                <li>Flexible class schedules</li>
                                <li>Job placement assistance</li>
                                <li>Affordable training</li>
                                
                           </ul>
 <p>Come explore the world of healthcare by training with us!</p>            
        <div style="clear:both"></div>-->
        
        
        
      </div>
      <div class="content_right mtopinnerright">
        
    
       <div class="rightwhycontent">
<?php include 'includes/why.php'; ?>

</div>
       

        </div>
         <div style="clear:both"></div>
        
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
    </div>
  </div>
  <!-- body ends -->
  <div class="footer_wrapper">
    <div class="footer_inner">
	<div class="left">
    © <?php include 'includes/footer.php'; ?></div>
</div>
  </div>
  <div style=" clear:both"></div>
</div>
<script src="js/AC_ActiveX.js" type="text/javascript"></script> 
<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>
<?php include '../includes/ynot-api.php'; ?>
</body>
</html>
