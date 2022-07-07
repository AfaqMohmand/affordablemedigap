<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&family=Public+Sans:wght@200&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="affordable-slider.css">
    <link rel="stylesheet" href="medigap_plans.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/testim_style.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/accordian.css">
    <link rel="stylesheet" href="new_footer.css">

    <title>Affordable Medigap</title>
    <style>
        .nav-item{
            font-weight:700;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <!-- <nav style="background-color: #9BCC4E;" class="navbar text-light p-3">

    </nav> -->
    <div class="navigation">
        <nav class="navbar navbar-expand-lg navbar-light" style="">

            <div class="container">
                <!-- <a href="index.php" style="color:#9BCC4E;" class="navbar-brand">Affordable Medigap</a> -->
                <a style="padding-bottom:10px;" href="index.php"> <img style="margin-top:0px;" class="navbar-brand"
                        src="assets/img/logo/logo_updated.png" height="90px" width="300px" alt=""></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Our Plans
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">

                                <li class="nav-item">
                                    <a href="medicare-advantage-plan-c.php" class="nav-link">Plan C</a>
                                </li>
                                <li class="nav-item">
                                    <a href="plan-d.php" class="nav-link">Plan D</a>
                                </li>
                                <li class="nav-item">
                                    <a href="plan-k.php" class="nav-link">Plan K</a>
                                </li>
                                <li class="nav-item">
                                    <a href="plan-L.php" class="nav-link">Plan L</a>
                                </li>
                                <li class="nav-item">
                                    <a href="plan-f.php" class="nav-link">Plan F</a>
                                </li>
                                <li class="nav-item">
                                    <a href="plan-g.php" class="nav-link">Plan G</a>
                                </li>
                                <li class="nav-item">
                                    <a href="plan-n.php" class="nav-link">Plan N</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="new-to-medicare.php" class="nav-link">New to medicare</a>
                        </li>

                        <li class="nav-item">
                            <a href="medigap.php" class="nav-link">Medigap</a>
                        </li>
                        <li class="nav-item">
                            <a href="medicare-advantage-plan-c.php" class="nav-link">MedicareAdvantage</a>
                        </li>
                        <li class="nav-item">
                            <a href="plan-d.php" class="nav-link">Part D</a>
                        </li>
                        <li class="nav-item">
                            <a href="blogs.php" class="nav-link">Blog</a>
                        </li>
                        <!-- <li class="nav-item">
                <a href="about-us.php" class="nav-link">About Us</a>
            </li> -->
                        <li class="nav-item" style="margin-left:20px; margin-right:-30px;">
                            <a style="background-color:#9BCC4E; color:white; font-weight: 600; border:none;"
                                href="tel:+17864607667" class="nav-link btn btn-secondary">Speak to Agent</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Header-->
    <!-- Scripts -->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="css/index.js"></script>
    <script>
        const btns = document.querySelectorAll("#acc-btn");
        // fn
        function accordion() {
            // this = the btn | icon & bg changed
            this.classList.toggle("is-open");
            // the acc-content
            const content = this.nextElementSibling;
            // IF open, close | else open
            if (content.style.maxHeight) content.style.maxHeight = null;
            else content.style.maxHeight = content.scrollHeight + "px";
        }
        // event
        btns.forEach((el) => el.addEventListener("click", accordion));
    </script>
   <!-- Brand script -->
   <script>
   
   </script>
   <!-- End Scripts -->
</body>

</html>