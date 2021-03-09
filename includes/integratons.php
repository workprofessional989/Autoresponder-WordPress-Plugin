<?php
include('autoresponders-class.php');
global $_GET;
$tab = "getResponse";
if(isset($_GET['tab'])){ $tab = $_GET['tab']; }
if (isset($_GET['request'])) {
  
		getData($_POST);
  
} 

?>


<h2 class="nav-tab-wrapper">
	<a class="nav-tab <?php if($tab == 'getResponse'){ echo "nav-tab-active";  } ?>" href="<?php echo site_url(); ?>/wp-admin/admin.php?page=autoresponders_settings&tab=getResponse">GetResponse</a>
	<a class="nav-tab <?php if($tab == 'sendlane'){ echo "nav-tab-active";  } ?>" href="<?php echo site_url(); ?>/wp-admin/admin.php?page=autoresponders_settings&tab=sendlane">Sendlane</a>
	<a class="nav-tab <?php if($tab == 'activecampaign'){ echo "nav-tab-active";  } ?>" href="<?php echo site_url(); ?>/wp-admin/admin.php?page=autoresponders_settings&tab=activecampaign">Activecampaign</a>
	<a class="nav-tab <?php if($tab == 'aweber'){ echo "nav-tab-active";  } ?>" href="<?php echo site_url(); ?>/wp-admin/admin.php?page=autoresponders_settings&tab=aweber">Aweber</a>
	<a class="nav-tab <?php if($tab == 'convertkit'){ echo "nav-tab-active";  } ?>" href="<?php echo site_url(); ?>/wp-admin/admin.php?page=autoresponders_settings&tab=convertkit">ConvertKit</a>
	<a class="nav-tab <?php if($tab == 'sendhive'){ echo "nav-tab-active";  } ?>" href="<?php echo site_url(); ?>/wp-admin/admin.php?page=autoresponders_settings&tab=sendhive">Sendhive</a>
	<a class="nav-tab <?php if($tab == 'birdsend'){ echo "nav-tab-active";  } ?>" href="<?php echo site_url(); ?>/wp-admin/admin.php?page=autoresponders_settings&tab=birdsend">Birdsend</a>
	<a class="nav-tab <?php if($tab == 'moosend'){ echo "nav-tab-active";  } ?>" href="<?php echo site_url(); ?>/wp-admin/admin.php?page=autoresponders_settings&tab=moosend">Moosend</a>
	<a class="nav-tab <?php if($tab == 'benchmark'){ echo "nav-tab-active";  } ?>" href="<?php echo site_url(); ?>/wp-admin/admin.php?page=autoresponders_settings&tab=benchmark">Benchmark Mail</a>
	
	
	
</h2>


<!-- Tab 1 -->

<div class="wrap" id="tab1"  style="display:<?php if($tab == 'getResponse'){ echo "block";  }else{ echo "none"; }  ?>"  >
   <h1>GetResponse Accounts</h1>
   <p>Use the GetResponse API key to connect your site and GetResponse</p>
   <form method="post" action="<?php echo esc_url( admin_url('admin.php') ); ?>?page=autoresponders_settings&request=getresponse">
      <table class="form-table">
         <tbody>	 
		 
            <tr>
				 <td colspan="2" style="padding-left: 0;"><h2>GetResponse 1</h2></td>
            </tr>
			
			
			
            <tr>
               <th scope="row">
                  <label for="api_key">API Key	</label>
               </th>
               <td>
                  <input name="getresponse1" type="text" id="api_key" class="regular-text" value="<?php echo get_option('getresponse1'); ?>">
                  
               </td>
			   
			   <tr>
               <th scope="row">
                  <label for="api_key">GetResponse list ID</label>
               </th>
               <td>
                  <input name="getresponselist1" type="text" id="api_key" class="regular-text" value="<?php echo get_option('getresponselist1'); ?>">                 
               </td>			   
            </tr>
			
            </tr>
			
        

	  
         </tbody>
		 
		 
		  <tbody>
		 
		 <tr>
				 <td colspan="2" style="padding-left: 0;"><br/></td>
            </tr>
		 
            <tr>
				 <td colspan="2" style="padding-left: 0;"><h2>GetResponse 2</h2></td>
            </tr>
			
			
			
            <tr>
               <th scope="row">
                  <label for="api_key">
                  API Key						</label>
               </th>
               <td>
                  <input name="getresponse2" type="text" id="api_key" class="regular-text" value="<?php echo get_option('getresponse2'); ?>">
                 
               </td>
            </tr>
			
			<tr>
               <th scope="row">
                  <label for="api_key">GetResponse list ID</label>
               </th>
               <td>
                  <input name="getresponselist2" type="text" id="api_key" class="regular-text" value="<?php echo get_option('getresponselist2'); ?>">                 
               </td>			   
            </tr>
			
        
      
         </tbody>
      </table>
      <p class="submit">
         <input type="submit" name="getresponse" id="submit" class="button button-primary" value="submit">
      </p>
   </form>
