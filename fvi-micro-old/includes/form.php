<form method="post" id="myform" name="myform" action="https://api.ynotlms.com/leads.redirect" onSubmit="return check();">
<input type="hidden" name="xxTrustedFormToken" value="" />
<input type="hidden" name="utm_source" value="" />
<input type="hidden" name="utm_medium" value="" />
<input type="hidden" name="utm_content" value="" />
<input type="hidden" name="utm_campaign" value="" />

    <input type="text" class="input_1" id="first_name" name="first_name" value="* First Name" onFocus="javascript:this.value = '';" onBlur="if (this.value == '') {
                     this.value = '* First Name'
                 }
                 ;" />
    <div class="clear">&nbsp;</div>


    <input type="text" class="input_1" id="last_name" name="last_name" value="* Last Name" onFocus="javascript:this.value = '';" onBlur="if (this.value == '') {
                     this.value = '* Last Name'
                 }
                 ;" />
    <div class="clear">&nbsp;</div>


    <input type="text" class="input_1" id="main_phone" name="day_phone" value="* Phone Number" onFocus="javascript:this.value = '';" onBlur="if (this.value == '') {
                     this.value = '* Phone Number'
                 }
                 ;" />


    <div class="clear">&nbsp;</div>
    <input type="text" class="input_1" id="zip_code" name="zipcode" value="* Zip Code" onFocus="javascript:this.value = '';" onBlur="if (this.value == '') {
                     this.value = '* Zip Code'
                 }
                 ;" />


    <div class="clear">&nbsp;</div>
    <input type="text" class="input_1" id="email" name="email" value="* Email" onFocus="javascript:this.value = '';" onBlur="if (this.value == '') {
                     this.value = '* Email'
                 }
                 ;" />

    <div class="clear">&nbsp;</div>
<?php
    if(isset($post_form_program_id)){
        if($post_form_program_id == 2211){                                  //mrdical assistant
            echo '<input type="hidden" name="program_id" value="2211"/>';
            echo '<input type="hidden" name="redirect_url" value="http://explore.fvi.edu/medical-assistant/thankyou.php" />';
        }elseif ($post_form_program_id == 2215) {                           //Electrocardiography
            echo '<input type="hidden" name="program_id" value="2215"/>';
             echo '<input type="hidden" name="redirect_url" value="http://explore.fvi.edu/thankyou.php" />';
        }elseif ($post_form_program_id == 2213) {                           //Nursing Assistant\/Home Health Aide
            echo '<input type="hidden" name="program_id" value="2213"/>';
             echo '<input type="hidden" name="redirect_url" value="http://explore.fvi.edu/thankyou.php" />';
        }elseif ($post_form_program_id == 2212) {                           //Patient Care Technician
            echo '<input type="hidden" name="program_id" value="2212"/>';
            echo '<input type="hidden" name="redirect_url" value="http://explore.fvi.edu/patient-care-technician/thankyou.php" />';
        }elseif ($post_form_program_id == 2214) {                           //Phlebotomy Technician
            echo '<input type="hidden" name="program_id" value="2214"/>';
             echo '<input type="hidden" name="redirect_url" value="http://explore.fvi.edu/thankyou.php" />';
        }else{
            echo '<select id="program_id" class="input_1" name="program_id" onFocus="javascript:this.value = \'\';" onBlur="if (this.value == \'\') {this.value = \'* Program of Interest\'} ;" /> ';
        echo  '<option value="" selected="selected">* Program of Interest</option>';
        echo '</select>';
         echo '<input type="hidden" name="redirect_url" value="http://explore.fvi.edu/thankyou.php" />';

        }

    }else{
            echo '<select id="program_id" class="input_1" name="program_id" onFocus="javascript:this.value = \'\';" onBlur="if (this.value == \'\') {this.value = \' * Program of Interest\'} ;" /> ';
        echo  '<option value="" selected="selected">* Program of Interest</option>';
        echo '</select>';
        echo '<input type="hidden" name="redirect_url" value="http://explore.fvi.edu/thankyou.php" />';
    }
?>




    <div class="clear">&nbsp;</div>
    <label>&nbsp;</label>
    <label style="text-align:left;"><span>*</span> - required fields</label>
    
    <div class="clear">&nbsp;</div>
<p style="font-size:10px;line-height: 15px;">We know you are excited to get started on your new career. By clicking the button in the form on this page, I understand that Florida Vocational Institute may call or text me about educational services at the phone number provided, including a wireless number, using automated technology. Your information will only be used by Florida Vocational Institute.</p>
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
        if (fname.val() == '' || fname.val() == '* First Name'  || !fname.val().match(/^[a-zA-Z\s]*$/)) {
            validate = false;
            alert('Please enter your first name!');
            return validate;
        }

        var lname = $('input[name="last_name"]')
        if (lname.val() == '' || lname.val() == '* Last Name' || !lname.val().match(/^[a-zA-Z\s]*$/)) {
            validate = false;
            alert('Please enter your last name!');
            return validate;
        }

        var phone = $('input[name="day_phone"]')
        if (phone.val() == '' || phone.val() == '* Phone Number' || !phone.val().match(/^\d{0,10}$/)) {
            validate = false;
            alert('Please enter a numeric phone number!');
            return validate;
        }

         var zip = $('input[name="zipcode"]');
        if (zip.val() == '' || zip.val() == '* Zip Code' || !zip.val().match(/^\d{0,10}$/)) {
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