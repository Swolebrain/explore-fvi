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

if (a == '' || a == '* First Name') {

alert ('Please enter First Name');

f.first_name.focus();

return false;

} 



a = f.last_name.value;

if (a == '' || a == '* Last Name') {

alert ('Please enter Last Name');

f.last_name.focus();

return false;

}



a = f.main_phone.value;

if (a == '' || a == '* Phone Number') {

alert ('Please enter Phone Number');

f.main_phone.focus();

return false;

}



a = f.email.value;

if (a == '' || a == '* Email') {

alert ('Please enter Email');

f.email.focus();

return false;

}



var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

if(reg.test(a) == false) {

alert('Please enter a valid Email Address');

return false;

}



a = f.program_of_interest.selectedIndex;

if (a == 0) {

alert ('Please choose Program of interest');

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

		

		<p>* All Fileds Required <br />

		</p>
		<div class="clear">&nbsp;</div>
		<p style="font-size:10px;line-height: 15px;">We know you are excited to get started on your new career. By clicking the button in the form on this page, I understand that Florida Vocational Institute may call or text me about educational services at the phone number provided, including a wireless number, using automated technology. Your information will only be used by Florida Vocational Institute.</p>

		<form action="https://api.ynotlms.com/leads.redirect" name="myform" method="post" id="myform" onSubmit="return val1(this);">

	

	<input type="hidden" name="source" value="<?php echo $_SERVER['SERVER_NAME'];?>/mobile" /> 



	<input name="xxRedir" value="http://<?php echo $_SERVER['SERVER_NAME'];?>/mobile/thankyou.php" type="hidden" /> 

	<input name="redirect" value="http://<?php echo $_SERVER['SERVER_NAME'];?>/mobile/thankyou.php" type="hidden" /> 

    

<input type="hidden" name="Keyword" value="" />

<input type="hidden" name="utm_source" value="" />

<input type="hidden" name="utm_medium" value="" /> 

<input type="hidden" name="utm_content" value="" /> 

<input type="hidden" name="utm_campaign" value="" /> 





	<input type="text" name="first_name" value="* First Name" class="input_1" onFocus="javascript:this.value='';" onBlur="if (this.value==''){this.value='* First Name'};" /><br/>

	<input type="text" name="last_name" value="* Last Name" class="input_1" onFocus="javascript:this.value='';" onBlur="if (this.value==''){this.value='* Last Name'};" /><br/>
    
    <input type="text" name="day_phone" value="* Phone number" class="input_1" onFocus="javascript:this.value='';" onBlur="if (this.value==''){this.value='* Phone Number'};" /><br/>
    
    <input type="text" name="zipcode" value="* Zip Code" class="input_1" onFocus="javascript:this.value='';" onBlur="if (this.value==''){this.value='* Zip Code'};" /><br/>

	<input type="text" name="email" value="* Email" class="input_1" onFocus="javascript:this.value='';" onBlur="if (this.value==''){this.value='* Email'};" /><br/>


            <input type="hidden" name="redirect_url" value="http://explore.fvi.edu/pharmacy-technician/thankyou.php" />

	<br/>
	
	 <input type="hidden" name="location_id" value="1169" />
	 <input type="hidden" name="program_id" value="4897"/>
    <input type="hidden" name="lead_source_id" value="<?php echo $sid; ?>" />
    <input type="hidden" name="keyword" value="<?php echo $keyword; ?>" />
	<input type="submit" class="button_1" value="Submit" /></form>

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
