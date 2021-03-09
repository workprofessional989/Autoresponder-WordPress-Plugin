<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
include('convertkit/vendor/autoload.php');
use calderawp\convertKit\forms;	
   $data = $_REQUEST;
   saveLeads($data);
   
   function  saveLeads($data){	
   
   		$email = $data['email'];
   		$autophone = $data['autophone'];
   		$autoname = $data['autoname'];
		
		if(isset($email) && !empty($email)){

			/* ConvertKit Campaign  Starts */
			// echo '<pre>'; print_r($_POST); echo '</pre>';
			$convertkitapiKey    = get_option('convertkitapiKey');
			$convertkitFormid = get_option('convertkitFormid');	
			
			$convertkitapiKey_2    = get_option('convertkitapiKey_2');
			$convertkitFormid_2 = get_option('convertkitFormid_2');	
			
			if(!empty($convertkitapiKey) && !empty($convertkitFormid) ){
				// Send Lead to convertkit			
				$client = new forms( $convertkitapiKey );	
				$addsub = $client->add( $convertkitFormid , [ 'email' => $email, 'first_name' => $autoname ] );
		
			}	

			if(!empty($convertkitapiKey_2) && !empty($convertkitFormid_2) ){
				// Send Lead to convertkit			
				$client_2 = new forms( $convertkitapiKey_2 );	
				$addsub_2 = $client_2->add( $convertkitFormid_2 , [ 'email' => $email, 'first_name' => $autoname ] );
		
			}				

		/* ConvertKit Campaign  Ends */	
		
		/* GetResponse Integration */
   
   		include ('GetResponseAPI3.class.php');
   
   		$apiKey = get_option('getresponse1');
   		$campaignId = get_option('getresponselist1');	
   		if(!empty($apiKey) && !empty($campaignId)){	
			$api = new GetResponseto($apiKey);	
			$data = array('email'=>$email, 'campaign' => array('campaignId' => $campaignId));
			$addContact = $api->addContact($data);
   		}
   
   		/*  GetResponse save leads 2 */	
   
   		$apiKey2 = get_option('getresponse2');
   		$list12 = get_option('getresponselist2');
   		if(!empty($apiKey2) && !empty($campaignId2)){
   
			$api = new GetResponseto($apiKey2);
			$data = array('email'=>$email, 'campaign' => array('campaignId' => $campaignId2));
			$addContact = $api->addContact($data);	
		}
   
   		/* GetResponse Integration Ends */
   
   		/* Sendlane Integration  */
   
   		$sendlaneKey = get_option('sendlane1');	
   		$hashKey = get_option('sendlanehashkey1');	
   		$list_id = get_option('sendlanelist1');	
   		
   		if(!empty($sendlaneKey) && !empty($hashKey)  && !empty($list_id)){
   
   			echo "ok";
   			$url = "http://sendlane.com/api/v1/list-subscriber-add";
   			$fields = "api=".$sendlaneKey."&hash=".$hashKey."&list_id=".$list_id."&email=".$email."&first_name=".$autoname."&phone=".$autophone;
   			$ch = curl_init();	
   			curl_setopt($ch, CURLOPT_URL,$url);	
   			curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);	
   			curl_setopt($ch, CURLOPT_POST,true);	
   			curl_setopt($ch, CURLOPT_POSTFIELDS,$fields);
   			$result=curl_exec ($ch);	
   			$result	= json_decode($result);	
   		}	
   
   			/* Sendlane Integration 2 */	
   
   		$sendlaneKey2 = get_option('sendlane2');
   		$hashKey2 = get_option('sendlanehashkey2');
   		$list_id2 = get_option('sendlanelist2');	
   		
   		if(!empty($sendlaneKey2) && !empty($hashKey2) && !empty($list_id2)){
   
			echo "ok";	
			$url = "http://sendlane.com/api/v1/list-subscriber-add";	
			$fields = "api=".$sendlaneKey2."&hash=".$hashKey2."&list_id=".$list_id2."&email=".$email."&first_name=".$autoname."&phone=".$autophone;

			$ch = curl_init();	
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);	
			curl_setopt($ch, CURLOPT_POST,true);
			curl_setopt($ch, CURLOPT_POSTFIELDS,$fields);
			$result=curl_exec ($ch);	
			$result	= json_decode($result);	
   		}
   
		/* Sendlane Integration 3 */
		$sendlaneKey3 = get_option('sendlane3');
		$hashKey3 = get_option('sendlanehashkey3');	
		$list_id3 = get_option('sendlanelist3');
		
		if(!empty($sendlaneKey3) && !empty($hashKey3)  && !empty($list_id3)){

			echo "ok";
			$url = "http://sendlane.com/api/v1/list-subscriber-add";
			$fields = "api=".$sendlaneKey3."&hash=".$hashKey3."&list_id=".$list_id3."&email=".$email."&first_name=".$autoname."&phone=".$autophone;
			$ch = curl_init();	
			curl_setopt($ch, CURLOPT_URL,$url);	
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
			curl_setopt($ch, CURLOPT_POST,true);
			curl_setopt($ch, CURLOPT_POSTFIELDS,$fields);
			$result=curl_exec ($ch);
			$result	= json_decode($result);
		}	
   
		/* Sendlane Integration 3 */

		$sendlaneKey4 = get_option('sendlane4');
		$hashKey4 = get_option('sendlanehashkey4');
		$list_id4 = get_option('sendlanelist4');
		

		if(!empty($sendlaneKey4) && !empty($hashKey4) &&  !empty($list_id4)){

			echo "ok";
			$url = "http://sendlane.com/api/v1/list-subscriber-add";	
			$fields = "api=".$sendlaneKey4."&hash=".$hashKey4."&list_id=".$list_id4."&email=".$email."&first_name=".$autoname."&phone=".$autophone;

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,$url);	
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);	
			curl_setopt($ch, CURLOPT_POST,true);
			curl_setopt($ch, CURLOPT_POSTFIELDS,$fields);
			$result=curl_exec ($ch);
			$result	= json_decode($result);

		}	
		
		
		
		
		$sendlaneKey5 = get_option('sendlane5');
		$hashKey5 = get_option('sendlanehashkey5');
		$list_id5 = get_option('sendlanelist5');
		

		if(!empty($sendlaneKey5) && !empty($hashKey5) &&  !empty($list_id5)){

			echo "ok";
			$url = "http://sendlane.com/api/v1/list-subscriber-add";	
			$fields = "api=".$sendlaneKey5."&hash=".$hashKey5."&list_id=".$list_id5."&email=".$email."&first_name=".$autoname."&phone=".$autophone;

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,$url);	
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);	
			curl_setopt($ch, CURLOPT_POST,true);
			curl_setopt($ch, CURLOPT_POSTFIELDS,$fields);
			$result=curl_exec ($ch);
			$result	= json_decode($result);

		}
		
		$sendlaneKey6 = get_option('sendlane6');
		$hashKey6 = get_option('sendlanehashkey6');
		$list_id6 = get_option('sendlanelist6');
		

		if(!empty($sendlaneKey6) && !empty($hashKey6) &&  !empty($list_id6)){

			echo "ok";
			$url = "http://sendlane.com/api/v1/list-subscriber-add";	
			$fields = "api=".$sendlaneKey6."&hash=".$hashKey6."&list_id=".$list_id6."&email=".$email."&first_name=".$autoname."&phone=".$autophone;

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,$url);	
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);	
			curl_setopt($ch, CURLOPT_POST,true);
			curl_setopt($ch, CURLOPT_POSTFIELDS,$fields);
			$result=curl_exec ($ch);
			$result	= json_decode($result);

		}
		
		
		$sendlaneKey7 = get_option('sendlane7');
		$hashKey7 = get_option('sendlanehashkey7');
		$list_id7 = get_option('sendlanelist7');
		

		if(!empty($sendlaneKey7) && !empty($hashKey7) &&  !empty($list_id7)){

			echo "ok";
			$url = "http://sendlane.com/api/v1/list-subscriber-add";	
			$fields = "api=".$sendlaneKey7."&hash=".$hashKey7."&list_id=".$list_id7."&email=".$email."&first_name=".$autoname."&phone=".$autophone;

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,$url);	
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);	
			curl_setopt($ch, CURLOPT_POST,true);
			curl_setopt($ch, CURLOPT_POSTFIELDS,$fields);
			$result=curl_exec ($ch);
			$result	= json_decode($result);

		}
   
		/* Sendlane Integration  ends*/	

	/* Active Campaign  Starts */

	$url = get_option('activecampaignurl');
	$api_key = get_option('activecampaign');
	$activecampaignlist = get_option('activecampaignlist');
		
	if(!empty($url) && !empty($api_key) ){		

		$params = array( 
			'api_key' => $api_key,  
			'api_action'   => 'contact_add', 
			'api_output'   => 'serialize',
		);
   
		$post = array(
			'email'    => $email,
			'first_name'   => $autoname,
			'phone'  => $autophone,
			'p['.$activecampaignlist.']'  => $activecampaignlist,
		);
   
		
		$query = "";
		foreach( $params as $key => $value ) $query .= urlencode($key) . '=' . urlencode($value) . '&';
		$query = rtrim($query, '& ');

		
		$data = "";
		foreach( $post as $key => $value ) $data .= urlencode($key) . '=' . urlencode($value) . '&';
		
			$data = rtrim($data, '& ');		
			$url = rtrim($url, '/ ');
		
		if ( !function_exists('curl_init') ) die('CURL not supported. (introduced in PHP 4.0.2)');

		
		if ( $params['api_output'] == 'json' && !function_exists('json_decode') ) {
			die('JSON not supported. (introduced in PHP 5.2.0)');
		}

		
		$api = $url . '/admin/api.php?' . $query;
		$request = curl_init($api);
		curl_setopt($request, CURLOPT_HEADER, 0); 
		curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($request, CURLOPT_POSTFIELDS, $data);
		
		curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);
		$response = (string)curl_exec($request); 
		
		curl_close($request); 
		if ( !$response ) {
			die('Nothing was returned. Do you have a connection to Email Marketing server?');
		}
		$result = unserialize($response);
		
		echo 'Result: ' . ( $result['result_code'] ? 'SUCCESS' : 'FAILED' ) . '<br />';
	}
	
	$url2 = get_option('activecampaignur2');
	$api_key2 = get_option('activecampaign2');
	$activecampaignlist2 = get_option('activecampaignlist2');
	
	if(!empty($url2) && !empty($api_key2) ){
			$params = array( 			'api_key' => $api_key2,  			'api_action'   => 'contact_add', 			'api_output'   => 'serialize',		);

			$post = array(			'email'    => $email,			'first_name'   => $autoname,			'phone'  => $autophone,			'p['.$activecampaignlist2.']'  => $activecampaignlist2,		);

			$query = "";
			foreach( $params as $key => $value ) $query .= urlencode($key) . '=' . urlencode($value) . '&';	
			$query = rtrim($query, '& ');
			$data = "";
			foreach( $post as $key => $value ) $data .= urlencode($key) . '=' . urlencode($value) . '&';

			$data = rtrim($data, '& ');	
			$url2 = rtrim($url2, '/ ');
			if ( !function_exists('curl_init') ) die('CURL not supported. (introduced in PHP 4.0.2)');
			if ( $params['api_output'] == 'json' && !function_exists('json_decode') ) {	
			die('JSON not supported. (introduced in PHP 5.2.0)');		}
			$api = $url2 . '/admin/api.php?' . $query;
			$request = curl_init($api);
			curl_setopt($request, CURLOPT_HEADER, 0);
			curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($request, CURLOPT_POSTFIELDS, $data);
			curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);
			$response = (string)curl_exec($request);
			curl_close($request); 
			if ( !$response ) {	
			die('Nothing was returned. Do you have a connection to Email Marketing server?');	
			}
			$result = unserialize($response);
			echo 'Result: ' . ( $result['result_code'] ? 'SUCCESS' : 'FAILED' ) . '<br />';
		}




	$url3 = get_option('activecampaignur3');
	$api_key3 = get_option('activecampaign3');
	$activecampaignlist3 = get_option('activecampaignlist3');
		
	if(!empty($url3) && !empty($api_key3) ){		

		$params = array( 
			'api_key' => $api_key3,  
			'api_action'   => 'contact_add', 
			'api_output'   => 'serialize',
		);
   
		$post = array(
			'email'    => $email,
			'first_name'   => $autoname,
			'phone'  => $autophone,
			'p['.$activecampaignlist3.']'  => $activecampaignlist3,
		);
   
		
		$query = "";
		foreach( $params as $key => $value ) $query .= urlencode($key) . '=' . urlencode($value) . '&';
		$query = rtrim($query, '& ');

		
		$data = "";
		foreach( $post as $key => $value ) $data .= urlencode($key) . '=' . urlencode($value) . '&';
		
			$data = rtrim($data, '& ');		
			$url3 = rtrim($url3, '/ ');
		
		if ( !function_exists('curl_init') ) die('CURL not supported. (introduced in PHP 4.0.2)');

		
		if ( $params['api_output'] == 'json' && !function_exists('json_decode') ) {
			die('JSON not supported. (introduced in PHP 5.2.0)');
		}

		
		$api = $url3 . '/admin/api.php?' . $query;
		$request = curl_init($api);
		curl_setopt($request, CURLOPT_HEADER, 0); 
		curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($request, CURLOPT_POSTFIELDS, $data);
		
		curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);
		$response = (string)curl_exec($request); 
		
		curl_close($request); 
		if ( !$response ) {
			die('Nothing was returned. Do you have a connection to Email Marketing server?');
		}
		$result = unserialize($response);
		
		echo 'Result: ' . ( $result['result_code'] ? 'SUCCESS' : 'FAILED' ) . '<br />';
	}








	$url4 = get_option('activecampaignurl4');
	$api_key4 = get_option('activecampaign4');
	$activecampaignlist4 = get_option('activecampaignlist4');
		
	if(!empty($url4) && !empty($api_key4) ){		

		$params = array( 
			'api_key' => $api_key4,  
			'api_action'   => 'contact_add', 
			'api_output'   => 'serialize',
		);
   
		$post = array(
			'email'    => $email,
			'first_name'   => $autoname,
			'phone'  => $autophone,
			'p['.$activecampaignlist4.']'  => $activecampaignlist4,
		);
   
		
		$query = "";
		foreach( $params as $key => $value ) $query .= urlencode($key) . '=' . urlencode($value) . '&';
		$query = rtrim($query, '& ');

		
		$data = "";
		foreach( $post as $key => $value ) $data .= urlencode($key) . '=' . urlencode($value) . '&';
		
			$data = rtrim($data, '& ');		
			$url4 = rtrim($url4, '/ ');
		
		if ( !function_exists('curl_init') ) die('CURL not supported. (introduced in PHP 4.0.2)');

		
		if ( $params['api_output'] == 'json' && !function_exists('json_decode') ) {
			die('JSON not supported. (introduced in PHP 5.2.0)');
		}

		
		$api = $url4 . '/admin/api.php?' . $query;
		$request = curl_init($api);
		curl_setopt($request, CURLOPT_HEADER, 0); 
		curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($request, CURLOPT_POSTFIELDS, $data);
		
		curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);
		$response = (string)curl_exec($request); 
		
		curl_close($request); 
		if ( !$response ) {
			die('Nothing was returned. Do you have a connection to Email Marketing server?');
		}
		$result = unserialize($response);
		
		echo 'Result: ' . ( $result['result_code'] ? 'SUCCESS' : 'FAILED' ) . '<br />';
	}

	
	/* Active Campaign  Ends */
		
		
		
	/* Aweber Campaign  Starts */	
	
	
	// echo '<pre>'; print_r($_POST); echo '</pre>';
		
	require_once('aweber_api/aweber_api.php');
		
	$consumerKey    = get_option('consumerKey');
	$consumerSecret = get_option('consumerSecret');		
	$accessToken    = get_option('requestToken');
	$accessTokenSecret = get_option('tokenSecret');	
	$ListId = get_option('ListId');	
	$AccountId = get_option('AccountId');	

		if(!empty($consumerKey) && !empty($consumerSecret) && !empty($accessToken) && !empty($accessTokenSecret) && !empty($ListId) && !empty($AccountId)){
			
			$aweber = new AWeberAPI($consumerKey, $consumerSecret);
				
				try {		   
				$account = $aweber->getAccount($accessToken, $accessTokenSecret);				
				$listURL = '/accounts/'.$AccountId.'/lists/'.$ListId;
				$list = $account->loadFromUrl($listURL);
				# create a subscriber
				$params = array(
						'email' => $email,
						'name' => $autoname,
				);
				$subscribers = $list->subscribers;
				$new_subscriber = $subscribers->create($params);
				print "A new subscriber was added to the $list->name list!";

				} catch(AWeberAPIException $exc) {			
				
					print " <li> Msg : $exc->message           <br>";
					
					
				}
			   
				
		}
	/* Aweber Campaign  Ends */
	




	/*Birdsend Accounts Start   */

	$birdsend_token    = get_option('birdsend_token');
	$birdsend_token2    = get_option('birdsend_token2');
	$birdsend_token3   = get_option('birdsend_token3');

	if(!empty($birdsend_token) ){
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.birdsend.co/v1/contacts?email=".$email."&fields[first_name]=".$autoname,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json",
			"Accept: application/json",
			"Authorization: Bearer ".$birdsend_token
			
		  ),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		echo $response;
			
	}


	if(!empty($birdsend_token2) ){
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.birdsend.co/v1/contacts?email=".$email."&fields[first_name]=".$autoname,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json",
			"Accept: application/json",
			"Authorization: Bearer ".$birdsend_token2
			
		  ),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		echo $response;
			
	}
	
	
	if(!empty($birdsend_token3) ){
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.birdsend.co/v1/contacts?email=".$email."&fields[first_name]=".$autoname,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json",
			"Accept: application/json",
			"Authorization: Bearer ".$birdsend_token3
			
		  ),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		echo $response;
			
	}

	/*Birdsend Accounts Ends   */


	
	/* sendhive Start   */
	
	

	function make_post(  $data , $sendhive_list , $sendhive_key )
	{		
		$url = "http://sendhive.io/api/open/lists/".$sendhive_list;
		$payload = json_encode( $data );
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, $url );
		curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "POST" );
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
		$headers = array( 
			"Content-Type: application/json",
			"x-access-key:  $sendhive_key"
		);
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );		
		$server_output = curl_exec($ch);		
		$responseCode   = curl_getinfo($ch, CURLINFO_HTTP_CODE);		
		$errors = curl_error($ch);
		curl_close ($ch);		
		echo $server_output . "\n";
		return true;
	}
	
	
	$sendhive_list = get_option('sendhive_list');
	$sendhive_key = get_option('sendhive_key');
	
	if(!empty($sendhive_list) && !empty($sendhive_key) ){
		$arr_data[0] = array("email" => $email , "firstName" =>$autoname );
		$email = array( "emails" => $arr_data , $sendhive_list , $sendhive_key );
		make_post( $email , $sendhive_list , $sendhive_key);
	}
	
	
	/* moosend Start   */
	
	
	$moosend_list = get_option('moosend_list');
	$moosend_key = get_option('moosend_key');
	
	if(!empty($moosend_list) && !empty($moosend_key) ){
		
		global $wpdb;
		
		$_POST['MemberEmail'] =  $email;
		if(!empty($autoname)){		
			$_POST['Name']['Value'] =  $autoname;
		}
		if(!empty($autophone)){		
			$_POST['Mobile']['Value'] =  '+1'.$autophone;
		}
		
		$_POST['SubscribeType'] =  1;
		$_POST['SingleOptInStatus']['OptedInSource'] =  100;		
		$_POST['MailingListId'] =  $moosend_list;
		
		
		$params = $_POST;
		$endpoint = 'https://gateway.services.moosend.com/members/subscribe/';

		$response = wp_remote_post(
		$endpoint, 
		array(
			'headers' => array('X-ApiKey' => $moosend_key),
			'body' => json_encode($params)
		));		
		
		
	}
	
	
	/* moosend Start   */
	
	
	$benchmark_list = get_option('benchmark_list');
	$benchmark_key = get_option('benchmark_key');
	
	if(!empty($benchmark_list) && !empty($benchmark_key) ){
		
		
		
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => 'http://clientapi.benchmarkemail.com/Contact/'.$benchmark_list.'/ContactDetails',
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => '',
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => 'POST',
			  CURLOPT_POSTFIELDS =>'{"Data":{"Email":"'.$email.'","FirstName":"'.$autoname.'","EmailPerm":"1"}}',
			  CURLOPT_HTTPHEADER => array(
				'AuthToken: '.$benchmark_key,
				'Content-Type: application/json'
			  ),
			));

			$response = curl_exec($curl);

			curl_close($curl);
			//echo $response;		
			exit;
		
		
		
	}	
	
	
	
	}else{
			
			echo "Something went wrong. Try again.";exit;
	}
	
		
}
   
?>