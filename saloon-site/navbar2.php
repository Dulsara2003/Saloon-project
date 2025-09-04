<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
          .navbar {
            background-color: #1c1c1c;
            padding: 15px 0;
        }

        .navbar-nav .nav-link.active {
            color: #f7a600 !important;
            /* Yellow color when active */
            font-weight: bold;
        }

        .navbar-brand {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .btn-book {
            background-color: #0C0C0C;
            width: 150px;
            border: 2px solid #f7a600;
            color: white;
            padding: 8px 15px;
            font-weight: 500;
            transition: all 0.4s ease-in-out;
            /* Smooth transition for all properties */
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-book::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, #f7a600, transparent);
            transition: left 0.4s ease-in-out;
            z-index: -1;
        }

        .btn-book:hover {
            color: white;
            border-color: #f7a600;
            box-shadow: 0 0 10px rgba(247, 166, 0, 0.6), 0 0 20px rgba(247, 166, 0, 0.4);
            /* Glow effect */
        }

        .btn-book:hover::before {
            left: 100%;
        }

        /* Sidebar Styles for Small Screens */
        @media (max-width: 991px) {
            .navbar-collapse {
                position: fixed;
                top: 0;
                right: -300px;
                width: 300px;
                height: 100vh;
                background-color: #0C0C0C;
                transition: right 0.4s ease-in-out, opacity 0.3s ease-in-out;
                padding-top: 60px;
                box-shadow: -4px 0 10px rgba(0, 0, 0, 0.2);
                opacity: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .navbar-collapse.show {
                right: 0;
                opacity: 1;
            }

            .close-btn {
                position: absolute;
                top: 15px;
                right: 15px;
                font-size: 24px;
                color: white;
                background: none;
                border: none;
                cursor: pointer;
            }

            .close-btn:hover {
                color: #f7a600;
            }

            .navbar-nav {
                list-style: none;
                padding: 0;
                text-align: center;
                width: 100%;
            }

            .navbar-nav .nav-item {
                margin: 10px 0;
            }

            .navbar-nav .nav-link {
                color: white;
                font-size: 18px;
                font-weight: 500;
                transition: color 0.3s ease-in-out;
            }

            .navbar-nav .nav-link:hover {
                color: #f7a600;
            }
        }

        /* Display Navbar Links Normally on Large Screens */
        @media (min-width: 992px) {
            .navbar-collapse {
                display: flex !important;
                position: relative;
                right: 0;
                opacity: 1;
                background: none;
                height: auto;
                box-shadow: none;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                width: 100%;
            }

            .navbar-nav {
                display: flex;
                flex-direction: row;
                text-align: left;
                margin: 0 auto;
            }

            .navbar-nav .nav-item {
                margin: 0 15px;
            }

            .navbar-nav .nav-link {
                color: white;
                font-size: 18px;
                font-weight: 500;
                transition: color 0.1s ease-in-out;
            }

            .navbar-nav .nav-link:hover {
                color: #f7a600;
            }

            .btn-book {
                position: absolute;
                right: 15px;
            }

            .close-btn {
                display: none;
                /* Hide close button on large screens */
            }
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">LOGO</a>

            <button class="navbar-toggler" type="button" id="toggleMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <button class="close-btn" id="closeMenu">&times;</button>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#scrollspyHeading1">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#scrollspyHeading2">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#scrollspyHeading3">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#scrollspyHeading4">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#scrollspyHeading5">Contact</a></li>
                </ul>
                <button class="btn-book">Book Now</button>
            </div>
        </div>
    </nav>

    <script>
        // Toggle mobile menu
        document.getElementById("toggleMenu").addEventListener("click", () => {
            document.getElementById("navbarNav").classList.add("show");
        });

        document.getElementById("closeMenu").addEventListener("click", () => {
            document.getElementById("navbarNav").classList.remove("show");
        });

        // Smooth scroll + close menu + highlight
        document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 70,
                        behavior: "smooth"
                    });
                }
                document.getElementById("navbarNav").classList.remove("show");
            });
        });

        // ScrollSpy
        window.addEventListener("scroll", () => {
            const sections = document.querySelectorAll("#scrollspyHeading1, #scrollspyHeading2, #scrollspyHeading3, #scrollspyHeading4, #scrollspyHeading5");
            let scrollPos = window.scrollY + 80;
            let activeFound = false;

            sections.forEach(section => {
                if (scrollPos >= section.offsetTop && scrollPos < section.offsetTop + section.offsetHeight) {
                    document.querySelectorAll(".navbar-nav .nav-link").forEach(link => link.classList.remove("active"));
                    const activeLink = document.querySelector(`.navbar-nav .nav-link[href="#${section.id}"]`);
                    if (activeLink) {
                        activeLink.classList.add("active");
                        activeFound = true;
                    }
                }
            });

            if (!activeFound) {
                document.querySelectorAll(".navbar-nav .nav-link").forEach(link => link.classList.remove("active"));
                document.querySelector('.navbar-nav .nav-link[href="#scrollspyHeading1"]').classList.add("active");
            }
        });

        // Highlight home on load
        // document.querySelector('.navbar-nav .nav-link[href="#scrollspyHeading1"]').classList.add("active");
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>