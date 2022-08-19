<?php 
error_reporting(0);
ob_start();
session_start();
$pageTitle="New Boats ";
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
                                                 <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Type Boats  :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="typeboats">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "typeboats", "", "", "Id");
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
                                                        <input id="name" type="text" name="name" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Name Of The Boats">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="phone" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">phone :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="phone" type="text" name="phone" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="phone Of The Boats">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="Location" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Location :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Location" type="text" name="Location" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Location Of The Boats">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="Description" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Description :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Description" type="text" name="Description" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Description Of The Boats">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="price" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Price :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <input id="price" type="text" name="price" class="forminput form-select-lg" required="required" placeholder="Price Of The Boats"/>
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
                                                        <input id="year" type="text" name="year" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Year Of The Boats">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Seller boats :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="sellerboats">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "sellerboats", "", "", "Id");
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
                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">lengthboats :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="lengthboats">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "lengthboats", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">warrantyboats :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="warrantyboats">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "warrantyboats", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">usageboats :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="usageboats">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "usageboats", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">ageboats :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="ageboats">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "ageboats", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">condition boats :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="conditionboats">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "conditionboats", "", "", "Id");
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
            echo "<h1 class='text-center h1-member'>Insert Boats</h1>";
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
                $category     = $_POST['category'];
                $typeboats     = $_POST['typeboats'];
                $conditionboats     = $_POST['conditionboats'];
                $ageboats   = $_POST['ageboats'];
                $price      = $_POST['price'];
                $phone      = $_POST['phone'];
                $desc       = $_POST['Description'];
                $Location      = $_POST['Location'];
                $sellerboats    = $_POST['sellerboats'];
                $usageboats = $_POST['usageboats'];
                $warrantyboats = $_POST['warrantyboats'];
                $lengthboats = $_POST['lengthboats'];

                $formErrors = array();
                    if(empty($name)){
                        $formErrors[] = 'Name  Can\'t be<strong>Empty.</strong>';
                    }
                    if($typeboats == 0)
                    {
                        $formErrors[] = 'Type Boats Cant\'t be <strong>Empty.</strong>';
                    }
                    if($conditionboats == 0)
                    {
                        $formErrors[] = 'conditionboats Cant\'t be <strong>Empty.</strong>';
                    }
                    if($warrantyboats == 0)
                    {
                        $formErrors[] = 'warrantyboats Cant\'t be <strong>Empty.</strong>';
                    }
                    if($lengthboats == 0)
                    {
                        $formErrors[] = 'lengthboats Cant\'t be <strong>Empty.</strong>';
                    }
                    if($usageboats == 0)
                    {
                        $formErrors[] = 'usageboats Cant\'t be <strong>Empty.</strong>';
                    }
                    if($ageboats == 0){
                        $formErrors[] = 'ageboats  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($price))
                    {
                        $formErrors[] = 'Price Cant\'t be <strong>Empty.</strong>';
                    }
                    if(empty($phone))
                    {
                        $formErrors[] = 'phone Cant\'t be <strong>Empty.</strong>';
                    }
                    if(empty($desc))
                    {
                        $formErrors[] = 'You Must Choose the <strong>Description.</strong>';
                    }
                    if($category == 0)
                    {
                        $formErrors[] = 'You Must Choose the <strong>category.</strong>';
                    }
                    if(empty($Location))
                    {
                        $formErrors[] = 'You Must Choose the <strong>Location.</strong>';
                    }
                    if($sellerboats == 0)
                    {
                        $formErrors[] = 'You Must Choose the <strong>sellerboats.</strong>';
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
                        move_uploaded_file($imageTmp, "admin\Update_Imageboats\uploads\avatars\\" . $image);
    
                        $check = checkItem("Id", "boats", $name);
                        if($check == 1)
                        {
                            echo '<div class="alert alert-danger">Sorry This Boats Is Exist.</div>';
                            echo "<a href='adboats.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Boats page.</a>";
                        }
                        else{
                            $stmtitemadd = $con->prepare("INSERT INTO
                            boats(Name, user_Id, price, phone, Add_date, Image, typeboats, conditionboats, category, ageboats, Description, Location, usageboats, warrantyboats, lengthboats, sellerboats, Approve)
                            VALUES(:zname, :zuser, :zprice, :zphone, now(), :zimage, :ztypeboats, :zconditionboats, :zcategory, :zageboats, :zDescription, :zLocation, :zusageboats, :zwarrantyboats, :zlengthboats, :zsellerboats, 1)");
            $stmtitemadd->execute(array(
                    'zname'     => $name,
                    'zuser'     => $_SESSION['uid'],
                    'zlengthboats'=>$lengthboats,
                    'zageboats' => $ageboats,
                    'zprice'    => $price,
                    'zphone'    => $phone,            
                    'zimage'    => $image,
                    'ztypeboats'     => $typeboats,
                    'zDescription'     => $desc,
                    'zLocation'    => $Location,
                    'zsellerboats'  => $sellerboats,
                    'zusageboats' => $usageboats,
                    'zconditionboats' => $conditionboats,
                    'zwarrantyboats' =>$warrantyboats,
                    'zcategory' => $category
                            ));
                            echo "<div class='alert alert-success'>" . $stmtitemadd->rowCount() . ' Record Inserted.</div>';
                            echo "<a href='adboats.php?do=Add' class='btn btn-secondary'><ion-icon name='return-up-back-outline'></ion-icon> Return to Add Boats page.</a>";
                        }
                    }
            }
            else{
                echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                echo "<a href='adboats.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Boats page.</a>";
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