</div>



<!-- Tab 2 -->

<div class="wrap" id="tab2" style="display:<?php if($tab == 'sendlane'){ echo "block";  }else{ echo "none"; } ?>" >
   <h1>Sendlane Accounts</h1>
   <p>Use the GetResponse API key to connect your site and GetResponse</p>
   <form method="post" action="<?php echo esc_url( admin_url('admin.php') ); ?>?page=autoresponders_settings&request=sendlane">
      <table class="form-table">
         <tbody>
		 
			<tr>
				<td colspan="2" style="padding-left: 0;"><h2>Sendlane 1</h2></td>
			</tr>
		 
            <tr>
               <th scope="row">
                  <label for="api_key">API Key</label>
               </th>
               <td>
                  <input name="sendlane1" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlane1'); ?>">
                 
               </td>			   
            </tr>
			
			 <tr>
               <th scope="row">
                  <label for="api_key">Sendlane hash key</label>
               </th>
               <td>
                  <input name="sendlanehashkey1" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlanehashkey1'); ?>">
                 
               </td>			   
            </tr>
			
			 <tr>
               <th scope="row">
                  <label for="api_key">Sendlane list ID</label>
               </th>
               <td>
                  <input name="sendlanelist1" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlanelist1'); ?>">                 
               </td>			   
            </tr>
			
			
        
      
         </tbody>
		 
		 
		<tbody>
		 
			<tr>
				<td colspan="2" style="padding-left: 0;"><h2>Sendlane 2</h2></td>
			</tr>
		 
            <tr>
               <th scope="row">
                  <label for="api_key">
                  API Key						</label>
               </th>
               <td>
                  <input name="sendlane2" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlane2'); ?>">
                  
               </td>
			   
			   			 <tr>
               <th scope="row">
                  <label for="api_key">Sendlane hash key</label>
               </th>
               <td>
                  <input name="sendlanehashkey2" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlanehashkey2'); ?>">
                 
               </td>			   
            </tr>
			
			 <tr>
               <th scope="row">
                  <label for="api_key">Sendlane list ID</label>
               </th>
               <td>
                  <input name="sendlanelist2" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlanelist2'); ?>">
                 
               </td>			   
            </tr>
			
			
			   
			   
            </tr>
			
        
      
        </tbody>
		 
		

		<tbody>
		 
			<tr>
				<td colspan="2" style="padding-left: 0;"><h2>Sendlane 3</h2></td>
			</tr>
		 
            <tr>
               <th scope="row">
                  <label for="api_key">
                  API Key						</label>
               </th>
               <td>
                  <input name="sendlane3" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlane3'); ?>">
                  
               </td>
			   
			   
			   <tr>
               <th scope="row">
                  <label for="api_key">Sendlane hash key</label>
               </th>
               <td>
                  <input name="sendlanehashkey3" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlanehashkey3'); ?>">
                 
               </td>			   
            </tr>
			
			 <tr>
               <th scope="row">
                  <label for="api_key">Sendlane list ID</label>
               </th>
               <td>
                  <input name="sendlanelist3" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlanelist3'); ?>">
                 
               </td>			   
            </tr>
			
		
			   
            </tr>
			
        
      
        </tbody>



	<tbody>
		 
			<tr>
				<td colspan="2" style="padding-left: 0;"><h2>Sendlane 4</h2></td>
			</tr>
		 
            <tr>
               <th scope="row">
                  <label for="api_key">
                  API Key						</label>
               </th>
               <td>
                  <input name="sendlane4" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlane4'); ?>">                  
               </td>
            </tr>
			
						 <tr>
               <th scope="row">
                  <label for="api_key">Sendlane hash key</label>
               </th>
               <td>
                  <input name="sendlanehashkey4" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlanehashkey4'); ?>">
                 
               </td>			   
            </tr>
			
			 <tr>
               <th scope="row">
                  <label for="api_key">Sendlane list ID</label>
               </th>
               <td>
                  <input name="sendlanelist4" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlanelist4'); ?>">
                 
               </td>			   
            </tr>
			
		
			
        
      
    </tbody>

		
		
		
		
		
			<tbody>
		 
			<tr>
				<td colspan="2" style="padding-left: 0;"><h2>Sendlane 5</h2></td>
			</tr>
		 
            <tr>
               <th scope="row">
                  <label for="api_key">
                  API Key						</label>
               </th>
               <td>
                  <input name="sendlane5" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlane5'); ?>">                  
               </td>
            </tr>
			
						 <tr>
               <th scope="row">
                  <label for="api_key">Sendlane hash key</label>
               </th>
               <td>
                  <input name="sendlanehashkey5" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlanehashkey5'); ?>">
                 
               </td>			   
            </tr>
			
			 <tr>
               <th scope="row">
                  <label for="api_key">Sendlane list ID</label>
               </th>
               <td>
                  <input name="sendlanelist5" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlanelist5'); ?>">
                 
               </td>			   
            </tr>
			
		
			
        
      
    </tbody>
	
	
	
		<tbody>
		 
			<tr>
				<td colspan="2" style="padding-left: 0;"><h2>Sendlane 6</h2></td>
			</tr>
		 
            <tr>
               <th scope="row">
                  <label for="api_key">
                  API Key						</label>
               </th>
               <td>
                  <input name="sendlane6" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlane6'); ?>">                  
               </td>
            </tr>
			
						 <tr>
               <th scope="row">
                  <label for="api_key">Sendlane hash key</label>
               </th>
               <td>
                  <input name="sendlanehashkey6" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlanehashkey6'); ?>">
                 
               </td>			   
            </tr>
			
			 <tr>
               <th scope="row">
                  <label for="api_key">Sendlane list ID</label>
               </th>
               <td>
                  <input name="sendlanelist6" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlanelist6'); ?>">
                 
               </td>			   
            </tr>
			
		
			
        
      
    </tbody>
		
		
		
			<tbody>
		 
			<tr>
				<td colspan="2" style="padding-left: 0;"><h2>Sendlane 7</h2></td>
			</tr>
		 
            <tr>
               <th scope="row">
                  <label for="api_key">
                  API Key						</label>
               </th>
               <td>
                  <input name="sendlane7" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlane7'); ?>">                  
               </td>
            </tr>
			
						 <tr>
               <th scope="row">
                  <label for="api_key">Sendlane hash key</label>
               </th>
               <td>
                  <input name="sendlanehashkey7" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlanehashkey7'); ?>">
                 
               </td>			   
            </tr>
			
			 <tr>
               <th scope="row">
                  <label for="api_key">Sendlane list ID</label>
               </th>
               <td>
                  <input name="sendlanelist7" type="text" id="api_key" class="regular-text" value="<?php echo get_option('sendlanelist7'); ?>">
                 
               </td>			   
            </tr>
			
		
			
        
      
    </tbody>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
      </table>
      <p class="submit">
          <input type="submit" name="sendlane" id="submit" class="button button-primary" value="submit">
      </p>
   </form>
