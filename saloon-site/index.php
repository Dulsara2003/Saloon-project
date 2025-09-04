<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Web Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="contact.css">

    <style>
        /* Home css */
        .hero {
            text-align: left;
            padding: 100px 20px;
            position: relative;
            overflow: hidden;
            height: 100vh;
            display: flex;
            align-items: end;
        }

        .hero video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }


        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* 50% dark color */
            z-index: 1;
        }


        .main-text {
            position: relative;
            z-index: 1;
            color: white;
        }


        .header-mobile {
            font-size: 30px;
            text-shadow: 4px 6px 8px rgba(0, 0, 0, 0.3);
        }

        .header-md {
            font-size: 50px;
            text-shadow: 4px 6px 8px rgba(0, 0, 0, 0.3);
        }

        .header-lg {
            font-size: 60px;
            text-shadow: 4px 6px 8px rgba(0, 0, 0, 0.3);
        }

        .header-xl {
            font-size: 70px;
            text-shadow: 4px 6px 8px rgba(0, 0, 0, 0.3);
        }

        .main-text-balance {
            padding: 20px;
            border-radius: 10px;
        }

        /* Typing Animation */
        .typing::after {
            content: '|';
            margin-left: 5px;
            animation: blink 0.7s infinite;
        }

        @keyframes blink {

            0%,
            50% {
                opacity: 1;
            }

            51%,
            100% {
                opacity: 0;
            }
        }

        /* Home css End */



        /* About css */
        .about-section {
            padding: 50px 0;
            margin-top: 100px;

        }

        .about-title {
            color: #f7a600;
            font-weight: bold;

        }

        .about-content {
            max-width: 700px;
            line-height: 1.5;
        }

        .about-box {
            display: flex;
            justify-content: center;
            align-items: center;

        }



        @media (max-width: 768px) {

            /* Below LG */
            .about-box {
                width: 450px;
                height: 450px;
            }
        }

        @media (max-width: 992px) {

            /* Below LG */
            .about-box {
                width: 480px;
                height: 400px;
            }
        }

        /* Services css */
        .services-section {
            padding: 50px 0;
            margin-top: 100px;
        }

        .gallery-card {
            background-color: #ddd;
            border: 3px solid #f1b600;
            aspect-ratio: 3/4;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 390px;
            margin: 0 auto;
        }

        .gallery-title {
            font-weight: bold;
            margin-bottom: 10px;
            color: white;
        }

        /* Input & Textarea placeholder white */
        .form-control::placeholder,
        textarea::placeholder {
            color: #c2c2c2ff !important;
            opacity: 1;
            /* Ensure full white */
        }

        /* Select dropdown default option white */
        .form-select option[disabled] {
            color: #c2c2c2ff !important;
        }

        .form-select {
            color: #c2c2c2ff !important;
        }


        /* Contact css */
        .contact-section {
            padding: 50px 0;
            margin-top: 100px;
        }

        .contact-title {
            color: #f7a600;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
            font-size: 28px;
        }


        .contact-form .form-control,
        .contact-form .form-select {
            background-color: transparent;
            border: 1px solid #f7a600;
            border-radius: 0;
            border-radius: 5px;

        }

        .contact-form .form-control:focus,
        .contact-form .form-select:focus {
            box-shadow: none;
            border-color: #ffcc33;

        }


        .contact-form textarea {
            height: 120px;
        }


        /* Map Container Styling */
        .map-container iframe {
            width: 100%;
            height: 350px;
            border: 0;
            border-radius: 10px;
            filter: hue-rotate(40deg) saturate(1.4) brightness(1.1);
        }
    </style>
</head>

