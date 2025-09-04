<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salon Booking Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #1c1c1c;
      color: white;
      font-family: Arial, sans-serif;
    }

    .booking-section {
      max-width: 900px;
      margin: 50px auto;
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
      border: 2px solid #f7a600;
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

    .btn-book {
      background-color: #f7a600;
      color: #1c1c1c;
      font-weight: bold;
      border: none;
      padding: 10px 25px;
      transition: 0.3s ease-in-out;
      display: block;
      margin: 20px auto 0;
    }

    .btn-book:hover {
      background-color: #ffbb33;
      color: #000;
    }
  </style>
</head>
<body>
  <section class="booking-section">
    <h5>
      Select Your Saloon's Haircut Appointment, Wedding Appointment or Other Salon Services
    </h5>

    <form>
      <div class="row g-3">
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
          <input type="text" class="form-control" placeholder="Month">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Day">
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
          <textarea class="form-control" rows="4" placeholder="Other Services (Optional)"></textarea>
        </div>
      </div>

      <button type="submit" class="btn btn-book">Book Now</button>
    </form>
  </section>
</body>
</html>
