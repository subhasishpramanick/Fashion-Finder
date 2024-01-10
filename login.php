<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Finder</title>
    <link rel="stylesheet" href="CSS/style.css">
    <style>
    body {
        background-color: rgb(117, 117, 253);
    }
    </style>
    <!-- icon link  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php include "partials/_dbconnect.php";?>
    <?php include "partials/_navbar.php";?>


    <section class="container2 forms">
        <div class="form login">
            <div class="form content">
                <header>Login</header>

                <form action="/Fashion Finder/partials/_handleLogin.php" method="post">
                    <div class="field input-field">
                        <input type="text" placeholder="user name" class="input" name="login_username">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="password" class="password" name="login_password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>

                    <div class="field button-field">
                        <button type="submit">Login</button>
                    </div>

                    <div class="form-link">
                        <span>Don't have an account? <a href="#" class="signup-link">Sign up</a></span>
                    </div>
                </form>
            </div>


        </div>
    </section>
</body>

</html>