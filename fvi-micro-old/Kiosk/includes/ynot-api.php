<script type="text/javascript" >

(function($) {

         $.getJSON("https://api.ynotlms.com/locations.json?uid=433&apikey=3dcc0e2cdb-pnjermuhed-c8phtnsz&jsoncallback=?",
           function(data) {
        var sel = $("#location_id");
        sel.empty();
        sel.append('<option value="">*Please choose a campus of interest</option>');
        $.each(data, function(i,item){
          sel.append('<option value="' + item.id + '">' + item.title + '</option>');
        });
         });

        $("#location_id").change(function(){
        var selectedValue = $(this).find(":selected").val();
        var sel = $("#program_id");
        var sel_edu = $("#level_of_education_id");
        sel_edu.empty();
        sel.empty();
        $.getJSON("https://api.ynotlms.com/locations.json?uid=433&apikey=3dcc0e2cdb-pnjermuhed-c8phtnsz&jsoncallback=?",
             function(data) {
          var sel = $("#program_id");
          $.each(data, function(i,item){
            if(item.id == selectedValue ){
              sel.append('<option value="">Select Program</option>');
              $.each(item.programs, function(i,program){
                sel.append('<option value="' + program.id + '">' + program.title + '</option>');
              });
              return false;
            }
          });
           });

      });
      
	
		$("#h_step1").click(function(){
				 $('#step1').show();
				 $('#step2').hide();
				 $('#step3').hide();
				 $("#NEXT_STEP").val("NEXT STEP");
				 $("#h_step1").attr("class", "spep_1");
				 $("#h_step2").attr("class", "spep_2");
				 $("#h_step3").attr("class", "spep_2");
				 $("#stat_bar").attr("class", "prog_outer_inner");
		 	});
			
			$("#h_step2").click(function(){
				 $('#step1').hide();
				 $('#step2').show();
				 $('#step3').hide();
				 $("#NEXT_STEP").val("NEXT STEP");
				 $("#h_step1").attr("class", "spep_2");
				 $("#h_step2").attr("class", "spep_1");
				 $("#h_step3").attr("class", "spep_2");
				 $("#stat_bar").attr("class", "prog_outer_inner1");
				});
			
			$("#h_step3").click(function(){
				
				 $('#step1').hide();
				 $('#step2').hide();
				 $('#step3').show();
				 $("#NEXT_STEP").val("SUBMIT");
				 $("#h_step1").attr("class", "spep_2");
				 $("#h_step2").attr("class", "spep_2");
				 $("#h_step3").attr("class", "spep_1");
				 $("#stat_bar").attr("class", "prog_outer_inner2");
				 
			
      });
		

      
      
      $("#NEXT_STEP").click(function(){
        	//if( $('#step1').is(':visible') ) {
        	if($('#step1').css('display') != 'none') {
        		
        		if($('#location_id').val() == "")
			    {
				    alert("Please enter your campus of interest");
			        return false;
			    }
			    if($('#program_id').val()== "")
			    {
		 		     alert("Please enter your program of interest");
			        return false;
			    }
        		
				 $('#step1').hide();
				 $('#step2').show();
				 $('#step3').hide();
				 
				 $("#h_step1").attr("class", "spep_2");
				 $("#h_step2").attr("class", "spep_1");
				 $("#h_step3").attr("class", "spep_2");
				 $("#stat_bar").attr("class", "prog_outer_inner1");
		 
			}
			else if( $('#step2').css('display') != 'none') {
			
				if($('#first_name').val() == "")
			    {
				    alert("Please enter first name");
			        return false;
			    }
			    if($('#last_name').val()== "")
			    {
		 		     alert("Please enter last name");
			        return false;
			    }
			    if($('#day_phone').val()== "")
			    {
		 		     alert("Please enter main phone");
			        return false;
			    }

			    if(isNaN($('#day_phone').val()) === true )
			    {
		 		     alert("Please enter main phone in numeric");
			        return false;
			    }

			    if($('#day_phone').val().length != 10 )
			    {
		 		     alert("Please enter 10 digit main phone");
			        return false;
			    }
			    if($('#email').val()== "")
			    {
		 		     alert("Please enter email");
			        return false;
			    }
			    if($('#email').val().length > 0 )
			    {
			      var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
			        if(!pattern.test($('#email').val()))
			        {
			          	alert("Please enter valid email address");
			            return false;
			        }
			
			
				}


				 $('#step1').hide();
				 $('#step2').hide();
				 $('#step3').show();
				 
				 $("#h_step1").attr("class", "spep_2");
				 $("#h_step2").attr("class", "spep_2");
				 $("#h_step3").attr("class", "spep_1");
				 $("#stat_bar").attr("class", "prog_outer_inner2");
				 $("#NEXT_STEP").val("SUBMIT");
			}
			else if( $('#step3').css('display') != 'none' ) {

				 if($('#location_id').val() == "")
			    {
				    alert("Please enter your campus of interest");
				    $( "#h_step1" ).trigger( "click" );
			        return false;
			    }
			    if($('#program_id').val()== "")
			    {
		 		     alert("Please enter your program of interest");
		 		     $( "#h_step1" ).trigger( "click" );
			        return false;
			    }
			    if($('#first_name').val() == "")
			    {
				    alert("Please enter first name");
				    $( "#h_step2" ).trigger( "click" );
			        return false;
			    }
			    if($('#last_name').val()== "")
			    {
		 		     alert("Please enter last name");
		 		     $( "#h_step2" ).trigger( "click" );
			        return false;
			    }
			    if($('#day_phone').val()== "")
			    {
		 		     alert("Please enter main phone");
		 		     $( "#h_step2" ).trigger( "click" );
			        return false;
			    }

			    if(isNaN($('#day_phone').val()) === true )
			    {
		 		     alert("Please enter main phone in numeric");
		 		     $( "#h_step2" ).trigger( "click" );
			        return false;
			    }

			    if($('#day_phone').val().length != 10 )
			    {
		 		     alert("Please enter 10 digit main phone");
		 		     $( "#h_step2" ).trigger( "click" );
			        return false;
			    }
			    if($('#email').val()== "")
			    {
		 		     alert("Please enter email");
		 		     $( "#h_step2" ).trigger( "click" );
			        return false;
			    }
			    if($('#email').val().length > 0 )
			    {
			      var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
			        if(!pattern.test($('#email').val()))
			        {
			          	alert("Please enter valid email address");
			          	$( "#h_step2" ).trigger( "click" );
			            return false;
			        }
			
			
				}
				 if($('#refer').val() == "")
			    {
				    alert("Please select How did you hear about?");
			        return false;
			    }
			    if($('#text').val()== "")
			    {
		 		     alert("Please select Receive text via phone");
			        return false;
			    }
			    
				 $('#step1').hide();
				 $('#step2').hide();
				 $('#step3').show();
				 $('#frm_post').submit();
			}
      });
      
}) (jQuery);

</script>