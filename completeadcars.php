<?php 
error_reporting(0);
ob_start();
session_start();
$pageTitle="New Cars";
    if(isset($_SESSION['user']))
    {
        include 'init.php';
        
        $do = isset($_GET['do']) ? $_GET['do'] : 'Edit';
        if($do == 'Edit'){
            $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
            $stmtmembersidt = $con->prepare("SELECT * FROM products WHERE Id = ? LIMIT 1");
            $stmtmembersidt->execute(array($userid));
            $row = $stmtmembersidt->fetch();
            $count = $stmtmembersidt->rowCount();
            if($count > 0){
                ?>

            <div class="paaTitle">
                <h1 class="aditemscomp">
                    You’re almost there!
                </h1>
                <p class="aditemscompp">
                    Include as much details and pictures as possible, and set the right price!
                </p>
            </div>

                <div class="create block">
                    <div class="container">
                        <div class="panel panel-primary">
                            <!-- <div class="panle-heading">
                                <ion-icon name="add-outline"></ion-icon><php echo $pageTitle ?></div> -->
                            <div class="panel-body">
                                <div class="container">
                                <div class="row">
                                    <div class="row1 col-lg-6">
                                        <form class="form-horizontal" action="?do=Insert" method="POST" enctype="multipart/form-data">
                                            <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row ">
                                                 <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Catgory :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="category" required="required" >
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
                                                 <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Type Cars :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="typecars" required="required" >
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "typecars", "", "", "Id");
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
                                                        <input id="name" type="text" name="name" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Name Of The cars">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="phone" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">phone :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="phone" type="text" name="phone" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="phone Of The cars">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="Engine" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Engine :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Engine" type="text" name="Engine" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Engine Of The cars">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="Exteriorcolor" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Exteriorcolor :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Exteriorcolor" type="text" name="Exteriorcolor" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Exteriorcolor Of The cars">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="Interiorcolor" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Interiorcolor :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Interiorcolor" type="text" name="Interiorcolor" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Interiorcolor Of The cars">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="Vin" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Vin :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Vin" type="text" name="Vin" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Vin Of The cars">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="price" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Price :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <input id="price" type="text" name="price" class="forminput form-select-lg" required="required" placeholder="Price Of The cars"/>
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
                                                        <input id="year" type="text" name="year" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Year Of The cars">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="k_mi" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">K_mi :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="k_mi" type="text" name="k_mi" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="K_mi Of The cars">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="model" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Model :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="model" type="text" name="model" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">

                                                <label for="make" class=" col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Make :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="make" type="text" name="make" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Make Of The cars">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Status :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="status" required="required" >
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "status", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Location :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="location" required="required" >
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "locationcars", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Type Model :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="typemodelcars" required="required" >
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "typemodelcars", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Type Gas :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="typegascars" required="required" >
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "typegascars", "", "", "Id");
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

                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Regional Spec :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="regionalspec" required="required" >
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "regionalspec", "", "", "Id");
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
                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Insured:</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="insured" required="required" >
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <option value="1">Yes</option>
                                                        <option value="2">No</option>
                                                    </select>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label"> Check:</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <div class="radiomargin">
                                                        <input id="ads-yes" type="radio" value="0" checked name="check"/>
                                                        <label for="ads-yes" class="choix ">yes </label>
                                                        <input id="ads-no" type="radio" value="1" name="check"/>
                                                        <label for="ads-no" class="choix ">no</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg"> 
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <input type="submit" value=" Add " class=" btn-primary btn-lg"/>
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
    }
        elseif($do == 'Insert'){
            echo "<h1 class='text-center h1-member'>Insert Cars</h1>";
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                // if(isset($_POST['image']) || isset($_POST['name'])|| isset($_POST['phone'])|| isset($_POST['user'])|| isset($_POST['category'])|| isset($_POST['insured'])|| isset($_POST['Engine'])|| isset($_POST['Exteriorcolor'])|| isset($_POST['Interiorcolor'])|| isset($_POST['Vin'])|| isset($_POST['price'])|| isset($_POST['status'])|| isset($_POST['make'])|| isset($_POST['model'])|| isset($_POST['location'])|| isset($_POST['year'])|| isset($_POST['typegascars'])|| isset($_POST['regionalspec'])|| isset($_POST['k_mi'])|| isset($_POST['typemodelcars'])){
                $imageName = $_FILES['image']['name'];
                $imageSize = $_FILES['image']['size'];
                $imageTmp  = $_FILES['image']['tmp_name'];
                $imageTaype= $_FILES['image']['type'];
                $imageAllowedExtension = array("jpeg", "jpg", "png", "gif");

                $imageExtension = strtolower(substr(strrchr($imageName, '.'), 1));                    
                // }
                $check       = $_POST['check'];
                $name       = $_POST['name'];
                $typecars       = $_POST['typecars'];
                $phone       = $_POST['phone'];
                $category     = $_POST['category'];
                $Insured = $_POST['insured'];
                $Engine = $_POST['Engine'];
                $Exteriorcolor   = $_POST['Exteriorcolor'];
                $Interiorcolor   = $_POST['Interiorcolor'];
                $Vin   = $_POST['Vin'];
                $price      = $_POST['price'];
                $status     = $_POST['status'];
                $make       = $_POST['make'];
                $model      = $_POST['model'];
                $location   = $_POST['location'];
                $year       = $_POST['year'];
                $typegas    = $_POST['typegascars'];
                $k_mi       = $_POST['k_mi'];
                $typemodel  = $_POST['typemodelcars'];
                $reginalspec = $_POST['regionalspec'];
                
                $formErrors = array();
                    if(empty($name)){
                        $formErrors[] = 'Name  Can\'t be<strong>Empty.</strong>';
                    }
                    if($check == 0){
                        $formErrors[] = 'Check  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($phone)){
                        $formErrors[] = 'Phone  Can\'t be<strong>Empty.</strong>';
                    }
                    if($category == 0)
                    {
                        $formErrors[] = 'Category Cant\'t be <strong>Empty.</strong>';
                    }
                    if($typecars == 0)
                    {
                        $formErrors[] = 'Type Cars Cant\'t be <strong>Empty.</strong>';
                    }
                    if($Insured == 0)
                    {
                        $formErrors[] = 'Insured Cant\'t be <strong>Empty.</strong>';
                    }
                    if($reginalspec == 0)
                    {
                        $formErrors[] = 'regional Spec Cant\'t be <strong>Empty.</strong>';
                    }
                    if(empty($Engine)){
                        $formErrors[] = 'Engine  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($Exteriorcolor)){
                        $formErrors[] = 'Exteriorcolor  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($Interiorcolor)){
                        $formErrors[] = 'Interiorcolor  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($Vin)){
                        $formErrors[] = 'Vin  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($price))
                    {
                        $formErrors[] = 'Price Cant\'t be <strong>Empty.</strong>';
                    }
                    if(empty($k_mi))
                    {
                        $formErrors[] = 'k_mi Cant\'t be <strong>Empty.</strong>';
                    }
                    if($typemodel == 0)
                    {
                        $formErrors[] = 'Type Model Cant\'t be <strong>Empty.</strong>';
                    }
                    if($status == 0)
                    {
                        $formErrors[] = 'You Must Choose the <strong>Status.</strong>';
                    }
                    if($make == 0)
                    {
                        $formErrors[] = 'You Must Choose the <strong>Make.</strong>';
                    }
                    if($model == 0)
                    {
                        $formErrors[] = 'You Must Choose the <strong>Model.</strong>';
                    }
                    if($location == 0)
                    {
                        $formErrors[] = 'You Must Choose the <strong>Location.</strong>';
                    }
                    if(empty($year))
                    {
                        $formErrors[] = 'Year Cant\'t be <strong>Empty.</strong>';
                    }
                    if($typegas == 0)
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
                        // $successMsg1 = '<div class="alert alert-danger">' . $error . '</div>';
                        echo '<div class="alert alert-danger">' . $error . '</div>';
                    }
                    if(empty($formErrors))
                    {
                        $image = rand(0, 100000000) . '_' . $imageName;
                        move_uploaded_file($imageTmp, "admin\Update_Image\uploads\avatars\\" . $image);
    
                        $check = checkItem("Id", "products", $name);
                        if($check == 1)
                        {
                            echo '<div class="alert alert-danger">Sorry This Cars Is Exist.</div>';
                            echo "<a href='adcars.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Cars page.</a>";
                        }
                        else{
                            $stmtitemadd = $con->prepare("INSERT INTO
                                                    products(Name, typecars, phone, user_Id, insured, Engine, Exteriorcolor, Interiorcolor, Vin, Price, Add_date, Image, Status, Make, Model,  Location, Year, TypeGas, k_mi, TypeModel, regionalspec, category, Approve)
                                                    VALUES(:zname, :ztypecars, :zphone, :zuser, :zInsured, :zEngine, :zExteriorcolor, :zInteriorcolor, :zVin, :zprice, now(), :zimage, :zstatus, :zmake, :zmodel, :zlocation, :zyear, :ztypegas, :zk_mi, :ztypemodel, :zreginalspec, :zcategory, 1)");
                            $stmtitemadd->execute(array(
                                    'zname'     => $name,
                                    'ztypecars' => $typecars,
                                    'zphone'    => $phone,
                                    'zuser'     => $_SESSION['uid'],
                                    'zInsured'   => $Insured,
                                    'zEngine' => $Engine,
                                    'zExteriorcolor' => $Exteriorcolor,
                                    'zInteriorcolor' => $Interiorcolor,
                                    'zVin' => $Vin,
                                    'zprice'    => $price,
                                    'zimage'    => $image,
                                    'zstatus'   => $status,
                                    'zmake'     => $make,
                                    'zmodel'    => $model,
                                    'zlocation' => $location,
                                    'zyear'     => $year,
                                    'ztypegas'  => $typegas,
                                    'zk_mi'     => $k_mi,
                                    'ztypemodel'=> $typemodel,
                                    'zreginalspec' => $reginalspec,
                                    'zcategory' => $category
                            ));
                            echo "<div class='alert alert-success'>" . $stmtitemadd->rowCount() . ' Record Inserted.</div>';
                            echo "<a href='adcars.php?do=Add' class='btn btn-secondary'><ion-icon name='return-up-back-outline'></ion-icon> Return to Add Cars page.</a>";
                        }
                    }
            }
            else{
                echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                echo "<a href='adcars.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Cars page.</a>";
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