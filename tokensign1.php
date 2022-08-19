<?php
    session_start();
    // $pageTitle = 'Login';
    include 'php/config.php';
    // include 'init.php';
    // if($_SERVER['REQUEST_METHOD'] == 'POST')
    // {
        // if(isset($_GET['token']) && $_GET['token'] != ''){
        //         $stmt = $con->prepare('SELECT Email FROM users WHERE code = ?');
        //         $stmt->execute([$_GET['token']]);
        //         $email = $stmt->fetchColumn();
        //     if($email){
                ?>
                <?php include_once "headerr.php"; ?>
                <style>
                    #francesca-tosolini-tHkJAMcO3QE {
                        position: absolute;
                        /* width: 1920px; */
                        /* height: 1080px; */
                        left: 0px;
                        top: 0px;
                        overflow: visible;
                        border-radius: 1px;
                    }
                    .Rectangle_2 {
                        position: absolute;
                        overflow: visible;
                        /* width: 1920px; */
                        /* height: 1080px; */
                        left: 0px;
                        top: 0px;
                    }
                    #Rectangle_2 { fill: rgba(0,20,59,0.831);}
                    #Groupe_259 {
                        position: absolute;
                        width: 390px;
                        /* height: 642px; */
                        /* left: 1235px; */
                        top: 100px;
                        overflow: visible;
                        background-color: #fff;
                        border-radius: 5px;
                        /* top: 0px; */
                    }
                </style>
                <div class="wrapper container">
                        <img  class=" img-fluid img-fluid mySlides" id="francesca-tosolini-tHkJAMcO3QE" src="layout/images/francesca-tosolini-tHkJAMcO3QE.png">
                        <svg class="Rectangle_2">
                        <rect id="Rectangle_2" rx="0" ry="0" x="0" y="0" width="1920" height="1080">
                        </rect>
                        </svg>  
                    <div class="container login-page">
                        <section class="form signup" id="Groupe_259">
                            <header> <a href="signupp.php" style="font-size: 20px;color:black;"><i class="fas fa-arrow-left"></i></a> Code Verification</header>
                            <br>
                        <?php    echo '<div class="msg success">Enter the verification code in your email</div>'; ?>
                        <div class="the-errors text-center">
                        <?php
                            if(isset($successMsg1)){
                                echo '<div class="msg success">' . $successMsg1 . '</div>';
                            }
                        ?>
                        </div>
                        <form method="POST" action="tokensign1.php" >
                            <div class="field input">
                                <input type="number" name="otp" placeholder="Enter verification code" autocomplete="off" required>
                            </div>
                            <div class="field button">
                                <input type="submit" name="check" value="Submit" >
                            </div>
                        </form>
                        </section>
                    </div>
                </div>
                <?php
        //     }
        // }
// }
?>
<?php
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM users WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE users SET code = $code, statussignup = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                // $_SESSION['name'] = $name;
                // $_SESSION['email'] = $email;
                // header('location:index.php');
                // exit();
                header('Location:logouttoken.php');
                exit();
            }else{
                $successMsg1 = '<div class="alert alert-danger">Failed while updating code!</div>';
            }
        }else{$errors = "You've entered incorrect code!";
            $successMsg1 = '<div class="alert alert-danger">' . $errors . '</div>';
            
        }
    }
?>