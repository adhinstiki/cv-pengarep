<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Pengarep</title>
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- BOOTSRAP ICON -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- MAIN CSS -->
    <link href="css/main.css" rel="stylesheet">

    

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container navbar-container my-3">
            <a class="navbar-brand" href="#home">
                <img src="assets/images/logo.png" alt="Logo" class="d-inline-block align-text-top">
            </a>
            <button id="btnToggle" class="btn-toggle">
                <span class="bar bar-1"></span>
                <span class="bar bar-2"></span>
            </button>
            <div class="navbar-nav-wrapper justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutUs">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ourService">Our Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#ourProject">Our Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ourTeam">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#benefit">Benefit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="sidebar-off-canvas">
        <div class="sidebar-top">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" alt="Logo" class="d-inline-block align-text-top">
            </a>
            <button class="close-btn" id="btnClose">
                <svg width="25" height="25" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="close-icon">
                    <g transform="scale(1)">
                        <line x1="1" y1="1" x2="11" y2="11" stroke-width="1" class="line-1" />
                        <line x1="1" y1="11" x2="11" y2="1" stroke-width="1" class="line-2" />
                    </g>
                </svg>
            </button>
        </div>
        <ul class="sidebar-content navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#aboutUs">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#ourService">Our Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#ourProject">Our Project</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#ourTeam">Our Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#benefit">Benefit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <h1>Subscribe & Follow</h1>
            <p>The scallops were perfectly cooked, tender, and flavorful, paired beautifully with a creamy risotto and seasonal vegetables. The presentation was artful, showcasing the chefs attention to detail.</p>
            <ul class="sidebar-social-media">
                <li class="sidebar-social-media-item"><a href="https://facebook.com"><i class="bi bi-facebook"></i></a></li>
                <li class="sidebar-social-media-item"><a href="https://twitter.com"><i class="bi bi-twitter-x"></i></a></li>
                <li class="sidebar-social-media-item"><a href="https://instagram.com"><i class="bi bi-instagram"></i></a></li>
                <li class="sidebar-social-media-item"><a href="https://linkedin.com"><i class="bi bi-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
    <div id="overlay" class="overlay"></div>
    <!-- NAVBAR -->

    <!-- HERO SECTION -->
    <div class="container-fluid hero-container" id="home" style="background-image: url('assets/images/banner-1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="hero-content">
                        <h1>CREATING SPACE TROUGH <span>INNOVATIVE DESIGN.</span></h1>
                        <p>Welcome to CV Pengarep, crafting timeless interiors that tell your story. Discover a world where design meets emotion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION -->

    <!-- ABOUT US -->
     <div class="container about-us-section" id="aboutUs">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="about-us-cover">
                    <img class="about-us-img w-100" src="assets/images/about.jpg" alt="">
                    <ul class="social-media-list">
                        <li class="social-media-item"><a href="https://facebook.com"><i class="bi bi-facebook"></i></a></li>
                        <li class="social-media-item"><a href="https://twitter.com"><i class="bi bi-twitter-x"></i></a></li>
                        <li class="social-media-item"><a href="https://instagram.com"><i class="bi bi-instagram"></i></a></li>
                        <li class="social-media-item"><a href="https://linkedin.com"><i class="bi bi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="about-us-content">
                    <div class="about-us-title">
                        <h2>Welcome To CV Pengarep</h2>
                        <h1>Interior Design with Different Approach</h1>
                        <p>Et purus duis sollicitudin dignissim habitant. Egestas nulla quis venenatis cras sed eu massa eu faucibus Urna fusce Et purus duis sollicitudin dig- nissim habitant.</p>
                    </div>
                    <div class="skill-list">
                        <div class="skill-item">
                            <h1 class="skill-title">Interior Design</h1>
                            <div class="skill-bar">
                                <div class="bar-inner" style="width: 90%;">
                                    <p class="bar-text">90%</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="skill-item">
                            <h1 class="skill-title">Architecture</h1>
                            <div class="skill-bar">
                                <div class="bar-inner" style="width: 80%;">
                                    <p class="bar-text">80%</p>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <h1 class="skill-title">3D Design</h1>
                            <div class="skill-bar">
                                <div class="bar-inner" style="width: 95%;">
                                    <p class="bar-text">95%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

    <!-- ABOUT US -->

    <!-- OUR SERVICES -->
    <div class="container section-title" id="ourService">
        <h2>What We Do</h2>
        <h1>The best Services We Provide</h1>
    </div>
    <div class="container-fluid service-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 service-list" style="border-bottom: 1px solid var(--grey-outline);">
                    <div class="service-list-item">
                        <div class="icon">
                            <img class="icon-img" src="assets/images/icon-1.png" alt="">
                        </div>
                        <div class="service-text">
                            <h1>Home Interior Design</h1>
                            <p>Creating stylish and functional interior spaces tailored to your needs, enhancing comfort and aesthetics.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-list" style="border: 1px solid var(--grey-outline); border-top: 0;">
                    <div class="service-list-item">
                        <div class="icon">
                            <img class="icon-img" src="assets/images/icon-2.png" alt="">
                        </div>
                        <div class="service-text">
                            <h1>Home Exterior Design</h1>
                            <p>Designing the exterior of your home to reflect your personal style while ensuring durability and curb appeal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-list" style="border-bottom: 1px solid var(--grey-outline);">
                    <div class="service-list-item">
                        <div class="icon">
                            <img class="icon-img" src="assets/images/icon-3.png" alt="">
                        </div>
                        <div class="service-text">
                            <h1>2D/3D Design Layout</h1>
                            <p>Providing detailed 2D and 3D layout designs that visualize your space in a realistic and practical way.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-list">
                    <div class="service-list-item">
                        <div class="icon">
                            <img class="icon-img" src="assets/images/icon-4.png" alt="">
                        </div>
                        <div class="service-text">
                            <h1>Furniture's Design</h1>
                            <p>Designing custom furniture pieces that fit perfectly with your interior, combining style and functionality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-list" style="border: 1px solid var(--grey-outline); border-top: 0; border-bottom: 0;">
                    <div class="service-list-item">
                        <div class="icon">
                            <img class="icon-img" src="assets/images/icon-5.png" alt="">
                        </div>
                        <div class="service-text">
                            <h1>Modern Home Interior</h1>
                            <p>Designing contemporary interiors with sleek, minimalistic elements and cutting-edge styles for a modern living experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-list">
                    <div class="service-list-item">
                        <div class="icon">
                            <img class="icon-img" src="assets/images/icon-6.png" alt="">
                        </div>
                        <div class="service-text">
                            <h1>Custom Design Plan</h1>
                            <p>Offering personalized design plans to transform your space according to your unique preferences and lifestyle.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- OUR SERVICES -->

    <!-- OUR PROJECT -->
    <div class="container section-title" id="ourProject">
        <h2>Latest Projects</h2>
        <h1>Our Projects & Designs</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="project-list-item">
                    <div class="project-cover">
                        <img class="project-img w-100" src="assets/images/project-1.jpg" alt="Project Image">
                    </div>
                    <h1>Modern Family House Decor</h1>
                    <p>Comfortable, functional city home redesign.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="project-list-item">
                    <div class="project-cover">
                        <img class="project-img w-100" src="assets/images/project-2.jpg" alt="Project Image">
                    </div>
                    <h1>Urban Luxury Residence Design</h1>
                    <p>Chic, modern home with style.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="project-list-item">
                    <div class="project-cover">
                        <img class="project-img w-100" src="assets/images/project-3.jpg" alt="Project Image">
                    </div>
                    <h1>Contemporary City Home Interior</h1>
                    <p>Sleek, minimalist urban living space</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="project-list-item">
                    <div class="project-cover">
                        <img class="project-img w-100" src="assets/images/project-4.jpg" alt="Project Image">
                    </div>
                    <h1>Downtown Private Home Renovation</h1>
                    <p>Elegant design with urban flair</p>
                </div>
            </div>
        </div>
    </div>
    <!-- OUR PROJECT -->
    
    <!-- TAMBAHAN -->

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <!-- CDN JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- CDN JS -->

    <!-- MAIN JS -->
     <script src="js/main.js"></script>
</body>

</html>