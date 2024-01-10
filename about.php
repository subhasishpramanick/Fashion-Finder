<!DOCTYPE html>
<html>

<head>
    <style>
    body {
        background: #8E0E00;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #1F1C18, #8E0E00);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #1F1C18, #8E0E00);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */




    }

    .team-article {
        display: block;
        width: 100%;
        color: white;
        position: absolute;
        top: 50%;
        box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .team-heading {
        position: absolute;
        left: 40%;
        font-weight: bold;
        font-size: 3rem;
        padding-top: 0.5rem;
    }

    .team-describe {

        /* background-color: #008CBA; */
        display: block;
        width: 73vw;
        /* position: absolute; */
        margin-left: 15rem;
        margin-top: 5rem;
        left: 15%;
        font-size: 1.2rem;
        padding-bottom: 1.5rem;

    }

    .flex {
        position: absolute;
        display: flex;
        top: 80%;
        left: 4%;

    }



    .container {
        position: relative;
        width: 70%;
    }

    .image {
        display: block;
        width: 70%;
        height: 85%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }


    .overlay {
        position: absolute;
        bottom: 40px;
        left: 0;
        right: 0;
        background: #8E0E00;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #1F1C18, #8E0E00);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #1F1C18, #8E0E00);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        background-size: 100% 100%;
        overflow: hidden;
        width: 70%;
        height: 0;
        opacity: 0.9;
        transition: .5s ease;
    }

    .container:hover .overlay {
        height: 88%;
    }

    .text {
        display: flex;

        color: white;
        font-size: 18px;
        position: absolute;




    }

    #text {
        display: flex;

        color: white;
        font-size: 18px;
        position: absolute;

    }

    .logo {
        position: absolute;
        top: -0.7rem;
        display: inline;
        font-size: 2rem;
        font-weight: 900;
        font-family: 'ubuntu', sans-serif;
        background-image: url(a.jpg);
        background-size: 100% 100%;
        color: transparent;
        -webkit-background-clip: text;
        left: 5rem;
    }

    #logo-img {
        position: absolute;
        width: 2.8vw;
        left: 2rem;
        top: 1.2rem;
    }

    .a {

        width: 16VW;
        background-color: #e0dede;
        background-size: 100% 100%;
        color: black;
        left: 5%;
        top: 10%;
        opacity: 0.9;
        font-size: 18px;
        font-weight: bold;

        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .pritam {
        padding-left: 2.5rem;
    }

    .raunak {
        padding-left: 2.5rem;
    }

    .diganta {
        padding-left: 2rem;
    }

    .riju {
        padding-left: 3.8rem;
    }

    #a1 {
        height: 16vh;
        width: 10vw;
        color: white;
        font-size: 20px;
        position: absolute;


        background-size: 100% 100%;
        top: 120%;
        left: 10%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        opacity: 0.9;
    }

    .cont {
        height: 3.5vh;
        padding-top: 8px;
        padding-left: 80px;
        border-radius: 5px;
        width: 0;
        color: black;
        font-family: 'ubuntu', sans-serif;
        font-size: 25px;
        font-weight: 600;
        background-color: white;
        text-shadow: rgba(0, 0, 0, 0.4) 7px 6px 6.1px;
        opacity: 0;
        position: absolute;
        transition: .9s ease;
        top: 1rem;
        left: 25rem;
    }



    .logo-class {
        display: flex;
    }

    .logo-class:hover .cont {
        opacity: 0.9;
        width: 45vw;

    }



    .cont span {
        background: url('pngwing.com.png');
        background-size: 100% 100%;
        filter: drop-shadow(rgba(0, 0, 0, 0.4) 7px 6px 6.1px);
        text-shadow: none;
    }

    .about {
        height: 5vh;
        width: 10vw;
        color: white;
        position: absolute;
        top: 11rem;
        right: 13rem;
        opacity: 0;
        transition: .9s ease;
    }

    #about-img {
        position: absolute;
        left: 68rem;
        bottom: 33rem;
        width: 32vw;
        height: 40vh;
    }

    .nav {
        color: white;
        display: flex;
        position: absolute;
        top: 4rem;
        left: 29rem;
        justify-content: space-between;
        padding-left: 6rem;
        align-items: center;
        font-size: 1.2rem;
        height: 3rem;
        width: 32rem;
        border-radius: 30px;
        padding-right: 3rem;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .nav-do {
        margin-right: 3rem;
    }

    .nav-do:hover .about {
        opacity: 0.9;
        width: 45vw;
    }

    .nav-how:hover .about {
        opacity: 0.9;
        width: 45vw;
    }

    .nav-why:hover .about {
        height: 5vh;
        opacity: 0.9;
        width: 45vw;
    }

    .nav-how {
        margin-right: 3rem;

    }
    </style>
</head>

<body>
    <div class="a2"></div>
    <div class="logo-class">
        <img src="image\logo.png" alt="" id="logo-img">
        <p class="logo">FASHION FINDER</p>
        <div class="cont">Welcome to fashion finder, Where fashion <span>meets </span>smplicity.</div>
    </div>
    <div class="nav">
        <div class="nav-do"><span>What we do</span>
            <div class="about">
                We're on a mission to make your online shopping experience as effortless as possible. Ever found
                yourself
                endlessly scrolling through e-commerce websites, trying to find the perfect outfit at the right price?
                Say
                goodbye to that struggle!
            </div>
        </div>
        <div class="nav-how">How it works
            <div class="about">
                Navigating the vast expanse of e-commerce platforms to find the best deals can be a daunting and
                time-consuming task. Our innovative website simplifies this process by empowering users to effortlessly
                discover the lowest prices for their desired dresses.
                To utilize our platform, users simply need to upload an image of the dress they wish to purchase. Our
                intelligent algorithm, equipped with sophisticated image recognition capabilities, analyzes the uploaded
                image to identify the specific dress and its key features.

            </div>
        </div>
        <div class="nav-why">Why chose us
            <div class="about">
                Our intelligent algorithm takes the guesswork out of finding the best deals by scouring a vast network
                of e-commerce platforms and comparing prices for the dress you want across multiple retailers. This
                means you can finally say goodbye to spending hours manually searching for the best prices!
                Our image recognition technology ensures that the dress you're interested in is accurately identified,
                providing you with precise and relevant price results. No more wondering if you're comparing the right
                dress!

            </div>
        </div>
    </div>

    <img src="Untitled-1.png" alt="" id="about-img">

    <div class="team-article">
        <span class="team-heading">Who we are</span>
        <span class="team-describe">We are a team of five tech-savvy students from PAILAN COLLEGE OF MANAGEMENT AND
            TECHNOLOGY - Pritam , Subhasish , Raunak , Diganta and Riju. We created a website that helps users find the
            lowest prices for any kind of dresses online. Simply upload an image of the dress you want and our website
            will scour the internet to find the best deals for you . We also offer features like price tracking and
            real-time price alerts. We are committed to innovation and customer satisfaction and we are excited to
            continue improving our website.</span>

    </div>

    <div class="flex">


        <div class="container">
            <img src="image\myimg.png" alt="Avatar" class="image">

            <div class="overlay">
                <div class="text">
                    <p class="a">SUBHASISH PRAMANICK</p>
                    <div id="a1">
                        <p>I play a role as a full stack developer to successfully complete this website.</p>
                    </div>




                </div>
            </div>
        </div>
        <div class="container">
            <img src="image\pritam.jpg" alt="Avatar" class="image">

            <div class="overlay">
                <div class="text">
                    <p class="a pritam">PRITAM PARALI</p>
                    <div id="a1">
                        <p>I play a role as a content creator to successfully complete this website.</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <img src="image\Raunak.jpg" alt="Avatar" class="image">

            <div class="overlay">
                <div class="text">
                    <p class="a raunak"> RAUNAK KUNTI</p>
                    <div id="a1">
                        <p>I play a role as a full stack developer to successfully complete this website.</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <img src="image\Diganta.jpg" alt="Avatar" class="image">

            <div class="overlay">
                <div class="text">
                    <p class="a diganta">DIGANTA HALDER</p>
                    <div id="a1">
                        <p>I play a role as a Frontend developer to successfully complete this website.</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <img src="image\Riju.jpg" alt="Avatar" class="image">

            <div class="overlay">
                <div class="text">
                    <p class="a riju"> RIJU BERA</p>
                    <div id="a1">
                        <p>I play a role as a Frontend developer to successfully complete this website.</p>
                    </div>

                </div>
            </div>
        </div>

    </div>

</body>

</html>