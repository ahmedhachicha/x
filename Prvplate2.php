<?php 
ob_start();
session_start();
$pageTitle="New Number Plates";
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
                                                <a href="abudhabiplate.php" class="linkfrom">Abu Dhabi plate > Private car</a>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="plate2" name="category" class="forminput form-select-lg" autocomplete="off" required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="plate2one" name="typenpl" class="forminput form-select-lg" autocomplete="off" required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Abu Dhabi plate > Private car" name="categoryy" class="forminput form-select-lg" autocomplete="off" required="required">
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="platecode" required="required" >
                                                            <option  value="">plate Code</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "platecode", "", "", "Id");
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
                                                        <input id="name" type="text" name="platenumber" class="form-control forminput form-select-lg live" autocomplete="off" required="required" placeholder="Plate Number" data-class=".live-title" pattern="\d{0,9}" minlength="5" maxlength="5">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is Invalide
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                       
                                                <div class="form-group form-group-lg formmarginad"> 
                                                    <div class="radiocard">
                                                        <label for="ads-yes" class="choix" data-radio="radio_1">
                                                            <input id="ads-yes" type="radio" name="design[]" value="3" checked/>
                                                            <span>Classic Design</span>
                                                        </label> |
                                                        <label for="ads-no" class="choix" data-radio="radio_2">
                                                            <input id="ads-no" type="radio" name="design[]" value="4"/>
                                                            <span>New Design</span>
                                                        </label>
                                                    </div>
                                                </div> 
                                                        <div class="content formmargina">
                                                            <div class="radio_content radio_1">
                                                                <img src="layout/images/Abu_Dhabi.png" alt="" style="width: 360px;"><h3 class="live-title"></h3>
                                                            </div>
                                                            <div class="radio_content radio_2">
                                                                <img src="layout/images/Abu_Dhabi_New.png" alt="" style="width: 360px;"><h3 class="live-title"></h3>
                                                            </div>
                                                        </div>
                                                 
                                                <style>
                                                    .formmargina{margin-bottom: 15px;}
                                                    h3.live-title {
                                                        top: -135px;
                                                        position: relative;
                                                        text-align: center;
                                                        color: #424648;
                                                        font-size: 60px;
                                                        font-weight: 600;
                                                        height: 40px;
                                                        letter-spacing: 4px;
                                                        font-family: Oswald-Regular;
                                                    }
                                                    .radiocard {
                                                        border: 2px solid #E0E0E0;
                                                        margin-right: 55px;
                                                        border-radius: 3px;
                                                        height: 50px;
                                                        width: 360px;
                                                    }
                                                    label.choix {
                                                        margin-top: 10px;
                                                    }
                                                </style>
                                                <script>
                                                        $('.live').keyup(function (){
                                                            $($(this).data('class')).text($(this).val());
                                                        });
                                                </script>      
                                                <script>
                                                        $(document).ready(function(){
                                                            $(".content .radio_content").hide();
                                                            $(".content .radio_content:first-child").show();
                                                            $(".choix").click(function(){
                                                            var current_raido = $(this).attr("data-radio");
                                                            $(".content .radio_content").hide();
                                                            $("."+current_raido).show();
                                                            })
                                                        });
                                                </script>
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
                                                        <textarea class=" form input_contact" name="description" rows="4" cols="38" required="required" placeholder="Describe your Number Plates"></textarea>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
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
                                        <?php echo Safetyfirst(); ?> 
                                            <input id="title" type="hidden" name="phone" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['phone'] ?>" />
                                            <input id="title" type="hidden" name="category" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['category'] ?>"   />
                                            <input id="title" type="hidden" name="categoryy" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['categoryy'] ?>"   />
                                            <input id="title" type="hidden" name="typenpl" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['typenpl'] ?>"   />
                                            <input id="title" type="hidden" name="price" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['price'] ?>"  />
                                            <input id="title" type="hidden" name="name" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['name'] ?>"  />    
                                            <input id="title" type="hidden" name="description" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['description'] ?>" /> 
                                            <input id="title" type="hidden" name="platenumber" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['platenumber'] ?>" /> 
                                            <?php
                                            function myfunction($v1,$v2)
                                                {
                                                return $v1 . "-" . $v2;
                                                }
                                            $design = $_POST['design'];
                                               ?>
                                            <?php   
                                                                            $locationcars   = $_POST['locationcars'];
                                                                            $getlocationcars = $con->prepare("SELECT * FROM locationcars WHERE Id = $locationcars");
                                                                            $getlocationcars->execute();
                                                                            $info = $getlocationcars->fetch();
                                                                            $namelocationcars = $info['Name']; ?>  
                                                                    <input id="title" type="hidden" name="locationcars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namelocationcars ?>"  />
                                            <input id="title" type="hidden" name="design" class="form-control form-select-lg" autocomplete="off" value="<?php print_r(array_reduce($design,"myfunction")); ?>" /> 
                                            <?php   
                                                                            $platecode   = $_POST['platecode'];
                                                                            $getplatecode = $con->prepare("SELECT * FROM platecode WHERE Id = $platecode");
                                                                            $getplatecode->execute();
                                                                            $info = $getplatecode->fetch();
                                                                            $nameplatecode = $info['Name']; ?>  
                                                                    <input id="title" type="hidden" name="platecode" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameplatecode ?>"  />
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
                        $name       = $_POST['name'];
                        $typenpl       = $_POST['typenpl'];
                        $platecode       = $_POST['platecode'];
                        $platenumber       = $_POST['platenumber'];
                        $phone       = $_POST['phone'];
                        $desc       = $_POST['description'];
                        $category     = $_POST['category'];
                        $categoryy     = $_POST['categoryy'];
                        $locationcars     = $_POST['locationcars'];
                        $price      = $_POST['price'];
                        $design      = $_POST['design'];
        
                                    $stmtitemadd = $con->prepare("INSERT INTO
                                                            numberplates(Name, phone, locationcars, design, category, categoryy, user_Id, price, date, description, typenpl, platecode, platenumber, Approve)
                                                            VALUES(:zname, :zphone, :zlocationcars, :zdesign, :zcategory, :zcategoryy, :zuser, :zprice, now(), :zDescription, :ztypenpl, :zplatecode, :zplatenumber, 1)");
                                    $stmtitemadd->execute(array(
                                            'zname'     => $name,
                                            'zuser'     => $_SESSION['uid'],
                                            'zphone'    => $phone,
                                            'zlocationcars' => $locationcars,
                                            'zdesign' => $design,
                                            'zcategory' =>$category,
                                            'zcategoryy' =>$categoryy,
                                            'zprice'    => $price,
                                            'zDescription'     => $desc,
                                            'ztypenpl' => $typenpl,
                                            'zplatecode' => $platecode,
                                            'zplatenumber' => $platenumber
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