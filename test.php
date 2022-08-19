<?php 
ob_start();
session_start();
$pageTitle="New Cars";
?>
<link rel="stylesheet" href="makemodel.css" />
<?php
    if(isset($_SESSION['user']))
    {
        include 'init.php';
        
        $do = isset($_GET['do']) ? $_GET['do'] : 'Add';
        if($do == 'Add'){
            ?>
            <h1 class="aditems"> Tell us your Car </h1>
                <div class="create block">
                    <div class="container">
                        <div class="panel panel-primary">
                            <!-- <div class="panle-heading">
                                <ion-icon name="add-outline"></ion-icon><php echo $pageTitle ?></div> -->
                            <div class="panel-body">
                                <div class="container">
                                <div class="row">
                                    <div class="row1 col-lg-4">
                                        <form class="form-horizontal needs-validation" action="?do=Edit" method="POST" enctype="multipart/form-data" novalidate>
                                        <script>
                                              (function () {
                                                'use strict'
                                            
                                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                                var forms = document.querySelectorAll('.needs-validation')
                                                // Loop over them and prevent submission
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
                                                        <input type="hidden" value="cars" name="category" class="forminput form-select-lg" autocomplete="off" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php echo locate(); ?>
                                            <!-- <div class="form-group form-group-lg formmarginad"> 
                                                    <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <select id="country" class="form-select forminput" aria-label="Default select example" name="make" required>
                                                                <option value="">Make</option>
                                                                <?php
                                                                    $allUsers = getAllFrom("*", "make", "", "", "Id");
                                                                    foreach($allUsers as $user){
                                                                        echo "<option value='" .$user['Name'] . ' ' . $user['model'] . "'>" .$user['Name'] . ' ' . $user['model'] . "</option>";
                                                                    }
                                                                ?>
                                                            </select>

                                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                                        <script src="select2.min.js"></script>
                                                        <script>
                                                            $("#country").select2( {
                                                                placeholder: "Make & Model",
                                                                allowClear: true
                                                                } );
                                                        </script>
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                                This field is mandatory
                                                            </div>
                                                    </div>
                                                    </div>
                                            </div> -->
                                            <div class="form-group form-group-lg formmarginad">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select id="country" class="form-select forminput country " aria-label="Default select example" name="make" required>
                                                        <option value="0">Make & Model</option>
                                                                    <?php
                                                                        $allUsers = getAllFrom("*", "make", "", "", "Id");
                                                                        foreach($allUsers as $user){
                                                                            echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . ' ' . $user['model'] . "</option>";
                                                                        }
                                                                    ?>
                                                        </select><br/><br/>
                                                        <div class="form-group form-group-lg formmarginad"> 
                                                                <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                                    <select id="country1" class="form-select forminput " aria-label="Default select example" name="trim" required >
                                                                        <option value="0">Trim</option>
                                                                        <?php
                                                                            $allUsers = getAllFrom("*", "trime", "", "", "Id");
                                                                            foreach($allUsers as $user){
                                                                                echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                            }
                                                                        ?>
                                                                    </select>
                                                                    <div class="invalid-feedback" style="text-align: initial;">
                                                                    This field is mandatory
                                                                        </div>
                                                                </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                                        <script src="select2.min.js"></script>
                                                        <script>
                                                                $("#country").select2( {
                                                                    placeholder: "Make & Model",
                                                                    allowClear: true
                                                                    } );
                                                        </script>
                                                        <script>
                                                                $("#country1").select2( {
                                                                    placeholder: "Trim",
                                                                    allowClear: true
                                                                    } );
                                                        </script>
                                            <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                                            <script type="text/javascript">
                                                    $(document).ready(function()
                                                    {
                                                    $(".country").change(function()
                                                    {
                                                    var country_id=$(this).val();
                                                    var post_id = 'id='+ country_id;

                                                    $.ajax
                                                    ({
                                                    type: "POST",
                                                    url: "ajax.php",
                                                    data: post_id,
                                                    cache: false,
                                                    success: function(cities)
                                                    {
                                                    $(".city").html(cities);
                                                    } 
                                                    });

                                                    });
                                                    });
                                            </script> -->

                                            <!-- <div class="form-group form-group-lg formmarginad"> 
                                                    <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="trim" required >
                                                            <option value="">Trim</option>
                                                            <php
                                                                $allUsers = getAllFrom("*", "trime", "", "", "Id");
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
                                            </div> -->
                                            <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="status" required>
                                                            <option value="">Status</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "status", "", "", "Id");
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
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="regionalspec" required >
                                                            <option value="">Regional Spec</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "regionalspec", "", "", "Id");
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
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="insured" required >
                                                            <option value="">Is your car insured in UAE?</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "insured", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="typecars" required >
                                                            <option value="">Car for</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "typecars", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="year" required="required" >
                                                            <option  value="" >Year </option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "year", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
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
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <input id="k_mi" type="text" name="k_mi" pattern="[1-9]{1}\d{0,9}" minlength="3" class=" forminput form-select-lg" autocomplete="off" required="required" placeholder="Kilometers">
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                        The minimum valid mileage is 100 KM
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                    <input id="price" type="number" name="price" min="2000" class=" forminput form-select-lg" autocomplete="off" required placeholder="Price"/>
                                                    <div class="invalid-feedback" style="text-align: initial;"> 
                                                    The minimum valid price is AED 2000 
                                                    </div>
                                                </div>
                                                </div>
                                            </div>                                            
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <input id="phone" type="tel" name="phone" pattern="[0]{1}[5]{1}[0-9]{8}" maxlength="10" class=" forminput form-select-lg" autocomplete="off" required placeholder="Phone Number">
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                        Valid phone number
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                    move_uploaded_file($imageTmp, "admin/Update_Image/uploads/avatars/" . $image);
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
                                            <!-- <input id="title" type="hidden" name="model" class="form-control form-select-lg" autocomplete="off" value="<php echo $_POST['model'] ?>" /> -->
                                            <input id="title" type="hidden" name="make" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['make'] ?>" />
                                            <input id="title" type="hidden" name="year" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['year'] ?>" />    
                                            <input id="title" type="hidden" name="price" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['price'] ?>"  />
                                            <input id="title" type="hidden" name="k_mi" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['k_mi'] ?>"   />
                                            <?php  $typecars = $_POST['typecars']; ?>
                                            <input id="title" type="hidden" name="typecars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $typecars ?>"  />   
                                            <?php  $trimm = $_POST['trim']; ?>
                                            <input id="title" type="hidden" name="trimm" class="form-control form-select-lg" autocomplete="off" value="<?php echo $trimm ?>"  />     
                                            <?php  $regionalspecc = $_POST['regionalspec']; ?>    
                                            <input id="title" type="hidden" name="regionalspec" class="form-control form-select-lg" autocomplete="off" value="<?php echo $regionalspecc ?>"   />    
                                            <?php  $locationcarss = $_POST['locationcars']; ?>    
                                            <input id="title" type="hidden" name="locationcars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $locationcarss ?>"  />
                                            <input id="title" type="hidden" name="location" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['location']; ?>"  />
                                            <?php  $statuss = $_POST['status']; ?> 
                                            <input id="title" type="hidden" name="status" class="form-control form-select-lg" autocomplete="off" value="<?php echo $statuss ?>"  />
                                            <?php  $insuredd = $_POST['insured']; ?> 
                                            <input id="title" type="hidden" name="insured" class="form-control form-select-lg" autocomplete="off" value="<?php echo $insuredd ?>"  />
                                                                    <input id="title" type="hidden" name="name" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['name'] ?>"  />    
                                                                    <input id="title" type="hidden" name="description" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['description'] ?>" /> 
                                                                    <input id="title" type="hidden" name="Exteriorcolor" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['Exteriorcolor']; ?>" /> 
                                                                    <input id="title" type="hidden" name="Interiorcolor" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['Interiorcolor'] ?>"  /> 
                                                                    <?php
                                                                            $bodycars = $_POST['bodycars'];
                                                                            $getbodycars = $con->prepare("SELECT * FROM bodycars WHERE Id = $bodycars");
                                                                            $getbodycars->execute();
                                                                            $info = $getbodycars->fetch();
                                                                            $namebodycars = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="bodycars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namebodycars ?>" /> 
                                                                    <?php
                                                                            $mechanicalcars = $_POST['mechanicalcars'];
                                                                            $getmechanicalcars = $con->prepare("SELECT * FROM mechanicalcars WHERE Id = $mechanicalcars");
                                                                            $getmechanicalcars->execute();
                                                                            $info = $getmechanicalcars->fetch();
                                                                            $namemechanicalcars = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="mechanicalcars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namemechanicalcars ?>" /> 
                                                                    <?php
                                                                            $bodytypecars = $_POST['bodytypecars'];
                                                                            $getbodytypecars = $con->prepare("SELECT * FROM bodytypecars WHERE Id = $bodytypecars");
                                                                            $getbodytypecars->execute();
                                                                            $info = $getbodytypecars->fetch();
                                                                            $namebodytypecars = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="bodytypecars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namebodytypecars ?>" /> 
                                                                    <?php
                                                                            $doors = $_POST['doors'];
                                                                            $getdoors = $con->prepare("SELECT * FROM doors WHERE Id = $doors");
                                                                            $getdoors->execute();
                                                                            $info = $getdoors->fetch();
                                                                            $namedoors = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="doors" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namedoors ?>" /> 
                                                                    <?php
                                                                            $cylinders = $_POST['cylinders'];
                                                                            $getcylinders = $con->prepare("SELECT * FROM cylinders WHERE Id = $cylinders");
                                                                            $getcylinders->execute();
                                                                            $info = $getcylinders->fetch();
                                                                            $namecylinders = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="cylinders" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namecylinders ?>" /> 
                                                                    <?php
                                                                            $transmissiontype = $_POST['transmissiontype'];
                                                                            $gettransmissiontype = $con->prepare("SELECT * FROM transmissiontype WHERE Id = $transmissiontype");
                                                                            $gettransmissiontype->execute();
                                                                            $info = $gettransmissiontype->fetch();
                                                                            $nametransmissiontype = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="transmissiontype" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nametransmissiontype ?>" /> 
                                                                    <?php
                                                                            $horsepowercars = $_POST['horsepowercars'];
                                                                            $gethorsepowercars = $con->prepare("SELECT * FROM horsepowercars WHERE Id = $horsepowercars");
                                                                            $gethorsepowercars->execute();
                                                                            $info = $gethorsepowercars->fetch();
                                                                            $namehorsepowercars = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="horsepowercars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namehorsepowercars ?>" /> 
                                                                    <?php
                                                                            $warrantycars = $_POST['warrantycars'];
                                                                            $getwarrantycars = $con->prepare("SELECT * FROM warrantycars WHERE Id = $warrantycars");
                                                                            $getwarrantycars->execute();
                                                                            $info = $getwarrantycars->fetch();
                                                                            $namewarrantycars = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="warrantycars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namewarrantycars ?>" /> 
                                                                    <?php
                                                                            $fueltypecars = $_POST['fueltypecars'];
                                                                            $getfueltypecars = $con->prepare("SELECT * FROM fueltypecars WHERE Id = $fueltypecars");
                                                                            $getfueltypecars->execute();
                                                                            $info = $getfueltypecars->fetch();
                                                                            $namefueltypecars = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="fueltypecars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namefueltypecars ?>" /> 
                                                                    <?php
                                                                            $typesidee = $_POST['side'];
                                                                            $gettypesidee = $con->prepare("SELECT * FROM side WHERE Id = $typesidee");
                                                                            $gettypesidee->execute();
                                                                            $info = $gettypesidee->fetch();
                                                                            $nametypesidee = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="side" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nametypesidee ?>" />
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
                                            }

                                               ?>
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
                                        $_SESSION['typecars'] = $_POST['typecars'];
                                        $_SESSION['description'] = $_POST['description'];
                                        $_SESSION['phone'] = $_POST['phone'];
                                        $_SESSION['category'] = $_POST['category'];
                                        $_SESSION['insured'] = $_POST['insured'];
                                        $_SESSION['trimm'] = $_POST['trimm'];
                                        $_SESSION['price'] = $_POST['price'];
                                        $_SESSION['status'] = $_POST['status'];
                                        $_SESSION['make'] = $_POST['make'];
                                        // $_SESSION['model'] = $_POST['model'];
                                        $_SESSION['location'] = $_POST['location'];
                                        $_SESSION['year'] = $_POST['year'];
                                        $_SESSION['regionalspec'] = $_POST['regionalspec'];
                                        $_SESSION['name'] = $_POST['name'];
                                        $_SESSION['Exteriorcolor'] = $_POST['Exteriorcolor'];
                                        $_SESSION['Interiorcolor'] = $_POST['Interiorcolor'];
                                        $_SESSION['k_mi'] = $_POST['k_mi'];
                                        $_SESSION['bodycars'] = $_POST['bodycars'];
                                        $_SESSION['doors'] = $_POST['doors'];
                                        $_SESSION['cylinders'] = $_POST['cylinders'];
                                        $_SESSION['transmissiontype'] = $_POST['transmissiontype'];
                                        $_SESSION['horsepowercars'] = $_POST['horsepowercars'];
                                        $_SESSION['warrantycars'] = $_POST['warrantycars'];
                                        $_SESSION['fueltypecars'] = $_POST['fueltypecars'];
                                        $_SESSION['side'] = $_POST['side'];
                                        $_SESSION['locationcars'] = $_POST['locationcars'];
                                        $_SESSION['mechanicalcars'] = $_POST['mechanicalcars'];
                                        $_SESSION['bodytypecars'] = $_POST['bodytypecars'];
                                        $_SESSION['checkcar'] = $_POST['checkcar'];
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
                                            $_SESSION['typecars'] = $_POST['typecars'];
                                            $_SESSION['description'] = $_POST['description'];
                                            $_SESSION['phone'] = $_POST['phone'];
                                            $_SESSION['category'] = $_POST['category'];
                                            $_SESSION['insured'] = $_POST['insured'];
                                            $_SESSION['trimm'] = $_POST['trimm'];
                                            $_SESSION['price'] = $_POST['price'];
                                            $_SESSION['status'] = $_POST['status'];
                                            $_SESSION['make'] = $_POST['make'];
                                            // $_SESSION['model'] = $_POST['model'];
                                            $_SESSION['location'] = $_POST['location'];
                                            $_SESSION['year'] = $_POST['year'];
                                            $_SESSION['regionalspec'] = $_POST['regionalspec'];
                                            $_SESSION['name'] = $_POST['name'];
                                            $_SESSION['Exteriorcolor'] = $_POST['Exteriorcolor'];
                                            $_SESSION['Interiorcolor'] = $_POST['Interiorcolor'];
                                            $_SESSION['k_mi'] = $_POST['k_mi'];
                                            $_SESSION['bodycars'] = $_POST['bodycars'];
                                            $_SESSION['doors'] = $_POST['doors'];
                                            $_SESSION['cylinders'] = $_POST['cylinders'];
                                            $_SESSION['transmissiontype'] = $_POST['transmissiontype'];
                                            $_SESSION['horsepowercars'] = $_POST['horsepowercars'];
                                            $_SESSION['warrantycars'] = $_POST['warrantycars'];
                                            $_SESSION['fueltypecars'] = $_POST['fueltypecars'];
                                            $_SESSION['side'] = $_POST['side'];
                                            $_SESSION['locationcars'] = $_POST['locationcars'];
                                            $_SESSION['mechanicalcars'] = $_POST['mechanicalcars'];
                                            $_SESSION['bodytypecars'] = $_POST['bodytypecars'];
                                            $_SESSION['checkcar'] = $_POST['checkcar'];
                                            $_SESSION['token'] = $tokenrand1;

                                echo '<div class="divpayment">Only One Ad</div>';
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
                                            $_SESSION['typecars'] = $_POST['typecars'];
                                            $_SESSION['description'] = $_POST['description'];
                                            $_SESSION['phone'] = $_POST['phone'];
                                            $_SESSION['category'] = $_POST['category'];
                                            $_SESSION['insured'] = $_POST['insured'];
                                            $_SESSION['trimm'] = $_POST['trimm'];
                                            $_SESSION['price'] = $_POST['price'];
                                            $_SESSION['status'] = $_POST['status'];
                                            $_SESSION['make'] = $_POST['make'];
                                            // $_SESSION['model'] = $_POST['model'];
                                            $_SESSION['location'] = $_POST['location'];
                                            $_SESSION['year'] = $_POST['year'];
                                            $_SESSION['regionalspec'] = $_POST['regionalspec'];
                                            $_SESSION['name'] = $_POST['name'];
                                            $_SESSION['Exteriorcolor'] = $_POST['Exteriorcolor'];
                                            $_SESSION['Interiorcolor'] = $_POST['Interiorcolor'];
                                            $_SESSION['k_mi'] = $_POST['k_mi'];
                                            $_SESSION['bodycars'] = $_POST['bodycars'];
                                            $_SESSION['doors'] = $_POST['doors'];
                                            $_SESSION['cylinders'] = $_POST['cylinders'];
                                            $_SESSION['transmissiontype'] = $_POST['transmissiontype'];
                                            $_SESSION['horsepowercars'] = $_POST['horsepowercars'];
                                            $_SESSION['warrantycars'] = $_POST['warrantycars'];
                                            $_SESSION['fueltypecars'] = $_POST['fueltypecars'];
                                            $_SESSION['side'] = $_POST['side'];
                                            $_SESSION['locationcars'] = $_POST['locationcars'];
                                            $_SESSION['mechanicalcars'] = $_POST['mechanicalcars'];
                                            $_SESSION['bodytypecars'] = $_POST['bodytypecars'];
                                            $_SESSION['checkcar'] = $_POST['checkcar'];
                                            $_SESSION['token'] = $tokenrand2;

                                echo '<div class="divpayment">Only One Ad</div>';
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
                                        $_SESSION['typecars'] = $_POST['typecars'];
                                        $_SESSION['description'] = $_POST['description'];
                                        $_SESSION['phone'] = $_POST['phone'];
                                        $_SESSION['category'] = $_POST['category'];
                                        $_SESSION['insured'] = $_POST['insured'];
                                        $_SESSION['trimm'] = $_POST['trimm'];
                                        $_SESSION['price'] = $_POST['price'];
                                        $_SESSION['status'] = $_POST['status'];
                                        $_SESSION['make'] = $_POST['make'];
                                        // $_SESSION['model'] = $_POST['model'];
                                        $_SESSION['location'] = $_POST['location'];
                                        $_SESSION['year'] = $_POST['year'];
                                        $_SESSION['regionalspec'] = $_POST['regionalspec'];
                                        $_SESSION['name'] = $_POST['name'];
                                        $_SESSION['Exteriorcolor'] = $_POST['Exteriorcolor'];
                                        $_SESSION['Interiorcolor'] = $_POST['Interiorcolor'];
                                        $_SESSION['k_mi'] = $_POST['k_mi'];
                                        $_SESSION['bodycars'] = $_POST['bodycars'];
                                        $_SESSION['doors'] = $_POST['doors'];
                                        $_SESSION['cylinders'] = $_POST['cylinders'];
                                        $_SESSION['transmissiontype'] = $_POST['transmissiontype'];
                                        $_SESSION['horsepowercars'] = $_POST['horsepowercars'];
                                        $_SESSION['warrantycars'] = $_POST['warrantycars'];
                                        $_SESSION['fueltypecars'] = $_POST['fueltypecars'];
                                        $_SESSION['side'] = $_POST['side'];
                                        $_SESSION['locationcars'] = $_POST['locationcars'];
                                        $_SESSION['mechanicalcars'] = $_POST['mechanicalcars'];
                                        $_SESSION['bodytypecars'] = $_POST['bodytypecars'];
                                        $_SESSION['checkcar'] = $_POST['checkcar'];
                                        $_SESSION['token'] = $tokenrand3;

                                echo '<div class="divpayment">Only One Ad</div>';
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
                                        $_SESSION['typecars'] = $_POST['typecars'];
                                        $_SESSION['description'] = $_POST['description'];
                                        $_SESSION['phone'] = $_POST['phone'];
                                        $_SESSION['category'] = $_POST['category'];
                                        $_SESSION['insured'] = $_POST['insured'];
                                        $_SESSION['trimm'] = $_POST['trimm'];
                                        $_SESSION['price'] = $_POST['price'];
                                        $_SESSION['status'] = $_POST['status'];
                                        $_SESSION['make'] = $_POST['make'];
                                        // $_SESSION['model'] = $_POST['model'];
                                        $_SESSION['location'] = $_POST['location'];
                                        $_SESSION['year'] = $_POST['year'];
                                        $_SESSION['regionalspec'] = $_POST['regionalspec'];
                                        $_SESSION['name'] = $_POST['name'];
                                        $_SESSION['Exteriorcolor'] = $_POST['Exteriorcolor'];
                                        $_SESSION['Interiorcolor'] = $_POST['Interiorcolor'];
                                        $_SESSION['k_mi'] = $_POST['k_mi'];
                                        $_SESSION['bodycars'] = $_POST['bodycars'];
                                        $_SESSION['doors'] = $_POST['doors'];
                                        $_SESSION['cylinders'] = $_POST['cylinders'];
                                        $_SESSION['transmissiontype'] = $_POST['transmissiontype'];
                                        $_SESSION['horsepowercars'] = $_POST['horsepowercars'];
                                        $_SESSION['warrantycars'] = $_POST['warrantycars'];
                                        $_SESSION['fueltypecars'] = $_POST['fueltypecars'];
                                        $_SESSION['side'] = $_POST['side'];
                                        $_SESSION['locationcars'] = $_POST['locationcars'];
                                        $_SESSION['mechanicalcars'] = $_POST['mechanicalcars'];
                                        $_SESSION['bodytypecars'] = $_POST['bodytypecars'];
                                        $_SESSION['checkcar'] = $_POST['checkcar'];
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
                                            $_SESSION['typecars'] = $_POST['typecars'];
                                            $_SESSION['description'] = $_POST['description'];
                                            $_SESSION['phone'] = $_POST['phone'];
                                            $_SESSION['category'] = $_POST['category'];
                                            $_SESSION['insured'] = $_POST['insured'];
                                            $_SESSION['trimm'] = $_POST['trimm'];
                                            $_SESSION['price'] = $_POST['price'];
                                            $_SESSION['status'] = $_POST['status'];
                                            $_SESSION['make'] = $_POST['make'];
                                            // $_SESSION['model'] = $_POST['model'];
                                            $_SESSION['location'] = $_POST['location'];
                                            $_SESSION['year'] = $_POST['year'];
                                            $_SESSION['regionalspec'] = $_POST['regionalspec'];
                                            $_SESSION['name'] = $_POST['name'];
                                            $_SESSION['Exteriorcolor'] = $_POST['Exteriorcolor'];
                                            $_SESSION['Interiorcolor'] = $_POST['Interiorcolor'];
                                            $_SESSION['k_mi'] = $_POST['k_mi'];
                                            $_SESSION['bodycars'] = $_POST['bodycars'];
                                            $_SESSION['doors'] = $_POST['doors'];
                                            $_SESSION['cylinders'] = $_POST['cylinders'];
                                            $_SESSION['transmissiontype'] = $_POST['transmissiontype'];
                                            $_SESSION['horsepowercars'] = $_POST['horsepowercars'];
                                            $_SESSION['warrantycars'] = $_POST['warrantycars'];
                                            $_SESSION['fueltypecars'] = $_POST['fueltypecars'];
                                            $_SESSION['side'] = $_POST['side'];
                                            $_SESSION['locationcars'] = $_POST['locationcars'];
                                            $_SESSION['mechanicalcars'] = $_POST['mechanicalcars'];
                                            $_SESSION['bodytypecars'] = $_POST['bodytypecars'];
                                            $_SESSION['checkcar'] = $_POST['checkcar'];
                                            $_SESSION['token'] = $tokenrand1;

                                echo '<div class="divpayment">Only One Ad</div>';
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
                                            $_SESSION['typecars'] = $_POST['typecars'];
                                            $_SESSION['description'] = $_POST['description'];
                                            $_SESSION['phone'] = $_POST['phone'];
                                            $_SESSION['category'] = $_POST['category'];
                                            $_SESSION['insured'] = $_POST['insured'];
                                            $_SESSION['trimm'] = $_POST['trimm'];
                                            $_SESSION['price'] = $_POST['price'];
                                            $_SESSION['status'] = $_POST['status'];
                                            $_SESSION['make'] = $_POST['make'];
                                            // $_SESSION['model'] = $_POST['model'];
                                            $_SESSION['location'] = $_POST['location'];
                                            $_SESSION['year'] = $_POST['year'];
                                            $_SESSION['regionalspec'] = $_POST['regionalspec'];
                                            $_SESSION['name'] = $_POST['name'];
                                            $_SESSION['Exteriorcolor'] = $_POST['Exteriorcolor'];
                                            $_SESSION['Interiorcolor'] = $_POST['Interiorcolor'];
                                            $_SESSION['k_mi'] = $_POST['k_mi'];
                                            $_SESSION['bodycars'] = $_POST['bodycars'];
                                            $_SESSION['doors'] = $_POST['doors'];
                                            $_SESSION['cylinders'] = $_POST['cylinders'];
                                            $_SESSION['transmissiontype'] = $_POST['transmissiontype'];
                                            $_SESSION['horsepowercars'] = $_POST['horsepowercars'];
                                            $_SESSION['warrantycars'] = $_POST['warrantycars'];
                                            $_SESSION['fueltypecars'] = $_POST['fueltypecars'];
                                            $_SESSION['side'] = $_POST['side'];
                                            $_SESSION['locationcars'] = $_POST['locationcars'];
                                            $_SESSION['mechanicalcars'] = $_POST['mechanicalcars'];
                                            $_SESSION['bodytypecars'] = $_POST['bodytypecars'];
                                            $_SESSION['checkcar'] = $_POST['checkcar'];
                                            $_SESSION['token'] = $tokenrand2;

                                echo '<div class="divpayment">Only One Ad</div>';
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
                                        $_SESSION['typecars'] = $_POST['typecars'];
                                        $_SESSION['description'] = $_POST['description'];
                                        $_SESSION['phone'] = $_POST['phone'];
                                        $_SESSION['category'] = $_POST['category'];
                                        $_SESSION['insured'] = $_POST['insured'];
                                        $_SESSION['trimm'] = $_POST['trimm'];
                                        $_SESSION['price'] = $_POST['price'];
                                        $_SESSION['status'] = $_POST['status'];
                                        $_SESSION['make'] = $_POST['make'];
                                        // $_SESSION['model'] = $_POST['model'];
                                        $_SESSION['location'] = $_POST['location'];
                                        $_SESSION['year'] = $_POST['year'];
                                        $_SESSION['regionalspec'] = $_POST['regionalspec'];
                                        $_SESSION['name'] = $_POST['name'];
                                        $_SESSION['Exteriorcolor'] = $_POST['Exteriorcolor'];
                                        $_SESSION['Interiorcolor'] = $_POST['Interiorcolor'];
                                        $_SESSION['k_mi'] = $_POST['k_mi'];
                                        $_SESSION['bodycars'] = $_POST['bodycars'];
                                        $_SESSION['doors'] = $_POST['doors'];
                                        $_SESSION['cylinders'] = $_POST['cylinders'];
                                        $_SESSION['transmissiontype'] = $_POST['transmissiontype'];
                                        $_SESSION['horsepowercars'] = $_POST['horsepowercars'];
                                        $_SESSION['warrantycars'] = $_POST['warrantycars'];
                                        $_SESSION['fueltypecars'] = $_POST['fueltypecars'];
                                        $_SESSION['side'] = $_POST['side'];
                                        $_SESSION['locationcars'] = $_POST['locationcars'];
                                        $_SESSION['mechanicalcars'] = $_POST['mechanicalcars'];
                                        $_SESSION['bodytypecars'] = $_POST['bodytypecars'];
                                        $_SESSION['checkcar'] = $_POST['checkcar'];
                                        $_SESSION['token'] = $tokenrand3;

                                echo '<div class="divpayment">Only One Ad</div>';
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
                        $typecars       = $_POST['typecars'];
                        $desc       = $_POST['description'];
                        $phone       = $_POST['phone'];
                        $category     = $_POST['category'];
                        $Insured = $_POST['insured'];
                        $trim = $_POST['trimm'];
                        $price      = $_POST['price'];
                        $status     = $_POST['status'];
                        $make       = $_POST['make'];
                        // $model      = $_POST['model'];
                        $location   = $_POST['location'];
                        $year       = $_POST['year'];
                        $reginalspec = $_POST['regionalspec'];
                        $name       = $_POST['name'];
                        $Exteriorcolor   = $_POST['Exteriorcolor'];
                        $Interiorcolor   = $_POST['Interiorcolor'];
                        $k_mi       = $_POST['k_mi'];
                        $bodycars   = $_POST['bodycars'];
                        $doors   = $_POST['doors'];
                        $cylinders   = $_POST['cylinders'];
                        $transmissiontype   = $_POST['transmissiontype'];
                        $horsepowercars   = $_POST['horsepowercars'];
                        $warrantycars   = $_POST['warrantycars'];
                        $fueltypecars   = $_POST['fueltypecars'];
                        $side   = $_POST['side'];
                        $locatecars   = $_POST['locationcars'];
                        $mechanicalcars   = $_POST['mechanicalcars'];
                        $bodytypecars   = $_POST['bodytypecars'];
                        $checkcar = $_POST['checkcar'];
        
                                    $stmtitemadd = $con->prepare("INSERT INTO
                                                            products(Image, bodycars, trime, mechanicalcars, bodytypecars, doors, cylinders, transmissiontype, horsepowercars,warrantycars, fueltypecars, side, typecars, Name, Exteriorcolor, Interiorcolor, locatecars, phone, user_Id, insured, Price, Add_date, Status, Make,  Location, Year, k_mi, regionalspec, category, Description, extrascars, Approve)
                                                            VALUES(:zimage, :zbodycars, :ztrim, :zmechanicalcars, :zbodytypecars, :zdoors, :zcylinders, :ztransmissiontype, :zhorsepowercars,:zwarrantycars, :zfueltypecars, :zside, :ztypecars, :zname, :zExteriorcolor, :zInteriorcolor, :zlocate, :zphone, :zuser, :zInsured, :zprice, now(), :zstatus, :zmake, :zlocation, :zyear, :zk_mi, :zreginalspec, :zcategory, :zdescription, :zextrascars, 1)");
                                    $stmtitemadd->execute(array(
                                            'zimage'        => $data,
                                            'zbodycars'        => $bodycars,
                                            'ztrim'        => $trim,
                                            'zmechanicalcars' => $mechanicalcars,
                                            'zbodytypecars' => $bodytypecars,
                                            'zdoors' => $doors,
                                            'zcylinders' => $cylinders,
                                            'ztransmissiontype' => $transmissiontype,
                                            'zhorsepowercars' => $horsepowercars,
                                            'zwarrantycars' => $warrantycars, 
                                            'zfueltypecars' => $fueltypecars,
                                            'zside' => $side,
                                            'ztypecars' => $typecars,
                                            'zname' => $name,
                                            'zExteriorcolor' => $Exteriorcolor,
                                            'zInteriorcolor' => $Interiorcolor,
                                            'zlocate' => $locatecars,
                                            'zphone'    => $phone,
                                            'zuser'     => $_SESSION['uid'],
                                            'zInsured'   => $Insured,
                                            'zprice'    => $price,
                                            'zstatus'   => $status,
                                            'zmake'     => $make,
                                            // 'zmodel'    => $model,
                                            'zlocation' => $location,
                                            'zyear'     => $year,
                                            'zk_mi'     => $k_mi,
                                            'zreginalspec' => $reginalspec,
                                            'zdescription'  => $desc,
                                            'zcategory' => $category,
                                            'zextrascars' => $checkcar
                                    ));
                                   echo finads(); 
                    }
                    else{
                        echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                        echo "<a href='adcars.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Cars page.</a>";
                        }
                    echo '</div>';
                }
        }
        elseif($do == 'Insert1'){
            echo "<h1 class='text-center h1-member'>Insert Cars</h1>";
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $apikey = "NTYxOTZhNTgtNjU2My00YTQ2LTlhZjAtYTVkNzZkY2I4Yjc0OjY2YTI5OGI4LTg0OTUtNDVjZi1iNzk1LTI1MzE0OTc2YTQ5Zg==";     
                $ch = curl_init(); 
                curl_setopt($ch, CURLOPT_URL, "https://api-gateway.sandbox.ngenius-payments.com/identity/auth/access-token"); 
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
                                "redirectUrl" =>  "https://ohyamal.com/adcars.php?do=Insertcars1"
                            ],
                            ];
                            $outlet = "c7e71431-bdf4-49d0-a984-fd2ecd0267c3";
                            $json = json_encode($postData);
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "https://api-gateway.sandbox.ngenius-payments.com/transactions/outlets/".$outlet."/orders");
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
                $apikey = "NTYxOTZhNTgtNjU2My00YTQ2LTlhZjAtYTVkNzZkY2I4Yjc0OjY2YTI5OGI4LTg0OTUtNDVjZi1iNzk1LTI1MzE0OTc2YTQ5Zg==";     
                $ch = curl_init(); 
                curl_setopt($ch, CURLOPT_URL, "https://api-gateway.sandbox.ngenius-payments.com/identity/auth/access-token"); 
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
                                "redirectUrl" =>  "https://ohyamal.com/adcars.php?do=Insertcars2"
                            ],
                            ];
                            $outlet = "c7e71431-bdf4-49d0-a984-fd2ecd0267c3";
                            $json = json_encode($postData);
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "https://api-gateway.sandbox.ngenius-payments.com/transactions/outlets/".$outlet."/orders");
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
                $apikey = "NTYxOTZhNTgtNjU2My00YTQ2LTlhZjAtYTVkNzZkY2I4Yjc0OjY2YTI5OGI4LTg0OTUtNDVjZi1iNzk1LTI1MzE0OTc2YTQ5Zg==";     
                $ch = curl_init(); 
                curl_setopt($ch, CURLOPT_URL, "https://api-gateway.sandbox.ngenius-payments.com/identity/auth/access-token"); 
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
                                "redirectUrl" =>  "https://ohyamal.com/adcars.php?do=Insertcars3"
                            ],
                            ];
                            $outlet = "c7e71431-bdf4-49d0-a984-fd2ecd0267c3";
                            $json = json_encode($postData);
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "https://api-gateway.sandbox.ngenius-payments.com/transactions/outlets/".$outlet."/orders");
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
                $apikey = "NTYxOTZhNTgtNjU2My00YTQ2LTlhZjAtYTVkNzZkY2I4Yjc0OjY2YTI5OGI4LTg0OTUtNDVjZi1iNzk1LTI1MzE0OTc2YTQ5Zg==";     
                $ch = curl_init(); 
                curl_setopt($ch, CURLOPT_URL, "https://api-gateway.sandbox.ngenius-payments.com/identity/auth/access-token"); 
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
                                "redirectUrl" =>  "https://ohyamal.com/adcars.php?do=Insertcars4"
                            ],
                            ];
                            $outlet = "c7e71431-bdf4-49d0-a984-fd2ecd0267c3";
                            $json = json_encode($postData);
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "https://api-gateway.sandbox.ngenius-payments.com/transactions/outlets/".$outlet."/orders");
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
        elseif($do == 'Insertcars1'){
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
                                        products(Image, bodycars, trime, mechanicalcars, bodytypecars, doors, cylinders, transmissiontype, horsepowercars,warrantycars, fueltypecars, side, typecars, Name, Exteriorcolor, Interiorcolor, locatecars, phone, user_Id, insured, Price, Add_date, Status, Make,  Location, Year, k_mi, regionalspec, category, Description, extrascars, Approve)
                                        VALUES(:zimage, :zbodycars, :ztrim, :zmechanicalcars, :zbodytypecars, :zdoors, :zcylinders, :ztransmissiontype, :zhorsepowercars,:zwarrantycars, :zfueltypecars, :zside, :ztypecars, :zname, :zExteriorcolor, :zInteriorcolor, :zlocate, :zphone, :zuser, :zInsured, :zprice, now(), :zstatus, :zmake, :zlocation, :zyear, :zk_mi, :zreginalspec, :zcategory, :zdescription, :zextrascars, 1)");
                $stmtitemadd->execute(array(
                        'zimage'        => $_SESSION['data'],
                        'zbodycars'        => $_SESSION['bodycars'],
                        'ztrim'        => $_SESSION['trimm'],
                        'zmechanicalcars' => $_SESSION['mechanicalcars'],
                        'zbodytypecars' => $_SESSION['bodytypecars'],
                        'zdoors' => $_SESSION['doors'],
                        'zcylinders' => $_SESSION['cylinders'],
                        'ztransmissiontype' => $_SESSION['transmissiontype'],
                        'zhorsepowercars' => $_SESSION['horsepowercars'],
                        'zwarrantycars' => $_SESSION['warrantycars'], 
                        'zfueltypecars' => $_SESSION['fueltypecars'],
                        'zside' => $_SESSION['side'],
                        'ztypecars' => $_SESSION['typecars'],
                        'zname' => $_SESSION['name'],
                        'zExteriorcolor' => $_SESSION['Exteriorcolor'],
                        'zInteriorcolor' => $_SESSION['Interiorcolor'],
                        'zlocate' => $_SESSION['locationcars'],
                        'zphone'    => $_SESSION['phone'],
                        'zuser'     => $_SESSION['uid'],
                        'zInsured'   => $_SESSION['insured'],
                        'zprice'    => $_SESSION['price'],
                        'zstatus'   => $_SESSION['status'],
                        'zmake'     => $_SESSION['make'],
                        // 'zmodel'    => $_SESSION['model'],
                        'zlocation' => $_SESSION['location'],
                        'zyear'     => $_SESSION['year'],
                        'zk_mi'     => $_SESSION['k_mi'],
                        'zreginalspec' => $_SESSION['regionalspec'],
                        'zdescription'  => $_SESSION['description'],
                        'zcategory' => $_SESSION['category'],
                        'zextrascars' => $_SESSION['checkcar']
                ));
            echo finads(); 
        }
        elseif($do == 'Insertcars2'){
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
                                        products(Image, bodycars, trime, mechanicalcars, bodytypecars, doors, cylinders, transmissiontype, horsepowercars,warrantycars, fueltypecars, side, typecars, Name, Exteriorcolor, Interiorcolor, locatecars, phone, user_Id, insured, Price, Add_date, Status, Make,  Location, Year, k_mi, regionalspec, category, Description, extrascars, Approve)
                                        VALUES(:zimage, :zbodycars, :ztrim, :zmechanicalcars, :zbodytypecars, :zdoors, :zcylinders, :ztransmissiontype, :zhorsepowercars,:zwarrantycars, :zfueltypecars, :zside, :ztypecars, :zname, :zExteriorcolor, :zInteriorcolor, :zlocate, :zphone, :zuser, :zInsured, :zprice, now(), :zstatus, :zmake, :zlocation, :zyear, :zk_mi, :zreginalspec, :zcategory, :zdescription, :zextrascars, 1)");
                $stmtitemadd->execute(array(
                        'zimage'        => $_SESSION['data'],
                        'zbodycars'        => $_SESSION['bodycars'],
                        'ztrim'        => $_SESSION['trimm'],
                        'zmechanicalcars' => $_SESSION['mechanicalcars'],
                        'zbodytypecars' => $_SESSION['bodytypecars'],
                        'zdoors' => $_SESSION['doors'],
                        'zcylinders' => $_SESSION['cylinders'],
                        'ztransmissiontype' => $_SESSION['transmissiontype'],
                        'zhorsepowercars' => $_SESSION['horsepowercars'],
                        'zwarrantycars' => $_SESSION['warrantycars'], 
                        'zfueltypecars' => $_SESSION['fueltypecars'],
                        'zside' => $_SESSION['side'],
                        'ztypecars' => $_SESSION['typecars'],
                        'zname' => $_SESSION['name'],
                        'zExteriorcolor' => $_SESSION['Exteriorcolor'],
                        'zInteriorcolor' => $_SESSION['Interiorcolor'],
                        'zlocate' => $_SESSION['locationcars'],
                        'zphone'    => $_SESSION['phone'],
                        'zuser'     => $_SESSION['uid'],
                        'zInsured'   => $_SESSION['insured'],
                        'zprice'    => $_SESSION['price'],
                        'zstatus'   => $_SESSION['status'],
                        'zmake'     => $_SESSION['make'],
                        // 'zmodel'    => $_SESSION['model'],
                        'zlocation' => $_SESSION['location'],
                        'zyear'     => $_SESSION['year'],
                        'zk_mi'     => $_SESSION['k_mi'],
                        'zreginalspec' => $_SESSION['regionalspec'],
                        'zdescription'  => $_SESSION['description'],
                        'zcategory' => $_SESSION['category'],
                        'zextrascars' => $_SESSION['checkcar']
                ));
            echo finads(); 
        }
        elseif($do == 'Insertcars3'){
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
                                        products(Image, bodycars, trime, mechanicalcars, bodytypecars, doors, cylinders, transmissiontype, horsepowercars,warrantycars, fueltypecars, side, typecars, Name, Exteriorcolor, Interiorcolor, locatecars, phone, user_Id, insured, Price, Add_date, Status, Make,  Location, Year, k_mi, regionalspec, category, Description, extrascars, Approve)
                                        VALUES(:zimage, :zbodycars, :ztrim, :zmechanicalcars, :zbodytypecars, :zdoors, :zcylinders, :ztransmissiontype, :zhorsepowercars,:zwarrantycars, :zfueltypecars, :zside, :ztypecars, :zname, :zExteriorcolor, :zInteriorcolor, :zlocate, :zphone, :zuser, :zInsured, :zprice, now(), :zstatus, :zmake, :zlocation, :zyear, :zk_mi, :zreginalspec, :zcategory, :zdescription, :zextrascars, 1)");
                $stmtitemadd->execute(array(
                        'zimage'        => $_SESSION['data'],
                        'zbodycars'        => $_SESSION['bodycars'],
                        'ztrim'        => $_SESSION['trimm'],
                        'zmechanicalcars' => $_SESSION['mechanicalcars'],
                        'zbodytypecars' => $_SESSION['bodytypecars'],
                        'zdoors' => $_SESSION['doors'],
                        'zcylinders' => $_SESSION['cylinders'],
                        'ztransmissiontype' => $_SESSION['transmissiontype'],
                        'zhorsepowercars' => $_SESSION['horsepowercars'],
                        'zwarrantycars' => $_SESSION['warrantycars'], 
                        'zfueltypecars' => $_SESSION['fueltypecars'],
                        'zside' => $_SESSION['side'],
                        'ztypecars' => $_SESSION['typecars'],
                        'zname' => $_SESSION['name'],
                        'zExteriorcolor' => $_SESSION['Exteriorcolor'],
                        'zInteriorcolor' => $_SESSION['Interiorcolor'],
                        'zlocate' => $_SESSION['locationcars'],
                        'zphone'    => $_SESSION['phone'],
                        'zuser'     => $_SESSION['uid'],
                        'zInsured'   => $_SESSION['insured'],
                        'zprice'    => $_SESSION['price'],
                        'zstatus'   => $_SESSION['status'],
                        'zmake'     => $_SESSION['make'],
                        // 'zmodel'    => $_SESSION['model'],
                        'zlocation' => $_SESSION['location'],
                        'zyear'     => $_SESSION['year'],
                        'zk_mi'     => $_SESSION['k_mi'],
                        'zreginalspec' => $_SESSION['regionalspec'],
                        'zdescription'  => $_SESSION['description'],
                        'zcategory' => $_SESSION['category'],
                        'zextrascars' => $_SESSION['checkcar']
                ));
            echo finads(); 
        }
        elseif($do == 'Insertcars4'){
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
                                        products(Image, bodycars, trime, mechanicalcars, bodytypecars, doors, cylinders, transmissiontype, horsepowercars,warrantycars, fueltypecars, side, typecars, Name, Exteriorcolor, Interiorcolor, locatecars, phone, user_Id, insured, Price, Add_date, Status, Make,  Location, Year, k_mi, regionalspec, category, Description, extrascars, Approve)
                                        VALUES(:zimage, :zbodycars, :ztrim, :zmechanicalcars, :zbodytypecars, :zdoors, :zcylinders, :ztransmissiontype, :zhorsepowercars,:zwarrantycars, :zfueltypecars, :zside, :ztypecars, :zname, :zExteriorcolor, :zInteriorcolor, :zlocate, :zphone, :zuser, :zInsured, :zprice, now(), :zstatus, :zmake, :zlocation, :zyear, :zk_mi, :zreginalspec, :zcategory, :zdescription, :zextrascars, 1)");
                $stmtitemadd->execute(array(
                        'zimage'        => $_SESSION['data'],
                        'zbodycars'        => $_SESSION['bodycars'],
                        'ztrim'        => $_SESSION['trimm'],
                        'zmechanicalcars' => $_SESSION['mechanicalcars'],
                        'zbodytypecars' => $_SESSION['bodytypecars'],
                        'zdoors' => $_SESSION['doors'],
                        'zcylinders' => $_SESSION['cylinders'],
                        'ztransmissiontype' => $_SESSION['transmissiontype'],
                        'zhorsepowercars' => $_SESSION['horsepowercars'],
                        'zwarrantycars' => $_SESSION['warrantycars'], 
                        'zfueltypecars' => $_SESSION['fueltypecars'],
                        'zside' => $_SESSION['side'],
                        'ztypecars' => $_SESSION['typecars'],
                        'zname' => $_SESSION['name'],
                        'zExteriorcolor' => $_SESSION['Exteriorcolor'],
                        'zInteriorcolor' => $_SESSION['Interiorcolor'],
                        'zlocate' => $_SESSION['locationcars'],
                        'zphone'    => $_SESSION['phone'],
                        'zuser'     => $_SESSION['uid'],
                        'zInsured'   => $_SESSION['insured'],
                        'zprice'    => $_SESSION['price'],
                        'zstatus'   => $_SESSION['status'],
                        'zmake'     => $_SESSION['make'],
                        // 'zmodel'    => $_SESSION['model'],
                        'zlocation' => $_SESSION['location'],
                        'zyear'     => $_SESSION['year'],
                        'zk_mi'     => $_SESSION['k_mi'],
                        'zreginalspec' => $_SESSION['regionalspec'],
                        'zdescription'  => $_SESSION['description'],
                        'zcategory' => $_SESSION['category'],
                        'zextrascars' => $_SESSION['checkcar']
                ));
            echo finads(); 
        }
        elseif($do == 'Edit'){
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $phone       = $_POST['phone'];
                $category     = $_POST['category'];
                $price      = $_POST['price'];
                $make       = $_POST['make'];
                // $model      = $_POST['model'];
                $year       = $_POST['year'];
                $k_mi       = $_POST['k_mi'];
                $locationcars   = $_POST['locationcars'];
                $trim       = $_POST['trim'];
                $status       = $_POST['status'];
                $regionalspec       = $_POST['regionalspec'];
                $insured       = $_POST['insured'];
                $typecars       = $_POST['typecars'];
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

                    <div class="paa-vin-highlight-wrapper">
                        <div class="color-denim flame-text--medium--strong text-center">
                            <img src="layout/images/speaker.png" class="vin-highlight-info">
                            <div class="divbleu">Attract more buyers with a free CarReport badge</div>
                            <div class="divbleu">Enter your VIN / Chassis number</div>
                        </div>
                        <style>
                            .forminputone {
                                    background-size: 25px;
                                    display: block;
                                    width: 305px;
                                    height: 45px;
                                    padding: 0.375rem 0.75rem;
                                    font-size: 16px;
                                    font-weight: 600;
                                    line-height: 1.5;
                                    color: #212529;
                                    background-color: #fff;
                                    background-clip: padding-box;
                                    /* border: 1px solid #ced4da; */
                                    border: solid 1px #b6b8b9;
                                    box-sizing: border-box;
                                    -webkit-appearance: none;
                                    -moz-appearance: none;
                                    appearance: none;
                                    border-radius: 0.25rem;
                                    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                                }
                        </style>
                        <div class="paa-field paa-field__wrapper js-input-wrapper" data-type="TextInput" data-required="False">
                            <input autocomplete="off" data-correct-vin="This number will not show on your ad" data-helper-text="Enter VIN / Chassis number" data-incorrect-vin="Incorrect VIN/Chassis number" data-ui-id="paa-field-vin" id="id_vin" maxlength="20" name="vin" placeholder="Enter VIN / Chassis number" type="text" class="forminputone" style="    margin: auto;">
                            
                                <span>What is a VIN / Chassis number? </span>
                                <!-- <img src="https://dbzstatic-a.akamaihd.net/dist_2508bae7b4/images/paa/info-circle.svg" class="vin-help-icon"> -->
                                        <!-- Button trigger modal -->
                                <button type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: none;background: none;">
                                <img src="layout/images/info-circle.svg" class="vin-help-icon">
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="modal-body">
                                                    <h1 class="flame-text flame-text--title4 text-space-12 honepopup">
                                                    What is a VIN / Chassis number?
                                                    </h1>
                                                    <div class="flame-text flame-text--medium text-space-24 border-bottom">
                                                    Your VIN / Chassis number is a unique character code used to identify individual motor vehicles.
                                                    </div>
                                                    <div class="flame-text flame-text--title4 text-space-24">
                                                    Where can I find it?
                                                    </div>
                                                    <div class="flame-text flame-text--medium text-space-12">
                                                    On your vehicle registration card (Mulkiya)
                                                    </div>
                                                    <img style="width: 400px;background:#FBC900;" src="layout/images/vin.png" class="vin-info-graphics">
                                                    <div class="flame-text flame-text--medium text-space-12">
                                                    On your vehicle's windshield.
                                                    </div>
                                                </div>

                                                <!-- end -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">                        
                                                    close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="flame-text flame-button--smalladcar">This number will not show on your ad</div>
                            
                        </div>
                    </div>

                    <div class="gridadcar">
                        <div class="container">
                            <div class="row content">
                                <div class="col-lg-6" style="margin-bottom: 25px;">
                                        <span class="titleone-ad">Listing Summary</span>
                                </div> 
                            </div>  
                            <!-- <div class="row content" style="margin-bottom: 10px;    text-align: initial;">
                                <div class="col">
                                        <span class="title-ad">Model</span>
                                </div> 
                                <div class="col">
                                        <span class="post-ad"><php echo $_POST['model'] ?></span>
                                </div> 
                            </div>   -->
                            <div class="row content" style="margin-bottom: 10px;    text-align: initial;">
                                <div class="col">
                                <?php
                                    $getmodel = $con->prepare("SELECT * FROM make WHERE Id = $make");
                                    $getmodel->execute();
                                    $info = $getmodel->fetch();
                                    $namemodel = $info['Name']  . ' ' . $info['model'];?>
                                        <span class="title-ad">Make & Model</span>
                                </div> 
                                <div class="col">
                                        <span class="post-ad"><?php echo $namemodel; ?></span>                                    
                                </div> 
                            </div>  
                            <div class="row content" style="margin-bottom: 10px;    text-align: initial;">
                                <div class="col">
                                        <span class="title-ad">Trim</span>
                                </div> 
                                <div class="col">
                                    <?php
                                    // $gettrim = $con->prepare("SELECT * FROM trime WHERE Id = $trim");
                                    // $gettrim->execute();
                                    // $info = $gettrim->fetch();
                                    // $nametrim = $info['Name'];
                                     ?>
                                        <span class="post-ad"><?php echo $trim ?></span>                                  
                                </div> 
                            </div>  
                            <div class="row content" style="margin-bottom: 10px;    text-align: initial;">
                                <div class="col">
                                        <span class="title-ad">Regional Specs</span>
                                </div> 
                                <div class="col">
                                    <?php
                                    $getregionalspec = $con->prepare("SELECT * FROM regionalspec WHERE Id = $regionalspec");
                                    $getregionalspec->execute();
                                    $info = $getregionalspec->fetch();
                                    $nameregionalspec = $info['Name']; ?>
                                        <span class="post-ad"><?php echo $nameregionalspec ?></span>                                
                                </div> 
                            </div>  
                            <div class="row content" style="margin-bottom: 10px;    text-align: initial;">
                                <div class="col">
                                        <span class="title-ad">Year</span>
                                </div> 
                                <div class="col">
                                        <span class="post-ad"><?php echo $_POST['year'] ?></span>
                                </div>   
                            </div>
                            <div class="row content" style="margin-bottom: 10px;  text-align: initial;">
                                <div class="col">
                                        <span class="title-ad">Mileage</span>
                                </div> 
                                <div class="col">
                                        <span class="post-ad"><?php echo $_POST['k_mi'] ?></span>
                                </div>   
                            </div>
                            <div class="row content" style="margin-bottom: 10px;  text-align: initial;">
                                <div class="col">
                                        <span class="title-ad">Price</span>
                                </div> 
                                <div class="col">
                                        <span class="post-ad"><?php echo $_POST['price'] ?></span>
                                </div> 
                            </div>    
                            <div class="row content" style="margin-bottom: 10px;    text-align: initial;">
                                <div class="col">
                                        <span class="title-ad">Phone Number</span>
                                </div> 
                                <div class="col">
                                        <span class="post-ad"><?php echo $_POST['phone'] ?></span>
                                </div>   
                            </div>   
                        </div>
                    </div>

                </div>
            </div>    
            </div>

        
                <div class="create block">
                            <div class="panel-body">
                                    <div class="row">
                                        <div class="row1 col-lg-4">
                                            <form  id="importBox" class="form-horizontal needs-validation" action="?do=Inserted" method="POST" enctype="multipart/form-data" novalidate>
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
                                            <input id="title" type="hidden" name="phone" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['phone'] ?>" />
                                            <input id="title" type="hidden" name="category" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['category'] ?>"   />
                                            <!-- <input id="title" type="hidden" name="model" class="form-control form-select-lg" autocomplete="off" value="<php echo $_POST['model'] ?>" /> -->
                                            <input id="title" type="hidden" name="make" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namemodel ?>" />
                                            <input id="title" type="hidden" name="year" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['year'] ?>" />    
                                            <input id="title" type="hidden" name="price" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['price'] ?>"  />
                                            <input id="title" type="hidden" name="k_mi" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['k_mi'] ?>"   />
                                            <input id="title" type="hidden" name="trim" class="form-control form-select-lg" autocomplete="off" value="<?php echo $trim ?>"  />     
                                            <input id="title" type="hidden" name="regionalspec" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameregionalspec ?>"   />    
                                                    <?php
                                                    $getlocationcars = $con->prepare("SELECT * FROM locationcars WHERE Id = $locationcars");
                                                    $getlocationcars->execute();
                                                    $info = $getlocationcars->fetch();
                                                    $namelocationcars = $info['Name']; ?>  
                                            <input id="title" type="hidden" name="locationcars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namelocationcars ?>"  />
                                            <?php
                                                    $getinsured = $con->prepare("SELECT * FROM insured WHERE Id = $insured");
                                                    $getinsured->execute();
                                                    $info = $getinsured->fetch();
                                                    $nameinsured = $info['Name']; ?>  
                                            <input id="title" type="hidden" name="insured" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameinsured ?>"  />
                                            <?php
                                                    $getstatus = $con->prepare("SELECT * FROM status WHERE Id = $status");
                                                    $getstatus->execute();
                                                    $info = $getstatus->fetch();
                                                    $namestatus = $info['Name']; ?>       
                                            <input id="title" type="hidden" name="status" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namestatus ?>"  required="required" /> 
                                            <?php
                                                    $gettypecars = $con->prepare("SELECT * FROM typecars WHERE Id = $typecars");
                                                    $gettypecars->execute();
                                                    $info = $gettypecars->fetch();
                                                    $nametypecars = $info['Name']; ?>       
                                            <input id="title" type="hidden" name="typecars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nametypecars ?>"  required="required" /> 
                                            
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="name" class=" forminput form-select-lg" autocomplete="off" required="required" placeholder="Title">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <textarea class=" form input_contact" name="description" rows="4" cols="38" required="required" placeholder="Describe your Cars "></textarea>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <style>
                                                    div#importThumbnails button, form .lh label.btnimh span {
                                                    border: 0;
                                                    margin: 0;
                                                    color: inherit;
                                                    font-size: 1.3em;
                                                    padding: 5px 8px;
                                                    border-radius: 3px;
                                                    background-color: #0093D5;
                                                    box-shadow: 0 0 3px #000;
                                                    }
                                                    .lh label.btnimh input {
                                                    display: none;
                                                    }
                                                    #importThumbnails li {
                                                    list-style-type: none;
                                                    line-height: 60px;
                                                    }
                                                    #importThumbnails .btnimh {
                                                        font-size: 0.7em;
                                                        border-radius: 50%;
                                                    }
                                                    #importThumbnails img {
                                                        vertical-align: bottom;
                                                        height: 120px;
                                                        width: 150px;
                                                        margin: 5px;
                                                    }
                                                    #importThumbnails .thumbnail {
                                                    display: inline-block;
                                                    height: 60px;
                                                    padding: 0 10px;
                                                    background: #1e1e1e;
                                                    text-align: center;
                                                    line-height: 20px;
                                                    font-size: 0.7em;
                                                    margin: 0;
                                                    }
                                                </style>

                                                <p>
                                                    <span class="lh">
                                                    <label class="btnimh">
                                                        <span class="style_input_img forminput form-select-lg" style="text-align: center;"> <ion-icon name="camera-sharp"></ion-icon> Add Pictures</span>
                                                        <input style="cursor: pointer;" id="file" type="file" name="image[]" accept="image/gif,image/jpeg,image/jpg,image/png" required="required" multiple/>
                                                        <div style="color:red; text-align: initial;">
                                                            This field is required.                                                            
                                                            </div>
                                                    </label>
                                                    <span class="iscript">
                                                    </span>
                                                    </span>
                                                    <div id="importThumbnails" class="bscript">
                                                    </div>
                                                    <span class="lh">
                                                        <label class="btnimh">
                                                        <input id="importButton" type="" />
                                                        </label>
                                                    </span>
                                                </p>

                                                <script>
                                                    (function(){
                                                    var els;
                                                    els = document.getElementsByClassName( "iscript" );
                                                    for (var i=0, len=els.length; i < len; i++) {
                                                        els[i].style.display = "inline";
                                                    }
                                                    els = document.getElementsByClassName( "bscript" );
                                                    for (var i=0, len=els.length; i < len; i++) {
                                                        els[i].style.display = "block";
                                                    }
                                                    })();

                                                    (function(){
                                                    var importButton;
                                                    if( importButton = document.getElementById( "importButton" ) ) {
                                                        var sendPictures = function(e) {
                                                        e.stopPropagation();
                                                        e.preventDefault();
                                                        };
                                                        importButton.addEventListener("click", sendPictures, false);

                                                        var importThumbnails;
                                                        importThumbnails = document.getElementById( "importThumbnails" );
                                                        var showPictures = function( files ) {
                                                            if( !importThumbnails ) return;

                                                            if( files.length == 0 ) return;
                                                        
                                                            if( importThumbnails.getElementsByTagName( "img" ).length == 0 ) importThumbnails.innerHTML = "";
                                                            var dltBtn = document.createElement("button");
                                                                    dltBtn.innerHTML = "X";
                                                                    dltBtn.className = "btnimh";
                                                                    dltBtn.onclick = function(e) {
                                                                        document.getElementById('file').value = "";
                                                                        importThumbnails.innerHTML = "";
                                                                    }
                                                            var list = document.createElement("ul");
                                                            for (var i = 0; i < files.length; i++) {
                                                                var li = document.createElement("li");
                                                                list.appendChild(li);
                                                        
                                                                // var dltBtn = document.createElement("button");
                                                                //     dltBtn.innerHTML = "X";
                                                                //     dltBtn.className = "btnimh";
                                                                //     dltBtn.onclick = function(e) {
                                                                //         importThumbnails.innerHTML = "";

                                                                //     }

                                                                // var dltBtn = document.createElement("button");
                                                                // dltBtn.innerHTML = "X";
                                                                // dltBtn.className = "btnimh";
                                                                // dltBtn.onclick = function(e) {
                                                                //     e.stopPropagation();
                                                                //     e.preventDefault();
                                                                //     this.parentNode.remove();
                                                                // }
                                                                li.appendChild(dltBtn);
                                                                var img = document.createElement("img");
                                                                img.src = window.URL.createObjectURL(files[i]);
                                                                img.height = 60;
                                                                img.onload = function(e) {
                                                                    window.URL.revokeObjectURL(this.src);
                                                                }
                                                                img.onerror = function(e) {var el = document.querySelector('div');
                                                                    var newEl = document.createElement('span');
                                                                    newEl.className = "thumbnail";
                                                                    newEl.innerHTML = '.CR2<br /><small>Canon</small>';
                                                                    this.parentNode.replaceChild(newEl, this);
                                                                }
                                                                li.appendChild(img);
                                                        
                                                                var info = document.createElement("span");
                                                                // info.innerHTML = files[i].name + ": " + Math.round(files[i].size/104857,6)/10 + " Mb";
                                                                // info.innerHTML = files[i].name ;
                                                                li.appendChild(info);
                                                            }
                                                            importThumbnails.appendChild(list);
                                                        };

                                                        var importBox;
                                                        if( importBox  = document.getElementById("importBox") ) {
                                                        var dragenter = function(e) {
                                                            e.stopPropagation();
                                                            e.preventDefault();
                                                        };
                                                        var dragover = function(e) {
                                                            e.stopPropagation();
                                                            e.preventDefault();
                                                        };
                                                        var drop = function(e) {
                                                            e.stopPropagation();
                                                            e.preventDefault();

                                                            showPictures( e.dataTransfer.files );
                                                        };

                                                        importBox.addEventListener("dragenter", dragenter, false);
                                                        importBox.addEventListener("dragover", dragover, false);
                                                        importBox.addEventListener("drop", drop, false);
                                                        }

                                                        var importInput;
                                                        if( importInput = document.getElementById( "file" ) ) {
                                                        importInput.addEventListener("change", function() { showPictures(this.files) }, false);
                                                        }
                                                    }
                                                    else console.log( "No importButton" );
                                                    })();


                                                    const input = document.querySelector('#file');
                                                    input.addEventListener('change', (e) => {
                                                        const files = input.files;
                                                        if (files.length > 20) {
                                                            alert(`Only 20 files are allowed to upload.`);
                                                            document.getElementById('file').value = "";
                                                            importThumbnailss = document.getElementById( "importThumbnails" );
                                                            importThumbnailss.innerHTML = "";
                                                        }
                                                    });
                                                    
                                                </script>

                                                <div class="form-group form-group-lg formmarginad"> 
                                                    <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="Exteriorcolor" required="required" >
                                                            <option  value="">Exterior Color</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "colorclassifieds", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                    </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="Exteriorcolor" type="text" name="Exteriorcolor" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Exterior Color">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="Interiorcolor" required="required" >
                                                            <option  value="">Interior Color</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "colorclassifieds", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                    </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="Interiorcolor" type="text" name="Interiorcolor" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Interior Color">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="bodycars" required="required" >
                                                            <option  value="">Body condition</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "bodycars", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="mechanicalcars" required="required" >
                                                            <option  value="">Mechanical condition</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "mechanicalcars", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="bodytypecars" required="required" >
                                                            <option  value="">Body Type</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "bodytypecars", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="doors" required="required" >
                                                            <option  value="">Doors</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "doors", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="cylinders" required="required" >
                                                            <option  value="">No. of Cylinders</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "cylinders", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="transmissiontype" required="required" >
                                                            <option  value="">Transmission Type</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "transmissiontype", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="horsepowercars" required="required" >
                                                            <option  value="">Horsepower</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "horsepowercars", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="warrantycars" required="required" >
                                                            <option  value="" >Warranty</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "warrantycars", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="fueltypecars" required="required" >
                                                            <option  value="">Fuel Type</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "fueltypecars", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="side" required="required" >
                                                            <option  value="">Steering Side</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "side", "", "", "Id");
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

                                                    <div class="col-lg-1"><div class="form-check">
                                                        <h5>Extra</h5>
                                                        </div>

                                                        </div>

                                                        <div class="col-lg-11">
                                                            <div class="form-check">
                                                            </div> 
                                                        </div>

                                                        <!-- <div class="col-lg-11"><div class="form-check">
                                                        <button>Sow All</button>
                                                        </div> 
                                                    </div>-->
                                                    <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Climate Control " id="a0" name="cars[]">
                                                        <label class="form-check-label" for="a0">
                                                            Climate Control
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Cooled Seats " id="a1" name="cars[]">
                                                        <label class="form-check-label" for="a1">
                                                            Cooled Seats
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="DVD Player " id="a2" name="cars[]">
                                                        <label class="form-check-label" for="a2">
                                                        DVD Player
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Front Wheel Drive " id="a3" name="cars[]">
                                                        <label class="form-check-label" for="a3">
                                                        Front Wheel Drive
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Keyless Entry " id="a4" name="cars[]">
                                                        <label class="form-check-label" for="a4">
                                                        Keyless Entry
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Navigation System " id="a5" name="cars[]">
                                                        <label class="form-check-label" for="a5">
                                                        Navigation System
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Parking Sensors " id="a6" name="cars[]">
                                                        <label class="form-check-label" for="a6">
                                                        Parking Sensors
                                                        </label></div>
                                                       </div>
                                                       <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Premium Sound System " id="a7" name="cars[]">
                                                        <label class="form-check-label" for="a7">
                                                        Premium Sound System
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Rear View Camera " id="a8" name="cars[]">
                                                        <label class="form-check-label" for="a8">
                                                        Rear View Camera
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="4 Wheel Drive " id="a9" name="cars[]">
                                                        <label class="form-check-label" for="a9">
                                                        4 Wheel Drive
                                                        </label></div>
                                                    </div>

                                                        <div class="form-check">
                                                                <span class="toggle-info pull-right" style="color: #175DE3; font-weight: 700; font-size: 18px;">
                                                                Sow All
                                                                </span>                                                         
                                                            </div> 
                                                                <div class="panel-body ppll">
                                                                    <div class="row">
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Air Conditioning " id="b1" name="cars[]">
                                                                    <label class="form-check-label" for="b1">
                                                                    Air Conditioning
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Alarm/Anti-Theft System " id="b2" name="cars[]">
                                                                    <label class="form-check-label" for="b2">
                                                                    Alarm/Anti-Theft System
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="All Wheel Drive " id="b3" name="cars[]">
                                                                    <label class="form-check-label" for="b3">
                                                                    All Wheel Drive
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="All Wheel Steering " id="b4" name="cars[]">
                                                                    <label class="form-check-label" for="b4">
                                                                    All Wheel Steering
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="AM/FM Radio " id="b5" name="cars[]">
                                                                    <label class="form-check-label" for="b5">
                                                                    AM/FM Radio
                                                                    </label></div>
                                                                    </div>

                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Anti-Lock Brakes/ABS " id="b6" name="cars[]">
                                                                    <label class="form-check-label" for="b6">
                                                                    Anti-Lock Brakes/ABS
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Aux Audio In " id="b7" name="cars[]">
                                                                    <label class="form-check-label" for="b7">
                                                                    Aux Audio In
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Bluetooth System " id="b8" name="cars[]">
                                                                    <label class="form-check-label" for="b8">
                                                                    Bluetooth System
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Body Kit " id="b9" name="cars[]">
                                                                    <label class="form-check-label" for="b9">
                                                                    Body Kit
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Brush Guard " id="c1" name="cars[]">
                                                                    <label class="form-check-label" for="c1">
                                                                    Brush Guard
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Cassette Player " id="c2" name="cars[]">
                                                                    <label class="form-check-label" for="c2">
                                                                    Cassette Player
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="CD Player " id="c3" name="cars[]">
                                                                    <label class="form-check-label" for="c3">
                                                                    CD Player
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Cruise Control " id="c4" name="cars[]">
                                                                    <label class="form-check-label" for="c4">
                                                                    Cruise Control
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Dual Exhaust " id="c5" name="cars[]">
                                                                    <label class="form-check-label" for="c5">
                                                                    Dual Exhaust
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Fog Lights " id="c6" name="cars[]">
                                                                    <label class="form-check-label" for="c6">
                                                                    Fog Lights
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Front Airbags " id="c7" name="cars[]">
                                                                    <label class="form-check-label" for="c7">
                                                                    Front Airbags
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Heat " id="c8" name="cars[]">
                                                                    <label class="form-check-label" for="c8">
                                                                    Heat
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Heated Seats " id="c9" name="cars[]">
                                                                    <label class="form-check-label" for="c9">
                                                                    Heated Seats
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Keyless Start " id="d1" name="cars[]">
                                                                    <label class="form-check-label" for="d1">
                                                                    Keyless Start
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Moonroof " id="d2" name="cars[]">
                                                                    <label class="form-check-label" for="d2">
                                                                    Moonroof
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="N2O System " id="d3" name="cars[]">
                                                                    <label class="form-check-label" for="d3">
                                                                    N2O System
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Off-Road Kit " id="d4" name="cars[]">
                                                                    <label class="form-check-label" for="d4">
                                                                    Off-Road Kit
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Power Mirrors " id="d5" name="cars[]">
                                                                    <label class="form-check-label" for="d5">
                                                                    Power Mirrors
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Power Seats " id="d6" name="cars[]">
                                                                    <label class="form-check-label" for="d6">
                                                                    Power Seats
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Power Steering " id="d7" name="cars[]">
                                                                    <label class="form-check-label" for="d7">
                                                                    Power Steering
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Power Sunroof " id="d8" name="cars[]">
                                                                    <label class="form-check-label" for="d8">
                                                                    Power Sunroof
                                                                    </label></div>
                                                                    </div>

                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Power Windows " id="d9" name="cars[]">
                                                                    <label class="form-check-label" for="d9">
                                                                    Power Windows
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Premium Lights " id="e1" name="cars[]">
                                                                    <label class="form-check-label" for="e1">
                                                                    Premium Lights
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Premium Paint " id="e2" name="cars[]">
                                                                    <label class="form-check-label" for="e2">
                                                                    Premium Paint
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Premium Wheels/Rims " id="e3" name="cars[]">
                                                                    <label class="form-check-label" for="e3">
                                                                    Premium Wheels/Rims
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Racing Seats " id="e4" name="cars[]">
                                                                    <label class="form-check-label" for="e4">
                                                                    Racing Seats
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Rear Wheel Drive " id="e5" name="cars[]">
                                                                    <label class="form-check-label" for="e5">
                                                                    Rear Wheel Drive
                                                                    </label></div>
                                                                    </div>

                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Roof Rack " id="e6" name="cars[]">
                                                                    <label class="form-check-label" for="e6">
                                                                    Roof Rack
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Satellite Radio " id="e7" name="cars[]">
                                                                    <label class="form-check-label" for="e7">
                                                                    Satellite Radio
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Side Airbags " id="e8" name="cars[]">
                                                                    <label class="form-check-label" for="e8">
                                                                    Side Airbags
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Spoiler " id="e9" name="cars[]">
                                                                    <label class="form-check-label" for="e9">
                                                                    Spoiler
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Sunroof " id="f1" name="cars[]">
                                                                    <label class="form-check-label" for="f1">
                                                                    Sunroof
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Tiptronic " id="f2" name="cars[]">
                                                                    <label class="form-check-label" for="f2">
                                                                    Tiptronic
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Gears " id="f3" name="cars[]">
                                                                    <label class="form-check-label" for="f3">
                                                                    Gears
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="VHS " id="f4" name="cars[]">
                                                                    <label class="form-check-label" for="f4">
                                                                    VHS
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Player " id="f5" name="cars[]">
                                                                    <label class="form-check-label" for="f5">
                                                                    Player
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Winch " id="f6" name="cars[]">
                                                                    <label class="form-check-label" for="f6">
                                                                    Winch
                                                                    </label></div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                        
                                                    </div>
                                                </div>

                                                <?php echo location(); ?>

                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="location" type="hidden" name="extrascars" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="extrascars you cars">
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
                <?php
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