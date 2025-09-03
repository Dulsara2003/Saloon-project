<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <!-- Bootstrap CSS -->
   
    <style>
        /* Custom Footer Styles */
        .footer {
            background-color: #111111ff;
            color: #ddd;
            padding: 40px 20px 20px;
            font-size: 14px;
        }

        .footer h5 {
            color: #f9b233;
            /* Gold/yellow color */
            font-weight: 600;
            margin-bottom: 15px;
        }

        .footer a {
            color: #ddd;
            text-decoration: none;
            display: block;
            margin-bottom: 6px;
            transition: 0.3s;
        }

        .footer a:hover {
            color: #f9b233;
            padding-left: 4px;
        }

        .footer .logo-box {
            background: #f1f1f1;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 120px;
            height: 80px;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer hr {
            border-color: #555;
            margin: 20px 0;
        }

        .footer .copyright {
            font-size: 12px;
            text-align: center;
            color: #bbb;
            
           
        }

        @media (max-width: 767px) {
            .footer {
                text-align: center;
            }

            .footer .logo-box {
                margin: 0 auto 20px;
            }
        }
    </style>
</head>

<body>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                 <!-- Logo & Quick Links -->
                <div class="col-md-4 mb-4 me-5">
                    <div class="logo-box">Logo</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e</p>
                </div>

                <!-- Logo & Quick Links -->
                <div class="col-md-2 mb-4 ">
                    <h5>Quick Links</h5>
                    <a href="#scrollspyHeading1">Home</a>
                    <a href="#scrollspyHeading2">About</a>
                    <a href="#scrollspyHeading3">Services</a>
                     <a href="#scrollspyHeading4">Products</a>
                    <a href="#scrollspyHeading5">Contact</a>
                    <a href="#">Terms & Conditions</a>
                    
                </div>

                <!-- Location & Opening Times -->
                <div class="col-md-3 mb-4 ">
                    <h5>Location & Opening Times</h5>
                    <p><strong>Opening Times</strong><br>
                        Tuesday - Sunday: 9:00am – 7:00pm</p>
                    <p><strong>Location</strong><br>
                        No.6, Pagoda Road, Nugegoda, 10250, Sri Lanka.</p>
                </div>

                <!-- Contact Us -->
                <div class="col-md-2 mb-4 ">
                    <h5>Contact Us</h5>
                    <p><strong>Mobile</strong><br>011-1212145<br>011-1212145</p>
                    <p><strong>Email</strong><br>yoursalonemail@gmail.com</p>
                </div>
            </div>

            <hr>
            <p class="copyright mt-4">
                © 2025 All Rights Reserved @ Your Salon | Designed & Developed by EVOTZA Pvt Ltd.
            </p>
        </div>
    </footer>

   

</body>

</html>