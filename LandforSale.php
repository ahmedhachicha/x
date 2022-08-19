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
                                                <a href="forsale.php" class="linkfrom">Property for Sale > Land for Sale</a>
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
                                                            <input id="model" type="hidden" value="Property For sale > Property for Sale > Land for Sale" name="categoryy" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php echo locate(); ?>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Land for Sale lanns" name="typeforsale" class="forminput form-select-lg" autocomplete="off" required="required">
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
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="zonedfor" required >
                                                            <option value="">Zoned for</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "zonedfor", "", "", "Id");
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
                                                            <input id="name" type="text" name="sizearea" pattern="\d{0,9}" class="form-control forminput form-select-lg" autocomplete="off" placeholder="Approved build up area size">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            Enter a number.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Freehold" id="a0" name="cars[]">
                                                        <label class="form-check-label" for="a0">
                                                        Freehold
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
                                            <input id="title" type="hidden" name="sizearea" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['sizearea'] ?>" /> 
                                            <input id="title" type="hidden" name="propertyreference" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['propertyreference'] ?>" /> 
                                            <input id="title" type="hidden" name="buyerfee" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['buyerfee'] ?>" /> 
                                            <input id="title" type="hidden" name="sellerfee" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['sellerfee'] ?>" /> 
                                            <input id="title" type="hidden" name="categoryy" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['categoryy'] ?>"   />
                                            <?php   
                                                                            $locationcars   = $_POST['locationcars'];
                                                                            $getlocationcars = $con->prepare("SELECT * FROM locationcars WHERE Id = $locationcars");
                                                                            $getlocationcars->execute();
                                                                            $info = $getlocationcars->fetch();
                                                                            $namelocationcars = $info['Name']; ?>  
                                                                    <input id="title" type="hidden" name="locationcars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namelocationcars ?>"  />
                                            <?php
                                                                            $zonedfor = $_POST['zonedfor'];
                                                                            $getzonedfor = $con->prepare("SELECT * FROM zonedfor WHERE Id = $zonedfor");
                                                                            $getzonedfor->execute();
                                                                            $info = $getzonedfor->fetch();
                                                                            $namezonedfor = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="zonedfor" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namezonedfor ?>" /> 
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
                        $propertyreference = $_POST['propertyreference'];
                        $buyerfee   = $_POST['buyerfee'];
                        $sellerfee   = $_POST['sellerfee'];
                        $typeforsale     = $_POST['typeforsale'];
                        $listedby      = $_POST['listedby'];
                        $location   = $_POST['location'];
                        $urltour   = $_POST['urltour'];
                        $urlyutub   = $_POST['urlyutub'];
                        $checkcar = $_POST['checkcar'];
                        $checkcar = $_POST['checkcar'];
                        $zonedfor = $_POST['zonedfor'];
                        $sizearea = $_POST['sizearea'];
                        $locationcars   = $_POST['locationcars'];
                        $categoryy     = $_POST['categoryy'];
                       
                                    $stmtitemadd = $con->prepare("INSERT INTO
                                                            forsale(Name, locationcars, categoryy, categories, urltour, urlyutub, date, Image, user_Id, phone, price, typeforsale, location, description, size, propertyreference ,buyerfee ,sellerfee , listedby, extras, sizearea, zonedfor, Approve)
                                                            VALUES(:zname, :zlocationcars, :zcategoryy, :zcategory, :zurltour, :zurlyutub, now(), :zimage, :zuser, :zphone, :zprice, :ztypeforsale, :zlocation, :zdescription, :zsize, :zpropertyreference ,:zbuyerfee ,:zsellerfee , :zlistedby, :zextrascars, :zsizearea, :zoonedfor, 1)");
                                    $stmtitemadd->execute(array(
                                            'zlocationcars' => $locationcars,
                                            'zcategoryy'    => $categoryy,
                                            'zname'     => $name,
                                            'zcategory' => $category,
                                            'zurltour'     => $urltour,
                                            'zurlyutub'     => $urlyutub,
                                            'zimage'    => $data,
                                            'zuser'     => $_SESSION['uid'],   
                                            'zphone'    => $phone,                                                                     
                                            'zprice'    => $price,                                    
                                            'ztypeforsale'=> $typeforsale,
                                            'zlocation'=>    $location,
                                            'zdescription'=>    $desc,
                                            'zsize'=>    $size,
                                            'zpropertyreference'=>    $propertyreference,
                                            'zbuyerfee'=>    $buyerfee,
                                            'zsellerfee'=>    $sellerfee,
                                            'zlistedby'     => $listedby,
                                            'zextrascars' => $checkcar,
                                            'zsizearea' => $sizearea,
                                            'zoonedfor' => $zonedfor
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