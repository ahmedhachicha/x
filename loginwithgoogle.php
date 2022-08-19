<?php 
    $do = isset($_GET['do']) ? $_GET['do'] : 'loginwithgoogle';

    if($do == 'loginwithgoogle')
    {
        session_start();
        include_once "php/config1.php";
        $user_token = mysqli_real_escape_string($con, $_POST['user_token']);
        $user = mysqli_real_escape_string($con, $_POST['user']);
        $uid = mysqli_real_escape_string($con, $_POST['uid']);
        $unique_id = mysqli_real_escape_string($con, $_POST['unique_id']);
        $lastname = mysqli_real_escape_string($con, $_POST['firstname']);
        $email = mysqli_real_escape_string($con, $_POST['lastname']);
        // $img = mysqli_real_escape_string($con, $_POST['img']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
        if(!empty($email)){
            $sql = mysqli_query($con, "SELECT * FROM users WHERE Email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
                    $status = "Active now";
                    $sql2 = mysqli_query($con, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']} AND GroupId = 2 AND RegStatus = 1");
                    if($sql2){
                        $_SESSION['user_token'] = $row['token'];
                        $_SESSION['user'] = $row['Name'];
                        $_SESSION['uid'] = $row['user_id'];
                        $_SESSION['unique_id'] = $row['unique_id']; 
                        $_SESSION['firstname'] = $row['first_name']; 
                        $_SESSION['lastname'] = $row['last_name'];
                        // $_SESSION['img'] = $img;
                        $_SESSION['email'] = $row['Email'];
                        $_SESSION['fullname'] = $row['FullName'];
                        header('Location:index.php');
                        exit();
                    }else{
                        echo "Something went wrong. Please try again!";
                    }
            }else{
                echo "$email - This email has not been verified! Register again";
            }
        }else{
            echo "All input fields are required!";
        }   
    }
?>