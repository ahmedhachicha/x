<?php
require_once 'php/config1.php';

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);

  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $userinfo = [
    'Email' => $google_account_info['email'],
    'first_name' => $google_account_info['givenName'],
    'last_name' => $google_account_info['familyName'],
    'genre' => $google_account_info['gender'],
    'FullName' => $google_account_info['name'],
    // 'avatar' => $google_account_info['picture'],
    'verifiedEmail' => $google_account_info['verifiedEmail'],
    'token' => $google_account_info['id'],
  ];

  // checking if user is already exists in database
  $sql = "SELECT * FROM users WHERE Email ='{$userinfo['Email']}'";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    // user is exists
    $userinfo = mysqli_fetch_assoc($result);
    $status = "Active now";

    $sql2 = mysqli_query($con, "UPDATE users SET status = '{$status}' WHERE unique_id = {$userinfo['unique_id']} AND GroupId = 2 AND RegStatus = 1");
    if($sql2){
      $token = $userinfo['token'];
      $name = $userinfo['first_name'];
      $user_id = $userinfo['user_id'];
      $unique_id = $userinfo['unique_id'];
      $firstname = $userinfo['first_name'];
      $lastname = $userinfo['last_name'];
    //   $avatar = $userinfo['avatar'];
      $email = $userinfo['Email'];
      $FullName = $userinfo['FullName'];
    }else{
        echo "Something went wrong. Please try again!";
    }
  } else {
    // user is not exists
    $ran_id = rand(time(), 100000000);
    $status = "Active now";
    $sql = "INSERT INTO users (unique_id, Name, Email, first_name, last_name, genre, FullName, verifiedEmail, token, status, GroupId, RegStatus, Date) VALUES ({$ran_id}, '{$userinfo['first_name']}', '{$userinfo['Email']}', '{$userinfo['first_name']}', '{$userinfo['last_name']}', '{$userinfo['genre']}', '{$userinfo['FullName']}', '{$userinfo['verifiedEmail']}', '{$userinfo['token']}', '{$status}', 2, 1, now())";
    $result = mysqli_query($con, $sql);
    if($result){
      $select_sql2 = mysqli_query($con, "SELECT * FROM users WHERE Email = '{$userinfo['Email']}'");
      if (mysqli_num_rows($select_sql2) > 0) {
        $userinfo = mysqli_fetch_assoc($select_sql2);
        $token = $userinfo['token'];
        $name = $userinfo['first_name'];
        $user_id = $userinfo['user_id'];
        $unique_id = $userinfo['unique_id'];
        $firstname = $userinfo['first_name'];
        $lastname = $userinfo['last_name'];
        // $avatar = $userinfo['avatar'];
        $email = $userinfo['Email'];
        $FullName = $userinfo['FullName'];
      } else {
        echo "User is not created";
        die();
      }
    }
  }

  // save user data into session
  $_SESSION['user_token'] = $token;
  $_SESSION['user'] = $name;
  $_SESSION['uid'] = $user_id;
  $_SESSION['unique_id'] = $unique_id;
  $_SESSION['firstname'] = $firstname; 
  $_SESSION['lastname'] = $lastname; 
//   $_SESSION['img'] = $avatar;
  $_SESSION['email'] = $email;
  $_SESSION['fullname'] = $FullName;
} else {
  if (isset($_SESSION['user_token'])) {
    header("Location:index.php");
    die();
  }

  // checking if user is already exists in database
  $sql = "SELECT * FROM users WHERE token ='{$_SESSION['user_token']}'";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    // user is exists
    $userinfo = mysqli_fetch_assoc($result);
  }
}

?>

<!-- <!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    </head>
    <body>
    <img src="<= $userinfo['avatar'] ?>" alt="" width="90px" height="90px">
    <ul>
        <li>Full Name: <= $_SESSION['user'] ?></li>
        <li>Email Address: <= $_SESSION['email'] ?></li>
        <li>ID: <= $_SESSION['uid'] ?></li>
        <li><a href="logoutt.php">Logout</a></li>
    </ul>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/loginn.js"></script>
    </body>
</html> -->

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
  <div class="wrapper ">
    <img  class=" img-fluid img-fluid mySlides" id="francesca-tosolini-tHkJAMcO3QE" src="layout/images/francesca-tosolini-tHkJAMcO3QE.png">
    <svg class="Rectangle_2">
      <rect id="Rectangle_2" rx="0" ry="0" x="0" y="0" width="1920" height="1080">
      </rect>
    </svg>      
    <section class="form login" id="Groupe_259">
      <header style="text-align: center;"> <a href="index.php" style="font-size: 20px;color:black;"><i class="fas fa-arrow-left"></i></a> <a href="loginn.php" style="color:black;font-weight: 400;">Login</a><span style="color:#808080;font-weight: 300;">  |  </span><a href="signupp.php"  style="color:#808080;font-weight: 400;">Register</a> </header>
      <form action="loginwithgoogle.php?do=loginwithgoogle" method="POST" enctype="multipart/form-data">
        <!-- <img src="<= $_SESSION['img'] ?>" alt="" width="90px" height="90px"> -->
            <ul>
                <li>Full Name: <?= $_SESSION['fullname'] ?></li>
                <li>Email : <?= $_SESSION['email'] ?></li>
                <!-- <li><a href="logoutt.php">Logout</a></li> -->
            </ul>

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

                <input type="hidden" name="user_token" value="<?php echo $_SESSION['user_token']; ?>">
                <input type="hidden" name="user" value="<?php echo $_SESSION['user']; ?>">
                <input type="hidden" name="uid" value="<?php echo $_SESSION['uid']; ?>">
                <input type="hidden" name="unique_id" value="<?php echo $_SESSION['unique_id']; ?>">
                <input type="hidden" name="firstname" value="<?php echo $_SESSION['firstname']; ?>">
                <input type="hidden" name="lastname" value="<?php echo $_SESSION['lastname']; ?>">
                <!-- <input type="hidden" name="img" value="<php echo $_SESSION['img']; ?>"> -->
                <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
                <input type="hidden" name="fullname" value="<?php echo $_SESSION['fullname']; ?>">

                <div class="field1 button">
                    <div style="margin-top: -10px;"><img src='layout/images/google.jpg' alt='Continue With Google' class='imglogingoogle'>
                    <input type="submit" value="Continue With Google" class="inputcontinue"></div>
                </div>

      </form>
    </section>
  </div>
  <!-- <script src="javascript/loginwithgoogle.js"></script> -->

<!-- </body> -->
<!-- </html> -->