<body style="background-color: #1c1c1c; overflow-x:hidden; ">

    <?php
    include "Navbar.php";
    ?>

    <!-- Hero Section with Video -->
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" class="scrollspy-example mb-5">


        <div id="scrollspyHeading1">
            <section class="hero">
                <video autoplay muted loop>
                    <source src="Resources/Video/video.mp4" type="video/mp4">
                </video>

                <div class="video-overlay"></div>


                <div class="container main-text">

                    <!-- Mobile -->
                    <div class="row justify-content-center d-block d-md-none"> <!-- Center the content -->
                        <div class="col-12 main-text-balance animate-left"> <!-- 10 columns on mobile, 5 columns on larger screens -->
                            <h1 class="fw-bold header-mobile fade-right typing-text"></h1>
                        </div>

                        <div class="fade-up text-center">
                            <p class="mx-auto text-balance ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <button class="button">Our Services</button>
                        </div>
                    </div>


                    <!-- Md -->
                    <div class="row d-none d-md-block d-lg-none "> <!-- Center the content -->
                        <div class="col-12 main-text-balance  animate-left"> <!-- 10 columns on mobile, 5 columns on larger screens -->
                            <h1 class="fw-bold header-md fade-right typing-text"></h1>

                        </div>

                        <div class="fade-up">
                            <p class="mx-auto text-balance ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <button class="button">Our Services</button>
                        </div>
                    </div>

                    <!-- Lg -->
                    <div class="row d-none d-lg-block d-xl-none"> <!-- Center the content -->
                        <div class="col-10 col-md-10 main-text-balance animate-left"> <!-- 10 columns on mobile, 5 columns on larger screens -->

                            <h1 class="fw-bold header-lg fade-right typing-text"></h1>
                        </div>

                        <div class="fade-up">
                            <p class="col-9 text-balance ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <button class="button">Our Services</button>
                        </div>

                    </div>


                    <!-- Xl -->
                    <div class="row d-none d-xl-block"> <!-- Center the content -->
                        <div class="col-9 main-text-balance animate-left"> <!-- 10 columns on mobile, 5 columns on larger screens -->
                            <h1 class="fw-bold header-xl fade-right typing-text"></h1>
                        </div>

                        <div class="fade-up">
                            <p class="col-9 text-balance ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <button class="button">Our Services</button>
                        </div>
                    </div>

                </div>
            </section>
        </div>

        <!-- 2nd Content (About) -->
        <div id="scrollspyHeading2" class="container about-section ">
            <h3 class="text-center about-title mb-3 fade-up">About</h3>
            <div class="row align-items-center">

                <div class="col-11 col-lg-6 mb-5 container">
                    <p class="about-content text-white text-balance fade-right" style="font-family: 'Franklin Gothic Medium', Arial, sans-serif;font-size: 19px; ">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>

                <div class="col-lg-6 d-flex  justify-content-center justify-content-lg-end">
                    <div class="about-box fade-left">
                        <img src="Resources/about.jpg" class="rounded-image">
                    </div>
                </div>

            </div>
        </div>


        <!-- 3rd Content (Services) -->
        <div id="scrollspyHeading3" class=" services-section">

            <div class="container">
                <h3 class="text-center about-title mb-3 fade-up ">Services</h3>
                <div class="row align-items-center">

                    <div class="container py-5">
                        <div class="row text-center justify-content-center mb-4">

                            <div class="col-12 col-md-4 mb-4 fade-left">
                                <div class="gallery-title ">Gents</div>
                                <div class="gallery-card ">
                                </div>
                            </div>

                            <div class="col-12 col-md-4 mb-4  zoom-in ">
                                <div class="gallery-title">Ladies</div>
                                <div class="gallery-card"></div>
                            </div>

                            <div class="col-12 col-md-4 mb-4 fade-right">
                                <div class="gallery-title">Kids</div>
                                <div class="gallery-card"></div>
                            </div>

                        </div>


                        <div class="row text-center">
                            <div class="col-12 fade-up ">
                                <p class="px-3 text-white  ">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                </p>
                                <button class="button">Our Gallery</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>



            <?php include "commentSection.php"; ?>

        </div>

        <!-- 4th Content (Products) -->

        <div id="scrollspyHeading4" class="container product-section ">

            <h2 class="text-center product-title mb-5 fade-up">Products</h2>
            <div class="row align-items-center">

                <div class="col-lg-6 d-flex justify-content-lg-start mb-5  justify-content-center ">
                    <div class="about-box fade-left">
                        <img src="Resources/product.jpg" class="rounded-image">
                    </div>
                </div>

                <div class="col-11 col-lg-6 mb-5 container">
                    <p class="product-content text-white text-balance fade-right" style="font-family: 'Franklin Gothic Medium', Arial, sans-serif;font-size: 19px; ">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>

            </div>
        </div>






        <!-- 5th Content (Contact) -->
        <div id="scrollspyHeading5" class="contact-section">

            <section>
                <div class="container ">
                    <h2 class="contact-title fade-up">Contact</h2>

                    <div class="row g-5 mt-5">
                        <!-- Contact Form -->
                        <div class="col-lg-6 fade-right">
                            <h4 class="fw-bold mb-3 text-white">SEND A MESSAGE</h4>
                            <p class="mb-4 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit, sed do e</p>

                            <form class="contact-form">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control text-white" placeholder="Your Name" style="background-color: #1c1c1c;">

                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control text-white" placeholder="Your Email" style="background-color: #1c1c1c;">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control  text-white " placeholder="Your Contact Number" style="background-color: #1c1c1c;">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select ">
                                            <option selected disabled>Subject</option>
                                            <option value="1">General Inquiry</option>
                                            <option value="2">Support</option>
                                            <option value="3">Feedback</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control text-white " style="background-color: #1c1c1c;" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="button">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Google Map with Yellow Filter -->
                        <div class="col-lg-6 fade-left">
                            <div class="map-container">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31675.070700188397!2d79.99171356371754!3d7.081422196966324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fb67a22e72d9%3A0x913a2c56a49c8d8e!2sGampaha!5e0!3m2!1sen!2slk!4v1715501679625!5m2!1sen!2slk"
                                    allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>


    </div>


    <?php include "footer.php"; ?>

    <script src="all.js"></script>
   
</body>

</html>