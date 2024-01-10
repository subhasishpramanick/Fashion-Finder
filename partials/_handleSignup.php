<?php
$showError="false";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include '_dbconnect.php';
        $user_name= $_POST['signup_username'];
        $user_email = $_POST['signup_email'];
        $user_phone = $_POST['signup_phoneno'];
        $user_password = $_POST['signup_password'];
        $user_confirmPassword = $_POST['signup_confirmpassword'];

        // check username is already exists or not

        $existSql = "SELECT * FROM `users` WHERE user_name = '$user_name'";
        $result = mysqli_query($conn,$existSql);
        $numRows = mysqli_num_rows($result);
        if($numRows>0){
            //error message
            echo "You are already Signup";
        }
        else{
            if($user_password==$user_confirmPassword && ($user_password && $user_confirmPassword != "")){
                $hash = password_hash($user_password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`user_name`, `user_pass`, `user_email`, `user_phone`, `time`) VALUES ('$user_name', '$hash', '$user_email', '$user_phone', current_timestamp())";
                $result = mysqli_query($conn,$sql);
                if(!$result){
                    // error message
                    echo "error";
                }
                else{
                    $showAlert = true;
                    header("Location:/Fashion Finder/index.php?signupsuccess=true");
                    exit();
                }
            }
            else{
                $showError = "Password do not match";
            }
        }
     //   header("Location:/Fashion Finder/index.php?signupsuccess=false&error=".$showError);
    }
?>