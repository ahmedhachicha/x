<?php
require_once 'php/config2.php';
$permissions = ['email']; //optional
if (isset($accessToken))
{
	if (!isset($_SESSION['fb_user_id'])) 
	{
		$_SESSION['fb_user_id'] = (string) $accessToken;
		$oAuth2Client = $fb->getOAuth2Client();
		$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['fb_user_id']);
		$_SESSION['fb_user_id'] = (string) $longLivedAccessToken;
		$fb->setDefaultAccessToken($_SESSION['fb_user_id']);
	} 
	else 
	{
		$fb->setDefaultAccessToken($_SESSION['fb_user_id']);
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

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login with Facebook</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link href="<?php echo BASE_URL; ?>css/style.css" rel="stylesheet">
  
</head>
<body>

<?php    
  $sql = "SELECT * FROM users WHERE fb_user_id ='{$_SESSION['fb_user_id']}' And GroupId = 2";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    // user is exists
    $userinfo = mysqli_fetch_assoc($result);
    $status = "Active now";
    $sql2 = mysqli_query($con, "UPDATE users SET status = '{$status}' WHERE unique_id = {$userinfo['unique_id']} AND GroupId = 2 AND RegStatus = 1");
    if($sql2){
      $token = $userinfo['fb_user_id'];
      $user_id = $userinfo['user_id'];
      $unique_id = $userinfo['unique_id'];
      $Name = $userinfo['Name'];
      $email = $userinfo['Email'];
    }else{
        echo "Something went wrong. Please try again!";
    }
  } else {
    // user is not exists
    $ran_id = rand(time(), 100000000);
    $status = "Active now";
    $sql = "INSERT INTO users (unique_id, Name, Email, first_name, last_name, FullName, fb_user_id, status, GroupId, RegStatus, Date) VALUES ({$ran_id}, '{$_SESSION['fb_user_name']}', '{$_SESSION['fb_user_email']}', '{$_SESSION['fb_user_name']}', '{$_SESSION['fb_user_name']}', '{$_SESSION['fb_user_name']}', '{$_SESSION['fb_user_id']}', '{$status}', 2, 1, now())";
    $result = mysqli_query($con, $sql);
    if($result){
      $select_sql2 = mysqli_query($con, "SELECT * FROM users WHERE fb_user_id = '{$_SESSION['fb_user_id']}'");
      if (mysqli_num_rows($select_sql2) > 0) {
        $userinfo1 = mysqli_fetch_assoc($select_sql2);
        $token = $userinfo1['fb_user_id'];
        $user_id = $userinfo1['user_id'];
        $unique_id = $userinfo1['unique_id'];
        $Name = $userinfo1['first_name'];
        $email = $userinfo1['Email'];
      } else {
        echo "User is not created";
        die();
      }
    }
  }

  $_SESSION['uid'] = $user_id;
  $_SESSION['unique_id'] = $unique_id;
  $_SESSION['user'] = $Name; 
  $_SESSION['email'] = $email;
  $_SESSION['firstname'] = $Name;
  $_SESSION['lastname'] = $Name;
  $_SESSION['fullname'] = $Name;

		header("Location:index.php");
		exit;
        ?>
      <!-- <a class="nav-link">Email: <php echo $_SESSION['uid']; ?></a>
      <a class="nav-link">Email: <php echo $_SESSION['unique_id']; ?></a>
      <a class="nav-link">Email: <php echo $_SESSION['user']; ?></a>
      <a class="nav-link">Email: <php echo $_SESSION['firstname']; ?></a>
      <a class="nav-link">Email: <php echo $_SESSION['lastname']; ?></a>
      <a class="nav-link">Email: <php echo $_SESSION['email']; ?></a>
      <a class="nav-link">Email: <php echo $_SESSION['fullname']; ?></a>
      <a class="nav-link" href="logout.php">Logout</a> -->
</body>
</html>