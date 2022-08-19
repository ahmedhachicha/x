<?php 
ob_start();
session_start();
$pageTitle="New Property for Sale";
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
                                                <a href="ResidentialforSale.php" class="linkfrom">Residential for Sale > Townhouse</a>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="forsale" name="category" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                <input id="model" type="hidden" value="Property For sale > Residential for Sale > Townhouse" name="categoryy" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php echo locate(); ?>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Townhouse reden" name="typeforsale" class="forminput form-select-lg" autocomplete="off" required="required">
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
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="totalclosing" class="form-control forminput form-select-lg" autocomplete="off" pattern="\d{0,9}" placeholder="Total closing fee">
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
                                                            <input id="name" type="text" name="annualfee" pattern="\d{0,9}" class="form-control forminput form-select-lg" autocomplete="off" placeholder="Annual community fee">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            Enter a number.
                                                            </div>
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
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="buyerfee" pattern="\d{0,9}" class="form-control forminput form-select-lg" autocomplete="off" placeholder="Buyer Transfer Fee">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            Enter a number.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="sellerfee" pattern="\d{0,9}" class="form-control forminput form-select-lg" autocomplete="off" placeholder="Seller Transfer Fee">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            Enter a number.
                                                            </div>
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
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="maintenancefee" pattern="\d{0,9}" class="form-control forminput form-select-lg" autocomplete="off" placeholder="Maintenance Fee">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            Enter a number.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="occupancystatus" required >
                                                            <option value="">Occupancy Status</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "occupancystatus", "", "", "Id");
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
                                                    <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Balcony" id="a0" name="cars[]">
                                                        <label class="form-check-label" for="a0">
                                                        Balcony
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Built in Kitchen Appliances" id="a1" name="cars[]">
                                                        <label class="form-check-label" for="a1">
                                                        Built in Kitchen Appliances
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Built in Wardrobes" id="a2" name="cars[]">
                                                        <label class="form-check-label" for="a2">
                                                        Built in Wardrobes
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Central A/C & Heating" id="a3" name="cars[]">
                                                        <label class="form-check-label" for="a3">
                                                        Central A/C & Heating
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Concierge Service" id="a4" name="cars[]">
                                                        <label class="form-check-label" for="a4">
                                                        Concierge Service
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Covered Parking" id="a5" name="cars[]">
                                                        <label class="form-check-label" for="a5">
                                                        Covered Parking
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Maid Service" id="a6" name="cars[]">
                                                        <label class="form-check-label" for="a6">
                                                        Maid Service
                                                        </label></div>
                                                       </div>
                                                       <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Maids Room" id="a7" name="cars[]">
                                                        <label class="form-check-label" for="a7">
                                                        Maids Room
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Pets Allowed" id="a8" name="cars[]">
                                                        <label class="form-check-label" for="a8">
                                                        Pets Allowed
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Private Garden" id="a9" name="cars[]">
                                                        <label class="form-check-label" for="a9">
                                                        Private Garden
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Private Gym" id="aa9" name="cars[]">
                                                        <label class="form-check-label" for="aa9">
                                                        Private Gym
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Private Jacuzzi" id="aaa9" name="cars[]">
                                                        <label class="form-check-label" for="aaa9">
                                                        Private Jacuzzi
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Private Pool" id="ab9" name="cars[]">
                                                        <label class="form-check-label" for="ab9">
                                                        Private Pool
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Security" id="ac9" name="cars[]">
                                                        <label class="form-check-label" for="ac9">
                                                        Security
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Shared Gym" id="ae9" name="cars[]">
                                                        <label class="form-check-label" for="ae9">
                                                        Shared Gym
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Shared Pool" id="aee9" name="cars[]">
                                                        <label class="form-check-label" for="aee9">
                                                        Shared Pool
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Shared Spa" id="aq9" name="cars[]">
                                                        <label class="form-check-label" for="aq9">
                                                        Shared Spa
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Study" id="aw9" name="cars[]">
                                                        <label class="form-check-label" for="aw9">
                                                        Study
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="View of Landmark" id="ar9" name="cars[]">
                                                        <label class="form-check-label" for="ar9">
                                                        View of Landmark
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="View of Water" id="ay9" name="cars[]">
                                                        <label class="form-check-label" for="ay9">
                                                        View of Water
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Walk-in Closet" id="ah9" name="cars[]">
                                                        <label class="form-check-label" for="ah9">
                                                        Walk-in Closet
                                                        </label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="building" class="form-control forminput form-select-lg" autocomplete="off" placeholder="Building">
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
                                                                    move_uploaded_file($imageTmp, "admin/Update_Imageforsale/uploads/avatars/" . $image);
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
                                            <input id="title" type="hidden" name="typeforsale" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['typeforsale'] ?>"   />  
                                            <input id="title" type="hidden" name="location" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['location']; ?>"  />
                                            <input id="title" type="hidden" name="name" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['name'] ?>"  />    
                                            <input id="title" type="hidden" name="description" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['description'] ?>" /> 
                                            <input id="title" type="hidden" name="size" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['size'] ?>" /> 
                                            <input id="title" type="hidden" name="totalclosing" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['totalclosing'] ?>" /> 
                                            <input id="title" type="hidden" name="developer" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['developer'] ?>" /> 
                                            <input id="title" type="hidden" name="readyby" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['readyby'] ?>" /> 
                                            <input id="title" type="hidden" name="annualfee" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['annualfee'] ?>" /> 
                                            <input id="title" type="hidden" name="propertyreference" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['propertyreference'] ?>" /> 
                                            <input id="title" type="hidden" name="buyerfee" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['buyerfee'] ?>" /> 
                                            <input id="title" type="hidden" name="sellerfee" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['sellerfee'] ?>" /> 
                                            <input id="title" type="hidden" name="maintenancefee" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['maintenancefee'] ?>" /> 
                                            <input id="title" type="hidden" name="building" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['building'] ?>" /> 
                                            <input id="title" type="hidden" name="categoryy" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['categoryy'] ?>"   />
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
                                                                            $occupancystatus = $_POST['occupancystatus'];
                                                                            $getoccupancystatus = $con->prepare("SELECT * FROM occupancystatus WHERE Id = $occupancystatus");
                                                                            $getoccupancystatus->execute();
                                                                            $info = $getoccupancystatus->fetch();
                                                                            $nameoccupancystatus = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="occupancystatus" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameoccupancystatus ?>" />
                                            <?php
                                            function myfunction($v1,$v2)
                                            {
                                            return $v1 . "-" . $v2;
                                            }
                                            if(empty($_POST['cars'])){
                                                $cars1 = array('Null');
                                                ?>
                                                <input id="hidden" type="hidden" name="checkcar" class="form-control form-select-lg" autocomplete="off" value="<?php print_r(array_reduce($cars1,"myfunction")); ?>" />
                                                <?php
                                            }
                                            else{
                                                $carss = $_POST['cars'];
                                                ?>
                                                <input id="hidden" type="hidden" name="checkcar" class="form-control form-select-lg" autocomplete="off" value="<?php print_r(array_reduce($carss,"myfunction")); ?>" />
                                                <?php
                                            }?>                         
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
                        $category     = $_POST['category'];
                        $name       = $_POST['name'];
                        $phone       = $_POST['phone'];
                        $price      = $_POST['price'];   
                        $desc      = $_POST['description'];   
                        $size      = $_POST['size'];   
                        $developer      = $_POST['developer'];   
                        $totalclosing      = $_POST['totalclosing'];   
                        $readyby      = $_POST['readyby'];   
                        $annualfee = $_POST['annualfee'];
                        $propertyreference = $_POST['propertyreference'];
                        $buyerfee   = $_POST['buyerfee'];
                        $sellerfee   = $_POST['sellerfee'];
                        $maintenancefee   = $_POST['maintenancefee'];
                        $typeforsale     = $_POST['typeforsale'];
                        $occupancystatus       = $_POST['occupancystatus'];
                        $building      = $_POST['building'];
                        $beds      = $_POST['beds'];
                        $baths      = $_POST['baths'];
                        $listedby      = $_POST['listedby'];
                        $location   = $_POST['location'];
                        $urltour   = $_POST['urltour'];
                        $urlyutub   = $_POST['urlyutub'];
                        $checkcar = $_POST['checkcar'];
                        $locationcars   = $_POST['locationcars'];
                        $categoryy     = $_POST['categoryy'];
                            
                                    $stmtitemadd = $con->prepare("INSERT INTO
                                                            forsale(Name, locationcars, categoryy, beds, baths, categories, urltour, urlyutub, date, Image, user_Id, phone, price, typeforsale, location, occupancystatus, description, size, totalclosing, readyby, annualfee ,propertyreference ,buyerfee ,sellerfee ,maintenancefee , building, developer, listedby, extras,Approve)
                                                            VALUES(:zname, :zlocationcars, :zcategoryy, :zbeds, :zbaths, :zcategory, :zurltour, :zurlyutub, now(), :zimage, :zuser, :zphone, :zprice, :ztypeforsale, :zlocation, :zocuupancystatus, :zdescription, :zsize, :ztotalclosing, :zreadyby, :zannualfee, :zpropertyreference ,:zbuyerfee ,:zsellerfee ,:zmaintenancefee ,:zbuilding, :zdeveloper, :zlistedby, :zextrascars, 1)");
                                    $stmtitemadd->execute(array(
                                            'zlocationcars' => $locationcars,
                                            'zcategoryy'    => $categoryy,
                                            'zname'     => $name,
                                            'zbeds'     => $beds,
                                            'zbaths'     => $baths,
                                            'zcategory' => $category,
                                            'zurltour'     => $urltour,
                                            'zurlyutub'     => $urlyutub,
                                            'zimage'    => $data,
                                            'zuser'     => $_SESSION['uid'],   
                                            'zphone'    => $phone,                                                                     
                                            'zprice'    => $price,                                    
                                            'ztypeforsale'=> $typeforsale,
                                            'zlocation'=>    $location,
                                            'zocuupancystatus'=>    $occupancystatus,
                                            'zdescription'=>    $desc,
                                            'zsize'=>    $size,
                                            'ztotalclosing'=>    $totalclosing,
                                            'zreadyby'=>    $readyby,
                                            'zannualfee'=>    $annualfee,
                                            'zpropertyreference'=>    $propertyreference,
                                            'zbuyerfee'=>    $buyerfee,
                                            'zsellerfee'=>    $sellerfee,
                                            'zmaintenancefee'=>    $maintenancefee,
                                            'zbuilding'=>    $building,
                                            'zdeveloper'    => $developer,
                                            'zlistedby'     => $listedby,
                                            'zextrascars' => $checkcar
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