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
                                                <a href="CommercialforRent.php" class="linkfrom">Property for Rent > Commercial for Rent</a>
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
                                                            <input id="model" type="hidden" value="Property For Rent > Commercial for Rent > Office for Rent" name="categoryy" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php echo locate(); ?>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Office for Rent" name="typeforrent" class="forminput form-select-lg" autocomplete="off" required="required">
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
                                                        <input class="form-check-input" type="checkbox" value="Available Furnished" id="a0" name="cars[]">
                                                        <label class="form-check-label" for="a0">
                                                        Available Furnished
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Available Networked" id="a1" name="cars[]">
                                                        <label class="form-check-label" for="a1">
                                                        Available Networked
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Conference Room" id="a2" name="cars[]">
                                                        <label class="form-check-label" for="a2">
                                                        Conference Room
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Covered Parking" id="a3" name="cars[]">
                                                        <label class="form-check-label" for="a3">
                                                        Covered Parking
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Dining in Building" id="a4" name="cars[]">
                                                        <label class="form-check-label" for="a4">
                                                        Dining in Building
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Retail in Building" id="a5" name="cars[]">
                                                        <label class="form-check-label" for="a5">
                                                        Retail in Building
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Shared Gym" id="a6" name="cars[]">
                                                        <label class="form-check-label" for="a6">
                                                        Shared Gym
                                                        </label></div>
                                                       </div>
                                                       <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Shared Spa" id="a7" name="cars[]">
                                                        <label class="form-check-label" for="a7">
                                                        Shared Spa
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="View of Landmark" id="a8" name="cars[]">
                                                        <label class="form-check-label" for="a8">
                                                        View of Landmark
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="View of Water" id="a9" name="cars[]">
                                                        <label class="form-check-label" for="a9">
                                                        View of Water
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
        include $tpl . 'footer.php';
    }
    else{
        header('Location:index.php');
        exit();
    }
ob_end_flush();
?>