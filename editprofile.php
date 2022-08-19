<?php
ob_start();
session_start();
$pageTitle = 'Profile';
        include 'init.php';
        $do = isset($_GET['do']) ? $_GET['do'] : 'Edit';

        if(isset($_SESSION['uid'])){
          if($do  == 'Edit'){
            $getUser = $con->prepare("SELECT * FROM users WHERE Name = ?");
            $getUser->execute(array($sessionUser));
            $row = $getUser->fetch();
    
            $userid = $row['user_id'];
            $count = $getUser->rowCount();
            
              // $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
              // $stmtmembersidt = $con->prepare("SELECT * FROM users WHERE user_Id = ? LIMIT 1");
              // $stmtmembersidt->execute(array($userid));
              // $row = $stmtmembersidt->fetch();
              // $count = $stmtmembersidt->rowCount();

              if($count > 0){
              ?>

                  <style>
                      .row.content.rowmy { padding: 12px; margin-right: 200px;}
                      .divone {
                          border: 1px solid gray;
                          border-bottom: none;
                          padding: 5px;
                          font-size: 18px;
                          font-weight: 600;
                          color: #0093D5;
                          border-top-left-radius: 5px;
                          border-top-right-radius: 5px;
                          /* border-bottom-right-radius: 5px; */
                          /* border-bottom-left-radius: 5px; */
                          text-align: center;
                          margin-left: 5px;
                          margin-right: 5px;
                          margin-top: 5px;
                      }
                      .divtwo {
                          border: 1px solid gray;
                          border-bottom: none;
                          padding: 5px;
                          font-size: 18px;
                          font-weight: 600;
                          color: black;
                          background-color: #EEEEEE;
                          border-top-left-radius: 5px;
                          border-top-right-radius: 5px;
                          /* border-bottom-right-radius: 5px; */
                          /* border-bottom-left-radius: 5px; */
                          text-align: center;
                          margin-left: 5px;
                          margin-right: 5px;
                          margin-top: 5px;
                      }
                  </style>
                  <div class="d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
                      <div class="container"><br><br>
                          <div class="row g-5">
                                  <div class="col divone"> <a href="editprofile.php?do=Edit&userid=<?php echo $_SESSION['uid']?>" style="color: #0093D5;">My Profile</a> </div>
                                  <div class="col divtwo"> <a href="my.php" style="color: black;">My Ads</a> </div>
                                  <div class="col divtwo"> <a href="myfavorite.php" style="color: black;">My Favorites</a> </div>
                                  <div class="col divtwo"> <a href="mysearch.php" style="color: black;">My Searches</a> </div>
                                  <div class="col divtwo"> <a href="profile.php" style="color: black;">Change Avatar</a> </div>                          
                          </div>
                      </div>
                  </div>

                  <div class="d-none d-md-block d-lg-none">
                      <div class="container">
                          <div class="row rowmy">
                                  <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divone"> <a href="editprofile.php?do=Edit&userid=<?php echo $_SESSION['uid']?>" style="color: #0093D5;">My Profile</a> </div>
                                  <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="my.php" style="color: black;">My Ads</a> </div>
                                  <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="myfavorite.php" style="color: black;">My Favorites</a> </div>
                                  <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="mysearch.php" style="color: black;">My Searches</a> </div>
                                  <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="profile.php" style="color: black;">Change Avatar</a> </div>                            
                          </div>
                      </div>
                  </div>

                  <div class="d-block d-sm-none">
                      <div class="container">
                          <div class="row rowmy">
                              <div class="container">
                                  <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divone"> <a href="editprofile.php?do=Edit&userid=<?php echo $_SESSION['uid']?>" style="color: #0093D5;">My Profile</a> </div>
                                  <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="my.php" style="color: black;">My Ads</a> </div>
                                  <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="myfavorite.php" style="color: black;">My Favorites</a> </div>
                                  <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="mysearch.php" style="color: black;">My Searches</a> </div>
                                  <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 divtwo"> <a href="profile.php" style="color: black;">Change Avatar</a> </div>                            
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="create block">
                      <div class="container">
                          <div class="panel panel-primary">
                              <div class="panle-heading" style="height: 38px;">
                                  <ion-icon name="create-outline"></ion-icon><?php echo $pageTitle ?>                          
                                  <a style="float: right;" class="btn btn-dark"  href="php/logoutt.php">Logout</a>
                                  <a style="float: right;" class="btn btn-danger confirm" href="editprofile.php?do=Delete&userid=<?php echo $_SESSION['uid']?>">Delete My account</a>
                              </div>                                
                                  <h1 class="text-center h1-index">Edit My Profile</h1>
                                  <div class="panel-body">
                                      <div class="container">
                                      <div class="row">
                                          <div class="col-lg-12">
                                              <form class="form-horizontal" action="?do=Update" method="POST" enctype="multipart/form-data">
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
                                                  <input type="hidden" name="userid" value="<?php echo $userid ?>" />
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                        <div class="row">
                                                                <label for="username" class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">User Name :</label>
                                                                <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                                    <input value="<?php echo $row['Name'] ?>" id="username" type="text" name="username" class="forminput form-select-lg input-container" autocomplete="off" required="required" placeholder="Username To Login Into Shop">
                                                                </div>                             
                                                        </div>
                                                      </div>
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                        <div class="row">
                                                                <label for="last_name" class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Last Name :</label>
                                                                <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                                    <input value="<?php echo $row['last_name'] ?>" id="last_name" type="text" name="last_name" class="forminput form-select-lg input-container" autocomplete="off" required="required" placeholder="Username To Login Into Shop">
                                                                </div>                             
                                                        </div>
                                                      </div>
                                                      <div class="form-group form-group-lg form-password formmarginad"> 
                                                          <div class="row">
                                                            <label for="pass" class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Password :</label>
                                                            <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                                <input type="hidden" name="oldpassword" value="<?php echo $row['Password'] ?>" />
                                                                <input id="pass" type="password" name="newpassword" class="forminput form-select-lg" autocomplete="new-password" placeholder="Leave it blank if you don't want to change"/>
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                      <div class="row">
                                                          <label for="email" class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Email :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <input value="<?php echo $row['Email'] ?>" id="email" type="email" name="email" class="forminput form-select-lg" required="required" placeholder="Email Must Be Valid"/>
                                                          </div>
                                                          </div>
                                                      </div>
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                      <div class="row">
                                                          <label for="tel" class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Number Phone :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <input value="<?php echo $row['tel'] ?>" id="tel" type="tel" pattern="[0]{1}[5]{1}[0-9]{8}" name="tel" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Number Phone Appear In Your Profil Page"/>
                                                              <div class="invalid-feedback" style="text-align: initial;">
                                                              Valid phone number
                                                              </div>
                                                          </div>
                                                      </div>    
                                                      </div>    
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                      <div class="row">
                                                          <label for="fullname" class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Full Name :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <input value="<?php echo $row['FullName'] ?>" id="fullname" type="text" name="full" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Full Appear In Your Profil Page"/>
                                                          </div>
                                                      </div>    
                                                      </div>    
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                      <div class="row">
                                                          <label class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Gender:</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <select class="form-select forminput" aria-label="Default select example" name="genre">
                                                                  <option value="1" <?php if($row['genre'] == 1){ echo 'selected'; } ?>>F</option>
                                                                  <option value="2" <?php if($row['genre'] == 2){ echo 'selected'; } ?>>M</option>
                                                              </select>
                                                          </div>
                                                          </div>
                                                      </div>
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                      <div class="row">
                                                          <label for="birth" class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Birth :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <input value="<?php echo $row['birth'] ?>" id="birth" type="date" name="birth" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Full Appear In Your Profil Page"/>
                                                          </div>
                                                          </div>
                                                      </div>   
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                      <div class="row">
                                                          <label class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Nationality :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <select class="form-select forminput" aria-label="Default select example" name="nationality">
                                                                  <?php
                                                                  $stmt = $con->prepare("SELECT * FROM nationality");
                                                                  $stmt->execute();
                                                                  $users = $stmt->fetchAll();
                                                                  foreach($users as $user){
                                                                      // echo "<option value='2'>-------</option>";
                                                                      echo "<option value='" . $user['Name'] . "'";
                                                                      if($row['nationality'] == $user['Id']){ echo 'selected'; } 
                                                                      echo">" .$user['Name'] . "</option>";
                                                                  }
                                                              ?>
                                                              </select>
                                                          </div>
                                                          </div>
                                                      </div>  
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                      <div class="row">
                                                          <label class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Career Level :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <select class="form-select forminput" aria-label="Default select example" name="carrerlevel">
                                                                  <?php
                                                                  $stmt = $con->prepare("SELECT * FROM careerlevel");
                                                                  $stmt->execute();
                                                                  $users = $stmt->fetchAll();
                                                                  foreach($users as $user){
                                                                      echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                  }
                                                              ?>
                                                              </select>
                                                          </div>
                                                      </div>  
                                                      </div>  
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                      <div class="row">
                                                          <label class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Current Location :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <select class="form-select forminput" aria-label="Default select example" name="currentlocation">
                                                                  <?php
                                                                  $stmt = $con->prepare("SELECT * FROM currentlocation");
                                                                  $stmt->execute();
                                                                  $users = $stmt->fetchAll();
                                                                  foreach($users as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                  }
                                                              ?>
                                                              </select>
                                                          </div>
                                                      </div>  
                                                      </div>  
                                                      <div class="form-group form-group-lg formmarginad">
                                                      <div class="row">
                                                          <label class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Current Position :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <select class="form-select forminput" aria-label="Default select example" name="currentposition">
                                                                  <?php
                                                                  $stmt = $con->prepare("SELECT * FROM currentposition");
                                                                  $stmt->execute();
                                                                  $users = $stmt->fetchAll();
                                                                  foreach($users as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                  }
                                                              ?>
                                                              </select>
                                                          </div>
                                                          </div>
                                                      </div>  
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                      <div class="row">
                                                          <label for="currentcompany" class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Current Company :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <input value="<?php echo $row['currentcompany'] ?>" id="currentcompany" type="text" name="currentcompany" class="forminput form-select-lg" autocomplete="off" required="required" placeholder="Current Company"/>
                                                          </div>
                                                      </div>    
                                                      </div>    
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                      <div class="row">
                                                          <label class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Salary Expectations :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <select class="form-select forminput" aria-label="Default select example" name="salary">
                                                                  <?php
                                                                  $stmt = $con->prepare("SELECT * FROM salary");
                                                                  $stmt->execute();
                                                                  $users = $stmt->fetchAll();
                                                                  foreach($users as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                  }
                                                              ?>
                                                              </select>
                                                          </div>
                                                      </div>  
                                                      </div>  
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                      <div class="row">
                                                          <label class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Commitment :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <select class="form-select forminput" aria-label="Default select example" name="commitement">
                                                                  <?php
                                                                  $stmt = $con->prepare("SELECT * FROM commitment");
                                                                  $stmt->execute();
                                                                  $users = $stmt->fetchAll();
                                                                  foreach($users as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                  }
                                                              ?>
                                                              </select>
                                                          </div>
                                                          </div>
                                                      </div>  
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                      <div class="row">
                                                          <label class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Notice Period :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <select class="form-select forminput" aria-label="Default select example" name="noticeperiod">
                                                                  <?php
                                                                  $stmt = $con->prepare("SELECT * FROM noticeperiod");
                                                                  $stmt->execute();
                                                                  $users = $stmt->fetchAll();
                                                                  foreach($users as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                  }
                                                              ?>
                                                              </select>
                                                          </div>
                                                      </div>  
                                                      </div>  
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                      <div class="row">
                                                          <label class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">visa Status :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <select class="form-select forminput" aria-label="Default select example" name="visastatus">
                                                                  <?php
                                                                  $stmt = $con->prepare("SELECT * FROM visastatus");
                                                                  $stmt->execute();
                                                                  $users = $stmt->fetchAll();
                                                                  foreach($users as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                  }
                                                              ?>
                                                              </select>
                                                          </div>
                                                          </div>
                                                      </div>  
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                      <div class="row">
                                                          <label class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Highest Education :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <select class="form-select forminput" aria-label="Default select example" name="highesteducation">
                                                                  <?php
                                                                  $stmt = $con->prepare("SELECT * FROM highesteducation");
                                                                  $stmt->execute();
                                                                  $users = $stmt->fetchAll();
                                                                  foreach($users as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                  }
                                                              ?>
                                                              </select>
                                                          </div>
                                                      </div>  
                                                      </div>  
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                      <div class="row">
                                                          <label class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">I've got :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <select class="form-select forminput" aria-label="Default select example" name="ageuser">
                                                                  <?php
                                                                  $stmt = $con->prepare("SELECT * FROM ageuser");
                                                                  $stmt->execute();
                                                                  $users = $stmt->fetchAll();
                                                                  foreach($users as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                  }
                                                              ?>
                                                              </select>
                                                          </div>
                                                      </div>  
                                                      </div>  
                                                      <div class="form-group form-group-lg formmarginad"> 
                                                          <div class="row">
                                                          <label class="col-lg-3 col-md-5 col-sm-12 col-xs-2 control-label">Experience in :</label>
                                                          <div class="col-lg-9 col-md-5 col-sm-12 col-xs-2">
                                                              <select class="form-select forminput" aria-label="Default select example" name="experionce">
                                                                  <?php
                                                                  $stmt = $con->prepare("SELECT * FROM experionce");
                                                                  $stmt->execute();
                                                                  $users = $stmt->fetchAll();
                                                                  foreach($users as $user){
                                                                    echo "<option value='" . $user['Name'] . "'>" .$user['Name'] . "</option>";
                                                                  }
                                                              ?>
                                                              </select>
                                                          </div>
                                                          </div>
                                                      </div>           
                                                      
                                                      <div class="btn-formmember formmarginad"> 
                                                          <div class="col-sm-offset-2 col-sm-10">
                                                              <input type="submit" value="Update" class="btn btn-primary btn-lg"/>
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
                  </div>
              <?php
              } else{
                  echo '<div class="alert alert-danger">Theres No Such ID.</div>';
                  echo "<a href='profile.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Edit Profile page.</a>";
              }
          }
          elseif($do == 'Update'){
              echo "<h1 class='text-center h1-member'>Update User</h1>";
              echo "<div class='container'>";
              if($_SERVER['REQUEST_METHOD'] == 'POST')
              {
                  $id = $_POST['userid'];
                  $user = $_POST['username'];
                  $last_name = $_POST['last_name'];
                  $pass = empty($_POST['newpassword']) ? $_POST['oldpassword'] : sha1($_POST['newpassword']);
                  $email = $_POST['email'];
                  $tel  = $_POST['tel'];
                  $name = $_POST['full'];
                  $nationality = $_POST['nationality'];
                  $carrerlevel = $_POST['carrerlevel'];
                  $currentlocation = $_POST['currentlocation'];
                  $currentposition = $_POST['currentposition'];
                  $currentcompany = $_POST['currentcompany'];
                  $salary = $_POST['salary'];
                  $commitement = $_POST['commitement'];
                  $noticeperiod = $_POST['noticeperiod'];
                  $visastatus = $_POST['visastatus'];
                  $highesteducation = $_POST['highesteducation'];
                  $ageuser = $_POST['ageuser'];
                  $experionce = $_POST['experionce'];
                  $genre = $_POST['genre'];
                  $birth = $_POST['birth'];
                  // $hashPass = sha1($pass);

                              $stmt = $con->prepare("UPDATE users SET Name = ?, last_name = ?, Password = ?, Email = ?, tel = ?, FullName = ?, nationality = ?, careerlevel = ?, currentlocation = ?, currentposition = ?, currentcompany = ?, salary = ?, commitment = ?, noticeperiod = ?, visastatus = ?, highesteducation = ?, ageuser = ?, experionce = ?, genre = ?, birth = ? WHERE user_id = ?");
                              $stmt->execute(array($user, $last_name, $pass, $email, $tel, $name, $nationality, $carrerlevel, $currentlocation,$currentposition, $currentcompany, $salary, $commitement, $noticeperiod, $visastatus, $highesteducation, $ageuser, $experionce, $genre, $birth, $id));
                              header('Location:profile.php');
                              exit();
                  }
                  else{
                    header('Location:profile.php');
                    exit();
                  }
              echo "</div>";
          }
          elseif($do == 'Delete'){
              echo "<h1 class='text-center h1-member'>Delete User</h1>";
              echo "<div class='container'>";
              $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
              $check = checkItem('user_id', 'users', $userid);
              if($check > 0){
                  $stmtdelete = $con->prepare("DELETE FROM users WHERE user_id = :zuser");
                  $stmtdelete->bindParam(":zuser", $userid);
                  $stmtdelete->execute();

                  $stmtdelete1 = $con->prepare("DELETE FROM products WHERE user_Id = :zuser");
                  $stmtdelete1->bindParam(":zuser", $userid);
                  $stmtdelete1->execute();

                  $stmtdelete2 = $con->prepare("DELETE FROM autoaccparts WHERE user_Id = :zuser");
                  $stmtdelete2->bindParam(":zuser", $userid);
                  $stmtdelete2->execute();

                  $stmtdelete3 = $con->prepare("DELETE FROM heavyvzhicles WHERE user_Id = :zuser");
                  $stmtdelete3->bindParam(":zuser", $userid);
                  $stmtdelete3->execute();

                  $stmtdelete4 = $con->prepare("DELETE FROM motorcycles WHERE user_Id = :zuser");
                  $stmtdelete4->bindParam(":zuser", $userid);
                  $stmtdelete4->execute();

                  $stmtdelete = $con->prepare("DELETE FROM boats WHERE user_Id = :zuser");
                  $stmtdelete->bindParam(":zuser", $userid);
                  $stmtdelete->execute();

                  $stmtdelete = $con->prepare("DELETE FROM forsale WHERE user_Id = :zuser");
                  $stmtdelete->bindParam(":zuser", $userid);
                  $stmtdelete->execute();

                  $stmtdelete = $con->prepare("DELETE FROM community WHERE user_Id = :zuser");
                  $stmtdelete->bindParam(":zuser", $userid);
                  $stmtdelete->execute();

                  $stmtdelete = $con->prepare("DELETE FROM classifieds WHERE user_Id = :zuser");
                  $stmtdelete->bindParam(":zuser", $userid);
                  $stmtdelete->execute();

                  $stmtdelete = $con->prepare("DELETE FROM numberplates WHERE user_Id = :zuser");
                  $stmtdelete->bindParam(":zuser", $userid);
                  $stmtdelete->execute();

                  header('Location:logout.php');
                  exit();
                  // echo "<div class='alert alert-success'>" . $stmtdelete->rowCount() . ' Record Deleted </div>';
                  // echo "<a href='members.php' class='btn btn-secondary'><ion-icon name='return-up-back-outline'></ion-icon> Return to Page User. </a>";
              }  else {
                  echo '<div class="alert alert-danger">This ID is Not Exist.</div>';
                  echo "<a href='members.php' class='btn btn-dark'><ion-icon name='return-up-back-outline'></ion-icon> Return to Page User. </a>";
              }
              echo '</div>';
          }
        }
        else  {
        header('Location:login.php');
        exit();
                }
    include 'includes/templates/footer.php';  
    ?>
    <style>
      .backfooter{background: url('layout/images/photoholgic-fn6x1TL290w-unspla.png');
        /* margin-left: -150px;margin-right: -117px; */
      }
      .backfooter1{background: url('layout/images/photoholgic-fn6x1TL290w-unspla.png');
        /* margin-left: -150px;margin-right: -92px; */
      }
      .backfooter2{background: url('layout/images/photoholgic-fn6x1TL290w-unspla.png');
        /* margin-left: -12px;margin-right: -10px; */
      }
      .site-footer{background: linear-gradient(to right, rgba(3,63,129,0.91), rgba(3,63,129,0.91));
      /* margin-left: -150px;margin-right: -117px; */
      }
      input.formsubscr {
        text-align: center;
        border: 2px solid #175DE3;
        border-radius: 3px;
        /* background-color: #fff; */
        color: #282435;
        padding: 5px;
          margin-bottom: 5px;}
          /* .backfooter{background-image: url('layout/images/photoholgic-fn6x1TL290w-unspla.png');} */
    </style>
    
    <div class="d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block backfooter">
      <footer class="site-footer">
            <div class="container">
              <div class="row content">
                <div class="col-lg-4 col-md-6 col-xs-6">
                  <ul class="footer-links">
                    <style>
                      #logo_1_icon1 {
                          width: 76px;
                          height: 75px;
                        }
                        #Rectangle_74 { fill: rgba(251,201,0,1);}
                        .Rectangle_74 {
                            overflow: visible;
                            width: 52px;
                            height: 5px;
                            left: 0px;
                            top: 5px;
                        }
                    </style>
                    <li><a href="index.php" class="afott"><img id="logo_1_icon1" src="layout/images/logo_1_icon1.png" alt=""></a></li>
                    <li>
                    <div id="We_are_recognized_for_exceedin">
                      <span class="textfoot">We are recognized for exceeding client expectations and delivering great results through dedication, ease of process, and extraordinary services to our worldwide clients.</span>
                    </div>
                    </li>
                    <div class="row">
                    <ul class="social-icons">
                        <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo twitter(); ?>"><ion-icon name="logo-twitter"></ion-icon></a></div></li>
                        <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo facebook(); ?>"><ion-icon name="logo-facebook"></ion-icon></a></div></li>
                        <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo instagram(); ?>"><ion-icon name="logo-instagram"></ion-icon></a></div></li>
                        <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo linkedin(); ?>"><ion-icon name="logo-linkedin"></ion-icon></a></div></li>
                        <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo whatsapp(); ?>"><ion-icon name="logo-whatsapp"></ion-icon></a></div></li>
                      </ul>
                    </div>
    
                  </ul>
                </div>
    
                <div class="col-lg-2 col-md-3 col-xs-6">
                  <h5 class="hsinqftr">Quick Links</h5>
                  <svg class="Rectangle_74">
                    <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                    </rect>
                  </svg>
                  <ul class="footer-links">
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo home(); ?>">Home</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo about(); ?>">About</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo features(); ?>">Features</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo pricing(); ?>">Pricing</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo faqs(); ?>">Faqs</a></li>
                  </ul>
                </div>
    
                <div class="col-lg-2 col-md-3 col-xs-6">
                  <h5 class="hsinqftr">Popular Searches</h5>
                  <svg class="Rectangle_74">
                    <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                    </rect>
                  </svg>
                  <ul class="footer-links">
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmotors(); ?>">Motors</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo forrentlink(); ?>">Property For Rent</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allforsale(); ?>">Property For Sale</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmob(); ?>">Mobiles & Tablets</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo homeapplink(); ?>">Home Appliances</a></li>
                  </ul>
                </div>
    
                <div class="col-lg-2 col-md-6 col-xs-6">
                  <h5 class="hsinqftr">Support</h5>
                    <svg class="Rectangle_74">
                      <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                      </rect>
                    </svg>
                    <ul class="footer-links">
                      <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo help(); ?>">Help</a></li>
                      <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo contact(); ?>">Contact Us</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-6 col-xs-6">
                  <h5 class="hsinqftr">Subscribe</h5>
                  <svg class="Rectangle_74">
                    <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                    </rect>
                  </svg>
                  <div class="row content">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class=" g-3 form_submail">
                        <div class="col-lg-12 col-xs-6 col-md-3">
                          <div class="inputnamelast">
                            <ion-icon name="person-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                            <input type="text" class="formsubscr" placeholder="first name, last name *" name="name" required="required">
                          </div>
                        </div>
                        <div class="col-lg-12 col-xs-6 col-md-3">
                            <ion-icon name="mail-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                            <input type="email" class="formsubscr" placeholder="your email address *" name="email" required="required">
                        </div>
                        <div class="col-lg-12 col-xs-6 col-md-3">
                            <input type="submit" class="btn confirmsubscribe" value="SUBSCRIBE" name="subsc" style="margin-top: 5px;width:232px;    font-size: 18px;background-color:#175DE3;">
                        </div>             
                    </form>  
                    <div class="the-errors text-center">
                      <?php
                                  if(isset($successMsg1)){
                                      echo '<div class="msg success">' . $successMsg1 . '</div>';
                                  }
                      ?>
                    </div>
                    <?php
                              if(isset($_SESSION['uid'])){
                                if(isset($_POST['subsc']))
                                {
                                    $email = $_POST['email'];
                                    $name = $_POST['name'];
                                            $check = checkItem("Email", "subscribe", $email);
                                            if($check == 1)
                                            {
                                                $successMsg1 = 
                                                '<div class="alert alert-danger">This Subscribe Is Exist.</div>';
                                            }
                                            else{
                                                $stmtadd = $con->prepare("INSERT INTO
                                                                        subscribe(Name, Email, date)
                                                                        VALUES(:zname, :zemail, now())");
                                                $stmtadd->execute(array(
                                                    'zname' => $_SESSION['email'],
                                                    'zemail' => $email
                                                ));
                                                $subject = "Thanks for Subscribing us - Rak4us";
                                                $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
                                                $sender = "From: rak4us";
                                                if(mail($email, $subject, $message, $sender)){
                                                    ?>
                                                      <?php
                                                            $successMsg1 = "<div class='alert alert-success'>Thanks for Subscribing us.</div>" ;
                                                      ?>
                                                    <?php
                                                    $email = "";
                                                  }else{
                                                    ?>
                                                    <?php $successMsg1 = "<div class='alert alert-danger'>Failed while sending your mail!</div>" ?>
                                                    <?php
                                                  }
                                            }
                                }
                              }
                                ?>
                  </div>
                </div>
              <hr class="footer_hr">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-sm-6 col-xs-12">
                  <p class="copyright-text" style="text-align: center;color: #fff;font-size: 20px;">&copy; <?php echo date("Y"); ?> Company, Inc. All Rights Reserved.</p>
                </div>
              </div>
            </div>
      </footer>          
    </div>
    
    <div class="d-block d-sm-none backfooter2">
      <footer class="site-footer">
            <div class="container">
              <div class="row content">
                <div class="col-lg-4 col-md-6 col-xs-6">
                  <ul class="footer-links">
                    <style>
                      #logo_1_icon1 {
                          width: 76px;
                          height: 75px;
                        }
                        #Rectangle_74 { fill: rgba(251,201,0,1);}
                        .Rectangle_74 {
                            overflow: visible;
                            width: 52px;
                            height: 5px;
                            left: 0px;
                            top: 5px;
                        }
                    </style>
                    <li><a href="index.php" class="afott"><img id="logo_1_icon1" src="layout/images/logo_1_icon1.png" alt=""></a></li>
                    <li>
                    <div id="We_are_recognized_for_exceedin">
                      <span class="textfoot">We are recognized for exceeding client expectations and delivering great results through dedication, ease of process, and extraordinary services to our worldwide clients.</span>
                    </div>
                    </li>
                    <br>
                    <div class="row">
                    <ul class="social-icons">
                        <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo twitter(); ?>"><ion-icon name="logo-twitter"></ion-icon></a></div></li>
                        <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo facebook(); ?>"><ion-icon name="logo-facebook"></ion-icon></a></div></li>
                        <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo instagram(); ?>"><ion-icon name="logo-instagram"></ion-icon></a></div></li>
                        <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo linkedin(); ?>"><ion-icon name="logo-linkedin"></ion-icon></a></div></li>
                        <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo whatsapp(); ?>"><ion-icon name="logo-whatsapp"></ion-icon></a></div></li>
                      </ul>
                    </div>
    
                  </ul>
                </div>
    
                <div class="col-lg-2 col-md-3 col-xs-6" style="text-align: center;">
                  <h5 class="hsinqftr">Quick Links</h5>
                  <svg class="Rectangle_74">
                    <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                    </rect>
                  </svg>
                  <ul class="footer-links">
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo home(); ?>">Home</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo about(); ?>">About</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo features(); ?>">Features</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo pricing(); ?>">Pricing</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo faqs(); ?>">Faqs</a></li>
                  </ul>
                </div>
    
                <div class="col-lg-2 col-md-3 col-xs-6" style="text-align: center;">
                  <h5 class="hsinqftr">Popular Searches</h5>
                  <svg class="Rectangle_74">
                    <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                    </rect>
                  </svg>
                  <ul class="footer-links">
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmotors(); ?>">Motors</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo forrentlink(); ?>">Property For Rent</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allforsale(); ?>">Property For Sale</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmob(); ?>">Mobiles & Tablets</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo homeapplink(); ?>">Home Appliances</a></li>
                  </ul>
                </div>
    
                <div class="col-lg-2 col-md-6 col-xs-6" style="text-align: center;">
                  <h5 class="hsinqftr">Support</h5>
                    <svg class="Rectangle_74">
                      <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                      </rect>
                    </svg>
                    <ul class="footer-links">
                      <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo help(); ?>">Help</a></li>
                      <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo contact(); ?>">Contact Us</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-6 col-xs-6" style="text-align: center;">
                  <h5 class="hsinqftr">Subscribe</h5>
                  <svg class="Rectangle_74">
                    <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                    </rect>
                  </svg>
                  <div class="row content">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class=" g-3 form_submail">
                        <div class="col-lg-12 col-xs-6 col-md-3">
                            <ion-icon name="person-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                            <input type="text" class="formsubscr" placeholder="first name, last name *" name="name" required="required">
                        </div>
                        <div class="col-lg-12 col-xs-6 col-md-3">
                            <ion-icon name="mail-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                            <input type="email" class="formsubscr" placeholder="your email address *" name="email" required="required">
                        </div>
                        <div class="col-lg-12 col-xs-6 col-md-3">
                            <input type="submit" class="btn confirmsubscribe" value="SUBSCRIBE" name="subsc" style="margin-top: 5px;width:232px;    font-size: 18px;background-color:#175DE3;">
                        </div>             
                    </form>  
                    <div class="the-errors text-center">
                      <?php
                                  if(isset($successMsg1)){
                                      echo '<div class="msg success">' . $successMsg1 . '</div>';
                                  }
                      ?>
                    </div>
                    <?php
                              if(isset($_SESSION['uid'])){
                                if(isset($_POST['subsc']))
                                {
                                    $email = $_POST['email'];
                                    $name = $_POST['name'];
                                            $check = checkItem("Email", "subscribe", $email);
                                            if($check == 1)
                                            {
                                                $successMsg1 = 
                                                '<div class="alert alert-danger">This Subscribe Is Exist.</div>';
                                            }
                                            else{
                                                $stmtadd = $con->prepare("INSERT INTO
                                                                        subscribe(Name, Email, date)
                                                                        VALUES(:zname, :zemail, now())");
                                                $stmtadd->execute(array(
                                                    'zname' => $_SESSION['email'],
                                                    'zemail' => $email
                                                ));
                                                $subject = "Thanks for Subscribing us - Rak4us";
                                                $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
                                                $sender = "From: rak4us";
                                                if(mail($email, $subject, $message, $sender)){
                                                    ?>
                                                      <?php
                                                            $successMsg1 = "<div class='alert alert-success'>Thanks for Subscribing us.</div>" ;
                                                      ?>
                                                    <?php
                                                    $email = "";
                                                  }else{
                                                    ?>
                                                    <?php $successMsg1 = "<div class='alert alert-danger'>Failed while sending your mail!</div>" ?>
                                                    <?php
                                                  }
                                            }
                                }
                              }  
                                ?>
                  </div>
                </div>
              <hr class="footer_hr">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-sm-6 col-xs-12">
                  <p class="copyright-text" style="text-align: center;color: #fff;font-size: 20px;">&copy; <?php echo date("Y"); ?> Company, Inc. All Rights Reserved.</p>
                </div>
              </div>
            </div>
      </footer>          
    </div>
    
    <div class="d-none d-md-block d-lg-none backfooter1">
      <footer class="site-footer">
            <div class="container">
              <div class="row content">
                <div class="col-lg-4 col-md-6 col-xs-6">
                  <ul class="footer-links">
                    <style>
                      #logo_1_icon1 {
                          width: 76px;
                          height: 75px;
                        }
                        #Rectangle_74 { fill: rgba(251,201,0,1);}
                        .Rectangle_74 {
                            overflow: visible;
                            width: 52px;
                            height: 5px;
                            left: 0px;
                            top: 5px;
                        }
                    </style>
                    <li><a href="index.php" class="afott"><img id="logo_1_icon1" src="layout/images/logo_1_icon1.png" alt=""></a></li>
                    <li>
                    <div id="We_are_recognized_for_exceedin">
                      <span class="textfoot">We are recognized for exceeding client expectations and delivering great results through dedication, ease of process, and extraordinary services to our worldwide clients.</span>
                    </div>
                    </li>
                    <br>
                    <div class="row">
                    <ul class="social-icons">
                        <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo twitter(); ?>"><ion-icon name="logo-twitter"></ion-icon></a></div></li>
                        <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo facebook(); ?>"><ion-icon name="logo-facebook"></ion-icon></a></div></li>
                        <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo instagram(); ?>"><ion-icon name="logo-instagram"></ion-icon></a></div></li>
                        <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott"href="<?php echo linkedin(); ?>"><ion-icon name="logo-linkedin"></ion-icon></a></div></li>
                        <li><div class="col-lg-2 col-md-3 col-sm-6 col-xs-12"><a class="afott" href="<?php echo whatsapp(); ?>"><ion-icon name="logo-whatsapp"></ion-icon></a></div></li>
                      </ul>
                    </div>
    
                  </ul>
                </div>
    
                <div class="col-lg-2 col-md-3 col-xs-6">
                  <h5 class="hsinqftr">Quick Links</h5>
                  <svg class="Rectangle_74">
                    <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                    </rect>
                  </svg>
                  <ul class="footer-links">
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo home(); ?>">Home</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo about(); ?>">About</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo features(); ?>">Features</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo pricing(); ?>">Pricing</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo faqs(); ?>">Faqs</a></li>
                  </ul>
                </div>
    
                <div class="col-lg-2 col-md-3 col-xs-6">
                  <h5 class="hsinqftr">Popular Searches</h5>
                  <svg class="Rectangle_74">
                    <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                    </rect>
                  </svg>
                  <ul class="footer-links">
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmotors(); ?>">Motors</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo forrentlink(); ?>">Property For Rent</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allforsale(); ?>">Property For Sale</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo allmob(); ?>">Mobiles & Tablets</a></li>
                    <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo homeapplink(); ?>">Home Appliances</a></li>
                  </ul>
                </div>
    
                <div class="col-lg-2 col-md-6 col-xs-6">
                  <h5 class="hsinqftr">Support</h5>
                    <svg class="Rectangle_74">
                      <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                      </rect>
                    </svg>
                    <ul class="footer-links">
                      <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo help(); ?>">Help</a></li>
                      <li style="margin-bottom: 10px;"><a class="afott" href="<?php echo contact(); ?>">Contact Us</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-6 col-xs-6">
                  <h5 class="hsinqftr">Subscribe</h5>
                  <svg class="Rectangle_74">
                    <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="52" height="5">
                    </rect>
                  </svg>
                  <div class="row content">
    
    
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class=" g-3 form_submail">
                        <div class="col-lg-12 col-xs-6 col-md-3">
                            <ion-icon name="person-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                            <input type="text" class="formsubscr" placeholder="first name, last name *" name="name" required="required">
                        </div>
                        <div class="col-lg-12 col-xs-6 col-md-3">                      
                            <ion-icon name="mail-outline" style="position: absolute; margin-top: 12px; margin-left: 5px; color: #4E4E54;"></ion-icon>
                            <input type="email" class="formsubscr" placeholder="your email address *" name="email" required="required">
                        </div>
                        <div class="col-lg-12 col-xs-6 col-md-3">
    
                            <input type="submit" class="btn confirmsubscribe" value="SUBSCRIBE" name="subsc1" style="margin-top: 5px;width:232px;    font-size: 18px;background-color:#175DE3;">
                        </div>             
                    </form>  
                    <div class="the-errors text-center">
                      <?php
                                  if(isset($successMsg1)){
                                      echo '<div class="msg success">' . $successMsg1 . '</div>';
                                  }
                      ?>
                    </div>
                    <?php
                              if(isset($_SESSION['uid'])){
                                if(isset($_POST['subsc1']))
                                {
                                    $email = $_POST['email'];
                                    $name = $_POST['name'];
                                            $check = checkItem("Email", "subscribe", $email);
                                            if($check == 1)
                                            {
                                                $successMsg1 = 
                                                '<div class="alert alert-danger">This Subscribe Is Exist.</div>';
                                            }
                                            else{
                                                $stmtadd = $con->prepare("INSERT INTO
                                                                        subscribe(Name, Email, date)
                                                                        VALUES(:zname, :zemail, now())");
                                                $stmtadd->execute(array(
                                                    'zname' => $_SESSION['email'],
                                                    'zemail' => $email
                                                ));
                                                $subject = "Thanks for Subscribing us - Rak4us";
                                                $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
                                                $sender = "From: rak4us";
                                                if(mail($email, $subject, $message, $sender)){
                                                    ?>
                                                      <?php
                                                            $successMsg1 = "<div class='alert alert-success'>Thanks for Subscribing us.</div>" ;
                                                      ?>
                                                    <?php
                                                    $email = "";
                                                  }else{
                                                    ?>
                                                    <?php $successMsg1 = "<div class='alert alert-danger'>Failed while sending your mail!</div>" ?>
                                                    <?php
                                                  }
                                            }
                                }
                              }  
                                ?>
                  </div>
                </div>
              <hr class="footer_hr">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-sm-6 col-xs-12">
                  <p class="copyright-text" style="text-align: center;color: #fff;font-size: 20px;">&copy; <?php echo date("Y"); ?> Company, Inc. All Rights Reserved.</p>
                </div>
              </div>
            </div>
      </footer>          
    </div>
    
    <?php 
    ob_end_flush();
    ?>