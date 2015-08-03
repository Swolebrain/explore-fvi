<?php include 'includes/tfn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Florida Vocational Institute</title>
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
  <div class="banner_wrapper banner_wrapperinner abt">
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
        <h2 class="tag1">Acerca FVI</h2>
  
<p align=justify">La misión del Florida Vocational Institute es formar a los estudiantes para convertirse en profesionales de nivel de entrada en las carreras de alta demanda. Nuestro objetivo es mejorar la empleabilidad e inspirar el crecimiento larga trayectoria de vida, mejorando así la calidad de vida de las personas en nuestra comunidad.<br/><br/>
Florida Vocational Institute abrió sus puertas de febrero de 2007. Los propietarios de Instituto Profesional Florida poseen más de una década de experiencia con los estudiantes adultos en la formación de profesionales. Florida Vocational Institute está autorizada por la Comisión Estatal de Florida por número de licencia Educación Independiente: 3441 (CIE) desde octubre de 2006. Florida Vocational Institute está aprobado por el Consejo de Enfermería de Florida para ofrecer el Número de Auxiliar de Enfermería / Programas bajo Licencia HHA / Código de prueba: 1159 (antes 792).<br/><br/>
El propósito de Florida Vocational Institute es ofrecer una capacitación accesible y con las destrezas necesarias para obtener empleo en carreras desafiantes y estimulantes. La escuela es la realización del sueño de compartir años de experiencia en la formación y la preparación de las personas para lograr éxito en una carrera gratificante. Florida Vocational Institute ofrece a sus alumnos un aire totalmente acondicionado, sala de plaza moderna, bien iluminado, proporcionando un ambiente propicio para el aprendizaje y que contiene material didáctico y equipo de audio / visual.<br/><br/>
El campus es amplio y atractivo y hay un montón de plazas de aparcamiento disponibles para los estudiantes, incluyendo un ascensor para acceder a la segunda planta. El edificio está situado cerca del transporte público y restaurantes locales.
</p>
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