</div>


<!-- Tab 3 -->

<div class="wrap" id="tab3" style="display:<?php if($tab == 'activecampaign'){ echo "block";  }else{ echo "none"; } ?>" >
   <h1>Activecampaign Accounts</h1>
   <p>Use the GetResponse API key to connect your site and GetResponse</p>
   <form method="post" action="<?php echo esc_url( admin_url('admin.php') ); ?>?page=autoresponders_settings&request=activecampaign">
   
      <table class="form-table">
	  
         <tbody>
		 <tr> 
		 <th scope="row"> 
		 <label for="api_key">API URL	</label> 
		 </th> 
		 <td>  
		 <input name="activecampaignurl" type="text" id="api_key" class="regular-text"  value="<?php echo get_option('activecampaignurl'); ?>" style="min-width: 650px;">
		 <p class="description">  	 Your API URL is under account setting > developer tab.	 </p>    
		 </td>  
		 </tr>		 
            <tr>
               <th scope="row">
                  <label for="api_key">API Key	</label>
               </th>
               <td>
                  <input name="activecampaign1" type="text" id="api_key" class="regular-text"  value="<?php echo get_option('activecampaign'); ?>" style="min-width: 650px;"> 
                  <p class="description">
                     Your API key is under account setting > developer tab.					
                  </p>                
               </td>
            </tr>
			
			<tr>
				<th scope="row">
					<label for="api_key">List Id</label>
				</th>
				<td>
					<input name="activecampaignlist" type="text" id="api_key" class="regular-text"  value="<?php echo get_option('activecampaignlist'); ?>" style="min-width: 650px;"> 
					<p class="description">
						Click on Activecampaign list and you can get List id in URL like this listid=3, 3 is your list Id	
					</p>                
				</td>
			</tr>
      
	  
	  
	  
	  
	  	  	  	  <tr> 	 <th colspan="2"> <h2>Accounts 2</h2></th>	  </tr>	
				  <tr>
				  <th scope="row">
				  <label for="api_key">API URL	</label>
				  </th>
				  <td>
					<input name="activecampaignur2" type="text" id="api_key" class="regular-text"  value="<?php echo get_option('activecampaignur2'); ?>" style="min-width: 650px;">
					<p class="description"> Your API URL is under account setting > developer tab.	 </p> 
					</td> 
					</tr>
					<tr> 
					<th scope="row"> 
					<label for="api_key">API Key	</label>   
					</th>  
					<td>    
					<input name="activecampaign2" type="text" id="api_key" class="regular-text"  value="<?php echo get_option('activecampaign2'); ?>" style="min-width: 650px;"> 
					<p class="description">                     Your API key is under account setting > developer tab.					                  </p>   
					</td>    
					</tr>		
					<tr>		
					<th scope="row">	
					<label for="api_key">List Id</label>	
					</th>		
					<td>		
					<input name="activecampaignlist2" type="text" id="api_key" class="regular-text"  value="<?php echo get_option('activecampaignlist2'); ?>" style="min-width: 650px;"> 
					<p class="description">						Click on Activecampaign list and you can get List id in URL like this listid=3, 3 is your list Id						</p>  
					</td>	
					</tr>				
	  
	  
	  
	   <tr> 	 <th colspan="2"> <h2>Accounts 3</h2></th>	  </tr>	
				  <tr>
				  <th scope="row">
				  <label for="api_key">API URL	</label>
				  </th>
				  <td>
					<input name="activecampaignur3" type="text" id="api_key" class="regular-text"  value="<?php echo get_option('activecampaignur3'); ?>" style="min-width: 650px;">
					<p class="description"> Your API URL is under account setting > developer tab.	 </p> 
					</td> 
					</tr>
					<tr> 
					<th scope="row"> 
					<label for="api_key">API Key	</label>   
					</th>  
					<td>    
					<input name="activecampaign3" type="text" id="api_key" class="regular-text"  value="<?php echo get_option('activecampaign3'); ?>" style="min-width: 650px;"> 
					<p class="description">                     Your API key is under account setting > developer tab.					                  </p>   
					</td>    
					</tr>		
					<tr>		
					<th scope="row">	
					<label for="api_key">List Id</label>	
					</th>		
					<td>		
					<input name="activecampaignlist3" type="text" id="api_key" class="regular-text"  value="<?php echo get_option('activecampaignlist3'); ?>" style="min-width: 650px;"> 
					<p class="description">						Click on Activecampaign list and you can get List id in URL like this listid=3, 3 is your list Id						</p>  
					</td>	
					</tr>
	  
	  
	  
	  
	   <tr> 	 <th colspan="2"> <h2>Accounts 4</h2></th>	  </tr>	
				  <tr>
				  <th scope="row">
				  <label for="api_key">API URL	</label>
				  </th>
				  <td>
					<input name="activecampaignur4" type="text" id="api_key" class="regular-text"  value="<?php echo get_option('activecampaignur4'); ?>" style="min-width: 650px;">
					<p class="description"> Your API URL is under account setting > developer tab.	 </p> 
					</td> 
					</tr>
					<tr> 
					<th scope="row"> 
					<label for="api_key">API Key	</label>   
					</th>  
					<td>    
					<input name="activecampaign4" type="text" id="api_key" class="regular-text"  value="<?php echo get_option('activecampaign4'); ?>" style="min-width: 650px;"> 
					<p class="description">                     Your API key is under account setting > developer tab.					                  </p>   
					</td>    
					</tr>		
					<tr>		
					<th scope="row">	
					<label for="api_key">List Id</label>	
					</th>		
					<td>		
					<input name="activecampaignlist4" type="text" id="api_key" class="regular-text"  value="<?php echo get_option('activecampaignlist4'); ?>" style="min-width: 650px;"> 
					<p class="description">						Click on Activecampaign list and you can get List id in URL like this listid=3, 3 is your list Id						</p>  
					</td>	
					</tr>
	  
	  
         </tbody>
      </table>
      <p class="submit">
        <input type="submit" name="activecampaign" id="submit" class="button button-primary" value="submit">
      </p>
   </form>
