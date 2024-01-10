<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Contact with us </title>
</head>

<body>
    <div class="flbg">
        <!-- header start  -->

        <?php include "partials/_navbar.php";?>
        <!-- header end  -->

        <!-- banner start -->
        <div class="banner-contact-page">
            <img src="image/images.png">
            <h1>GET IN TOUCH WITH US</h1>
            <p class="contact-des">We're here to answer any questions you may have.</p>
        </div>
        <!-- banner end -->
        <!-- form start -->
        <div class="form-container">
            <h2>Your Details</h2>
            <form action="/Fashion Finder/partials/_handelquery.php" method="POST" class="details-form">
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" placeholder="Enter Your Name Here" required>
                <label for="email">Email Address: </label>
                <input type="email" id="email" name="email" placeholder="Enter Your Email Address Here" required>

                <p class="profession-desc">What Is Your Profession: </p>
                <ul class="profession">
                    <li>
                        <input type="radio" value="i am a member" name="profession" id="profession1">
                        <label for="profession1"><span>I am a Serviceman</span></label>
                    </li>
                    <li>
                        <input type="radio" value="i am a professor" name="profession" id="profession2">
                        <label for="profession2"><span>I am a Businessman</span></label>
                    </li>
                    <li>
                        <input type="radio" value="i am a coder" name="profession" id="profession3">
                        <label for="profession3"><span>I am a Coder</span></label>
                    </li>
                    <li>
                        <input type="radio" value="i am a coder" name="profession" id="profession3">
                        <label for="profession3"><span>Others</span></label>
                    </li>
                </ul>
                <label for="message">Message: </label>
                <textarea id="message" rows="5" name="message" placeholder="Elaborate Your Concern Here"
                    required></textarea>
                <div class="buttonholder">
                    <input type="submit" name="submit" value="submit" id="submit" required>
                </div>
            </form>
        </div>
        <!-- form end -->
    </div>
</body>

</html>