
    <?php 

$apikey = "NTYxOTZhNTgtNjU2My00YTQ2LTlhZjAtYTVkNzZkY2I4Yjc0OjY2YTI5OGI4LTg0OTUtNDVjZi1iNzk1LTI1MzE0OTc2YTQ5Zg==";     // enter your API key here  //NTYxOTZhNTgtNjU2My00YTQ2LTlhZjAtYTVkNzZkY2I4Yjc0OjY2YTI5OGI4LTg0OTUtNDVjZi1iNzk1LTI1MzE0OTc2YTQ5Zg==
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://api-gateway.sandbox.ngenius-payments.com/identity/auth/access-token"); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "accept: application/vnd.ni-identity.v1+json",
    "authorization: Basic ".$apikey,
    "content-type: application/vnd.ni-identity.v1+json"
  )); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS,  "{\"realmName\":\"ni\"}"); 
$output = json_decode(curl_exec($ch)); 
		$access_token = $output->access_token;     
        
        $postData = [
			"action" => "PURCHASE",
			"amount" => [
			"currencyCode" => "AED",
			"value" => 100 * 100,
				],
			"merchantAttributes" => [
				"redirectUrl" =>  "https://ohyamal.com"
			],
			];
		
		
		    $outlet = "c7e71431-bdf4-49d0-a984-fd2ecd0267c3";
		  
			$json = json_encode($postData);
			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "https://api-gateway.sandbox.ngenius-payments.com/transactions/outlets/".$outlet."/orders");
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			"Authorization: Bearer ".$access_token, 
			"Content-Type: application/vnd.ni-payment.v2+json",
			"Accept: application/vnd.ni-payment.v2+json"));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

			$output = json_decode(curl_exec($ch));
			// print_r(json_decode(curl_exec($ch)));
			$order_reference = $output->reference;
			$order_paypage_url = $output->_links->payment->href;
	
    header("Location: ".$order_paypage_url);
			curl_close ($ch);





//  $apikey = "NTYxOTZhNTgtNjU2My00YTQ2LTlhZjAtYTVkNzZkY2I4Yjc0OjY2YTI5OGI4LTg0OTUtNDVjZi1iNzk1LTI1MzE0OTc2YTQ5Zg=="; 

// $outletRef 	 = "253fa998-01a4-497d-a55d-259a922af131";                                                                    // set your outlet reference/ID value here (example only)
// $apikey 	 = "NTYxOTZhNTgtNjU2My00YTQ2LTlhZjAtYTVkNzZkY2I4Yjc0OjY2YTI5OGI4LTg0OTUtNDVjZi1iNzk1LTI1MzE0OTc2YTQ5Zg==";       // set your service account API key (example only)


// $idServiceURL  = "https://identity-uat.ngenius-payments.com/auth/realms/ni/protocol/openid-connect/token";           // set the identity service URL (example only)
// $txnServiceURL = "https://api-gateway-uat.ngenius-payments.com/transactions/outlets/".$outletRef."/orders";             // set the transaction service URL (example only)
  
    
// $tokenHeaders  = array("Authorization: Basic ".$apikey, "Content-Type: application/x-www-form-urlencoded");
// $tokenResponse = invokeCurlRequest("POST", $idServiceURL, $tokenHeaders, http_build_query(array('grant_type' => 'client_credentials')));
// $tokenResponse = json_decode($tokenResponse);

// $access_token = $tokenResponse->access_token;
// // echo $access_token;
// // $order = new StdClass();

// // $order->action = "AUTH";                                        // Transaction mode ("AUTH" = authorize only, no automatic settle/capture, "SALE" = authorize + automatic settle/capture)
// // $order->amount->currencyCode = "AED";                           // Payment currency ('AED' only for now)
// // $order->amount->value = 120*100;                                   // Minor units (1000 = 10.00 AED)
// // $order->language = "en";                                        // Payment page language ('en' or 'ar' only)
// // $order->merchantOrderReference = time();                                        // Payment page language ('en' or 'ar' only)
// // //$order->merchantAttributes->redirectUrl = "http://premizer.com/test/pp.php";     // A redirect URL to a page on your site to return the customer to
// // //$order->merchantAttributes->redirectUrl = "http://192.168.0.111:8080/n-genius/pp.php";     // A redirect URL to a page on your site to return the customer to
// // $order->merchantAttributes->redirectUrl = "http://127.0.0.1:8080/n-genius/pp.php";     // A redirect URL to a page on your site to return the customer to


// $order = [
//     "action" => "PURCHASE",
//     "amount" => [
//     "currencyCode" => "AED",
//     "value" => (100)*100,
//         ],
//     "merchantAttributes" => [
//         "redirectUrl" =>  "https://ohyamal.com/paymentcallback"
//     ],
//     ];


// //$order->merchantAttributes->redirectUrl = "http:// 192.168.0.111:8080/n-genius/pp.php";     // A redirect URL to a page on your site to return the customer to
// echo $order = json_encode($order);  

// $orderCreateHeaders  = array("Authorization: Bearer ".$access_token, "Content-Type: application/vnd.ni-payment.v2+json", "Accept: application/vnd.ni-payment.v2+json");
// $orderCreateResponse = invokeCurlRequest("POST", $txnServiceURL, $orderCreateHeaders, $order);

// $orderCreateResponse = json_decode($orderCreateResponse);
// echo $orderCreateResponse;echo '<br>';echo '<br>';
// $paymentLink 		   = $orderCreateResponse->_links->payment->href;     // the link to the payment page for redirection (either full-page redirect or iframe)
// $orderReference      = $orderCreateResponse->reference;              // the reference to the order, which you should store in your records for future interaction with this order
// echo $orderReference;
// header("Location: ".$paymentLink);                              // execute redirect
// //die();

// function invokeCurlRequest($type, $url, $headers, $post) {

// 	$ch = curl_init();

// 	curl_setopt($ch, CURLOPT_URL, $url);
// 	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);		

// 	if ($type == "POST") {
	
// 		curl_setopt($ch, CURLOPT_POST, 1);
// 		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	
// 	}

// 	$server_output = curl_exec ($ch);
// 	curl_close ($ch);
	
// 	return $server_output;
	
// }
		
?>