</div>



<!-- Tab 5 -->

<div class="wrap" id="tab5" style="display:<?php if($tab == 'convertkit'){ echo "block";  }else{ echo "none"; } ?>" >
   <h1>Convertkit Accounts</h1>
   
    <form method="post" action="<?php echo esc_url( admin_url('admin.php') ); ?>?page=autoresponders_settings&request=convertkit">
      <table class="form-table">
         <tbody>		 
		 <tr>
				<td colspan="2" style="padding-left: 0;"><h2>Convertkit 1</h2></td>
			</tr>
           <tr> 
		 <th scope="row"> 
		 <label for="api_key">API URL	</label> 
		 </th> 
		 <td>  
		 <input name="convertkit_api_key" type="text" id="convertkit_api_key" class="regular-text"  value="<?php echo get_option('convertkitapiKey'); ?>" style="min-width: 650px;">
		 <p class="description">Your API key is under <b>account setting</b> > <b>Account Info</b>.</p>    
		 </td>  
		 </tr>
            
		    <tr> 
		 <th scope="row"> 
		 <label for="api_key">API URL	</label> 
		 </th> 
		 <td>  
		 <input name="convertkit_formid" type="text" id="convertkit_formid" class="regular-text"  value="<?php echo get_option('convertkitFormid'); ?>" style="min-width: 650px;">
		 <p class="description">You can get Form Id by going <b>"FORMS & LANDING PAGES"</b> on top menu on your convertkit dashboard.<br/>Click on form and you can see the form Id in URL like this (1002395/edit). <b>1002395</b> is your form ID</p>    
		 </td>  
		 </tr>
         
      <tr>
				<td colspan="2" style="padding-left: 0;"><h2>Convertkit 2</h2></td>
			</tr>
	  
	  <tr> 
		 <th scope="row"> 
		 <label for="api_key">API URL	</label> 
		 </th> 
		 <td>  
		 <input name="convertkit_api_key_2" type="text" id="convertkit_api_key_2" class="regular-text"  value="<?php echo get_option('convertkitapiKey_2'); ?>" style="min-width: 650px;">
		 <p class="description">Your API key is under <b>account setting</b> > <b>Account Info</b>.</p>    
		 </td>  
		 </tr>
            
		    <tr> 
		 <th scope="row"> 
		 <label for="api_key">API URL	</label> 
		 </th> 
		 <td>  
		 <input name="convertkit_formid_2" type="text" id="convertkit_formid_2" class="regular-text"  value="<?php echo get_option('convertkitFormid_2'); ?>" style="min-width: 650px;">
		 <p class="description">You can get Form Id by going <b>"FORMS & LANDING PAGES"</b> on top menu on your convertkit dashboard.<br/>Click on form and you can see the form Id in URL like this (1002395/edit). <b>1002395</b> is your form ID</p>    
		 </td>  
		 </tr>
         
	  
	  
	  
	  
	  
         </tbody>
      </table>
      <p class="submit">
         <input type="submit" name="convertkit" id="submit" class="button button-primary" value="submit">
      </p>
   </form>
