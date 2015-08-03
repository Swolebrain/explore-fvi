<?php include 'includes/tfn.php'; ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Programa Web y Desarrollo de Aplicaciones</title>
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
  <div class="banner_wrapper banner_wrapperinner web">
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
        <h2 class="tag1">Programa Web y Desarrollo de Aplicaciones</h2>
             <p>Las carreras de Web y Desarrollo de Aplicaciones están en alta demanda. Según el Departamento de Trabajo de Estados Unidos las perspectivas de empleo para los desarrolladores de software se prevé que crezca mucho más rápido que el promedio para todas las ocupaciones. El rápido crecimiento de las aplicaciones web y la informática móvil esta combinado con el creciente uso de software creando una fuerte demanda de los desarrolladores de software.</p>
              <p>Florida Vocational Institute ofrece un programa en web y desarrollo de aplicaciones que está diseñado para alguien sin experiencia en programación para aprender a desarrollar sitios web y aplicaciones web en menos de 10 meses.</p>
              <p>El curso web y desarrollo de aplicaciones está diseñado para enseñar a codificar sitios web y prepararse para una carrera como Coder IT. En este curso aprenderás los fundamentos básicos de la codificación utilizando las últimas herramientas y tecnologías que las empresas están utilizando hoy en día. Nuestros instructores están enfocados para trabajar estrechamente contigo para asegurar la adquisición de las habilidades necesarias para que logres el éxito deseado.</p>
              <p>El curso te enseñará cómo desarrollar sitios web y el uso de HTML, CSS y JavaScript, así como herramientas populares como WordPress. Una vez que domines estas habilidades aprenderás los fundamentos de las tecnologías de bases de datos. También,  tendrás la oportunidad de aprender a desarrollar aplicaciones más interesantes utilizando PHP y tecnologías de Microsoft como .NET.</p>             
              <p>Nuestros estudiantes aprenderán a trabajar en equipo, ya que la mayoría de los proyectos de software se basan equipo. Tendrás la oportunidad de utilizar herramientas y técnicas basadas en las tecnologías y metodologías del mercado actual como Agile. Cada paso importante del programa incluirá un proyecto donde podrás en práctica lo aprendido.</p>
              <h3>Web y Desarrollo de Aplicaciones</h3>
              <p>Las oportunidades de empleo en el desarrollo de páginas web son extensas. La Oficina de Estadísticas Laborales espera un crecimiento del 20% entre el 2012 al 2022 para las carreras de desarrolladores web. El equipo de servicios estudiantiles en FVI trabajará contigo para proporcionar pasantías durante el entrenamiento y después de graduarte y ayudarte a encontrar un buen empleo en el que puedas desarrollarte como un ingeniero de Web y desarrollado de aplicaciones. FVI mantiene sólidas relaciones de trabajo con las principales empresas de la zona para que podamos coincidir con tu pasión y capacidad brindándote las oportunidades de esta carrera.</p>
              
                           
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
