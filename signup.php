<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Finder</title>
    <link rel="stylesheet" href="CSS/style.css">
    <!-- icon link  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body{
            background-color: rgb(117, 117, 253);
        }
    </style>
</head>
<body>
    <?php include "partials/_navbar.php";?>
    <section class="container2 forms">
        <div class="form signup">
            <div class="form content">
                <header>Sign Up</header>

                <form action="/Fashion Finder/partials/_handleSignup.php" method="post">
                    <div class="field input-field">
                        <input type="text" placeholder="user name" class="input" name="signup_username">
                    </div>

                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="signup_email">
                    </div>

                    <div class="field input-field">
                        <input type="number" placeholder="Phone No" class="input" min="0" name="signup_phoneno">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="password" class="password" name="signup_password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Confirm password" class="password" name="signup_confirmpassword">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button type="submit">Sign Up</button>
                    </div>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="signup-link">Sign in</a></span>
                    </div>
                </form>
            </div>

            
        </div>
    </section>
</body>
</html>