</div>





<!-- Tab 5 -->

<div class="wrap" id="tab6" style="display:<?php if($tab == 'sendhive'){ echo "block";  }else{ echo "none"; } ?>" >
   <h1>Sendhive Accounts</h1>
   
    <form method="post" action="<?php echo esc_url( admin_url('admin.php') ); ?>?page=autoresponders_settings&request=convertkit">
      <table class="form-table">
         <tbody>		 
		
           <tr> 
		 <th scope="row"> 
		 <label for="api_key">List Id</label> 
		 </th> 
		 <td>  
		 <input name="sendhive_list" type="text" id="sendhive_list" class="regular-text"  value="<?php echo get_option('sendhive_list'); ?>" style="min-width: 650px;">
		
		 </td>  
		 </tr>
            
		    <tr> 
		 <th scope="row"> 
		 <label for="api_key">Access key	</label> 
		 </th> 
		 <td>  
		 <input name="sendhive_key" type="text" id="sendhive_key" class="regular-text"  value="<?php echo get_option('sendhive_key'); ?>" style="min-width: 650px;">
		    
		 </td>  
		 </tr>
         </tbody>
      </table>
      <p class="submit">
         <input type="submit" name="sendhive" id="submit" class="button button-primary" value="submit">
      </p>
   </form>
