<?php
require_once 'php/config2.php';
$permissions = ['email']; //optional
if (isset($accessToken))
{
	if (!isset($_SESSION['facebook_access_token'])) 
	{
		$_SESSION['facebook_access_token'] = (string) $accessToken;
		$oAuth2Client = $fb->getOAuth2Client();
		$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
		$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	} 
	else 
	{
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	}
	if (isset($_GET['code'])) 
	{
		header('Location:facebook1.php');
	}
	try {
		$fb_response = $fb->get('/me?fields=name,first_name,last_name,email');
		$fb_response_picture = $fb->get('/me/picture?redirect=false&height=200');
		
		$fb_user = $fb_response->getGraphUser();
		$picture = $fb_response_picture->getGraphUser();
		
		$_SESSION['fb_user_id'] = $fb_user->getProperty('id');
		$_SESSION['fb_user_name'] = $fb_user->getProperty('name');
		$_SESSION['fb_user_email'] = $fb_user->getProperty('email');
		$_SESSION['fb_user_pic'] = $picture['url'];
		
		
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		echo 'Facebook API Error: ' . $e->getMessage();
		session_destroy();
		header("Location:facebook1.php");
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		echo 'Facebook SDK Error: ' . $e->getMessage();
		exit;
	}
} 
else 
{	
	$fb_login_url = $fb_helper->getLoginUrl('https://ohyamal.com/facebook1.php', $permissions);
}
?>


<?php

echo '<div class="field1 button">';
echo "<div><img src='layout/images/facebook-logo-F-1200x816.jpg' alt='Continue With Google' class='imglogingoogle'></div>";
?>
<div><a href='<?php echo $fb_login_url;?>' class='logingoogle'>Continue with Facebook</a></div>
<?php
echo '</div>';
?>