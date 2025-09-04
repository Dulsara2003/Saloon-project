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
    </style>
</head>

<body style="background-color: #1c1c1c; overflow-x:hidden; ">
    <?php include "navbar2.php"; ?>


    <section class="booking-section">
        <h5 class="text-white">
            Select Your Saloon's Haircut Appointment, Wedding Appointment or Other Salon Services
        </h5>

        <div class="form text-center">
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Your Name">
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
                      <select class="form-select">
                        <option selected disabled>Select Month</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                    </select>
                </div>

                <div class="col-md-4">
                     <select class="form-select">
                        <option selected disabled>Select a Day</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                    </select>
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
</body>

</html>