<?php 
ob_start();
session_start();
$pageTitle="New Heavy Vehicles";
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
                                                <a href="partsenginesheavy.php" class="linkfrom">Parts & Engines > Other</a>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="heavy" name="category" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Heavy Vehicles > Parts & Engines > Other" name="categoryy" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Other parehyvy" name="typeheavy" class="forminput form-select-lg" autocomplete="off" required="required">
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
                                                        <textarea class=" form input_contact" name="description" rows="4" cols="38" required="required" placeholder="Describe your item"></textarea>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><?php echo images(); ?>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="k_mi" pattern="\d{0,9}" class="form-control forminput form-select-lg" autocomplete="off" required="required" placeholder="Kilometers">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            Enter a number.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="bodytypeheavy" required="required" >
                                                            <option  value="" >Body Condition </option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "bodytypeheavy", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="mechanicalheavy" required="required" >
                                                            <option  value="" >Mechanical Condition </option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "mechanicalheavy", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="year" required="required" >
                                                            <option  value="" >Year </option>
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="sellertypeheavy" required="required" >
                                                            <option  value="" >Seller Type </option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "sellertypeheavy", "", "", "Id");
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
                                                            <input id="name" type="text" name="make" class="form-control forminput form-select-lg" autocomplete="off" required="required" placeholder="Make">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="model" class="form-control forminput form-select-lg" autocomplete="off" required="required" placeholder="Model">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="capacity" class="form-control forminput form-select-lg" autocomplete="off" required="required" placeholder="Capacity">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="weight" class="form-control forminput form-select-lg" autocomplete="off" required="required" placeholder="Weight">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="cylinders" required="required" >
                                                            <option  value="" >No. of Cylinders</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "cylindersheavy", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="horsepower" required="required" >
                                                            <option  value="" >Horsepower</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "horsepower", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="warrantyheavy" required="required" >
                                                            <option  value="">Wrranty</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "warrantyheavy", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="fueltype" required="required" >
                                                            <option  value="">Fuel Type</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "fueltype", "", "", "Id");
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
                                                                    move_uploaded_file($imageTmp, "admin/Update_Imageheavry/uploads/avatars/" . $image);
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
                                            <input id="title" type="hidden" name="typeheavy" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['typeheavy'] ?>"   />  
                                            <input id="title" type="hidden" name="price" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['price'] ?>"  />    
                                            <input id="title" type="hidden" name="location" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['location']; ?>"  />
                                            <input id="title" type="hidden" name="name" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['name'] ?>"  />    
                                            <input id="title" type="hidden" name="description" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['description'] ?>" /> 
                                            <input id="title" type="hidden" name="year" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['year'] ?>" /> 
                                            <input id="title" type="hidden" name="make" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['make'] ?>" /> 
                                            <input id="title" type="hidden" name="model" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['model'] ?>" /> 
                                            <input id="title" type="hidden" name="capacity" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['capacity'] ?>" /> 
                                            <input id="title" type="hidden" name="weight" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['weight'] ?>" /> 
                                            <input id="title" type="hidden" name="k_mi" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['k_mi'] ?>" /> 
                                            <?php   
                                                                            $locationcars   = $_POST['locationcars'];
                                                                            $getlocationcars = $con->prepare("SELECT * FROM locationcars WHERE Id = $locationcars");
                                                                            $getlocationcars->execute();
                                                                            $info = $getlocationcars->fetch();
                                                                            $namelocationcars = $info['Name']; ?>  
                                                                    <input id="title" type="hidden" name="locationcars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namelocationcars ?>"  />
                                            <?php   
                                                                            $cylindersheavy   = $_POST['cylinders'];
                                                                            $getcylindersheavy = $con->prepare("SELECT * FROM cylindersheavy WHERE Id = $cylindersheavy");
                                                                            $getcylindersheavy->execute();
                                                                            $info = $getcylindersheavy->fetch();
                                                                            $namecylindersheavy = $info['Name']; ?>  
                                                                    <input id="title" type="hidden" name="cylinders" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namecylindersheavy ?>"  />
                                            <?php
                                                                            $bodyheavy = $_POST['bodytypeheavy'];
                                                                            $getbodyheavy = $con->prepare("SELECT * FROM bodytypeheavy WHERE Id = $bodyheavy");
                                                                            $getbodyheavy->execute();
                                                                            $info = $getbodyheavy->fetch();
                                                                            $namebodyheavy = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="bodytypeheavy" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namebodyheavy ?>" /> 
                                            <?php
                                                                            $mechanicalheavy = $_POST['mechanicalheavy'];
                                                                            $getmechanicalheavy = $con->prepare("SELECT * FROM mechanicalheavy WHERE Id = $mechanicalheavy");
                                                                            $getmechanicalheavy->execute();
                                                                            $info = $getmechanicalheavy->fetch();
                                                                            $namemechanicalheavy = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="mechanicalheavy" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namemechanicalheavy ?>" /> 
                                            <?php
                                                                            $sellertypeheavy = $_POST['sellertypeheavy'];
                                                                            $getsellertypeheavy = $con->prepare("SELECT * FROM sellertypeheavy WHERE Id = $sellertypeheavy");
                                                                            $getsellertypeheavy->execute();
                                                                            $info = $getsellertypeheavy->fetch();
                                                                            $namesellertypeheavy = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="sellertypeheavy" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namesellertypeheavy ?>" /> 
                                            <?php
                                                                            $horsepower = $_POST['horsepower'];
                                                                            $gethorsepower = $con->prepare("SELECT * FROM horsepower WHERE Id = $horsepower");
                                                                            $gethorsepower->execute();
                                                                            $info = $gethorsepower->fetch();
                                                                            $namehorsepower = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="horsepower" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namehorsepower ?>" /> 
                                            <?php
                                                                            $warrantyheavy = $_POST['warrantyheavy'];
                                                                            $getwarrantyheavy = $con->prepare("SELECT * FROM warrantyheavy WHERE Id = $warrantyheavy");
                                                                            $getwarrantyheavy->execute();
                                                                            $info = $getwarrantyheavy->fetch();
                                                                            $namewarrantyheavy = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="warrantyheavy" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namewarrantyheavy ?>" /> 
                                                                    <?php
                                                                            $fueltype = $_POST['fueltype'];
                                                                            $getfueltype = $con->prepare("SELECT * FROM fueltype WHERE Id = $fueltype");
                                                                            $getfueltype->execute();
                                                                            $info = $getfueltype->fetch();
                                                                            $namefueltype = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="fueltype" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namefueltype ?>" /> 
                                            
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
                        $desc       = $_POST['description'];
                        $typeheavy     = $_POST['typeheavy'];
                        $sellertypeheavy   = $_POST['sellertypeheavy'];
                        $price      = $_POST['price'];
                        $phone      = $_POST['phone'];
                        $Location      = $_POST['location'];
                        $year       = $_POST['year'];
                        $mechanicalheavy    = $_POST['mechanicalheavy'];
                        $bodytypeheavy = $_POST['bodytypeheavy'];
                        $cylindersheavy = $_POST['cylinders'];
                        $horsepower = $_POST['horsepower'];
                        $warrantyheavy = $_POST['warrantyheavy'];
                        $fueltype = $_POST['fueltype'];
                        $Make = $_POST['make'];
                        $Model = $_POST['model'];
                        $Capacity = $_POST['capacity'];
                        $category     = $_POST['category'];
                        $k_mi = $_POST['k_mi'];
                        $Weight = $_POST['weight'];
                        $locationcars   = $_POST['locationcars'];
                        $categoryy     = $_POST['categoryy'];
                                    $stmtitemadd = $con->prepare("INSERT INTO
                                                            heavyvzhicles(Image, locationcars ,categoryy ,Name, category, Make, Model, Capacity, Weight, user_Id, fueltype, warrantyheavy, horsepower, sellertypeheavy, Price, phone, Add_date, Description, Location, Year, mechanicalheavy, k_mi, bodytypeheavy, typeheavy, cylindersheavy, Approve)
                                                            VALUES(:zimage, :zlocate, :zcategoryy, :zname, :zcategory, :zmake, :zmodel, :zcapacity, :zweight, :zuser, :zfueltype, :zwarrantyheavy, :zhorsepower, :zsellertypeheavy,:zprice, :zphone, now(), :zDescription, :zLocation, :zyear, :zmechanicalheavy, :zk_mi, :zbodytypeheavy, :ztypeheavy, :zcylindersheavy, 1)");
                                    $stmtitemadd->execute(array(
                                            'zlocate'   => $locationcars,
                                            'zcategoryy' => $categoryy,
                                            'zimage'    => $data,
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
                                            'zphone'    => $phone,
                                            'zDescription'     => $desc,
                                            'zLocation'    => $Location,
                                            'zyear'     => $year,
                                            'zmechanicalheavy'  => $mechanicalheavy,
                                            'zk_mi' =>$k_mi,
                                            'zbodytypeheavy' => $bodytypeheavy,
                                            'ztypeheavy' => $typeheavy,
                                            'zcylindersheavy' =>$cylindersheavy
                                    ));
                                    echo finads(); 
                    }
                    else{
                        echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                        echo "<a href='adheavyvzhicles.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Heavy Vehicles page.</a>";
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