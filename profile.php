<?php 
    ob_start();
    session_start();
    $pageTitle = 'My Profile';
    include 'init.php';

    if(isset($_SESSION['uid'])){
        // $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;

        $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
        if($do == 'Manage'){
    ?>

                <style>
                    .row.content.rowmy { padding: 12px; margin-right: 200px;}
                    .divone {
                        border: 1px solid gray;
                        border-bottom: none;
                        padding: 5px;
                        font-size: 18px;
                        font-weight: 600;
                        color: #0093D5;
                        border-top-left-radius: 5px;
                        border-top-right-radius: 5px;
                        /* border-bottom-right-radius: 5px; */
                        /* border-bottom-left-radius: 5px; */
                        text-align: center;
                        margin-left: 5px;
                        margin-right: 5px;
                        margin-top: 5px;
                    }
                    .divtwo {
                        border: 1px solid gray;
                        border-bottom: none;
                        padding: 5px;
                        font-size: 18px;
                        font-weight: 600;
                        color: black;
                        background-color: #EEEEEE;
                        border-top-left-radius: 5px;
                        border-top-right-radius: 5px;
                        /* border-bottom-right-radius: 5px; */
                        /* border-bottom-left-radius: 5px; */
                        text-align: center;
                        margin-left: 5px;
                        margin-right: 5px;
                        margin-top: 5px;
                    }
                </style>
                <div class="d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
                    <div class="container"><br><br>
                        <div class="row g-5">
                                <div class="col divtwo"> <a href="editprofile.php?do=Edit&userid=<?php echo $_SESSION['uid']?>" style="color: black;">My Profile</a> </div>
                                <div class="col divtwo"> <a href="my.php" style="color: black;">My Ads</a> </div>
                                <div class="col divtwo"> <a href="myfavorite.php" style="color: black;">My Favorites</a> </div>
                                <div class="col divtwo"> <a href="mysearch.php" style="color: black;">My Searches</a> </div>
                                <div class="col divone"> <a href="profile.php" style="color: #0093D5;">Change Avatar</a> </div>                          
                        </div>
                    </div>
                </div>

                <div class="d-none d-md-block d-lg-none">
                    <div class="container">
                        <div class="row rowmy">
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="editprofile.php?do=Edit&userid=<?php echo $_SESSION['uid']?>" style="color: black;">My Profile</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="my.php" style="color: black;">My Ads</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="myfavorite.php" style="color: black;">My Favorites</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="mysearch.php" style="color: black;">My Searches</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divone"> <a href="profile.php" style="color: #0093D5;">Change Avatar</a> </div>                            
                        </div>
                    </div>
                </div>

                <div class="d-block d-sm-none">
                    <div class="container">
                        <div class="row rowmy">
                            <div class="container">
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="editprofile.php?do=Edit&userid=<?php echo $_SESSION['uid']?>" style="color: black;">My Profile</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="my.php" style="color: black;">My Ads</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="myfavorite.php" style="color: black;">My Favorites</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="mysearch.php" style="color: black;">My Searches</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divone"> <a href="profile.php" style="color: #0093D5;">Change Avatar</a> </div>                            
                            </div>
                        </div>
                    </div>
                </div>

        <div class="container information block" id="avatar">
            <div class="container">
                <div class="panel panel-primary">
                    <div class="panle-heading"><ion-icon name="images-outline"></ion-icon>Change your picture</div>
                    <div class="panel-body">
                        <div class="alert alert-secondary" role="alert">You may not see the Image you selected until the next time you sign in with Oh Yamal.</div>
                        <div class="container">
                            <div class="row" >
                                    <div class="col-lg-2 col-md-2 col-sm-12">
                                        <ul class="list-unstyled">
                                            <li>
                                                <?php
                                                // echo "<img class='updateimgavatar' src='php/Update-Image/uploads/avatars/" . $sessionimg ."' alt='avatar' />";
                                                    ?>
                                                                            <?php
                                                                            if(!empty($sessionimg)){
                                                                                echo "<img class='updateimgavatar' src='php/Update-Image/uploads/avatars/" . $sessionimg ."' alt='avatar' />";?>
                                                                                <!-- <span class="caret"></span> -->
                                                                            <?php }
                                                                            else{
                                                                                echo "<img class='updateimgavatar' src='php/Update-Image/uploads/avatars/5453294.png' alt='avatar' />";?>
                                                                                <!-- <span class="caret"></span> -->
                                                                            <?php } ?>

                                            </li>
                                        </ul> 
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-12" style="margin-top: 2%;">
                                        <form class="form-horizontal" action="?do=Update" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="tbl_image_id" value="<?php echo $_SESSION['uid'] ?>" />
                                                <input type="file" name="image" style="margin-bottom: 10px;">
                                                <input type="submit" name="updateavatar" value="Update your picture" class='btn btn-outline-primary'>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php 
        }

        elseif($do == 'Update'){
                $get_id =  $_POST['tbl_image_id'];
                    $imageName = $_FILES['image']['name'];
                    $imageTmp  = $_FILES['image']['tmp_name'];
                    $imageExtension = strtolower(substr(strrchr($imageName, '.'), 1));
                        $image = rand(0, 100000000) . '_' . rand(0, 100000) . $imageExtension;
                        move_uploaded_file($imageTmp, "php/Update-Image/uploads/avatars/" . $image);
                    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "UPDATE users SET avatar ='$image' WHERE user_id = '$get_id' ";

                    $con->exec($sql);
                    echo "<script> window.location='profile.php'</script>";
        }
    } 
        else  {
        header('Location: login.php');
        exit();
                }
                include 'includes/templates/footer.php';  
                ?>
                <style>
                  .backfooter{background: url('layout/images/photoholgic-fn6x1TL290w-unspla.png');
                  }
                  .backfooter1{background: url('layout/images/photoholgic-fn6x1TL290w-unspla.png');
                    /* margin-left: -150px;margin-right: -92px; */
                  }
                  .backfooter2{background: url('layout/images/photoholgic-fn6x1TL290w-unspla.png');
                    /* margin-left: -12px;margin-right: -10px; */
                  }
                  .site-footer{background: linear-gradient(to right, rgba(3,63,129,0.91), rgba(3,63,129,0.91));
                  /* margin-left: -150px;margin-right: -117px; */
                  }
                  input.formsubscr {
                    text-align: center;
                    border: 2px solid #175DE3;
                    border-radius: 3px;
                    /* background-color: #fff; */
                    color: #282435;
                    padding: 5px;
                      margin-bottom: 5px;}
                      /* .backfooter{background-image: url('layout/images/photoholgic-fn6x1TL290w-unspla.png');} */
                </style>
                
                <div class="d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block backfooter">
                  <footer class="site-footer">
                        <div class="container">
                          <div class="row content">
                            <div class="col-lg-4 col-md-6 col-xs-6">
                              <ul class="footer-links">
                                <style>
                                  #logo_1_icon1 {
                                      width: 76px;
                                      height: 75px;
                                    }
                                    #Rectangle_74 { fill: rgba(251,201,0,1);}
                                    .Rectangle_74 {
                                        overflow: visible;
                                        width: 52px;
                                        height: 5px;
                                        left: 0px;
                                        top: 5px;
                                    }
                                </style>
                                <li><a href="index.php" class="afott"><img id="logo_1_icon1" src="layout/images/logo_1_icon1.png" alt=""></a></li>
                                <li>
                                <div id="We_are_recognized_for_exceedin">
                                  <span class="textfoot">We are recognized for exceeding client expectations and delivering great results through dedication, ease of process, and extraordinary services to our worldwide clients.</span>
                                </div>
                                </li>
                                <div class="row">
                                <ul class="social-icons">
                                    <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo twitter(); ?>"><ion-icon name="logo-twitter"></ion-icon></a></div></li>
                                    <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo facebook(); ?>"><ion-icon name="logo-facebook"></ion-icon></a></div></li>
                                    <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo instagram(); ?>"><ion-icon name="logo-instagram"></ion-icon></a></div></li>
                                    <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo linkedin(); ?>"><ion-icon name="logo-linkedin"></ion-icon></a></div></li>
                                    <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo whatsapp(); ?>"><ion-icon name="logo-whatsapp"></ion-icon></a></div></li>
                                  </ul>
                                </div>
                
                              </ul>
                            </div>
                
                            <div class="col-lg-2 col-md-3 col-xs-6">
                              <h5 class="hsinqftr">Quick Links</h5>
                              <svg class="Rectangle_74">
                                <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                                </rect>
                              </svg>
                              <ul class="footer-links">
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo home(); ?>">Home</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo about(); ?>">About</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo features(); ?>">Features</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo pricing(); ?>">Pricing</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo faqs(); ?>">Faqs</a></li>
                              </ul>
                            </div>
                
                            <div class="col-lg-2 col-md-3 col-xs-6">
                              <h5 class="hsinqftr">Popular Searches</h5>
                              <svg class="Rectangle_74">
                                <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                                </rect>
                              </svg>
                              <ul class="footer-links">
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmotors(); ?>">Motors</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo forrentlink(); ?>">Property For Rent</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allforsale(); ?>">Property For Sale</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmob(); ?>">Mobiles & Tablets</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo homeapplink(); ?>">Home Appliances</a></li>
                              </ul>
                            </div>
                
                            <div class="col-lg-2 col-md-6 col-xs-6">
                              <h5 class="hsinqftr">Support</h5>
                                <svg class="Rectangle_74">
                                  <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                                  </rect>
                                </svg>
                                <ul class="footer-links">
                                  <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo help(); ?>">Help</a></li>
                                  <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo contact(); ?>">Contact Us</a></li>
                                </ul>
                            </div>
                            
                            <div class="col-lg-2 col-md-6 col-xs-6">
                              <h5 class="hsinqftr">Subscribe</h5>
                              <svg class="Rectangle_74">
                                <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                                </rect>
                              </svg>
                              <div class="row content">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class=" g-3 form_submail">
                                    <div class="col-lg-12 col-xs-6 col-md-3">
                                      <div class="inputnamelast">
                                        <ion-icon name="person-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                                        <input type="text" class="formsubscr" placeholder="first name, last name *" name="name" required="required">
                                      </div>
                                    </div>
                                    <div class="col-lg-12 col-xs-6 col-md-3">
                                        <ion-icon name="mail-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                                        <input type="email" class="formsubscr" placeholder="your email address *" name="email" required="required">
                                    </div>
                                    <div class="col-lg-12 col-xs-6 col-md-3">
                                        <input type="submit" class="btn confirmsubscribe" value="SUBSCRIBE" name="subsc" style="margin-top: 5px;width:232px;    font-size: 18px;background-color:#175DE3;">
                                    </div>             
                                </form>  
                                <div class="the-errors text-center">
                                  <?php
                                              if(isset($successMsg1)){
                                                  echo '<div class="msg success">' . $successMsg1 . '</div>';
                                              }
                                  ?>
                                </div>
                                <?php
                                          if(isset($_SESSION['uid'])){
                                            if(isset($_POST['subsc']))
                                            {
                                                $email = $_POST['email'];
                                                $name = $_POST['name'];
                                                        $check = checkItem("Email", "subscribe", $email);
                                                        if($check == 1)
                                                        {
                                                            $successMsg1 = 
                                                            '<div class="alert alert-danger">This Subscribe Is Exist.</div>';
                                                        }
                                                        else{
                                                            $stmtadd = $con->prepare("INSERT INTO
                                                                                    subscribe(Name, Email, date)
                                                                                    VALUES(:zname, :zemail, now())");
                                                            $stmtadd->execute(array(
                                                                'zname' => $_SESSION['email'],
                                                                'zemail' => $email
                                                            ));
                                                            $subject = "Thanks for Subscribing us - Rak4us";
                                                            $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
                                                            $sender = "From: rak4us";
                                                            if(mail($email, $subject, $message, $sender)){
                                                                ?>
                                                                  <?php
                                                                        $successMsg1 = "<div class='alert alert-success'>Thanks for Subscribing us.</div>" ;
                                                                  ?>
                                                                <?php
                                                                $email = "";
                                                              }else{
                                                                ?>
                                                                <?php $successMsg1 = "<div class='alert alert-danger'>Failed while sending your mail!</div>" ?>
                                                                <?php
                                                              }
                                                        }
                                            }
                                          }
                                            ?>
                              </div>
                            </div>
                          <hr class="footer_hr">
                        </div>
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-12 col-sm-6 col-xs-12">
                              <p class="copyright-text" style="text-align: center;color: #fff;font-size: 20px;">&copy; <?php echo date("Y"); ?> Company, Inc. All Rights Reserved.</p>
                            </div>
                          </div>
                        </div>
                  </footer>          
                </div>
                
                <div class="d-block d-sm-none backfooter2">
                  <footer class="site-footer">
                        <div class="container">
                          <div class="row content">
                            <div class="col-lg-4 col-md-6 col-xs-6">
                              <ul class="footer-links">
                                <style>
                                  #logo_1_icon1 {
                                      width: 76px;
                                      height: 75px;
                                    }
                                    #Rectangle_74 { fill: rgba(251,201,0,1);}
                                    .Rectangle_74 {
                                        overflow: visible;
                                        width: 52px;
                                        height: 5px;
                                        left: 0px;
                                        top: 5px;
                                    }
                                </style>
                                <li><a href="index.php" class="afott"><img id="logo_1_icon1" src="layout/images/logo_1_icon1.png" alt=""></a></li>
                                <li>
                                <div id="We_are_recognized_for_exceedin">
                                  <span class="textfoot">We are recognized for exceeding client expectations and delivering great results through dedication, ease of process, and extraordinary services to our worldwide clients.</span>
                                </div>
                                </li>
                                <br>
                                <div class="row">
                                <ul class="social-icons">
                                    <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo twitter(); ?>"><ion-icon name="logo-twitter"></ion-icon></a></div></li>
                                    <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo facebook(); ?>"><ion-icon name="logo-facebook"></ion-icon></a></div></li>
                                    <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo instagram(); ?>"><ion-icon name="logo-instagram"></ion-icon></a></div></li>
                                    <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo linkedin(); ?>"><ion-icon name="logo-linkedin"></ion-icon></a></div></li>
                                    <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo whatsapp(); ?>"><ion-icon name="logo-whatsapp"></ion-icon></a></div></li>
                                  </ul>
                                </div>
                
                              </ul>
                            </div>
                
                            <div class="col-lg-2 col-md-3 col-xs-6" style="text-align: center;">
                              <h5 class="hsinqftr">Quick Links</h5>
                              <svg class="Rectangle_74">
                                <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                                </rect>
                              </svg>
                              <ul class="footer-links">
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo home(); ?>">Home</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo about(); ?>">About</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo features(); ?>">Features</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo pricing(); ?>">Pricing</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo faqs(); ?>">Faqs</a></li>
                              </ul>
                            </div>
                
                            <div class="col-lg-2 col-md-3 col-xs-6" style="text-align: center;">
                              <h5 class="hsinqftr">Popular Searches</h5>
                              <svg class="Rectangle_74">
                                <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                                </rect>
                              </svg>
                              <ul class="footer-links">
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmotors(); ?>">Motors</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo forrentlink(); ?>">Property For Rent</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allforsale(); ?>">Property For Sale</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmob(); ?>">Mobiles & Tablets</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo homeapplink(); ?>">Home Appliances</a></li>
                              </ul>
                            </div>
                
                            <div class="col-lg-2 col-md-6 col-xs-6" style="text-align: center;">
                              <h5 class="hsinqftr">Support</h5>
                                <svg class="Rectangle_74">
                                  <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                                  </rect>
                                </svg>
                                <ul class="footer-links">
                                  <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo help(); ?>">Help</a></li>
                                  <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo contact(); ?>">Contact Us</a></li>
                                </ul>
                            </div>
                            
                            <div class="col-lg-2 col-md-6 col-xs-6" style="text-align: center;">
                              <h5 class="hsinqftr">Subscribe</h5>
                              <svg class="Rectangle_74">
                                <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                                </rect>
                              </svg>
                              <div class="row content">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class=" g-3 form_submail">
                                    <div class="col-lg-12 col-xs-6 col-md-3">
                                        <ion-icon name="person-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                                        <input type="text" class="formsubscr" placeholder="first name, last name *" name="name" required="required">
                                    </div>
                                    <div class="col-lg-12 col-xs-6 col-md-3">
                                        <ion-icon name="mail-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                                        <input type="email" class="formsubscr" placeholder="your email address *" name="email" required="required">
                                    </div>
                                    <div class="col-lg-12 col-xs-6 col-md-3">
                                        <input type="submit" class="btn confirmsubscribe" value="SUBSCRIBE" name="subsc" style="margin-top: 5px;width:232px;    font-size: 18px;background-color:#175DE3;">
                                    </div>             
                                </form>  
                                <div class="the-errors text-center">
                                  <?php
                                              if(isset($successMsg1)){
                                                  echo '<div class="msg success">' . $successMsg1 . '</div>';
                                              }
                                  ?>
                                </div>
                                <?php
                                          if(isset($_SESSION['uid'])){
                                            if(isset($_POST['subsc']))
                                            {
                                                $email = $_POST['email'];
                                                $name = $_POST['name'];
                                                        $check = checkItem("Email", "subscribe", $email);
                                                        if($check == 1)
                                                        {
                                                            $successMsg1 = 
                                                            '<div class="alert alert-danger">This Subscribe Is Exist.</div>';
                                                        }
                                                        else{
                                                            $stmtadd = $con->prepare("INSERT INTO
                                                                                    subscribe(Name, Email, date)
                                                                                    VALUES(:zname, :zemail, now())");
                                                            $stmtadd->execute(array(
                                                                'zname' => $_SESSION['email'],
                                                                'zemail' => $email
                                                            ));
                                                            $subject = "Thanks for Subscribing us - Rak4us";
                                                            $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
                                                            $sender = "From: rak4us";
                                                            if(mail($email, $subject, $message, $sender)){
                                                                ?>
                                                                  <?php
                                                                        $successMsg1 = "<div class='alert alert-success'>Thanks for Subscribing us.</div>" ;
                                                                  ?>
                                                                <?php
                                                                $email = "";
                                                              }else{
                                                                ?>
                                                                <?php $successMsg1 = "<div class='alert alert-danger'>Failed while sending your mail!</div>" ?>
                                                                <?php
                                                              }
                                                        }
                                            }
                                          }  
                                            ?>
                              </div>
                            </div>
                          <hr class="footer_hr">
                        </div>
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-12 col-sm-6 col-xs-12">
                              <p class="copyright-text" style="text-align: center;color: #fff;font-size: 20px;">&copy; <?php echo date("Y"); ?> Company, Inc. All Rights Reserved.</p>
                            </div>
                          </div>
                        </div>
                  </footer>          
                </div>
                
                <div class="d-none d-md-block d-lg-none backfooter1">
                  <footer class="site-footer">
                        <div class="container">
                          <div class="row content">
                            <div class="col-lg-4 col-md-6 col-xs-6">
                              <ul class="footer-links">
                                <style>
                                  #logo_1_icon1 {
                                      width: 76px;
                                      height: 75px;
                                    }
                                    #Rectangle_74 { fill: rgba(251,201,0,1);}
                                    .Rectangle_74 {
                                        overflow: visible;
                                        width: 52px;
                                        height: 5px;
                                        left: 0px;
                                        top: 5px;
                                    }
                                </style>
                                <li><a href="index.php" class="afott"><img id="logo_1_icon1" src="layout/images/logo_1_icon1.png" alt=""></a></li>
                                <li>
                                <div id="We_are_recognized_for_exceedin">
                                  <span class="textfoot">We are recognized for exceeding client expectations and delivering great results through dedication, ease of process, and extraordinary services to our worldwide clients.</span>
                                </div>
                                </li>
                                <br>
                                <div class="row">
                                <ul class="social-icons">
                                    <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo twitter(); ?>"><ion-icon name="logo-twitter"></ion-icon></a></div></li>
                                    <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo facebook(); ?>"><ion-icon name="logo-facebook"></ion-icon></a></div></li>
                                    <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo instagram(); ?>"><ion-icon name="logo-instagram"></ion-icon></a></div></li>
                                    <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo linkedin(); ?>"><ion-icon name="logo-linkedin"></ion-icon></a></div></li>
                                    <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo whatsapp(); ?>"><ion-icon name="logo-whatsapp"></ion-icon></a></div></li>
                                  </ul>
                                </div>
                
                              </ul>
                            </div>
                
                            <div class="col-lg-2 col-md-3 col-xs-6">
                              <h5 class="hsinqftr">Quick Links</h5>
                              <svg class="Rectangle_74">
                                <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                                </rect>
                              </svg>
                              <ul class="footer-links">
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo home(); ?>">Home</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo about(); ?>">About</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo features(); ?>">Features</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo pricing(); ?>">Pricing</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo faqs(); ?>">Faqs</a></li>
                              </ul>
                            </div>
                
                            <div class="col-lg-2 col-md-3 col-xs-6">
                              <h5 class="hsinqftr">Popular Searches</h5>
                              <svg class="Rectangle_74">
                                <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                                </rect>
                              </svg>
                              <ul class="footer-links">
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmotors(); ?>">Motors</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo forrentlink(); ?>">Property For Rent</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allforsale(); ?>">Property For Sale</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmob(); ?>">Mobiles & Tablets</a></li>
                                <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo homeapplink(); ?>">Home Appliances</a></li>
                              </ul>
                            </div>
                
                            <div class="col-lg-2 col-md-6 col-xs-6">
                              <h5 class="hsinqftr">Support</h5>
                                <svg class="Rectangle_74">
                                  <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                                  </rect>
                                </svg>
                                <ul class="footer-links">
                                  <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo help(); ?>">Help</a></li>
                                  <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo contact(); ?>">Contact Us</a></li>
                                </ul>
                            </div>
                            
                            <div class="col-lg-2 col-md-6 col-xs-6">
                              <h5 class="hsinqftr">Subscribe</h5>
                              <svg class="Rectangle_74">
                                <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                                </rect>
                              </svg>
                              <div class="row content">
                
                
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class=" g-3 form_submail">
                                    <div class="col-lg-12 col-xs-6 col-md-3">
                                        <ion-icon name="person-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                                        <input type="text" class="formsubscr" placeholder="first name, last name *" name="name" required="required">
                                    </div>
                                    <div class="col-lg-12 col-xs-6 col-md-3">                      
                                        <ion-icon name="mail-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                                        <input type="email" class="formsubscr" placeholder="your email address *" name="email" required="required">
                                    </div>
                                    <div class="col-lg-12 col-xs-6 col-md-3">
                
                                        <input type="submit" class="btn confirmsubscribe" value="SUBSCRIBE" name="subsc1" style="margin-top: 5px;width:232px;    font-size: 18px;background-color:#175DE3;">
                                    </div>             
                                </form>  
                                <div class="the-errors text-center">
                                  <?php
                                              if(isset($successMsg1)){
                                                  echo '<div class="msg success">' . $successMsg1 . '</div>';
                                              }
                                  ?>
                                </div>
                                <?php
                                          if(isset($_SESSION['uid'])){
                                            if(isset($_POST['subsc1']))
                                            {
                                                $email = $_POST['email'];
                                                $name = $_POST['name'];
                                                        $check = checkItem("Email", "subscribe", $email);
                                                        if($check == 1)
                                                        {
                                                            $successMsg1 = 
                                                            '<div class="alert alert-danger">This Subscribe Is Exist.</div>';
                                                        }
                                                        else{
                                                            $stmtadd = $con->prepare("INSERT INTO
                                                                                    subscribe(Name, Email, date)
                                                                                    VALUES(:zname, :zemail, now())");
                                                            $stmtadd->execute(array(
                                                                'zname' => $_SESSION['email'],
                                                                'zemail' => $email
                                                            ));
                                                            $subject = "Thanks for Subscribing us - Rak4us";
                                                            $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
                                                            $sender = "From: rak4us";
                                                            if(mail($email, $subject, $message, $sender)){
                                                                ?>
                                                                  <?php
                                                                        $successMsg1 = "<div class='alert alert-success'>Thanks for Subscribing us.</div>" ;
                                                                  ?>
                                                                <?php
                                                                $email = "";
                                                              }else{
                                                                ?>
                                                                <?php $successMsg1 = "<div class='alert alert-danger'>Failed while sending your mail!</div>" ?>
                                                                <?php
                                                              }
                                                        }
                                            }
                                          }  
                                            ?>
                              </div>
                            </div>
                          <hr class="footer_hr">
                        </div>
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-12 col-sm-6 col-xs-12">
                              <p class="copyright-text" style="text-align: center;color: #fff;font-size: 20px;">&copy; <?php echo date("Y"); ?> Company, Inc. All Rights Reserved.</p>
                            </div>
                          </div>
                        </div>
                  </footer>          
                </div>
                
                <?php 
                ob_end_flush();
                ?>