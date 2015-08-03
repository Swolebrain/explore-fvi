<?php include 'includes/tfn.php'; ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Patient Care Technician</title>
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
  <div class="banner_wrapper banner_wrapperinner pat">
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
        <h2 class="tag1">Técnico de Cuidado al Paciente</h2>
       
              <p>El programa de Técnico de Cuidado al Paciente en Florida Vocational Institute ofrece a los estudiantes la comprensión fundamental de una carrera en la atención al paciente. Aprenderás  cómo proporcionar los cuidados necesarios para ayudar al médico y consolar a tu paciente. Como técnico de cuidado al paciente aprenderás la manera adecuada para recoger los fluidos corporales para pruebas, como desinfectar la habitación de un paciente, y asistir al paciente en sus necesidades básicas. Bajo la guía de un médico o profesional, los estudiantes aprenderán cómo obtener  la sangre y controlar  los niveles de glucosa, signos vitales y proveer las necesidades de asistencia médica domiciliaria a los pacientes. Después de haber sido equipado con el conocimiento técnico, aprenderás cómo manejar la amplia gama de responsabilidades de un técnico de Cuidado al Paciente con seguridad.</p>
          <p>Los graduados del programa de Técnico de Cuidado al Paciente en Florida Vocational Institute están preparados para encontrar empleo en los hospitales, hogares de ancianos y centros de cuidados prolongados. Como Técnico de Cuidado al Paciente, Tu trabajo es centrarse en el cuidado de los pacientes bajo la supervisión de personal médico. Necesarios donde hay pacientes, los Técnico de Cuidado al Paciente están en alta demanda en la mayoría de las instalaciones médicas.</p>
          
          
                   
        <div style="clear:both"></div>
        
        
        
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
<?php include 'includes/ynot-api.php'; ?>
</body>
</html>
