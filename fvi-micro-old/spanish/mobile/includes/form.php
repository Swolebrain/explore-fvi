<SCRIPT language='JavaScript' type='text/javascript'>

function LoadRelationalList(){

 }</SCRIPT>

 

<script src="RelationalSelect1.js" language="javascript" type="text/javascript"></script>



<script type="text/javascript" src="/iefix/jquery.ie-select-width.js"></script>

<!--[if lte ie 6]>

<script type="text/javascript" src="jquery.bgiframe.js"></script>

<![endif]-->    

<script type="text/javascript"> 

$(function ()

{

    // Set the width via the plugin.

    $('select#program_of_interest').ieSelectWidth

    ({

        width : 180,

        containerClassName : 'select-container',

        overlayClassName : 'select-overlay'

    });

    

    // Set the width via CSS.

    $('select#fixed-select-css').ieSelectWidth

    ({

        containerClassName : 'select-container',

        overlayClassName : 'select-overlay'

    });

    

    // Borders and padding etc for Internet Explorer 6/7.

    $('select#select-styleable').ieSelectWidth

    ({

        containerClassName : 'select-container',

        overlayClassName : 'select-overlay'

    });

});

</script>



<script type="text/javascript"> 

function val1(f) {

var a = f.first_name.value;

if (a == '' || a == '* Nombre') {

alert ('Por favor ingrese su nombre');

f.first_name.focus();

return false;

} 



a = f.last_name.value;

if (a == '' || a == '* Apellido') {

alert ('Por favor ingrese sus apellidos');

f.last_name.focus();

return false;

}



a = f.main_phone.value;

if (a == '' || a == '* Teléfono') {

alert ('Por favor ingrese el numero de Teléfono');

f.main_phone.focus();

return false;

}



a = f.email.value;

if (a == '' || a == '* Correo Electrónico ') {

alert ('Introduzca su direccion de Correo Electrónico ');

f.email.focus();

return false;

}



var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

if(reg.test(a) == false) {

alert('Por favor introduzca una direccion de correo valida');

return false;

}



a = f.program_of_interest.selectedIndex;

if (a == 0) {

alert ('Por favor elija un Programa de Interés');

f.program_of_interest.focus();

return false;

}



return true;

}



</script><style type="text/css">

<!--

body {

	margin-top: 0px;

}

-->

</style>





<div class="form_1">

	<div class="form_1_inner">

		

		<p>* - requerido<br />

		</p>
		<div class="clear">&nbsp;</div>
		<p style="font-size:10px;line-height: 15px;">We know you are excited to get started on your new career. By clicking the button in the form on this page, I understand that Florida Vocational Institute may call or text me about educational services at the phone number provided, including a wireless number, using automated technology. Your information will only be used by Florida Vocational Institute.</p>
		<form action="https://api.ynotlms.com/leads.redirect" name="myform" method="post" id="myform" onSubmit="return val1(this);">

	

	<input type="hidden" name="source" value="<?php echo $_SERVER['SERVER_NAME'];?>/mobile" /> 



	<input name="xxRedir" value="http://<?php echo $_SERVER['SERVER_NAME'];?>/spanish/mobile/thankyou.php" type="hidden" /> 
    


<input type="hidden" name="utm_source" value="" />

<input type="hidden" name="utm_medium" value="" /> 

<input type="hidden" name="utm_content" value="" /> 

<input type="hidden" name="utm_campaign" value="" /> 





<input type="text" class="input_1" id="first_name" name="first_name" value="* Nombre" onFocus="javascript:this.value='';" onBlur="if (this.value==''){this.value='* Nombre'};"/><br />

<input type="text" class="input_1" id="last_name" name="last_name" value="* Apellido" onFocus="javascript:this.value='';" onBlur="if (this.value==''){this.value='* Apellido'};"/><br />

<input type="text" class="input_1" id="main_phone" name="day_phone" value="* Teléfono" onFocus="javascript:this.value='';" onBlur="if (this.value==''){this.value='* Teléfono'};"/><br />

<input type="text" class="input_1" id="zip_code" name="zip_code" value="* Código Postal" onFocus="javascript:this.value='';" onBlur="if (this.value==''){this.value='* Código Postal'};"/><br />

<input type="text" class="input_1" id="email" name="email" value="* Correo Electrónico "onFocus="javascript:this.value='';" onBlur="if (this.value==''){this.value='* Correo Electrónico '};"/><br />

<?php
    if(isset($post_form_program_id)){
        if($post_form_program_id == 2211){                                  //Medical assistant
            echo '<input type="hidden" name="program_id" value="2211"/>';
             echo '<input type="hidden" name="redirect_url" value="http://explore.fvi.edu/spanish/medical-assistant/thankyou.php" />';
        }elseif ($post_form_program_id == 2215) {                           //Electrocardiography
            echo '<input type="hidden" name="program_id" value="2215"/>';
             echo '<input type="hidden" name="redirect_url" value="http://explore.fvi.edu/spanish/thankyou.php" />';
        }elseif ($post_form_program_id == 2213) {                           //Nursing Assistant\/Home Health Aide
            echo '<input type="hidden" name="program_id" value="2213"/>';
             echo '<input type="hidden" name="redirect_url" value="http://explore.fvi.edu/spanish/thankyou.php" />';
        }elseif ($post_form_program_id == 2212) {                           //Patient Care Technician
            echo '<input type="hidden" name="program_id" value="2212"/>';
             echo '<input type="hidden" name="redirect_url" value="http://explore.fvi.edu/spanish/patient-care-technician/thankyou.php" />';
        }elseif ($post_form_program_id == 2214) {                           //Phlebotomy Technician
            echo '<input type="hidden" name="program_id" value="2214"/>';
             echo '<input type="hidden" name="redirect_url" value="http://explore.fvi.edu/spanish/thankyou.php" />';
        }else{
            echo '<select id="program_id" class="input_1" name="program_id" onFocus="javascript:this.value = \'\';" onBlur="if (this.value == \'\') {this.value = \'* Program of Interest\'} ;" /> ';
        echo  '<option value="" selected="selected">* Program of Interest</option>';
        echo '</select>';
         echo '<input type="hidden" name="redirect_url" value="http://explore.fvi.edu/spanish/thankyou.php" />';
        }

    }else{
            echo '<select id="program_id" class="input_1" name="program_id"  /> ';
        echo  '<option value="" selected="selected">* Program of Interest</option>';
        echo '</select>';
        echo '<input type="hidden" name="redirect_url" value="http://explore.fvi.edu/spanish/thankyou.php" />';
    }
?>

	<br/>
	 <input type="hidden" name="location_id" value="875" />
    <input type="hidden" name="lead_source_id" value="<?php echo $sid; ?>" />
    <input type="hidden" name="keyword" value="<?php echo $keyword; ?>" />
	<input type="submit" class="button_1" value="Introducir" /></form>

	</div>

</div>
<script type="text/javascript">
    var sel = $("#program_id");
    sel.empty();
    $.getJSON("http://api.ynotlms.com/locations.json?uid=360&apikey=1c3b1f91a0-5w8jnrzcqx-ptzeurrw&jsoncallback=?",
            function (data) {
                var sel = $("#program_id");
                $.each(data, function (i, item) {
                    if (item.id == 875) {
                        sel.append('<option value="">* Select Program</option>');
                        $.each(item.programs, function (i, program) {
                            sel.append('<option value="' + program.id + '">' + program.title + '</option>');
                        });
                        return false;
                    }
                });
            });
</script>

