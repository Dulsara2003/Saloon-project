<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="all.css">

    <style>
        .special-form-section {
            padding: 0px 21px;
            margin-top: 120px;
        }

        .special-section {
            padding: 0px 21px;
            margin-top: 150px;
        }

        .contact-box {
            background-color: #0c0c0c;
            /* left box dark */
            border: 1px solid #f7a600;
            border-radius: 5px;
        }

        .special-title {
            color: #f7a600;
            font-weight: bold;
        }

        .custom-input {
            background-color: transparent;
            border: 1px solid #f7a600;
            color: white;

        }

        .custom-input::placeholder {
            color: white;
            opacity: 0.8;
        }

        .custom-input:focus {
            background-color: #1c1c1c;
            border-color: #f7a600;
            box-shadow: none;
            color: white;
        }



        /* Special Appoinment */
        .special-box {
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

        .btn-box {
            position: absolute;
            height: 40px;
            width: 130px;
            bottom: 20px;
            background-color: #f7a600;
            color: #fff;
            font-weight: bold;
            border-radius: 5px;

            border: none;
            opacity: 0;
            /* hidden by default */
            transition: opacity 0.4s ease-in-out;
        }

        .special-box:hover .btn-box {
            opacity: 1;
            /* show on hover */
        }
    </style>
</head>

<body style="background-color: #1c1c1c; overflow-x:hidden; ">

    <?php include "Navbar2.php"; ?>




    <div class="container special-form-section mb-5">

        <div class="fade-up">
            <h4 class="text-center special-title fw-bold">
                Select Your Saloon's Haircut Appointment, Wedding Appointment or Other Salon Services
            </h4>
            <p class="text-center text-white text-balance">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            </p>
        </div>


        <div class="row mt-4 g-4">
            <!-- Left Contact Info -->
            <div class="col-lg-4 fade-right">
                <div class="contact-box p-4 ">
                    <h5 class="fw-bold text-white">GET IN TOUCH</h5>
                    <p class="text-white">
                        Start Your Journey to Beautiful Hair Today. Contact Us for Expert Hair Care and Personalized Services.
                    </p>
                    <p class="text-white mb-1"><i class="bi bi-geo-alt"></i> No.6, Pagoda Road,<br> Nugegoda, 10250, Sri Lanka.</p>
                    <p class="text-white mb-1"><i class="bi bi-clock"></i> 9.00 AM – 07.00 PM Tuesday – Sunday</p>
                    <p class="text-white mb-1"><i class="bi bi-telephone"></i> +94 77 388 5122</p>
                    <p class="text-white"><i class="bi bi-envelope"></i> saloninfo@gmail.com</p>
                </div>
            </div>

            <!-- Right Form -->
            <div class="col-lg-8 fade-left">
                <form class="row g-3">

                    <div class="col-md-4">
                        <input type="text" class="form-control custom-input" placeholder="First Name" style="background-color: #1c1c1c;">
                    </div>

                    <div class="col-md-4">
                        <input type="text" class="form-control custom-input" placeholder="Last Name">
                    </div>

                    <div class="col-md-4">
                        <input type="text" class="form-control custom-input" placeholder="Your Mobile">
                    </div>

                    <div class="col-md-4">
                        <select class="form-select custom-input">
                            <option selected disabled>Select Service</option>
                            <option>Haircut</option>
                            <option>Wedding</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <input type="date" class="form-control custom-input" placeholder="Month">
                    </div>

                    <div class="col-md-4">
                        <select class="form-select custom-input">
                            <option selected disabled>Select Gents, Ladies or Kids</option>
                            <option>Gents</option>
                            <option>Ladies</option>
                            <option>Kids</option>
                        </select>
                    </div>

                    <div class="col-12 mb-3">
                        <textarea class="form-control custom-input" rows="8" placeholder="Other Services (Optional)"></textarea>
                    </div>

                    <div class="col-12 text-center ">
                        <button type="submit" class="button">Book Now</button>
                    </div>

                </form>
            </div>
        </div>
    </div>



    <!-- Special Appoinment  -->
    <div class="container text-center special-section mb-5">
        <div class="fade-up">
            <h3 class="special-title fw-bold">Special Appointments</h3>
            <p class="text-white col-10  mx-auto text-balance">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            </p>
        </div>


        <div class="row justify-content-center g-5 mt-4">
            <!-- Box 1 -->
            <div class="col-md-4 fade-left">
                <div class="special-box">
                    <button class="btn-box">Photo Shoot</button>
                </div>
            </div>

            <!-- Box 2 -->
            <div class="col-md-4">
                <div class="special-box zoom-in ">
                    <button class="btn-box">Pre Shoot</button>
                </div>
            </div>

            <!-- Box 3 -->
            <div class="col-md-4">
                <div class="special-box fade-right">
                    <button class="btn-box">Wedding</button>
                </div>
            </div>
        </div>
    </div>




    <?php include "footer.php"; ?>

    <script src="all.js"></script>
</body>

</html>