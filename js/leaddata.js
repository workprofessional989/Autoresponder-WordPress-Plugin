function saveleads(id){ 
	
		
		var email = jQuery("#autoemail_"+id).val();
		var autophone = jQuery("#autophone_"+id).val();
		var autoname = jQuery("#autoname_"+id).val(); 
		var redirecturl = jQuery("#redirecturl_"+id).val(); 
		var error = 0;
		
		
		if( !validateEmail(email) || email == "") { alert('Invalid Email Address'); error = 1;}		
		if(jQuery('#autoname_'+id).length){	 if(autoname == ""){ alert('Please Enter your Name!'); error = 1;  } }
		
		if(jQuery('#autophone_'+id).length){
			
			if( !validatePhone(autophone) ) {
				alert('Please Enter valid Phone No!');
				error = 1;
			} 
		}
		
		
		if(error == 0){
			
			jQuery("#submitbutton_"+id).hide(); 
			jQuery(".autoloder_"+id).show();
			
			jQuery.ajax({ 
				url: my_ajax_object.ajax_url, 
				data: {    
				'action': 'autoresponders_ajax_request', 
				'email' : email, 
				'autophone' : autophone, 
				'autoname' : autoname  
				}, 
				success:function(data) { 
					jQuery("#submitbutton_"+id).show(); 
					jQuery(".autoloder_"+id).hide();					
					jQuery("#autoemail").val("");
					jQuery("#autophone").val("");
					jQuery("#autoname").val(""); 
					console.log(data); 
					if(redirecturl != "undefined" || redirecturl != ""){  
						window.location.href = redirecturl;
					}
				},    
					error: function(errorThrown){

					jQuery("#submitbutton_"+id).show(); 
					jQuery(".autoloder_"+id).hide();
					console.log(errorThrown); 
					alert("Failed :( ");
				}  
			});  
		}
		
}

 function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

function validatePhone(txtPhone) {    
    var filter = /^[0-9-+]+$/;
    if (filter.test(txtPhone)) {
        return true;
    }
    else {
        return false;
    }
}
