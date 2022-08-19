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
			"value" => 100,
				],
			"merchantAttributes" => [
				"redirectUrl" =>  "http://localhost/ohyamal/"
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
			$order_reference = $output->reference;
			$order_paypage_url = $output->_links->payment->href;
	// echo $order_paypage_url;
    header("Location: ".$order_paypage_url);
			curl_close ($ch);
?>