<script type="text/javascript" >

(function($) {
		var strings = {
			"enterprogram" : {
				"en" : "Please enter your program of interest.",
				"es" : "Por favor elija el programa que le interesa."
			},
			"enterfname" : {
				"en" : "Please enter first name.",
				"es" : "Por favor entre su primer nombre."
			},
			"enterlname" : {
				"en" : "Please enter last name.",
				"es" : "Por favor entre su apellido."
			},
			"entermainphone" : {
				"en" : "Please enter main phone.",
				"es" : "Por favor introduzca su numero telefonico."
			},
			"entervalidphone" : {
				"en" : "Please enter a valid phone number.",
				"es" : "Por favor introduzca un nro. telefonico valido."
			},
			"enteremail" : {
				"en" : "Please enter email.",
				"es" : "Por favor introduzca su email."
			},
			"entervalidemail" : {
				"en" : "Please enter valid email address.",
				"es" : "Por favor introduzca un email valido."
			},
			"enteraddress" : {
				"en" : "Please enter your address.",
				"es" : "Por favor introduzca su direccion."
			},
			"entercity" : {
				"en" : "Please enter your city.",
				"es" : "Por favor introduzca su ciudad."
			},
			"enterstate" : {
				"en" : "Please enter your state.",
				"es" : "Por favor introduzca su estado."
			},
			"enterzipcode" : {
				"en" : "Please enter your zipcode.",
				"es" : "Por favor introduzca su codigo postal."
			},
			"entervalidzipcode" : {
				"en" : "Please enter valid zipcode.",
				"es" : "Por favor introduzca un codigo postal valido."
			},
			"nextstep" : {
				"en" : "NEXT",
				"es" : "SIGUIENTE PASO"
			},
			"submitbtn" : {
				"en" : "Submit",
				"es" : "ENVIAR"
			}
		};
       
      
	
		if (document.location.pathname.indexOf("/spanish") === 0) {
				var lang = "es";
		}
		else{
				var lang = "en";
		};
		
		$("#h_step1").click(function(){
				 $('#step1').show();
				 $('#step2').hide();
				 $('#step3').hide();
				 $("#NEXT_STEP").val(strings.nextstep[lang]);
				 $("#h_step1").attr("class", "spep_1");
				 $("#h_step2").attr("class", "spep_2");
				 $("#h_step3").attr("class", "spep_2");
				 $("#stat_bar").attr("class", "prog_outer_inner");
		 	});
			
		$("#h_step2").click(function(){
			 $('#step1').hide();
			 $('#step2').show();
			 $('#step3').hide();
			 $("#NEXT_STEP").val(strings.nextstep[lang]);
			 $("#h_step1").attr("class", "spep_2");
			 $("#h_step2").attr("class", "spep_1");
			 $("#h_step3").attr("class", "spep_2");
			 $("#stat_bar").attr("class", "prog_outer_inner1");
			});
		
		$("#h_step3").click(function(){
			
			 $('#step1').hide();
			 $('#step2').hide();
			 $('#step3').show();
			 $("#NEXT_STEP").val(strings.submitbtn[lang]);
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
		 		     alert(strings.enterprogram[lang]);
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
				    alert( strings.enterfname[lang] );
			        return false;
			    }
			    if($('#last_name').val()== "")
			    {
		 		     alert( strings.enterlname[lang] );
			        return false;
			    }
			    if($('#day_phone').val()== "")
			    {
		 		     alert( strings.entermainphone[lang] );
			        return false;
			    }
				else{
						var pattern=/^[( ]?[0-9]{3}[) -]{0,2}[0-9]{3}[ -]?[0-9]{4}$/;
						if (!pattern.test($('#day_phone').val())) {
								alert( strings.entervalidphone[lang] );
								return false;
						}
				}


			    if($('#email').val()== "")
			    {
		 		     alert( strings.enteremail[lang] );
			        return false;
			    }
			    if($('#email').val().length > 0 )
			    {
					
			      var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
			        if(!pattern.test($('#email').val()))
			        {
			          	alert( strings.entervalidemail[lang] );
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
				 $("#NEXT_STEP").val(strings.submitbtn[lang]);
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
		 		     alert( strings.enterprogram[lang] );
		 		     $( "#h_step1" ).trigger( "click" );
			        return false;
			    }
			    if($('#first_name').val() == "")
			    {
				    alert( strings.enterfname[lang] );
				    $( "#h_step2" ).trigger( "click" );
			        return false;
			    }
			    if($('#last_name').val()== "")
			    {
		 		     alert( strings.enterlname[lang] );
		 		     $( "#h_step2" ).trigger( "click" );
			        return false;
			    }
			    if($('#day_phone').val()== "")
			    {
		 		     alert( strings.entermainphone[lang] );
			        return false;
			    }
				else{
						var pattern=/^[( ]?[0-9]{3}[) -]{0,2}[0-9]{3}[ -]?[0-9]{4}$/;
						if (!pattern.test($('#day_phone').val())) {
								alert( strings.entervalidphone[lang] );
								return false;
						}
				}
			    if($('#email').val()== "")
			    {
		 		     alert( strings.enteremail[lang] );
		 		     $( "#h_step2" ).trigger( "click" );
			        return false;
			    }
			    if($('#email').val().length > 0 )
			    {
			      var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
			        if(!pattern.test($('#email').val()))
			        {
			          	alert( strings.entervalidemail[lang] );
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
				    alert(strings.enteraddress[lang]);
			        return false;
			    }
			    
			    if($('#city').val() == "")
			    {
				    alert( strings.entercity[lang] );
			        return false;
			    }
			    if($('#state_id').val() == "")
			    {
				    alert( strings.enterstate[lang]  );
			        return false;
				}
			        if($('#zipcode').val() == "")
			    {
				    alert( strings.enterzipcode[lang]  );
			        return false;
			    }
			     if($('#zipcode').val().length > 0 )
			    {
				   var pattern=/^[0-9]{5,10}/;
			        if(!pattern.test($('#zipcode').val()))
			        {
			          	alert( strings.entervalidzipcode[lang]  );
			          	
			            return false;
			        }
			       
			    }
			    var street1 = $('#street1').val();
                var street2 = $('#street2').val();
	            $('#address').val(street1+', '+street2);
	                        
				 $('#step1').hide();
				 $('#step2').hide();
				 $('#step3').show();
				 
				/*********************Sending to Ynot *********************/
				//$('#frm_post').submit();
				$.ajax({
						type: "POST",
						url: $('#frm_post').attr('action'),
						data: $("#frm_post").serialize(), // serializes the form's elements.
						success: function(data)
						{
							console.log(data);
							$('#frm_post').attr('action', 'https://secure.velocify.com/Import.aspx?Provider=ExploreFVI&Client=30010&CampaignId=1033&Url=http://explore.fvi.edu/thanks.php');
							setProgramId();
						    $('#frm_post').submit();
						},
						error: function(){
						    console.log("Sending to ynot failed");
							$('#frm_post').attr('action', 'https://secure.velocify.com/Import.aspx?Provider=ExploreFVI&Client=30010&CampaignId=1033&Url=http://explore.fvi.edu/thanks.php');
							setProgramId();
						    $('#frm_post').submit();
						}
					  });
				
				
				
				
			}
      });
	  function setProgramId() {
		var progText = jQuery('#program_id option:selected').text();
		$('#program_id').val(progText);
	  }
      
}) (jQuery);

</script>
