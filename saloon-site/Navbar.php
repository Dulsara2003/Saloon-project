<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="navbar.css">

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
        document.querySelector('.navbar-nav .nav-link[href="#scrollspyHeading1"]').classList.add("active");
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>