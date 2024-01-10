<?php
$showError="false";
if($_SERVER['REQUEST_METHOD']=="POST"){
    include '_dbconnect.php';
    $user_name = $_POST['name'];
    $user_email = $_POST['email']; 
    $user_msg=$_POST['message'];
    $sql = "INSERT INTO `helpcorner` (`user_name`, `user_email`, `user_message`) VALUES ('$user_name', '$user_email', '$user_msg');";
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


?>