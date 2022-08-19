<?php 
    ob_start();
    session_start();
    $pageTitle = 'Classifieds';
    // $noNavbar = '';
    include 'init.php'; ?>

    <style>
        .hero{
                background-image: url('layout/images/banner.png');
                border-radius: 10px;
                /* width: 100%; */
                height: 260px;
                margin-left: 2%;
        }
        .onehero{background-image: linear-gradient(to right, rgba(33,34,35,.6), rgba(40, 40,40,.6));
            height: 100%;
          /* width: 100%; */
          padding-top: 30px;
          border-radius: 10px;}
        /* .hero{background-image: linear-gradient(to right, rgba(33,34,35,.6), rgba(40, 40,40,.6));
                border-radius: 10px;
                position: absolute;
                left: 15%;
                top: 35%;
                width: 70%;
                height: 35%;
                padding-top: 4em;
        } */
        .herorestel{background-image: linear-gradient(to right, rgba(33,34,35,.6), rgba(40, 40,40,.6));
                border-radius: 10px;
                position: absolute;
                left: 15%;
                width: 70%;
                height: 45%;
                padding-top: 4em;
                /* margin-top: 20px; */
        }
        .herorestablet{background-image: linear-gradient(to right, rgba(33,34,35,.6), rgba(40, 40,40,.6));
                border-radius: 10px;
                position: absolute;
                left: 15%;
                width: 70%;
                height: 65%;
                padding-top: 4em;
                margin-top: 20px;
        }
        h1.h1_mysearch {
            font-size: 32px;
            text-align: center;
            text-shadow: 0 2px 4px rgb(0 0 0 / 35%);
            color: #fff;
            margin-bottom: 16px;
        }
    </style>
    
    <div class="d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
        <section class="section1">
        <div class="container">
                <div class="row content">
                    <div class="col-md-12 ">
                        <div class="hero">
                            <div class="container onehero">
                                <div class="row">
                                    <div class="col-lg-12"><h1 class="h1_mysearch">The UAE's leading marketplace to buy and sell cars</h1></div>
                                    <div class="col-lg-12">
                                        <div class="container" style="margin-top: 3%;">
                                            <div class="row">
                                            <div class="col-lg-12">
                                                <input type="text"  id="myInput" autocomplete="off" class="as-input"  placeholder="Enter Keywords ..." style="width:600px; height: 40px; margin-left: 15%; border: none; border-radius: 5px;">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <img class=" img-fluid img-fluid mySlides" src="layout/images/banner.png" style="width: 100%; height: 400px;"> -->
                    </div>
                </div>
        </div>      
        </section>        
    </div>  

    <div class="d-block d-sm-none">
        <section class="section1">
        <div class="container">
                <div class="row content">
                    <div class="col-md-12 ">
                        <div class="hero">
                            <div class="container onehero">
                                <div class="row">
                                    <div class="col-lg-12"><h1 class="h1_mysearch">The UAE's leading marketplace to buy and sell cars</h1></div>
                                    <div class="col-lg-12">
                                        <div class="container" style="margin-top: 3%;">
                                            <div class="row">
                                            <div class="col-lg-12">
                                                <input type="text"  id="myInput" autocomplete="off" class="as-input"  placeholder="Enter Keywords ..." style="height: 40px; border: none; border-radius: 5px;width: 100%;">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <img class=" img-fluid img-fluid mySlides" src="layout/images/banner.png" style="width: 100%; height: 400px;"> -->
                    </div>
                </div>
        </div>      
        </section>  
    </div>

    <div class="d-none d-md-block d-lg-none">
        <section class="section1">
        <div class="container">
                <div class="row content">
                    <div class="col-md-12 ">
                        <div class="hero">
                            <div class="container onehero">
                                <div class="row">
                                    <div class="col-lg-12"><h1 class="h1_mysearch">The UAE's leading marketplace to buy and sell cars</h1></div>
                                    <div class="col-lg-12">
                                        <div class="container" style="margin-top: 3%;">
                                            <div class="row">
                                            <div class="col-lg-12">
                                                <input type="text"  id="myInput" autocomplete="off" class="as-input"  placeholder="Enter Keywords ..." style="height: 40px; border: none; border-radius: 5px;width: 100%;">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <img class=" img-fluid img-fluid mySlides" src="layout/images/banner.png" style="width: 100%; height: 300px;"> -->
                    </div>
                </div>
        </div>      
        </section>  
    </div> 

                        <div class="container"><h3 class="h1-memberindex">&nbsp; <p> Featured Listings :<ion-icon name="arrow-forward-outline" style="float: right;align-items: center;cursor:pointer;"></ion-icon></p></h3></div>

                        <div class="container">
                          <div class="row">
                                    <div class="carousel clearfix">
                                        <div class="carousel-view clearfix">
                                            <?php
                                                $allItems = getAllFrom('*', 'classifieds', "where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typeclassifieds like '%furclss%' OR typeclassifieds like '%homefurb%' OR typeclassifieds like '%grdnfur%' OR typeclassifieds like '%lightfur%' OR typeclassifieds like '%absrtfur%' OR typeclassifieds like '%currfur%' OR typeclassifieds like '%tolsffur%'", '', 'Id DESC', '');
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
                                                            echo  "<a href='infofurniture.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'>
                                                            <img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                  echo wathmark_img();
                                                  echo "</a>";
                                                        }   
                                                        echo '<a href="infofurniture.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class="natitl">' . $item['Name'] . '</div></a>';
                                                        echo '<div class="row locdstyl" >';
                                                            echo '<div class="col-lg-12 locstyl"><ion-icon name="location-outline"></ion-icon>' . $item['location'] . '</div>';
                                                        echo '</div>';
                                                        echo '<div class="container">';
                                                        echo '<hr>';                                              
                                                        echo '<a href="infofurniture.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class=" fw-bold mb-1 pricecardindex">' . number_format($item['Price']) . ' AED</div></a>';
                                                        echo '</div>';
                                                        echo '</div>';
                                                    echo '</div>';
                                                }
                                            ?>
                                            <?php
                                              $allItems = getAllFrom('*', 'classifieds', "where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typeclassifieds like '%Cyclingg%' OR typeclassifieds like '%exercisesp%' OR typeclassifieds like '%watrsp%' OR typeclassifieds like '%camgsp%' OR typeclassifieds like '%Golff%' OR typeclassifieds like '%indrsp%' OR typeclassifieds like '%basktsp%' OR typeclassifieds like '%tenisprt%' OR typeclassifieds like '%wintersprt%' OR typeclassifieds like '%sportsequ%'", '', 'Id DESC', '');
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
                                                          echo  "<a href='infoclasselec.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                          echo wathmark_img();
                                                          echo "</a>";
                                                      }   
                                                      echo '<a href="infoclasselec.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class="natitl">' . $item['Name'] . '</div></a>';
                                                      echo '<div class="row locdstyl" >';
                                                          echo '<div class="col-lg-12 locstyl"><ion-icon name="location-outline"></ion-icon>' . $item['location'] . '</div>';
                                                      echo '</div>';
                                                      echo '<div class="container">';
                                                      echo '<hr>';                                              
                                                      echo '<a href="infoclasselec.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class=" fw-bold mb-1 pricecardindex">' . number_format($item['Price']) . ' AED</div></a>';
                                                      echo '</div>';
                                                      echo '</div>';
                                                  echo '</div>';
                                              }
                                            ?>
                                            <?php
                                              $allItems = getAllFrom('*', 'classifieds', "where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typeclassifieds like '%MobPhone%' OR typeclassifieds like '%Tablls%' OR typeclassifieds like '%MPTAccess%' OR typeclassifieds like '%MPTfin%'", '', 'Id DESC', '');
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
                                                                  echo  "<a href='infomobphontab.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                  echo wathmark_img();
                                                                  echo "</a>";
                                                              }                                  
                                                              // if(empty($item['Image'])){ echo "<img class='card-img-top' src='admin/Update_Imageclassifieds/uploads/avatars/1.jpg' alt='avatar' />";}
                                                              // else{  echo  "<img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $item['Image'] ."' alt='avtar' />";}
                                                              echo '<a href="infomobphontab.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class="natitl">' . $item['Name'] . '</div></a>';
                                                              echo '<div class="row locdstyl" >';
                                                                  echo '<div class="col-lg-12 locstyl"><ion-icon name="location-outline"></ion-icon>' . $item['location'] . '</div>';
                                                              echo '</div>';
                                                              echo '<div class="container">';
                                                              echo '<hr>';                                              
                                                              echo '<a href="infomobphontab.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class=" fw-bold mb-1 pricecardindex">' . number_format($item['Price']) . ' AED</div></a>';
                                                              echo '</div>';
                                                      echo '</div>';
                                                  echo '</div>';
                                              }
                                            ?>
                                            <?php
                                              $allItems = getAllFrom('*', 'classifieds', "where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typeclassifieds like '%Comscll%' OR typeclassifieds like '%comjl%' OR typeclassifieds like '%accsbg%' OR typeclassifieds like '%ntrko%' OR typeclassifieds like '%softcm%' OR typeclassifieds like '%monitcm%'", '', 'Id DESC', '');
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
                                                                  echo  "<a href='infoclasselec.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                  echo wathmark_img();
                                                                  echo "</a>";
                                                              }                                  
                                                              echo '<a href="infoclasselec.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class="natitl">' . $item['Name'] . '</div></a>';
                                                              echo '<div class="row locdstyl" >';
                                                                  echo '<div class="col-lg-12 locstyl"><ion-icon name="location-outline"></ion-icon>' . $item['location'] . '</div>';
                                                              echo '</div>';
                                                              echo '<div class="container">';
                                                              echo '<hr>';                                              
                                                              echo '<a href="infoclasselec.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class=" fw-bold mb-1 pricecardindex">' . number_format($item['Price']) . ' AED</div></a>';
                                                              echo '</div>';
                                                      echo '</div>';
                                                  echo '</div>';
                                              }
                                            ?>
                                            <?php
                                              $allItems = getAllFrom('*', 'classifieds', "where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typeclassifieds like '%larhomcl%' OR typeclassifieds like '%smlkhcl%' OR typeclassifieds like '%outhomcl%' OR typeclassifieds like '%smbrhomcl%' OR typeclassifieds like '%ironshomcl%' OR typeclassifieds like '%vacchomcl%' OR typeclassifieds like '%otherlhomcl%'", '', 'Id DESC', '');
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
                                                                  echo  "<a href='infoclasselec.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                  echo wathmark_img();
                                                                  echo "</a>";
                                                              }                                  
                                                              echo '<a href="infoclasselec.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class="natitl">' . $item['Name'] . '</div></a>';
                                                              echo '<div class="row locdstyl" >';
                                                                  echo '<div class="col-lg-12 locstyl"><ion-icon name="location-outline"></ion-icon>' . $item['location'] . '</div>';
                                                              echo '</div>';
                                                              echo '<div class="container">';
                                                              echo '<hr>';                                              
                                                              echo '<a href="infoclasselec.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class=" fw-bold mb-1 pricecardindex">' . number_format($item['Price']) . ' AED</div></a>';
                                                              echo '</div>';
                                                      echo '</div>';
                                                  echo '</div>';
                                              }
                                            ?>
                                            <?php
                                              $allItems = getAllFrom('*', 'classifieds', "where Approve = 1 AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH) AND typeclassifieds like '%Homee%' OR typeclassifieds like '%Televisionss%' OR typeclassifieds like '%Theaterr%' OR typeclassifieds like '%Electronicc%' OR typeclassifieds like '%Gadgetss%' OR typeclassifieds like '%Carr%' OR typeclassifieds like '%mp%' OR typeclassifieds like '%Cablee%' OR typeclassifieds like '%hea%' OR typeclassifieds like '%sm%' OR typeclassifieds like '%wea%' OR typeclassifieds like '%electronicsclass%'", '', 'Id DESC', '');
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
                                                                  echo  "<a href='infoclasselec.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'><img class='card-img-top imgindexcard' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                                  echo wathmark_img();
                                                                  echo "</a>";
                                                              }                                  
                                                              echo '<a href="infoclasselec.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class="natitl">' . $item['Name'] . '</div></a>';
                                                              echo '<div class="row locdstyl" >';
                                                                  echo '<div class="col-lg-12 locstyl"><ion-icon name="location-outline"></ion-icon>' . $item['location'] . '</div>';
                                                              echo '</div>';
                                                              echo '<div class="container">';
                                                              echo '<hr>';                                              
                                                              echo '<a href="infoclasselec.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class=" fw-bold mb-1 pricecardindex">' . number_format($item['Price']) . ' AED</div></a>';
                                                              echo '</div>';
                                                      echo '</div>';
                                                  echo '</div>';
                                              }
                                            ?>
                                        </div>
                                    </div>
                          </div>      
                        </div>


                        <div class="container">
                            <div class="row" style="margin-top: 40px;">
                                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12 stylewith" style="margin-bottom:20px;">
                                    <div class="card h-100 stylecardindexx">
                                        <a href="allfurngar.php"> <h3 class="h3all">FURNITURE, HOME & GARDEN</h3></a>
                                        <strong class="strall"><a href="allfurngar.php" style="color:black;"><?php echo countItemsfurn('typeclassifieds', 'classifieds', '%furclss%', '%homefurb%', '%grdnfur%', '%lightfur%', '%absrtfur%', '%currfur%', '%tolsffur%'); ?></a></strong>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12 stylewith" style="margin-bottom:20px;">
                                    <div class="card h-100 stylecardindexx">
                                    <a href="sportlink.php"> <h3 class="h3all">SPORTS EQUIPMENT</h3></a>
                                        <strong class="strall"><a href="sportlink.php" style="color:black;"><?php echo countItemssprt('typeclassifieds', 'classifieds', '%Cyclingg%', '%exercisesp%', '%watrsp%', '%camgsp%', '%Golff%', '%indrsp%', '%basktsp%', '%tenisprt%', '%wintersprt%', '%sportsequ%'); ?></a></strong>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12 stylewith" style="margin-bottom:20px;">
                                    <div class="card h-100 stylecardindexx">
                                    <a href="allmob.php"> <h3 class="h3all">MOBILE PHONES & TABLETS</h3></a>
                                        <strong class="strall"><a href="allmob.php" style="color:black;"><?php echo countItemsmbl('typeclassifieds', 'classifieds', '%MobPhone%', '%Tablls%', '%MPTAccess%', '%MPTfin%'); ?></a></strong>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12 stylewith" style="margin-bottom:20px;">
                                    <div class="card h-100 stylecardindexx">
                                    <a href="compnetlink.php"> <h3 class="h3all">COMPUTERS & NETWORKING</h3></a>
                                        <strong class="strall"><a href="compnetlink.php" style="color:black;"><?php echo countItemscomp('typeclassifieds', 'classifieds', '%Comscll%', '%comjl%', '%accsbg%', '%ntrko%', '%softcm%', '%monitcm%'); ?></a></strong>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12 stylewith" style="margin-bottom:20px;">
                                    <div class="card h-100 stylecardindexx">
                                    <a href="allhomeapp.php"> <h3 class="h3all">HOME APPLIANCES</h3></a>
                                        <strong class="strall"><a href="allhomeapp.php" style="color:black;"><?php echo countItemshome('typeclassifieds', 'classifieds', '%larhomcl%', '%smlkhcl%', '%outhomcl%', '%smbrhomcl%', '%ironshomcl%', '%vacchomcl%', '%otherlhomcl%'); ?></a></strong>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12 stylewith" style="margin-bottom:20px;">
                                    <div class="card h-100 stylecardindexx">
                                    <a href="electronicslink.php"> <h3 class="h3all">ELECTRONICS</h3></a>
                                        <strong class="strall"><a href="electronicslink.php" style="color:black;"><?php echo countItemselect('typeclassifieds', 'classifieds', '%Homee%', '%Televisionss%', '%Theaterr%', '%Electronicc%', '%Gadgetss%', '%Carr%', '%mp%', '%Cablee%', '%hea%', '%sm%', '%wea%', '%electronicsclass%'); ?></a></strong>
                                    </div>
                                </div>
                            </div>      
                        </div> 

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
                    echo navone();
                ?>
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