<!DOCTYPE html>

<html lang="en">
    <head>
    <link href="<?php echo $css; ?>bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link href="../bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="<?php echo $css; ?>1frontend.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/lightbox.min.css"> 
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>
    <link rel="stylesheet" href="css/1style.css" />
    <link rel="stylesheet" href="css/111style.css" />
    <link rel="stylesheet" type="text/css" href="css/1slick.css"/>
    <title><?php getTitle()?></title>
        <link rel="shortcut icon" href="<?php echo $img ?>logo.png" type="image/x-icon" />
        <!-- <link rel="stylesheet" href="legacy.css" type="text/css" charset="utf-8" /> -->
            </head>

            <body>
                                <style>
                                    .stsvg00 {
                                        fill: rgba(255,255,255,1);
                                        width: 28px;
                                        padding: 2px;
                                        margin-left: 4px;}
                                </style>
                                <div id="page-wrapper" class="d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
                                        <nav class="navbar navbar-expand-lg navbar-light bg-none " style="background-color: #011936;height: 70px;padding-top: 20px;padding-bottom: 20px;">
                                            <div class="container">  
                                                    <div class="row">
                                                    </div>
                                                    <div>
                                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group" style="margin-top:15px;">
                                                        <?php
                                                        if(isset($_SESSION['uid'])){
                                                        ?>

                                                                    <form action="?do=ntfcone" method="POST" enctype="multipart/form-data">

                                                                        <?php
                                                                        $gettype = $con->prepare("SELECT COUNT(incoming_msg_id) FROM messagesbackend where incoming_msg_id = {$_SESSION['unique_id']} AND notf = 0");
                                                                        $gettype->execute();
                                                                        $infooback = $gettype->fetchColumn();

                                                                        if($infooback != 0){
                                                                        ?>  
                                                                        <div class="navtim">        
                                                                        <center><div><ion-icon name="notifications-outline"></ion-icon></div></center>Notifications
                                                                        <button type="submit" class="ntfstyleone"><?php echo $infooback; ?></button> 
                                                                        </div>  
                                                                        <?php } 
                                                                        else{
                                                                            ?>
                                                                            <div class="navtim">        
                                                                            <a href="chatcontact/usersback.php"><center><div><ion-icon name="notifications-outline"></ion-icon></div></center>
                                                                            Notifications</a> 
                                                                            </div>  
                                                                        <?php } ?>
                                                                        
                                                                    </form> 

                                                                <div class="navtim">
                                                                    <a href="mysearch.php"><center><div><ion-icon name="search-outline"></ion-icon></div>   </center>   
                                                                        Searches</div></a>
                                                                    <div class="navtim">
                                                                    <a href="myfavorite.php"><center><div><ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon></div></center>  
                                                                        Favorite</div></a>
                                                                    
                                                                    <form action="?do=ntfc" method="POST" enctype="multipart/form-data">
                                                                        <?php
                                                                        $gettype = $con->prepare("SELECT COUNT(incoming_msg_id) FROM messages where incoming_msg_id = {$_SESSION['unique_id']} AND notf = 0");
                                                                        $gettype->execute();
                                                                        $infoo = $gettype->fetchColumn();

                                                                        if($infoo != 0){
                                                                        ?>
                                                                        <div class="navtim">        
                                                                        <center><div><ion-icon name="chatbubbles-outline"></ion-icon></div></center>My Chat
                                                                        <button type="submit" class="ntfstyle"><?php echo $infoo; ?></button> 
                                                                        </div>  
                                                                        <?php } 
                                                                        else{
                                                                            ?>
                                                                            <div class="navtim">        
                                                                            <a href="userss.php"><center><div><ion-icon name="chatbubbles-outline"></ion-icon></div></center>
                                                                            My Chat</a> 
                                                                            </div>  
                                                                        <?php } ?>
                                                                            
                                                                    </form>  
                                                                    
                                                                    <style>.navtim {
                                                                        margin-right: 15px; 
                                                                        cursor: pointer;    
                                                                        color: #444444;
                                                                        font-weight: bold;}
                                                                        .navtim a {color: #fff;}
                                                                    </style>   
                                                                    <style>
                                                                        button.ntfstyle {
                                                                            position: absolute;
                                                                            left: 314px;
                                                                            top: -8px;
                                                                            border: 1px solid red;
                                                                            border-radius: 50%;
                                                                            /* width: 10px; */
                                                                            /* height: 20px; */
                                                                            text-align: center;
                                                                            background-color: red;
                                                                            font-weight: bold;
                                                                        }
                                                                        button.ntfstyleone {
                                                                            position: absolute;
                                                                            left: 55px;
                                                                            top: -8px;
                                                                            border: 1px solid red;
                                                                            border-radius: 50%;
                                                                            /* width: 10px; */
                                                                            /* height: 20px; */
                                                                            text-align: center;
                                                                            background-color: red;
                                                                            font-weight: bold;
                                                                        }
                                                                    </style>        

                                                                    <?php 
                                                                    $do = isset($_GET['do']) ? $_GET['do'] : '';
                                                                    if($do == 'ntfc'){
                                                                        $stmt = $con->prepare("UPDATE messages SET notf = 1 WHERE incoming_msg_id = {$_SESSION['unique_id']}");
                                                                        $stmt->execute();
                                                                        header('Location:userss.php');
                                                                        exit();
                                                                    }
                                                                    elseif($do == 'ntfcone'){
                                                                        $stmt = $con->prepare("UPDATE messagesbackend SET notf = 1 WHERE incoming_msg_id = {$_SESSION['unique_id']}");
                                                                        $stmt->execute();
                                                                        header('Location:chatcontact/usersback.php');
                                                                        exit();
                                                                    }
                                                                    ?>
                                                                    <style>
                                                                        .dropdown {
                                                                        position: relative;
                                                                        display: inline-block;
                                                                        }

                                                                        .dropdown-content {
                                                                        display: none;
                                                                        position: absolute;
                                                                        background-color: #f9f9f9;
                                                                        min-width: 160px;
                                                                        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                                                        padding: 12px 16px;
                                                                        z-index: 1;
                                                                        
                                                                        }

                                                                        .dropdown:hover .dropdown-content {
                                                                        display: block;
                                                                        }
                                                                        .dropd:hover{
                                                                            color: #2BBDFE;
                                                                        }
                                                                        a#dropdownMenuLink1 {
                                                                            color: #fff;
                                                                            background-color: none;
                                                                            border: none;
                                                                        }
                                                                        a#dropdownMenuLink1:hover {
                                                                            color: #fff;
                                                                            border: none;
                                                                        }
                                                                    </style>
                                                                    <div class="dropdown" style="margin-right:25px;margin-top:5px;">
                                                                        <span>                                                            
                                                                            <a style="font-weight:bold;text-decoration: none; display:flex;align-items: center;" class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <?php
                                                                            if(!empty($sessionimg)){
                                                                                echo "<img class='imgavatar' src='php/Update-Image/uploads/avatars/" . $sessionimg ."' alt='avatar' />";echo $sessionUser;?>
                                                                                <span class="caret"></span>
                                                                            <?php }
                                                                            else{
                                                                                echo "<img class='imgavatar' src='php/Update-Image/uploads/avatars/5453294.png' alt='avatar' />";echo $sessionUser;?>
                                                                                <span class="caret" style="overflow: hidden; background: no-repeat; padding-left: 5px; padding-right: 13px;"></span>
                                                                            <?php } ?>
                                                                            </a>
                                                                        </span>
                                                                        <div class="dropdown-content" style="width: 170px;">
                                                                            <p><a class="dropd " style="margin-bottom:10px;background-color: #f9f9f9;align-items: center;margin-right:25px;margin-top:5px;" href="my.php#myAds">My Ads</a></p>  
                                                                            <p><a style="margin-bottom:10px;background-color: #f9f9f9;align-items: center;margin-right:25px;margin-top:5px;" class="dropd" href="myfavorite.php">My Favorites</a></p>
                                                                            <p><a style="margin-bottom:10px;background-color: #f9f9f9;align-items: center;margin-right:25px;margin-top:5px;" class="dropd" href="mysearch.php">My Search</a></p>
                                                                            <p><a style="margin-bottom:10px;background-color: #f9f9f9;align-items: center;margin-right:25px;margin-top:5px;" class="dropd" href="editprofile.php">My Profile</a></p>
                                                                            <p><a style="margin-bottom:10px;background-color: #f9f9f9;align-items: center;margin-right:25px;margin-top:5px;" class="dropd" href="profile.php#avatar">Change Avatar</a></p>
                                                                            <p><a style="margin-bottom:10px;background-color: #f9f9f9;align-items: center;margin-right:25px;margin-top:5px;" class="dropd" href="php/logoutt.php">Logout</a></p>
                                                                        </div>
                                                                    </div>

                                                                    <!-- <button  class="btndarknav" type="button"><a href="Ad.php" style="color:#444444;font-weight:700; height:37px;" class="">Place Your Ad</a></button> -->
                                                            <?php
                                                            }
                                                            else{
                                                            ?>
                                                                <style>
                                                                    .stsvg {
                                                                        margin-left: 4px;
                                                                        width: 20px;
                                                                        padding: 2px;
                                                                    }
                                                                </style>
                                                                <div class="navtim">        
                                                                        <a href="login.php" style="color: #B6B8B9;margin-right: 10px;font-weight:700;font-size:17px;"><center><div><ion-icon name="notifications-outline"></ion-icon></div></center>Notifications
                                                                        </a>
                                                                </div> 

                                                                <div class="navtim">
                                                                    <a href="login.php" style="color: #B6B8B9;margin-right: 10px;font-weight:700;font-size:17px;"><center><div><ion-icon name="search-outline"></ion-icon></div></center>   
                                                                    Searches</a>
                                                                </div>

                                                                <div class="navtim">
                                                                    <a href="login.php" style="color: #B6B8B9;margin-right: 10px;font-weight:700;font-size:17px;"><center><div><ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon></div></center>  
                                                                    Favorite</a>
                                                                </div>

                                                                <div class="navtim">        
                                                                    <a href="login.php" style="color: #B6B8B9;margin-right: 10px;font-weight:700;font-size:17px;"><center><div><ion-icon name="chatbubbles-outline"></ion-icon></div></center>My Chat</a> 
                                                                </div>  

                                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                                                <label class="btn" for="btnradio1" style="margin-left: -10px;"> <a href="signupp.php" class="sign">                                                            
                                                                <svg class="icons8_add_user_male stsvg00" viewBox="2 2 22 22">
                                                                    <path id="icons8_add_user_male" d="M 9.857142448425293 2 C 6.827845573425293 2 4.357143402099609 4.470702171325684 4.357143402099609 7.500000953674316 C 4.357143402099609 9.393728256225586 5.323941707611084 11.07562923431396 6.787947177886963 12.06696510314941 C 3.985767126083374 13.27012920379639 2 16.0507698059082 2 19.28571319580078 L 3.571428537368774 19.28571319580078 C 3.571428537368774 15.80523586273193 6.376672744750977 13.00000095367432 9.857142448425293 13.00000095367432 C 10.9375 13.00000095367432 11.94423580169678 13.28238582611084 12.82816410064697 13.76119995117188 C 11.95649337768555 14.84155750274658 11.4285717010498 16.22268676757812 11.4285717010498 17.71428680419922 C 11.4285717010498 21.17637825012207 14.25227165222168 24 17.71428680419922 24 C 21.17637825012207 24 24 21.17637825012207 24 17.71428680419922 C 24 14.25227165222168 21.17637825012207 11.4285717010498 17.71428680419922 11.4285717010498 C 16.34235000610352 11.4285717010498 15.06556510925293 11.87972831726074 14.03125095367432 12.63173580169678 C 13.68443584442139 12.41377925872803 13.30690097808838 12.22960758209229 12.92637825012207 12.06696510314941 C 14.3903226852417 11.07562923431396 15.35714340209961 9.393728256225586 15.35714340209961 7.500000953674316 C 15.35714340209961 4.470702171325684 12.88646507263184 2 9.857142448425293 2 Z M 9.857142448425293 3.571428537368774 C 12.0362434387207 3.571428537368774 13.78571510314941 5.320869445800781 13.78571510314941 7.500000953674316 C 13.78571510314941 9.679100036621094 12.0362434387207 11.4285717010498 9.857142448425293 11.4285717010498 C 7.678011894226074 11.4285717010498 5.928572177886963 9.679100036621094 5.928572177886963 7.500000953674316 C 5.928572177886963 5.320869445800781 7.678011894226074 3.571428537368774 9.857142448425293 3.571428537368774 Z M 17.71428680419922 13.00000095367432 C 20.32615661621094 13.00000095367432 22.4285717010498 15.10241508483887 22.4285717010498 17.71428680419922 C 22.4285717010498 20.32615661621094 20.32615661621094 22.4285717010498 17.71428680419922 22.4285717010498 C 15.10241508483887 22.4285717010498 13.00000095367432 20.32615661621094 13.00000095367432 17.71428680419922 C 13.00000095367432 15.10241508483887 15.10241508483887 13.00000095367432 17.71428680419922 13.00000095367432 Z M 16.92856979370117 14.57142925262451 L 16.92856979370117 16.92856979370117 L 14.57142925262451 16.92856979370117 L 14.57142925262451 18.5 L 16.92856979370117 18.5 L 16.92856979370117 20.85714149475098 L 18.5 20.85714149475098 L 18.5 18.5 L 20.85714149475098 18.5 L 20.85714149475098 16.92856979370117 L 18.5 16.92856979370117 L 18.5 14.57142925262451 L 16.92856979370117 14.57142925262451 Z">
                                                                    </path>
                                                                </svg>
                                                                Sign Up </a> </label>

                                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                                                <label class="btn" for="btnradio2" style="margin-left: 10px;"> <a href="loginn.php" class="log">                                                            
                                                                <svg class="icons8_customer stsvg00" viewBox="6 5 20 22">
                                                                    <path id="icons8_customer" d="M 16 5 C 12.14449977874756 5 9 8.144530296325684 9 12 C 9 14.41020011901855 10.23050022125244 16.55080032348633 12.09379959106445 17.8125 C 8.527339935302734 19.34379959106445 6 22.88279914855957 6 27 L 8 27 C 8 22.57029914855957 11.57030010223389 19 16 19 C 20.42970085144043 19 24 22.57029914855957 24 27 L 26 27 C 26 22.88279914855957 23.47270011901855 19.34379959106445 19.90629959106445 17.8125 C 21.76950073242188 16.55080032348633 23 14.41020011901855 23 12 C 23 8.144530296325684 19.85549926757812 5 16 5 Z M 16 7 C 18.77339935302734 7 21 9.226559638977051 21 12 C 21 14.77340030670166 18.77339935302734 17 16 17 C 13.22659969329834 17 11 14.77340030670166 11 12 C 11 9.226559638977051 13.22659969329834 7 16 7 Z">
                                                                    </path>
                                                                </svg>Log in</a></label>

                                                                <!-- <button  class="btndarknav" type="button"><a href="Ad.php" class="" style="color:#444444;font-weight:700; height:37px;">Place Your Ad</a></button>  -->
                                                            <?php
                                                            }
                                                            ?>
                                                    </div> 
                                                    </div>                                                  
                                            </div> 
                                        </nav>
                                </div>
                                <div id="page-wrapper" class="d-block d-sm-none">
                                    <div style="margin-top: 30px;margin-bottom: 30px;">
                                        <nav>
                                            <center>
                                                <a href="index.php"><img src="layout/images/logo.png" alt="" style="width: 200px;height:105px;"></a>
                                                <div class="container"><hr></div>
                                            </center>  
                                        </nav>
                                    </div>
                                </div>
                                <div id="page-wrapper" class="d-none d-md-block d-lg-none">
                                    <div style="margin-top: 30px;margin-bottom: 30px;">
                                        <nav>
                                            <center>
                                            <a href="index.php"><img src="layout/images/logo.png" alt="" style="width: 200px;height:105px;"></a>
                                            <div class="container"><hr></div>
                                            </center>  
                                        </nav>
                                    </div>
                                </div>

                                <style>
                                    .ionftr{font-size: 25px;color: black;}
                                    .ionftr_ad{font-size: 25px;color: #0093D5;}
                                </style>
                            <?php if(isset($_SESSION['uid'])){ ?>
                            <div class="d-block d-sm-none">
                                <nav class="navbar fixed-bottom navbar-light bg-light">
                                    <div class="container">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="index.php"><center><div><ion-icon class="ionftr" name="home-outline" class="desnion"></ion-icon></div>  </center></a>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="mysearch.php"><center><div><ion-icon class="ionftr" name="search-outline" role="img" class="md hydrated desnion" aria-label="search outline"></ion-icon></div></center></a>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="Ad.php"><center><div><ion-icon class="ionftr_ad" name="add-circle-outline" class="desnion"></ion-icon></div></center></a>
                                                    </div>
                                                    <?php
                                                        $gettype = $con->prepare("SELECT COUNT(incoming_msg_id) FROM messages where incoming_msg_id = {$_SESSION['unique_id']} AND notf = 0");
                                                        $gettype->execute();
                                                        $infoo = $gettype->fetchColumn();

                                                        if($infoo != 0){
                                                        ?>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                            <form action="?dooo=ntfc" method="POST" enctype="multipart/form-data">
                                                            <center><div><ion-icon class="ionftr" name="chatbubbles-outline" role="img" class="md hydrated desnion" aria-label="chatbubbles outline"></ion-icon></div></center><button type="submit" class="ntfstyletelres"><?php echo $infoo; ?></button>
                                                            </form>
                                                        </div>
                                                        <?php } 
                                                        else{
                                                            ?>
                                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                                    <a href="userss.php"><center><div><ion-icon class="ionftr" name="chatbubbles-outline" role="img" class="md hydrated desnion" aria-label="chatbubbles outline"></ion-icon></div></center></a>
                                                                </div>
                                                        <?php } ?>
                                                            
                                                          

                                                        <style>
                                                            button.ntfstyletelres {
                                                                position: absolute;
                                                                top: -4%;
                                                                left: 73%;
                                                                border: 1px solid red;
                                                                border-radius: 50%;
                                                                /* width: 10px; */
                                                                /* height: 20px; */
                                                                text-align: center;
                                                                background-color: red;
                                                                font-weight: bold;
                                                            }
                                                        </style>        

                                                        <?php 
                                                        $dooo = isset($_GET['dooo']) ? $_GET['dooo'] : '';
                                                        if($dooo == 'ntfc'){
                                                        $stmt = $con->prepare("UPDATE messages SET notf = 1 WHERE incoming_msg_id = {$_SESSION['unique_id']}");
                                                        $stmt->execute();
                                                        header('Location:userss.php');
                                                        exit();
                                                        }
                                                    ?>

                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="editprofile.php"><center><div><ion-icon class="ionftr" name="person-outline" class="desnion"></ion-icon></div></center></a>
                                                    </div>                                
                                    </div>
                                </nav>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <nav class="navbar fixed-bottom navbar-light bg-light">
                                    <div class="container">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="index.php" ><center><div><ion-icon class="ionftr" name="home-outline" class="desnion"></ion-icon></div></center></a>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="mysearch.php"><center><div><ion-icon class="ionftr" name="search-outline" role="img" class="md hydrated desnion" aria-label="search outline"></ion-icon></div></center></a>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="Ad.php"><center><div><ion-icon class="ionftr_ad" name="add-circle-outline" class="desnion"></ion-icon></div></center></a>
                                                    </div>
                                                    

                                                        <?php
                                                        $gettype = $con->prepare("SELECT COUNT(incoming_msg_id) FROM messages where incoming_msg_id = {$_SESSION['unique_id']} AND notf = 0");
                                                        $gettype->execute();
                                                        $infoo = $gettype->fetchColumn();

                                                        if($infoo != 0){
                                                        ?>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                            <form action="?doo=ntfc" method="POST" enctype="multipart/form-data">
                                                            <center><div><ion-icon class="ionftr" name="chatbubbles-outline" role="img" class="md hydrated desnion" aria-label="chatbubbles outline"></ion-icon></div></center><button type="submit" class="ntfstyletel"><?php echo $infoo; ?></button>
                                                            </form>
                                                        </div>
                                                        <?php } 
                                                        else{
                                                            ?>
                                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                                    <a href="userss.php"><center><div><ion-icon class="ionftr" name="chatbubbles-outline" role="img" class="md hydrated desnion" aria-label="chatbubbles outline"></ion-icon></div></center></a>
                                                                </div>
                                                        <?php } ?>
                                                            
                                                          

                                                        <style>
                                                            button.ntfstyletel {
                                                                position: absolute;
                                                                top: -4%;
                                                                left: 71%;
                                                                border: 1px solid red;
                                                                border-radius: 50%;
                                                                /* width: 10px; */
                                                                /* height: 20px; */
                                                                text-align: center;
                                                                background-color: red;
                                                                font-weight: bold;
                                                            }
                                                        </style>        

                                                        <?php 
                                                        $doo = isset($_GET['doo']) ? $_GET['doo'] : '';
                                                        if($doo == 'ntfc'){
                                                        $stmt = $con->prepare("UPDATE messages SET notf = 1 WHERE incoming_msg_id = {$_SESSION['unique_id']}");
                                                        $stmt->execute();
                                                        header('Location:userss.php');
                                                        exit();
                                                        }
                                                    ?>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="editprofile.php"><center><div><ion-icon class="ionftr" name="person-outline" class="desnion"></ion-icon></div></center></a>
                                                    </div>                                
                                    </div>
                                </nav>
                            </div>
                            <?php 
                            }
                             else{ ?>
                            <div class="d-block d-sm-none">
                                <nav class="navbar fixed-bottom navbar-light bg-light">
                                    <div class="container">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="index.php"><center><div><ion-icon class="ionftr" name="home-outline" class="desnion"></ion-icon></div>  </center></a>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="mysearch.php"><center><div><ion-icon class="ionftr" name="search-outline" role="img" class="md hydrated desnion" aria-label="search outline"></ion-icon></div></center></a>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="Ad.php"><center><div><ion-icon class="ionftr_ad" name="add-circle-outline" class="desnion"></ion-icon></div></center></a>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="loginn.php"><center><div><ion-icon class="ionftr" name="chatbubbles-outline" role="img" class="md hydrated desnion" aria-label="chatbubbles outline"></ion-icon></div></center></a>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="loginn.php"><center><div><ion-icon class="ionftr" name="person-outline" class="desnion"></ion-icon></div></center></a>
                                                    </div>                                
                                    </div>
                                </nav>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <nav class="navbar fixed-bottom navbar-light bg-light">
                                    <div class="container">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="index.php"><center><div><ion-icon name="home-outline" class="ionftr"></ion-icon></div></center></a>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="mysearch.php"><center><div><ion-icon class="ionftr" name="search-outline" role="img" class="md hydrated desnion" aria-label="search outline"></ion-icon></div></center></a>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="Ad.php"><center><div><ion-icon class="ionftr_ad" name="add-circle-outline" class="desnion"></ion-icon></div></center></a>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="loginn.php"><center><div><ion-icon class="ionftr" name="chatbubbles-outline" role="img" class="md hydrated desnion" aria-label="chatbubbles outline"></ion-icon></div></center></a>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <a href="loginn.php"><center><div><ion-icon class="ionftr" name="person-outline" class="desnion"></ion-icon></div></center></a>
                                                    </div>                                
                                    </div>
                                </nav>
                            </div>
                            <?php 
                            }
                            ?>
                <?php
                    echo navtwo();
                ?>
            </body>
</html>
