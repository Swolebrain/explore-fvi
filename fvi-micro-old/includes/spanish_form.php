<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<form method="post" id="myform" name="myform" action="https://api.ynotlms.com/leads.redirect" onSubmit="return check();">
<input type="hidden" name="source" value="http://www.floridavocational.com/spanish"/>
<input type="hidden" name="campus" value="" id="campus" />
<input type="hidden" name="ad_source" value="" />
<input type="hidden" name="xxTrustedFormToken" value="" />
<input type="hidden" name="utm_source" value="" />
<input type="hidden" name="utm_medium" value="" />
<input type="hidden" name="utm_content" value="" />
<input type="hidden" name="utm_campaign" value="" />

<input type="text" 
         class="input_1" 
         id="first_name" 
         name="first_name" 
         value="* Nombre" 
         onFocus="javascript:this.value='';" 
         onBlur="if (this.value==''){this.value='* Nombre'};" 
         />
		 <div class="clear">&nbsp;</div>


<input type="text"  
         class="input_1" id="last_name" 
         name="last_name" 
         value="* Apellido" 
         onFocus="javascript:this.value='';" 
         onBlur="if (this.value==''){this.value='* Apellido'};"
         />
		 <div class="clear">&nbsp;</div>

<input type="text"  
         class="input_1" 
         id="main_phone" 
         name="day_phone"
         value="* Teléfono" 
         onFocus="javascript:this.value='';" 
         onBlur="if (this.value==''){this.value='* Telefono'};"
         />

<div class="clear">&nbsp;</div>

<input type="text"  
         class="input_1" 
         id="zip_code" 
         name="zipcode"
         value="* Código Postal" 
         onFocus="javascript:this.value='';" 
         onBlur="if (this.value==''){this.value='* Código Postal'};"
         />

<div class="clear">&nbsp;</div>

<input type="text"  
         class="input_1" 
         id="email" 
         name="email" 
         value="* Correo Electrónico"
         onFocus="javascript:this.value='';" 
         onBlur="if (this.value==''){this.value='* Correo Electronico'};"
         />
		 
		 <div class="clear">&nbsp;</div>

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
            echo '<select id="program_id" class="input_1" name="program_id" onFocus="javascript:this.value = \'\';" onBlur="if (this.value == \'\') {this.value = \'* Program of Interest\'} ;" /> ';
        echo  '<option value="" selected="selected">* Program of Interest</option>';
        echo '</select>';
        echo '<input type="hidden" name="redirect_url" value="http://explore.fvi.edu/spanish/thankyou.php" />';
    }
?>
<!-- <select id="program_of_interest" class="input_1" name="program_id" onFocus="javascript:this.value='';" onBlur="if (this.value==''){this.value='* Programa de interés '};" />
  <option value="0" selected="selected">* Programa de interés</option>
  <optgroup label="Programas Académicos:">
  <option value="Asistente de salud en el hogar">Asistente de salud en el hogar</option>
  <option value="Electrocardiografia">Electrocardiografía</option>
  <option value="Flebotomia">Flebotomía</option>
  <optgroup label="Programas Profesionales:">
  <option value="Tecnico en cuidado del paciente">Técnico en cuidado del paciente</option>
  <option value="Asistente medico">Asistente médico</option>
  <optgroup label="Programas de Educación Continúa:">
  <option value="OSHA">OSHA</option>
  <option value="Violencia domestica ">Violencia doméstica </option>
  <option value="VIH/SIDA">VIH/SIDA</option>
  <option value="Control de infecciones">Control de infecciones</option>
  <option value="Resucitacion pulmonar (CPR)">Resucitación pulmonar (CPR) </option>
</select> -->

<div class="clear">&nbsp;</div>

<label>&nbsp;</label><label style="text-align:left;"><span>*</span> - requerido</label>
<div class="clear">&nbsp;</div>
		<p style="font-size:10px;line-height: 15px;">Sabemos que estás emocionado de empezar a trabajar en tu nueva carrera. Al hacer clic en el botón del formulario en la página, entiendo que Florida Vocational Institute puede llamar o contactarme sobre los servicios educativos en el número de teléfono proporcionado, incluyendo un número de teléfono móvil, utilizando la tecnología automatizada. Su información sólo será utilizada por Florida Vocational Institute.</p>

<!--Hidden Fields -->
    
    <input type="hidden" name="location_id" value="875" />
    <input type="hidden" name="lead_source_id" value="<?php echo $sid; ?>" />
    <input type="hidden" name="keyword" value="<?php echo $keyword; ?>" />
    <input type="submit" name="submit" value="Submit" class="button_1" />

</form>
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
<script>
function check() {

    var validate = true;
       
        var fname = $('input[name="first_name"]')
        if (fname.val() == '' || fname.val() == '* Nombre') {
            validate = false;
            alert('Please enter your first name!');
            return validate;
        }

        var lname = $('input[name="last_name"]')
        if (lname.val() == '' || lname.val() == '* Apellido') {
            validate = false;
            alert('Please enter your last name!');
            return validate;
        }

        var phone = $('input[name="day_phone"]')
        if (phone.val() == '' || phone.val() == '* Teléfono' || !phone.val().match(/^\d{0,10}$/)) {
            validate = false;
            alert('Please enter a numeric phone number!');
            return validate;
        }

         var zip = $('input[name="zipcode"]');
        if (zip.val() == '' || zip.val() == '* Código Postal' || !zip.val().match(/^\d{0,10}$/)) {
            validate = false;
            alert('Please select your zip!');
            return validate;
        }

        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var email = $('input[name="email"]')
        if (email.val() == 0 || !emailReg.test(email.val())) {
            validate = false;
            alert('Please a valid email address!');
            return validate;
        }
        var program = $('#program_id');
        if (program.val() == 0) {
            validate = false;
            alert('Please select a program!');
            return validate;
        }
        return validate;
        //$('#form_post').submit();
}
</script>
