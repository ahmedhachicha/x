<?php
ob_start();
session_start();
$pageTitle="New Property for Rent";
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
                                                <a href="roomsforrent.php" class="linkfrom">Property for Rent > Commercial for Rent</a>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="forrent" name="category" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Property For Rent > Rooms for rent (flatmates) > Apartment/Flat for Rent" name="categoryy" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php echo locate(); ?>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Apartment/Flat for Rent" name="typeforrent" class="forminput form-select-lg" autocomplete="off" required="required">
                                                        </div>
                                                    </div>
                                                </div>
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
                                                            <input id="name" type="text" name="urltour" class="form-control forminput form-select-lg" autocomplete="off" placeholder="360 Tour URL">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="urlyutub" class="form-control forminput form-select-lg" autocomplete="off" placeholder="YouTube URL">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="phone" type="tel" name="phone" pattern="[0]{1}[5]{1}[0-9]{8}" class=" forminput form-select-lg" autocomplete="off" required placeholder="Phone Number">
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
                                                        <textarea class=" form input_contact" name="description" rows="4" cols="38" required="required" placeholder="Describe your property"></textarea>
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
                                                            <input id="name" type="text" name="size" class="form-control forminput form-select-lg" pattern="\d{0,9}" autocomplete="off" required="required" placeholder="Size">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            Enter a number.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="beds" required >
                                                            <option value="">Bedrooms</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "beds", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                        This field is required
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="baths" required >
                                                            <option value="">Bathrooms</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "baths", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                        This field is required
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="developer" class="form-control forminput form-select-lg" autocomplete="off" placeholder="Developer">
                                                        </div>
                                                    </div>
                                                </div><label for="ready">Ready by : </label>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="ready" type="date" name="readyby" class="form-control forminput form-select-lg" autocomplete="off" placeholder="Ready by [YYYY-MM-DD]">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="propertyreference" class="form-control forminput form-select-lg" autocomplete="off" placeholder="Property Reference ID #">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="listedby" required >
                                                            <option value="">Listed by</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "listedby", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                        This field is required
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="shortterm" required >
                                                            <option value="">Short Term</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "shortterm", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                        This field is required
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row">
                                                    <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Cable TV" id="a0" name="cars[]">
                                                        <label class="form-check-label" for="a0">
                                                        Cable TV
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Cleaning Included" id="a1" name="cars[]">
                                                        <label class="form-check-label" for="a1">
                                                        Cleaning Included
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Dryer" id="a2" name="cars[]">
                                                        <label class="form-check-label" for="a2">
                                                        Dryer
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Free Parking" id="a3" name="cars[]">
                                                        <label class="form-check-label" for="a3">
                                                        Free Parking
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Gym" id="a4" name="cars[]">
                                                        <label class="form-check-label" for="a4">
                                                        Gym
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Jacuzzi" id="a5" name="cars[]">
                                                        <label class="form-check-label" for="a5">
                                                        Jacuzzi
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Kitchen Appliances" id="a6" name="cars[]">
                                                        <label class="form-check-label" for="a6">
                                                        Kitchen Appliances
                                                        </label></div>
                                                       </div>
                                                       <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Near Metro or Tram" id="a7" name="cars[]">
                                                        <label class="form-check-label" for="a7">
                                                        Near Metro or Tram
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Recreation Centre" id="a8" name="cars[]">
                                                        <label class="form-check-label" for="a8">
                                                        Recreation Centre
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Sauna" id="a9" name="cars[]">
                                                        <label class="form-check-label" for="a9">
                                                        Sauna
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Swimming Pool" id="a10" name="cars[]">
                                                        <label class="form-check-label" for="a10">
                                                        Swimming Pool
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Washer" id="a11" name="cars[]">
                                                        <label class="form-check-label" for="a11">
                                                        Washer
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Wireless Internet" id="a12" name="cars[]">
                                                        <label class="form-check-label" for="a12">
                                                        Wireless Internet
                                                        </label></div>
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
                                                                    move_uploaded_file($imageTmp, "admin/Update_Imageforrent/uploads/avatars/" . $image);
                                                                    $data   .= $image." ";
                                                            }
                                                        ?>
                                                        <input type="hidden" name="data" value="<?php echo $data ?>">
                                                    </div>
                                                </div>
                                            </div>
                                                    <?php echo Safetyfirst(); ?>
                                            <input id="title" type="hidden" name="phone" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['phone'] ?>" />
                                            <input id="title" type="hidden" name="price" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['price'] ?>" />
                                            <input id="title" type="hidden" name="urltour" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['urltour'] ?>" />
                                            <input id="title" type="hidden" name="urlyutub" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['urlyutub'] ?>" />
                                            <input id="title" type="hidden" name="category" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['category'] ?>"   />
                                            <input id="title" type="hidden" name="typeforrent" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['typeforrent'] ?>"   />
                                            <input id="title" type="hidden" name="location" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['location']; ?>"  />
                                            <input id="title" type="hidden" name="name" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['name'] ?>"  />
                                            <input id="title" type="hidden" name="description" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['description'] ?>" />
                                            <input id="title" type="hidden" name="size" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['size'] ?>" />
                                            <input id="title" type="hidden" name="developer" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['developer'] ?>" />
                                            <input id="title" type="hidden" name="readyby" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['readyby'] ?>" />
                                            <input id="title" type="hidden" name="propertyreference" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['propertyreference'] ?>" />
                                            <input id="title" type="hidden" name="categoryy" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['categoryy'] ?>"   />
                                            <input id="title" type="hidden" name="shortterm" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['shortterm'] ?>"   />
                                            <?php
                                                                            $locationcars   = $_POST['locationcars'];
                                                                            $getlocationcars = $con->prepare("SELECT * FROM locationcars WHERE Id = $locationcars");
                                                                            $getlocationcars->execute();
                                                                            $info = $getlocationcars->fetch();
                                                                            $namelocationcars = $info['Name']; ?>
                                                                    <input id="title" type="hidden" name="locationcars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namelocationcars ?>"  />
                                            <?php
                                                                            $beds = $_POST['beds'];
                                                                            $getbeds = $con->prepare("SELECT * FROM beds WHERE Id = $beds");
                                                                            $getbeds->execute();
                                                                            $info = $getbeds->fetch();
                                                                            $namebeds = $info['Name'];
                                                                            ?>
                                                                    <input id="title" type="hidden" name="beds" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namebeds ?>" />
                                                                    <?php
                                                                            $baths = $_POST['baths'];
                                                                            $getbaths = $con->prepare("SELECT * FROM baths WHERE Id = $baths");
                                                                            $getbaths->execute();
                                                                            $info = $getbaths->fetch();
                                                                            $namebaths = $info['Name'];
                                                                            ?>
                                                                    <input id="title" type="hidden" name="baths" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namebaths ?>" />
                                                                    <?php
                                                                            $listedby = $_POST['listedby'];
                                                                            $getlistedby = $con->prepare("SELECT * FROM listedby WHERE Id = $listedby");
                                                                            $getlistedby->execute();
                                                                            $info = $getlistedby->fetch();
                                                                            $namelistedby = $info['Name'];
                                                                            ?>
                                                                    <input id="title" type="hidden" name="listedby" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namelistedby ?>" />
                                            <?php
                                            function myfunction($v1,$v2)
                                            {
                                            return $v1 . "-" . $v2;
                                            }
                                            // $carss = $_POST['cars'];

                                            if(empty($_POST['cars'])){
                                                $cars1 = array('Null');
                                                ?>
                                                <input id="hidden" type="hidden" name="cars" class="form-control form-select-lg" autocomplete="off" value="<?php print_r(array_reduce($cars1,"myfunction")); ?>" />
                                                <?php
                                            }
                                            else{
                                                $carss = $_POST['cars'];
                                                ?>
                                                <input id="hidden" type="hidden" name="cars" class="form-control form-select-lg" autocomplete="off" value="<?php print_r(array_reduce($carss,"myfunction")); ?>" />
                                                <?php
                                            }

                                               ?>
