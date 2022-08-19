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
                                                <a href="hiring.php" class="linkfrom">Jobs > Sports & Fitness</a>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Jobs > Jobs Hiring > Sports & Fitness" name="categoryy" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Model Of The cars">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php echo locate(); ?>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                            <input id="model" type="hidden" value="Sports & Fitness" name="typejobshiring" class="forminput form-select-lg" autocomplete="off" required="required">
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
                                                        <textarea class=" form input_contact" name="description" rows="4" cols="38" required="required" placeholder="Describe the job you're looking for"></textarea>
                                                        <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="genderjobs" >
                                                            <option value="">Gender</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "genderjobs", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
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
                                                <div class="row ">
                                                    <div class="col-lg-1"><div class="form-check"><h5>Language</h5></div></div>
                                                    <div class="col-lg-11"><div class="form-check"></div></div>
                                                    <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="English " id="a0" name="cars[]">
                                                        <label class="form-check-label" for="a0">
                                                        English
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Arabic " id="a1" name="cars[]">
                                                        <label class="form-check-label" for="a1">
                                                        Arabic
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Hindi " id="a2" name="cars[]">
                                                        <label class="form-check-label" for="a2">
                                                        Hindi
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Russian " id="a3" name="cars[]">
                                                        <label class="form-check-label" for="a3">
                                                        Russian
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="French " id="a4" name="cars[]">
                                                        <label class="form-check-label" for="a4">
                                                        French
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Italian " id="a5" name="cars[]">
                                                        <label class="form-check-label" for="a5">
                                                        Italian
                                                        </label></div>
                                                        </div>
                                                    </div>
                                                            <div class="form-check">
                                                                <span class="toggle-info pull-right" style="color: #175DE3; font-weight: 700; font-size: 18px;">
                                                                Sow All
                                                                </span>                                                         
                                                            </div> 
                                                                <div class="panel-body ppll">
                                                                    <div class="row">
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Bengali " id="b1" name="cars[]">
                                                                    <label class="form-check-label" for="b1">
                                                                    Bengali
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Chinese " id="b2" name="cars[]">
                                                                    <label class="form-check-label" for="b2">
                                                                    Chinese
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="German " id="b3" name="cars[]">
                                                                    <label class="form-check-label" for="b3">
                                                                    German
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Japanese " id="b4" name="cars[]">
                                                                    <label class="form-check-label" for="b4">
                                                                    Japanese
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Korean " id="b5" name="cars[]">
                                                                    <label class="form-check-label" for="b5">
                                                                    Korean
                                                                    </label></div>
                                                                    </div>

                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Portuguese " id="b6" name="cars[]">
                                                                    <label class="form-check-label" for="b6">
                                                                    Portuguese
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Spanish " id="b7" name="cars[]">
                                                                    <label class="form-check-label" for="b7">
                                                                    Spanish
                                                                    </label></div>
                                                                    </div>
                                                                    <div class="col-lg-6"><div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="Other " id="b8" name="cars[]">
                                                                    <label class="form-check-label" for="b8">
                                                                    Other
                                                                    </label></div>
                                                                    </div>
                                                                </div>
                                                                <!-- </div> -->
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
                                                    <div class="row ">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="employmenttype" required >
                                                            <option value="">Employment Type</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "employmenttype", "", "", "Id");
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
                                                <div class="row ">
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="remove" id="remove" name="carsone[]">
                                                        <label class="form-check-label" for="remove">
                                                        Remote Job
                                                            </label></div>
                                                        </div>
                                                    <!-- </div> -->
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                    <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="workexperiencejobs" required >
                                                            <option value="">Minimum Work Experience</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "workexperiencejobs", "", "", "Id");
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
                                                    <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="educationleveljobs" required >
                                                            <option value="">Minimum Education Level</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "educationleveljobs", "", "", "Id");
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
                                                <div class="col-lg-12"><h5>When users match these key skills, they will be on top of your applicants list</h5></div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="skillone" class="form-control forminput form-select-lg" autocomplete="off" placeholder="Skill 1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="skilltwo" class="form-control forminput form-select-lg" autocomplete="off" placeholder="Skill 2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="skilltree" class="form-control forminput form-select-lg" autocomplete="off" placeholder="Skill 3">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="skillfoor" class="form-control forminput form-select-lg" autocomplete="off" placeholder="Skill 4">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="cvrequierd" >
                                                            <option value="">CV required</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "cvrequierd", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="salaryexpectationjobs" required >
                                                            <option value="">Monthly Salary</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "salaryexpectationjobs", "", "", "Id");
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
                                                    <div class="row ">
                                                    <div class="col-lg-1"><div class="form-check"><h5>Benefits</h5></div></div>
                                                    <div class="col-lg-11"><div class="form-check"></div></div>
                                                    <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Health Insurance " id="aBenefits0" name="carstwo[]">
                                                        <label class="form-check-label" for="aBenefits0">
                                                        Health Insurance
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Company Visa " id="aBenefits1" name="carstwo[]">
                                                        <label class="form-check-label" for="aBenefits1">
                                                        Company Visa
                                                            </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Accommodation " id="aBenefits2" name="carstwo[]">
                                                        <label class="form-check-label" for="aBenefits2">
                                                        Accommodation
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Commission " id="aBenefits3" name="carstwo[]">
                                                        <label class="form-check-label" for="aBenefits3">
                                                        Commission
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="As per UAE law " id="aBenefits4" name="carstwo[]">
                                                        <label class="form-check-label" for="aBenefits4">
                                                        As per UAE law
                                                        </label></div>
                                                        </div>
                                                        <div class="col-lg-6"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Other " id="aBenefits5" name="carstwo[]">
                                                        <label class="form-check-label" for="aBenefits5">
                                                        Other
                                                        </label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                            <input id="name" type="text" name="companyname" class="form-control forminput form-select-lg" autocomplete="off" required="required" placeholder="Company Name">
                                                            <div class="invalid-feedback" style="text-align: initial;">
                                                            This field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row ">
                                                        <div class="col-lg-12"><div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="hide" id="hide" name="carshide[]">
                                                        <label class="form-check-label" for="hide">
                                                        Hide Company Name
                                                            </label></div>
                                                        </div>
                                                    <!-- </div> -->
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="companysize" >
                                                            <option value="">Company Size</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "companysize", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-2">
                                                        <select class="form-select forminput" aria-label="Default select example" name="listedbyhiring" >
                                                            <option value="">Listed By</option>
                                                            <?php
                                                                $allUsers = getAllFrom("*", "listedbyhiring", "", "", "Id");
                                                                foreach($allUsers as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                }
                                                            ?>
                                                        </select>
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
                                                <?php echo Safetyfirst(); ?>
                                            <input id="title" type="hidden" name="categoryy" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['categoryy'] ?>"   />  
                                            <?php
                                                                            $locationcars = $_POST['locationcars'];
                                                                            $getlocationcars = $con->prepare("SELECT * FROM locationcars WHERE Id = $locationcars");
                                                                            $getlocationcars->execute();
                                                                            $info = $getlocationcars->fetch();
                                                                            $namelocationcars = $info['Name'];
                                                                            ?>    
                                                                    <input id="title" type="hidden" name="locationcars" class="form-control form-select-lg" autocomplete="off" value="<?php echo $namelocationcars ?>" /> 
                                            <input id="title" type="hidden" name="typejobshiring" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['typejobshiring'] ?>"  />    
                                            <input id="title" type="hidden" name="name" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['name'] ?>" /> 
                                            <input id="title" type="hidden" name="description" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['description'] ?>" /> 
                                            <input id="title" type="hidden" name="genderjobs" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['genderjobs'] ?>" /> 
                                            <input id="title" type="hidden" name="nationality" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['nationality'] ?>" /> 
                                            <input id="title" type="hidden" name="careerleveljobs" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['careerleveljobs'] ?>" /> 
                                            <input id="title" type="hidden" name="employmenttype" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['employmenttype'] ?>" />
                                            <input id="title" type="hidden" name="workexperiencejobs" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['workexperiencejobs'] ?>" /> 
                                            <input id="title" type="hidden" name="educationleveljobs" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['educationleveljobs'] ?>" /> 
                                            <input id="title" type="hidden" name="skillone" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['skillone'] ?>" /> 
                                            <input id="title" type="hidden" name="skilltwo" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['skilltwo'] ?>" /> 
                                            <input id="title" type="hidden" name="skilltree" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['skilltree'] ?>" /> 
                                            <input id="title" type="hidden" name="skillfoor" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['skillfoor'] ?>" /> 
                                            <input id="title" type="hidden" name="cvrequierd" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['cvrequierd'] ?>" /> 
                                            <input id="title" type="hidden" name="salaryexpectationjobs" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['salaryexpectationjobs'] ?>" />
                                            <input id="title" type="hidden" name="companyname" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['companyname'] ?>" /> 
                                            <input id="title" type="hidden" name="companysize" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['companysize'] ?>" /> 
                                            <input id="title" type="hidden" name="listedbyhiring" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['listedbyhiring'] ?>" /> 
                                            <input id="title" type="hidden" name="location" class="form-control form-select-lg" autocomplete="off" value="<?php echo $_POST['location'] ?>" /> 
                                            <?php function myfunction($v1,$v2)
                                            {
                                                    return $v1 . "-" . $v2;
                                            }
                                                    if(empty($_POST['cars'])){
                                                        $cars1 = array('Null');
                                                        ?>
                                                        <input id="hidden" type="hidden" name="cars" class="form-control form-select-lg" autocomplete="off" value="<?php print_r(array_reduce($cars1,"myfunction")); ?>" />
                                                        <?php
                                                    }
                                                    else{
                                                        $cars = $_POST['cars'];
                                                        ?>
                                                        <input id="hidden" type="hidden" name="cars" class="form-control form-select-lg" autocomplete="off" value="<?php print_r(array_reduce($cars,"myfunction")); ?>" />
                                                        <?php
                                                    }

                                                    if(empty($_POST['carsone'])){
                                                        $carsonee = array('Null');
                                                        ?>
                                                        <input id="hidden" type="hidden" name="carsone" class="form-control form-select-lg" autocomplete="off" value="<?php print_r(array_reduce($carsonee,"myfunction")); ?>" />
                                                        <?php
                                                    }
                                                    else{
                                                        $carsone = $_POST['carsone'];
                                                        ?>
                                                        <input id="hidden" type="hidden" name="carsone" class="form-control form-select-lg" autocomplete="off" value="<?php print_r(array_reduce($carsone,"myfunction")); ?>" />
                                                        <?php
                                                    }

                                                    if(empty($_POST['carstwo'])){
                                                        $carstwoo = array('Null');
                                                        ?>
                                                        <input id="hidden" type="hidden" name="carstwo" class="form-control form-select-lg" autocomplete="off" value="<?php print_r(array_reduce($carstwoo,"myfunction")); ?>" />
                                                        <?php
                                                    }
                                                    else{
                                                        $carstwo = $_POST['carstwo'];
                                                        ?>
                                                        <input id="hidden" type="hidden" name="carstwo" class="form-control form-select-lg" autocomplete="off" value="<?php print_r(array_reduce($carstwo,"myfunction")); ?>" />
                                                        <?php
                                                    }

                                                    if(empty($_POST['carshide'])){
                                                        $carshidee = array('Null');
                                                        ?>
                                                        <input id="hidden" type="hidden" name="carshide" class="form-control form-select-lg" autocomplete="off" value="<?php print_r(array_reduce($carshidee,"myfunction")); ?>" />
                                                        <?php
                                                    }
                                                    else{
                                                        $carshide = $_POST['carshide'];
                                                        ?>
                                                        <input id="hidden" type="hidden" name="carshide" class="form-control form-select-lg" autocomplete="off" value="<?php print_r(array_reduce($carshide,"myfunction")); ?>" />
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
                    if($_SERVER['REQUEST_METHOD'] == 'POST')
                    {
                        $categoryy     = $_POST['categoryy'];
                        $locationcars   = $_POST['locationcars'];  
                        $typejobshiring     = $_POST['typejobshiring'];                              
                        $name       = $_POST['name'];
                        $desc      = $_POST['description'];   
                        $genderjobs   = $_POST['genderjobs'];
                        $nationality   = $_POST['nationality'];
                        $cars   = $_POST['cars'];
                        $careerleveljobs   = $_POST['careerleveljobs'];
                        $employmenttype   = $_POST['employmenttype'];
                        $carsone   = $_POST['carsone'];
                        $workexperiencejobs   = $_POST['workexperiencejobs'];
                        $educationleveljobs   = $_POST['educationleveljobs'];                
                        $skillone   = $_POST['skillone'];                
                        $skilltwo   = $_POST['skilltwo'];                
                        $skilltree   = $_POST['skilltree'];                
                        $skillfoor   = $_POST['skillfoor'];                
                        $cvrequierd   = $_POST['cvrequierd'];   
                        $salaryexpectationjobs   = $_POST['salaryexpectationjobs'];                             
                        $carstwo   = $_POST['carstwo'];                             
                        $companyname   = $_POST['companyname'];                             
                        $carshide   = $_POST['carshide'];                             
                        $companysize   = $_POST['companysize'];                             
                        $listedbyhiring   = $_POST['listedbyhiring'];
                        $location   = $_POST['location'];
                        
                                    $stmtitemadd = $con->prepare("INSERT INTO
                                    jobshiring(typejobshiring,categoryy,locatecars,Name,Description,genderjobs,nationality,extralanguage,careerleveljobs,employmenttype,extraremovejobs,workexperiencejobs,educationleveljobs,skillone,skilltwo,skilltree,skillfoor,cvrequierd,salaryexpectationjobs,extrabenefits,companyname,extrahidecompanyname,companysize,listedbyhiring,Location,date,user_Id,Approve)
                                VALUES(:ztypejobshiring,:zcategoryy,:zlocationcars,:zName,:zDescription,:zgenderjobs,:znationality,:zcars,:zcareerleveljobs,:zemploymenttype,:zcarsone,:zworkexperiencejobs,:zeducationleveljobs,:zskillone,:zskilltwo,:zskilltree,:zskillfoor,:zcvrequierd,:zsalaryexpectationjobs,:zcarstwo,:zcompanyname,:zcarshide,:zcompanysize,:zlistedbyhiring,:zLocation,now(),:zuser,1)");
                                    $stmtitemadd->execute(array( 
                                        'ztypejobshiring' => $typejobshiring,
                                        'zcategoryy'     => $categoryy,
                                        'zlocationcars'     => $locationcars,
                                        'zName'     => $name,
                                        'zDescription'     => $desc,
                                        'zgenderjobs'     => $genderjobs,
                                        'znationality'     => $nationality,
                                        'zcars'     => $cars,
                                        'zcareerleveljobs'     => $careerleveljobs,
                                        'zemploymenttype'     => $employmenttype,
                                        'zcarsone'     => $carsone,
                                        'zworkexperiencejobs'     => $workexperiencejobs,
                                        'zeducationleveljobs'     => $educationleveljobs,
                                        'zskillone'     => $skillone,
                                        'zskilltwo'     => $skilltwo,
                                        'zskilltree'     => $skilltree,
                                        'zskillfoor'     => $skillfoor,
                                        'zcvrequierd'     => $cvrequierd,
                                        'zsalaryexpectationjobs'     => $salaryexpectationjobs,
                                        'zcarstwo'     => $carstwo,
                                        'zcompanyname'     => $companyname,
                                        'zcarshide'     => $carshide,
                                        'zcompanysize'     => $companysize,
                                        'zlistedbyhiring'     => $listedbyhiring,
                                        'zLocation'     => $location,
                                        'zuser'     => $_SESSION['uid']
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