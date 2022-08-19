<?php 
error_reporting(0);
ob_start();
session_start();
$pageTitle="New For Sale ";
    if(isset($_SESSION['user']))
    {
        include 'init.php';
        
        $do = isset($_GET['do']) ? $_GET['do'] : 'Add';
        if($do == 'Add'){
            ?>
                <div class="create block">
                    <div class="container">
                        <div class="panel panel-primary">
                            <div class="panle-heading">
                                <ion-icon name="add-outline"></ion-icon><?php echo $pageTitle ?></div>
                            <div class="panel-body">
                                <div class="container">
                                <div class="row">
                                    <div class="row1 col-lg-6">
                                        <form class="form-horizontal" action="?do=Insert" method="POST" enctype="multipart/form-data">
                                            <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row ">
                                                 <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Catgory :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="category">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "categories", "", "", "Id");
                                                            foreach($allUsers as $user){
                                                                echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Type For Sale :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="typeforsale">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "typeforsale", "", "", "Id");
                                                            foreach($allUsers as $user){
                                                                echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Occupancy Status :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="occupancystatus">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "occupancystatus", "", "", "Id");
                                                            foreach($allUsers as $user){
                                                                echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="name" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Name :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="name" type="text" name="name" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Name Of The For Sale ">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="phone" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">phone :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="phone" type="text" name="phone" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="phone Of The For Sale ">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="price" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Price :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <input id="price" type="text" name="price" class="forminput form-select-lg" required="required" placeholder="Price Of The For Sale "/>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="file" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Image :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <input id="file" type="file" name="image" class="forminput form-select-lg" required="required"/>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="Location" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Location :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Location" type="text" name="Location" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Location Of The For Sale ">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="Description" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Description :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Description" type="text" name="Description" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Description Of The For Sale ">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="beds" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Beds :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="beds" type="text" name="beds" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Beds Of The For  Rent">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="baths" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Baths :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="baths" type="text" name="baths" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="baths Of The For  Rent">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="maintenancefee" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Maintenance Fee :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="maintenancefee" type="text" name="maintenancefee" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Maintenance Fee Of The For Sale ">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="sellerfee" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Seller Transfer Fee :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="sellerfee" type="text" name="sellerfee" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Seller Of The For Sale ">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="buyerfee" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Buyer Transfer fee :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="buyerfee" type="text" name="buyerfee" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Buyer Transfer fee Of The For Sale ">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="propertyref" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Property Reference Id :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="propertyref" type="text" name="propertyref" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Property Reference Id Of The For Sale ">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="annualfee" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Anaual community fee :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="annualfee" type="text" name="annualfee" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Anaual community fee Of The For Sale ">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="readyby" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Ready By :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="readyby" type="text" name="readyby" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Ready By Of The For Sale ">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="totalclosing" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Total Closing :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="totalclosing" type="text" name="totalclosing" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Total Closing The For Sale ">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="size" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Size :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="size" type="text" name="size" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Size Of The For Sale ">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="yutub" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Url Youtub :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="yutub" type="text" name="yutub" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Url Youtub Of The For Sale ">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="tour" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Url Tour :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="tour" type="text" name="tour" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Url Tour Of The For Sale ">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-2 control-label">Landlord / Agent :</label>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                    <div class="radiomargin">
                                                        <input id="ads-yes" type="radio" name="lanag" value="0" checked/>
                                                        <label for="ads-yes" class="choix ">Landlord</label>
                                                        <input id="ads-no" type="radio" name="lanag" value="1" />
                                                        <label for="ads-no" class="choix ">Agent</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                                <label class="col-lg-12 col-md-12 col-sm-12 col-xs-2 control-label"> Building / Neighbourhood:</label>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                    <div class="radiomargin">
                                                        <input id="ads-yes" type="radio" name="buineigh" value="0" checked/>
                                                        <label for="ads-yes" class="choix ">Building</label>
                                                        <input id="ads-no" type="radio" name="buineigh" value="1" />
                                                        <label for="ads-no" class="choix ">Neighbourhood</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <input type="submit" value=" Add " class=" btn-primary btn-lg" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
        elseif($do == 'Insert'){
            echo "<h1 class='text-center h1-member'>Insert For Sale</h1>";
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $imageName = $_FILES['image']['name'];
                $imageSize = $_FILES['image']['size'];
                $imageTmp  = $_FILES['image']['tmp_name'];
                $imageTaype= $_FILES['image']['type'];
                $imageAllowedExtension = array("jpeg", "jpg", "png", "gif");

                $imageExtension = strtolower(substr(strrchr($imageName, '.'), 1));
                        // Drivetrain,Engine,Transmission,Citympg,Highwaympg,Exteriorcolor,Interiorcolor,Vin
                $category     = $_POST['category'];
                $name       = $_POST['name'];
                $phone       = $_POST['phone'];
                $price      = $_POST['price'];   
                $desc      = $_POST['Description'];   
                $size      = $_POST['size'];   
                $totalclosing      = $_POST['totalclosing'];   
                $readyby      = $_POST['readyby'];   
                $annualfee = $_POST['annualfee'];
                $propertyref = $_POST['propertyref'];
                $buyerfee   = $_POST['buyerfee'];
                $sellerfee   = $_POST['sellerfee'];
                $maintenancefee   = $_POST['maintenancefee'];
                $typeforsale     = $_POST['typeforsale'];
                $occupancystatus       = $_POST['occupancystatus'];
                $buineigh      = $_POST['buineigh'];
                $lanag      = $_POST['lanag'];
                $location   = $_POST['Location'];
                $tour   = $_POST['tour'];
                $yutub   = $_POST['yutub'];
                $beds   = $_POST['beds'];
                $baths   = $_POST['baths'];
                $formErrors = array();
                    if(empty($name)){
                        $formErrors[] = 'Name  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($beds)){
                        $formErrors[] = 'Beds  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($baths)){
                        $formErrors[] = 'Baths  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($tour)){
                        $formErrors[] = 'Url Tour  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($yutub)){
                        $formErrors[] = 'Url Youtub  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($location)){
                        $formErrors[] = 'Location  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($annualfee)){
                        $formErrors[] = 'Annual Community fee  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($propertyref)){
                        $formErrors[] = 'Property Reference Id  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($buyerfee)){
                        $formErrors[] = 'Buyer Transfer Fee  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($sellerfee)){
                        $formErrors[] = 'Seller Transfer Fee  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($maintenancefee)){
                        $formErrors[] = 'Maintenance Fee  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($phone)){
                        $formErrors[] = 'Phone  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($price)){
                        $formErrors[] = 'Price  Can\'t be<strong>Empty.</strong>';
                    }
                    if($category == 0)
                    {
                        $formErrors[] = 'Category Cant\'t be <strong>Empty.</strong>';
                    }
                    if($occupancystatus == 0)
                    {
                        $formErrors[] = 'Occupancy Status Cant\'t be <strong>Empty.</strong>';
                    }
                    if($typeforsale == 0)
                    {
                        $formErrors[] = 'Type For Sale Cant\'t be <strong>Empty.</strong>';
                    }
                    if(empty($desc)){
                        $formErrors[] = 'Description  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($size)){
                        $formErrors[] = 'Size  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($totalclosing)){
                        $formErrors[] = 'Total Closing  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($readyby)){
                        $formErrors[] = 'Ready By  Can\'t be<strong>Empty.</strong>';
                    }
                    if(!empty($imageName) && !in_array($imageExtension, $imageAllowedExtension)){
                        $formErrors[] = 'This Extension Is Not <strong>Allowed.</strong>';
                    }
                    if(empty($imageName)){
                        $formErrors[] = 'Image Is <strong>Required.</strong>';
                    }
                    if($imageSize > 4194304){
                        $formErrors[] = 'Image Can Be Larger Than <strong>Required.</strong>';
                    }
                    foreach($formErrors as $error){
                        echo '<div class="alert alert-danger">' . $error . '</div>';
                    }
                    if(empty($formErrors))
                    {
                        $image = rand(0, 100000000) . '_' . $imageName;
                        move_uploaded_file($imageTmp, "admin\Update_Imageforsale\uploads\avatars\\" . $image);
    
                        $check = checkItem("Id", "forsale", $name);
                        if($check == 1)
                        {
                            echo '<div class="alert alert-danger">Sorry This For Sale Is Exist.</div>';
                            echo "<a href='forsale.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to For Sale page.</a>";
                        }
                        else{
                            $stmtitemadd = $con->prepare("INSERT INTO
                                                    forsale(Name, beds, baths, urltour, urlyutub, categories, date, Image, user_Id, phone, price, typeforsale, occupancystatus, description, size, totalclosing, readyby, annualfee ,propertyreference ,buyerfee ,sellerfee ,maintenancefee , buineigh, lanag, location, Approve)
                                                    VALUES(:zname, :zbeds, :zbaths, :zurltour, :zurlyutub, :zcategory, now(), :zimage, :zuser, :zphone, :zprice, :ztypeforsale, :zocuupancystatus, :zdescription, :zsize, :ztotalclosing, :zreadyby, :zannualfee, :zpropertyref ,:zbuyerfee ,:zsellerfee ,:zmaintenancefee ,:zbuineigh, :zlanag, :zlocation ,1)");
                            $stmtitemadd->execute(array(
                                    'zname'     => $name,
                                    'zbeds'     => $beds,
                                    'zbaths'     => $baths,
                                    'zurltour'     => $tour,
                                    'zurlyutub'     => $yutub,
                                    'zcategory' => $category,
                                    'zimage'    => $image,
                                    'zuser'     => $_SESSION['uid'],   
                                    'zphone'    => $phone,                                                                     
                                    'zprice'    => $price,                                    
                                    'ztypeforsale'=> $typeforsale,
                                    'zocuupancystatus'=>    $occupancystatus,
                                    'zdescription'=>    $desc,
                                    'zsize'=>    $size,
                                    'ztotalclosing'=>    $totalclosing,
                                    'zreadyby'=>    $readyby,
                                    'zannualfee'=>    $annualfee,
                                    'zpropertyref'=>    $propertyref,
                                    'zbuyerfee'=>    $buyerfee,
                                    'zsellerfee'=>    $sellerfee,
                                    'zmaintenancefee'=>    $maintenancefee,
                                    'zbuineigh'=>    $buineigh,
                                    'zlanag'=>    $lanag,
                                    'zlocation'=>    $location
                                    // 'zInsured'   => $Insured,
                                    // 'zEngine' => $Engine,
                                    // 'zExteriorcolor' => $Exteriorcolor,
                                    // 'zInteriorcolor' => $Interiorcolor,
                                    // 'zVin' => $Vin,
                                    // 'zdesc'     => $desc,

                                    // 'zstatus'   => $status,
                                    // 'zmake'     => $make,
                                    // 'zmodel'    => $model,
                                    // 'zlocation' => $location,
                                    // 'zyear'     => $year,
                                    // 'ztypegas'  => $typegas,
                                    // 'zk_mi'     => $k_mi,
                                    // 'ztypemodel'=> $typemodel,
                                    // 'zreginalspec' => $reginalspec,
                                    
                            ));
                            echo "<div class='alert alert-success'>" . $stmtitemadd->rowCount() . ' Record Inserted.</div>';
                            echo "<a href='adforsale.php?do=Add' class='btn btn-secondary'><ion-icon name='return-up-back-outline'></ion-icon> Return to Add For Sale page.</a>";
                        }
                    }
            }
            else{
                echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                echo "<a href='adforsale.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to For Sale page.</a>";
                }
            echo '</div>';
        }
        include $tpl . 'footer.php';
    }
    else{
        header('Location:index.php');
        exit();
    }
ob_end_flush();
?>