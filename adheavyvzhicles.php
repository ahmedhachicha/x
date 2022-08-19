<?php 
error_reporting(0);
ob_start();
session_start();
$pageTitle="New Heavy Vehicles ";
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
                                                <div class="row ">
                                                 <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Type Heavy Vehicles  :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="typeheavy">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "typeheavy", "", "", "Id");
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
                                                        <input id="name" type="text" name="name" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Name Of The Heavy Vehicles">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="phone" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">phone :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="phone" type="text" name="phone" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="phone Of The Heavy Vehicles">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="Location" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Location :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Location" type="text" name="Location" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Location Of The Heavy Vehicles">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="Description" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Description :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Description" type="text" name="Description" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Description Of The Heavy Vehicles">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="price" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Price :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <input id="price" type="text" name="price" class="forminput form-select-lg" required="required" placeholder="Price Of The Heavy Vehicles"/>
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
                                                        <input id="year" type="text" name="year" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Year Of The Heavy Vehicles">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="k_mi" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">K_mi :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="k_mi" type="text" name="k_mi" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="K_mi Of The Heavy Vehicles">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="model" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Model :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="model" type="text" name="Model" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The Heavy Vehicles">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="make" class=" col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Make :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="make" type="text" name="Make" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Make Of The Heavy Vehicles">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="Capacity" class=" col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Capacity :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Capacity" type="text" name="Capacity" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Capacity Of The Heavy Vehicles">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="Weight" class=" col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Weight :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Weight" type="text" name="Weight" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Weight Of The Heavy Vehicles">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Seller Type :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="sellertypeheavy">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "sellertypeheavy", "", "", "Id");
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
                                                    <select class="form-select forminput" aria-label="Default select example" name="warrantyheavy">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "warrantyheavy", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">bodytypeheavy :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="bodytypeheavy">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "bodytypeheavy", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">cylindersheavy :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="cylindersheavy">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "cylindersheavy", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">horsepower :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="horsepower">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "horsepower", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Fuel Type :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="fueltype">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "fueltype", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Mechanical :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="mechanicalheavy">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "mechanicalheavy", "", "", "Id");
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
        elseif($do == 'Insert'){
            echo "<h1 class='text-center h1-member'>Insert Heavy Vehicles</h1>";
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
                $desc       = $_POST['Description'];
                $typeheavy     = $_POST['typeheavy'];
                $sellertypeheavy   = $_POST['sellertypeheavy'];
                $price      = $_POST['price'];
                $Description       = $_POST['Description'];
                $Location      = $_POST['Location'];
                $year       = $_POST['year'];
                $mechanicalheavy    = $_POST['mechanicalheavy'];
                $bodytypeheavy = $_POST['bodytypeheavy'];
                $cylindersheavy = $_POST['cylindersheavy'];
                $horsepower = $_POST['horsepower'];
                $warrantyheavy = $_POST['warrantyheavy'];
                $fueltype = $_POST['fueltype'];
                $Make = $_POST['Make'];
                $Model = $_POST['Model'];
                $Capacity = $_POST['Capacity'];
                $category     = $_POST['category'];
                $k_mi = $_POST['k_mi'];
                $Weight = $_POST['Weight'];

                $formErrors = array();
                    if(empty($name)){
                        $formErrors[] = 'Name  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($Make)){
                        $formErrors[] = 'Make  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($Model)){
                        $formErrors[] = 'Model  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($Capacity)){
                        $formErrors[] = 'Capacity  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($Weight)){
                        $formErrors[] = 'Weight  Can\'t be<strong>Empty.</strong>';
                    }
                    if($typeheavy == 0)
                    {
                        $formErrors[] = 'typeheavytypeheavy Cant\'t be <strong>Empty.</strong>';
                    }
                    if($cylindersheavy == 0)
                    {
                        $formErrors[] = 'cylindersheavy Cant\'t be <strong>Empty.</strong>';
                    }
                    if($fueltype == 0)
                    {
                        $formErrors[] = 'fueltype Cant\'t be <strong>Empty.</strong>';
                    }
                    if($warrantyheavy == 0)
                    {
                        $formErrors[] = 'warrantyheavy Cant\'t be <strong>Empty.</strong>';
                    }
                    if($horsepower == 0)
                    {
                        $formErrors[] = 'horsepower Cant\'t be <strong>Empty.</strong>';
                    }
                    if($bodytypeheavy == 0)
                    {
                        $formErrors[] = 'bodytypeheavy Cant\'t be <strong>Empty.</strong>';
                    }
                    if($sellertypeheavy == 0){
                        $formErrors[] = 'sellertypeheavy  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($price))
                    {
                        $formErrors[] = 'Price Cant\'t be <strong>Empty.</strong>';
                    }
                    if(empty($k_mi))
                    {
                        $formErrors[] = 'k_mi Cant\'t be <strong>Empty.</strong>';
                    }
                    if($category == 0)
                    {
                        $formErrors[] = 'category Cant\'t be <strong>Empty.</strong>';
                    }
                    if(empty($desc))
                    {
                        $formErrors[] = 'You Must Choose the <strong>Description.</strong>';
                    }
                    if($Location == 0)
                    {
                        $formErrors[] = 'You Must Choose the <strong>Location.</strong>';
                    }
                    if(empty($year))
                    {
                        $formErrors[] = 'Year Cant\'t be <strong>Empty.</strong>';
                    }
                    if($mechanicalheavy == 0)
                    {
                        $formErrors[] = 'You Must Choose the <strong>Mechanical.</strong>';
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
                        move_uploaded_file($imageTmp, "admin/Update_Imageheavry\uploads\avatars\\" . $image);
    
                        $check = checkItem("Id", "heavyvzhicles", $name);
                        if($check == 1)
                        {
                            echo '<div class="alert alert-danger">Sorry This Heavy Vehicles Is Exist.</div>';
                            echo "<a href='adheavyvzhicles.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Heavy Vehicles page.</a>";
                        }
                        else{
                        // Drivetrain,Engine,Transmission,Citympg,Highwaympg,sellertypeheavy,Interiorcolor,Vin
                            $stmtitemadd = $con->prepare("INSERT INTO
                                                    heavyvzhicles(Name, category, Make, Model, Capacity, Weight, user_Id, fueltype, warrantyheavy, horsepower, sellertypeheavy, Price, Add_date, Image, Description, Location, Year, mechanicalheavy, k_mi, bodytypeheavy, typeheavy, cylindersheavy, Approve)
                                                    VALUES(:zname, :zcategory, :zmake, :zmodel, :zcapacity, :zweight, :zuser, :zfueltype, :zwarrantyheavy, :zhorsepower, :zsellertypeheavy,:zprice, now(), :zimage, :zDescription, :zLocation, :zyear, :zmechanicalheavy, :zk_mi, :zbodytypeheavy, :ztypeheavy, :zcylindersheavy, 1)");
                            $stmtitemadd->execute(array(
                                    'zname'     => $name,
                                    'zcategory' => $category,
                                    'zmake'     => $Make,
                                    'zmodel'    => $Model,
                                    'zcapacity' => $Capacity,
                                    'zweight'   => $Weight,
                                    'zuser'     => $_SESSION['uid'],
                                    'zfueltype'     => $fueltype,
                                    'zwarrantyheavy'=>$warrantyheavy,
                                    'zhorsepower'=>$horsepower,
                                    'zsellertypeheavy' => $sellertypeheavy,
                                    'zprice'    => $price,
                                    'zimage'    => $image,
                                    'zDescription'     => $desc,
                                    'zLocation'    => $Location,
                                    'zyear'     => $year,
                                    'zmechanicalheavy'  => $mechanicalheavy,
                                    'zk_mi' =>$k_mi,
                                    'zbodytypeheavy' => $bodytypeheavy,
                                    'ztypeheavy' => $typeheavy,
                                    'zcylindersheavy' =>$cylindersheavy
                            ));
                            echo "<div class='alert alert-success'>" . $stmtitemadd->rowCount() . ' Record Inserted.</div>';
                            echo "<a href='adheavyvzhicles.php?do=Add' class='btn btn-secondary'><ion-icon name='return-up-back-outline'></ion-icon> Return to Add Heavy Vehicles page.</a>";
                        }
                    }
            }
            else{
                echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                echo "<a href='adheavyvzhicles.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Heavy Vehicles page.</a>";
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