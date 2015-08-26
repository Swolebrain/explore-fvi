<script type="text/javascript" >

(function($) {

     /*
	  *    THIS FILE IS NOT USED ANYMORE, SEE MULTILANG VERSION IN THE TOP LEVEL INCLUDES FOLDER
	  *    THIS FILE IS NOT USED ANYMORE, SEE MULTILANG VERSION IN THE TOP LEVEL INCLUDES FOLDER
	  *    THIS FILE IS NOT USED ANYMORE, SEE MULTILANG VERSION IN THE TOP LEVEL INCLUDES FOLDER
	  *    THIS FILE IS NOT USED ANYMORE, SEE MULTILANG VERSION IN THE TOP LEVEL INCLUDES FOLDER
	  *    THIS FILE IS NOT USED ANYMORE, SEE MULTILANG VERSION IN THE TOP LEVEL INCLUDES FOLDER
	  *    THIS FILE IS NOT USED ANYMORE, SEE MULTILANG VERSION IN THE TOP LEVEL INCLUDES FOLDER
	  *    THIS FILE IS NOT USED ANYMORE, SEE MULTILANG VERSION IN THE TOP LEVEL INCLUDES FOLDER
	  *    THIS FILE IS NOT USED ANYMORE, SEE MULTILANG VERSION IN THE TOP LEVEL INCLUDES FOLDER
	  *    THIS FILE IS NOT USED ANYMORE, SEE MULTILANG VERSION IN THE TOP LEVEL INCLUDES FOLDER
	  *    THIS FILE IS NOT USED ANYMORE, SEE MULTILANG VERSION IN THE TOP LEVEL INCLUDES FOLDER
     */
      
	
		$("#h_step1").click(function(){
				 $('#step1').show();
				 $('#step2').hide();
				 $('#step3').hide();
				 $("#NEXT_STEP").val("SIGUIENTE PASO");
				 $("#h_step1").attr("class", "spep_1");
				 $("#h_step2").attr("class", "spep_2");
				 $("#h_step3").attr("class", "spep_2");
				 $("#stat_bar").attr("class", "prog_outer_inner");
		 	});
			
			$("#h_step2").click(function(){
				 $('#step1').hide();
				 $('#step2').show();
				 $('#step3').hide();
				 $("#NEXT_STEP").val("SIGUIENTE PASO");
				 $("#h_step1").attr("class", "spep_2");
				 $("#h_step2").attr("class", "spep_1");
				 $("#h_step3").attr("class", "spep_2");
				 $("#stat_bar").attr("class", "prog_outer_inner1");
				});
			
			$("#h_step3").click(function(){
				
				 $('#step1').hide();
				 $('#step2').hide();
				 $('#step3').show();
				 $("#NEXT_STEP").val("ENVIAR");
				 $("#h_step1").attr("class", "spep_2");
				 $("#h_step2").attr("class", "spep_2");
				 $("#h_step3").attr("class", "spep_1");
				 $("#stat_bar").attr("class", "prog_outer_inner2");
				 
			
      });
		

      
      
      $("#NEXT_STEP").click(function(){
        	//if( $('#step1').is(':visible') ) {
        	if($('#step1').css('display') != 'none') {
        		
        		/*if($('#location_id').val() == "")
			    {
				    alert("Please enter your campus of interest");
			        return false;
			    }*/
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
				 $("#NEXT_STEP").val("ENVIAR");
			}
			else if( $('#step3').css('display') != 'none' ) {

				/* if($('#location_id').val() == "")
			    {
				    alert("Please enter your campus of interest");
				    $( "#h_step1" ).trigger( "click" );
			        return false;
			    }*/
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
			    
			    
			    
			    
			    if($('#street1').val() == "")
			    {
				    alert("Please enter your address");
			        return false;
			    }
			    
			    if($('#city').val() == "")
			    {
				    alert("Please enter your city");
			        return false;
			    }
			    if($('#state_id').val() == "")
			    {
				    alert("Please enter your state");
			        return false;
				}
			        if($('#zipcode').val() == "")
			    {
				    alert("Please enter your zipcode");
			        return false;
			    }
			     if($('#zipcode').val().length > 0 )
			    {
				   var pattern=/^[0-9]{5,10}/;
			        if(!pattern.test($('#zipcode').val()))
			        {
			          	alert("Please enter valid zipcode");
			          	
			            return false;
			        }
			       
			    }
			    var street1 = $('#street1').val();
                        var street2 = $('#street2').val();
	                        $('#address').val(street1+', '+street2);
	                        
				 $('#step1').hide();
				 $('#step2').hide();
				 $('#step3').show();
				 $('#frm_post').submit();
			}
      });
      
}) (jQuery);

</script>
