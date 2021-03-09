<?php

    function getData($params)
    {
		
		/*print_r($_POST);*/
		
        if(isset($_POST['getresponse']) && $_POST['getresponse'] == 'submit'){
			
				$gralikey1 = $_POST['getresponse1'];
				$gralikey2 = $_POST['getresponse2'];
				$getresponselist1 = $_POST['getresponselist1'];
				$getresponselist2 = $_POST['getresponselist2'];
				
				
				update_option( 'getresponse1', $gralikey1);
				update_option( 'getresponse2', $gralikey2);
				update_option( 'getresponselist1', $getresponselist1);
				update_option( 'getresponselist2', $getresponselist2);
		
		}
		
		if(isset($_POST['sendlane']) && $_POST['sendlane'] == 'submit'){
			
				$sendlane1 = $_POST['sendlane1'];
				$sendlane2 = $_POST['sendlane2'];
				$sendlane3 = $_POST['sendlane3'];
				$sendlane4 = $_POST['sendlane4'];
				$sendlane5 = $_POST['sendlane5'];
				$sendlane6 = $_POST['sendlane6'];
				$sendlane7 = $_POST['sendlane7'];
				
				
				$sendlanehashkey1 = $_POST['sendlanehashkey1'];
				$sendlanehashkey2 = $_POST['sendlanehashkey2'];
				$sendlanehashkey3 = $_POST['sendlanehashkey3'];
				$sendlanehashkey4 = $_POST['sendlanehashkey4'];
				$sendlanehashkey5 = $_POST['sendlanehashkey5'];
				$sendlanehashkey6 = $_POST['sendlanehashkey6'];
				$sendlanehashkey7 = $_POST['sendlanehashkey7'];
				
				$sendlanelist1 = $_POST['sendlanelist1'];
				$sendlanelist2 = $_POST['sendlanelist2'];
				$sendlanelist3 = $_POST['sendlanelist3'];
				$sendlanelist4 = $_POST['sendlanelist4'];
				$sendlanelist5 = $_POST['sendlanelist5'];
				$sendlanelist6 = $_POST['sendlanelist6'];
				$sendlanelist7 = $_POST['sendlanelist7'];
				
				
				
				update_option( 'sendlane1', $sendlane1);
				update_option( 'sendlane2', $sendlane2);
				update_option( 'sendlane3', $sendlane3);
				update_option( 'sendlane4', $sendlane4);
				update_option( 'sendlane5', $sendlane5);
				update_option( 'sendlane6', $sendlane6);
				update_option( 'sendlane7', $sendlane7);

				update_option( 'sendlanehashkey1', $sendlanehashkey1);
				update_option( 'sendlanehashkey2', $sendlanehashkey2);
				update_option( 'sendlanehashkey3', $sendlanehashkey3);
				update_option( 'sendlanehashkey4', $sendlanehashkey4);
				update_option( 'sendlanehashkey5', $sendlanehashkey5);
				update_option( 'sendlanehashkey6', $sendlanehashkey6);
				update_option( 'sendlanehashkey7', $sendlanehashkey7);
				
				update_option( 'sendlanelist1', $sendlanelist1);
				update_option( 'sendlanelist2', $sendlanelist2);
				update_option( 'sendlanelist3', $sendlanelist3);
				update_option( 'sendlanelist4', $sendlanelist4);
				update_option( 'sendlanelist5', $sendlanelist5);
				update_option( 'sendlanelist6', $sendlanelist6);
				update_option( 'sendlanelist7', $sendlanelist7);
				
				
				
		
		}
		
		if(isset($_POST['activecampaign']) && $_POST['activecampaign'] == 'submit'){
			
				$activecampaign = $_POST['activecampaign1'];
				$activecampaignurl = $_POST['activecampaignurl'];
				$activecampaignlist = $_POST['activecampaignlist'];
				update_option( 'activecampaign', $activecampaign);
				update_option( 'activecampaignurl', $activecampaignurl);
				update_option( 'activecampaignlist', $activecampaignlist);
				
				
				$activecampaign2 = $_POST['activecampaign2'];
				$activecampaignur2 = $_POST['activecampaignur2'];
				$activecampaignlist2 = $_POST['activecampaignlist2'];	
				update_option( 'activecampaign2', $activecampaign2);
				update_option( 'activecampaignur2', $activecampaignur2);
				update_option( 'activecampaignlist2', $activecampaignlist2);
				
				
				
				$activecampaign3 = $_POST['activecampaign3'];
				$activecampaignur3 = $_POST['activecampaignur3'];
				$activecampaignlist3 = $_POST['activecampaignlist3'];	
				update_option( 'activecampaign3', $activecampaign3);
				update_option( 'activecampaignur3', $activecampaignur3);
				update_option( 'activecampaignlist3', $activecampaignlist3);
				
				
				
				$activecampaign4 = $_POST['activecampaign4'];
				$activecampaignur4 = $_POST['activecampaignur4'];
				$activecampaignlist4 = $_POST['activecampaignlist4'];	
				update_option( 'activecampaign4', $activecampaign4);
				update_option( 'activecampaignur4', $activecampaignur4);
				update_option( 'activecampaignlist4', $activecampaignlist4);
				
				
		
		}
		
		if(isset($_POST['aweber']) && $_POST['aweber'] == 'submit'){
			
			
				
				$aweber = trim($_POST['aweber1']);
				$AccountId = $_POST['accountId'];
				$ListId = $_POST['ListId'];
				$currentaweber = trim(get_option('aweber'));
			
				if($currentaweber != $aweber){		
					
					update_option( 'aweber', $aweber);
					
					require_once('aweber_api/aweber_api.php');
					$consumerKey    = $keys[0];
					$consumerSecret = $keys[1]	;	
					$AWeberAPI = new AWeberAPI($consumerKey, $consumerSecret);
					list($consumer_key, $consumer_secret, $access_key, $access_secret) = $AWeberAPI::getDataFromAweberID($aweber);			
					
					$values = explode('|', $aweber);				
					$keys =  array_slice($values, 0, 5);
					if (count($values) < 5) {
						return null;
					}
					update_option( 'consumerKey', $keys[0]);
					update_option( 'consumerSecret', $keys[1]);
					update_option( 'requestToken',$access_key);
					update_option( 'tokenSecret', $access_secret);
					update_option( 'verifier', $keys[4]);
				}
				
				update_option( 'ListId', $ListId);
				update_option( 'AccountId', $AccountId);
				
				
		
		}
		
		
		
		if(isset($_POST['convertkit']) && $_POST['convertkit'] == 'submit'){
			
			$convertkitapiKey = $_POST['convertkit_api_key'];				
			$convertkitFormid = $_POST['convertkit_formid'];
			$convertkitapiKey_2 = $_POST['convertkit_api_key_2'];				
			$convertkitFormid_2 = $_POST['convertkit_formid_2'];			
			
			update_option( 'convertkitapiKey', $convertkitapiKey);
			update_option( 'convertkitFormid', $convertkitFormid);
			update_option( 'convertkitapiKey_2', $convertkitapiKey_2);
			update_option( 'convertkitFormid_2', $convertkitFormid_2);			
				
		
		}
		
		
		if(isset($_POST['sendhive']) && $_POST['sendhive'] == 'submit'){
			
			$sendhive_list = $_POST['sendhive_list'];				
			$sendhive_key = $_POST['sendhive_key'];
				
			
			update_option( 'sendhive_list', $sendhive_list);
			update_option( 'sendhive_key', $sendhive_key);
				
				
		
		}
		
		
		if(isset($_POST['birdsend']) && $_POST['birdsend'] == 'submit'){
			
			
			$birdsend_token = $_POST['birdsend_token'];				
			$birdsend_token2 = $_POST['birdsend_token2'];				
			$birdsend_token3 = $_POST['birdsend_token3'];				
			
			update_option( 'birdsend_token', $birdsend_token);
			update_option( 'birdsend_token2', $birdsend_token2);
			update_option( 'birdsend_token3', $birdsend_token3);
			
				
				
		
		}
		
		
		if(isset($_POST['moosend']) && $_POST['moosend'] == 'submit'){
			
			$moosend_list = $_POST['moosend_list'];				
			$moosend_key = $_POST['moosend_key'];
				
			
			update_option( 'moosend_list', $moosend_list);
			update_option( 'moosend_key', $moosend_key);
				
				
		
		}
		
		
		
		
		
		if(isset($_POST['benchmark']) && $_POST['benchmark'] == 'submit'){
			
			$benchmark_list = $_POST['benchmark_list'];				
			$benchmark_key = $_POST['benchmark_key'];
				
			
			update_option( 'benchmark_list', $benchmark_list);
			update_option( 'benchmark_key', $benchmark_key);
				
				
		
		}
		
		
		
		
		
		
		
		
    }



   

