
<?php



    // set up default parameters

	$a = shortcode_atts(array(

	 'formid' => '1',
     'name' => '0',
	 'phone' => '0',
	 'buttontext' => 'submit',
	 'buttoncolor' => '#F4AB00',
	 'buttoncolor2' => '#3a3a3a',	 
	 'buttonhovercolor' => '#3a3a3a',	 
	 'buttonhovercolor2' => '#3a3a3a',
	 'fontsize' => '24px',
	 'fontsize2' => '18px',
	 'formtitle' => 'Register Now',
	 'nameplaceholder' => 'Enter Your Name Here',
	 'emailplaceholder' => 'Enter Your Best Email Here',
	 'redirecturl' => '',
    ), $atts);

	

	$formid = $a['formid'];
	$bcolor = $a['buttoncolor'];
	$bcolor2 = $a['buttoncolor2'];
	$bcolorhover = $a['buttonhovercolor'];
	$bcolorhover2 = $a['buttonhovercolor2'];	
	$buttontext = $a['buttontext'];
	$formtitle = $a['formtitle'];
	$nameplaceholder = $a['nameplaceholder'];
	$emailplaceholder = $a['emailplaceholder'];
	$redirecturl = $a['redirecturl'];
	$fontsize = $a['fontsize'];
	$fontsize2 = $a['fontsize2'];

?>



 

<div class="wrapper">

  <h1 style="font-size:<?php echo $fontsize; ?>!important;font-family: 'Open Sans', sans-serif!important;font-weight: 700!important;" ><?php echo $formtitle ; ?></h1>  
	
	<?php if($a['name'] == 1){ ?>  
	<i class="fa fa-user formicn favdiff" aria-hidden="true"></i>
    <input type="text" class="name autoresinput" id="autoname_<?php echo $formid; ?>" name="autoname" placeholder="<?php echo $nameplaceholder; ?>" style="font-family: 'Open Sans', sans-serif!important;font-weight: 700!important;font-size:<?php echo $fontsize2; ?>!important;">
	

    <div></div>

	<?php } ?>
	<i class="fa fa-envelope formicn" aria-hidden="true"></i>
	<input type="email" class="email autoresinput" id="autoemail_<?php echo $formid; ?>" name="autoemail"  placeholder="<?php echo $emailplaceholder; ?>" style="font-family: 'Open Sans', sans-serif!important;font-weight: 700!important;font-size:<?php echo $fontsize2; ?>!important;">
	
    <input type="hidden" class="redirecturl autoresinput" id="redirecturl_<?php echo $formid; ?>" name="redirecturl" placeholder="redirecturl" value="<?php echo $redirecturl ; ?>" style="font-family: 'Open Sans', sans-serif!important;font-weight: 700!important;">

     <div></div>

	 <?php if($a['phone'] == 1){ ?>  
	<i class="fa fa-phone formicn favdiff" aria-hidden="true"></i>
	<input type="text" class="name autoresinput" placeholder="Enter Your Phone Number Here" name="Phone" id="autophone_<?php echo $formid; ?>" style="font-family: 'Open Sans', sans-serif!important;font-weight: 700!important;font-size:<?php echo $fontsize2; ?>!important;">
	
	

	 <?php } ?>	

    <input type="submit" class="submit autoressubmit" id="submitbutton_<?php echo $formid; ?>" value="<?php echo $buttontext ; ?>" onclick="saveleads('<?php echo $formid; ?>');" style="cursor:pointer;font-family: 'Open Sans', sans-serif!important;font-weight: 700!important;font-size:<?php echo $fontsize2; ?>!important;"> 
	<div id="autoloder" class="autoloder_<?php echo $formid; ?>" style=" text-align: center;display:none;"><img src="<?php  echo plugins_url().'/autoresponders-apis/js/indicator.svg' ?>" /></div>
	
</div>





<style>

.formicn{

   padding: 15px;
    color: <?php echo $bcolor ; ?>;
    margin-left: -56px;
    position: relative;
    float: right;
    border-radius: 5px 0px 0px 5px;
    right: 0;
	
}
.favdiff{
	padding-right: 17px!important;
    padding-left: 17px!important;
}
.autoresinput{

  width:100%!important;

  padding:10px 0px 10px 8px!important;

  border-radius:5px!important;

  box-shadow:inset 4px 6px 10px -4px rgb(230, 230, 230), 0 1px 1px -1px rgba(255,255,255,0.3)!important;

  @include disable!important;

  border:1px solid #eee!important;

  margin-bottom:10px!important;

  color:#000!important;

  

}



.autoressubmit{

  width:100%;

  padding:15px 0px 15px 10px!important;

  border-radius:5px;

  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(<?php echo $bcolor ; ?>), to(<?php echo $bcolor2 ; ?>))!important;

  background-image: -webkit-linear-gradient(<?php echo $bcolor ; ?> 0%, <?php echo $bcolor2 ; ?> 100%);

  background-image: -moz-linear-gradient(<?php echo $bcolor ; ?> 0%, <?php echo $bcolor2 ; ?> 100%);

  background-image: -o-linear-gradient(<?php echo $bcolor ; ?> 0%, <?php echo $bcolor2 ; ?> 100%);

  background-image: linear-gradient(<?php echo $bcolor ; ?> 0%, <?php echo $bcolor2 ; ?> 100%)!important;

  font:18px Oswald!important;

  color:#FFF!important;

  text-transform:uppercase!important;

  text-shadow:#000 0px 1px 5px!important; 

 

	-webkit-box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7)!important;

  -moz-box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7)!important;

	box-shadow: 0 8px 6px -6px rgba(0,0,0,0.7)!important;

	border:0!important;

  -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(50%, transparent), to(rgba(255,255,255,0.2)))!important;

}






.autoressubmit:hover{

 

  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(<?php echo $bcolorhover ; ?>), to(<?php echo $bcolorhover2 ; ?>))!important;

  background-image: -webkit-linear-gradient(<?php echo $bcolorhover ; ?> 0%, <?php echo $bcolorhover2 ; ?> 100%)!important;

  background-image: -moz-linear-gradient(<?php echo $bcolorhover ; ?> 0%, <?php echo $bcolorhover2 ; ?> 100%)!important;

  background-image: -o-linear-gradient(<?php echo $bcolorhover ; ?> 0%, <?php echo $bcolorhover2 ; ?> 100%)!important;

  background-image: linear-gradient(<?php echo $bcolorhover; ?> 0%, <?php echo $bcolorhover2 ; ?> 100%)!important;


}











</style>