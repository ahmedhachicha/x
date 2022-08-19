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


<?php include_once "headerr.php"; ?>
<!-- <html> -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- <body> -->

      <style>
        #francesca-tosolini-tHkJAMcO3QE {
            position: absolute;
            /* width: 1920px; */
            height: 878px;
            left: 0px;
            top: 0px;
            overflow: visible;
            border-radius: 1px;
        }
        .Rectangle_2 {
            position: absolute;
            overflow: visible;
            /* width: 1920px; */
            /* height: 1080px; */
            left: 0px;
            top: 0px;
        }
        #Rectangle_2 { fill: rgba(0,20,59,0.831);}
        #Groupe_259 {
            position: absolute;
            width: 390px;
            /* height: 642px; */
            /* left: 1235px; */
            top: 40px;
            overflow: visible;
            background-color: #fff;
            border-radius: 5px;
            /* top: 0px; */
        }
        #Groupe_243 {
          position: absolute;
          width: 240px;
          height: 41px;
          left: 74px;
          top: 379px;
          overflow: visible;
        }
        #iconfacebook_coloryes_roundyes {
          position: absolute;
          width: 40px;
          height: 41px;
          left: 0px;
          top: 0px;
          overflow: visible;
        }
        #Rectangle_87 {
          fill: rgba(11,132,238,1);
        }
        .Rectangle_87 {
          position: absolute;
          overflow: visible;
          width: 40px;
          height: 41px;
          left: 0px;
          top: 0px;
        }
        #Trac_7 {
          fill: rgba(255,255,255,1);
        }
        .Trac_7 {
          overflow: visible;
          position: absolute;
          width: 12px;
          height: 24px;
          left: 14px;
          top: 8px;
          transform: matrix(1,0,0,1,0,0);
        }
        #iconinstagramm_coloryes_roundy {
          position: absolute;
          width: 40px;
          height: 41px;
          left: 50px;
          top: 0px;
          overflow: visible;
        }
        #Rectangle_88_bp {
          fill: url(#Rectangle_88_bp);
        }
        .Rectangle_88_bp {
          position: absolute;
          overflow: visible;
          width: 40px;
          height: 41px;
          left: 0px;
          top: 0px;
        }
        #Trac_8 {
          fill: rgba(255,255,255,1);
        }
        .Trac_8 {
          overflow: visible;
          position: absolute;
          width: 20px;
          height: 20px;
          left: 10px;
          top: 10.5px;
          transform: matrix(1,0,0,1,0,0);
        }
        #Trac_9 {
          fill: rgba(255,255,255,1);
        }
        .Trac_9 {
          overflow: visible;
          position: absolute;
          width: 10.363px;
          height: 10.361px;
          left: 14.818px;
          top: 15.319px;
          transform: matrix(1,0,0,1,0,0);
        }
        #Trac_10 {
          fill: rgba(255,255,255,1);
        }
        .Trac_10 {
          overflow: visible;
          position: absolute;
          width: 2.41px;
          height: 2.409px;
          left: 24.096px;
          top: 13.854px;
          transform: matrix(1,0,0,1,0,0);
        }
        #iconlinkedin_coloryes_roundyes {
          position: absolute;
          width: 40px;
          height: 41px;
          left: 100px;
          top: 0px;
          overflow: visible;
        }
        #Rectangle_89 {
          fill: rgba(40,120,183,1);
        }
        .Rectangle_89 {
          position: absolute;
          overflow: visible;
          width: 40px;
          height: 41px;
          left: 0px;
          top: 0px;
        }
        #Trac_11 {
          fill: rgba(255,255,255,1);
        }
        .Trac_11 {
          overflow: visible;
          position: absolute;
          width: 15px;
          height: 14.26px;
          left: 13px;
          top: 12.466px;
          transform: matrix(1,0,0,1,0,0);
        }
        #icontwitter_coloryes_roundyes {
          position: absolute;
          width: 40px;
          height: 41px;
          left: 150px;
          top: 0px;
          overflow: visible;
        }
        #Rectangle_90 {
          fill: rgba(85,172,227,1);
        }
        .Rectangle_90 {
          position: absolute;
          overflow: visible;
          width: 40px;
          height: 41px;
          left: 0px;
          top: 0px;
        }
        #Trac_12 {
          fill: rgba(255,255,255,1);
        }
        .Trac_12 {
          overflow: visible;
          position: absolute;
          width: 19.6px;
          height: 15.6px;
          left: 11px;
          top: 13.533px;
          transform: matrix(1,0,0,1,0,0);
        }
        #iconwatsapp_coloryes_roundyes {
          position: absolute;
          width: 40px;
          height: 41px;
          left: 200px;
          top: 0px;
          overflow: visible;
        }
        #Rectangle_91 {
          fill: rgba(72,201,95,1);
        }
        .Rectangle_91 {
          position: absolute;
          overflow: visible;
          width: 40px;
          height: 41px;
          left: 0px;
          top: 0px;
        }
        #Trac_13 {
          fill: rgba(255,255,255,1);
        }
        .Trac_13 {
          overflow: visible;
          position: absolute;
          width: 21px;
          height: 22px;
          left: 10px;
          top: 9px;
          transform: matrix(1,0,0,1,0,0);
        }
      </style>

