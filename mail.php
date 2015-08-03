<?php
$admin_email="ashly@webnamaste.com";
$strSubject1="Please find the Enquiry Details below";

$location_id=$_POST['location_id'];

$program_id=$_POST['program_id'];

$first_name=$_POST['first_name'];

$last_name=$_POST['last_name'];
$day_phone=$_POST['day_phone'];
$email=$_POST['email'];
$street1=$_POST['street1'];
$street2=$_POST['street2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zipcode=$_POST['zipcode'];
$strMessage = "Location ID - ";

$strMessage .= $location_id;

$strMessage .= "<br />";

$strMessage .= "<br />";

$strMessage .= "Program Id - ";

$strMessage .= $program_id;

$strMessage .= "<br />";

$strMessage .= "<br />";
$strMessage .= "First Name - ";

$strMessage .= $first_name;

$strMessage .= "<br />";

$strMessage .= "<br />";
$strMessage .= "Last Name - ";

$strMessage .= $last_name;

$strMessage .= "<br />";

$strMessage .= "<br />";

$strMessage .= "Day Phone - ";

$strMessage .= $day_phone;

$strMessage .= "<br />";

$strMessage .= "<br />";

$strMessage .= "Email- ";

$strMessage .= $email;

$strMessage .= "<br />";

$strMessage .= "<br />";


$strMessage .= "Street1 - ";

$strMessage .= $street1;

$strMessage .= "<br />";

$strMessage .= "<br />";

$strMessage .= "Street2 - ";

$strMessage .= $street2;

$strMessage .= "<br />";

$strMessage .= "<br />";


$strMessage .= "City - ";

$strMessage .= $city;

$strMessage .= "<br />";

$strMessage .= "<br />";

$strMessage .= "State - ";

$strMessage .= $state;

$strMessage .= "<br />";

$strMessage .= "<br />";


$strMessage .= "Zipcode - ";

$strMessage .= $zipcode;

$strMessage .= "<br />";

$strMessage .= "<br />";



$strMessage .= "From - ";

$strMessage .= $email;

$strMessage .= "<br />";

$strMessage .= "<br />";


			$body.=$strMessage;

			$body.="<br /><br /><br />";

			$body.="Thanks, <br />Florida Vocational Institute";

			$body.="<br />";

			

			

			$header = "";

		    $header .= "From: ".$email."\r\n";

		    $header .= "Reply-To: ".$email."\r\n";

		

		    $header .= "MIME-Version: 1.0\n";

			$header .= "Content-type: text/html; charset=utf-8\n";

		    $header .= "Content-Transfer-Encoding: 7bit\n\n";

		   

			@mail($admin_email,$strSubject1,$body,$header);

			print "<script>location.href='thanks.php'</script>";