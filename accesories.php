<?php 
ob_start();
session_start();
$pageTitle="New Auto Accessories & Parts";
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
                                                <a href="motorcycleparts.php" class="linkfrom">Motorcycle Parts > Accessories</a>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Auto Accessories & Parts " name="category" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Auto Accessories & Parts > Motorcycle Parts > Accessories" name="categoryy" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php echo locate(); ?>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Accessories moaap" name="typeparts" class="forminput form-select-lg" autocomplete="off" required="required">
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
                                                        <textarea class=" form input_contact" name="description" rows="4" cols="38" required="required" placeholder="Describe your accessory"></textarea>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><?php echo images(); ?>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="usageparts" required="required" >
                                                            <option  value="" >Usage</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "usageparts", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="conditionparts" required="required" >
                                                            <option  value="">Condition Parts</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "conditionparts", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="sellertypeparts" required="required" >
                                                            <option  value="">Seller Type Parts</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "sellertypeparts", "", "", "Id");
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
                                                        <!-- <div class="col-lg-12"><div class="form-check">
                                                        <h5>Extra</h5>
                                                        </div>
                                                        </div> -->
                                                    <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="All Motorcycles" id="a0" name="cars[]">
                                                        <label class="form-check-label" for="a0">
                                                        All Motorcycles
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Bajaj" id="a1" name="cars[]">
                                                        <label class="form-check-label" for="a1">
                                                        Bajaj
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="BMW Motorcycle" id="a2" name="cars[]">
                                                        <label class="form-check-label" for="a2">
                                                        BMW Motorcycle
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Ducati" id="a3" name="cars[]">
                                                        <label class="form-check-label" for="a3">
                                                        Ducati
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Harley Davidson" id="a4" name="cars[]">
                                                        <label class="form-check-label" for="a4">
                                                        Harley Davidson
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Honda Motorcycle" id="a5" name="cars[]">
                                                        <label class="form-check-label" for="a5">
                                                        Honda Motorcycle
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Kawasaki" id="a6" name="cars[]">
                                                        <label class="form-check-label" for="a6">
                                                        Kawasaki
                                                        </label></div>
                                                       </div>
                                                       <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="KTM" id="a7" name="cars[]">
                                                        <label class="form-check-label" for="a7">
                                                        KTM
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Suzuki Motorcycle" id="a8" name="cars[]">
                                                        <label class="form-check-label" for="a8">
                                                        Suzuki Motorcycle
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Triumph" id="a9" name="cars[]">
                                                        <label class="form-check-label" for="a9">
                                                        Triumph
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Yamaha" id="a10" name="cars[]">
                                                        <label class="form-check-label" for="a10">
                                                        Yamaha
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Other Motorcycle Manufacturer" id="a19" name="cars[]">
                                                        <label class="form-check-label" for="a19">
                                                        Other Motorcycle Manufacturer
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
                                                                    move_uploaded_file($imageTmp, "admin/Update_Imageparts/uploads/avatars/" . $image);
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
                                            <input id="title" type="hidden" name="typeparts" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['typeparts'] ?>"   />  
                                            <input id="title" type="hidden" name="price" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['price'] ?>"  />    
                                            <input id="title" type="hidden" name="location" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['location']; ?>"  />
                                            <input id="title" type="hidden" name="name" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['name'] ?>"  />    
                                            <input id="title" type="hidden" name="description" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['description'] ?>" />
                                            <?php   
                                                                            $locationcars   = $_POST['locationcars'];
                                                                            $getlocationcars = $con->prepare("SELECT * FROM locationcars WHERE Id = $locationcars");
                                                                            $getlocationcars->execute();
                                                                            $info = $getlocationcars->fetch();
                                                                            $namelocationcars = $info['Name']; ?>  
                                                                    <input id="title" type="hidden" name="locationcars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namelocationcars ?>"  /> 
                                            <?php
                                                                            $usageparts = $_POST['usageparts'];
                                                                            $getusageparts = $con->prepare("SELECT * FROM usageparts WHERE Id = $usageparts");
                                                                            $getusageparts->execute();
                                                                            $info = $getusageparts->fetch();
                                                                            $nameusageparts = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="usageparts" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameusageparts ?>" /> 
                                            <?php
                                                                            $conditionparts = $_POST['conditionparts'];
                                                                            $getconditionparts = $con->prepare("SELECT * FROM conditionparts WHERE Id = $conditionparts");
                                                                            $getconditionparts->execute();
                                                                            $info = $getconditionparts->fetch();
                                                                            $nameconditionparts = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="conditionparts" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameconditionparts ?>" /> 
                                                                    <?php
                                                                            $sellertypeparts = $_POST['sellertypeparts'];
                                                                            $getsellertypeparts = $con->prepare("SELECT * FROM sellertypeparts WHERE Id = $sellertypeparts");
                                                                            $getsellertypeparts->execute();
                                                                            $info = $getsellertypeparts->fetch();
                                                                            $namesellertypeparts = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="sellertypeparts" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namesellertypeparts ?>" /> 
                                            <?php
                                            function myfunction($v1,$v2)
                                            {
                                            return $v1 . "-" . $v2;
                                            }
                                            $carss = $_POST['cars'];
                                               ?>
                                              <input id="title" type="hidden" name="checkcar" class="form-control form-select-lg" autocomplete="off" value="<?php print_r(array_reduce($carss,"myfunction")); ?>" /> 
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
                                $name = $_POST['name'];
                                $phone = $_POST['phone'];
                                $description = $_POST['description'];
                                $category = $_POST['category'];
                                $typeparts = $_POST['typeparts'];
                                $sellertypeparts = $_POST['sellertypeparts'];
                                $price = $_POST['price'];
                                $location = $_POST['location'];
                                $usageparts = $_POST['usageparts'];
                                $conditionparts = $_POST['conditionparts'];
                                $locationcars = $_POST['locationcars'];
                                $categoryy = $_POST['categoryy'];
                                $checkcar = $_POST['checkcar'];

                                $stmtitemadd = $con->prepare("INSERT INTO
                                                        autoaccparts(Image, locationcars, Name, phone, category, categoryy , user_Id, sellertypeparts, Price, Add_date, Description, Location, usageparts, conditionparts, typeparts, extrasparts, Approve)
                                                        VALUES(:zimage, :zlocate, :zname, :zphone, :zcategory, :zcategoryy, :zuser, :zsellertypeparts, :zprice, now(), :zDescription, :zLocation, :zusageparts, :zconditionparts, :ztypeparts, :zextrascars, 1)");
                                $stmtitemadd->execute(array(
                                        'zlocate' => $locationcars,
                                        'zimage'    => $data,
                                        'zname'     => $name,
                                        'zphone'    =>$phone,
                                        'zcategory' => $category,
                                        'zcategoryy' => $categoryy,
                                        'zuser'     => $_SESSION['uid'],
                                        'zsellertypeparts' => $sellertypeparts,
                                        'zprice'    => $price,
                                        'zDescription'     => $description,
                                        'zLocation'    => $location,
                                        'zusageparts'  => $usageparts,
                                        'zconditionparts' => $conditionparts,
                                        'zextrascars' => $checkcar,
                                        'ztypeparts' => $typeparts
                                ));
                                echo finads();
                    }
                    else{
                        echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                        echo "<a href='adautoAccparts.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Auto Accessories & Parts page.</a>";
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