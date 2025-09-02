<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Web Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="services.css">
    <link rel="stylesheet" href="comment.css">

</head>

<body style="background-color: #0C0C0C;">

    <?php
    include "Navbar.php";
    ?>

    <!-- Hero Section with Video -->
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" class="scrollspy-example ">


        <div id="scrollspyHeading1">
            <section class="hero">
                <video autoplay muted loop>
                    <source src="Resources/Video/video.mp4" type="video/mp4">
                </video>

                <div class="video-overlay"></div>


                <div class="container main-text">

                    <!-- Mobile -->
                    <div class="row justify-content-center d-block d-md-none"> <!-- Center the content -->
                        <div class="col-12 main-text-balance text-center animate-left"> <!-- 10 columns on mobile, 5 columns on larger screens -->
                            <h1 class="fw-bold header-mobile fade-right">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</h1>
                        </div>

                        <div class="fade-up text-center">
                            <p class="mx-auto text-balance ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <button class="services-btn ">Our Services</button>
                        </div>
                    </div>


                    <!-- Md -->
                    <div class="row d-none d-md-block d-lg-none "> <!-- Center the content -->
                        <div class="col-12 main-text-balance text-center animate-left"> <!-- 10 columns on mobile, 5 columns on larger screens -->
                            <h1 class="fw-bold header-md fade-right">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</h1>

                        </div>

                        <div class="fade-up">
                            <p class="mx-auto text-balance ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <button class="services-btn">Our Services</button>
                        </div>
                    </div>

                    <!-- Lg -->
                    <div class="row d-none d-lg-block d-xl-none"> <!-- Center the content -->
                        <div class="col-10 col-md-10 main-text-balance animate-left"> <!-- 10 columns on mobile, 5 columns on larger screens -->

                            <h1 class="fw-bold header-lg fade-right">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</h1>
                        </div>

                        <div class="fade-up">
                            <p class="col-9 text-balance ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <button class="services-btn">Our Services</button>
                        </div>

                    </div>


                    <!-- Xl -->
                    <div class="row d-none d-xl-block"> <!-- Center the content -->
                        <div class="col-9 main-text-balance animate-left"> <!-- 10 columns on mobile, 5 columns on larger screens -->
                            <h1 class="fw-bold header-xl fade-right">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</h1>
                        </div>

                        <div class="fade-up">
                            <p class="col-9 text-balance ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <button class="services-btn">Our Services</button>
                        </div>
                    </div>

                </div>
            </section>
        </div>

        <!-- 2nd Content (About) -->
        <div id="scrollspyHeading2" class="container about-section ">
            <h2 class="text-center about-title mb-5 fade-up">About</h2>
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
                <h2 class="text-center about-title mb-5 fade-up ">Services</h2>
                <div class="row align-items-center">

                    <div class="container py-5">
                        <div class="row text-center justify-content-center mb-4">

                            <div class="col-12 col-md-4 mb-4 fade-left">
                                <div class="gallery-title ">Gents</div>
                                <div class="gallery-card ">
                                </div>
                            </div>

                            <div class="col-12 col-md-4 mb-4 fade-up ">
                                <div class="gallery-title">Ladies</div>
                                <div class="gallery-card zoom-in"></div>
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
                                <button class="our-gallery-btn">Our Gallery</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


            
                <?php include "commentSection.php"; ?>
            

        </div>



        <!-- 4th Content (Products) -->
        <div id="scrollspyHeading4" class=" about-section">



        </div>



        <!-- 5th Content (Contact) -->
        <div id="scrollspyHeading5" class="container about-section">
            <h2 class="text-center about-title mb-5">Contact</h2>
            <div class="row align-items-center">

                <div class="col-11 col-lg-6 mb-5 container">
                    <p class="about-content text-white text-balence" style="font-family: 'Franklin Gothic Medium', Arial, sans-serif;font-size: 19px; ">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute.
                    </p>
                </div>


                <div class="col-lg-6 d-flex  justify-content-center justify-content-lg-end">
                    <div class="about-box">
                        <img src="Resources/about.jpg" class="rounded-image">
                    </div>
                </div>

                <div class="col-11 col-lg-6 mb-5 container">
                    <p class="about-content text-white text-balence" style="font-family: 'Franklin Gothic Medium', Arial, sans-serif;font-size: 19px; ">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute.
                    </p>
                </div>


                <div class="col-lg-6 d-flex  justify-content-center justify-content-lg-end">
                    <div class="about-box">
                        <img src="Resources/about.jpg" class="rounded-image">
                    </div>
                </div>
            </div>
        </div>



    </div>
    <script src="all.js"></script>
    <script src="home.js"></script>
    <script src="about.js"></script>
    <script src="services.js"></script>
</body>

</html>