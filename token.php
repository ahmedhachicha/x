<?php
    session_start();
    // $pageTitle = 'Login';
    $Navbar = '';
    include 'init.php';
    
    // if($_SERVER['REQUEST_METHOD'] == 'POST')
    // {
        
        ?><link rel="shortcut icon " href="layout/images/Logo.jpg" type="image/x-icon" />
        <link rel="stylesheet" href="php/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/><?php
        if(isset($_GET['token']) && $_GET['token'] != ''){
                $stmt = $con->prepare('SELECT Email FROM users WHERE token = ?');
                $stmt->execute([$_GET['token']]);
                $email = $stmt->fetchColumn();
            if($email){
                ?>
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
                        <section class="form signup" id="Groupe_259">
                                <header> <a href="login.php" style="font-size: 20px;color:black;"><i class="fas fa-arrow-left"></i></a> New Password</header>
                                <br>
                            <form method="POST">
                                <div class="field input">
                                    <input class="form-control" type="password" name="newPassword" placeholder="Type a new password" autocomplete="off" required/>
                                </div>
                                <div class="field button">
                                    <input type="submit" name="confirmer" value="Submit" >
                                </div>
                            </form>
                        </section>
                    </div>

                <?php
            }
        }
// }
?>
<?php
    if(isset($_POST['newPassword'])){
        $hashedPassword = sha1($_POST['newPassword']);
        $sql = "UPDATE users SET password = ?, token = NULL WHERE Email = ?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$hashedPassword, $email]);
        // echo "Password Update with success";
        header('Location:loginn.php');
        exit();
    }
?>