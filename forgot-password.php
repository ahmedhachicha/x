<?php
    ob_start();
    session_start();
    $pageTitle = 'Forgot Password';
    include 'php/config.php';
?>
    <?php include_once "headerr.php"; ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
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

        <div class="wrapper">
            <div class="container login-page">
            <img  class=" img-fluid img-fluid mySlides" id="francesca-tosolini-tHkJAMcO3QE" src="layout/images/francesca-tosolini-tHkJAMcO3QE.png">
            <svg class="Rectangle_2">
            <rect id="Rectangle_2" rx="0" ry="0" x="0" y="0" width="1920" height="1080">
            </rect>
            </svg>   
                <section class="form signup" id="Groupe_259">
                    <header> <a href="login.php" style="font-size: 20px;color:black;"><i class="fas fa-arrow-left"></i></a> Forgot password</header>
                    <br>
                    <form method="POST">
                        <div class="field input">
                            <input type="email" name="email" placeholder="Type a Valid email" autocomplete="off" required/>
                        </div>
                        <div class="field button">
                            <input type="submit" name="forgot" value="Submit" >
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </body>
    </html>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // if(isset($_POST['email'])){
		
                $token = uniqid();
                $url = "https://ohyamal.com/token.php?token=$token";
                $message = "Here is your link for password reset : $url";
                // $message = "Here is your link for password reset  : $token";

                // $headers = 'From: developerouafa@gmail.com' ;
                $headers =  'From: webmaster@example.com'       . "\r\n" .
                 'Reply-To: webmaster@example.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

                $to_email = $_POST['email'];
                if(mail($to_email, 'Mot de pass oublié', $message, $headers)){
                    $sql = 'UPDATE users SET token = ? WHERE Email = ?';
                    $stmt = $con->prepare($sql);
                    $stmt->execute([$token, $_POST['email']]);
                    echo "<div class='alert alert-success'> Mail envoyé </div>";
                }
                else{
                    echo '<div class="alert alert-danger">Une erreur est survenue...</div>';
                }
        // }
    }


    ?>
    <!-- </div> -->
<?php
    // include $tpl . 'footer.php';
    ob_end_flush();
?>