<!--
                                              <input id="title" type="hidden" name="checkcar" class="form-control form-select-lg" autocomplete="off" value="<php print_r(array_reduce($carss,"myfunction")); ?>" />                            -->
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
                                        $_SESSION['data'] = $_POST['data'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['size']      = $_POST['size'];
                                        $_SESSION['developer']      = $_POST['developer'];
                                        $_SESSION['readyby']      = $_POST['readyby'];
                                        $_SESSION['propertyreference'] = $_POST['propertyreference'];
                                        $_SESSION['typeforrent']     = $_POST['typeforrent'];
                                        $_SESSION['beds']      = $_POST['beds'];
                                        $_SESSION['baths']      = $_POST['baths'];
                                        $_SESSION['listedby']      = $_POST['listedby'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['urltour']   = $_POST['urltour'];
                                        $_SESSION['urlyutub']   = $_POST['urlyutub'];
                                        $_SESSION['checkcar'] = $_POST['checkcar'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                        $_SESSION['shortterm']     = $_POST['shortterm'];
                                        $_SESSION['cars']     = $_POST['cars'];
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
                                        $_SESSION['data'] = $_POST['data'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['size']      = $_POST['size'];
                                        $_SESSION['developer']      = $_POST['developer'];
                                        $_SESSION['readyby']      = $_POST['readyby'];
                                        $_SESSION['propertyreference'] = $_POST['propertyreference'];
                                        $_SESSION['typeforrent']     = $_POST['typeforrent'];
                                        $_SESSION['beds']      = $_POST['beds'];
                                        $_SESSION['baths']      = $_POST['baths'];
                                        $_SESSION['listedby']      = $_POST['listedby'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['urltour']   = $_POST['urltour'];
                                        $_SESSION['urlyutub']   = $_POST['urlyutub'];
                                        $_SESSION['checkcar'] = $_POST['checkcar'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                        $_SESSION['shortterm']     = $_POST['shortterm'];
                                        $_SESSION['cars']     = $_POST['cars'];
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
                                        $_SESSION['data'] = $_POST['data'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['size']      = $_POST['size'];
                                        $_SESSION['developer']      = $_POST['developer'];
                                        $_SESSION['readyby']      = $_POST['readyby'];
                                        $_SESSION['propertyreference'] = $_POST['propertyreference'];
                                        $_SESSION['typeforrent']     = $_POST['typeforrent'];
                                        $_SESSION['beds']      = $_POST['beds'];
                                        $_SESSION['baths']      = $_POST['baths'];
                                        $_SESSION['listedby']      = $_POST['listedby'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['urltour']   = $_POST['urltour'];
                                        $_SESSION['urlyutub']   = $_POST['urlyutub'];
                                        $_SESSION['checkcar'] = $_POST['checkcar'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                        $_SESSION['shortterm']     = $_POST['shortterm'];
                                        $_SESSION['cars']     = $_POST['cars'];
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
                                        $_SESSION['data'] = $_POST['data'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['size']      = $_POST['size'];
                                        $_SESSION['developer']      = $_POST['developer'];
                                        $_SESSION['readyby']      = $_POST['readyby'];
                                        $_SESSION['propertyreference'] = $_POST['propertyreference'];
                                        $_SESSION['typeforrent']     = $_POST['typeforrent'];
                                        $_SESSION['beds']      = $_POST['beds'];
                                        $_SESSION['baths']      = $_POST['baths'];
                                        $_SESSION['listedby']      = $_POST['listedby'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['urltour']   = $_POST['urltour'];
                                        $_SESSION['urlyutub']   = $_POST['urlyutub'];
                                        $_SESSION['checkcar'] = $_POST['checkcar'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                        $_SESSION['shortterm']     = $_POST['shortterm'];
                                        $_SESSION['cars']     = $_POST['cars'];
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
                                        $_SESSION['data'] = $_POST['data'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['size']      = $_POST['size'];
                                        $_SESSION['developer']      = $_POST['developer'];
                                        $_SESSION['readyby']      = $_POST['readyby'];
                                        $_SESSION['propertyreference'] = $_POST['propertyreference'];
                                        $_SESSION['typeforrent']     = $_POST['typeforrent'];
                                        $_SESSION['beds']      = $_POST['beds'];
                                        $_SESSION['baths']      = $_POST['baths'];
                                        $_SESSION['listedby']      = $_POST['listedby'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['urltour']   = $_POST['urltour'];
                                        $_SESSION['urlyutub']   = $_POST['urlyutub'];
                                        $_SESSION['checkcar'] = $_POST['checkcar'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                        $_SESSION['shortterm']     = $_POST['shortterm'];
                                        $_SESSION['cars']     = $_POST['cars'];
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
                                        $_SESSION['data'] = $_POST['data'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['size']      = $_POST['size'];
                                        $_SESSION['developer']      = $_POST['developer'];
                                        $_SESSION['readyby']      = $_POST['readyby'];
                                        $_SESSION['propertyreference'] = $_POST['propertyreference'];
                                        $_SESSION['typeforrent']     = $_POST['typeforrent'];
                                        $_SESSION['beds']      = $_POST['beds'];
                                        $_SESSION['baths']      = $_POST['baths'];
                                        $_SESSION['listedby']      = $_POST['listedby'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['urltour']   = $_POST['urltour'];
                                        $_SESSION['urlyutub']   = $_POST['urlyutub'];
                                        $_SESSION['checkcar'] = $_POST['checkcar'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                        $_SESSION['shortterm']     = $_POST['shortterm'];
                                        $_SESSION['cars']     = $_POST['cars'];
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
                                        $_SESSION['data'] = $_POST['data'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['size']      = $_POST['size'];
                                        $_SESSION['developer']      = $_POST['developer'];
                                        $_SESSION['readyby']      = $_POST['readyby'];
                                        $_SESSION['propertyreference'] = $_POST['propertyreference'];
                                        $_SESSION['typeforrent']     = $_POST['typeforrent'];
                                        $_SESSION['beds']      = $_POST['beds'];
                                        $_SESSION['baths']      = $_POST['baths'];
                                        $_SESSION['listedby']      = $_POST['listedby'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['urltour']   = $_POST['urltour'];
                                        $_SESSION['urlyutub']   = $_POST['urlyutub'];
                                        $_SESSION['checkcar'] = $_POST['checkcar'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                        $_SESSION['shortterm']     = $_POST['shortterm'];
                                        $_SESSION['cars']     = $_POST['cars'];
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
                                        $_SESSION['data'] = $_POST['data'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['price']      = $_POST['price'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['size']      = $_POST['size'];
                                        $_SESSION['developer']      = $_POST['developer'];
                                        $_SESSION['readyby']      = $_POST['readyby'];
                                        $_SESSION['propertyreference'] = $_POST['propertyreference'];
                                        $_SESSION['typeforrent']     = $_POST['typeforrent'];
                                        $_SESSION['beds']      = $_POST['beds'];
                                        $_SESSION['baths']      = $_POST['baths'];
                                        $_SESSION['listedby']      = $_POST['listedby'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['urltour']   = $_POST['urltour'];
                                        $_SESSION['urlyutub']   = $_POST['urlyutub'];
                                        $_SESSION['checkcar'] = $_POST['checkcar'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                        $_SESSION['shortterm']     = $_POST['shortterm'];
                                        $_SESSION['cars']     = $_POST['cars'];
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
                        $category     = $_POST['category'];
                        $name       = $_POST['name'];
                        $phone       = $_POST['phone'];
                        $price      = $_POST['price'];
                        $desc      = $_POST['description'];
                        $size      = $_POST['size'];
                        $developer      = $_POST['developer'];
                        $readyby      = $_POST['readyby'];
                        $propertyreference = $_POST['propertyreference'];
                        $typeforrent     = $_POST['typeforrent'];
                        $beds      = $_POST['beds'];
                        $baths      = $_POST['baths'];
                        $listedby      = $_POST['listedby'];
                        $location   = $_POST['location'];
                        $urltour   = $_POST['urltour'];
                        $urlyutub   = $_POST['urlyutub'];
                        $checkcar = $_POST['cars'];
                        $locationcars   = $_POST['locationcars'];
                        $categoryy     = $_POST['categoryy'];
                        $shortterm = $_POST['shortterm'];
                        $cars = $_POST['cars'];
                                    $stmtitemadd = $con->prepare("INSERT INTO
                                    forrent(Name,typeforrent,urltour,urlyutub,phone,price,description,baths,beds,developer,	size,location,categoryy,readyby,categories,Image,listedby,locationcars,extras,propertyreference,shortterm,date,approve,user_Id)
                                    VALUES(:zname,:ztypeforrent,:zurltour,:zurlyutub,:zphone,:zprice,:zdescription,:zbaths,:zbeds,:zdeveloper,:zsize,:zlocation,:zcategoryy,:zreadyby,:zcategory,:zimage,:zlistedby,:zlocationcars,	:zcars,:zpropertyreference,:zshortterm,now(),1,:zuser)");
                                        $stmtitemadd->execute(array(
                                            'zname'     => $name,
                                            'ztypeforrent'=> $typeforrent,
                                            'zurltour'     => $urltour,
                                            'zurlyutub'     => $urlyutub,
                                            'zphone'    => $phone,
                                            'zprice'    => $price,
                                            'zdescription'=>    $desc,
                                            'zbeds'     => $beds,
                                            'zbaths'     => $baths,
                                            'zdeveloper'    => $developer,
                                            'zsize'=>    $size,
                                            'zlocation'=>    $location,
                                            'zcategoryy'    => $categoryy,
                                            'zreadyby'=>    $readyby,
                                            'zcategory' => $category,
                                            'zimage'    => $data,
                                            'zlistedby'     => $listedby,
                                            'zlocationcars' => $locationcars,
                                            'zcars' => $cars,
                                            'zpropertyreference'=>    $propertyreference,
                                            'zshortterm' => $shortterm,
                                            'zuser' => $_SESSION['uid']
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
                                "redirectUrl" =>  "https://ohyamal.com/apartmentflatforrent.php?do=Insertfin1"
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
                                "redirectUrl" =>  "https://ohyamal.com/apartmentflatforrent.php?do=Insertfin2"
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
                                "redirectUrl" =>  "https://ohyamal.com/apartmentflatforrent.php?do=Insertfin3"
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
                                "redirectUrl" =>  "https://ohyamal.com/apartmentflatforrent.php?do=Insertfin4"
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
                forrent(Name,typeforrent,urltour,urlyutub,phone,price,description,baths,beds,developer,	size,location,categoryy,readyby,categories,Image,listedby,locationcars,extras,propertyreference,shortterm,date,approve,user_Id)
                VALUES(:zname,:ztypeforrent,:zurltour,:zurlyutub,:zphone,:zprice,:zdescription,:zbaths,:zbeds,:zdeveloper,:zsize,:zlocation,:zcategoryy,:zreadyby,:zcategory,:zimage,:zlistedby,:zlocationcars,	:zcars,:zpropertyreference,:zshortterm,now(),1,:zuser)");
                    $stmtitemadd->execute(array(
                        'zname'     => $_SESSION['name'],
                        'ztypeforrent'=> $_SESSION['typeforrent'],
                        'zurltour'     => $_SESSION['urltour'],
                        'zurlyutub'     => $_SESSION['urlyutub'],
                        'zphone'    => $_SESSION['phone'],
                        'zprice'    => $_SESSION['price'],
                        'zdescription'=>    $_SESSION['desc'],
                        'zbeds'     => $_SESSION['beds'],
                        'zbaths'     => $_SESSION['baths'],
                        'zdeveloper'    => $_SESSION['developer'],
                        'zsize'=>    $_SESSION['size'],
                        'zlocation'=>    $_SESSION['location'],
                        'zcategoryy'    => $_SESSION['categoryy'],
                        'zreadyby'=>    $_SESSION['readyby'],
                        'zcategory' => $_SESSION['category'],
                        'zimage'    => $_SESSION['data'],
                        'zlistedby'     => $_SESSION['listedby'],
                        'zlocationcars' => $_SESSION['locationcars'],
                        'zcars' => $_SESSION['cars'],
                        'zpropertyreference'=>    $_SESSION['propertyreference'],
                        'zshortterm' => $_SESSION['shortterm'],
                        'zuser' => $_SESSION['uid']
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
                forrent(Name,typeforrent,urltour,urlyutub,phone,price,description,baths,beds,developer,	size,location,categoryy,readyby,categories,Image,listedby,locationcars,extras,propertyreference,shortterm,date,approve,user_Id)
                VALUES(:zname,:ztypeforrent,:zurltour,:zurlyutub,:zphone,:zprice,:zdescription,:zbaths,:zbeds,:zdeveloper,:zsize,:zlocation,:zcategoryy,:zreadyby,:zcategory,:zimage,:zlistedby,:zlocationcars,	:zcars,:zpropertyreference,:zshortterm,now(),1,:zuser)");
                    $stmtitemadd->execute(array(
                        'zname'     => $_SESSION['name'],
                        'ztypeforrent'=> $_SESSION['typeforrent'],
                        'zurltour'     => $_SESSION['urltour'],
                        'zurlyutub'     => $_SESSION['urlyutub'],
                        'zphone'    => $_SESSION['phone'],
                        'zprice'    => $_SESSION['price'],
                        'zdescription'=>    $_SESSION['desc'],
                        'zbeds'     => $_SESSION['beds'],
                        'zbaths'     => $_SESSION['baths'],
                        'zdeveloper'    => $_SESSION['developer'],
                        'zsize'=>    $_SESSION['size'],
                        'zlocation'=>    $_SESSION['location'],
                        'zcategoryy'    => $_SESSION['categoryy'],
                        'zreadyby'=>    $_SESSION['readyby'],
                        'zcategory' => $_SESSION['category'],
                        'zimage'    => $_SESSION['data'],
                        'zlistedby'     => $_SESSION['listedby'],
                        'zlocationcars' => $_SESSION['locationcars'],
                        'zcars' => $_SESSION['cars'],
                        'zpropertyreference'=>    $_SESSION['propertyreference'],
                        'zshortterm' => $_SESSION['shortterm'],
                        'zuser' => $_SESSION['uid']
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
                forrent(Name,typeforrent,urltour,urlyutub,phone,price,description,baths,beds,developer,	size,location,categoryy,readyby,categories,Image,listedby,locationcars,extras,propertyreference,shortterm,date,approve,user_Id)
                VALUES(:zname,:ztypeforrent,:zurltour,:zurlyutub,:zphone,:zprice,:zdescription,:zbaths,:zbeds,:zdeveloper,:zsize,:zlocation,:zcategoryy,:zreadyby,:zcategory,:zimage,:zlistedby,:zlocationcars,	:zcars,:zpropertyreference,:zshortterm,now(),1,:zuser)");
                    $stmtitemadd->execute(array(
                        'zname'     => $_SESSION['name'],
                        'ztypeforrent'=> $_SESSION['typeforrent'],
                        'zurltour'     => $_SESSION['urltour'],
                        'zurlyutub'     => $_SESSION['urlyutub'],
                        'zphone'    => $_SESSION['phone'],
                        'zprice'    => $_SESSION['price'],
                        'zdescription'=>    $_SESSION['desc'],
                        'zbeds'     => $_SESSION['beds'],
                        'zbaths'     => $_SESSION['baths'],
                        'zdeveloper'    => $_SESSION['developer'],
                        'zsize'=>    $_SESSION['size'],
                        'zlocation'=>    $_SESSION['location'],
                        'zcategoryy'    => $_SESSION['categoryy'],
                        'zreadyby'=>    $_SESSION['readyby'],
                        'zcategory' => $_SESSION['category'],
                        'zimage'    => $_SESSION['data'],
                        'zlistedby'     => $_SESSION['listedby'],
                        'zlocationcars' => $_SESSION['locationcars'],
                        'zcars' => $_SESSION['cars'],
                        'zpropertyreference'=>    $_SESSION['propertyreference'],
                        'zshortterm' => $_SESSION['shortterm'],
                        'zuser' => $_SESSION['uid']
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
                forrent(Name,typeforrent,urltour,urlyutub,phone,price,description,baths,beds,developer,	size,location,categoryy,readyby,categories,Image,listedby,locationcars,extras,propertyreference,shortterm,date,approve,user_Id)
                VALUES(:zname,:ztypeforrent,:zurltour,:zurlyutub,:zphone,:zprice,:zdescription,:zbaths,:zbeds,:zdeveloper,:zsize,:zlocation,:zcategoryy,:zreadyby,:zcategory,:zimage,:zlistedby,:zlocationcars,	:zcars,:zpropertyreference,:zshortterm,now(),1,:zuser)");
                    $stmtitemadd->execute(array(
                        'zname'     => $_SESSION['name'],
                        'ztypeforrent'=> $_SESSION['typeforrent'],
                        'zurltour'     => $_SESSION['urltour'],
                        'zurlyutub'     => $_SESSION['urlyutub'],
                        'zphone'    => $_SESSION['phone'],
                        'zprice'    => $_SESSION['price'],
                        'zdescription'=>    $_SESSION['desc'],
                        'zbeds'     => $_SESSION['beds'],
                        'zbaths'     => $_SESSION['baths'],
                        'zdeveloper'    => $_SESSION['developer'],
                        'zsize'=>    $_SESSION['size'],
                        'zlocation'=>    $_SESSION['location'],
                        'zcategoryy'    => $_SESSION['categoryy'],
                        'zreadyby'=>    $_SESSION['readyby'],
                        'zcategory' => $_SESSION['category'],
                        'zimage'    => $_SESSION['data'],
                        'zlistedby'     => $_SESSION['listedby'],
                        'zlocationcars' => $_SESSION['locationcars'],
                        'zcars' => $_SESSION['cars'],
                        'zpropertyreference'=>    $_SESSION['propertyreference'],
                        'zshortterm' => $_SESSION['shortterm'],
                        'zuser' => $_SESSION['uid']
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