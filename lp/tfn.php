<html <link rel="shortcut icon" type="images" href="/favicon.ico"/>
<link rel="shortcut icon" type="images" href="http://explore.fvi.edu/images/favicon.ico"/>
</html>

<?php
ob_start();
//session_start();
if(isset($_GET['Lead_Source']))
        $_SESSION['Lead_Source'] = strtolower($_GET['Lead_Source']) == 'Direct Mail' ? 104 : $_GET['Lead_Source'];

//echo $_GET['tfn'];
//var_dump($_GET);
if(isset($_GET['tfn']))
        $_SESSION['TFN'] = $_GET['tfn'];
$lead_source = empty($_SESSION['Lead_Source']) ? 5 : $_SESSION['Lead_Source'];
$tfn = empty($_SESSION['TFN']) ? "305-570-4471" : $_SESSION['TFN'];
?>

