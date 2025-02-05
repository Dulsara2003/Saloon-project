<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
     
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

<body>

    <div class="container about-section">
        <div class="row align-items-center">

            <div class="col-10 col-md-6 mb-5 container">

                <h2 class="about-title">About</h2>
                <p class="about-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute.
                </p>
                <button class="btn btn-custom">View More</button>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>