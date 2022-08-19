<?php 
    ob_start();
    session_start();
    $pageTitle = 'Subscribre';
    include 'init.php';
?>

<?php 
    // include 'init.php';

    if(isset($_SESSION['uid']))
    {
            echo "<h1 class='text-center h1-member'></h1>";
            echo "<div class='container'>";
            if(isset($_POST['subsc']))
            {
                $email = $_POST['email'];
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
                            // echo "<div class='alert alert-success'>" .  ' Thank you for subscriber </div>';
                            // echo "<a href='index.php' class='btn btn-secondary'><ion-icon name='return-up-back-outline'></ion-icon>  Return.</a>";
            }
            echo "</div>";
    }

else{
    header('Location:login.php');
    exit();
}    
?>
<!-- <br/> -->


         
      <div class="container">
        <div class="row content">
          <div class="col-lg-12 col-xs-6 col-md-3">
            <h5>Subscribe to our newsletter</h5>
            <div>Monthly digest of whats new and exciting from us.</div> 
            <div class="row content">
              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class=" g-3 form_submail">
                  <div class="col-md-12 col-xs-6 col-md-3">
                      <input type="email" class="formm" placeholder="Email address" name="email" required="required">
                  </div>
                  <div class="col-md-12 col-xs-6 col-md-3">
                      <button class="btn btn-primary" type="submit" style="margin-top: 5px;" name="subsc">Subscribe</button>
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
        <hr class="footer_hr">
      </div>

      <?php 
    include $tpl . 'footer.php';
?>