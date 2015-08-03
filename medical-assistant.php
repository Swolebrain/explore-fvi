<?php include 'includes/tfn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Medical Assistant</title>
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
  <div class="banner_wrapper banner_wrapperinner med-ass">
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
        <h2 class="tag1">Medical Assistant</h2>
   <p>The Medical Assistant program at Florida Vocational Institute prepares you for an exciting career in the healthcare industry. Medical Assisting is one of the more popular healthcare positions that are currently projected to grow in upcoming years. According to the U.S. Bureau of Labor Statistics, medical assisting employment rates are expected to grow 31% from 2010 to 2020.* Florida Vocational Institute is committed to providing its students with the very best training to qualify them to take advantage of these employment opportunities!
Our graduates are trained for entry-level positions in hospitals, doctors' offices, urgent care clinics, and several other medical facilities in all the relevant aspects of administrative, laboratory, and clinical procedures. </p>
<strong>These include:</strong><br><br>

        <ul>
<li>Bookkeeping, record management, medical supply inventory, and appointment scheduling</li>     	
<li>Understanding of insurance claims, billing, and prescription orders</li>   
<li>Preparation of patients for examinations</li>
<li>Completion of routine clinical tasks such as recording patient history, collecting vital signs, blood pressure, height, temperature, and weight</li>
<li>Ability to perform medical and lab tests including urinalysis, phlebotomy, and limited X-rays</li>
<li>Completing blood samples, injections, and suture removals</li>
<li>Providing therapeutic care and patient education</li>
</ul>
        
  
<p>At Florida Vocational Institute, you'll receive a comprehensive education in a supportive environment. Come explore the world of healthcare by pursuing a Medical Assistant career by training with us!</p>
        <div style="clear:both"></div>
       
        
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
