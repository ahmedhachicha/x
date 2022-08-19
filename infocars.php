<?php 
    ob_start();
    session_start();
    $Navbar = '';
    $pageTitle = 'Informations';
    include 'init.php';
    $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
    echo '<hr>';

                echo '<div class="container productdiv">';
                    echo '<div class="row content">';
                    if(isset($_GET['pageid']) && is_numeric($_GET['pageid'])){
                        $blog = intval($_GET['pageid']);                                 
                                $allItems = getAllFrom("*", "products", "where Id = {$blog}", "AND Approve = 1", "Id", "");
                                foreach($allItems as $item){
                                    echo '<h2 class="prodtitle">' . $item['Name'] . '</h2>' ;
                                    echo '<div class="col-lg-6 mb-3">';
                                                // echo '<div class="carousel-item active">';
                                                $i = '';
                                                $res = $item['Image'];
                                                $res = explode(" ", $res);
                                                $count = count($res) - 1;   
                                                // $count =  2;                           
                                                for($i = 0; $i<$count; ++$i)
                                                {
                                                     echo '<img class="imglight" alt="click" src="admin/Update_Image/uploads/avatars/' . $res[$i] .' " >'; 
                                                }  
                                                    // echo '<img  class="d-block w-100 imgprod" alt="..." src="admin/Update_Image/uploads/avatars/' . $item['Image'] .' " >';
                                                // echo '</div>';
                                    echo '</div>';
                                    echo '<div class="col-lg-6 ">';
                                        echo '<div class="container ">';
                                            echo '<div class="row content" style="margin-top:10px;">';
                                                echo '<div class="col-md-2 mb-3">';
                                                    if($item['Status'] == 'New'){ echo '<span class="spanstatus" style="background-color: #F23C49;">New</span> '; }
                                                    elseif($item['Status'] == 'Used'){ echo '<span class="spanstatus" style="background-color:#3C76F2;">Used</span> '; }
                                                echo '</div>';
                                                echo '<div class="col-md-2">';
                                                    echo '<span class="spancertified">Certified</span>';
                                                echo '</div>';
                                            echo '</div>';
                                            echo '<h3 class="priceprod">$' . number_format($item['Price']) . '</h3>';
                                            ?>
                                            <?php
                                        echo '</div>';
                                        echo '<div class="container ">';
                                            echo '<div class="row content">';
                                                echo '<div class="col-md-6 mb-3">';
                                                    echo '<ion-icon name="speedometer-outline" style="font-size: 20px;color: red;"></ion-icon><span style="font-size: 25px; font-weight: 500;"> ' . $item['k_mi'] . 'K miles</span>';
                                                echo '</div>';
                                                echo '<div class="col-md-6">';
                                                    echo '<ion-icon name="location-outline" style="font-size: 20px;color: red;"></ion-icon><span style="font-size: 25px; font-weight: 500;">' . $item['Location'] .  '</span>';
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';
                                        $stmt = $con->prepare("SELECT products.*, users.Name AS username, users.avatar AS avatar, users.FullName AS FullName, users.tel AS tel FROM products
                                                            INNER JOIN users ON 
                                                                    users.Id = products.user_Id
                                                            Where products.Id = $blog");
                                        $stmt->execute();
                                        $alluser = $stmt->fetchAll();
                                        foreach($alluser as $user){
                                            // echo '<div class="container userprod">';
                                            //     echo '<div class="row content">';
                                            //         echo '<div class="col-lg-12 ">';
                                            //             echo '<div class="row content">';
                                            //                 echo '<div class="col-md-3 mb-3">';
                                            //                     echo '<img  class="avatarprod" alt="..." src="admin/Update-Image/uploads/avatars/' . $user['avatar'] .' " >';
                                            //                 echo '</div>';
                                            //                 echo '<div class="col-md-3">';
                                            //                     echo '<h5 class="fullnameprod">' . $user['FullName'] . '</h5>';
                                            //                 echo '</div>';
                                            //                 echo '<h5 class="telprod"><ion-icon name="call-outline" style="font-size: 20px;color: red;margin-right:5px;"></ion-icon>' . $user['tel'] . '</h5>';
                                            //             echo '</div>';
                                            //         echo '</div>';
                                            //     echo '</div>';
                                            }
                                         if(isset($_SESSION['user'])) { ?>
                                            <!-- <div class="row">
                                                <div class="col-md-offset-3">
                                                    <div class="add-comment">
                                                        <h3>Send Message</h3>
                                                        <form action="<?php echo $_SERVER['PHP_SELF'] . '?pageid=' . $item['Id'] ?>" method="POST"> 
                                                            <textarea class=" trxtprod" name="comment" id="" cols="20" rows="3" required></textarea>
                                                                <input class="btn btn-primary btnprodtex" type="submit" value="Submit">
                                                        </form>
                                                        <?php
                                                            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                                $comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
                                                                $itemid = $item['Id'];
                                                                $userid = $_SESSION['uid'];
                            
                                                                if(!empty($comment))
                                                                {
                                                                    $stmt = $con->prepare("INSERT INTO comments(comment, comment_date, item_id, user_id)
                                                                                            VALUES(:zcomment, NOW(), :zitemid, :zuserid)");
                                                                    $stmt->execute(array(
                                                                        'zcomment' => $comment,
                                                                        'zitemid' => $itemid,
                                                                        'zuserid' => $userid
                                                                    ));
                                                                    if($stmt){
                                                                        echo '<br /> <div class="alert alert-success">sent succesfully.</div>';
                                                                    }
                                                                }
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <?php } else {
                                                // echo '<div class="logsignmessg">';
                                                //     echo '<a href="login.php" class="divlogsigna">Login</a> or <a href="signup.php" class="divlogsigna"> Sign Up</a> To <ion-icon name="chatbubbles-outline" style="font-size: 20px;color: red;margin-right:5px;"></ion-icon> Send Message.';
                                                // echo '</div>'; 
                                            } 
                                            // echo '</div>';
                                        

                                    echo '</div>';
                                }
                                echo '</div>';
                            echo '</div>';
              
                            echo '<div class="gallery-box">';
                                echo '<div class="container">';
                                    echo '<div class="row content">';
                                        echo '<div class="col-lg-6">';
                                            echo '<div class="tz-gallery">';
                                                echo '<div class="row">';
                                                if(isset($_GET['pageid']) && is_numeric($_GET['pageid'])){
                                                    $blog = intval($_GET['pageid']);
                                                    $itemss = getAllFrom("*", "prodchild", "where Pro_Id = {$blog}", "", "Id", "");
                                                    foreach($itemss as $itemm){
                                                    echo '<div class="col-sm-12 col-md-4 col-lg-2">';
                                                        echo '<a class="lightbox" style="background:none;" href="admin/Update_Image/uploads/avatars/' . $itemm['Image'] .' ">';
                                                            echo '<img style="width: 96px; height: 96px;object-fit: cover;" class="img-fluid" src="admin/Update_Image/uploads/avatars/' . $itemm['Image'] .' "  alt="Gallery Images">';
                                                        echo '</a>';
                                                    echo '</div>';}
                                                }
                                                else{
                                                    echo 'You must Add Page Id';
                                                }
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';

                            
                            ?>
                                <!-- <div class="container">
                                    <h1 class="h1-member">Specifications</h1>
                                    <div class="row content">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                <?php 
                                                $allItems = getAllFrom("*", "products", "where Id = {$blog}", "AND Approve = 1", "Id", "");
                                                foreach($allItems as $item){
                                                    echo '<h5>Manufacturing Year : <span class="h1-memberr">' . $item['Year'] . '</span> </h5>';
                                                    echo '<h5>Mileage : <span class="h1-memberr">' . $item['k_mi'] . '</span> </h5>';
                                                    if($item['BodyType'] == 1){ echo '<h5>Body Type : <span class="h1-memberr">Coupe</span> </h5>'; }
                                                    elseif($item['BodyType'] == 2){ echo '<h5>Body Type : <span class="h1-memberr">Pick Up</span> </h5>'; }
                                                    elseif($item['BodyType'] == 3){ echo '<h5>Body Type : <span class="h1-memberr">Sedan</span> </h5>'; }
                                                    echo '<h5>Drivetrain : <span class="h1-memberr">' . $item['Drivetrain'] . '</span> </h5>';
                                                    echo '<h5>Engine : <span class="h1-memberr">' . $item['Engine'] . '</span> </h5>';
                                                    echo '<h5>Transmission : <span class="h1-memberr">' . $item['Transmission'] . '</span> </h5>';                                              
                                                }
                                                ?>
                                                </div>
                                                <div class="col-lg-6">
                                                <?php 
                                                    $allItems = getAllFrom("*", "products", "where Id = {$blog}", "AND Approve = 1", "Id", "");
                                                    foreach($allItems as $item){
                                                        if($item['TypeGas'] == 1){ echo '<h5>Body Type : <span class="h1-memberr">Hybrid</span> </h5>'; }
                                                        elseif($item['TypeGas'] == 2){ echo '<h5>Body Type : <span class="h1-memberr">Gasoline</span> </h5>'; }
                                                        elseif($item['TypeGas'] == 3){ echo '<h5>Body Type : <span class="h1-memberr">Diesed</span> </h5>'; }
                                                        echo '<h5>City MPG : <span class="h1-memberr">' . $item['Citympg'] . '</span> </h5>';                                              
                                                        echo '<h5>Highway MPG : <span class="h1-memberr">' . $item['Highwaympg'] . '</span> </h5>';                                              
                                                        echo '<h5>Exterior Color : <span class="h1-memberr">' . $item['Exteriorcolor'] . '</span> </h5>';                                              
                                                        echo '<h5>Interior Color : <span class="h1-memberr">' . $item['Interiorcolor'] . '</span> </h5>';                                              
                                                        echo '<h5>VIN : <span class="h1-memberr">' . $item['Vin'] . '</span> </h5>';                                                                                                        
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- <div class="container">
                                    <h1 class="h1-member">Features</h1>
                                    <div class="row content">
                                        <div class="col-lg-6 features">
                                            <div class="accordion accordion-flush " id="accordionFlushExample">
                                                <div class="accordion-item accordion-itemm">
                                                    <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Exterior
                                                    </button>
                                                    </h2>
                                                    <?php
                                                    if(isset($_GET['pageid']) && is_numeric($_GET['pageid'])){
                                                        $blog = intval($_GET['pageid']);
                                                        $itemsss = getAllFrom("*", "exetriorprod", "where Pro_Id = {$blog}", "", "Id", "");
                                                        foreach($itemsss as $itemmm){
                                                        echo '<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">';
                                                            echo '<li class="liprod">' . $itemmm['Description'] . '</li>';
                                                        echo '</div>';
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                                <div class="accordion-item accordion-itemm">
                                                    <h2 class="accordion-header" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Interior
                                                    </button>
                                                    </h2>
                                                        <?php
                                                    if(isset($_GET['pageid']) && is_numeric($_GET['pageid'])){
                                                        $blog = intval($_GET['pageid']);
                                                        $itemssss = getAllFrom("*", "interiorprod", "where Pro_Id = {$blog}", "", "Id", "");
                                                        foreach($itemssss as $itemmmm){
                                                        echo '<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">';
                                                            echo '<li class="liprod">' . $itemmmm['Description'] . '</li>';
                                                        echo '</div>';
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                                <div class="accordion-item accordion-itemm">
                                                    <h2 class="accordion-header" id="flush-headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                        Safety
                                                    </button>
                                                    </h2>
                                                    <?php
                                                    if(isset($_GET['pageid']) && is_numeric($_GET['pageid'])){
                                                        $blog = intval($_GET['pageid']);
                                                        $itemssss = getAllFrom("*", "saflly", "where Pro_Id = {$blog}", "", "Id", "");
                                                        foreach($itemssss as $itemmmm){
                                                        echo '<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">';
                                                            echo '<li class="liprod">' . $itemmmm['Description'] . '</li>';
                                                        echo '</div>';
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                                <div class="accordion-item accordion-itemm">
                                                    <h2 class="accordion-header" id="flush-headingfoor">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefoor" aria-expanded="false" aria-controls="flush-collapsefoor">
                                                        Technology
                                                    </button>
                                                    </h2>
                                                    <?php
                                                    if(isset($_GET['pageid']) && is_numeric($_GET['pageid'])){
                                                        $blog = intval($_GET['pageid']);
                                                        $itemssss = getAllFrom("*", "technology", "where Pro_Id = {$blog}", "", "Id", "");
                                                        foreach($itemssss as $itemmmm){
                                                        echo '<div id="flush-collapsefoor" class="accordion-collapse collapse" aria-labelledby="flush-headingfoor" data-bs-parent="#accordionFlushExample">';
                                                            echo '<li style="liprod">' . $itemmmm['Description'] . '</li>';
                                                        echo '</div>';
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                </div> -->
                                <?php
                    echo navone();
                ?>
                <?php    }
                    else{
                                        ?>
                                        <style>
                                            .pageindexnofound {
                                                text-decoration: none;
                                                border: 1px solid gray;
                                                padding: 10px;
                                                border-radius: 5px;
                                                color: blue;
                                            }
                                            .pageindexnofound:hover{
                                                color: black;
                                            }
                                        </style><?php
                                        echo '<center><h1 style="font-size: 150px;">404</h1></center>
                                        <center><h3 style="font-size: 50px;">Page Not Found</h3></center>';}    ?>
                                    </div>
                                </div>
                                <!-- <a href="?do=Insert">AAAAA</a> -->
                                <!-- <input type="submit"> -->
                                <!-- <button class="button_btnn">ORDER NOW</button> -->
                                <!-- <input type="submit" value="Add To Cart" class="btn btn-primary btn-lg"/> -->
 <?php           include 'includes/templates/footer.php'; 
        ?>
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
                                <ion-icon name="person-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                                <input type="text" class="formsubscr" placeholder="first name, last name *" name="name" required="required">
                            </div>
                            <div class="col-lg-12 col-xs-6 col-md-3">
                                <ion-icon name="mail-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                                <input type="email" class="formsubscr" placeholder="your email address *" name="email" required="required">
                            </div>
                            <div class="col-lg-12 col-xs-6 col-md-3">
                                <input type="submit" class="btn confirmsubscribe" value="SUBSCRIBE" name="subsc" style="color:#fff;font-weight:500;margin-top: 5px;width:232px;font-size: 20px;background-color:#2BBDFE;">
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
                                                    $subject = "Thanks for Subscribing us - Oh Yamal";
                                                    $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
                                                    $sender = "From: Oh Yamal";
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
                                <input type="submit" class="btn confirmsubscribe" value="SUBSCRIBE" name="subsc" style="color:#fff;font-weight:500;margin-top: 5px;width:232px;font-size: 20px;background-color:#2BBDFE;">
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
                                                    $subject = "Thanks for Subscribing us - Oh Yamal";
                                                    $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
                                                    $sender = "From: Oh Yamal";
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

                                <input type="submit" class="btn confirmsubscribe" value="SUBSCRIBE" name="subsc1" style="color:#fff;font-weight:500;margin-top: 5px;width:232px;font-size: 20px;background-color:#2BBDFE;">
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
                                                    $subject = "Thanks for Subscribing us - Oh Yamal";
                                                    $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
                                                    $sender = "From: Oh Yamal";
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