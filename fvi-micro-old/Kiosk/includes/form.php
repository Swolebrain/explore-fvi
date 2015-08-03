  <!-- login starts -->
      <div class="login_section_outer login_section_outer_inner">
        <div class="login_section login_section_inner">
          <div class="login_header" style=" border-width:0 0 4px 0 !important">
            <div class="title"><span>Request Information</span><br>
              FVI Institute  - get in the education fast lane</div>
          </div>
          <div class="prog_outer">
            <div id='stat_bar' class="prog_outer_inner"></div>
          </div>
          <div class="formsteps">
            <div id="h_step1" class="spep_1"><span>1</span>Step 1<br>
              Career</div>
            <div id="h_step2" class="spep_2"><span>2</span>Step 2<br>
              Contact
            </div>
            <div id="h_step3" class="spep_2"><span>3</span>Step 3<br>
              Confirm
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
    if(theform.location_id.value == "")
    {
    alert("Please enter your campus of interest");
    theform.location_id.focus();
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
</script>
          <div class="information_form">
            <form action="http://api.ynotlms.com/leads.redirect" target="_top" method="post" id="frm_post" onSubmit="return CheckForm(this); ">
              <input type="hidden" name="redirect_url" value="http://www.studyatvatterott.com/thanks.php">
              <span id="step1">
              	  <label>What campus would you like to attend?<br>
              	  </label>
	              <select   class="input_1"  name="location_id" id="location_id" >
	                <option value="" selected="">Please select a campus</option>
	              </select>
	              <label>What program would you like to study?<br>
	              </label>
	              <select  class="input_1" name="program_id" id="program_id" >
	                <option value="" selected="">Choose a campus first</option>
	              </select>
              </span>
              <span id="step2" style="display:none">
              	  <div class="left">
              	  		<label>First Name<br>
              	  		</label>
	              		<input type="text"   class="input"  name="first_name" id="first_name" >
	           		</div>
	           		<div  class="right">
	              		<label>Last Name<br>
              	  		</label>
	              		<input type="text"   class="input"  name="last_name" id="last_name" >
	              </div>
	              <div class="left">
              	  		<label>Main Phone<br>
              	  		</label>
	              		<input type="text"   class="input"  name="day_phone" id="day_phone" >
	           		</div>
	           		<div  class="right">
	              		<label>Email<br>
              	  		</label>
	              		<input type="text"   class="input"  name="email" id="email" >
	              </div>
	           </span>
	           <span id="step3" style="display:none">
              	<p style="font-size:8px;"> Clicking the Submit button constitutes your express written consent to be called and/or texted by FVI Institute at the phone number(s) provided, including a wireless number, and your understanding that these calls may be generated using automated technology. Your consent is not required to obtain information regarding FVI Institute or its programs.</p>              </span>
              <div class="left"> <span class="calltext">Call or fill out the form.</span><br>
                <span class="phno"><?php echo htmlentities($tfn); ?></span> </div>
              <div class="right">
                <input class="button" name="NEXT STEP" id="NEXT_STEP" type="button" value="NEXT STEP">
              </div>
              <input type="hidden" name="lead_source_id" value="<?php echo htmlentities($lead_source); ?>" />

                        </form>
          </div>
          <div class="clear"></div>
        </div>
        <br>
        <img class="form_btm" src="images/form_btm.png"> </div>
      <!-- login ends --> 
    </div>
  </div>
