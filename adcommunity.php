<?php 
error_reporting(0);
ob_start();
session_start();
$pageTitle="New Community ";
    if(isset($_SESSION['user']))
    {
        include 'init.php';
        
        $do = isset($_GET['do']) ? $_GET['do'] : 'Add';
        if($do == 'Add'){
            ?>
                <div class="create block">
                    <div class="container">
                        <div class="panel panel-primary">
                            <div class="panle-heading">
                                <ion-icon name="add-outline"></ion-icon><?php echo $pageTitle ?></div>
                            <div class="panel-body">
                                <div class="container">
                                <div class="row">
                                    <div class="row1 col-lg-6">
                                        <form class="form-horizontal" action="?do=Insert" method="POST" enctype="multipart/form-data">
                                            <div class="form-group form-group-lg formmarginad"> 
                                                <div class="row ">
                                                 <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Catgory :</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="category">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "categories", "", "", "Id");
                                                            foreach($allUsers as $user){
                                                                echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Type Community:</label>
                                                <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                    <select class="form-select forminput" aria-label="Default select example" name="community">
                                                        <option  value="0" selected>Open this select menu</option>
                                                        <?php
                                                            $allUsers = getAllFrom("*", "typecommunity", "", "", "Id");
                                                            foreach($allUsers as $user){
                                                                echo "<option value='" . $user['Id'] . "'>" .$user['Name'] . "</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="name" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Name :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="name" type="text" name="name" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Name Of The Community">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="phone" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">phone :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="phone" type="text" name="phone" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="phone Of The Community">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="Location" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Location :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Location" type="text" name="Location" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Location Of The Community">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg formmarginad"> 
                                            <div class="row">
                                                <label for="Description" class="col-lg-6 col-md-8 col-sm-12 col-xs-2 control-label">Description :</label>
                                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-2">
                                                        <input id="Description" type="text" name="Description" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Description Of The Community">
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="form-group form-group-lg"> 
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <input type="submit" value=" Add " class=" btn-primary btn-lg" />
                                                </div>
                                            </div>
                                        </form>
                                        <div class="the-errors text-center">
                                        <?php
                                                    if(isset($successMsg1)){
                                                        echo '<div class="msg success">' . $successMsg1 . '</div>';
                                                    }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
        elseif($do == 'Insert'){
            echo "<h1 class='text-center h1-member'>Insert Community</h1>";
            echo "<div class='container'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $category     = $_POST['category'];
                $name       = $_POST['name'];
                $phone       = $_POST['phone'];
                $desc      = $_POST['Description'];   
                $community     = $_POST['community'];
                $location   = $_POST['Location'];

                $formErrors = array();
                    if(empty($name)){
                        $formErrors[] = 'Name  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($location)){
                        $formErrors[] = 'Location  Can\'t be<strong>Empty.</strong>';
                    }
                    if(empty($phone)){
                        $formErrors[] = 'Phone  Can\'t be<strong>Empty.</strong>';
                    }
                    if($category == 0)
                    {
                        $formErrors[] = 'Category Cant\'t be <strong>Empty.</strong>';
                    }
                    if($community == 0)
                    {
                        $formErrors[] = 'Type Community Cant\'t be <strong>Empty.</strong>';
                    }
                    if(empty($desc)){
                        $formErrors[] = 'Description  Can\'t be<strong>Empty.</strong>';
                    }
                    foreach($formErrors as $error){
                        echo '<div class="alert alert-danger">' . $error . '</div>';
                    }
                    if(empty($formErrors))
                    {
                        $check = checkItem("Id", "community", $name);
                        if($check == 1)
                        {
                            echo '<div class="alert alert-danger">Sorry This Community Is Exist.</div>';
                            echo "<a href='adcommunity.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Community page.</a>";
                        }
                        else{
                            $stmtitemadd = $con->prepare("INSERT INTO
                                                    community(Name, categories, date, user_Id, phone, typecommunity, description, location, Approve)
                                                    VALUES(:zname, :zcategory, now(), :zuser, :zphone, :zcommunity, :zdescription, :zlocation ,1)");
                            $stmtitemadd->execute(array(
                                    'zname'     => $name,
                                    'zcategory' => $category,
                                    'zuser'     => $_SESSION['uid'],   
                                    'zphone'    => $phone,                                                                     
                                    'zcommunity'=> $community,
                                    'zdescription'=>    $desc,
                                    'zlocation'=>    $location
                                    
                            ));
                            echo "<div class='alert alert-success'>" . $stmtitemadd->rowCount() . ' Record Inserted.</div>';
                            echo "<a href='adcommunity.php?do=Add' class='btn btn-secondary'><ion-icon name='return-up-back-outline'></ion-icon> Return to Add Community page.</a>";
                        }
                    }
            }
            else{
                echo '<div class="alert alert-danger">Sorry You Cant Browse This Page Directly.</div>';
                echo "<a href='adcommunity.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Community page.</a>";
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