</div>



<!-- Tab 6 -->

<div class="wrap" id="tab6" style="display:<?php if($tab == 'birdsend'){ echo "block";  }else{ echo "none"; } ?>" >
   <h1>Birdsend Accounts</h1>
   
    <form method="post" action="<?php echo esc_url( admin_url('admin.php') ); ?>?page=autoresponders_settings&request=birdsend">
      <table class="form-table">
         <tbody>		 
		
		<tr>
		<td colspan="2" style="padding-left: 0;"><h2>Birdsend 1</h2></td>
		</tr>
            
		<tr> 
		 <th scope="row"> 
		 <label for="api_key">Access Token</label> 
		 </th> 
		 <td>  
		 <textarea name="birdsend_token" type="text" id="birdsend_token" class="regular-text"  style="min-width: 650px;height:200px"><?php echo get_option('birdsend_token'); ?></textarea>
		    
		 </td>  
		 </tr>
		 
		 
		<tr>
		<td colspan="2" style="padding-left: 0;"><h2>Birdsend 2</h2></td>
		</tr>
            
		<tr> 
		 <th scope="row"> 
		 <label for="api_key">Access Token</label> 
		 </th> 
		 <td>  
		 <textarea name="birdsend_token2" type="text" id="birdsend_token2" class="regular-text"  style="min-width: 650px;height:200px"><?php echo get_option('birdsend_token2'); ?></textarea>
		    
		 </td>  
		 </tr>
		 
		 
		 
		 	<tr>
		<td colspan="2" style="padding-left: 0;"><h2>Birdsend 3</h2></td>
		</tr>
            
		<tr> 
		 <th scope="row"> 
		 <label for="api_key">Access Token</label> 
		 </th> 
		 <td>  
		 <textarea name="birdsend_token3" type="text" id="birdsend_token3" class="regular-text"  style="min-width: 650px;height:200px"><?php echo get_option('birdsend_token3'); ?></textarea>
		    
		 </td>  
		 </tr>
		 
		 
         </tbody>
      </table>
      <p class="submit">
         <input type="submit" name="birdsend" id="submit" class="button button-primary" value="submit">
      </p>
   </form>
