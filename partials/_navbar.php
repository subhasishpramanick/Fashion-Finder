<?php
        session_start();
        echo '<nav>
            <div class="logo"><a href="index.html"><img src="image/logo.png" alt=""></a></div>
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Help Corner</a></li>';
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                // inline style added on username
                echo '
                <span class="login" style="padding: 0 15px; font-weight: bold;
                color: white;">Welcome '.$_SESSION['username'].'</span>
                <li><a href="partials/_logout.php">Log Out</a></li>';
            }
            else{
            echo'
            <li class="login"><a href="login.php">Login</a></li>
            <li><a href="signup.php">Sign Up</a></li>';
            }
            echo '</ul>
        </nav>';
    ?>