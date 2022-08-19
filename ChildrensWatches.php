<?php 
ob_start();
session_start();
$pageTitle="New Classifieds";
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
                                                <a href="WatchesJewelry.php" class="linkfrom">Jewelry & Watches > Watches > Children's Watches</a>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="classifieds" name="category" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Children's Watches menspcll" name="typeclassifieds" class="forminput form-select-lg" autocomplete="off" required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Jewelry & Watches > Watches > Children's Watches" name="categoryy" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
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
                                                        <textarea class=" form input_contact" name="description" rows="4" cols="38" required="required" placeholder="Describe your jewelry or watch"></textarea>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><?php echo images(); ?>
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
                                                    <div class="row">
                                                    <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Beads" id="a0" name="cars[]">
                                                        <label class="form-check-label" for="a0">
                                                        Beads
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Bronze" id="a1" name="cars[]">
                                                        <label class="form-check-label" for="a1">
                                                        Bronze
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Ceramic" id="a2" name="cars[]">
                                                        <label class="form-check-label" for="a2">
                                                        Ceramic
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Crystal" id="a3" name="cars[]">
                                                        <label class="form-check-label" for="a3">
                                                        Crystal
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="CZ" id="a4" name="cars[]">
                                                        <label class="form-check-label" for="a4">
                                                        CZ
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Diamond" id="ba5" name="cars[]">
                                                        <label class="form-check-label" for="ba5">
                                                        Diamond
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Gemstone" id="va6" name="cars[]">
                                                        <label class="form-check-label" for="va6">
                                                        Gemstone
                                                        </label></div>
                                                       </div>
                                                       <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Leather" id="ka7" name="cars[]">
                                                        <label class="form-check-label" for="ka7">
                                                        Leather
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Plastic" id="ja8" name="cars[]">
                                                        <label class="form-check-label" for="ja8">
                                                        Plastic
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Platinum" id="ha9" name="cars[]">
                                                        <label class="form-check-label" for="ha9">
                                                        Platinum
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Rhinestones" id="aii9" name="cars[]">
                                                        <label class="form-check-label" for="aii9">
                                                        Rhinestones
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Amber" id="ai9" name="cars[]">
                                                        <label class="form-check-label" for="ai9">
                                                        Amber
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Rubber" id="ia9" name="cars[]">
                                                        <label class="form-check-label" for="ia9">
                                                        Rubber
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Semi Precious/Birth Stones" id="ua9" name="cars[]">
                                                        <label class="form-check-label" for="ua9">
                                                        Semi Precious/Birth Stones
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Shell, Bone, Coral" id="au9" name="cars[]">
                                                        <label class="form-check-label" for="au9">
                                                        Shell, Bone, Coral
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Silver" id="a9y" name="cars[]">
                                                        <label class="form-check-label" for="a9y">
                                                        Silver
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Steel" id="at9" name="cars[]">
                                                        <label class="form-check-label" for="at9">
                                                        Steel
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Titanium" id="ar9" name="cars[]">
                                                        <label class="form-check-label" for="ar9">
                                                        Titanium
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="White Gold" id="ae9" name="cars[]">
                                                        <label class="form-check-label" for="ae9">
                                                        White Gold
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Wood" id="az9" name="cars[]">
                                                        <label class="form-check-label" for="az9">
                                                        Wood
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Yellow Gold" id="aaa9" name="cars[]">
                                                        <label class="form-check-label" for="aaa9">
                                                        Yellow Gold
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Other Material" id="aa9" name="cars[]">
                                                        <label class="form-check-label" for="aa9">
                                                        Other Material
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Other Metal" id="a99" name="cars[]">
                                                        <label class="form-check-label" for="a99">
                                                        Other Metal
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
                                                                    move_uploaded_file($imageTmp, "admin/Update_Imageclassifieds/uploads/avatars/" . $image);
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
                                            <input id="title" type="hidden" name="category" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['category'] ?>"   />
                                            <input id="title" type="hidden" name="typeclassifieds" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['typeclassifieds'] ?>"   />  
                                            <input id="title" type="hidden" name="location" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['location']; ?>"  />
                                            <input id="title" type="hidden" name="name" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['name'] ?>"  />    
                                            <input id="title" type="hidden" name="description" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['description'] ?>" /> 
                                            <input id="title" type="hidden" name="categoryy" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['categoryy'] ?>"   />
                                            <?php   
                                                                            $locationcars   = $_POST['locationcars'];
                                                                            $getlocationcars = $con->prepare("SELECT * FROM locationcars WHERE Id = $locationcars");
                                                                            $getlocationcars->execute();
                                                                            $info = $getlocationcars->fetch();
                                                                            $namelocationcars = $info['Name']; ?>  
                                                                    <input id="title" type="hidden" name="locationcars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namelocationcars ?>"  />
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
                        $category     = $_POST['category'];
                        $name       = $_POST['name'];
                        $phone       = $_POST['phone'];
                        $price      = $_POST['price'];   
                        $desc      = $_POST['description'];   
                        $classifieds     = $_POST['typeclassifieds'];
                        $location   = $_POST['location'];
                        $usageclassifieds   = $_POST['usageclassifieds'];
                        $conditionclassifieds   = $_POST['conditionclassifieds'];
                        $ageclassifieds   = $_POST['ageclassifieds'];
                        $checkcar = $_POST['checkcar'];
                        $locationcars   = $_POST['locationcars'];
                        $categoryy     = $_POST['categoryy'];
                                    $stmtitemadd = $con->prepare("INSERT INTO
                                                            classifieds(Name, locationcars, categoryy, categories, usageclassifieds, conditionclassifieds, ageclassifieds, date, Image, user_Id, phone, price, typeclassifieds, description, location, extrasclassifieds, Approve)
                                                            VALUES(:zname, :zlocationcars, :zcategoryy, :zcategory, :zusageclassifieds, :zconditionclassifieds, :zageclassifieds, now(), :zimage, :zuser, :zphone, :zprice, :zclassifieds, :zdescription, :zlocation, :zextrasclassifieds, 1)");
                                    $stmtitemadd->execute(array(
                                            'zlocationcars'     => $locationcars,
                                            'zcategoryy'     => $categoryy,
                                            'zname'     => $name,
                                            'zcategory' => $category,
                                            'zimage'    => $data,
                                            'zuser'     => $_SESSION['uid'],   
                                            'zphone'    => $phone,                                                                     
                                            'zprice'    => $price,                                    
                                            'zclassifieds'=> $classifieds,
                                            'zdescription'=>    $desc,
                                            'zlocation'=>    $location,
                                            'zusageclassifieds'=>    $usageclassifieds,
                                            'zconditionclassifieds'=>    $conditionclassifieds,
                                            'zageclassifieds'=>    $ageclassifieds,
                                            'zextrasclassifieds' => $checkcar
                                            
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