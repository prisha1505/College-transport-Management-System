<?php
    include('db.php');
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- custom stylesheet -->
    <link rel="stylesheet" href="nsps.css">
    <link rel="stylesheet" href="resposive.css">
    <link rel="shortcut icon" href="/G:/coding/wensite/favicon.ico" type="image/x-icon" />
    <title>college Transport Management System</title>
   
</head>

<body id="top">
    
    <!-- header area start -->
    <div class="header">
        <div class="navbar">
            <div class="logo">
                <h1><center>Poornima Group of College</center></h1>
    
                <img src="logo.png" class="hello">
               
                
            </div>
            <ul class="menu-items">
                
                <li><a href="login.php">Sign-up/Log-in</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="aboutus.html">About Us</a></li>
               
                <li><a href="co.html">Contact Us</a></li>
                <li class="explore-btn"><a href="#">Explore</a></li>
            </ul>
        </div>
    </div>

    <div class="nav-toggler">
        <div class="toggle-bar"></div>
    </div>
    <!-- header area end -->



    <!-- home area start -->
    <h1><center>College Transport Management System</center></h1>
    <div class="container" id="home">
        <div class="text-side" data-aos="fade-right">
            <div class="title">
                <h1>Online Transport Management</h1>
            </div>
            <div class="details">
                <p>This college transport management website is proposed for using the college transport services in an easy and
                    efficient way. It has three modules namely, Transport Incharge, Service Coordinators, and User. Transport
                    Incharge can log in and can add pickup locations, assign service Coordinators by creating login credentials, add
                    price details for the particular location, manages activity, and view the details of all pickup/drop locations.
                    Service Coordinators assigned by the Transport Incharge would be different for different locations. Service
                    Coordinators will get login credentials from Transport Incharge, he/she can log in using credentials, he/she can
                    check the plans, view the request for transport facility booking for the respective location, can accept a
                    booking, generate a slip, and can view the booking history. Users can check the availability of the pickup/drop
                    location, view timings, fill in personal details, can pay by providing bank details or card details and he/she can
                    also see view previous booking history if any.
                    </p>
            </div>
            <div class="buttons">
                <a href="#">Start Now</a>
                <a href="#">Explore</a>
            </div>
        </div>
        <div class="image-side" data-aos="fade-left">
            <img src="piet.webp" alt="home-img">
        </div>
    </div>
    <!-- home area end -->



    <!-- service area start -->
    <div class="container" id="services">
        <div class="image-side" data-aos="fade-right">
            <img src="buses.png" alt="services">
        </div>
        <div class="text-side" data-aos="fade-right" data-aos-delay="600">
            <div class="title">
                <h1>Best Service with the Help of this Software</h1>
            </div>
            <div class="details">
                <p>The prime moto of this project is to help students and faculty members by collectively summarizing all
                    the college transport data under one roof so as to increase the ease of use and accessibility. This would allow
                    them to check their transportation plan and edit it accordingly. The prime motto of this project is to help
                    students and faculty members by collectively summarizing all the college transport data under one roof so as
                    to increase the ease of use and accessibility. This would allow them to check their transportation plan and edit
                    it accordingly</p>
            </div>
            <div class="buttons">
                <a href="#">Explore</a>
            </div>
        </div>
    </div>
    <!-- service area end -->



    <!-- pricing area start -->
    <div class="container" id="pricing">
        <div class="text-side" data-aos="fade-left" data-aos-delay="600">
            <div class="title">
                <h1>Sign-up now and Start your Journey</h1>
                <h2>Please follow these Steps</h2>
            </div>
            <div class="details">
                <p> -Go to the Naviagtion Bar at the top of the Page</br>
                    -Click on the <a href="login.html">Sign-up/Log-in</a></br>
                    -Enter your Details</br>
                    -And then Click on the Submit button</button>
                
                </p>
            </div>
            <div class="buttons">
                <a href="#">Explore</a>
            </div>
        </div>
        <div class="image-side" data-aos="fade-left">
            <img src="pricing.svg" alt="home-img">
        </div>
    </div>
    <!-- pricing area end -->



    <!-- support area start -->
    <div class="container" id="support">
        <div class="image-side" data-aos="zoom-in">
            <img src="support.svg" alt="services">
        </div>
        <div class="text-side" data-aos="zoom-in">
            <div class="title">
                <h1>Our team is always with you to solve your problem</h1>
            </div>
            <div class="details">
                <p>Write your Query in Contact Section with required details</p>
            </div>
            <div class="buttons">
                <a href="#">Explore</a>
            </div>
        </div>
    </div>
    <!-- support area end -->



    <!-- contact area start -->
    <div class="container" id="contact">
        <div class="text-side" data-aos="fade-right">
            <div class="title">
                <h1>Feel free to contact with us at any time</h1>
            </div>
            <div class="details">
                <p></p>
            </div>
            <div class="buttons">
                <a href="#">Explore</a>
            </div>
        </div>
        <div class="image-side" data-aos="fade-left">
            <img src="contact.svg" alt="home-img">
        </div>
    </div>
    <!-- contact area end -->



    <!-- scroll top button -->
    <a href="#top" class="scroll-top-btn">
        <span class="icon-angle-up"></span>
    </a>

    <!-- footer -->
    <footer>
        <p>Created By <a href="">© 2023. All Rights Reserved.</a> | &copy;
            </span>
    </footer>

    <!-- aos cdn link -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- custom js -->
    <script src="script.js"></script>

</body>

</html>