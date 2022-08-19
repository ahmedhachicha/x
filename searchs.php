<?php 
    ob_start();
    session_start();
    $Navbar = '';
    $pageTitle = 'Cars';
    include 'init.php';
    $do = isset($_GET['do']) ? $_GET['do'] : '';
    if($do == 'searchs'){
        ?>
            <div class="container"><h3 class="h1-memberindex">&nbsp; <p> Popular in Cars For Sale : <a href="used-cars.php"><ion-icon name="arrow-forward-outline" style="float: right;align-items: center;cursor:pointer;"></ion-icon></a></p></h3>
                                        <svg class="Rectangle_94">
                                          <rect id="Rectangle_94" rx="0" ry="0" x="0" y="0" width="109" height="9">
                                          </rect>
                                        </svg>
            </div>
              <div class="container">
              <div class="row">
                        <div class="carousel clearfix">
                            <div class="carousel-view clearfix">
                              <?php
                              if($_SERVER['REQUEST_METHOD'] == 'POST')
                              {
                                                        $locatecars = $_POST['locationcars'];
                                                        $make = $_POST['make'];
                                                        $bodytypecars = $_POST['bodytypecars'];
                                                        $Exteriorcolor = $_POST['Exteriorcolor'];
                                $stmt = $con->prepare("SELECT * FROM products where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locatecars = '$locatecars' AND make like '%$make%' AND (bodytypecars like '%$bodytypecars%' OR Exteriorcolor like '%$Exteriorcolor%')");
                                $stmt->execute();
                                $allItems1 = $stmt->fetchAll(); 
                                if(!empty($allItems1)){
                                    foreach($allItems1 as $item)
                                    {
                                        echo '<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 stylewith" id="myList">';
                                            echo '<div class="card h-100 stylecardindex">';
                                                $i = '';
                                                $res = $item['Image'];
                                                $res = explode(" ", $res);
                                                $count = count($res) - 1;   
                                                $count =  1;                           
                                                for($i = 0; $i<$count; ++$i)
                                                {
                                                    echo  "<a href='info.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                    echo wathmark_img();
                                                    echo "</a>";
                                                }                         
                                                    echo '<a href="info.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class="natitl">' . $item['Name'] . '</div></a>';
                                                    echo '<div class="row locdstyl" >';
                                                        echo '<div class="col-lg-12 locstyl"><ion-icon name="location-outline"></ion-icon>' . $item['Location'] . '</div>';
                                                    echo '</div>';
                                                    echo '<div class="container">';
                                                    echo '<hr>';                                              
                                                    echo '<a href="info.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class=" fw-bold mb-1 pricecardindex">' . number_format($item['Price']) . ' AED</div></a>';
                                                    echo '</div>';
                                            echo '</div>';
                                        echo '</div>';
                                    }
                                }  
                                else{
                                  echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                                }
                              }
                              ?>
                            </div>
                        </div>
              </div>  
            </div>
        <?php 
    }
    if($do == 'searchs1'){
      ?>
          <div class="container"><h3 class="h1-memberindex">&nbsp; <p> Popular in Cars For Sale : <a href="used-cars.php"><ion-icon name="arrow-forward-outline" style="float: right;align-items: center;cursor:pointer;"></ion-icon></a></p></h3>
                                      <svg class="Rectangle_94">
                                        <rect id="Rectangle_94" rx="0" ry="0" x="0" y="0" width="109" height="9">
                                        </rect>
                                      </svg>
          </div>
            <div class="container">
            <div class="row">
                      <div class="carousel clearfix">
                          <div class="carousel-view clearfix">
                            <?php
                            if($_SERVER['REQUEST_METHOD'] == 'POST')
                            {
                                                      $locatecars = $_POST['locationcars'];
                                                      $bodytypecars = $_POST['bodytypecars'];
                                                      $Exteriorcolor = $_POST['Exteriorcolor'];
                              $stmt = $con->prepare("SELECT * FROM products where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND locatecars = '$locatecars' AND (bodytypecars like '%$bodytypecars%' OR Exteriorcolor like '%$Exteriorcolor%')");
                              $stmt->execute();
                              $allItems1 = $stmt->fetchAll(); 
                              if(!empty($allItems1)){
                                  foreach($allItems1 as $item)
                                  {
                                      echo '<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 stylewith" id="myList">';
                                          echo '<div class="card h-100 stylecardindex">';
                                              $i = '';
                                              $res = $item['Image'];
                                              $res = explode(" ", $res);
                                              $count = count($res) - 1;   
                                              $count =  1;                           
                                              for($i = 0; $i<$count; ++$i)
                                              {
                                                  echo  "<a href='info.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                  echo wathmark_img();
                                                  echo "</a>";
                                              }                         
                                                  echo '<a href="info.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class="natitl">' . $item['Name'] . '</div></a>';
                                                  echo '<div class="row locdstyl" >';
                                                      echo '<div class="col-lg-12 locstyl"><ion-icon name="location-outline"></ion-icon>' . $item['Location'] . '</div>';
                                                  echo '</div>';
                                                  echo '<div class="container">';
                                                  echo '<hr>';                                              
                                                  echo '<a href="info.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class=" fw-bold mb-1 pricecardindex">' . number_format($item['Price']) . ' AED</div></a>';
                                                  echo '</div>';
                                          echo '</div>';
                                      echo '</div>';
                                  }
                              }  
                              else{
                                echo '<h2 class="h2_resultsearch">No Results Found.</h2>';
                              }
                            }
                            ?>
                          </div>
                      </div>
            </div>  
          </div>
      <?php 
  }
    if($do == 'search'){
        ?>
            <div class="container"><h3 class="h1-memberindex">&nbsp; <p> Popular in New Cars for Sale : <a href="used-cars.php"><ion-icon name="arrow-forward-outline" style="float: right;align-items: center;cursor:pointer;"></ion-icon></a></p></h3>
                                        <svg class="Rectangle_94">
                                          <rect id="Rectangle_94" rx="0" ry="0" x="0" y="0" width="109" height="9">
                                          </rect>
                                        </svg>
          </div>
              <div class="container">
              <div class="row">
                        <div class="carousel clearfix">
                            <div class="carousel-view clearfix">
                              <?php
                                $allItems1 = getAllFrom('*', 'products', "where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND Status = 'New' AND typecars = 'For Sale'", '', 'Id DESC', '');
                                  foreach($allItems1 as $item)
                                  {
                                      echo '<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 stylewith" id="myList">';
                                          echo '<div class="card h-100 stylecardindex">';
                                              $i = '';
                                              $res = $item['Image'];
                                              $res = explode(" ", $res);
                                              $count = count($res) - 1;   
                                              $count =  1;                           
                                              for($i = 0; $i<$count; ++$i)
                                              {
                                                  echo  "<a href='info.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                  echo wathmark_img();
                                                  echo "</a>";
                                              }                              
                                                  echo '<a href="info.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class="natitl">' . $item['Name'] . '</div></a>';
                                                  echo '<div class="row locdstyl" >';
                                                      echo '<div class="col-lg-12 locstyl"><ion-icon name="location-outline"></ion-icon>' . $item['Location'] . '</div>';
                                                  echo '</div>';
                                                  echo '<div class="container">';
                                                  echo '<hr>';                                              
                                                  echo '<a href="info.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class=" fw-bold mb-1 pricecardindex">' . number_format($item['Price']) . ' AED</div></a>';
                                                echo '</div>';
                                          echo '</div>';
                                      echo '</div>';
                                  }
                              ?>
                            </div>
                        </div>
              </div>  
                
            </div>
        <?php  
    }
    if($do == 'one'){
        ?>
            <div class="container"><h3 class="h1-memberindex">&nbsp; <p> Popular in Used Cars for Sale : <a href="used-cars.php"><ion-icon name="arrow-forward-outline" style="float: right;align-items: center;cursor:pointer;"></ion-icon></a></p></h3>
                                        <svg class="Rectangle_94">
                                          <rect id="Rectangle_94" rx="0" ry="0" x="0" y="0" width="109" height="9">
                                          </rect>
                                        </svg>
            </div>
              <div class="container" id="used">
              <div class="row">
                        <div class="carousel clearfix">
                            <div class="carousel-view clearfix">
                              <?php
                                $allItems = getAllFrom('*', 'products', "where Approve = 1 AND Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND status = 'Used' AND typecars = 'For Sale'", '', 'Id DESC', '');
                                  foreach($allItems as $item)
                                  {
                                      echo '<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 stylewith" id="myList">';
                                          echo '<div class="card h-100 stylecardindex">';
                                              $i = '';
                                              $res = $item['Image'];
                                              $res = explode(" ", $res);
                                              $count = count($res) - 1;   
                                              $count =  1;                           
                                              for($i = 0; $i<$count; ++$i)
                                              {
                                                  echo  "<a href='info.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                  echo wathmark_img();
                                                  echo "</a>";
                                              }                         
                                                  echo '<a href="info.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class="natitl">' . $item['Name'] . '</div></a>';
                                                  echo '<div class="row locdstyl" >';
                                                      echo '<div class="col-lg-12 locstyl"><ion-icon name="location-outline"></ion-icon>' . $item['Location'] . '</div>';
                                                  echo '</div>';
                                                  echo '<div class="container">';
                                                  echo '<hr>';                                              
                                                  echo '<a href="info.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class=" fw-bold mb-1 pricecardindex">' . number_format($item['Price']) . ' AED</div></a>';
                                                  echo '</div>';
                                          echo '</div>';
                                      echo '</div>';
                                  }
                              ?>
                            </div>
                        </div>
              </div>  
            </div>
        <?php 
    }
    ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script>
            $('.carousel-view').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
                }
            ]
            });
        </script>	
    <?php

    include 'includes/templates/footer.php'; 
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