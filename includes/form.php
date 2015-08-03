  <!-- login starts -->
      <div class="login_section_outer login_section_outer_inner">
        <div class="login_section login_section_inner">
          <div class="login_header" style=" border-width:0 0 4px 0 !important">
            <div class="title"><span>Request Information</span><br>
              Florida Vocational Institute  - Your Career Path Starts Right Here!</div>
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
    //alert(m.value);
        var e = m.value;
//var strUser = e.options[e.selectedIndex].value;
//alert(strUser);
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
            <!--<form action="mail.php" target="_top" method="post" id="frm_post" onSubmit="return CheckForm(this); ">-->
              <input type="hidden" name="redirect_url" value="http://explore.fvi.edu/thanks.php">
              <input type="hidden" name="address" id="address" value="">
              <span id="step1">
              	  
	                
	              <label>What Program Would You Like To Study?<br>
	              </label>
	              <select  class="input_1" name="program_id" id="program_id"  onchange="setloc(this)">
	                <option value="" selected="">Choose a Program First</option>
                    <option value="5167">IT Security and Cloud Professional Engineering</option>
<option value="5168">Web & Application Development Engineering</option>                    
<option value="4826">Medical Assistant Online</option>
                    <option value="4897">Pharmacy Technician</option>
                    <option value="2213">Nursing Assistant /Home Health Aide</option>
                   
                    <option value="2211">Medical Assistant</option>
                    <option value="2212">Patient Care Technician</option>
	              </select>
<input type="hidden"  class="input_1"  name="location_id" id="location_id" >
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
				   <div class="left">
              	  		<label>Street1<br>
              	  		</label>
	              		<input type="text"   class="input"  name="street1" id="street1" >
	           		</div>
	           		<div  class="right">
	              		<label>Street 2<br>
              	  		</label>
	              		<input type="text"   class="input"  name="street2" id="street2" >
	              </div>
	              <div class="left">
              	  		<label>City<br>
              	  		</label>
	              		<input type="text"   class="input"  name="city" id="city" >
	           		</div>
	           		<div  class="right">
	              		<label>State<br>
              	  		</label>
	              		<input type="text"   class="input"  name="state" id="state" >
	              		 </div>
	              		 <div class="center">
              	  		<label>Zip Code<br>
              	  		</label>
	              		<input type="text"   class="input"  name="zipcode" id="zipcode" >
	           		</div>
	           		              	<p style="font-size:12px; line-height:22px; text-align:justify;"> We know you are excited to get started on your new career. By clicking the button in the form on this page, I understand that Florida Vocational Institute may call or text me about educational services at the phone number provided, including a wireless number, using automated technology. Your information will only be used by Florida Vocational Institute. </p>              </span>

	           		</span>
              <div class="left"> <span class="calltext">Call or fill out the form.</span><br>
                <a href="tel:<?php echo $tfn; ?>"><span class="phno"><?php echo htmlentities($tfn); ?></span></a></div>
              <div class="right">
                <input class="button" name="NEXT_STEP" id="NEXT_STEP" type="button" value="NEXT STEP">
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
