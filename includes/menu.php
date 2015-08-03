 <!-- header starts -->
  <div class="topbar_outer">
    <div class="topbar_inner onlyondesktop">Talk to an admissions representative<a href="tel:<?php echo $tfn; ?>"><span><?php echo htmlentities($tfn); ?></span></a></div>
    <div class="topbar_inner onlyonmobile">CALL NOW <a href="tel:<?php echo $tfn; ?>"><span><?php echo htmlentities($tfn); ?></span></a></div>
  </div>
  <div class="header_wrapper">
  
    <div class="header_inner">


    <div class="logo"><a href="index.php"><img src="images/fvi-logo.png" alt="Florida Vocational Institute"></a></div>
    <a href="http://explore.fvi.edu/spanish/" class="spanish_button">Spanish</a>
<div class="head-right">
    <div class="rep" style="display:none"><span>Talk to an admissions representative</span></div>
    <div class="phone_desktop" id="top1"><span><span class="phone"><a href="tel:<?php echo $tfn; ?>"><?php echo htmlentities($tfn); ?></a></span></span></div>
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
            <li><a href="index.php">Home </a></li>
            <li><a href="aboutus.php">About Us </a></li>
            <li><a href="programs.php">Programs</a> </li>
            <li><a href="locations.php">Locations </a> </li>
            <li><a href="accreditation.php">Accreditation</a></li>
        </ul> 
        
        <!-- Please update the below menu aswell for the mobile view -->
        
        <ul id="mobilemenu" style="display:none" >
            <li class="home"><a href="#" style="color:#0080E8">MENU</a> 
            <ul>
             <li><a href="index.php">Home </a></li>
            <li><a href="aboutus.php">About Us </a></li>
            <li><a href="programs.php">Programs</a> </li>
            <li><a href="locations.php">Locations </a> </li>
            <li><a href="accreditation.php">Accreditation</a></li>
            </ul>
            </li>
        </ul>
</div>
