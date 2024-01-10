<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fashion Finder</title>
    <link rel="stylesheet" href="CSS/style.css" />

  </head>
  <body>
    <div class="flbg">
      <!-- header end  -->
      <?php include "partials/_navbar.php";?>
      <!-- <nav>
        <div class="logo"><a href="index.html"><img src="image/logo.png" alt=""></a></div>
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="contact.php">Contact US</a></li>
          <li class="login"><a href="login.php">Login</a></li>
          <li><a href="signup.html">Sign Up</a></li>
        </ul>
      </nav> -->
      <!-- header end  -->

      <!-- banner section start  -->
      <section class="banner">
        <div class="container">
          <div class="wrapper">
            <div class="left">
              <h1>FASHION FINDER</h1>
              <p class="des">
                FashionFinder is an innovative online platform that simplifies
                the process of finding and shopping for fashion items. Users can
                upload photos of fashion items they like, and our advanced image
                recognition technology will process the images and provide a
                sorted list of products from various retailers based on <strong>price.</strong>
                With FashionFinder, you can effortlessly find the best deals and
                the latest trends in fashion.
              </p>
              <a href="#up" class="btn">Find Your Style</a>
            </div>
            <div class="right_img">
              <img src="image/Untitled-1.png" alt="">
            </div>
          </div>
        </div>
      </section>
      <!-- banner section end  -->

      <!-- upload section start  -->

      <section class="upload" id="up">
        <div class="container">
          <h2 class="upheading">Discover, Compare, and Shop Your <span>Style</span></h2>
          <div class="upload_wrapper">
            <div class="left1">
              <div class="updec">
                <div class="upload-btn-wrapper">
                    
                    <button class="upload_btn"><span class="upload_icon"><img src="image/upload.png" alt=""></span> Upload Image</button>
                    <input type="file" name="myfile" />
                  </div>
              </div>
            </div>
            <div class="right1">
              <p>Result box</p>
            </div>
          </div>
        </div>
      </section>
      <!-- upload section start  -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
  </body>
</html>
