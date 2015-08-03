<?php
ob_start();
session_start();
if(isset($_GET['Lead_Source']))
        $_SESSION['Lead_Source'] = strtolower($_GET['Lead_Source']) == 'Direct Mail' ? 104 : $_GET['Lead_Source'];


if(isset($_GET['TFN']))
        $_SESSION['TFN'] = $_GET['TFN'];
$lead_source = empty($_SESSION['Lead_Source']) ? 58 : $_SESSION['Lead_Source'];
$tfn = empty($_SESSION['TFN']) ? "877.500.3145" : $_SESSION['TFN'];
$kw = empty($_SESSION['kw']) ? "" : $_SESSION['kw'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vatterott College</title>
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
<?php include '../includes/tagmanager.php'; ?>

<div id="wrapper" class="innerpage"> 
  <!-- header starts -->

<?php include '../includes/menu.php'; ?>      </div>
    </div>
  </div>
  <div class="banner_wrapper banner_wrapperinner">
    <div class="banner_inner">
      <div class="banner">
        <div class="slide banner1" >
          <div class="info">
            <!--<h2 class="bannertitle">Get the career <br>
              training you need! </h2>
            <h3 class="bannertitle"> Advance your Career. </h3>-->
          </div>
         <!-- <img class="form_btm" src="images/banner_inner.png"> --></div>
      </div>
        <?php include '../includes/form.php'; ?>
         <div style="clear:both"></div>
  <!-- body starts -->
  <div class="body_wrapper">
    <div class="body_inner">
      <div class="content_left_inner">
        <h2 class="tag1">Vatterott College Locations</h2>
        <p>With approximately 30,000 sq. ft. and 30 large, comfortable classrooms, Hunter’s facilities provide the perfect atmosphere for learning. Both the Levittown and Medford campuses are modern, functional and well equipped with the latest technology.  They are conveniently located near major parkways and roads, as well as numerous restaurants.  Both campuses are approved by the New York Education Department’s Bureau of Proprietary School Supervision (BPSS) and offer ample, well-lit parking facilities.</p>
        
        
  


<div class="rightwhycontent width">
<div style="padding:10px">
<strong style="color:#000"><a href="">Vatterott College – North Park</a></strong><br>

3601 Hempstead Turnpike Unit 19<br>
Levittown, New York 11756-1331
</div>

</div>


<div class="rightwhycontent width">
<div style="padding:10px">
<strong style="color:#000"><a href="">Vatterott College – Medford</a></strong><br>
3247 Route 112, Building 3, Suite 2<br>
Medford, New York 11763
</div>
</div>
    
    
 <div style="clear:both"></div>
   
   
   


 
    
    

              
        <div style="clear:both"></div>
        <!-- <p> <strong class="button1">Explore your possibilities with CBT College today!</strong><br>
-->
        
        
      </div>
      <div class="content_right mtopinnerright">
        
    
       <div class="rightwhycontent">
<?php include '../includes/why.php'; ?>

</div>
       

        </div>
         <div style="clear:both"></div>
        
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
    </div>
  </div>
  <!-- body ends -->
  <div class="footer_wrapper">
    <div class="footer_inner">
	<div class="left">
    © <?php echo date("Y"); ?> Vatterott College. All Rights Reserved.</div>    

<div class="right"><?php include '../includes/footer.php'; ?></div>
</div>
  </div>
  <div style=" clear:both"></div>
</div>
<script src="js/AC_ActiveX.js" type="text/javascript"></script> 
<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>
<?php include '../includes/ynot-api.php'; ?>
</body>
</html>
