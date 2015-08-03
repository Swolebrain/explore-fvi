<form method="post" id="myform" name="myform" action="https://api.ynotlms.com/leads.redirect" onSubmit="return val1(this);">

<input type="hidden" name="source" value="http://explore.fvi.edu/spanish"/>
<input type="hidden" name="campus"  value="" id="campus"/>
<input type="hidden" name="ad_source" value=""/>
<input type="hidden" name="xxTrustedFormToken" value=""/>
<input type="hidden" name="utm_source" value=""/>
<input type="hidden" name="utm_medium" value=""/>
<input type="hidden" name="utm_content" value=""/>
<input type="hidden" name="utm_campaign" value=""/>

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
         name="main_phone"
         value="* Teléfono" 
         onFocus="javascript:this.value='';" 
         onBlur="if (this.value==''){this.value='* Telefono'};"
         />

<div class="clear">&nbsp;</div>

<input type="text"  
         class="input_1" 
         id="zip_code" 
         name="zip_code"
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


<select id="program_of_interest" class="input_1" name="program_of_interest" onFocus="javascript:this.value='';" onBlur="if (this.value==''){this.value='* Programa de interés '};" />
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
</select>

<div class="clear">&nbsp;</div>

<label>&nbsp;</label><label style="text-align:left;"><span>*</span> - requerido</label>

<!--Hidden Fields -->
<input type="hidden" name="xxAccountId" value="000vngg7o"/>
<input type="hidden" name="xxCampaignId" value="053oi9wav"/>
<input type="hidden" name="xxSiteId" value="053s7lo8t"/>
<input type="hidden" name="xxRedir" value="http://explore.fvi.edu/spanish/thankyou.html"/>
<input type="hidden" name="xxRedirVerbose" value="true"/>


<input type="submit" value="Introducir" class="button_1" />


</form>
