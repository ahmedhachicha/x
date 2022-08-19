<?php 
ob_start();
session_start();
$pageTitle="New Cars";
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
                                                <a href="accessoriesselectronics.php" class="linkfrom">Home Audio & Turntables > Chargers/Batteries</a>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="community" name="category" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Chargers/Batteries" name="typeclassifieds" class="forminput form-select-lg" autocomplete="off" required="required">
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
                                                            <input id="name" type="text" name="price" class="form-control forminput form-select-lg" autocomplete="off" required="required" placeholder="Price">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <textarea class=" form input_contact" name="description" rows="4" cols="38" required="required" placeholder="Describe your electronic item"></textarea>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="ageclassifieds" required >
                                                            <option value="">Age</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "ageclassifieds", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                        This field is mandatory
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="usageclassifieds" required >
                                                            <option value="">Usage</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "usageclassifieds", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                        This field is mandatory
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="conditionclassifieds" required >
                                                            <option value="">Condition</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "conditionclassifieds", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                        This field is mandatory
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="warrantyclassifieds" required >
                                                            <option value="">Warranty</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "warrantyclassifieds", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                        This field is mandatory
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="brandclassifieds" required >
                                                            <option value="">Brand</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "brandclassifieds", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                        This field is mandatory
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="location" type="text" name="location" class="form-control forminput form-select-lg" autocomplete="off" required="required" placeholder="Locate your electronic item">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg " style="text-align: center;"> 
                                                <div class="row">
                                                    <div class="d-grid gap-2 col-6 ">
                                                        <input type="submit" value=" Add " class=" btn-primary forminput "/>
                                                    </div>
                                                </div>
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
                                        <form class="form-horizontal" action="?do=Insert" method="POST" enctype="multipart/form-data">
                                            <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="file" type="file" name="image[]" class="style_input_img forminput form-select-lg" required="required" multiple />
                                                    </div>
                                                    </div>
                                                </div>                                            
                                            <div id="rules-short" class="flame-text">
                                                <h1 class="flame-text flame-text--title4 flameagree">
                                                    Safety first!


                                                </h1>
                                                <h3 id="rules-read-aloud" class="new-paa__subheader-text textagreeone">
                                                    We review all ads to keep everyone on dubizzle safe and happy.
                                                </h3>
                                                <p class="new-paa__sub_subheader">Your ad <strong>will not</strong> go live if it is:</p>
                                                <ol id="rules-list" class="rule-setgeneral ">
                                                    <li>For any prohibited item or activity that violates UAE law</li>
                                                    <li>In the wrong category</li>
                                                    <li>Placed multiple times, or in multiple categories</li>
                                                    <li>With fraudulent or misleading information</li>
                                                    <li>For an item that is located outside the UAE</li>
                                                </ol>
                                            </div>
                                            <p class="dog-ear_for--more-info" style=" font-size: 14px; color: #626465; text-align: center;">For more information, read our
                                                <div style="text-align:center;">
                                                    <a class="" id="tcs" href="#">
                                                        terms and conditions
                                                    </a>                                        
                                                </div>
                                            </p>
                                            <input id="title" type="hidden" name="phone" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['phone'] ?>" />
                                            <input id="title" type="hidden" name="price" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['price'] ?>" />
                                            <input id="title" type="hidden" name="category" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['category'] ?>"   />
                                            <input id="title" type="hidden" name="typeclassifieds" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['typeclassifieds'] ?>"   />  
                                            <input id="title" type="hidden" name="location" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['location']; ?>"  />
                                            <input id="title" type="hidden" name="name" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['name'] ?>"  />    
                                            <input id="title" type="hidden" name="description" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['description'] ?>" /> 
                                            <?php
                                                                            $ageclassifieds = $_POST['ageclassifieds'];
                                                                            $getageclassifieds = $con->prepare("SELECT * FROM ageclassifieds WHERE Id = $ageclassifieds");
                                                                            $getageclassifieds->execute();
                                                                            $info = $getageclassifieds->fetch();
                                                                            $nameageclassifieds = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="ageclassifieds" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameageclassifieds ?>" /> 
                                                                    <?php
                                                                            $usageclassifieds = $_POST['usageclassifieds'];
                                                                            $getusageclassifieds = $con->prepare("SELECT * FROM usageclassifieds WHERE Id = $usageclassifieds");
                                                                            $getusageclassifieds->execute();
                                                                            $info = $getusageclassifieds->fetch();
                                                                            $nameusageclassifieds = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="usageclassifieds" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameusageclassifieds ?>" /> 
                                                                    <?php
                                                                            $conditionclassifieds = $_POST['conditionclassifieds'];
                                                                            $getconditionclassifieds = $con->prepare("SELECT * FROM conditionclassifieds WHERE Id = $conditionclassifieds");
                                                                            $getconditionclassifieds->execute();
                                                                            $info = $getconditionclassifieds->fetch();
                                                                            $nameconditionclassifieds = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="conditionclassifieds" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameconditionclassifieds ?>" /> 
                                                                    <?php
                                                                            $warrantyclassifieds = $_POST['warrantyclassifieds'];
                                                                            $getwarrantyclassifieds = $con->prepare("SELECT * FROM warrantyclassifieds WHERE Id = $warrantyclassifieds");
                                                                            $getwarrantyclassifieds->execute();
                                                                            $info = $getwarrantyclassifieds->fetch();
                                                                            $namewarrantyclassifieds = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="warrantyclassifieds" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namewarrantyclassifieds ?>" />
                                                                    <?php
                                                                            $brandclassifieds = $_POST['brandclassifieds'];
                                                                            $getbrandclassifieds = $con->prepare("SELECT * FROM brandclassifieds WHERE Id = $brandclassifieds");
                                                                            $getbrandclassifieds->execute();
                                                                            $info = $getbrandclassifieds->fetch();
                                                                            $namebrandclassifieds = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="brandclassifieds" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namebrandclassifieds ?>" />
                                                                                                                         
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
        elseif($do == 'Insert'){
            echo "<h1 class='text-center h1-member'>Insert Classifieds</h1>";
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $data = '';
                foreach($_FILES['image']['name'] as $key=>$val)
                {
                    $imageName = $_FILES['image']['name'][$key];
                    $imageSize = $_FILES['image']['size'][$key];
                    $imageTmp  = $_FILES['image']['tmp_name'][$key];
                    $imageTaype= $_FILES['image']['type'][$key];
                    $imageAllowedExtension = array("jpeg", "jpg", "png", "gif");
                    $imageExtension = strtolower(substr(strrchr($imageName, '.'), 1));
                    
                        move_uploaded_file($imageTmp, "admin\Update_Imageclassifieds\uploads\avatars\\" . $imageName);
                        $data   .=$imageName." ";
                }  
                $category     = $_POST['category'];
                $name       = $_POST['name'];
                $phone       = $_POST['phone'];
                $price      = $_POST['price'];   
                $desc      = $_POST['description'];   
                $classifieds     = $_POST['typeclassifieds'];
                $location   = $_POST['location'];
                $usageclassifieds   = $_POST['usageclassifieds'];
                $conditionclassifieds   = $_POST['conditionclassifieds'];
                $brandclassifieds   = $_POST['brandclassifieds'];

                $formErrors = array();
                    if(empty($name)){
                        $formErrors[] = 'Name  Can\'t be<strong>Empty.</strong>';
                    }
                    foreach($formErrors as $error){
                        echo '<div class="alert alert-danger">' . $error . '</div>';
                    }
                    if(empty($formErrors))
                    {
                        $check = checkItem("Id", "classifieds", $name);
                        if($check == 1)
                        {
                            echo '<div class="alert alert-danger">Sorry This Classifieds Is Exist.</div>';
                            echo "<a href='adclassifieds.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Classifieds page.</a>";
                        }
                        else{
                            $stmtitemadd = $con->prepare("INSERT INTO
                                                    classifieds(Name, categories, brandclassifieds, usageclassifieds, conditionclassifieds, date, Image, user_Id, phone, price, typeclassifieds, description, location, Approve)
                                                    VALUES(:zname, :zcategory, :zbrandclassifieds, :zusageclassifieds, :zconditionclassifieds, now(), :zimage, :zuser, :zphone, :zprice, :zclassifieds, :zdescription, :zlocation ,1)");
                            $stmtitemadd->execute(array(
                                    'zname'     => $name,
                                    'zcategory' => $category,
                                    'zbrandclassifieds' => $brandclassifieds,
                                    'zimage'    => $data,
                                    'zuser'     => $_SESSION['uid'],   
                                    'zphone'    => $phone,                                                                     
                                    'zprice'    => $price,                                    
                                    'zclassifieds'=> $classifieds,
                                    'zdescription'=>    $desc,
                                    'zlocation'=>    $location,
                                    'zusageclassifieds'=>    $usageclassifieds,
                                    'zconditionclassifieds'=>    $conditionclassifieds
                                    
                            ));
                            echo "<div class='alert alert-success'>" . $stmtitemadd->rowCount() . ' Record Inserted.</div>';
                            echo "<a href='adclassifieds.php?do=Add' class='btn btn-secondary'><ion-icon name='return-up-back-outline'></ion-icon> Return to Add Classifieds page.</a>";
                        }
                    }
            }
            else{
                echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                echo "<a href='adclassifieds.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Classifieds page.</a>";
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