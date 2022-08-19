<?php 
ob_start();
session_start();
$pageTitle="New Boats";
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
                                                <a href="rowpaddleboats.php" class="linkfrom">Row/Paddle Boats > other</a>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="boats" name="category" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Boats > Row/Paddle Boats > other" name="categoryy" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php echo locate(); ?>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Other  rowpb" name="typeboats" class="forminput form-select-lg" autocomplete="off" required="required">
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
                                                        <textarea class=" form input_contact" name="description" rows="4" cols="38" required="required" placeholder="Describe your boat"></textarea>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><?php echo images(); ?>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="ageboats" required="required" >
                                                            <option  value="" >Age </option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "ageboats", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="usageboats" required="required" >
                                                            <option  value="" >Usage </option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "usageboats", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="conditionboats" required="required" >
                                                            <option  value="" >Condition </option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "conditionboats", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="sellerboats" required="required" >
                                                            <option  value="" >Seller type</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "sellerboats", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="warrantyboats" required="required" >
                                                            <option  value="">Wrranty</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "warrantyboats", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="lengthboats" required="required" >
                                                            <option  value="">Length</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "lengthboats", "", "", "Id");
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
                                                                    move_uploaded_file($imageTmp, "admin/Update_Imageboats/uploads/avatars/" . $image);
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
                                            <input id="title" type="hidden" name="typeboats" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['typeboats'] ?>"   />  
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
                                                                            $ageboats = $_POST['ageboats'];
                                                                            $getageboats = $con->prepare("SELECT * FROM ageboats WHERE Id = $ageboats");
                                                                            $getageboats->execute();
                                                                            $info = $getageboats->fetch();
                                                                            $nameageboats = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="ageboats" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameageboats ?>" /> 
                                            <?php
                                                                            $usageboats = $_POST['usageboats'];
                                                                            $getusageboats = $con->prepare("SELECT * FROM usageboats WHERE Id = $usageboats");
                                                                            $getusageboats->execute();
                                                                            $info = $getusageboats->fetch();
                                                                            $nameusageboats = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="usageboats" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameusageboats ?>" /> 
                                            <?php
                                                                            $conditionboats = $_POST['conditionboats'];
                                                                            $getconditionboats = $con->prepare("SELECT * FROM conditionboats WHERE Id = $conditionboats");
                                                                            $getconditionboats->execute();
                                                                            $info = $getconditionboats->fetch();
                                                                            $nameconditionboats = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="conditionboats" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameconditionboats ?>" /> 
                                            <?php
                                                                            $sellerboats = $_POST['sellerboats'];
                                                                            $getsellerboats = $con->prepare("SELECT * FROM sellerboats WHERE Id = $sellerboats");
                                                                            $getsellerboats->execute();
                                                                            $info = $getsellerboats->fetch();
                                                                            $namesellerboats = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="sellerboats" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namesellerboats ?>" /> 
                                            <?php
                                                                            $warrantyboats = $_POST['warrantyboats'];
                                                                            $getwarrantyboats = $con->prepare("SELECT * FROM warrantyboats WHERE Id = $warrantyboats");
                                                                            $getwarrantyboats->execute();
                                                                            $info = $getwarrantyboats->fetch();
                                                                            $namewarrantyboats = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="warrantyboats" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namewarrantyboats ?>" /> 
                                                                    <?php
                                                                            $lengthboats = $_POST['lengthboats'];
                                                                            $getlengthboats = $con->prepare("SELECT * FROM lengthboats WHERE Id = $lengthboats");
                                                                            $getlengthboats->execute();
                                                                            $info = $getlengthboats->fetch();
                                                                            $namelengthboats = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="lengthboats" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namelengthboats ?>" /> 
                                            
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
                        $category     = $_POST['category'];
                        $typeboats     = $_POST['typeboats'];
                        $conditionboats     = $_POST['conditionboats'];
                        $ageboats   = $_POST['ageboats'];
                        $price      = $_POST['price'];
                        $phone      = $_POST['phone'];
                        $desc       = $_POST['description'];
                        $Location      = $_POST['location'];
                        $sellerboats    = $_POST['sellerboats'];
                        $usageboats = $_POST['usageboats'];
                        $warrantyboats = $_POST['warrantyboats'];
                        $lengthboats = $_POST['lengthboats'];
                        $locationcars   = $_POST['locationcars'];
                        $categoryy     = $_POST['categoryy'];
                            $stmtitemadd = $con->prepare("INSERT INTO
                            boats(Image, locationcars, categoryy ,Name, user_Id, price, phone, Add_date, typeboats, conditionboats, category, ageboats, Description, Location, usageboats, warrantyboats, lengthboats, sellerboats, Approve)
                            VALUES(:zimage, :zlocate, :zcategoryy, :zname, :zuser, :zprice, :zphone, now(), :ztypeboats, :zconditionboats, :zcategory, :zageboats, :zDescription, :zLocation, :zusageboats, :zwarrantyboats, :zlengthboats, :zsellerboats, 1)");
                            $stmtitemadd->execute(array(
                                    'zlocate'   => $locationcars,
                                    'zcategoryy' => $categoryy,
                                    'zimage'    => $data,
                                    'zname'     => $name,
                                    'zuser'     => $_SESSION['uid'],
                                    'zlengthboats'=>$lengthboats,
                                    'zageboats' => $ageboats,
                                    'zprice'    => $price,
                                    'zphone'    => $phone,            
                                    'ztypeboats'     => $typeboats,
                                    'zDescription'     => $desc,
                                    'zLocation'    => $Location,
                                    'zsellerboats'  => $sellerboats,
                                    'zusageboats' => $usageboats,
                                    'zconditionboats' => $conditionboats,
                                    'zwarrantyboats' =>$warrantyboats,
                                    'zcategory' => $category
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