</div>




<!-- Tab 4 -->

<div class="wrap" id="tab4" style="display:<?php if($tab == 'aweber'){ echo "block";  }else{ echo "none"; } ?>" >
   <h1>Aweber Accounts</h1>
   <p>Use the GetResponse API key to connect your site and GetResponse</p>
  
   
   <?php
	
		// echo '<pre>'; print_r($_POST); echo '</pre>';
		require_once('aweber_api/aweber_api.php');
		$consumerKey    = get_option('consumerKey');
		$consumerSecret = get_option('consumerSecret');		
		$accessToken    = get_option('requestToken');
		$accessTokenSecret = get_option('tokenSecret');		if(!empty($consumerKey) && !empty($consumerSecret) && !empty($accessToken) && !empty($accessTokenSecret) ){			
			$aweber = new AWeberAPI($consumerKey, $consumerSecret);
			$account = $aweber->getAccount($accessToken, $accessTokenSecret);
			$lists = $account->lists;		
			$accountID = $account->data['id'];
		}
		/*try {		   
		    $listURL = "/accounts/1393492/lists/5353503";
		    $list = $account->loadFromUrl($listURL);
		    # create a subscriber
		    $params = array(
		        'email' => "ddddd@gmail.com",
		        'name' => "ddd",
		    );
		    $subscribers = $list->subscribers;
		    $new_subscriber = $subscribers->create($params);
		    print "A new subscriber was added to the $list->name list!";
		   
		} catch(AWeberAPIException $exc) {
		    // print "<h3>AWeberAPIException:</h3>";
		    // print " <li> Type: $exc->type              <br>";
		    // print " <li> Msg : $exc->message           <br>";
		    // print " <li> Docs: $exc->documentation_url <br>";
		    // print "<hr>";
		    // exit(1);
		    //header("Location: http://***.com/");
		}*/
		
		

