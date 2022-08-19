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
                                                            <input id="model" type="hidden" value="Sailing Gear" name="typeparts" class="forminput form-select-lg" autocomplete="off" required="required">
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
                                                            <input id="name" type="tel" name="phone" class="form-control forminput form-select-lg" autocomplete="off" required="required" placeholder="Phone Number">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
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
                                                        <textarea class=" form input_contact" name="description" rows="4" cols="38" required="required" placeholder="Describe your accessory"></textarea>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="location" type="text" name="location" class="form-control forminput form-select-lg" autocomplete="off" required="required" placeholder="Locate your accessory">
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
                                            <p class="dog-ear_for--more-info" style="font-size: 14px; color: #626465; text-align: center;">For more information, read our
                                            <div>
                                                <a class="" id="tcs" href="#">
                                                    terms and conditions
                                                </a>                                        
                                            </div>
                                        </p>
                                        <form class="form-horizontal" action="?do=Insert" method="POST" enctype="multipart/form-data">
                                            <input id="title" type="hidden" name="phone" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['phone'] ?>" />
                                            <input id="title" type="hidden" name="category" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['category'] ?>"   />
                                            <input id="title" type="hidden" name="typeparts" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['typeparts'] ?>"   />  
                                            <input id="title" type="hidden" name="price" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['price'] ?>"  />    
                                            <input id="title" type="hidden" name="location" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['location']; ?>"  />
                                            <input id="title" type="hidden" name="name" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['name'] ?>"  />    
                                            <input id="title" type="hidden" name="description" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['description'] ?>" /> 
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
            echo "<h1 class='text-center h1-member'>Insert Auto Accessories & Parts</h1>";
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                
                $name       = $_POST['name'];
                $phone       = $_POST['phone'];
                $category     = $_POST['category'];
                $desc       = $_POST['description'];
                $typeparts     = $_POST['typeparts'];
                $sellertypeparts   = $_POST['sellertypeparts'];
                $price      = $_POST['price'];
                $Location      = $_POST['location'];
                $usageparts    = $_POST['usageparts'];
                $conditionparts = $_POST['conditionparts'];

                $formErrors = array();
                    if(empty($name)){
                        $formErrors[] = 'Name  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($phone)){
                        $formErrors[] = 'phone  Can\'t be<strong>Empty.</strong>';
                    }
                    if($conditionparts == 0)
                    {
                        $formErrors[] = 'conditionparts Cant\'t be <strong>Empty.</strong>';
                    }
                    if($sellertypeparts == 0){
                        $formErrors[] = 'sellertypeparts  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($price))
                    {
                        $formErrors[] = 'Price Cant\'t be <strong>Empty.</strong>';
                    }
                    if(empty($Location))
                    {
                        $formErrors[] = 'You Must Choose the <strong>Location.</strong>';
                    }
                    if($usageparts == 0)
                    {
                        $formErrors[] = 'You Must Choose the <strong>Tyoe Gas.</strong>';
                    }
                    foreach($formErrors as $error){
                        echo '<div class="alert alert-danger">' . $error . '</div>';
                    }
                    if(empty($formErrors))
                    {
    
                        $check = checkItem("Id", "autoaccparts", $name);
                        if($check == 1)
                        {
                            echo '<div class="alert alert-danger">Sorry This Auto Accessories & Parts Is Exist.</div>';
                            echo "<a href='adautoAccparts.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Auto Accessories & Parts page.</a>";
                        }
                        else{
                        // Drivetrain,Engine,Transmission,Citympg,Highwaympg,sellertypeparts,Interiorcolor,Vin
                            $stmtitemadd = $con->prepare("INSERT INTO
                                                    autoaccparts(Name, phone, category, user_Id, sellertypeparts, Price, Add_date, Description, Location, usageparts, conditionparts, typeparts, Approve)
                                                    VALUES(:zname, :zphone, :zcategory, :zuser, :zsellertypeparts, :zprice, now(), :zDescription, :zLocation, :zusageparts, :zconditionparts, :ztypeparts, 1)");
                            $stmtitemadd->execute(array(
                                    'zname'     => $name,
                                    'zphone'    =>$phone,
                                    'zcategory' => $category,
                                    'zuser'     => $_SESSION['uid'],
                                    'zsellertypeparts' => $sellertypeparts,
                                    'zprice'    => $price,
                                    'zDescription'     => $desc,
                                    'zLocation'    => $Location,
                                    'zusageparts'  => $usageparts,
                                    'zconditionparts' => $conditionparts,
                                    'ztypeparts' => $typeparts
                            ));
                            echo "<div class='alert alert-success'>" . $stmtitemadd->rowCount() . ' Record Inserted.</div>';
                            echo "<a href='adautoAccparts.php?do=Add' class='btn btn-secondary'><ion-icon name='return-up-back-outline'></ion-icon> Return to Add Auto Accessories & Parts page.</a>";
                        }
                    }
            }
            else{
                echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                echo "<a href='adautoAccparts.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Auto Accessories & Parts page.</a>";
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