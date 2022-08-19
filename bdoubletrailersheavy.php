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
                                                <a href="trailersheavy.php" class="linkfrom">Trailers > B Double</a>
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
                                                            <input id="model" type="hidden" value="Heavy Vehicles > Trailers > B Double" name="categoryy" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="B Double trailhyvy" name="typeheavy" class="forminput form-select-lg" autocomplete="off" required="required">
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

            ?>
                <style>
                    .card.divcard {border-radius: 15px;border: none;}
                    .divpayment {border-radius: 5px;
                        background-color: black;
                        color: #fff;
                        border-bottom-right-radius: 0px;
                        border-bottom-left-radius: 0px;
                        border-top-left-radius: 10px;
                        border-top-right-radius: 10px;
                        padding: 6px;
                        font-size: 20px;
                        font-weight: 600;
                        text-align: center;
                    }
                    .divpaymentfont {
                        text-align: center;
                        padding: 6px;
                        background-color: #2BBDFE;
                        color: #fff;
                        text-decoration: underline;
                    }
                    .divpaymentsize {
                        text-align: center;
                        padding: 6px;
                        background-color: #2BBDFE;
                        color: #fff;
                        text-decoration: underline;
                    }
                    .divpaymentsignup {
                        padding: 6px;
                        background-color: #222222;
                        color: #fff;
                        text-align: center;
                        font-size: 20px;
                        font-weight: 600;
                        border-bottom-right-radius: 10px;
                        border-bottom-left-radius: 10px;
                        border-top-left-radius: 0px;
                        border-top-right-radius: 0px;
                    }
                    .submitpayment{
                        background-color:#222222;
                        border:none;
                        color: #fff;
                        font-size: 20px;
                        font-weight: 600;}
                </style>

                <?php

                $getuserpack = $con->prepare("SELECT * FROM package_payment WHERE user_id = {$_SESSION["uid"]}");
                $getuserpack->execute();
                $info = $getuserpack->fetchAll();
                if(empty($info)){
                    echo '<div class="container">';
                        echo '<br><div class="alert alert-danger" role="alert">
                        You dont have a package yet!
                        </div><br>';
                        echo '<div class="row">';
                            echo '<div class="col-lg-3"> <div class="card divcard">';
                                $tokenrand = rand(0, 100000000) . '_' . rand(0, 100000);
                                ?>
                                    <form  class="form-horizontal" action="?do=Insert1" method="POST" enctype="multipart/form-data">
                                    <?php
                                        $_SESSION['data']= $_POST['data'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['desc']       = $_POST['description'];
                                        $_SESSION['typeheavy']     = $_POST['typeheavy'];
                                        $_SESSION['sellertypeheavy']   = $_POST['sellertypeheavy'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['phone']      = $_POST['phone'];
                                        $_SESSION['Location']      = $_POST['location'];
                                        $_SESSION['year']       = $_POST['year'];
                                        $_SESSION['mechanicalheavy']    = $_POST['mechanicalheavy'];
                                        $_SESSION['bodytypeheavy'] = $_POST['bodytypeheavy'];
                                        $_SESSION['cylindersheavy'] = $_POST['cylinders'];
                                        $_SESSION['horsepower'] = $_POST['horsepower'];
                                        $_SESSION['warrantyheavy'] = $_POST['warrantyheavy'];
                                        $_SESSION['fueltype'] = $_POST['fueltype'];
                                        $_SESSION['Make'] = $_POST['make'];
                                        $_SESSION['Model'] = $_POST['model'];
                                        $_SESSION['Capacity'] = $_POST['capacity'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['k_mi'] = $_POST['k_mi'];
                                        $_SESSION['Weight'] = $_POST['weight'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                        $_SESSION['token'] = $tokenrand;

                                        echo '<div class="divpayment">Only One Ad</div>';
                                        echo '<div class="divpaymentfont">for 30 days</div>';
                                        echo '<div class="divpaymentfont">Month</div>';
                                        echo '<div class="divpaymentsize">65 AED</div>';
                                        echo '<div class="divpaymentsignup"><input type="submit" value="Buy Ad" class="submitpayment" ></div>';
                                    ?>
                                </form> <?php
                            echo '</div> </div>';
                            echo '<div class="col-lg-3"> <div class="card divcard">';
                                $tokenrand1 = rand(0, 100000000) . '_' . rand(0, 100000);
                                ?>
                                    <form  class="form-horizontal" action="?do=Insert2" method="POST" enctype="multipart/form-data">
                                        <?php
                                        $_SESSION['data']= $_POST['data'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['desc']       = $_POST['description'];
                                        $_SESSION['typeheavy']     = $_POST['typeheavy'];
                                        $_SESSION['sellertypeheavy']   = $_POST['sellertypeheavy'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['phone']      = $_POST['phone'];
                                        $_SESSION['Location']      = $_POST['location'];
                                        $_SESSION['year']       = $_POST['year'];
                                        $_SESSION['mechanicalheavy']    = $_POST['mechanicalheavy'];
                                        $_SESSION['bodytypeheavy'] = $_POST['bodytypeheavy'];
                                        $_SESSION['cylindersheavy'] = $_POST['cylinders'];
                                        $_SESSION['horsepower'] = $_POST['horsepower'];
                                        $_SESSION['warrantyheavy'] = $_POST['warrantyheavy'];
                                        $_SESSION['fueltype'] = $_POST['fueltype'];
                                        $_SESSION['Make'] = $_POST['make'];
                                        $_SESSION['Model'] = $_POST['model'];
                                        $_SESSION['Capacity'] = $_POST['capacity'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['k_mi'] = $_POST['k_mi'];
                                        $_SESSION['Weight'] = $_POST['weight'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                            $_SESSION['token'] = $tokenrand1;

                                echo '<div class="divpayment">Unlimited Ads 30 days</div>';
                                echo '<div class="divpaymentfont">Each ad has a duration of 30 days</div>';
                                echo '<div class="divpaymentfont">Month</div>';
                                echo '<div class="divpaymentsize">200 AED</div>';
                                echo '<div class="divpaymentsignup"><input type="submit" value="subscribe now !" class="submitpayment" ></div>';
                                ?>
                                </form> <?php
                            echo '</div> </div>';
                            echo '<div class="col-lg-3"> <div class="card divcard">';
                                $tokenrand2 = rand(0, 100000000) . '_' . rand(0, 100000);
                                ?>
                                    <form  class="form-horizontal" action="?do=Insert3" method="POST" enctype="multipart/form-data">
                                        <?php
                                        $_SESSION['data']= $_POST['data'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['desc']       = $_POST['description'];
                                        $_SESSION['typeheavy']     = $_POST['typeheavy'];
                                        $_SESSION['sellertypeheavy']   = $_POST['sellertypeheavy'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['phone']      = $_POST['phone'];
                                        $_SESSION['Location']      = $_POST['location'];
                                        $_SESSION['year']       = $_POST['year'];
                                        $_SESSION['mechanicalheavy']    = $_POST['mechanicalheavy'];
                                        $_SESSION['bodytypeheavy'] = $_POST['bodytypeheavy'];
                                        $_SESSION['cylindersheavy'] = $_POST['cylinders'];
                                        $_SESSION['horsepower'] = $_POST['horsepower'];
                                        $_SESSION['warrantyheavy'] = $_POST['warrantyheavy'];
                                        $_SESSION['fueltype'] = $_POST['fueltype'];
                                        $_SESSION['Make'] = $_POST['make'];
                                        $_SESSION['Model'] = $_POST['model'];
                                        $_SESSION['Capacity'] = $_POST['capacity'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['k_mi'] = $_POST['k_mi'];
                                        $_SESSION['Weight'] = $_POST['weight'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                            $_SESSION['token'] = $tokenrand2;

                                echo '<div class="divpayment">Unlimited Ads 3 months</div>';
                                echo '<div class="divpaymentfont">Each ad has a duration of 30 days</div>';
                                echo '<div class="divpaymentfont">3 Month</div>';
                                echo '<div class="divpaymentsize">300 AED</div>';
                                echo '<div class="divpaymentsignup"><input type="submit" value="subscribe now !" class="submitpayment" ></div>';
                                ?>
                                </form> <?php
                            echo '</div> </div>';
                            echo '<div class="col-lg-3"> <div class="card divcard">';
                                $tokenrand3 = rand(0, 100000000) . '_' . rand(0, 100000);
                                ?>
                                    <form  class="form-horizontal" action="?do=Insert4" method="POST" enctype="multipart/form-data">
                                        <?php
                                        $_SESSION['data']= $_POST['data'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['desc']       = $_POST['description'];
                                        $_SESSION['typeheavy']     = $_POST['typeheavy'];
                                        $_SESSION['sellertypeheavy']   = $_POST['sellertypeheavy'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['phone']      = $_POST['phone'];
                                        $_SESSION['Location']      = $_POST['location'];
                                        $_SESSION['year']       = $_POST['year'];
                                        $_SESSION['mechanicalheavy']    = $_POST['mechanicalheavy'];
                                        $_SESSION['bodytypeheavy'] = $_POST['bodytypeheavy'];
                                        $_SESSION['cylindersheavy'] = $_POST['cylinders'];
                                        $_SESSION['horsepower'] = $_POST['horsepower'];
                                        $_SESSION['warrantyheavy'] = $_POST['warrantyheavy'];
                                        $_SESSION['fueltype'] = $_POST['fueltype'];
                                        $_SESSION['Make'] = $_POST['make'];
                                        $_SESSION['Model'] = $_POST['model'];
                                        $_SESSION['Capacity'] = $_POST['capacity'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['k_mi'] = $_POST['k_mi'];
                                        $_SESSION['Weight'] = $_POST['weight'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                        $_SESSION['token'] = $tokenrand3;

                                echo '<div class="divpayment">Unlimited Ads 1 year</div>';
                                echo '<div class="divpaymentfont">Each ad has a duration of 30 days</div>';
                                echo '<div class="divpaymentfont">One Year</div>';
                                echo '<div class="divpaymentsize">500 AED</div>';
                                echo '<div class="divpaymentsignup"><input type="submit" value="subscribe now !"  class="submitpayment" ></div>';
                                ?>
                                </form> <?php
                            echo '</div> </div>';
                        echo '</div>';
                    echo '</div>';
                }

                $getuserpack1 = $con->prepare("SELECT * FROM package_payment WHERE user_id = {$_SESSION["uid"]} AND duration like '%1%' OR (duration like '%2%' AND date < DATE_ADD(NOW(), INTERVAL -1 MONTH))  OR (duration like '%3%' AND date < DATE_ADD(NOW(), INTERVAL -3 MONTH)) OR (duration like '%4%' AND date < DATE_ADD(NOW(), INTERVAL -12 MONTH))");
                $getuserpack1->execute();
                $info1 = $getuserpack1->fetchAll();
                if(!empty($info1)){
                    echo '<div class="container">';
                        echo '<br><div class="alert alert-danger" role="alert">
                        You dont have a package yet!
                        </div><br>';
                        echo '<div class="row">';
                            echo '<div class="col-lg-3"> <div class="card divcard">';
                                $tokenrand = rand(0, 100000000) . '_' . rand(0, 100000);
                                ?>
                                    <form  class="form-horizontal" action="?do=Insert1" method="POST" enctype="multipart/form-data">
                                    <?php
                                        $_SESSION['data']= $_POST['data'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['desc']       = $_POST['description'];
                                        $_SESSION['typeheavy']     = $_POST['typeheavy'];
                                        $_SESSION['sellertypeheavy']   = $_POST['sellertypeheavy'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['phone']      = $_POST['phone'];
                                        $_SESSION['Location']      = $_POST['location'];
                                        $_SESSION['year']       = $_POST['year'];
                                        $_SESSION['mechanicalheavy']    = $_POST['mechanicalheavy'];
                                        $_SESSION['bodytypeheavy'] = $_POST['bodytypeheavy'];
                                        $_SESSION['cylindersheavy'] = $_POST['cylinders'];
                                        $_SESSION['horsepower'] = $_POST['horsepower'];
                                        $_SESSION['warrantyheavy'] = $_POST['warrantyheavy'];
                                        $_SESSION['fueltype'] = $_POST['fueltype'];
                                        $_SESSION['Make'] = $_POST['make'];
                                        $_SESSION['Model'] = $_POST['model'];
                                        $_SESSION['Capacity'] = $_POST['capacity'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['k_mi'] = $_POST['k_mi'];
                                        $_SESSION['Weight'] = $_POST['weight'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                        $_SESSION['token'] = $tokenrand;

                                        echo '<div class="divpayment">Only One Ad</div>';
                                        echo '<div class="divpaymentfont">for 30 days</div>';
                                        echo '<div class="divpaymentfont">Month</div>';
                                        echo '<div class="divpaymentsize">65 AED</div>';
                                        echo '<div class="divpaymentsignup"><input type="submit" value="Buy Ad" class="submitpayment" ></div>';
                                    ?>
                                </form> <?php
                            echo '</div> </div>';
                            echo '<div class="col-lg-3"> <div class="card divcard">';
                                $tokenrand1 = rand(0, 100000000) . '_' . rand(0, 100000);
                                ?>
                                    <form  class="form-horizontal" action="?do=Insert2" method="POST" enctype="multipart/form-data">
                                        <?php
                                        $_SESSION['data']= $_POST['data'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['desc']       = $_POST['description'];
                                        $_SESSION['typeheavy']     = $_POST['typeheavy'];
                                        $_SESSION['sellertypeheavy']   = $_POST['sellertypeheavy'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['phone']      = $_POST['phone'];
                                        $_SESSION['Location']      = $_POST['location'];
                                        $_SESSION['year']       = $_POST['year'];
                                        $_SESSION['mechanicalheavy']    = $_POST['mechanicalheavy'];
                                        $_SESSION['bodytypeheavy'] = $_POST['bodytypeheavy'];
                                        $_SESSION['cylindersheavy'] = $_POST['cylinders'];
                                        $_SESSION['horsepower'] = $_POST['horsepower'];
                                        $_SESSION['warrantyheavy'] = $_POST['warrantyheavy'];
                                        $_SESSION['fueltype'] = $_POST['fueltype'];
                                        $_SESSION['Make'] = $_POST['make'];
                                        $_SESSION['Model'] = $_POST['model'];
                                        $_SESSION['Capacity'] = $_POST['capacity'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['k_mi'] = $_POST['k_mi'];
                                        $_SESSION['Weight'] = $_POST['weight'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                            $_SESSION['token'] = $tokenrand1;

                                echo '<div class="divpayment">Unlimited Ads 30 days</div>';
                                echo '<div class="divpaymentfont">Each ad has a duration of 30 days</div>';
                                echo '<div class="divpaymentfont">Month</div>';
                                echo '<div class="divpaymentsize">200 AED</div>';
                                echo '<div class="divpaymentsignup"><input type="submit" value="subscribe now !" class="submitpayment" ></div>';
                                ?>
                                </form> <?php
                            echo '</div> </div>';
                            echo '<div class="col-lg-3"> <div class="card divcard">';
                                $tokenrand2 = rand(0, 100000000) . '_' . rand(0, 100000);
                                ?>
                                    <form  class="form-horizontal" action="?do=Insert3" method="POST" enctype="multipart/form-data">
                                        <?php
                                        $_SESSION['data']= $_POST['data'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['desc']       = $_POST['description'];
                                        $_SESSION['typeheavy']     = $_POST['typeheavy'];
                                        $_SESSION['sellertypeheavy']   = $_POST['sellertypeheavy'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['phone']      = $_POST['phone'];
                                        $_SESSION['Location']      = $_POST['location'];
                                        $_SESSION['year']       = $_POST['year'];
                                        $_SESSION['mechanicalheavy']    = $_POST['mechanicalheavy'];
                                        $_SESSION['bodytypeheavy'] = $_POST['bodytypeheavy'];
                                        $_SESSION['cylindersheavy'] = $_POST['cylinders'];
                                        $_SESSION['horsepower'] = $_POST['horsepower'];
                                        $_SESSION['warrantyheavy'] = $_POST['warrantyheavy'];
                                        $_SESSION['fueltype'] = $_POST['fueltype'];
                                        $_SESSION['Make'] = $_POST['make'];
                                        $_SESSION['Model'] = $_POST['model'];
                                        $_SESSION['Capacity'] = $_POST['capacity'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['k_mi'] = $_POST['k_mi'];
                                        $_SESSION['Weight'] = $_POST['weight'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                            $_SESSION['token'] = $tokenrand2;

                                echo '<div class="divpayment">Unlimited Ads 3 months</div>';
                                echo '<div class="divpaymentfont">Each ad has a duration of 30 days</div>';
                                echo '<div class="divpaymentfont">3 Month</div>';
                                echo '<div class="divpaymentsize">300 AED</div>';
                                echo '<div class="divpaymentsignup"><input type="submit" value="subscribe now !" class="submitpayment" ></div>';
                                ?>
                                </form> <?php
                            echo '</div> </div>';
                            echo '<div class="col-lg-3"> <div class="card divcard">';
                                $tokenrand3 = rand(0, 100000000) . '_' . rand(0, 100000);
                                ?>
                                    <form  class="form-horizontal" action="?do=Insert4" method="POST" enctype="multipart/form-data">
                                        <?php
                                        $_SESSION['data']= $_POST['data'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['desc']       = $_POST['description'];
                                        $_SESSION['typeheavy']     = $_POST['typeheavy'];
                                        $_SESSION['sellertypeheavy']   = $_POST['sellertypeheavy'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['phone']      = $_POST['phone'];
                                        $_SESSION['Location']      = $_POST['location'];
                                        $_SESSION['year']       = $_POST['year'];
                                        $_SESSION['mechanicalheavy']    = $_POST['mechanicalheavy'];
                                        $_SESSION['bodytypeheavy'] = $_POST['bodytypeheavy'];
                                        $_SESSION['cylindersheavy'] = $_POST['cylinders'];
                                        $_SESSION['horsepower'] = $_POST['horsepower'];
                                        $_SESSION['warrantyheavy'] = $_POST['warrantyheavy'];
                                        $_SESSION['fueltype'] = $_POST['fueltype'];
                                        $_SESSION['Make'] = $_POST['make'];
                                        $_SESSION['Model'] = $_POST['model'];
                                        $_SESSION['Capacity'] = $_POST['capacity'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['k_mi'] = $_POST['k_mi'];
                                        $_SESSION['Weight'] = $_POST['weight'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                        $_SESSION['token'] = $tokenrand3;

                                echo '<div class="divpayment">Unlimited Ads 1 year</div>';
                                echo '<div class="divpaymentfont">Each ad has a duration of 30 days</div>';
                                echo '<div class="divpaymentfont">One Year</div>';
                                echo '<div class="divpaymentsize">500 AED</div>';
                                echo '<div class="divpaymentsignup"><input type="submit" value="subscribe now !"  class="submitpayment" ></div>';
                                ?>
                                </form> <?php
                            echo '</div> </div>';
                        echo '</div>';
                    echo '</div>';
                }

                $getuserpack11 = $con->prepare("SELECT * FROM package_payment WHERE user_id = {$_SESSION["uid"]} AND (duration like '%2%' AND date > DATE_ADD(NOW(), INTERVAL -1 MONTH))  OR (duration like '%3%' AND date > DATE_ADD(NOW(), INTERVAL -3 MONTH)) OR (duration like '%4%' AND date > DATE_ADD(NOW(), INTERVAL -12 MONTH))");
                $getuserpack11->execute();
                $info11 = $getuserpack11->fetchAll();
                if(!empty($info11)){
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
        }
        elseif($do == 'Insert1'){
            echo "<h1 class='text-center h1-member'>Insert Cars</h1>";
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $apikey = "YzI0MTI3NTMtY2MyZS00MTdkLWJmNDItNjY2YjgxZTU2MDcxOjJlY2Y4YmU1LWZjZGQtNGE4ZC05YjI5LWU4ODNiYWQxMTcyNg==";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/identity/auth/access-token");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    "accept: application/vnd.ni-identity.v1+json",
                    "authorization: Basic ".$apikey,
                    "content-type: application/vnd.ni-identity.v1+json"
                  ));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,  "{\"realmName\":\"ni\"}");
                $output = json_decode(curl_exec($ch));
                        $access_token = $output->access_token;
                        $postData = [
                            "action" => "PURCHASE",
                            "amount" => [
                            "currencyCode" => "AED",
                            "value" => 65 * 100,
                                ],
                            "merchantAttributes" => [
                                "redirectUrl" =>  "https://ohyamal.com/cabchassis.php?do=Insertfin1"
                            ],
                            ];
                            $outlet = "c3cce49c-9824-4fc3-b237-f03f3c9c449f";
                            $json = json_encode($postData);
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/transactions/outlets/".$outlet."/orders");
                            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                            "Authorization: Bearer ".$access_token,
                            "Content-Type: application/vnd.ni-payment.v2+json",
                            "Accept: application/vnd.ni-payment.v2+json"));
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_POST, 1);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
                            $output = json_decode(curl_exec($ch));
                            // print_r(json_decode(curl_exec($ch)));
                            $order_reference = $output->reference;
                            $order_paypage_url = $output->_links->payment->href;
                    header("Location: ".$order_paypage_url);
                            curl_close ($ch);
            }
            else{
                echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                echo "<a href='adcars.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Cars page.</a>";
                }
            echo '</div>';
        }
        elseif($do == 'Insert2'){
            echo "<h1 class='text-center h1-member'>Insert Cars</h1>";
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $apikey = "YzI0MTI3NTMtY2MyZS00MTdkLWJmNDItNjY2YjgxZTU2MDcxOjJlY2Y4YmU1LWZjZGQtNGE4ZC05YjI5LWU4ODNiYWQxMTcyNg==";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/identity/auth/access-token");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    "accept: application/vnd.ni-identity.v1+json",
                    "authorization: Basic ".$apikey,
                    "content-type: application/vnd.ni-identity.v1+json"
                  ));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,  "{\"realmName\":\"ni\"}");
                $output = json_decode(curl_exec($ch));
                        $access_token = $output->access_token;
                        $postData = [
                            "action" => "PURCHASE",
                            "amount" => [
                            "currencyCode" => "AED",
                            "value" => 200 * 100,
                                ],
                            "merchantAttributes" => [
                                "redirectUrl" =>  "https://ohyamal.com/cabchassis.php?do=Insertfin2"
                            ],
                            ];
                            $outlet = "c3cce49c-9824-4fc3-b237-f03f3c9c449f";
                            $json = json_encode($postData);
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/transactions/outlets/".$outlet."/orders");
                            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                            "Authorization: Bearer ".$access_token,
                            "Content-Type: application/vnd.ni-payment.v2+json",
                            "Accept: application/vnd.ni-payment.v2+json"));
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_POST, 1);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
                            $output = json_decode(curl_exec($ch));
                            // print_r(json_decode(curl_exec($ch)));
                            $order_reference = $output->reference;
                            $order_paypage_url = $output->_links->payment->href;
                    header("Location: ".$order_paypage_url);
                            curl_close ($ch);
            }
            else{
                echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                echo "<a href='adcars.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Cars page.</a>";
                }
            echo '</div>';
        }
        elseif($do == 'Insert3'){
            echo "<h1 class='text-center h1-member'>Insert Cars</h1>";
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $apikey = "YzI0MTI3NTMtY2MyZS00MTdkLWJmNDItNjY2YjgxZTU2MDcxOjJlY2Y4YmU1LWZjZGQtNGE4ZC05YjI5LWU4ODNiYWQxMTcyNg==";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/identity/auth/access-token");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    "accept: application/vnd.ni-identity.v1+json",
                    "authorization: Basic ".$apikey,
                    "content-type: application/vnd.ni-identity.v1+json"
                  ));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,  "{\"realmName\":\"ni\"}");
                $output = json_decode(curl_exec($ch));
                        $access_token = $output->access_token;
                        $postData = [
                            "action" => "PURCHASE",
                            "amount" => [
                            "currencyCode" => "AED",
                            "value" => 300 * 100,
                                ],
                            "merchantAttributes" => [
                                "redirectUrl" =>  "https://ohyamal.com/cabchassis.php?do=Insertfin3"
                            ],
                            ];
                            $outlet = "c3cce49c-9824-4fc3-b237-f03f3c9c449f";
                            $json = json_encode($postData);
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/transactions/outlets/".$outlet."/orders");
                            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                            "Authorization: Bearer ".$access_token,
                            "Content-Type: application/vnd.ni-payment.v2+json",
                            "Accept: application/vnd.ni-payment.v2+json"));
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_POST, 1);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
                            $output = json_decode(curl_exec($ch));
                            // print_r(json_decode(curl_exec($ch)));
                            $order_reference = $output->reference;
                            $order_paypage_url = $output->_links->payment->href;
                    header("Location: ".$order_paypage_url);
                            curl_close ($ch);
            }
            else{
                echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                echo "<a href='adcars.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Cars page.</a>";
                }
            echo '</div>';
        }
        elseif($do == 'Insert4'){
            echo "<h1 class='text-center h1-member'>Insert Cars</h1>";
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $apikey = "YzI0MTI3NTMtY2MyZS00MTdkLWJmNDItNjY2YjgxZTU2MDcxOjJlY2Y4YmU1LWZjZGQtNGE4ZC05YjI5LWU4ODNiYWQxMTcyNg==";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/identity/auth/access-token");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    "accept: application/vnd.ni-identity.v1+json",
                    "authorization: Basic ".$apikey,
                    "content-type: application/vnd.ni-identity.v1+json"
                  ));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,  "{\"realmName\":\"ni\"}");
                $output = json_decode(curl_exec($ch));
                        $access_token = $output->access_token;
                        $postData = [
                            "action" => "PURCHASE",
                            "amount" => [
                            "currencyCode" => "AED",
                            "value" => 500 * 100,
                                ],
                            "merchantAttributes" => [
                                "redirectUrl" =>  "https://ohyamal.com/cabchassis.php?do=Insertfin4"
                            ],
                            ];
                            $outlet = "c3cce49c-9824-4fc3-b237-f03f3c9c449f";
                            $json = json_encode($postData);
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/transactions/outlets/".$outlet."/orders");
                            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                            "Authorization: Bearer ".$access_token,
                            "Content-Type: application/vnd.ni-payment.v2+json",
                            "Accept: application/vnd.ni-payment.v2+json"));
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_POST, 1);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
                            $output = json_decode(curl_exec($ch));
                            // print_r(json_decode(curl_exec($ch)));
                            $order_reference = $output->reference;
                            $order_paypage_url = $output->_links->payment->href;
                    header("Location: ".$order_paypage_url);
                            curl_close ($ch);
            }
            else{
                echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                echo "<a href='adcars.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Cars page.</a>";
                }
            echo '</div>';
        }
        elseif($do == 'Insertfin1'){
            $stmtitemadd = $con->prepare("INSERT INTO
            package_payment(duration, date, token, price, user_id)
            VALUES(:zduration, now(), :ztoken, :zprice, :zuser)");
            $stmtitemadd->execute(array(
            'zduration' => '1',
            'ztoken' => $_SESSION['token'],
            'zprice' => '65',
            'zuser'     => $_SESSION['uid']
            ));

            $stmtitemadd = $con->prepare("INSERT INTO
            heavyvzhicles(Image, locationcars ,categoryy ,Name, category, Make, Model, Capacity, Weight, user_Id, fueltype, warrantyheavy, horsepower, sellertypeheavy, Price, phone, Add_date, Description, Location, Year, mechanicalheavy, k_mi, bodytypeheavy, typeheavy, cylindersheavy, Approve)
            VALUES(:zimage, :zlocate, :zcategoryy, :zname, :zcategory, :zmake, :zmodel, :zcapacity, :zweight, :zuser, :zfueltype, :zwarrantyheavy, :zhorsepower, :zsellertypeheavy,:zprice, :zphone, now(), :zDescription, :zLocation, :zyear, :zmechanicalheavy, :zk_mi, :zbodytypeheavy, :ztypeheavy, :zcylindersheavy, 1)");
                $stmtitemadd->execute(array(
                'zlocate'   => $_SESSION['locationcars'],
                'zcategoryy' => $_SESSION['categoryy'],
                'zimage'    => $_SESSION['data'],
                'zname'     => $_SESSION['name'],
                'zcategory' => $_SESSION['category'],
                'zmake'     => $_SESSION['Make'],
                'zmodel'    => $_SESSION['Model'],
                'zcapacity' => $_SESSION['Capacity'],
                'zweight'   => $_SESSION['Weight'],
                'zuser'     => $_SESSION['uid'],
                'zfueltype'     => $_SESSION['fueltype'],
                'zwarrantyheavy'=> $_SESSION['warrantyheavy'],
                'zhorsepower'=> $_SESSION['horsepower'],
                'zsellertypeheavy' => $_SESSION['sellertypeheavy'],
                'zprice'    => $_SESSION['price'],
                'zphone'    => $_SESSION['phone'],
                'zDescription'     => $_SESSION['desc'],
                'zLocation'    => $_SESSION['Location'],
                'zyear'     => $_SESSION['year'] ,
                'zmechanicalheavy'  => $_SESSION['mechanicalheavy'],
                'zk_mi' => $_SESSION['k_mi'],
                'zbodytypeheavy' => $_SESSION['bodytypeheavy'],
                'ztypeheavy' => $_SESSION['typeheavy'],
                'zcylindersheavy' => $_SESSION['cylindersheavy']
                ));
                echo finads();
        }
        elseif($do == 'Insertfin2'){
            $stmtitemadd = $con->prepare("INSERT INTO
            package_payment(duration, date, token, price, user_id)
            VALUES(:zduration, now(), :ztoken, :zprice, :zuser)");
            $stmtitemadd->execute(array(
            'zduration' => '2',
            'ztoken' => $_SESSION['token'],
            'zprice' => '200',
            'zuser'     => $_SESSION['uid']
            ));

            $stmtitemadd = $con->prepare("INSERT INTO
            heavyvzhicles(Image, locationcars ,categoryy ,Name, category, Make, Model, Capacity, Weight, user_Id, fueltype, warrantyheavy, horsepower, sellertypeheavy, Price, phone, Add_date, Description, Location, Year, mechanicalheavy, k_mi, bodytypeheavy, typeheavy, cylindersheavy, Approve)
            VALUES(:zimage, :zlocate, :zcategoryy, :zname, :zcategory, :zmake, :zmodel, :zcapacity, :zweight, :zuser, :zfueltype, :zwarrantyheavy, :zhorsepower, :zsellertypeheavy,:zprice, :zphone, now(), :zDescription, :zLocation, :zyear, :zmechanicalheavy, :zk_mi, :zbodytypeheavy, :ztypeheavy, :zcylindersheavy, 1)");
                $stmtitemadd->execute(array(
                'zlocate'   => $_SESSION['locationcars'],
                'zcategoryy' => $_SESSION['categoryy'],
                'zimage'    => $_SESSION['data'],
                'zname'     => $_SESSION['name'],
                'zcategory' => $_SESSION['category'],
                'zmake'     => $_SESSION['Make'],
                'zmodel'    => $_SESSION['Model'],
                'zcapacity' => $_SESSION['Capacity'],
                'zweight'   => $_SESSION['Weight'],
                'zuser'     => $_SESSION['uid'],
                'zfueltype'     => $_SESSION['fueltype'],
                'zwarrantyheavy'=> $_SESSION['warrantyheavy'],
                'zhorsepower'=> $_SESSION['horsepower'],
                'zsellertypeheavy' => $_SESSION['sellertypeheavy'],
                'zprice'    => $_SESSION['price'],
                'zphone'    => $_SESSION['phone'],
                'zDescription'     => $_SESSION['desc'],
                'zLocation'    => $_SESSION['Location'],
                'zyear'     => $_SESSION['year'] ,
                'zmechanicalheavy'  => $_SESSION['mechanicalheavy'],
                'zk_mi' => $_SESSION['k_mi'],
                'zbodytypeheavy' => $_SESSION['bodytypeheavy'],
                'ztypeheavy' => $_SESSION['typeheavy'],
                'zcylindersheavy' => $_SESSION['cylindersheavy']
                ));
                echo finads();
        }
        elseif($do == 'Insertfin3'){
            $stmtitemadd = $con->prepare("INSERT INTO
            package_payment(duration, date, token, price, user_id)
            VALUES(:zduration, now(), :ztoken, :zprice, :zuser)");
            $stmtitemadd->execute(array(
            'zduration' => '3',
            'ztoken' => $_SESSION['token'],
            'zprice' => '300',
            'zuser'     => $_SESSION['uid']
            ));

            $stmtitemadd = $con->prepare("INSERT INTO
            heavyvzhicles(Image, locationcars ,categoryy ,Name, category, Make, Model, Capacity, Weight, user_Id, fueltype, warrantyheavy, horsepower, sellertypeheavy, Price, phone, Add_date, Description, Location, Year, mechanicalheavy, k_mi, bodytypeheavy, typeheavy, cylindersheavy, Approve)
            VALUES(:zimage, :zlocate, :zcategoryy, :zname, :zcategory, :zmake, :zmodel, :zcapacity, :zweight, :zuser, :zfueltype, :zwarrantyheavy, :zhorsepower, :zsellertypeheavy,:zprice, :zphone, now(), :zDescription, :zLocation, :zyear, :zmechanicalheavy, :zk_mi, :zbodytypeheavy, :ztypeheavy, :zcylindersheavy, 1)");
                $stmtitemadd->execute(array(
                'zlocate'   => $_SESSION['locationcars'],
                'zcategoryy' => $_SESSION['categoryy'],
                'zimage'    => $_SESSION['data'],
                'zname'     => $_SESSION['name'],
                'zcategory' => $_SESSION['category'],
                'zmake'     => $_SESSION['Make'],
                'zmodel'    => $_SESSION['Model'],
                'zcapacity' => $_SESSION['Capacity'],
                'zweight'   => $_SESSION['Weight'],
                'zuser'     => $_SESSION['uid'],
                'zfueltype'     => $_SESSION['fueltype'],
                'zwarrantyheavy'=> $_SESSION['warrantyheavy'],
                'zhorsepower'=> $_SESSION['horsepower'],
                'zsellertypeheavy' => $_SESSION['sellertypeheavy'],
                'zprice'    => $_SESSION['price'],
                'zphone'    => $_SESSION['phone'],
                'zDescription'     => $_SESSION['desc'],
                'zLocation'    => $_SESSION['Location'],
                'zyear'     => $_SESSION['year'] ,
                'zmechanicalheavy'  => $_SESSION['mechanicalheavy'],
                'zk_mi' => $_SESSION['k_mi'],
                'zbodytypeheavy' => $_SESSION['bodytypeheavy'],
                'ztypeheavy' => $_SESSION['typeheavy'],
                'zcylindersheavy' => $_SESSION['cylindersheavy']
                ));
                echo finads();
        }
        elseif($do == 'Insertfin4'){
            $stmtitemadd = $con->prepare("INSERT INTO
            package_payment(duration, date, token, price, user_id)
            VALUES(:zduration, now(), :ztoken, :zprice, :zuser)");
            $stmtitemadd->execute(array(
            'zduration' => '4',
            'ztoken' => $_SESSION['token'],
            'zprice' => '500',
            'zuser'     => $_SESSION['uid']
            ));


            $stmtitemadd = $con->prepare("INSERT INTO
            heavyvzhicles(Image, locationcars ,categoryy ,Name, category, Make, Model, Capacity, Weight, user_Id, fueltype, warrantyheavy, horsepower, sellertypeheavy, Price, phone, Add_date, Description, Location, Year, mechanicalheavy, k_mi, bodytypeheavy, typeheavy, cylindersheavy, Approve)
            VALUES(:zimage, :zlocate, :zcategoryy, :zname, :zcategory, :zmake, :zmodel, :zcapacity, :zweight, :zuser, :zfueltype, :zwarrantyheavy, :zhorsepower, :zsellertypeheavy,:zprice, :zphone, now(), :zDescription, :zLocation, :zyear, :zmechanicalheavy, :zk_mi, :zbodytypeheavy, :ztypeheavy, :zcylindersheavy, 1)");
                $stmtitemadd->execute(array(
                'zlocate'   => $_SESSION['locationcars'],
                'zcategoryy' => $_SESSION['categoryy'],
                'zimage'    => $_SESSION['data'],
                'zname'     => $_SESSION['name'],
                'zcategory' => $_SESSION['category'],
                'zmake'     => $_SESSION['Make'],
                'zmodel'    => $_SESSION['Model'],
                'zcapacity' => $_SESSION['Capacity'],
                'zweight'   => $_SESSION['Weight'],
                'zuser'     => $_SESSION['uid'],
                'zfueltype'     => $_SESSION['fueltype'],
                'zwarrantyheavy'=> $_SESSION['warrantyheavy'],
                'zhorsepower'=> $_SESSION['horsepower'],
                'zsellertypeheavy' => $_SESSION['sellertypeheavy'],
                'zprice'    => $_SESSION['price'],
                'zphone'    => $_SESSION['phone'],
                'zDescription'     => $_SESSION['desc'],
                'zLocation'    => $_SESSION['Location'],
                'zyear'     => $_SESSION['year'] ,
                'zmechanicalheavy'  => $_SESSION['mechanicalheavy'],
                'zk_mi' => $_SESSION['k_mi'],
                'zbodytypeheavy' => $_SESSION['bodytypeheavy'],
                'ztypeheavy' => $_SESSION['typeheavy'],
                'zcylindersheavy' => $_SESSION['cylindersheavy']
                ));
                echo finads();
        }
        include $tpl . 'footer.php';
    }
    else{
        header('Location:index.php');
        exit();
    }
ob_end_flush();
?>
