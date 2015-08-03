 <!-- header starts -->
  <div class="topbar_outer">
    <div class="topbar_inner onlyondesktop">Talk to an admissions representative<span> <?php echo htmlentities($tfn); ?></span></div>
    <div class="topbar_inner onlyonmobile">CALL NOW<span> <?php echo htmlentities($tfn); ?></span></div>
  </div>
  <div class="header_wrapper">
    <div class="header_inner">
      <div class="logo"><a href="index.php"><img src="images/logo.png" alt="Vatterott College"></a></div>
      <div class="rep" style="display:none"><span>Talk to an admissions representative</span></div>
      <div class="phone_desktop" id="top1"><span><span class="phone"><?php echo htmlentities($tfn); ?></span></span></div>
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
   <li><a href="http://studyatvatterott.com//index.php">Home </a></li>
    <li><a href="http://studyatvatterott.com/aboutus.php">About us </a></li>
    <li><a href="http://studyatvatterott.com/programs.php">Programs</a> </li>
    <li><a href="http://studyatvatterott.com/locations.php">Locations </a> </li>
    <li><a href="http://studyatvatterott.com/accreditation.php">Accreditation</a></li>
</ul> 
        
<!-- Please update the below menu aswell for the mobile view -->

<ul id="mobilemenu" style="display:none" >
    <li class="home"><a href="#">Menu</a> 
    <ul>
     <li><a href="http://studyatvatterott.com//index.php">Home </a></li>
    <li><a href="http://studyatvatterott.com/aboutus.php">About us </a></li>
    <li><a href="http://studyatvatterott.com/programs.php">Programs</a> </li>
    <li><a href="http://studyatvatterott.com/locations.php">Locations </a> </li>
    <li><a href="http://studyatvatterott.com/accreditation.php">Accreditation</a></li>
    </ul>
    </li>
</ul>


