 <!-- header starts -->
  <div class="topbar_outer">
    <div class="topbar_inner onlyondesktop">Talk to an admissions representative<span> <?php echo htmlentities($tfn); ?></span></div>
    <div class="topbar_inner onlyonmobile">CALL NOW<span> <?php echo htmlentities($tfn); ?></span></div>
  </div>
  <div class="header_wrapper">
    <div class="header_inner">
      <div class="logo"><a href="index.php"><img src="images/Logo.jpg" alt="FVI"></a></div>
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