?>

        
   
   <form method="post" action="<?php echo esc_url( admin_url('admin.php') ); ?>?page=autoresponders_settings&request=aweber">
      <table class="form-table">
         <tbody>	 
		 
		 
		 
            <tr>
			<th> <label for="api_key"> Aweber Authorization</label></th>
			<td><a target="_blank" href="https://auth.aweber.com/1.0/oauth/authorize_app/f49b1bcf">Click here to get your authorization code</a></td>
            </tr>
            <tr>
               <th scope="row">
                  <label for="api_key">   Aweber Verification code</label>
               </th>
			   
			   
               <td>
                  <textarea name="aweber1" type="text" id="api_key" class="regular-text" rows="4"><?php echo get_option('aweber'); ?> </textarea>
                  <p class="description">
                    Select List below and save again.			
                  </p>                  
               </td>
            </tr>
			<tr>
               <th scope="row">
                  <label for="api_key">List</label>
               </th>
			   
			   
               <td>
			   <input type="hidden" name="accountId" value="<?php echo $accountID; ?>" /> 
				<select style="width:250px;display:block;margin-bottom:15px;margin-top:5px" class="widefat" name="ListId"  >
					<option value="FALSE">Select A List</option>
						<?php    
							$lid = get_option('ListId');
						if(isset($lists)){ foreach ($lists as $this_list): ?>
						<option value="<?php echo $this_list->id; ?>"<?php echo ($this_list->id == $lid ) ? ' selected="selected"' : ""; ?>><?php echo $this_list->name; ?></option>
						<?php endforeach; } ?>
				</select>                 
               </td>
            </tr>
         
      
         </tbody>
      </table>
      <p class="submit">
         <input type="submit" name="aweber" id="submit" class="button button-primary" value="submit">
      </p>
   </form>
</div>






<!-- Tab 8 -->

<div class="wrap" id="tab8" style="display:<?php if($tab == 'moosend'){ echo "block";  }else{ echo "none"; } ?>" >
   <h1>Moosend Account</h1>
   
    <form method="post" action="<?php echo esc_url( admin_url('admin.php') ); ?>?page=autoresponders_settings&request=convertkit">
      <table class="form-table">
         <tbody>		 
		
		
		    <tr> 
		 <th scope="row"> 
		 <label for="api_key">Api Key	</label> 
		 </th> 
		 <td>  
		 <input name="moosend_key" type="text" id="moosend_key" class="regular-text"  value="<?php echo get_option('moosend_key'); ?>" placeholder="57df1db2-57c2-41da-b906-8993c1383b04" style="min-width: 650px;">
		    
		 </td>  
		 </tr>
		
		
		
		
           <tr> 
		 <th scope="row"> 
		 <label for="api_key">List Id</label> 
		 </th> 
		 <td>  
		 <input name="moosend_list" type="text" id="moosend_list" class="regular-text"  value="<?php echo get_option('moosend_list'); ?>" placeholder="9f56d8ae-c979-47aa-9302-600781db3a4f" style="min-width: 650px;">
		
		 </td>  
		 </tr>
            
		
         </tbody>
      </table>
      <p class="submit">
         <input type="submit" name="moosend" id="submit" class="button button-primary" value="submit">
      </p>
   </form>
</div>





<!-- Tab 9 -->

<div class="wrap" id="tab8" style="display:<?php if($tab == 'benchmark'){ echo "block";  }else{ echo "none"; } ?>" >
   <h1>Benchmarkemail Account</h1>
   
    <form method="post" action="<?php echo esc_url( admin_url('admin.php') ); ?>?page=autoresponders_settings&request=benchmark">
      <table class="form-table">
         <tbody>		 
		
		
		    <tr> 
		 <th scope="row"> 
		 <label for="api_key">Api Key	</label> 
		 </th> 
		 <td>  
		 <input name="benchmark_key" type="text" id="benchmark_key" class="regular-text"  value="<?php echo get_option('benchmark_key'); ?>" placeholder="FAB3E04E-5D9C-4AE6-9296-0680B9326D5A" style="min-width: 650px;">
		    
		 </td>  
		 </tr>
		
		
		
		
           <tr> 
		 <th scope="row"> 
		 <label for="api_key">List Id</label> 
		 </th> 
		 <td>  
		 <input name="benchmark_list" type="text" id="benchmark_list" class="regular-text"  value="<?php echo get_option('benchmark_list'); ?>" placeholder="18190956" style="min-width: 650px;">
		
		 </td>  
		 </tr>
            
		
         </tbody>
      </table>
      <p class="submit">
         <input type="submit" name="benchmark" id="submit" class="button button-primary" value="submit">
      </p>
   </form>
</div>








