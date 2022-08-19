<?php
ob_start();
session_start();
$pageTitle="New Jobs";
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
                                                <a href="wantjob.php" class="linkfrom">Jobs Wanted > Art/Desig</a>
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
                                                            <input id="model" type="hidden" value="Art/Desig ccct" name="typejobs" class="forminput form-select-lg" autocomplete="off" required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Jobs > Jobs Wanted > Art/Desig" name="categoryy" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
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
                                                        <textarea class=" form input_contact" name="description" rows="4" cols="38" required="required" placeholder="Describe the job you're looking for"></textarea>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="file" type="file" name="image" class="style_input_img forminput form-select-lg" required="required" accept=".pdf,.doc,.txt"/>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="genderjobs" required >
                                                            <option value="">Gender</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "genderjobs", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="nationality" >
                                                            <option value="">Nationality</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "nationality", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="phone" type="text" name="currentlocation" class=" forminput form-select-lg" autocomplete="off" required placeholder="Current Location">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="phone" type="text" name="currentcompany" class=" forminput form-select-lg" autocomplete="off" required placeholder="Current Company">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="phone" type="text" name="currentposition" class=" forminput form-select-lg" autocomplete="off" placeholder="Current Positiony">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad">
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="noticeperiodjobs" required >
                                                            <option value="">Notice Period</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "noticeperiodjobs", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="visastatusjobs" required >
                                                            <option value="">Visa Status</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "visastatusjobs", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="careerleveljobs" required >
                                                            <option value="">Career Level</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "careerleveljobs", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="salaryexpectationjobs" required >
                                                            <option value="">Salary Expectations</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "salaryexpectationjobs", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="workexperiencejobs" required >
                                                            <option value="">Work experience</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "workexperiencejobs", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="educationleveljobs" required >
                                                            <option value="">Education level</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "educationleveljobs", "", "", "Id");
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
                                                        <select class="form-select forminput" aria-label="Default select example" name="commitmentjobs" required >
                                                            <option value="">Commitment</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "commitmentjobs", "", "", "Id");
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
                                                                            $imageName = $_FILES['image']['name'];
                                                                            $imageSize = $_FILES['image']['size'];
                                                                            $imageTmp  = $_FILES['image']['tmp_name'];
                                                                            $imageTaype= $_FILES['image']['type'];

                                                                            $image = rand(0, 100000000) . '_' . $imageName . rand(0, 1000);
                                                                            move_uploaded_file($imageTmp, "admin\Update_Image\uploads\avatars\\" . $image);
                                                                        $data   .= $image." ";
                                                            ?>
                                                            <input type="hidden" name="image" value="<?php echo $data ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php echo Safetyfirst(); ?>
                                            <input id="title" type="hidden" name="phone" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['phone'] ?>" />
                                            <input id="title" type="hidden" name="category" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['category'] ?>"   />
                                            <input id="title" type="hidden" name="typejobs" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['typejobs'] ?>"   />
                                            <input id="title" type="hidden" name="location" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['location']; ?>"  />
                                            <input id="title" type="hidden" name="name" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['name'] ?>"  />
                                            <input id="title" type="hidden" name="description" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['description'] ?>" />
                                            <input id="title" type="hidden" name="nationality" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['nationality'] ?>" />
                                            <input id="title" type="hidden" name="currentlocation" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['currentlocation'] ?>" />
                                            <input id="title" type="hidden" name="currentcompany" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['currentcompany'] ?>" />
                                            <input id="title" type="hidden" name="currentposition" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['currentposition'] ?>" />
                                            <input id="title" type="hidden" name="categoryy" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['categoryy'] ?>"   />
                                            <?php
                                                                            $locationcars   = $_POST['locationcars'];
                                                                            $getlocationcars = $con->prepare("SELECT * FROM locationcars WHERE Id = $locationcars");
                                                                            $getlocationcars->execute();
                                                                            $info = $getlocationcars->fetch();
                                                                            $namelocationcars = $info['Name']; ?>
                                                                    <input id="title" type="hidden" name="locationcars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namelocationcars ?>"  />
                                            <?php
                                                                            $genderjobs = $_POST['genderjobs'];
                                                                            $getgenderjobs = $con->prepare("SELECT * FROM genderjobs WHERE Id = $genderjobs");
                                                                            $getgenderjobs->execute();
                                                                            $info = $getgenderjobs->fetch();
                                                                            $namegenderjobs = $info['Name'];
                                                                            ?>
                                                                    <input id="title" type="hidden" name="genderjobs" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namegenderjobs ?>" />
                                                                    <?php
                                                                            $noticeperiodjobs = $_POST['noticeperiodjobs'];
                                                                            $getnoticeperiodjobs = $con->prepare("SELECT * FROM noticeperiodjobs WHERE Id = $noticeperiodjobs");
                                                                            $getnoticeperiodjobs->execute();
                                                                            $info = $getnoticeperiodjobs->fetch();
                                                                            $namenoticeperiodjobs = $info['Name'];
                                                                            ?>
                                                                    <input id="title" type="hidden" name="noticeperiodjobs" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namenoticeperiodjobs ?>" />
                                                                    <?php
                                                                            $visastatusjobs = $_POST['visastatusjobs'];
                                                                            $getvisastatusjobs = $con->prepare("SELECT * FROM visastatusjobs WHERE Id = $visastatusjobs");
                                                                            $getvisastatusjobs->execute();
                                                                            $info = $getvisastatusjobs->fetch();
                                                                            $namevisastatusjobs = $info['Name'];
                                                                            ?>
                                                                    <input id="title" type="hidden" name="visastatusjobs" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namevisastatusjobs ?>" />
                                                                    <?php
                                                                            $careerleveljobs = $_POST['careerleveljobs'];
                                                                            $getcareerleveljobs = $con->prepare("SELECT * FROM careerleveljobs WHERE Id = $careerleveljobs");
                                                                            $getcareerleveljobs->execute();
                                                                            $info = $getcareerleveljobs->fetch();
                                                                            $namecareerleveljobs = $info['Name'];
                                                                            ?>
                                                                    <input id="title" type="hidden" name="careerleveljobs" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namecareerleveljobs ?>" />
                                                                    <?php
                                                                            $salaryexpectationjobs = $_POST['salaryexpectationjobs'];
                                                                            $getsalaryexpectationjobs = $con->prepare("SELECT * FROM salaryexpectationjobs WHERE Id = $salaryexpectationjobs");
                                                                            $getsalaryexpectationjobs->execute();
                                                                            $info = $getsalaryexpectationjobs->fetch();
                                                                            $namesalaryexpectationjobs = $info['Name'];
                                                                            ?>
                                                                    <input id="title" type="hidden" name="salaryexpectationjobs" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namesalaryexpectationjobs ?>" />
                                                                    <?php
                                                                            $workexperiencejobs = $_POST['workexperiencejobs'];
                                                                            $getworkexperiencejobs = $con->prepare("SELECT * FROM workexperiencejobs WHERE Id = $workexperiencejobs");
                                                                            $getworkexperiencejobs->execute();
                                                                            $info = $getworkexperiencejobs->fetch();
                                                                            $nameworkexperiencejobs = $info['Name'];
                                                                            ?>
                                                                    <input id="title" type="hidden" name="workexperiencejobs" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameworkexperiencejobs ?>" />
                                                                    <?php
                                                                            $educationleveljobs = $_POST['educationleveljobs'];
                                                                            $geteducationleveljobs = $con->prepare("SELECT * FROM educationleveljobs WHERE Id = $educationleveljobs");
                                                                            $geteducationleveljobs->execute();
                                                                            $info = $geteducationleveljobs->fetch();
                                                                            $nameeducationleveljobs = $info['Name'];
                                                                            ?>
                                                                    <input id="title" type="hidden" name="educationleveljobs" class="form-control form-select-lg" autocomplete="off" value="<?php echo $nameeducationleveljobs ?>" />
                                                                    <?php
                                                                            $commitmentjobs = $_POST['commitmentjobs'];
                                                                            $getcommitmentjobs = $con->prepare("SELECT * FROM commitmentjobs WHERE Id = $commitmentjobs");
                                                                            $getcommitmentjobs->execute();
                                                                            $info = $getcommitmentjobs->fetch();
                                                                            $namecommitmentjobs = $info['Name'];
                                                                            ?>
                                                                    <input id="title" type="hidden" name="commitmentjobs" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namecommitmentjobs ?>" />
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

                                        $_SESSION['image'] = $_POST['image'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['typejobs']     = $_POST['typejobs'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['genderjobs']   = $_POST['genderjobs'];
                                        $_SESSION['nationality']   = $_POST['nationality'];
                                        $_SESSION['currentlocation']   = $_POST['currentlocation'];
                                        $_SESSION['currentcompany']   = $_POST['currentcompany'];
                                        $_SESSION['currentposition']   = $_POST['currentposition'];
                                        $_SESSION['noticeperiodjobs']   = $_POST['noticeperiodjobs'];
                                        $_SESSION['visastatusjobs']   = $_POST['visastatusjobs'];
                                        $_SESSION['careerleveljobs']   = $_POST['careerleveljobs'];
                                        $_SESSION['salaryexpectationjobs']   = $_POST['salaryexpectationjobs'];
                                        $_SESSION['workexperiencejobs']   = $_POST['workexperiencejobs'];
                                        $_SESSION['educationleveljobs']   = $_POST['educationleveljobs'];
                                        $_SESSION['commitmentjobs']   = $_POST['commitmentjobs'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
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
                                        $_SESSION['image'] = $_POST['image'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['typejobs']     = $_POST['typejobs'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['genderjobs']   = $_POST['genderjobs'];
                                        $_SESSION['nationality']   = $_POST['nationality'];
                                        $_SESSION['currentlocation']   = $_POST['currentlocation'];
                                        $_SESSION['currentcompany']   = $_POST['currentcompany'];
                                        $_SESSION['currentposition']   = $_POST['currentposition'];
                                        $_SESSION['noticeperiodjobs']   = $_POST['noticeperiodjobs'];
                                        $_SESSION['visastatusjobs']   = $_POST['visastatusjobs'];
                                        $_SESSION['careerleveljobs']   = $_POST['careerleveljobs'];
                                        $_SESSION['salaryexpectationjobs']   = $_POST['salaryexpectationjobs'];
                                        $_SESSION['workexperiencejobs']   = $_POST['workexperiencejobs'];
                                        $_SESSION['educationleveljobs']   = $_POST['educationleveljobs'];
                                        $_SESSION['commitmentjobs']   = $_POST['commitmentjobs'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                            $_SESSION['token'] = $tokenrand1;

                                echo '<div class="divpayment">Unlimited Ads 30 days</div>';
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
                                        $_SESSION['image'] = $_POST['image'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['typejobs']     = $_POST['typejobs'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['genderjobs']   = $_POST['genderjobs'];
                                        $_SESSION['nationality']   = $_POST['nationality'];
                                        $_SESSION['currentlocation']   = $_POST['currentlocation'];
                                        $_SESSION['currentcompany']   = $_POST['currentcompany'];
                                        $_SESSION['currentposition']   = $_POST['currentposition'];
                                        $_SESSION['noticeperiodjobs']   = $_POST['noticeperiodjobs'];
                                        $_SESSION['visastatusjobs']   = $_POST['visastatusjobs'];
                                        $_SESSION['careerleveljobs']   = $_POST['careerleveljobs'];
                                        $_SESSION['salaryexpectationjobs']   = $_POST['salaryexpectationjobs'];
                                        $_SESSION['workexperiencejobs']   = $_POST['workexperiencejobs'];
                                        $_SESSION['educationleveljobs']   = $_POST['educationleveljobs'];
                                        $_SESSION['commitmentjobs']   = $_POST['commitmentjobs'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                            $_SESSION['token'] = $tokenrand2;

                                echo '<div class="divpayment">Unlimited Ads 3 months</div>';
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
                                        $_SESSION['image'] = $_POST['image'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['typejobs']     = $_POST['typejobs'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['genderjobs']   = $_POST['genderjobs'];
                                        $_SESSION['nationality']   = $_POST['nationality'];
                                        $_SESSION['currentlocation']   = $_POST['currentlocation'];
                                        $_SESSION['currentcompany']   = $_POST['currentcompany'];
                                        $_SESSION['currentposition']   = $_POST['currentposition'];
                                        $_SESSION['noticeperiodjobs']   = $_POST['noticeperiodjobs'];
                                        $_SESSION['visastatusjobs']   = $_POST['visastatusjobs'];
                                        $_SESSION['careerleveljobs']   = $_POST['careerleveljobs'];
                                        $_SESSION['salaryexpectationjobs']   = $_POST['salaryexpectationjobs'];
                                        $_SESSION['workexperiencejobs']   = $_POST['workexperiencejobs'];
                                        $_SESSION['educationleveljobs']   = $_POST['educationleveljobs'];
                                        $_SESSION['commitmentjobs']   = $_POST['commitmentjobs'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                        $_SESSION['token'] = $tokenrand3;

                                echo '<div class="divpayment">Unlimited Ads 1 year</div>';
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
                                        $_SESSION['image'] = $_POST['image'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['typejobs']     = $_POST['typejobs'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['genderjobs']   = $_POST['genderjobs'];
                                        $_SESSION['nationality']   = $_POST['nationality'];
                                        $_SESSION['currentlocation']   = $_POST['currentlocation'];
                                        $_SESSION['currentcompany']   = $_POST['currentcompany'];
                                        $_SESSION['currentposition']   = $_POST['currentposition'];
                                        $_SESSION['noticeperiodjobs']   = $_POST['noticeperiodjobs'];
                                        $_SESSION['visastatusjobs']   = $_POST['visastatusjobs'];
                                        $_SESSION['careerleveljobs']   = $_POST['careerleveljobs'];
                                        $_SESSION['salaryexpectationjobs']   = $_POST['salaryexpectationjobs'];
                                        $_SESSION['workexperiencejobs']   = $_POST['workexperiencejobs'];
                                        $_SESSION['educationleveljobs']   = $_POST['educationleveljobs'];
                                        $_SESSION['commitmentjobs']   = $_POST['commitmentjobs'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
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
                                        $_SESSION['image'] = $_POST['image'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['typejobs']     = $_POST['typejobs'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['genderjobs']   = $_POST['genderjobs'];
                                        $_SESSION['nationality']   = $_POST['nationality'];
                                        $_SESSION['currentlocation']   = $_POST['currentlocation'];
                                        $_SESSION['currentcompany']   = $_POST['currentcompany'];
                                        $_SESSION['currentposition']   = $_POST['currentposition'];
                                        $_SESSION['noticeperiodjobs']   = $_POST['noticeperiodjobs'];
                                        $_SESSION['visastatusjobs']   = $_POST['visastatusjobs'];
                                        $_SESSION['careerleveljobs']   = $_POST['careerleveljobs'];
                                        $_SESSION['salaryexpectationjobs']   = $_POST['salaryexpectationjobs'];
                                        $_SESSION['workexperiencejobs']   = $_POST['workexperiencejobs'];
                                        $_SESSION['educationleveljobs']   = $_POST['educationleveljobs'];
                                        $_SESSION['commitmentjobs']   = $_POST['commitmentjobs'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                            $_SESSION['token'] = $tokenrand1;

                                echo '<div class="divpayment">Unlimited Ads 30 days</div>';
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
                                        $_SESSION['image'] = $_POST['image'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['typejobs']     = $_POST['typejobs'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['genderjobs']   = $_POST['genderjobs'];
                                        $_SESSION['nationality']   = $_POST['nationality'];
                                        $_SESSION['currentlocation']   = $_POST['currentlocation'];
                                        $_SESSION['currentcompany']   = $_POST['currentcompany'];
                                        $_SESSION['currentposition']   = $_POST['currentposition'];
                                        $_SESSION['noticeperiodjobs']   = $_POST['noticeperiodjobs'];
                                        $_SESSION['visastatusjobs']   = $_POST['visastatusjobs'];
                                        $_SESSION['careerleveljobs']   = $_POST['careerleveljobs'];
                                        $_SESSION['salaryexpectationjobs']   = $_POST['salaryexpectationjobs'];
                                        $_SESSION['workexperiencejobs']   = $_POST['workexperiencejobs'];
                                        $_SESSION['educationleveljobs']   = $_POST['educationleveljobs'];
                                        $_SESSION['commitmentjobs']   = $_POST['commitmentjobs'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                            $_SESSION['token'] = $tokenrand2;

                                echo '<div class="divpayment">Unlimited Ads 3 months</div>';
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
                                        $_SESSION['image'] = $_POST['image'];
                                        $_SESSION['category']     = $_POST['category'];
                                        $_SESSION['name']       = $_POST['name'];
                                        $_SESSION['phone']       = $_POST['phone'];
                                        $_SESSION['desc']      = $_POST['description'];
                                        $_SESSION['typejobs']     = $_POST['typejobs'];
                                        $_SESSION['location']   = $_POST['location'];
                                        $_SESSION['genderjobs']   = $_POST['genderjobs'];
                                        $_SESSION['nationality']   = $_POST['nationality'];
                                        $_SESSION['currentlocation']   = $_POST['currentlocation'];
                                        $_SESSION['currentcompany']   = $_POST['currentcompany'];
                                        $_SESSION['currentposition']   = $_POST['currentposition'];
                                        $_SESSION['noticeperiodjobs']   = $_POST['noticeperiodjobs'];
                                        $_SESSION['visastatusjobs']   = $_POST['visastatusjobs'];
                                        $_SESSION['careerleveljobs']   = $_POST['careerleveljobs'];
                                        $_SESSION['salaryexpectationjobs']   = $_POST['salaryexpectationjobs'];
                                        $_SESSION['workexperiencejobs']   = $_POST['workexperiencejobs'];
                                        $_SESSION['educationleveljobs']   = $_POST['educationleveljobs'];
                                        $_SESSION['commitmentjobs']   = $_POST['commitmentjobs'];
                                        $_SESSION['locationcars']   = $_POST['locationcars'];
                                        $_SESSION['categoryy']     = $_POST['categoryy'];
                                        $_SESSION['token'] = $tokenrand3;

                                echo '<div class="divpayment">Unlimited Ads 1 year</div>';
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
                        $image = $_POST['image'];
                        $category     = $_POST['category'];
                        $name       = $_POST['name'];
                        $phone       = $_POST['phone'];
                        $desc      = $_POST['description'];
                        $typejobs     = $_POST['typejobs'];
                        $location   = $_POST['location'];
                        $genderjobs   = $_POST['genderjobs'];
                        $nationality   = $_POST['nationality'];
                        $currentlocation   = $_POST['currentlocation'];
                        $currentcompany   = $_POST['currentcompany'];
                        $currentposition   = $_POST['currentposition'];
                        $noticeperiodjobs   = $_POST['noticeperiodjobs'];
                        $visastatusjobs   = $_POST['visastatusjobs'];
                        $careerleveljobs   = $_POST['careerleveljobs'];
                        $salaryexpectationjobs   = $_POST['salaryexpectationjobs'];
                        $workexperiencejobs   = $_POST['workexperiencejobs'];
                        $educationleveljobs   = $_POST['educationleveljobs'];
                        $commitmentjobs   = $_POST['commitmentjobs'];
                        $locationcars   = $_POST['locationcars'];
                        $categoryy     = $_POST['categoryy'];
                        $formErrors = array();

                                    $stmtitemadd = $con->prepare("INSERT INTO
                                                            jobs(Name, locationcars, categoryy, categories, date, file, user_Id, phone, typejobs, location, description,  genderjobs, nationality, currentlocation, currentcompany, currentposition, noticeperiodjobs, visastatusjobs , careerleveljobs, salaryexpectationjobs, workexperiencejobs, educationleveljobs, commitmentjobs, Approve)
                                                            VALUES(:zname, :zlocationcars, :zcategoryy, :zcategory, now(), :zimage, :zuser, :zphone, :ztypejobs, :zlocation, :zdescription, :zgenderjobs, :znationality, :zcurrentlocation, :zcurrentcompany, :zcurrentposition, :znoticeperiodjobs, :zvisastatusjobs , :zcareerleveljobs, :zsalaryexpectationjobs, :zworkexperiencejobs, :zeducationleveljobs, :zcommitmentjobs, 1)");
                                    $stmtitemadd->execute(array(
                                            'zlocationcars' => $locationcars,
                                            'zcategoryy' => $categoryy,
                                            'zname'     => $name,
                                            'zcategory' => $category,
                                            'zimage'    => $image,
                                            'zuser'     => $_SESSION['uid'],
                                            'zphone'    => $phone,
                                            'ztypejobs'=> $typejobs,
                                            'zlocation'=>    $location,
                                            'zdescription'=>    $desc,
                                            'zgenderjobs'=>    $genderjobs,
                                            'znationality'=>    $nationality,
                                            'zcurrentlocation'=>    $currentlocation,
                                            'zcurrentcompany'=>    $currentcompany,
                                            'zcurrentposition'=>    $currentposition,
                                            'znoticeperiodjobs'=>    $noticeperiodjobs,
                                            'zvisastatusjobs'=>    $visastatusjobs,
                                            'zcareerleveljobs'=>    $careerleveljobs,
                                            'zsalaryexpectationjobs'=>    $salaryexpectationjobs,
                                            'zworkexperiencejobs'=>    $workexperiencejobs,
                                            'zeducationleveljobs'=>    $educationleveljobs,
                                            'zcommitmentjobs'=>    $commitmentjobs
                                    ));
                                    echo finads();
                    }
                    else{
                        echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                        echo "<a href='adheavyvzhicles.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Heavy Vehicles page.</a>";
                        }
                }
        }
        elseif($do == 'Insert1'){
            echo "<h1 class='text-center h1-member'>Insert Cars</h1>";
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $apikey = "YzI0MTI3NTMtY2MyZS00MTdkLWJmNDItNjY2YjgxZTU2MDcxOjJlY2Y4YmU1LWZjZGQtNGE4ZC05YjI5LWU4ODNiYWQxMTcyNg==";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/identity/auth/access-token");
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
                                "redirectUrl" =>  "https://ohyamal.com/Otherwantjob.php?do=Insertfin1"
                            ],
                            ];
                            $outlet = "c3cce49c-9824-4fc3-b237-f03f3c9c449f";
                            $json = json_encode($postData);
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/transactions/outlets/".$outlet."/orders");
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
                $apikey = "YzI0MTI3NTMtY2MyZS00MTdkLWJmNDItNjY2YjgxZTU2MDcxOjJlY2Y4YmU1LWZjZGQtNGE4ZC05YjI5LWU4ODNiYWQxMTcyNg==";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/identity/auth/access-token");
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
                                "redirectUrl" =>  "https://ohyamal.com/Otherwantjob.php?do=Insertfin2"
                            ],
                            ];
                            $outlet = "c3cce49c-9824-4fc3-b237-f03f3c9c449f";
                            $json = json_encode($postData);
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/transactions/outlets/".$outlet."/orders");
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
                $apikey = "YzI0MTI3NTMtY2MyZS00MTdkLWJmNDItNjY2YjgxZTU2MDcxOjJlY2Y4YmU1LWZjZGQtNGE4ZC05YjI5LWU4ODNiYWQxMTcyNg==";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/identity/auth/access-token");
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
                                "redirectUrl" =>  "https://ohyamal.com/Otherwantjob.php?do=Insertfin3"
                            ],
                            ];
                            $outlet = "c3cce49c-9824-4fc3-b237-f03f3c9c449f";
                            $json = json_encode($postData);
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/transactions/outlets/".$outlet."/orders");
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
                $apikey = "YzI0MTI3NTMtY2MyZS00MTdkLWJmNDItNjY2YjgxZTU2MDcxOjJlY2Y4YmU1LWZjZGQtNGE4ZC05YjI5LWU4ODNiYWQxMTcyNg==";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/identity/auth/access-token");
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
                                "redirectUrl" =>  "https://ohyamal.com/Otherwantjob.php?do=Insertfin4"
                            ],
                            ];
                            $outlet = "c3cce49c-9824-4fc3-b237-f03f3c9c449f";
                            $json = json_encode($postData);
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "https://api-gateway.ngenius-payments.com/transactions/outlets/".$outlet."/orders");
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
        elseif($do == 'Insertfin1'){
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
                jobs(Name, locationcars, categoryy, categories, date, file, user_Id, phone, typejobs, location, description,  genderjobs, nationality, currentlocation, currentcompany, currentposition, noticeperiodjobs, visastatusjobs , careerleveljobs, salaryexpectationjobs, workexperiencejobs, educationleveljobs, commitmentjobs, Approve)
                VALUES(:zname, :zlocationcars, :zcategoryy, :zcategory, now(), :zimage, :zuser, :zphone, :ztypejobs, :zlocation, :zdescription, :zgenderjobs, :znationality, :zcurrentlocation, :zcurrentcompany, :zcurrentposition, :znoticeperiodjobs, :zvisastatusjobs , :zcareerleveljobs, :zsalaryexpectationjobs, :zworkexperiencejobs, :zeducationleveljobs, :zcommitmentjobs, 1)");
                $stmtitemadd->execute(array(
                'zlocationcars' => $_SESSION['locationcars'],
                'zcategoryy' => $_SESSION['categoryy'],
                'zname'     => $_SESSION['name'],
                'zcategory' => $_SESSION['category'],
                'zimage'    => $_SESSION['image'],
                'zuser'     => $_SESSION['uid'],
                'zphone'    => $_SESSION['phone'],
                'ztypejobs'=> $_SESSION['typejobs'],
                'zlocation'=>    $_SESSION['location'],
                'zdescription'=>    $_SESSION['desc'],
                'zgenderjobs'=>    $_SESSION['genderjobs'],
                'znationality'=>    $_SESSION['nationality'],
                'zcurrentlocation'=>    $_SESSION['currentlocation'],
                'zcurrentcompany'=>    $_SESSION['currentcompany'],
                'zcurrentposition'=>    $_SESSION['currentposition'],
                'znoticeperiodjobs'=>    $_SESSION['noticeperiodjobs'],
                'zvisastatusjobs'=>    $_SESSION['visastatusjobs'],
                'zcareerleveljobs'=>     $_SESSION['careerleveljobs'],
                'zsalaryexpectationjobs'=>    $_SESSION['salaryexpectationjobs'],
                'zworkexperiencejobs'=>    $_SESSION['workexperiencejobs'],
                'zeducationleveljobs'=>    $_SESSION['educationleveljobs'],
                'zcommitmentjobs'=>    $_SESSION['commitmentjobs']
                ));
                echo finads();
        }
        elseif($do == 'Insertfin2'){
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
                jobs(Name, locationcars, categoryy, categories, date, file, user_Id, phone, typejobs, location, description,  genderjobs, nationality, currentlocation, currentcompany, currentposition, noticeperiodjobs, visastatusjobs , careerleveljobs, salaryexpectationjobs, workexperiencejobs, educationleveljobs, commitmentjobs, Approve)
                VALUES(:zname, :zlocationcars, :zcategoryy, :zcategory, now(), :zimage, :zuser, :zphone, :ztypejobs, :zlocation, :zdescription, :zgenderjobs, :znationality, :zcurrentlocation, :zcurrentcompany, :zcurrentposition, :znoticeperiodjobs, :zvisastatusjobs , :zcareerleveljobs, :zsalaryexpectationjobs, :zworkexperiencejobs, :zeducationleveljobs, :zcommitmentjobs, 1)");
                $stmtitemadd->execute(array(
                'zlocationcars' => $_SESSION['locationcars'],
                'zcategoryy' => $_SESSION['categoryy'],
                'zname'     => $_SESSION['name'],
                'zcategory' => $_SESSION['category'],
                'zimage'    => $_SESSION['image'],
                'zuser'     => $_SESSION['uid'],
                'zphone'    => $_SESSION['phone'],
                'ztypejobs'=> $_SESSION['typejobs'],
                'zlocation'=>    $_SESSION['location'],
                'zdescription'=>    $_SESSION['desc'],
                'zgenderjobs'=>    $_SESSION['genderjobs'],
                'znationality'=>    $_SESSION['nationality'],
                'zcurrentlocation'=>    $_SESSION['currentlocation'],
                'zcurrentcompany'=>    $_SESSION['currentcompany'],
                'zcurrentposition'=>    $_SESSION['currentposition'],
                'znoticeperiodjobs'=>    $_SESSION['noticeperiodjobs'],
                'zvisastatusjobs'=>    $_SESSION['visastatusjobs'],
                'zcareerleveljobs'=>     $_SESSION['careerleveljobs'],
                'zsalaryexpectationjobs'=>    $_SESSION['salaryexpectationjobs'],
                'zworkexperiencejobs'=>    $_SESSION['workexperiencejobs'],
                'zeducationleveljobs'=>    $_SESSION['educationleveljobs'],
                'zcommitmentjobs'=>    $_SESSION['commitmentjobs']
                ));
                echo finads();
        }
        elseif($do == 'Insertfin3'){
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
                jobs(Name, locationcars, categoryy, categories, date, file, user_Id, phone, typejobs, location, description,  genderjobs, nationality, currentlocation, currentcompany, currentposition, noticeperiodjobs, visastatusjobs , careerleveljobs, salaryexpectationjobs, workexperiencejobs, educationleveljobs, commitmentjobs, Approve)
                VALUES(:zname, :zlocationcars, :zcategoryy, :zcategory, now(), :zimage, :zuser, :zphone, :ztypejobs, :zlocation, :zdescription, :zgenderjobs, :znationality, :zcurrentlocation, :zcurrentcompany, :zcurrentposition, :znoticeperiodjobs, :zvisastatusjobs , :zcareerleveljobs, :zsalaryexpectationjobs, :zworkexperiencejobs, :zeducationleveljobs, :zcommitmentjobs, 1)");
                $stmtitemadd->execute(array(
                'zlocationcars' => $_SESSION['locationcars'],
                'zcategoryy' => $_SESSION['categoryy'],
                'zname'     => $_SESSION['name'],
                'zcategory' => $_SESSION['category'],
                'zimage'    => $_SESSION['image'],
                'zuser'     => $_SESSION['uid'],
                'zphone'    => $_SESSION['phone'],
                'ztypejobs'=> $_SESSION['typejobs'],
                'zlocation'=>    $_SESSION['location'],
                'zdescription'=>    $_SESSION['desc'],
                'zgenderjobs'=>    $_SESSION['genderjobs'],
                'znationality'=>    $_SESSION['nationality'],
                'zcurrentlocation'=>    $_SESSION['currentlocation'],
                'zcurrentcompany'=>    $_SESSION['currentcompany'],
                'zcurrentposition'=>    $_SESSION['currentposition'],
                'znoticeperiodjobs'=>    $_SESSION['noticeperiodjobs'],
                'zvisastatusjobs'=>    $_SESSION['visastatusjobs'],
                'zcareerleveljobs'=>     $_SESSION['careerleveljobs'],
                'zsalaryexpectationjobs'=>    $_SESSION['salaryexpectationjobs'],
                'zworkexperiencejobs'=>    $_SESSION['workexperiencejobs'],
                'zeducationleveljobs'=>    $_SESSION['educationleveljobs'],
                'zcommitmentjobs'=>    $_SESSION['commitmentjobs']
                ));
                echo finads();
        }
        elseif($do == 'Insertfin4'){
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
                jobs(Name, locationcars, categoryy, categories, date, file, user_Id, phone, typejobs, location, description,  genderjobs, nationality, currentlocation, currentcompany, currentposition, noticeperiodjobs, visastatusjobs , careerleveljobs, salaryexpectationjobs, workexperiencejobs, educationleveljobs, commitmentjobs, Approve)
                VALUES(:zname, :zlocationcars, :zcategoryy, :zcategory, now(), :zimage, :zuser, :zphone, :ztypejobs, :zlocation, :zdescription, :zgenderjobs, :znationality, :zcurrentlocation, :zcurrentcompany, :zcurrentposition, :znoticeperiodjobs, :zvisastatusjobs , :zcareerleveljobs, :zsalaryexpectationjobs, :zworkexperiencejobs, :zeducationleveljobs, :zcommitmentjobs, 1)");
                $stmtitemadd->execute(array(
                'zlocationcars' => $_SESSION['locationcars'],
                'zcategoryy' => $_SESSION['categoryy'],
                'zname'     => $_SESSION['name'],
                'zcategory' => $_SESSION['category'],
                'zimage'    => $_SESSION['image'],
                'zuser'     => $_SESSION['uid'],
                'zphone'    => $_SESSION['phone'],
                'ztypejobs'=> $_SESSION['typejobs'],
                'zlocation'=>    $_SESSION['location'],
                'zdescription'=>    $_SESSION['desc'],
                'zgenderjobs'=>    $_SESSION['genderjobs'],
                'znationality'=>    $_SESSION['nationality'],
                'zcurrentlocation'=>    $_SESSION['currentlocation'],
                'zcurrentcompany'=>    $_SESSION['currentcompany'],
                'zcurrentposition'=>    $_SESSION['currentposition'],
                'znoticeperiodjobs'=>    $_SESSION['noticeperiodjobs'],
                'zvisastatusjobs'=>    $_SESSION['visastatusjobs'],
                'zcareerleveljobs'=>     $_SESSION['careerleveljobs'],
                'zsalaryexpectationjobs'=>    $_SESSION['salaryexpectationjobs'],
                'zworkexperiencejobs'=>    $_SESSION['workexperiencejobs'],
                'zeducationleveljobs'=>    $_SESSION['educationleveljobs'],
                'zcommitmentjobs'=>    $_SESSION['commitmentjobs']
                ));
                echo finads();
        }
        include $tpl . 'footer.php';
    }
    else{
        header('Location:index.php');
        exit();
    }
ob_end_flush();
?>
