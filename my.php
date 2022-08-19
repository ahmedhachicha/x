<?php 
    ob_start();
    session_start();
    $pageTitle = 'My Ads';
    include 'init.php';

    if(isset($_SESSION['uid'])){
        $getUser = $con->prepare("SELECT * FROM users WHERE Name = ?");
        $getUser->execute(array($sessionUser));
        $info = $getUser->fetch();

        $userid = $info['user_id'];
        $count = $getUser->rowCount();
        $do = isset($_GET['do']) ? $_GET['do'] : 'Add';
        if($do == 'Add'){
            if($count > 0){
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
                                <div class="col divone"> <a href="my.php" style="color: #0093D5;">My Ads</a> </div>
                                <div class="col divtwo"> <a href="myfavorite.php" style="color: black;">My Favorites</a> </div>
                                <div class="col divtwo"> <a href="mysearch.php" style="color: black;">My Searches</a> </div>
                                <div class="col divtwo"> <a href="profile.php" style="color: black;">Change Avatar</a> </div>                          
                        </div>
                    </div>
                </div>

                <div class="d-none d-md-block d-lg-none">
                    <div class="container">
                        <div class="row rowmy">
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="editprofile.php?do=Edit&userid=<?php echo $_SESSION['uid']?>" style="color: black;">My Profile</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divone"> <a href="my.php" style="color: black;color: #0093D5;">My Ads</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="myfavorite.php" style="color: black;">My Favorites</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="mysearch.php" style="color: black;">My Searches</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="profile.php" style="color: black;">Change Avatar</a> </div>                            
                        </div>
                    </div>
                </div>

                <div class="d-block d-sm-none">
                    <div class="container">
                        <div class="row rowmy">
                            <div class="container">
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="editprofile.php?do=Edit&userid=<?php echo $_SESSION['uid']?>" style="color: black;">My Profile</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divone"> <a href="my.php" style="color: black;color: #0093D5;">My Ads</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="myfavorite.php" style="color: black;">My Favorites</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="mysearch.php" style="color: black;">My Searches</a> </div>
                                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="profile.php" style="color: black;">Change Avatar</a> </div>                            
                            </div>
                        </div>
                    </div>
                </div>

                <div id="my-ads" class="my-ads block">
                    <div class="container ads infoads">
                        <div class="panel panel-primary">
                            <div class="panle-heading"><ion-icon name="newspaper-outline"></ion-icon>My Ads Cars</div>
                            <div class="panel-body">
                                    <div class="row">
                                                <?php
                                                $myItems = getAllFrom("*", "products", "where user_Id = $userid AND  Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", "", "Id");
                                                if(!empty($myItems))
                                                {
                                                    ?>
                                                        <div class="carousel clearfix">
                                                            <div class="carousel-view clearfix">
                                                    <?php
                                                    // echo '<div class="row marginads">';
                                                        foreach(getItems('products', 'user_Id', $userid, 1) as $item)
                                                        { 
                                                            echo '<div class="col-lg-3 col-md-6 col-sm-4 col-xs-4">';
                                                                echo '<div class="thumbnail item-box">';
                                                                    echo '<span class="price-tagg">$' .number_format($item['Price']) .'</span>'; 

                                                                    echo '<div>';
                                                                    $i = '';
                                                                    $res = $item['Image'];
                                                                    $res = explode(" ", $res);
                                                                    $count = count($res) - 1;   
                                                                    $count =  1;                           
                                                                    for($i = 0; $i<$count; ++$i)
                                                                    {
                                                                        echo  "<a href='info.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'>
                                                                        <img class='imgmyads' src='admin/Update_Image/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                                    }                        
                                                                    echo '</div>'; 
                                                                    echo '<div class="caption">';
                                                                                echo '<h3><a href="info.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;">' .$item['Name'] .'</a></h3>';
                                                                                echo '<p class="dateitli">On ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p>';
                                                                    echo '</div>';
                                                                    echo '<a style="margin-left: 10px; margin-bottom:10px; margin-top:10px;" class="btn btn-danger" href="my.php?do=Delete&itemid=' . $item["Id"] . '">Delete Cars</a>';
                                                                echo '</div>';
                                                            echo '</div>';
                                                        }
                                                    // echo '</div>';
                                                    ?>
                                                            </div>
                                                        </div>
                                                    <?php
                                                }else{
                                                    echo '<div class="container"><div class="alert alert-danger">Sorry There\' No Ads Cars To Show, Create <a href="adcars.php">New Ads Cars</a></div></div>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="my-ads" class="my-ads block">
                    <div class="container ads infoads">
                        <div class="panel panel-primary">
                            <div class="panle-heading"><ion-icon name="newspaper-outline"></ion-icon>My Ads Motorcycles</div>
                            <div class="panel-body">
                                <div class="row">
                                    <?php
                                    $myItems = getAllFrom("*", "motorcycles", "where user_Id = $userid AND  Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", "", "Id");
                                    if(!empty($myItems))
                                    {
                                        ?>
                                            <div class="carousel clearfix">
                                                <div class="carousel-view clearfix">
                                        <?php
                                            foreach(getItems('motorcycles', 'user_Id', $userid, 1) as $item)
                                            { 
                                                echo '<div class="col-lg-3 col-md-6 col-sm-4 col-xs-4">';
                                                    echo '<div class="thumbnail item-box">';
                                                        // if($item['Approve'] == 1) {echo '<span class="approve-status">Waiting Approval</span>';}
                                                        echo '<span class="price-tagg">$' .number_format($item['Price']) .'</span>';  
                                                        echo '<div>';
                                                        $i = '';
                                                        $res = $item['Image'];
                                                        $res = explode(" ", $res);
                                                        $count = count($res) - 1;   
                                                        $count =  1;                           
                                                        for($i = 0; $i<$count; ++$i)
                                                        {
                                                            echo  "<a href='infomotor.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'>
                                                            <img class='imgmyads' src='admin/Update_Imagemotor/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                        }                        
                                                        echo '</div>'; 
                                                        // echo '<div>';
                                                        //     if(empty($item['Image'])){ echo "<img class='imgmyads' src='admin/Update_Imagemotor/uploads/avatars/shoppingcart.jpg' alt='avatar' />";}
                                                        //     else{  echo  "<img class='imgmyads' src='admin/Update_Imagemotor/uploads/avatars/" . $item['Image'] ."' alt='avtar' />";}
                                                        // echo '</div>';
                                                        echo '<div class="caption">';
                                                                    // echo '<h3><a href="items.php?itemid=' . $item['Id'] .'">' .$item['Name'] .'</a></h3>';
                                                                    echo '<h3><a href="infomotor.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;">' .$item['Name'] .'</a></h3>';
                                                                    echo '<p class="dateitli">On ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p>';
                                                        echo '</div>';
                                                        // echo "<a style='margin-top: 5px;margin-left: 10px;margin-bottom: 5px;' class='btn btn-success success' href='#' ><ion-icon name='create-outline'></ion-icon>Edit Motorcycles</a>";
                                                        // echo '<a style="margin-left: 10px;margin-bottom: 5px;" class="btn btn-danger confirm" href="#">Delete Motorcycles</a>';
                                                        // echo "<a style='margin: 10px;' href='#' class='btn btn-secondary button-update'><ion-icon name='images-outline'></ion-icon> Update image for Motorcycles </a>";

                                                        echo '<a style="margin-left: 10px; margin-bottom:10px; margin-top:10px;" class="btn btn-danger" href="my.php?do=Delete1&itemid=' . $item["Id"] . '">Delete Motorcycles</a>';
                                                    echo '</div>';
                                                echo '</div>';
                                            }
                                        ?>
                                                </div>
                                            </div>
                                        <?php
                                    }else{
                                        echo '<div class="container"><div class="alert alert-danger">Sorry There\' No Ads Motorcycles To Show, Create <a href="motorcycles.php">New Ads Motorcycles</a></div></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="my-ads" class="my-ads block">
                    <div class="container ads infoads">
                        <div class="panel panel-primary">
                            <div class="panle-heading"><ion-icon name="newspaper-outline"></ion-icon>My Ads Auto Accessories & Parts </div>
                            <div class="panel-body">
                                <div class="row">
                                    <?php
                                    $myItems = getAllFrom("*", "autoaccparts", "where user_Id = $userid AND  Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", "", "Id");
                                    if(!empty($myItems))
                                    {
                                        ?>
                                            <div class="carousel clearfix">
                                                <div class="carousel-view clearfix">
                                        <?php
                                            foreach(getItems('autoaccparts', 'user_Id', $userid, 1) as $item)
                                            { 
                                                echo '<div class="col-lg-3 col-md-6 col-sm-4 col-xs-4">';
                                                    echo '<div class="thumbnail item-box">';
                                                        // if($item['Approve'] == 1) {echo '<span class="approve-status">Waiting Approval</span>';}
                                                        echo '<span class="price-tagg">$' .number_format($item['Price']) .'</span>';  
                                                        echo '<div>';
                                                        $i = '';
                                                        $res = $item['Image'];
                                                        $res = explode(" ", $res);
                                                        $count = count($res) - 1;   
                                                        $count =  1;                           
                                                        for($i = 0; $i<$count; ++$i)
                                                        {
                                                            echo  "<a href='infoparts.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'>
                                                            <img class='imgmyads' src='admin/Update_Imageparts/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                        }                        
                                                        echo '</div>'; 
                                                        // echo '<div>';
                                                        //     if(empty($item['Image'])){ echo "<img class='imgmyads' src='admin/Update_Imageparts/uploads/avatars/shoppingcart.jpg' alt='avatar' />";}
                                                        //     else{  echo  "<img class='imgmyads' src='admin/Update_Imageparts/uploads/avatars/" . $item['Image'] ."' alt='avtar' />";}
                                                        // echo '</div>';
                                                        echo '<div class="caption">';
                                                                    // echo '<h3><a href="items.php?itemid=' . $item['Id'] .'">' .$item['Name'] .'</a></h3>';
                                                                    echo '<h3><a href="infoparts.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;">' .$item['Name'] .'</a></h3>';
                                                                    echo '<p class="dateitli">On ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p>';
                                                        echo '</div>';
                                                        // echo "<a style='margin-top: 5px;margin-right: 10px;margin-left: 10px;margin-bottom: 5px;' class='btn btn-success success' href='#' ><ion-icon name='create-outline'></ion-icon>Edit Auto Accessories & Parts </a>";
                                                        // echo '<a style="margin-left: 10px;margin-right: 10px;margin-bottom: 5px;" class="btn btn-danger confirm" href="#">Delete Auto Accessories & Parts </a>';
                                                        // echo "<a style='margin: 10px;' href='#' class='btn btn-secondary button-update'><ion-icon name='images-outline'></ion-icon> Update image for Auto Accessories & Parts  </a>";

                                                        echo '<a style="margin-left: 10px; margin-bottom:10px; margin-top:10px;" class="btn btn-danger" href="my.php?do=Delete2&itemid=' . $item["Id"] . '">Delete Auto Accessories & Parts</a>';
                                                    echo '</div>';
                                                echo '</div>';
                                            }
                                            ?>
                                            </div>
                                        </div>
                                    <?php
                                    }else{
                                        echo '<div class="container"><div class="alert alert-danger">Sorry There\' No Ads Auto Accessories & Parts  To Show, Create <a href="autoAccparts.php">New Ads Auto Accessories & Parts </a></div></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="my-ads" class="my-ads block">
                    <div class="container ads infoads">
                        <div class="panel panel-primary">
                            <div class="panle-heading"><ion-icon name="newspaper-outline"></ion-icon>My Ads Heavy Vehicles  </div>
                            <div class="panel-body">
                                <div class="row">
                                    <?php
                                    $myItems = getAllFrom("*", "heavyvzhicles", "where user_Id = $userid AND  Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", "", "Id");
                                    if(!empty($myItems))
                                    {
                                        ?>
                                            <div class="carousel clearfix">
                                                <div class="carousel-view clearfix">
                                        <?php
                                            foreach(getItems('heavyvzhicles', 'user_Id', $userid, 1) as $item)
                                            { 
                                                echo '<div class="col-lg-3 col-md-6 col-sm-4 col-xs-4">';
                                                    echo '<div class="thumbnail item-box">';
                                                        echo '<span class="price-tagg">$' .number_format($item['Price']) .'</span>'; 
                                                        echo '<div>';
                                                        $i = '';
                                                        $res = $item['Image'];
                                                        $res = explode(" ", $res);
                                                        $count = count($res) - 1;   
                                                        $count =  1;                           
                                                        for($i = 0; $i<$count; ++$i)
                                                        {
                                                            echo  "<a href='infoheavy.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'>
                                                            <img class='imgmyads' src='admin/Update_Imageheavry/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                        }                        
                                                        echo '</div>';  
                                                        // echo '<div>';
                                                        //     if(empty($item['Image'])){ echo "<img class='imgmyads' src='admin/Update_Imageheavry/uploads/avatars/shoppingcart.jpg' alt='avatar' />";}
                                                        //     else{  echo  "<img class='imgmyads' src='admin/Update_Imageheavry/uploads/avatars/" . $item['Image'] ."' alt='avtar' />";}
                                                        // echo '</div>';
                                                        echo '<div class="caption">';
                                                                    echo '<h3><a href="infoheavy.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;">' .$item['Name'] .'</a></h3>';
                                                                    echo '<p class="dateitli">On ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p>';
                                                        echo '</div>';
                                                        // echo "<a style='margin-top: 5px;margin-right: 10px;margin-left: 10px;margin-bottom: 5px;' class='btn btn-success success' href='#' ><ion-icon name='create-outline'></ion-icon>Edit Heavy Vehicles  </a>";
                                                        // echo '<a style="margin-left: 10px;margin-right: 10px;margin-bottom: 5px;" class="btn btn-danger confirm" href="#">Delete Heavy Vehicles  </a>';
                                                        // echo "<a style='margin: 10px;' href='#' class='btn btn-secondary button-update'><ion-icon name='images-outline'></ion-icon> Update image for Heavy Vehicles   </a>";

                                                        echo '<a style="margin-left: 10px; margin-bottom:10px; margin-top:10px;" class="btn btn-danger" href="my.php?do=Delete3&itemid=' . $item["Id"] . '">Delete Heavy Vehicles</a>';
                                                    echo '</div>';
                                                echo '</div>';
                                            }
                                            
                                        ?>
                                                </div>
                                            </div>
                                        <?php
                                    }else{
                                        echo '<div class="container"><div class="alert alert-danger">Sorry There\' No Ads Heavy Vehicles   To Show, Create <a href="heavyvzhicles.php">New Ads Heavy Vehicles  </a></div></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="my-ads" class="my-ads block">
                    <div class="container ads infoads">
                        <div class="panel panel-primary">
                            <div class="panle-heading"><ion-icon name="newspaper-outline"></ion-icon>My Ads Boats  </div>
                            <div class="panel-body">
                                <div class="row">
                                    <?php
                                    $myItems = getAllFrom("*", "boats", "where user_Id = $userid AND  Add_date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", "", "Id");
                                    if(!empty($myItems))
                                    {
                                        ?>
                                            <div class="carousel clearfix">
                                                <div class="carousel-view clearfix">
                                        <?php
                                            foreach(getItems('boats', 'user_Id', $userid, 1) as $item)
                                            { 
                                                echo '<div class="col-lg-3 col-md-6 col-sm-4 col-xs-4">';
                                                    echo '<div class="thumbnail item-box">';
                                                        // if($item['Approve'] == 1) {echo '<span class="approve-status">Waiting Approval</span>';}
                                                        echo '<span class="price-tagg">$' .number_format($item['Price']) .'</span>'; 
                                                        echo '<div>';
                                                        $i = '';
                                                        $res = $item['Image'];
                                                        $res = explode(" ", $res);
                                                        $count = count($res) - 1;   
                                                        $count =  1;                           
                                                        for($i = 0; $i<$count; ++$i)
                                                        {
                                                            echo  "<a href='infoboats.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'>
                                                            <img class='imgmyads' src='admin/Update_Imageboats/uploads/avatars/" . $res[$i] ."' alt='image' />";
                                                        }                        
                                                        echo '</div>';   
                                                        // echo '<div>';
                                                        //     if(empty($item['Image'])){ echo "<img class='imgmyads' src='admin/Update_Imageboats/uploads/avatars/shoppingcart.jpg' alt='avatar' />";}
                                                        //     else{  echo  "<img class='imgmyads' src='admin/Update_Imageboats/uploads/avatars/" . $item['Image'] ."' alt='avtar' />";}
                                                        // echo '</div>';
                                                        echo '<div class="caption">';
                                                                    echo '<h3><a href="infoboats.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;">' .$item['Name'] .'</a></h3>';
                                                                    echo '<p class="dateitli">On ' . TimeAgo($item["Add_date"], date("Y-m-d H:i:s")) .'</p>';
                                                        echo '</div>';
                                                        // echo "<a style='margin-top: 5px;margin-right: 10px;margin-left: 10px;margin-bottom: 5px;' class='btn btn-success success' href='#' ><ion-icon name='create-outline'></ion-icon>Edit Boats</a>";
                                                        // echo '<a style="margin-left: 10px;margin-right: 10px;margin-bottom: 5px;" class="btn btn-danger confirm" href="#">Delete Boats  </a>';
                                                        // echo "<a style='margin: 10px;' href='#' class='btn btn-secondary button-update'><ion-icon name='images-outline'></ion-icon> Update image for Boats   </a>";

                                                        echo '<a style="margin-left: 10px; margin-bottom:10px; margin-top:10px;" class="btn btn-danger" href="my.php?do=Delete4&itemid=' . $item["Id"] . '">Delete Boats</a>';
                                                    echo '</div>';
                                                echo '</div>';
                                            }
                                            ?>
                                            </div>
                                        </div>
                                    <?php
                                    }else{
                                        echo '<div class="container"><div class="alert alert-danger">Sorry There\' No Ads Boats   To Show, Create <a href="boats.php">New Ads Boats  </a></div></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="my-ads" class="my-ads block">
                    <div class="container ads infoads">
                        <div class="panel panel-primary">
                            <div class="panle-heading"><ion-icon name="newspaper-outline"></ion-icon>My Ads Jobs Wanted  </div>
                            <div class="panel-body">
                                <div class="row">
                                    <?php
                                    $myItems = getAllFrom("*", "jobs", "where user_Id = $userid AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", "", "Id");
                                    if(!empty($myItems))
                                    {
                                        ?>
                                            <div class="carousel clearfix">
                                                <div class="carousel-view clearfix">
                                        <?php
                                            foreach(getItems('jobs', 'user_Id', $userid, 1) as $item)
                                            { 
                                                echo '<div class="col-lg-3 col-md-6 col-sm-4 col-xs-4" id="myList">';
                                                echo '<div class="thumbnail item-box">';
                                                        echo '<a href="infowantjobs.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class=" fw-bold mb-1 itemtwoindex" style="width: 28ch; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"> ' . $item['Name'] . '</div></a>';
                                                        echo '<div class="row" >';
                                                          echo '<div class="col-lg-8">';
                                                              echo '<a href="infowantjobs.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><span class="itemtreeindex">' . $item['location'] . '</span></a>';
                                                          echo '</div>';
                                                          echo '<div class="col-lg-4"><p class="datepostd">' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</p></div>
                                                        </div>';
                                                        echo '<a style="margin-left: 10px; margin-bottom:10px; margin-top:10px;" class="btn btn-danger" href="my.php?do=Delete10&itemid=' . $item["Id"] . '">Delete Jobs</a>';
                                                echo '</div>';
                                                echo '</div>';
                                             
                                            }
                                            ?>
                                            </div>
                                        </div>
                                    <?php
                                    }else{
                                        echo '<div class="container"><div class="alert alert-danger">Sorry There\' No Ads Jobs Wanted   To Show, Create <a href="wantjob.php">New Ads Jobs Wanted  </a></div></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="my-ads" class="my-ads block">
                    <div class="container ads infoads">
                        <div class="panel panel-primary">
                            <div class="panle-heading"><ion-icon name="newspaper-outline"></ion-icon>My Ads Jobs Hiring  </div>
                            <div class="panel-body">
                                <div class="row">
                                    <?php
                                    $myItems = getAllFrom("*", "jobshiring", "where user_Id = $userid AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", "", "Id");
                                    if(!empty($myItems))
                                    {
                                        ?>
                                            <div class="carousel clearfix">
                                                <div class="carousel-view clearfix">
                                        <?php
                                            foreach(getItems('jobshiring', 'user_Id', $userid, 1) as $item)
                                            { 
                                                echo '<div class="col-lg-3 col-md-6 col-sm-4 col-xs-4" id="myList">';
                                                echo '<div class="thumbnail item-box">';
                                                        echo '<a href="infohiringjobs.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><div class=" fw-bold mb-1 itemtwoindex" style="width: 28ch; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"> ' . $item['Name'] . '</div></a>';
                                                        echo '<div class="row" >';
                                                          echo '<div class="col-lg-8">';
                                                              echo '<a href="infohiringjobs.php?pageid=' . $item['Id'] .'" style="text-decoration: none; color:#2B2D2E;"><span class="itemtreeindex">' . $item['Location'] . '</span></a>';
                                                          echo '</div>';
                                                          echo '<div class="col-lg-4"><p class="datepostd">' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</p></div>
                                                        </div>';
                                                        echo '<a style="margin-left: 10px; margin-bottom:10px; margin-top:10px;" class="btn btn-danger" href="my.php?do=Delete11&itemid=' . $item["Id"] . '">Delete Jobs</a>';
                                                echo '</div>';
                                                echo '</div>';
                                            }
                                            ?>
                                            </div>
                                        </div>
                                    <?php
                                    }else{
                                        echo '<div class="container"><div class="alert alert-danger">Sorry There\' No Ads Jobs Hiring To Show, Create <a href="hiring.php">New Ads Jobs Hiring  </a></div></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="my-ads" class="my-ads block">
                    <div class="container ads infoads">
                        <div class="panel panel-primary">
                            <div class="panle-heading"><ion-icon name="newspaper-outline"></ion-icon>My Ads Property For Sale  </div>
                            <div class="panel-body">
                                <div class="row">
                                    <?php
                                    $myItems = getAllFrom("*", "forsale", "where user_Id = $userid AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", "", "Id");
                                    if(!empty($myItems))
                                    {
                                        ?>
                                            <div class="carousel clearfix">
                                                <div class="carousel-view clearfix">
                                        <?php
                                            foreach(getItems('forsale', 'user_Id', $userid, 1) as $item)
                                            { 
                                                echo '<div class="col-lg-3 col-md-6 col-sm-4 col-xs-4">';
                                                    echo '<div class="thumbnail item-box">';
                                                        echo '<span class="price-tagg">$' .number_format($item['Price']) .'</span>';  
                                                        echo '<div>';
                                                        $i = '';
                                                        $res = $item['Image'];
                                                        $res = explode(" ", $res);
                                                        $count = count($res) - 1;   
                                                        $count =  1;                           
                                                        for($i = 0; $i<$count; ++$i)
                                                        {
                                                            echo  "<a href='infoforsale.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'>
                                                            <img class='imgmyads' src='admin/Update_Imageforsale/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                        }                        
                                                        echo '</div>';   
                                                        echo '<div class="caption">';
                                                                    echo '<h3><a href="infoforsale.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;">' .$item['Name'] .'</a></h3>';
                                                                    echo '<p class="dateitli">On ' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</p>';
                                                        echo '</div>';

                                                        echo '<a style="margin-left: 10px; margin-bottom:10px; margin-top:10px;" class="btn btn-danger" href="my.php?do=Delete5&itemid=' . $item["Id"] . '">Delete For Sale</a>';
                                                    echo '</div>';
                                                echo '</div>';
                                            }
                                            ?>
                                            </div>
                                        </div>
                                    <?php
                                    }else{
                                        echo '<div class="container"><div class="alert alert-danger">Sorry There\' No Ads Property For Sale   To Show, Create <a href="forsale.php">New Ads Property For Sale  </a></div></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="my-ads" class="my-ads block">
                    <div class="container ads infoads">
                        <div class="panel panel-primary">
                            <div class="panle-heading"><ion-icon name="newspaper-outline"></ion-icon>My Ads Property For Rent  </div>
                            <div class="panel-body">
                                <div class="row">
                                    <?php
                                    $myItems = getAllFrom("*", "forrent", "where user_Id = $userid AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", "", "Id");
                                    if(!empty($myItems))
                                    {
                                        ?>
                                            <div class="carousel clearfix">
                                                <div class="carousel-view clearfix">
                                        <?php
                                            foreach(getItems('forrent', 'user_Id', $userid, 1) as $item)
                                            { 
                                                echo '<div class="col-lg-3 col-md-6 col-sm-4 col-xs-4">';
                                                    echo '<div class="thumbnail item-box">';
                                                        // if($item['Approve'] == 1) {echo '<span class="approve-status">Waiting Approval</span>';}
                                                        echo '<span class="price-tagg">$' .number_format($item['Price']) .'</span>'; 
                                                        echo '<div>';
                                                        $i = '';
                                                        $res = $item['Image'];
                                                        $res = explode(" ", $res);
                                                        $count = count($res) - 1;   
                                                        $count =  1;                           
                                                        for($i = 0; $i<$count; ++$i)
                                                        {
                                                            echo  "<a href='infoforrent.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'>
                                                            <img class='imgmyads' src='admin/Update_Imageforrent/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                        }                        
                                                        echo '</div>';    
                                                        // echo '<div>';
                                                        //     if(empty($item['Image'])){ echo "<img class='imgmyads' src='admin/Update_Imageforrent/uploads/avatars/shoppingcart.jpg' alt='avatar' />";}
                                                        //     else{  echo  "<img class='imgmyads' src='admin/Update_Imageforrent/uploads/avatars/" . $item['Image'] ."' alt='avtar' />";}
                                                        // echo '</div>';
                                                        echo '<div class="caption">';
                                                                    // echo '<h3><a href="items.php?itemid=' . $item['Id'] .'">' .$item['Name'] .'</a></h3>';
                                                                    echo '<h3><a href="infoforrent.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;">' .$item['Name'] .'</a></h3>';
                                                                    echo '<p class="dateitli">On ' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</p>';
                                                        echo '</div>';
                                                        // echo "<a style='margin-top: 5px;margin-right: 10px;margin-left: 10px;margin-bottom: 5px;' class='btn btn-success success' href='#' ><ion-icon name='create-outline'></ion-icon>Edit Property For Rent</a>";
                                                        // echo '<a style="margin-left: 10px;margin-right: 10px;margin-bottom: 5px;" class="btn btn-danger confirm" href="#">Delete Property For Rent  </a>';
                                                        // echo "<a style='margin: 10px;' href='#' class='btn btn-secondary button-update'><ion-icon name='images-outline'></ion-icon> Update image for Property For Rent   </a>";

                                                        echo '<a style="margin-left: 10px; margin-bottom:10px; margin-top:10px;" class="btn btn-danger" href="my.php?do=Delete6&itemid=' . $item["Id"] . '">Delete For Rent</a>';
                                                    echo '</div>';
                                                echo '</div>';
                                            }
                                            ?>
                                            </div>
                                        </div>
                                    <?php
                                    }else{
                                        echo '<div class="container"><div class="alert alert-danger">Sorry There\' No Ads Property For Rent   To Show, Create <a href="forrent.php">New Ads Property For Rent  </a></div></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="my-ads" class="my-ads block">
                    <div class="container ads infoads">
                        <div class="panel panel-primary">
                            <div class="panle-heading"><ion-icon name="newspaper-outline"></ion-icon>My Ads Community  </div>
                            <div class="panel-body">
                                <div class="row">
                                    <?php
                                    $myItems = getAllFrom("*", "community", "where user_Id = $userid", "", "Id");
                                    if(!empty($myItems))
                                    {
                                        ?>
                                            <div class="carousel clearfix">
                                                <div class="carousel-view clearfix">
                                        <?php
                                            foreach(getItems('community', 'user_Id', $userid, 1) as $item)
                                            { 
                                                echo '<div class="col-lg-3 col-md-6 col-sm-4 col-xs-4">';
                                                    echo '<div class="thumbnail item-box">';
                                                        // if($item['Approve'] == 1) {echo '<span class="approve-status">Waiting Approval</span>';}
                                                        echo '<div class="caption">';
                                                                    echo '<h3><a href="infocommunity.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;">' .$item['Name'] .'</a></h3>';
                                                                    echo '<p class="dateitli">On ' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</p>';
                                                        echo '</div>';

                                                        echo '<a style="margin-left: 10px; margin-bottom:10px; margin-top:10px;" class="btn btn-danger" href="my.php?do=Delete7&itemid=' . $item["Id"] . '">Delete Community</a>';
                                                    echo '</div>';
                                                echo '</div>';
                                            }
                                            ?>
                                            </div>
                                        </div>
                                    <?php
                                    }else{
                                        echo '<div class="container"><div class="alert alert-danger">Sorry There\' No Ads Community   To Show, Create <a href="community.php">New Ads Community  </a></div></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="my-ads" class="my-ads block">
                    <div class="container ads infoads">
                        <div class="panel panel-primary">
                            <div class="panle-heading"><ion-icon name="newspaper-outline"></ion-icon>My Ads Classifieds  </div>
                            <div class="panel-body">
                                <div class="row">
                                    <?php
                                    $myItems = getAllFrom("*", "classifieds", "where user_Id = $userid AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", "", "Id");
                                    if(!empty($myItems))
                                    {
                                        ?>
                                            <div class="carousel clearfix">
                                                <div class="carousel-view clearfix">
                                        <?php
                                            foreach(getItems('classifieds', 'user_Id', $userid, 1) as $item)
                                            { 
                                                echo '<div class="col-lg-3 col-md-6 col-sm-4 col-xs-4">';
                                                    echo '<div class="thumbnail item-box">';
                                                        // if($item['Approve'] == 1) {echo '<span class="approve-status">Waiting Approval</span>';}
                                                        echo '<span class="price-tagg">$' .number_format($item['Price']) .'</span>';  
                                                        echo '<div>';
                                                        $i = '';
                                                        $res = $item['Image'];
                                                        $res = explode(" ", $res);
                                                        $count = count($res) - 1;   
                                                        $count =  1;                           
                                                        for($i = 0; $i<$count; ++$i)
                                                        {
                                                              // <a href='infoclasselec.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'></a>
                                                            // <a href="infoclasselec.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;">

                                                            echo  "<a href='infoclasselec.php?pageid=" . $item["Id"] ."' style='text-decoration: none; color:#2B2D2E;'>
                                                            <img class='imgmyads' src='admin/Update_Imageclassifieds/uploads/avatars/" . $res[$i] ."' alt='image' /></a>";
                                                        }                        
                                                        echo '</div>';  
                                                        // echo '<div>';
                                                        //     if(empty($item['Image'])){ echo "<img class='imgmyads' src='admin/Update_Imageclassifieds/uploads/avatars/shoppingcart.jpg' alt='avatar' />";}
                                                        //     else{  echo  "<img class='imgmyads' src='admin/Update_Imageclassifieds/uploads/avatars/" . $item['Image'] ."' alt='avtar' />";}
                                                        // echo '</div>';
                                                        echo '<div class="caption">';
                                                                    // echo '<h3><a href="items.php?itemid=' . $item['Id'] .'">' .$item['Name'] .'</a></h3>';
                                                                    echo '<h3><a href="infoclasselec.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;">' .$item['Name'] .'</a></h3>';
                                                                    echo '<p class="dateitli">On ' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</p>';
                                                        echo '</div>';
                                                        echo '<a style="margin-left: 10px; margin-bottom:10px; margin-top:10px;" class="btn btn-danger" href="my.php?do=Delete8&itemid=' . $item["Id"] . '">Delete Classifieds</a>';
                                                    echo '</div>';
                                                echo '</div>';
                                            }
                                            ?>
                                            </div>
                                        </div>
                                    <?php
                                    }else{
                                        echo '<div class="container"><div class="alert alert-danger">Sorry There\' No Ads Classifieds   To Show, Create <a href="classifieds.php">New Ads Classifieds  </a></div></div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="my-ads" class="my-ads block">
                    <div class="container ads infoads">
                        <div class="panel panel-primary">
                            <div class="panle-heading"><ion-icon name="newspaper-outline"></ion-icon>My Ads Number Plates  </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="container">
                                    <?php
                                    $myItems = getAllFrom("*", "numberplates", "where user_Id = $userid AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH)", "", "Id");
                                    if(!empty($myItems))
                                    {
                                        ?>
                                            <div class="carousel clearfix">
                                                <div class="carousel-view clearfix">
                                        <?php
                                                foreach(getItems('numberplates', 'user_Id', $userid, 1) as $item)
                                                { 
                                                    echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="myList">';
                                                        echo '<div class="thumbnail item-box" style="padding:15px;">';
                                                            echo '<div class="row">';
                                                            echo '</div>';
                                                            echo '<div class="row">';
                                                                echo '<div class="col-lg-6 namelink"><a href="infonumberplate.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E;">' . $item['Name'] . '</a></div>';
                                                                echo '<div class="col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 pricelink">AED 
                                                                            ' . number_format($item['Price']) . '</div>';
                                                                            echo '<div class="col-lg-12">';
                                                                            echo '<p class="dateitli">Posted on ' . TimeAgo($item["date"], date("Y-m-d H:i:s")) .'</p>';
                                                                        echo '</div></div>
                                                                </div>';
                                                            echo '</div>';
                                                            echo '<div class="row">';
                                                                echo '<div class="col-lg-4">';
                                                                ?>
                                                                    <style>
                                                                        .imgplate{width: 200px; height: 150px;}
                                                                        h3.-\30 {
                                                                            letter-spacing: 2px;
                                                                            position: relative;
                                                                            top: -90px;
                                                                            left: 70px;
                                                                            font-size: 15px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                        }
                                                                        h3.platetwo {
                                                                            letter-spacing: 2px;
                                                                            position: relative;
                                                                            top: -65px;
                                                                            left: 95px;
                                                                            font-size: 15px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                        }
                                                                        h3.platetree {
                                                                            letter-spacing: 2px;
                                                                            position: relative;
                                                                            top: -70px;
                                                                            left: 70px;
                                                                            font-size: 15px;
                                                                            color: #fff;
                                                                            font-weight: 600;
                                                                        }
                                                                        h3.-\33 {
                                                                            position: relative;
                                                                            top: -70px;
                                                                            left: 70px;
                                                                            font-size: 15px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                            letter-spacing: 2px;
                                                                        }
                                                                        h3.plate2motor {
                                                                            position: relative;
                                                                            top: -70px;
                                                                            left: 85px;
                                                                            font-size: 15px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                            letter-spacing: 3px;
                                                                        }
                                                                        h3.plate3one {
                                                                            position: relative;
                                                                            top: -80px;
                                                                            left: 70px;
                                                                            font-size: 15px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                            letter-spacing: 2px;
                                                                        }
                                                                        h3.plate3two {
                                                                            position: relative;
                                                                            top: -70px;
                                                                            left: 70px;
                                                                            font-size: 15px;
                                                                            color: #fff;
                                                                            font-weight: 600;
                                                                            letter-spacing: 2px;
                                                                        }
                                                                        h3.platetree3 {
                                                                            position: relative;
                                                                            top: -65px;
                                                                            left: 85px;
                                                                            font-size: 15px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                            letter-spacing: 2px;
                                                                        }
                                                                        h3.plate4one {
                                                                            position: relative;
                                                                            top: -95px;
                                                                            left: 70px;
                                                                            font-size: 15px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                            letter-spacing: 2px;
                                                                        }
                                                                        h3.platetree4 {
                                                                            position: relative;
                                                                            top: -65px;
                                                                            left: 85px;
                                                                            font-size: 15px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                            letter-spacing: 2px;
                                                                        }
                                                                        h3.plate5one {
                                                                            position: relative;
                                                                            top: -95px;
                                                                            left: 75px;
                                                                            font-size: 15px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                            letter-spacing: 2px;
                                                                        }
                                                                        h3.platetree5 {
                                                                            position: relative;
                                                                            top: -70px;
                                                                            left: 90px;
                                                                            font-size: 15px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                            letter-spacing: 2px;
                                                                        }
                                                                        h3.plate6one {
                                                                            position: relative;
                                                                            top: -90px;
                                                                            left: 80px;
                                                                            font-size: 15px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                            letter-spacing: 2px;
                                                                        }
                                                                        h3.platetree6 {
                                                                            position: relative;
                                                                            top: -70px;
                                                                            left: 90px;
                                                                            font-size: 15px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                            letter-spacing: 2px;
                                                                        }
                                                                        h3.plate7one {
                                                                            position: relative;
                                                                            top: -70px;
                                                                            left: 70px;
                                                                            font-size: 15px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                            letter-spacing: 2px;
                                                                        }
                                                                        h3.platetree7 {
                                                                            position: relative;
                                                                            top: -70px;
                                                                            left: 90px;
                                                                            font-size: 15px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                            letter-spacing: 2px;
                                                                        }
                                                                        h3.-\31 {
                                                                            position: relative;
                                                                            top: -95px;
                                                                            left: 70px;
                                                                            font-size: 18px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                            letter-spacing: 1px;
                                                                        }
                                                                        h3.-\34 {
                                                                            position: relative;
                                                                            top: -70px;
                                                                            left: 75px;
                                                                            font-size: 15px;
                                                                            color: black;
                                                                            font-weight: 600;
                                                                            letter-spacing: 2px;
                                                                        }
                                                                    </style>
                                                                <?php
                                                                    if($item['design'] == "-0"){
                                                                    ?>
                                                                            <img src="layout/images/Dubai.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="-0">' . $item['platenumber'] . '</h3>'; ?>
                                                                    <?php
                                                                    }
                                                                    elseif($item['design'] == "-1"){
                                                                        ?>
                                                                            <img src="layout/images/Dubai_New.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="-1">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['typenpl'] ==  "platetwo"){
                                                                        ?>
                                                                            <img src="layout/images/Dubai_Classic.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="platetree">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['typenpl'] == "platetree"){
                                                                        ?>
                                                                            <img src="layout/images/Dubai_motorcycle.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="platetwo">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['design'] == "-3"){
                                                                        ?>
                                                                            <img src="layout/images/Abu_Dhabi.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="-3">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['design'] == "-4"){
                                                                        ?>
                                                                            <img src="layout/images/Abu_Dhabi_New.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="-4">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['typenpl'] == "plate2motor"){
                                                                        ?>
                                                                            <img src="layout/images/Abu_Dhabi_motorcycle.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="plate2motor">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['typenpl'] == "plate3one"){
                                                                        ?>
                                                                            <img src="layout/images/Sharjah.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="plate3one">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['typenpl'] == "plate3two"){
                                                                        ?>
                                                                            <img src="layout/images/Sharjah_Classic.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="plate3two">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['typenpl'] == "platetree3"){
                                                                        ?>
                                                                            <img src="layout/images/Sharjah_motorcycle.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="platetree3">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['typenpl'] == "plate4one"){
                                                                        ?>
                                                                            <img src="layout/images/Ajman.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="plate4one">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['typenpl'] == "platetree4"){
                                                                        ?>
                                                                            <img src="layout/images/Ajman_motorcycle.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="platetree4">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['typenpl'] == "plate5one"){
                                                                        ?>
                                                                            <img src="layout/images/Fujairah.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="plate5one">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['typenpl'] == "platetree5"){
                                                                        ?>
                                                                            <img src="layout/images/Fujairah_motorcycle.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="platetree5">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['typenpl'] == "plate6one"){
                                                                        ?>
                                                                            <img src="layout/images/Ummel_Quwain.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="plate6one">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['typenpl'] == "platetree6"){
                                                                        ?>
                                                                            <img src="layout/images/Ummel_Quwain_motorcycle.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="platetree6">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['typenpl'] == "plate7one"){
                                                                        ?>
                                                                            <img src="layout/images/RAK.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="plate7one">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }
                                                                    elseif($item['typenpl'] == "platetree7"){
                                                                        ?>
                                                                            <img src="layout/images/RAK_motorcycle.png" alt="" class="imgplate">
                                                                            <?php    echo '<h3 class="platetree7">' . $item['platenumber'] . '</h3>'; ?>
                                                                        <?php
                                                                    }                                                      
                                                                echo '</div>';
                                                                echo '<div class="col-lg-8">
                                                                <a href="infonumberplate.php?pageid=' . $item["Id"] .'" style="text-decoration: none; color:#2B2D2E; margin-right: 15px;"><ion-icon name="chevron-forward-outline"></ion-icon></a></div>';
                                                            echo '</div>';
                                                            echo '<a style="margin-left: 10px;" class="btn btn-danger" href="my.php?do=Delete9&itemid=' . $item["Id"] . '">Delete Number Plates</a>';
                                                        echo '</div>';
                                                    echo '</div>';
                                                }
                                                ?>
                                                </div>
                                            </div>
                                        <?php
                                    }else{
                                        echo '<div class="container"><div class="alert alert-danger">Sorry There\' No Ads Number Plates   To Show, Create <a href="numberplates.php">New Ads Classifieds  </a></div></div>';
                                    }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
        }
        elseif($do == 'Delete'){
            echo "<h1 class='text-center h1-member'>Delete Ad</h1>";
            echo "<div class='container'>";
            $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0;
            $check = checkItem('Id', 'products', $itemid);
            if($check > 0){
                $stmtdelete = $con->prepare("DELETE FROM products WHERE Id = :zid");
                $stmtdelete->bindParam(":zid", $itemid);
                $stmtdelete->execute();
                header('Location:my.php');
                exit();
            }  else {
                header('Location:my.php');
                exit();
            }
            echo '</div>';
        }
        elseif($do == 'Delete1'){
            echo "<h1 class='text-center h1-member'>Delete Ad</h1>";
            echo "<div class='container'>";
            $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0;
            $check = checkItem('Id', 'motorcycles', $itemid);
            if($check > 0){
                $stmtdelete = $con->prepare("DELETE FROM motorcycles WHERE Id = :zid");
                $stmtdelete->bindParam(":zid", $itemid);
                $stmtdelete->execute();
                header('Location:my.php');
                exit();
            }  else {
                header('Location:my.php');
                exit();
            }
            echo '</div>';
        }
        elseif($do == 'Delete2'){
            echo "<h1 class='text-center h1-member'>Delete Ad</h1>";
            echo "<div class='container'>";
            $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0;
            $check = checkItem('Id', 'autoaccparts', $itemid);
            if($check > 0){
                $stmtdelete = $con->prepare("DELETE FROM autoaccparts WHERE Id = :zid");
                $stmtdelete->bindParam(":zid", $itemid);
                $stmtdelete->execute();
                header('Location:my.php');
                exit();
            }  else {
                header('Location:my.php');
                exit();
            }
            echo '</div>';
        }
        elseif($do == 'Delete3'){
            echo "<h1 class='text-center h1-member'>Delete Ad</h1>";
            echo "<div class='container'>";
            $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0;
            $check = checkItem('Id', 'heavyvzhicles', $itemid);
            if($check > 0){
                $stmtdelete = $con->prepare("DELETE FROM heavyvzhicles WHERE Id = :zid");
                $stmtdelete->bindParam(":zid", $itemid);
                $stmtdelete->execute();
                header('Location:my.php');
                exit();
            }  else {
                header('Location:my.php');
                exit();
            }
            echo '</div>';
        }
        elseif($do == 'Delete4'){
            echo "<h1 class='text-center h1-member'>Delete Ad</h1>";
            echo "<div class='container'>";
            $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0;
            $check = checkItem('Id', 'boats', $itemid);
            if($check > 0){
                $stmtdelete = $con->prepare("DELETE FROM boats WHERE Id = :zid");
                $stmtdelete->bindParam(":zid", $itemid);
                $stmtdelete->execute();
                header('Location:my.php');
                exit();
            }  else {
                header('Location:my.php');
                exit();
            }
            echo '</div>';
        }
        elseif($do == 'Delete5'){
            echo "<h1 class='text-center h1-member'>Delete Ad</h1>";
            echo "<div class='container'>";
            $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0;
            $check = checkItem('Id', 'forsale', $itemid);
            if($check > 0){
                $stmtdelete = $con->prepare("DELETE FROM forsale WHERE Id = :zid");
                $stmtdelete->bindParam(":zid", $itemid);
                $stmtdelete->execute();
                header('Location:my.php');
                exit();
            }  else {
                header('Location:my.php');
                exit();
            }
            echo '</div>';
        }
        elseif($do == 'Delete6'){
            echo "<h1 class='text-center h1-member'>Delete Ad</h1>";
            echo "<div class='container'>";
            $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0;
            $check = checkItem('Id', 'forrent', $itemid);
            if($check > 0){
                $stmtdelete = $con->prepare("DELETE FROM forrent WHERE Id = :zid");
                $stmtdelete->bindParam(":zid", $itemid);
                $stmtdelete->execute();
                header('Location:my.php');
                exit();
            }  else {
                header('Location:my.php');
                exit();
            }
            echo '</div>';
        }
        elseif($do == 'Delete7'){
            echo "<h1 class='text-center h1-member'>Delete Ad</h1>";
            echo "<div class='container'>";
            $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0;
            $check = checkItem('Id', 'community', $itemid);
            if($check > 0){
                $stmtdelete = $con->prepare("DELETE FROM community WHERE Id = :zid");
                $stmtdelete->bindParam(":zid", $itemid);
                $stmtdelete->execute();
                header('Location:my.php');
                exit();
            }  else {
                header('Location:my.php');
                exit();
            }
            echo '</div>';
        }
        elseif($do == 'Delete8'){
            echo "<h1 class='text-center h1-member'>Delete Ad</h1>";
            echo "<div class='container'>";
            $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0;
            $check = checkItem('Id', 'classifieds', $itemid);
            if($check > 0){
                $stmtdelete = $con->prepare("DELETE FROM classifieds WHERE Id = :zid");
                $stmtdelete->bindParam(":zid", $itemid);
                $stmtdelete->execute();
                header('Location:my.php');
                exit();
            }  else {
                header('Location:my.php');
                exit();
            }
            echo '</div>';
        }
        elseif($do == 'Delete9'){
            echo "<h1 class='text-center h1-member'>Delete Ad</h1>";
            echo "<div class='container'>";
            $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0;
            $check = checkItem('Id', 'numberplates', $itemid);
            if($check > 0){
                $stmtdelete = $con->prepare("DELETE FROM numberplates WHERE Id = :zid");
                $stmtdelete->bindParam(":zid", $itemid);
                $stmtdelete->execute();
                header('Location:my.php');
                exit();
            }  else {
                header('Location:my.php');
                exit();
            }
            echo '</div>';
        }
        elseif($do == 'Delete10'){
            echo "<h1 class='text-center h1-member'>Delete Ad</h1>";
            echo "<div class='container'>";
            $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0;
            $check = checkItem('Id', 'jobs', $itemid);
            if($check > 0){
                $stmtdelete = $con->prepare("DELETE FROM jobs WHERE Id = :zid");
                $stmtdelete->bindParam(":zid", $itemid);
                $stmtdelete->execute();
                header('Location:my.php');
                exit();
            }  else {
                header('Location:my.php');
                exit();
            }
            echo '</div>';
        }
        elseif($do == 'Delete11'){
            echo "<h1 class='text-center h1-member'>Delete Ad</h1>";
            echo "<div class='container'>";
            $itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ? intval($_GET['itemid']) : 0;
            $check = checkItem('Id', 'jobshiring', $itemid);
            if($check > 0){
                $stmtdelete = $con->prepare("DELETE FROM jobshiring WHERE Id = :zid");
                $stmtdelete->bindParam(":zid", $itemid);
                $stmtdelete->execute();
                header('Location:my.php');
                exit();
            }  else {
                header('Location:my.php');
                exit();
            }
            echo '</div>';
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
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                ]
                });
        </script>
        <?php
    } 
        else  {
        header('Location:login.php');
        exit();
                }
                include 'includes/templates/footer.php';  
                ?>
                <style>
                  .backfooter{background: url('layout/images/photoholgic-fn6x1TL290w-unspla.png');
                    /* margin-left: -150px;margin-right: -117px; */
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