<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="all.css">

    <style>
        .booking-section {
            max-width: 900px;
            margin: 70px auto;
            padding: 30px;
        }

        .booking-section h5 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 500;
        }

        .form-control,
        .form-select {
            background-color: transparent;
            border: 1px solid #f7a600;
            color: white;
            border-radius: 0;
        }

        .form-control:focus,
        .form-select:focus {
            box-shadow: none;
            border-color: #ffbb33;
            background-color: transparent;
            color: white;
        }

        .form-control::placeholder {
            color: #aaa;
        }

        textarea {
            resize: none;
        }


        textarea {
            height: 150px;
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
            bottom: 20px;
            background-color: #f7a600;
            color: #fff;
            font-weight: bold;
            padding: 8px 20px;
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


    <section class="booking-section">
        <h5 class="text-white">
            Select Your Saloon's Haircut Appointment, Wedding Appointment or Other Salon Services
        </h5>

        <div class="form text-center">
            <div class="row g-3 mb-4">

                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="First Name">
                </div>

                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Last Name">
                </div>


                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Your Mobile">
                </div>

                <div class="col-md-4">
                    <select class="form-select">
                        <option selected disabled>Select Service</option>
                        <option>Haircut</option>
                        <option>Wedding</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <input type="date" class="form-control " placeholder="Your Mobile">

                </div>


                <div class="col-md-4">
                    <select class="form-select">
                        <option selected disabled>Select Gents , Ladies or Kids</option>
                        <option>Gents</option>
                        <option>Ladies</option>
                        <option>Kids</option>
                    </select>
                </div>

                <div class="col-12">
                    <textarea class="form-control" placeholder="Other Services (Optional)"></textarea>
                </div>
            </div>

            <button type="submit" class="button  ">Book Now</button>
        </div>
    </section>


    <!-- Special Appoinment  -->
    <div class="container text-center my-5">
        <h3 class="text-warning fw-bold">Special Appointments</h3>
        <p class="text-white">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
        </p>

        <div class="row justify-content-center g-4 mt-4">
            <!-- Box 1 -->
            <div class="col-md-3">
                <div class="special-box">
                    <button class="btn-box">Photo Shoot</button>
                </div>
            </div>

            <!-- Box 2 -->
            <div class="col-md-3">
                <div class="special-box">
                    <button class="btn-box">Pre Shoot</button>
                </div>
            </div>

            <!-- Box 3 -->
            <div class="col-md-3">
                <div class="special-box">
                    <button class="btn-box">Wedding</button>
                </div>
            </div>
        </div>
    </div>



    <?php include "footer.php"; ?>
</body>

</html>