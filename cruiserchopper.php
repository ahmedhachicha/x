<?php 
ob_start();
session_start();
$pageTitle="New Motorcycles";
    if(isset($_SESSION['user']))
    {
        include 'init.php';
        
        $do = isset($_GET['do']) ? $_GET['do'] : 'Add';
        if($do == 'Add'){
            ?>
            <div class="container" style="margin-top: 20px;text-align:center;">
            <div class="row content">
                <div id="tax-category-list">

                    <div class="paaTitle">
                        <h1 class="aditemscomp">
                            You’re almost there!
                        </h1>
                        <p class="aditemscompp">
                            Include as much details and pictures as possible, and set the right price!
                        </p>
                    </div>

                </div>
            </div>    
            </div>

            <div class="container">
            <div class="create block">
                            <div class="panel-body">
                                    <div class="row">
                                        <div class="row1 col-lg-4">
                                            <form class="form-horizontal needs-validation" action="?do=Inserted" method="POST" enctype="multipart/form-data" novalidate>
                                                <script>
                                                    (function () {
                                                        'use strict'
                                                        var forms = document.querySelectorAll('.needs-validation')
                                                        Array.prototype.slice.call(forms)
                                                        .forEach(function (form) {
                                                            form.addEventListener('submit', function (event) {
                                                            if (!form.checkValidity()) {
                                                                event.preventDefault()
                                                                event.stopPropagation()
                                                            }
                                                            form.classList.add('was-validated')
                                                            }, false)
                                                        })
                                                    })()
                                                </script>
                                                <a href="motorcycles.php" class="linkfrom">Motors > Cruiser / Chopper</a>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Motorcycles" name="category" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Motorcycles > Motors > Cruiser / Chopper" name="categoryy" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Cruiser / Chopper mocr" name="typemotor" class="forminput form-select-lg" autocomplete="off" required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php echo locate(); ?>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="name" class="form-control forminput form-select-lg" autocomplete="off" required="required" placeholder="Title">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="tel" name="phone" pattern="[0]{1}[5]{1}[0-9]{8}" class="form-control forminput form-select-lg" autocomplete="off" required="required" placeholder="Phone Number">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            Valid phone number
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="price" class="form-control forminput form-select-lg" pattern="\d{0,9}" autocomplete="off" required="required" placeholder="Price">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            Enter a number.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <textarea class=" form input_contact" name="description" rows="4" cols="38" required="required" placeholder="Describe your Cruiser / Chopper"></textarea>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php echo images(); ?>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="usagemotor" required="required" >
                                                            <option  value="">Usage</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "usagemotor", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="Interiorcolor" type="text"pattern="\d{0,9}"name="k_mi" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Kilometers">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            Enter a number.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="year" required="required" >
                                                            <option  value="">Year</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "year", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="sellertype" required="required" >
                                                            <option  value="">Seller type</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "sellertype", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="finaldrivesystem" required="required" >
                                                            <option  value="">Final Drive System</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "finaldrivesystem", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="wheels" required="required" >
                                                            <option  value="">Wheels</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "wheels", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="manufacturer" required="required" >
                                                            <option  value="" >Manufacturer</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "manufacturer", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="engine" required="required" >
                                                            <option  value="">Engine Size</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "engine", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="warranty" required="required" >
                                                            <option  value="">Warranty</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "warranty", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <?php echo location(); ?>
                                            <div class="form-group form-group-lg formmarginad" style="text-align: center;"> 
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                    <input type="submit" value=" Next " class=" btn-primary forminput"/>
                                                </div>
                                            </div><?php getlink()?>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                            </div>
            </div>
            </div>

            <?php
        }
        elseif($do == 'Inserted'){
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                ?>
                <div class="create block">
                    <div class="container">
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="row1 col-lg-4">
                                        <form class="form-horizontal" action="?do=Insertpayment" method="POST" enctype="multipart/form-data">
                                        <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <?php
                                                            $data = '';
                                                            foreach($_FILES['image']['name'] as $key=>$val)
                                                            {
                                                                $imageName = $_FILES['image']['name'][$key];
                                                                $imageSize = $_FILES['image']['size'][$key];
                                                                $imageTmp  = $_FILES['image']['tmp_name'][$key];
                                                                $imageTaype= $_FILES['image']['type'][$key];
                                                                $imageAllowedExtension = array("jpeg", "jpg", "png", "gif");
                                                                $imageExtension = strtolower(substr(strrchr($imageName, '.'), 1));
                                                                    $image = rand(0, 100000000) . '_' . $imageExtension . rand(0, 10000);
                                                                    move_uploaded_file($imageTmp, "admin/Update_Imagemotor/uploads/avatars/" . $image);
                                                                    $data   .= $image." ";
                                                            }    
                                                        ?>
                                                        <input type="hidden" name="data" value="<?php echo $data ?>">
                                                    </div>
                                                </div>
                                            </div> 
                    <?php echo Safetyfirst(); ?> 
                                            <input id="title" type="hidden" name="phone" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['phone'] ?>" />
                                            <input id="title" type="hidden" name="category" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['category'] ?>"   />
                                            <input id="title" type="hidden" name="categoryy" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['categoryy'] ?>"   />
                                            <input id="title" type="hidden" name="typemotor" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['typemotor'] ?>"   />
                                            <input id="title" type="hidden" name="year" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['year'] ?>" />    
                                            <input id="title" type="hidden" name="price" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['price'] ?>"  />
                                            <input id="title" type="hidden" name="k_mi" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['k_mi'] ?>"   />      
                                            <input id="title" type="hidden" name="location" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['location']; ?>"  />
                                            <input id="title" type="hidden" name="name" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['name'] ?>"  />    
                                            <input id="title" type="hidden" name="description" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['description'] ?>" /> 
                                            <?php
                                                                            $usagemotor = $_POST['usagemotor'];
                                                                            $getusagemotor = $con->prepare("SELECT * FROM usagemotor WHERE Id = $usagemotor");
                                                                            $getusagemotor->execute();
                                                                            $info = $getusagemotor->fetch();
                                                                            $nameusagemotor = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="usagemotor" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameusagemotor ?>" /> 
                                            <?php
                                                                            $sellertype = $_POST['sellertype'];
                                                                            $getsellertype = $con->prepare("SELECT * FROM sellertype WHERE Id = $sellertype");
                                                                            $getsellertype->execute();
                                                                            $info = $getsellertype->fetch();
                                                                            $namesellertype = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="sellertype" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namesellertype ?>" /> 
                                            <?php
                                                                            $finaldrivesystem = $_POST['finaldrivesystem'];
                                                                            $getfinaldrivesystem = $con->prepare("SELECT * FROM finaldrivesystem WHERE Id = $finaldrivesystem");
                                                                            $getfinaldrivesystem->execute();
                                                                            $info = $getfinaldrivesystem->fetch();
                                                                            $namefinaldrivesystem = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="finaldrivesystem" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namefinaldrivesystem ?>" /> 
                                            <?php
                                                                            $wheels = $_POST['wheels'];
                                                                            $getwheels = $con->prepare("SELECT * FROM wheels WHERE Id = $wheels");
                                                                            $getwheels->execute();
                                                                            $info = $getwheels->fetch();
                                                                            $namewheels = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="wheels" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namewheels ?>" /> 
                                            <?php
                                                                            $manufacturer = $_POST['manufacturer'];
                                                                            $getmanufacturer = $con->prepare("SELECT * FROM manufacturer WHERE Id = $manufacturer");
                                                                            $getmanufacturer->execute();
                                                                            $info = $getmanufacturer->fetch();
                                                                            $namemanufacturer = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="manufacturer" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namemanufacturer ?>" /> 
                                            <?php
                                                                            $engine = $_POST['engine'];
                                                                            $getengine = $con->prepare("SELECT * FROM engine WHERE Id = $engine");
                                                                            $getengine->execute();
                                                                            $info = $getengine->fetch();
                                                                            $nameengine = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="engine" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameengine ?>" /> 
                                                                    <?php
                                                                            $warranty = $_POST['warranty'];
                                                                            $getwarranty = $con->prepare("SELECT * FROM warranty WHERE Id = $warranty");
                                                                            $getwarranty->execute();
                                                                            $info = $getwarranty->fetch();
                                                                            $namewarranty = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="warranty" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namewarranty ?>" /> 
                                                                    <?php   
                                                                            $locationcars   = $_POST['locationcars'];
                                                                            $getlocationcars = $con->prepare("SELECT * FROM locationcars WHERE Id = $locationcars");
                                                                            $getlocationcars->execute();
                                                                            $info = $getlocationcars->fetch();
                                                                            $namelocationcars = $info['Name']; ?>  
                                                                    <input id="title" type="hidden" name="locationcars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namelocationcars ?>"  />
                                            <div class="form-group form-group-lg " style="text-align: center;"> 
                                                <div class="row">
                                                    <div class="d-grid gap-2 col-6 ">
                                                        <input type="submit" value=" Yes I agree!" class=" btn-primary forminput "/>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


           <?php }

        }
        elseif($do == 'Insertpayment'){
                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                    {
                        $data = $_POST['data'];
                        $name       = $_POST['name'];
                        $phone       = $_POST['phone'];
                        $desc       = $_POST['description'];
                        $category     = $_POST['category'];
                        $typemotor     = $_POST['typemotor'];
                        $warranty = $_POST['warranty'];
                        $Engine = $_POST['engine'];
                        $sellertype   = $_POST['sellertype'];
                        $finaldrivesystem   = $_POST['finaldrivesystem'];
                        $price      = $_POST['price'];
                        $Location      = $_POST['location'];
                        $year       = $_POST['year'];
                        $usagemotor    = $_POST['usagemotor'];
                        $k_mi       = $_POST['k_mi'];
                        $manufacturer  = $_POST['manufacturer'];
                        $wheels = $_POST['wheels'];
                        $locationcars   = $_POST['locationcars'];
                        $categoryy     = $_POST['categoryy'];
                        $formErrors = array();
                            if(empty($name)){
                                $formErrors[] = 'Name  Can\'t be<strong>Empty.</strong>';
                            }
                            foreach($formErrors as $error){
                                echo '<div class="alert alert-danger">' . $error . '</div>';
                            }
                            if(empty($formErrors))
                            {
                                $check = checkItem("Id", "motorcycles", $name);
                                if($check == 1)
                                {
                                    echo '<div class="alert alert-danger">Sorry This Motorscycles Is Exist.</div>';
                                    echo "<a href='admotorcycles.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Motorscycles page.</a>";
                                }
                                else{
                                    $stmtitemadd = $con->prepare("INSERT INTO
                                                            motorcycles(Image, locationcars, Name, phone, category, categoryy , user_Id, warranty, Engine, sellertype, finaldrivesystem, Price, Add_date, Description, Location, Year, usagemotor, k_mi, manufacturer, wheels, typemotor, Approve)
                                                            VALUES(:zimage, :zlocate, :zname, :zphone, :zcategory, :zcategoryy, :zuser, :zwarranty, :zEngine, :zsellertype, :zfinaldrivesystem, :zprice, now(), :zDescription, :zLocation, :zyear, :zusagemotor, :zk_mi, :zmanufacturer, :zwheels, :ztypemotor, 1)");
                                    $stmtitemadd->execute(array(
                                            'zlocate'   => $locationcars,
                                            'zimage'   => $data,
                                            'zname'     => $name,
                                            'zuser'     => $_SESSION['uid'],
                                            'zphone'    => $phone,
                                            'zcategory' =>$category,
                                            'zcategoryy' => $categoryy,
                                            'zwarranty'   => $warranty,
                                            'zEngine' => $Engine,
                                            'zsellertype' => $sellertype,
                                            'zfinaldrivesystem' => $finaldrivesystem,
                                            'zprice'    => $price,
                                            'zDescription'     => $desc,
                                            'zLocation'    => $Location,
                                            'zyear'     => $year,
                                            'zusagemotor'  => $usagemotor,
                                            'zk_mi'     => $k_mi,
                                            'zmanufacturer'=> $manufacturer,
                                            'zwheels' => $wheels,
                                            'ztypemotor' => $typemotor
                                    ));
                                    echo finads();  }
                            }
                    }
                    else{
                        echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                        echo "<a href='admotorcycles.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Motorscycles page.</a>";
                        }
        }
        include $tpl . 'footer.php';
    }
    else{
        header('Location:index.php');
        exit();
    }
ob_end_flush();
?>