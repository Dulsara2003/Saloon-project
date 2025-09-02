<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial Slider</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="all.css">
    <style>
        .comment-section {
            padding: 30px 0;
        }

        .testimonial-slider {
            background: #ebebebff;
            padding: 40px 20px;
            text-align: center;
            height: 350px;
            /* auto adjust */
        }

        .testimonial-slider .quote-icon {
            font-size: 40px;
            font-weight: bold;
        }

        .testimonial-slider p {
            font-size: 15px;
            max-width: 700px;
            margin: 20px auto;
            line-height: 1.6;
            font-weight: 500;
        }

        .testimonial-slider .author {
            margin-top: 20px;
            font-weight: bold;
        }

        /* Arrows closer & black */
        .carousel-control-prev,
        .carousel-control-next {
            width: auto;
        }

        .carousel-control-prev {
            left: 60px;
        }

        .carousel-control-next {
            right: 60px;
        }

        @media (max-width: 576px) {
            .carousel-control-prev {
                left: 15px;
            }

            .carousel-control-next {
                right: 15px;
            }
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(100%);
            width: 30px;
            height: 30px;
            transition: transform 0.2s ease;
        }

        .carousel-control-prev-icon:hover,
        .carousel-control-next-icon:hover {
            transform: scale(1.2);
        }

        /* Indicators (dots) */
        .carousel-indicators {
            position: absolute;
            bottom: -60px;
            /* below the box */
        }

        .carousel-indicators [data-bs-target] {
            width: 12px;
            height: 12px;
            background-color: #6c757d;
        }

        .carousel-indicators .active {
            background-color: #f7a600;
        }
    </style>
</head>

<body>

    <section class="comment-section zoom-in">

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators (must be here, before carousel-inner) -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">

                <!-- Comment 1 -->
                <div class="carousel-item active ">
                    <div class="testimonial-slider ">
                        <div class="quote-icon">”</div>
                        <p class="col-10 mx-auto">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="author">Dulsara Dissanayaka</div>
                    </div>
                </div>

                <!-- Comment 2 -->
                <div class="carousel-item">
                    <div class="testimonial-slider">
                        <div class="quote-icon">”</div>
                        <p class="col-10 mx-auto">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <div class="author">John Doe</div>
                    </div>
                </div>

                <!-- Comment 3 -->
                <div class="carousel-item">
                    <div class="testimonial-slider">
                        <div class="quote-icon">”</div>
                        <p class="col-10 mx-auto">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <div class="author">John Doe</div>
                    </div>
                </div>
            </div>

            <!-- Arrows -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="all.js"></script>
</body>

</html>