<?php include 'includes/tfn.php'; ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Application Development Engineer</title>
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
       <h2 class="tag1">Web Application Development Engineer</h2>
              <p>IT coding careers are in high demand. According to the U.S. Department of Labor the job outlook for software developers is forecasted to grow much faster than the average for all occupations. The fast growth in web applications and mobile computing combined with the increasing use of software continues to create strong demand for software developers.</p>
              <p>Florida Vocational Institute offers an IT coding certificate that is designed for someone with no programing experience to learn how to develop websites and web based applications in less than 10 months.</p>
              <p>The IT coding certificate is designed to teach you to code web sites and prepare you for a career as an IT Coder. You can expect to learn the basic foundations of coding using the latest tools and technologies companies are using today. Our instructors take a hands on approach and work closely with you to ensure you gain the skills necessary to succeed.</p>
              <p>The coding certification courses will teach you how to develop web sites and use HTML, CSS, and JavaScript as well as popular tools like WordPress. Once you master these skills you will learn the fundamentals of database technologies. You will also have an opportunity to learn how to develop more exciting applications using PHP and technologies from Microsoft such as .NET.</p>             
              <p>Our students will learn how to work in teams, as most software projects are team based. You will have an opportunity to use tools and techniques in use in the IT marketplace and best practices methodologies like Agile. Each major step of the program will include a project where you put your learning into action.</p>
              <h3>Careers in IT Coding Certification</h3>
              <p>Career opportunities in IT coding, The Bureau of Labor Statistics expects careers for web developers to grow 20% between 2012 and 2022. The career services team at FVI will work with you to provide internships during training and upon graduating with your coding certification and assist you in finding a great career as a IT coder. FVI maintains strong working relationships with top companies in the area so we can match your passion and ability to career opportunities.  Contact us today and learn more about earning your coding certification with FVI today!</p>
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
