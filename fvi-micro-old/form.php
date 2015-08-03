<form method="post" id="myform" name="myform" action="https://api.ynotlms.com/leads.redirect" onSubmit="return val1(this);">
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
        }elseif ($post_form_program_id == 2215) {                           //Electrocardiography
            echo '<input type="hidden" name="program_id" value="2215"/>';
        }elseif ($post_form_program_id == 2213) {                           //Nursing Assistant\/Home Health Aide
            echo '<input type="hidden" name="program_id" value="2213"/>';
        }elseif ($post_form_program_id == 2212) {                           //Patient Care Technician
            echo '<input type="hidden" name="program_id" value="2212"/>';
        }elseif ($post_form_program_id == 2214) {                           //Phlebotomy Technician
            echo '<input type="hidden" name="program_id" value="2214"/>';
        }else{
            echo '<select id="program_id" class="input_1" name="program_id" onFocus="javascript:this.value = \'\';" onBlur="if (this.value == \'\') {this.value = \'* Program of Interest\'} ;" /> ';
        echo  '<option value="" selected="selected">* Program of Interest</option>';
        echo '</select>';

        }

    }else{
            echo '<select id="program_id" class="input_1" name="program_id" onFocus="javascript:this.value = \'\';" onBlur="if (this.value == \'\') {this.value = \' * Program of Interest\'} ;" /> ';
        echo  '<option value="" selected="selected">* Program of Interest</option>';
        echo '</select>';
    }
?>




    <div class="clear">&nbsp;</div>
    <label>&nbsp;</label>
    <label style="text-align:left;"><span>*</span> - required fields</label>

    <!--Hidden Fields -->
    <input type="hidden" name="redirect_url" value="http://explore.fvi.edu/thankyou.php" />
    <input type="hidden" name="location_id" value="875" />
    <input type="hidden" name="lead_source_id" value="<?php echo $sid; ?>" />
    <input type="hidden" name="keyword" value="<?php echo $keyword; ?>" />
    <input type="submit" value="Submit" class="button_1" />
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
