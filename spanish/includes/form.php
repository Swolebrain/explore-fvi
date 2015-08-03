  <!-- login starts -->
      <div class="login_section_outer login_section_outer_inner">
        <div class="login_section login_section_inner">
          <div class="login_header" style=" border-width:0 0 4px 0 !important">
            <div class="title"><span>Solicita Información</span><br>
              Florida Vocational Institute - Su trayectoria profesional comienza aquí!</div>
          </div>
          <div class="prog_outer">
            <div id='stat_bar' class="prog_outer_inner"></div>
          </div>
          <div class="formsteps">
            <div id="h_step1" class="spep_1"><span>1</span>Paso 1<br>
              Carrera</div>
            <div id="h_step2" class="spep_2"><span>2</span>Paso 2<br>
              Contacto
            </div>
            <div id="h_step3" class="spep_2"><span>3</span>Paso 3<br>
              Confirmar
            </div>  
          </div>
          
          <script type="text/javascript">
function CheckForm(theform)
{

//  alert('CheckForm');




    if(theform.level_of_education_id.value == "")
    {
    alert("Please enter your level of education");
    theform.level_of_education_id.focus();
        return false;
    }
   
    if(theform.program_id.value == "")
    {
    alert("Please enter your program of interest");
    theform.program_id.focus();
        return false;
    }

    if(theform.inf_field_FirstName.value == "")
    {
    alert("Please enter your first name");
    theform.inf_field_FirstName.focus();
        return false;
    }

    if(theform.inf_field_LastName.value == "")
    {
    alert("Please enter your last name");
    theform.inf_field_LastName.focus();
        return false;
    }

    if(theform.inf_field_phone.value == "")
    {
    alert("Please enter your phone number");
    theform.inf_field_phone.focus();
        return false;
    }

    if(theform.inf_field_Email.value == "")
    {
    alert("Please enter your email address");
    theform.inf_field_Email.focus();
        return false;
    }
    if(theform.inf_field_Email.value.length > 0 )
    {
      var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
        if(!pattern.test(theform.inf_field_Email.value))
        {
          alert("Please enter valid email address");
        theform.inf_field_Email.focus();
            return false;
        }


}}

function setloc(m)
{
    
       var e = m.value;
        if(e == 5167 || e ==4826 || e ==4897 || e ==5168)
         {
             document.getElementById("location_id").value=1169;
//alert('eng');
    //    alert(document.getElementById("location_id").val);

         }
	else
	{
            document.getElementById("location_id").value=875;
//alert('spa');
// alert(document.getElementById("location_id").val);
        
	}
   
}
</script>
          <div class="information_form">
            <form action="http://api.ynotlms.com/leads.redirect" target="_top" method="post" id="frm_post" onSubmit="return CheckForm(this); ">
              <input type="hidden" name="redirect_url" value="http://explore.fvi.edu/spanish/thanks.php">
              <input type="hidden" name="address" id="address" value="">
              <span id="step1">
              	  
	                
	              </select>
	              <label>¿Qué programa te gustaría estudiar?<br>
	              </label>
	              <select  class="input_1" name="program_id" id="program_id" onclick="setloc(this)">
	               <option value="" selected="">Primero elija un programa</option>
                    <option value="5167">Seguridad Informática y Cloud Professional Engineer</option>     
                    <option value="5168">Web Ingeniero de Desarrollo de Aplicaciones</option>
                    <option value="4826">Asistente Médico Online</option>
                    <option value="4897">Técnico en Farmacia</option>
                    <option value="2213">Asistente de Enfermería con el HHA</option>

                    <option value="2211">Asistente Médico</option>
                    <option value="2212">Técnico de Cuidado al Paciente</option>
	              </select>
            <input type="hidden"  class="input_1"  name="location_id" id="location_id" value="" >
              </span>
              <span id="step2" style="display:none">
              	  <div class="left">
              	  		<label>Nombre<br>
              	  		</label>
	              		<input type="text"   class="input"  name="first_name" id="first_name" >
	           		</div>
	           		<div  class="right">
	              		<label>Apellido<br>
              	  		</label>
	              		<input type="text"   class="input"  name="last_name" id="last_name" >
	              </div>
	              <div class="left">
              	  		<label>Teléfono Principal<br>
              	  		</label>
	              		<input type="text"   class="input"  name="day_phone" id="day_phone" >
	           		</div>
	           		<div  class="right">
	              		<label>Correo electrónico<br>
              	  		</label>
	              		<input type="text"   class="input"  name="email" id="email" >
	              </div>
	           </span>
	           <span id="step3" style="display:none">
				   <div class="left">
              	  		<label>Dirección 1<br>
              	  		</label>
	              		<input type="text"   class="input"  name="street1" id="street1" >
	           		</div>
	           		<div  class="right">
	              		<label>Dirección 2<br>
              	  		</label>
	              		<input type="text"   class="input"  name="street2" id="street2" >
	              </div>
	              <div class="left">
              	  		<label>Ciudad<br>
              	  		</label>
	              		<input type="text"   class="input"  name="city" id="city" >
	           		</div>
	           		<div  class="right">
	              		<label>Estado<br>
              	  		</label>
	              		<input type="text"   class="input"  name="state" id="state" >
	              		 </div>
	              		 <div class="center">
              	  		<label>Código Postal<br>
              	  		</label>
	              		<input type="text"   class="input"  name="zipcode" id="zipcode" >
	           		</div>
	           		              	<p style="font-size:12px; line-height:22px; text-align:justify;">Sabemos que estás emocionado por comenzar a trabajar en tu nueva carrera.!! Al hacer clic en el botón del formulario, entiendo que Florida Vocational Institute puede llamarme o enviarme un texto sobre los servicios Educacionales que ofrece al número de teléfono proporcionado, incluyendo un número de teléfono móvil, utilizando la tecnología automatizada. Mi información sólo será utilizada por Florida Vocational Institute.
</p>              </span>

	           		</span>
              <div class="left"> <span class="calltext">LLamenos o complete el siguiente formulario.</span><br>
                <a href="tel:<?php echo $tfn; ?>"><span class="phno"><?php echo htmlentities($tfn); ?></span></a></div>
              <div class="right">
                <input class="button" name="NEXT STEP" id="NEXT_STEP" type="button" value="Siguiente Paso">
              </div>
              <input type="hidden" name="lead_source_id" value="SUBMIT" />

                        </form>
          </div>
          <div class="clear"></div>
        </div>
        <br>
        <img class="form_btm" src="images/form_btm.png"> </div>
      <!-- login ends --> 
    </div>
  </div>
