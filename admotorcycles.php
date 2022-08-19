<?php 
error_reporting(0);
ob_start();
session_start();
$pageTitle="New Motorcycles";
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
                                                <label for="name" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Name :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="name" type="text" name="name" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Name Of The Motorcycles">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="phone" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">phone :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="phone" type="text" name="phone" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="phone Of The Motorcycles">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="price" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Price :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <input id="price" type="text" name="price" class="forminput form-select-lg" required="required" placeholder="Price Of The Motorcycles"/>
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
                                                <label for="year" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Year :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="year" type="text" name="year" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Year Of The Motorcycles">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="k_mi" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">K_mi :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="k_mi" type="text" name="k_mi" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="K_mi Of The Motorcycles">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="Location" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Location :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Location" type="text" name="Location" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Location Of The Motorcycles">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="Description" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Description :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Description" type="text" name="Description" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Description Of The Motorcycles">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Engine Size :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="engine">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "engine", "", "", "Id");
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
                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Seller Type :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="sellertype">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "sellertype", "", "", "Id");
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
                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Warranty :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="warranty">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "warranty", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Final Drive System :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="finaldrivesystem">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "finaldrivesystem", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Manufacturer :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="manufacturer">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "manufacturer", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Usage :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="usagemotor">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "usagemotor", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Type Motor :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="typemotor">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "typemotor", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Wheels :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="wheels">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "wheels", "", "", "Id");
                                                            foreach($allUsers as $user){
                                                                echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg"> 
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <input type="submit" value=" Add " class=" btn-primary btn-lg" />
                                                </div>
                                            </div>
                                        </form>
                                        <div class="the-errors text-center">
                                        <?php
                                                    if(isset($successMsg1)){
                                                        echo '<div class="msg success">' . $successMsg1 . '</div>';
                                                    }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
        elseif($do == 'Insert'){
            echo "<h1 class='text-center h1-member'>Insert Motorscycles</h1>";
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $imageName = $_FILES['image']['name'];
                $imageSize = $_FILES['image']['size'];
                $imageTmp  = $_FILES['image']['tmp_name'];
                $imageTaype= $_FILES['image']['type'];
                $imageAllowedExtension = array("jpeg", "jpg", "png", "gif");

                $imageExtension = strtolower(substr(strrchr($imageName, '.'), 1));
                
                $name       = $_POST['name'];
                $phone       = $_POST['phone'];
                $desc       = $_POST['Description'];
                $category     = $_POST['category'];
                $typemotor     = $_POST['typemotor'];
                $warranty = $_POST['warranty'];
                $Engine = $_POST['engine'];
                $sellertype   = $_POST['sellertype'];
                $finaldrivesystem   = $_POST['finaldrivesystem'];
                $price      = $_POST['price'];
                $Description       = $_POST['Description'];
                $Location      = $_POST['Location'];
                $year       = $_POST['year'];
                $usagemotor    = $_POST['usagemotor'];
                $k_mi       = $_POST['k_mi'];
                $manufacturer  = $_POST['manufacturer'];
                $wheels = $_POST['wheels'];

                $formErrors = array();
                    if(empty($name)){
                        $formErrors[] = 'Name  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($phone)){
                        $formErrors[] = 'phone  Can\'t be<strong>Empty.</strong>';
                    }
                    if($category == 0)
                    {
                        $formErrors[] = 'category Cant\'t be <strong>Empty.</strong>';
                    }
                    if($typemotor == 0)
                    {
                        $formErrors[] = 'typemotor Cant\'t be <strong>Empty.</strong>';
                    }
                    if($warranty == 0)
                    {
                        $formErrors[] = 'warranty Cant\'t be <strong>Empty.</strong>';
                    }
                    if($wheels == 0)
                    {
                        $formErrors[] = 'Wheels Cant\'t be <strong>Empty.</strong>';
                    }
                    if($Engine == 0){
                        $formErrors[] = 'Engine  Can\'t be<strong>Empty.</strong>';
                    }
                    if($sellertype == 0){
                        $formErrors[] = 'sellertype  Can\'t be<strong>Empty.</strong>';
                    }
                    if($finaldrivesystem == 0){
                        $formErrors[] = 'finaldrivesystem  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($price))
                    {
                        $formErrors[] = 'Price Cant\'t be <strong>Empty.</strong>';
                    }
                    if(empty($k_mi))
                    {
                        $formErrors[] = 'k_mi Cant\'t be <strong>Empty.</strong>';
                    }
                    if($manufacturer == 0)
                    {
                        $formErrors[] = 'Manufacturer Cant\'t be <strong>Empty.</strong>';
                    }
                    if(empty($Location))
                    {
                        $formErrors[] = 'You Must Choose the <strong>Location.</strong>';
                    }
                    if(empty($desc))
                    {
                        $formErrors[] = 'You Must Choose the <strong>Description.</strong>';
                    }
                    if(empty($year))
                    {
                        $formErrors[] = 'Year Cant\'t be <strong>Empty.</strong>';
                    }
                    if($usagemotor == 0)
                    {
                        $formErrors[] = 'You Must Choose the <strong>Tyoe Gas.</strong>';
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
                        move_uploaded_file($imageTmp, "admin/Update_Imagemotor\uploads\avatars\\" . $image);
    
                        $check = checkItem("Id", "motorcycles", $name);
                        if($check == 1)
                        {
                            echo '<div class="alert alert-danger">Sorry This Motorscycles Is Exist.</div>';
                            echo "<a href='admotorcycles.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Motorscycles page.</a>";
                        }
                        else{
                        // Drivetrain,Engine,Transmission,Citympg,Highwaympg,sellertype,Interiorcolor,Vin
                            $stmtitemadd = $con->prepare("INSERT INTO
                                                    motorcycles(Name, phone, category, user_Id, warranty, Engine, sellertype, finaldrivesystem, Price, Add_date, Image, Description, Location, Year, usagemotor, k_mi, manufacturer, wheels, typemotor, Approve)
                                                    VALUES(:zname, :zphone, :zcategory, :zuser, :zwarranty, :zEngine, :zsellertype, :zfinaldrivesystem, :zprice, now(), :zimage, :zDescription, :zLocation, :zyear, :zusagemotor, :zk_mi, :zmanufacturer, :zwheels, :ztypemotor, 1)");
                            $stmtitemadd->execute(array(
                                    'zname'     => $name,
                                    'zuser'     => $_SESSION['uid'],
                                    'zphone'    => $phone,
                                    'zcategory' =>$category,
                                    'zwarranty'   => $warranty,
                                    'zEngine' => $Engine,
                                    'zsellertype' => $sellertype,
                                    'zfinaldrivesystem' => $finaldrivesystem,
                                    // 'zdesc'     => $desc,
                                    'zprice'    => $price,
                                    'zimage'    => $image,
                                    'zDescription'     => $desc,
                                    'zLocation'    => $Location,
                                    'zyear'     => $year,
                                    'zusagemotor'  => $usagemotor,
                                    'zk_mi'     => $k_mi,
                                    'zmanufacturer'=> $manufacturer,
                                    'zwheels' => $wheels,
                                    'ztypemotor' => $typemotor
                            ));
                            echo "<div class='alert alert-success'>" . $stmtitemadd->rowCount() . ' Record Inserted.</div>';
                            echo "<a href='admotorcycles.php?do=Add' class='btn btn-secondary'><ion-icon name='return-up-back-outline'></ion-icon> Return to Add Motorscycles page.</a>";
                        }
                    }
            }
            else{
                echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                echo "<a href='admotorcycles.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Motorscycles page.</a>";
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