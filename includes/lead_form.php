<?php include('autoresponders-class.php'); ?>
<!-- Tab 1 -->
<div class="wrap" id="tab1"   >
   <h1>&nbsp;&nbsp;Lead Form</h1>  
   <form method="post" action="<?php echo esc_url( admin_url('admin.php') ); ?>?page=autoresponders_settings&request=getresponse">
      <table class="form-table">
         <tbody>	        
			
			<tr>
					<td class="subscription-settings-cell">						
						<div class="app-details">
							<textarea style="width:90%;height:82px;font-size:26px;" >[autoresponders  formid="1" name="1" phone="1" redirecturl="https://www.google.com/" buttontext="SUBMIT" buttoncolor="#000000" buttoncolor2="#3a3a3a" buttonhovercolor="#3a3a3a" buttonhovercolor2="#3a3a3a" fontsize="30px" fontsize2="26px" formtitle="Register For An Account" nameplaceholder="Enter Your Name Here" emailplaceholder="Enter Your Best Email Here" ]</textarea>
							 <p class="description">copy below shortcode and paste in to WordPress page or Post, To disable fields(name="0" phone="0")</p>	</br>			
							 <p class="description">if there is a requirment of multiple forms in a page please increase the form id, like 2nd form formid="2" and 3rd form formid="3" </p>				
						</div>
					</td>
				</tr>
			
        
      
         </tbody>
		 
		 
		 
      </table>
      
   </form>
</div>