<?php if(!isset($_SESSION['fb_user_id'])){ ?>
  <div class="wrapper ">
    <img  class=" img-fluid img-fluid mySlides" id="francesca-tosolini-tHkJAMcO3QE" src="layout/images/francesca-tosolini-tHkJAMcO3QE.png">
    <svg class="Rectangle_2">
      <rect id="Rectangle_2" rx="0" ry="0" x="0" y="0" width="1920" height="1080">
      </rect>
    </svg>      
    <section class="form login" id="Groupe_259">
      <header style="text-align: center;"> <a href="index.php" style="font-size: 20px;color:black;"><i class="fas fa-arrow-left"></i></a> <a href="loginn.php" style="color:black;font-weight: 400;">Login</a><span style="color:#808080;font-weight: 300;">  |  </span><a href="signupp.php"  style="color:#808080;font-weight: 400;">Register</a> </header>
      <form action="" method="POST">
        <!-- <img src="<= $_SESSION['img'] ?>" alt="" width="90px" height="90px"> -->

                <style>
                    .forgot{text-decoration: none;}
                    .field1 {
                        display: flex;
                        margin-bottom: 10px;
                        flex-direction: column;
                        position: relative;
                        border: 1px solid #555555;
                        border-radius: 6px;
                    }
                    .logingoogle{
                        height: 35px;
                        border: none;
                        color: #555555;
                        font-size: 19px;
                        background: #FFFFFF;
                        border-radius: 5px;
                        cursor: pointer;
                        margin-top: 10px;
                        margin-bottom: 10px;
                        text-align: center;
                        padding-top: 2px;
                        text-decoration: none;
                        position: absolute;
                        margin-top: -36px;
                        margin-left: 65px;
                    }
                    .logingoogle:hover{color: #555555;}
                    .imglogingoogle{
                        width: 45px;
                        height: 45px;
                    }
                    .form form .button input {
                        height: 45px;
                        border: none;
                        color: #555555;
                        font-size: 17px;
                        background: #fff;
                        cursor: pointer;
                        /* margin-left: 85px; */
                    }
                </style>

                <?php

                    echo '<div class="field1 button">';
                    echo "<div><img src='layout/images/facebook-logo-F-1200x816.jpg' alt='Continue With Google' class='imglogingoogle'></div>";
                    ?>
                    <div><a href='<?php echo $fb_login_url;?>' class='logingoogle'>Continue with Facebook</a></div>
                    <?php
                    echo '</div>';
                ?>

                <!-- <div class="field1 button">
                    <div style="margin-top: -10px;"><img src='layout/images/google.jpg' alt='Continue With Google' class='imglogingoogle'>
                    <input type="submit" value="Continue With Google" class="inputcontinue"></div>
                </div> -->

      </form>
    </section>
  </div>
<?php } ?>