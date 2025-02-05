<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Web Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Home (1st Content) */


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

        .main-text {
            position: relative;
            z-index: 1;
            color: white;
        }

        .main-text-balance {

            padding: 20px;
            border-radius: 10px;
        }

        /* Home (1st Content) */



        /* About (2nd Content) */
        .about-section {
            padding: 50px 0;
        }

        .about-title {
            color: #ffcc00;
            font-weight: bold;
        }

        .about-content {
            max-width: 700px;
        }

        .about-box {
            background-color: #d3d3d3;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
        }

        .btn-custom {
            border: 2px solid #ffcc00;
            color: #ffffff;
            padding: 8px 20px;
            font-weight: bold;
        }

        .btn-custom:hover {
            background-color: #ffcc00;
            color: #000;
        }



        @media (max-width: 991px) {

            /* Below LG */
            .about-box {
                width: 300px;
                height: 300px;
            }
        }

        @media (min-width: 992px) {

            /* LG and above */
            .about-box {
                width: 400px;
                height: 400px;
                /* Adjust height as needed */
            }
        }
    </style>
</head>

<body style="background-color: #0C0C0C;">

    <?php
    include "Navbar.php";
    ?>

    <!-- Hero Section with Video -->
    <section class="hero">
        <video autoplay muted loop>
            <source src="Video/video.mp4" type="video/mp4">
        </video>
        <div class="container main-text">

            <!-- Mobile -->
            <div class="row justify-content-center d-block d-md-none"> <!-- Center the content -->
                <div class="col-12 main-text-balance text-center"> <!-- 10 columns on mobile, 5 columns on larger screens -->
                    <h1 class="fw-bold">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>


            <!-- Md -->
            <div class="row d-none d-md-block d-lg-none "> <!-- Center the content -->
                <div class="col-10 col-md-8 main-text-balance"> <!-- 10 columns on mobile, 5 columns on larger screens -->
                    <h1 class="fw-bold">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <!-- Lg -->
            <div class="row d-none d-lg-block d-xl-none"> <!-- Center the content -->
                <div class="col-10 col-md-7 main-text-balance"> <!-- 10 columns on mobile, 5 columns on larger screens -->
                    <h1 class="fw-bold">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>


            <!-- Xl -->
            <div class="row d-none d-xl-block "> <!-- Center the content -->
                <div class="col-10 col-md-6 main-text-balance"> <!-- 10 columns on mobile, 5 columns on larger screens -->
                    <h1 class="fw-bold">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- 2nd Content (About) -->
    <div class="container about-section">
        <h2 class="text-center about-title mb-5">About</h2>
        <div class="row align-items-center">

            <div class="col-10 col-md-6 mb-5 container ">


                <p class="about-content text-white">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute.
                </p>
            </div>


            <div class="col-md-6 d-flex justify-content-md-end justify-content-center">
                <div class="about-box">
                    <svg width="100%" height="100%" viewBox="0 0 100 100">
                        <line x1="0" y1="0" x2="100" y2="100" stroke="black" />
                        <line x1="100" y1="0" x2="0" y2="100" stroke="black" />
                    </svg>
                </div>
            </div>

        </div>
    </div>


</body>

</html>