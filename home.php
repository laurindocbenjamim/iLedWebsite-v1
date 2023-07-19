
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!---- swiper css link ----->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Font awesome cdn link --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!------ Custom css file link -->

    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    
<!---- header sectrion starts ----->
<section class="header"  style="background: #c6c6af">
    <a href="home.php" class="logo">XCode</a>

    <nav class="navbar">
        <a href="home.php"><i class="fas fa-link"></i></a>
        <a href="#">Login</a>
        <a href="#">Register</a>
    </nav>

    <!-- Mobile icon-menu --->
    <div id="menu-btn1" class="fas fa-bars"></div>
</section>

<section class="headerLong" style="background: #9d9e8">
    <nav class="navbarLong">
        <a href="about.php">Home</a>
        <a href="book.php">book</a>
        <a href="package.php">package</a>
        <a href="Projects.php">Projects</a>
        <a href="contact.php">contact</a>
    </nav>
    
    <!-- Mobile icon-menu --->
    <div id="menu-btn2" class="fas fa-bars"></div>
   
</section>
<div>
    <div style="border-bottom:.5rem solid #000;width:80%">
    </div>
</div>
<!----- header section ends ------>

<!---- Home section starts ---->

<section class="home" style="background: #002b4f">
    <div class="home-slider">
        <div class="w">
            <div class="slide">
                <div class="content">
                    <span>Explore, discover</span>
                    <h3>Discover the power of technologies</h3>
                    <a href="#" class="btn">Know more</a>
                </div>
            </div>

            <div class="slide">
                <div class="content">
                    <span>Explore, discover</span>
                    <h3>Discover the power of technologies</h3>
                    <a href="#" class="btn">Know more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--- Home section ends ---->

<!-- service section starts -->

<section class="services">
    <h1 class="heading-title">Our services</h1>

    <div class="box-container">
        <div class="box">
            <img src="assets/images/app-development-illustration_52683-47743-removebg-preview.png" alt="" srcset="">
            <h3>Software Development</h3>
        </div>

        <div class="box">
            <img src="assets/images/computer-technician-with-wrench-repairing-computer-screen-with-gears-computer-service-laptop-repair-center-notebook-setup-service-concept-bright-vibrant-violet-isolated-illustration_335657-952-removeb.png" alt="" srcset="">
            <h3>Professional Courses</h3>
        </div>

        <div class="box">
            <img src="assets/images/social-traffic-manager-removebg-preview.png" alt="" srcset="">
            <h3>Traffic Manager</h3>
        </div>

        <div class="box">
            <img src="assets/images/how_to_create_software_installation_guide-removebg-preview.png" alt="" srcset="">
            <h3>Instalation of Sale Application </h3>
        </div>

    </div>
</section>
<!--- service section ends --->


<!-- footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3 >Quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About us</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="Projects.php"><i class="fas fa-angle-right"></i>Projects</a>
        </div>
        <div class="box">
            <h3>User links</h3>
            <a href="about.php"><i class="fas fa-angle-right"></i> Login</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Register</a>
        </div> 
        
        <div class="box">
            <h3>Contact links</h3>
            <a href="#"><i class="fas fa-angle-phone"></i> +351 933 44 35 06</a>
            <a href="#"><i class="fas fa-angle-envelope"></i>rocketmc2009@gmail.com</a>
            <a href="#"><i class="fas fa-angle-map"></i>Porto, Portugal - Rua do 
            Breiner 401, 4050 - 127. </a>
        </div>

        <div class="box">
            <h3>Follow me</h3>

            <a target="_blank" href="https://www.linkedin.com/in/laurindo-benjamim-966752a7"><i class="fa fa-linkedin"></i>LINKEDIN</a>
            <a target="_blank" href="https://github.com/adolfosucumula/"><i class="fas fa-github"></i>GitHub</a>
            <a target="_blank" href="#"><i class="fas fa-facebook"></i>Facebook</a>
            <a target="_blank" href="#"><i class="fas fa-youtube"></i>Youtube</a>
        </div>
    </div>

    <div class="credit">Created by <span>Mr. Laurindo Benjamim</span> | all rights reserved!</div>
</section>
<!-- footer section end -->

<!---- Swiper js file link --->

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!------ custom javascript file link ------>
<script src="assets/js/script.js"></script>
</body>
</html>