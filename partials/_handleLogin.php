<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include '_dbconnect.php';
    $user_name = $_POST['login_username'];
    $user_password = $_POST['login_password'];        

    $sql = "SELECT * FROM `users` WHERE user_name = '$user_name'";
    $result = mysqli_query($conn,$sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($user_password,$row['user_pass'])){

            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['sno'] = $row['sno'];
            $_SESSION['username']=$user_name;
            header("Location: /Fashion Finder/index.php");
        }
        else{
            echo "password not match";
           // header("Location: /Fashion Finder");
        }
        
    }
}
?>