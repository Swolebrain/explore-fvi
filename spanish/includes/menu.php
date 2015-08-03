 <!-- header starts -->
  <div class="topbar_outer">
    <div class="topbar_inner onlyondesktop">Hable con nuestros representantes de admisiones<a href="tel:<?php echo $tfn; ?>"><span><?php echo htmlentities($tfn); ?></span></a></div>
    <div class="topbar_inner onlyonmobile">CALL NOW<a href="tel:<?php echo $tfn; ?>"><span><?php echo htmlentities($tfn); ?></span></a></div>
  </div>
  <div class="header_wrapper">
    <div class="header_inner">
      
      <div class="logo"><a href="index.php"><img src="images/fvi-logo.png" alt="Florida Vocational Institute"></a></div>
<a href="http://explore.fvi.edu/" class="spanish_button">English</a>
      <div class="rep" style="display:none"><span>Habla con nuestros representantes de admisiones!</span></div>
      <div class="phone_desktop" id="top1"><span><a href="tel:<?php echo $tfn; ?>"><span class="phone"><?php echo htmlentities($tfn); ?></span></a></span></div>
      <div class="topmenu">

<script type="text/javascript">
<!--//--><![CDATA[//><!--
startList = function() {

if (document.getElementById) {
navRoot = document.getElementById("mobilemenu");
for (i=0; i<navRoot.childNodes.length; i++) {
node = navRoot.childNodes[i];
if (node.nodeName=="LI") {
node.onclick=function() {
this.className = (this.className == "on") ? "off" : "on";
}}}}}
window.onload=startList;
//--><!]]>
</script>

<ul class="desktopmenu">
    <li><a href="index.php">Inicio</a></li>
    <li><a href="aboutus.php">Acerca de Nosotros</a></li>
    <li><a href="programs.php">Programas</a> </li>
    <li><a href="locations.php">Localización</a> </li>
    <li><a href="accreditation.php">Acreditación</a></li>
</ul> 
        
<!-- Please update the below menu aswell for the mobile view -->

<ul id="mobilemenu" style="display:none" >
    <li class="home"><a href="#">Menu</a> 
    <ul>
     <li><a href="index.php">Inicio</a></li>
    <li><a href="aboutus.php">Acerca de Nosotros</a></li>
    <li><a href="programs.php">Programas</a> </li>
    <li><a href="locations.php">Localización</a> </li>
    <li><a href="accreditation.php">Acreditación</a></li>
    </ul>
    </li>
</ul>


