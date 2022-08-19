<?php 
    ob_start();
    session_start();
    $pageTitle = 'Product';
    include 'init.php';
    
        $do = isset($_GET['do']) ? $_GET['do'] : 'Add';
       
        if($do == 'Add')
        {
            ?>
            
            <form class="form-horizontal" action="?do=Insert" class="order" method="POST" enctype="multipart/form-data">
                <?php
                            echo '<div class="container productdiv">';
                                echo '<div class="row content">';
                    if(isset($_GET['pageid']) && is_numeric($_GET['pageid'])){
                        $blog = intval($_GET['pageid']);                                 
                                $allItems = getAllFrom("*", "products", "where Id = {$blog}", "AND Approve = 1", "Id", "");
                                foreach($allItems as $item){
                                    echo '<h2 class="prodtitle">' . $item['Name'] . '</h2>' ;
                                    ?>
                                    <input  type="hidden" name="name" class="form-control form-select-lg" autocomplete="off" value="<?php echo $item["Name"] ?>"  required="required" />
                                    <?php
                                    echo '<div class="col-lg-6 mb-3">';
                                                echo '<div class="carousel-item active">';
                                                    echo '<img  class="d-block w-100 imgprod" alt="..." src="admin/Update_Image/uploads/avatars/' . $item['Image'] .' " >';
                                                echo '</div>';
                                    echo '</div>';
                                    echo '<div class="col-lg-6 ">';
                                        echo '<div class="container ">';
                                            echo '<input type="submit" value="Add To Cart" class="btn btn-primary btn-lg"/>';
                                            echo '<div class="row content" style="margin-top:10px;">';
                                                echo '<div class="col-md-2 mb-3">';
                                                    if($item['Status'] == 1){ echo '<span class="spanstatus" style="background-color: #F23C49;">New</span> '; }
                                                    elseif($item['Status'] == 2){ echo '<span class="spanstatus" style="background-color:#3C76F2;">Used</span> '; }
                                                echo '</div>';
                                                echo '<div class="col-md-2">';
                                                    echo '<span class="spancertified">Certified</span>';
                                                echo '</div>';
                                            echo '</div>';
                                            echo '<h3 class="priceprod">$' . $item['Price'] . '</h3>';
                                            ?>
                                            <input  type="hidden" name="price" class="form-control form-select-lg" autocomplete="off" value="<?php echo $item["Price"] ?>"  required="required" />
                                            <?php
                                        echo '</div>';
                                        echo '<div class="container ">';
                                            echo '<div class="row content">';
                                                echo '<div class="col-md-6 mb-3">';
                                                    echo '<ion-icon name="speedometer-outline" style="font-size: 20px;color: red;"></ion-icon><span style="font-size: 25px; font-weight: 500;"> ' . $item['k_mi'] . 'K miles</span>';
                                                echo '</div>';
                                                echo '<div class="col-md-6">';
                                                    if($item['Location'] == 1){ echo '<ion-icon name="location-outline" style="font-size: 20px;color: red;"></ion-icon><span style="font-size: 25px; font-weight: 500;">Dubai</span>'; }
                                                    elseif($item['Location'] == 2){ echo '<ion-icon name="location-outline" style="font-size: 20px;color: red;"></ion-icon><span style="font-size: 25px; font-weight: 500;">Ras ALkhima</span>'; }
                                                    elseif($item['Location'] == 3){ echo '<ion-icon name="location-outline" style="font-size: 20px;color: red;"></ion-icon><span style="font-size: 25px; font-weight: 500;">AbuDabi</span>'; }
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';
                                        $stmt = $con->prepare("SELECT products.*, users.Name AS username, users.avatar AS avatar, users.FullName AS FullName, users.tel AS tel FROM products
                                                            INNER JOIN users ON 
                                                                    users.Id = products.user_Id
                                                            Where products.Id = $blog");
                                        // $stmt = $con->prepare("SELECT products.*, users.Name AS username, users.avatar AS avatar, users.FullName AS FullName, users.tel AS tel 
                                        //     FROM users
                                        //     INNER JOIN products ON 
                                        //     products.Id = $blog");
                                        $stmt->execute();
                                        $alluser = $stmt->fetchAll();
                                        foreach($alluser as $user){
                                            echo '<div class="container userprod">';
                                                echo '<div class="row content">';
                                                    echo '<div class="col-lg-12 ">';
                                                        echo '<div class="row content">';
                                                            echo '<div class="col-md-3 mb-3">';
                                                                echo '<img  class="avatarprod" alt="..." src="admin/Update-Image/uploads/avatars/' . $user['avatar'] .' " >';
                                                            echo '</div>';
                                                            echo '<div class="col-md-3">';
                                                                echo '<h5 class="fullnameprod">' . $user['FullName'] . '</h5>';
                                                            echo '</div>';
                                                            echo '<h5 class="telprod"><ion-icon name="call-outline" style="font-size: 20px;color: red;margin-right:5px;"></ion-icon>' . $user['tel'] . '</h5>';
                                                        echo '</div>';
                                                    echo '</div>';
                                                echo '</div>';}
                                         if(isset($_SESSION['user'])) { ?>
                                            <div class="row">
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
                                            </div>
                                            <?php } else {
                                                echo '<div class="logsignmessg">';
                                                    echo '<a href="login.php" class="divlogsigna">Login</a> or <a href="signup.php" class="divlogsigna"> Sign Up</a> To <ion-icon name="chatbubbles-outline" style="font-size: 20px;color: red;margin-right:5px;"></ion-icon> Send Message.';
                                                echo '</div>'; 
                                            } 
                                            echo '</div>';
                                        

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
                                                    echo '<div class="col-sm-12 col-md-4 col-lg-3">';
                                                        echo '<a class="lightbox" href="admin/Update_Image/uploads/avatars/' . $itemm['Image'] .' ">';
                                                            echo '<img style="width: 144px; height: 124px;" class="img-fluid" src="admin/Update_Image/uploads/avatars/' . $itemm['Image'] .' "  alt="Gallery Images">';
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
                                <div class="container">
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
                                                 <!-- Drivetrain,Engine,Transmission,Citympg,Highwaympg,Exteriorcolor,Interiorcolor,Vin -->
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
                                </div>

                                <div class="container">
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
                                        </div>
                                <?php    }
else{echo "You Must Add Page ID.";}    ?>
                                    </div>
                                </div>
                                <!-- <a href="?do=Insert">AAAAA</a> -->
                                <!-- <input type="submit"> -->
                                <!-- <button class="button_btnn">ORDER NOW</button> -->
                                <!-- <input type="submit" value="Add To Cart" class="btn btn-primary btn-lg"/> -->
            </form>
                            <?php

        }
        elseif($do == 'Insert'){

            echo '<div style="margin-top:100px;">';
            // echo 'hiii';
            echo "<h1 class='text-center h1-index'>Insert Food</h1>";
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                if(isset($_SESSION['user']))
                {
                    $Name          = $_POST['name'];
                    $price          = $_POST['price'];
                    
                            $stmtaddfood = $con->prepare("INSERT INTO
                                                requests(user_id, Name_product, Price_Product, Date_request, Status, mycart)
                                                VALUES(:zuserid, :ztitle, :zprice, now(), 0, 1)");
                            $stmtaddfood->execute(array(
                                'zuserid' =>  $_SESSION['uid'],
                                'ztitle'    => $Name,
                                'zprice'    => $price
                            ));
                            echo "<div class='alert alert-success'>" . $stmtaddfood->rowCount() . " Record Inserted. </div>";
                            echo "<a href='products.php' class='btn btn-secondary'><ion-icon name='return-up-back-outline'></ion-icon> Return. </a>";
                }
                else{
                    header('Location:login.php');
                    exit();
                }            
            
            }
            else{
                echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                echo "<a href='products.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return . </a>";
            }
            echo '</div>';
            echo '</div>';
        }

        include 'includes/templates/footer.php';   
ob_end_flush();
?>