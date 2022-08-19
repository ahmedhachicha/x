<?php 
    require_once 'php/config1.php';
?>

        <style>
          .forgot{text-decoration: none;}
          .field1 {
              display: flex;
              margin-bottom: 10px;
              flex-direction: column;
              position: relative;
              border: 1px solid #555555;
              border-radius: 6px;
          }
          .logingoogle{
            height: 35px;
            border: none;
            color: #555555;
            font-size: 19px;
            background: #FFFFFF;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            margin-bottom: 10px;
            text-align: center;
            padding-top: 2px;
            text-decoration: none;
            position: absolute;
            margin-top: -36px;
            margin-left: 65px;
          }
          .logingoogle:hover{color: #555555;}
          .imglogingoogle{
            width: 45px;
            height: 45px;
          }
        </style>

        <?php
        if (isset($_SESSION['uid'])) {
          header("Location:welcome.php");
        } else {
            echo '<div class="field1 button">';
              echo "<div><img src='layout/images/google.jpg' alt='Continue With Google' class='imglogingoogle'></div>";
              echo "<div><a href='" . $client->createAuthUrl() . "' class='logingoogle'>Login with Google</a></div>";
            echo '</div>';
          }
        
        ?>