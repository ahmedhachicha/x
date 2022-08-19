<?php 
error_reporting(0);
ob_start();
session_start();
$pageTitle="New Auto Accessories & Parts ";
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
                                                        <input id="name" type="text" name="name" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Name Of The Auto Accessories & Parts ">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="phone" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">phone :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="phone" type="text" name="phone" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="phone Of The Auto Accessories & Parts ">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="price" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Price :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <input id="price" type="text" name="price" class="forminput form-select-lg" required="required" placeholder="Price Of The Auto Accessories & Parts "/>
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
                                                        <input id="year" type="text" name="year" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Year Of The Auto Accessories & Parts ">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="Location" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Location :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Location" type="text" name="Location" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Location Of The Auto Accessories & Parts ">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="Description" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Description :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Description" type="text" name="Description" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Description Of The Auto Accessories & Parts ">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Type Parts :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="typeparts">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "typeparts", "", "", "Id");
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
                                                    <select class="form-select forminput" aria-label="Default select example" name="sellertypeparts">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "sellertypeparts", "", "", "Id");
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
                                                    <select class="form-select forminput" aria-label="Default select example" name="usageparts">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "usageparts", "", "", "Id");
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
                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">condition parts :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="conditionparts">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "conditionparts", "", "", "Id");
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
            echo "<h1 class='text-center h1-member'>Insert Auto Accessories & Parts</h1>";
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
                $category     = $_POST['category'];
                $desc       = $_POST['Description'];
                $typeparts     = $_POST['typeparts'];
                $sellertypeparts   = $_POST['sellertypeparts'];
                $price      = $_POST['price'];
                $Description       = $_POST['Description'];
                $Location      = $_POST['Location'];
                $year       = $_POST['year'];
                $usageparts    = $_POST['usageparts'];
                $conditionparts = $_POST['conditionparts'];

                $formErrors = array();
                    if(empty($name)){
                        $formErrors[] = 'Name  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($phone)){
                        $formErrors[] = 'phone  Can\'t be<strong>Empty.</strong>';
                    }
                    if($typeparts == 0)
                    {
                        $formErrors[] = 'typepartstypeparts Cant\'t be <strong>Empty.</strong>';
                    }
                    if($conditionparts == 0)
                    {
                        $formErrors[] = 'conditionparts Cant\'t be <strong>Empty.</strong>';
                    }
                    if($sellertypeparts == 0){
                        $formErrors[] = 'sellertypeparts  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($price))
                    {
                        $formErrors[] = 'Price Cant\'t be <strong>Empty.</strong>';
                    }
                    if($desc == 0)
                    {
                        $formErrors[] = 'You Must Choose the <strong>Description.</strong>';
                    }
                    if(empty($Location))
                    {
                        $formErrors[] = 'You Must Choose the <strong>Location.</strong>';
                    }
                    if($category == 0)
                    {
                        $formErrors[] = 'You Must Choose the <strong>category.</strong>';
                    }
                    if(empty($year))
                    {
                        $formErrors[] = 'Year Cant\'t be <strong>Empty.</strong>';
                    }
                    if($usageparts == 0)
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
                        move_uploaded_file($imageTmp, "admin\Update_Imageparts\uploads\avatars\\" . $image);
    
                        $check = checkItem("Id", "autoaccparts", $name);
                        if($check == 1)
                        {
                            echo '<div class="alert alert-danger">Sorry This Auto Accessories & Parts Is Exist.</div>';
                            echo "<a href='adautoAccparts.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Auto Accessories & Parts page.</a>";
                        }
                        else{
                        // Drivetrain,Engine,Transmission,Citympg,Highwaympg,sellertypeparts,Interiorcolor,Vin
                            $stmtitemadd = $con->prepare("INSERT INTO
                                                    autoaccparts(Name, phone, category, user_Id, sellertypeparts, Price, Add_date, Image, Description, Location, Year, usageparts, conditionparts, typeparts, Approve)
                                                    VALUES(:zname, :zphone, :zcategory, :zuser, :zsellertypeparts, :zprice, now(), :zimage, :zDescription, :zLocation, :zyear, :zusageparts, :zconditionparts, :ztypeparts, 1)");
                            $stmtitemadd->execute(array(
                                    'zname'     => $name,
                                    'zphone'    =>$phone,
                                    'zcategory' => $category,
                                    'zuser'     => $_SESSION['uid'],
                                    'zsellertypeparts' => $sellertypeparts,
                                    'zprice'    => $price,
                                    'zimage'    => $image,
                                    'zDescription'     => $desc,
                                    'zLocation'    => $Location,
                                    'zyear'     => $year,
                                    'zusageparts'  => $usageparts,
                                    'zconditionparts' => $conditionparts,
                                    'ztypeparts' => $typeparts
                            ));
                            echo "<div class='alert alert-success'>" . $stmtitemadd->rowCount() . ' Record Inserted.</div>';
                            echo "<a href='adautoAccparts.php?do=Add' class='btn btn-secondary'><ion-icon name='return-up-back-outline'></ion-icon> Return to Add Auto Accessories & Parts page.</a>";
                        }
                    }
            }
            else{
                echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                echo "<a href='adautoAccparts.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Auto Accessories & Parts page.</a>";
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