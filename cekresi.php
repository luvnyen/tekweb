<?php
require 'phps/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-store" />

    <meta name="description" content="Andre Cepat">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" /> -->

    <title>Cek Resi</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- For apple devices -->
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- lib -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- jquery confirm -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700,800');
    @import url('https://fonts.googleapis.com/css?family=Lobster');

    html {
        font-size: 62.5%;
        scroll-behavior: smooth !important;
    }

    body {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.6rem;
        font-weight: 400;
    }

    h1 {
        margin-bottom: 0.5em;
        font-size: 3.6rem;
    }

    p {
        margin-bottom: 0.5em;
        font-size: 1.6rem;
        line-height: 1.6;
    }

    .button {
        display: inline-block;
        margin-top: 20px;
        padding: 8px 25px;
        border-radius: 4px;
    }

    .button-primary {
        position: relative;
        border: 0;
        background-color: #f58a42;
        color: #fff;
        font-size: 1.8rem;
        font-weight: 700;
        transition: color 0.3s ease-in;
        z-index: 1;
    }

    .button-primary:hover {
        color: #f58a42;
        text-decoration: none;
    }

    .button-primary::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        background-color: #fff;
        border-radius: 4px;
        opacity: 0;
        -webkit-transform: scaleX(0.8);
        -ms-transform: scaleX(0.8);
        transform: scaleX(0.8);
        transition: all 0.3s ease-in;
        z-index: -1;
    }

    .button-primary:hover::after {
        opacity: 1;
        -webkit-transform: scaleX(1);
        -ms-transform: scaleX(1);
        transform: scaleX(1);
    }

    .overlay::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        background-color: rgba(0, 0, 0, .3);
    }

    .header-area {
        position: relative;
        height: 100vh;
        /* background: #5bc0de; */
        background-image: url("assets/background.jpg");
        background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .banner {
        display: flex;
        align-items: center;
        position: relative;
        height: 100%;
        color: #fff;
        text-align: center;
        z-index: 1;
    }

    .banner h1 {
        font-weight: 800;
    }

    .banner p {
        font-weight: 700;
    }

    .navbar {
        position: absolute;
        left: 0;
        top: 0;
        padding: 0;
        width: 100%;
        transition: background 0.6s ease-in;
        z-index: 99999;
    }

    .navbar .navbar-brand {
        font-family: 'Arial', cursive;
        font-size: 2.5rem;
    }

    .navbar .navbar-toggler {
        position: relative;
        height: 50px;
        width: 50px;
        border: none;
        cursor: pointer;
        outline: none;
    }

    .navbar .navbar-toggler .menu-icon-bar {
        position: absolute;
        left: 15px;
        right: 15px;
        height: 2px;
        background-color: #fff;
        opacity: 0;
        -webkit-transform: translateY(-1px);
        -ms-transform: translateY(-1px);
        transform: translateY(-1px);
        transition: all 0.3s ease-in;
    }

    .navbar .navbar-toggler .menu-icon-bar:first-child {
        opacity: 1;
        -webkit-transform: translateY(-1px) rotate(45deg);
        -ms-sform: translateY(-1px) rotate(45deg);
        transform: translateY(-1px) rotate(45deg);
    }

    .navbar .navbar-toggler .menu-icon-bar:last-child {
        opacity: 1;
        -webkit-transform: translateY(-1px) rotate(135deg);
        -ms-sform: translateY(-1px) rotate(135deg);
        transform: translateY(-1px) rotate(135deg);
    }

    .navbar .navbar-toggler.collapsed .menu-icon-bar {
        opacity: 1;
    }

    .navbar .navbar-toggler.collapsed .menu-icon-bar:first-child {
        -webkit-transform: translateY(-7px) rotate(0);
        -ms-sform: translateY(-7px) rotate(0);
        transform: translateY(-7px) rotate(0);
    }

    .navbar .navbar-toggler.collapsed .menu-icon-bar:last-child {
        -webkit-transform: translateY(5px) rotate(0);
        -ms-sform: translateY(5px) rotate(0);
        transform: translateY(5px) rotate(0);
    }

    .navbar-dark .navbar-nav .nav-link {
        position: relative;
        color: #fff;
        font-size: 1.6rem;
    }

    .navbar-dark .navbar-nav .nav-link:focus,
    .navbar-dark .navbar-nav .nav-link:hover {
        color: #fff;
    }

    .navbar .dropdown-menu {
        padding: 0;
        background-color: rgba(0, 0, 0, .9);
    }

    .navbar .dropdown-menu .dropdown-item {
        position: relative;
        padding: 10px 20px;
        color: #fff;
        font-size: 1.4rem;
        border-bottom: 1px solid rgba(255, 255, 255, .1);
        transition: color 0.2s ease-in;
    }

    .navbar .dropdown-menu .dropdown-item:last-child {
        border-bottom: none;
    }

    .navbar .dropdown-menu .dropdown-item:hover {
        background: transparent;
        color: #c0ca33;
    }

    .navbar .dropdown-menu .dropdown-item::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        top: 0;
        width: 5px;
        background-color: #c0ca33;
        opacity: 0;
        transition: opacity 0.2s ease-in;
    }

    .navbar .dropdown-menu .dropdown-item:hover::before {
        opacity: 1;
    }

    .navbar.fixed-top {
        position: fixed;
        -webkit-animation: navbar-animation 0.6s;
        animation: navbar-animation 0.6s;
        background-color: rgba(0, 0, 0, .9);
    }

    .navbar.fixed-top.navbar-dark .navbar-nav .nav-link.active {
        color: #c0ca33;
    }

    .navbar.fixed-top.navbar-dark .navbar-nav .nav-link::after {
        background-color: #c0ca33;
    }

    .content {
        padding: 120px 0;
    }

    @media screen and (max-width: 768px) {
        .navbar-brand {
            margin-left: 20px;
        }

        .navbar-nav {
            padding: 0 20px;
            background-color: rgba(0, 0, 0, .9);
        }

        .navbar.fixed-top .navbar-nav {
            background: transparent;
        }
    }

    @media screen and (min-width: 767px) {
        .banner {
            padding: 0 150px;
        }

        .banner h1 {
            font-size: 5rem;
        }

        .banner p {
            font-size: 2rem;
        }

        .navbar-dark .navbar-nav .nav-link {
            padding: 23px 15px;
        }

        .navbar-dark .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 15px;
            left: 30%;
            right: 30%;
            height: 1px;
            background-color: #fff;
            -webkit-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            transition: transform 0.1s ease-in;
        }

        .navbar-dark .navbar-nav .nav-link:hover::after {
            -webkit-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
        }

        .dropdown-menu {
            min-width: 200px;
            -webkit-animation: dropdown-animation 0.3s;
            animation: dropdown-animation 0.3s;
            -webkit-transform-origin: top;
            -ms-transform-origin: top;
            transform-origin: top;
        }
    }

    @-webkit-keyframes navbar-animation {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            transform: translateY(-100%);
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }
    }

    @keyframes navbar-animation {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            transform: translateY(-100%);
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }
    }

    @-webkit-keyframes dropdown-animation {
        0% {
            -webkit-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
        }

        75% {
            -webkit-transform: scaleY(1.1);
            -ms-transform: scaleY(1.1);
            transform: scaleY(1.1);
        }

        100% {
            -webkit-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
        }
    }

    @keyframes dropdown-animation {
        0% {
            -webkit-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
        }

        75% {
            -webkit-transform: scaleY(1.1);
            -ms-transform: scaleY(1.1);
            transform: scaleY(1.1);
        }

        100% {
            -webkit-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
        }
    }
</style>

<script>
    jQuery(function($) {
        $(window).on('scroll', function() {
            if ($(this).scrollTop() >= 200) {
                $('.navbar').addClass('fixed-top');
            } else if ($(this).scrollTop() == 0) {
                $('.navbar').removeClass('fixed-top');
            }
        });

        function adjustNav() {
            var winWidth = $(window).width(),
                dropdown = $('.dropdown'),
                dropdownMenu = $('.dropdown-menu');

            if (winWidth >= 768) {
                dropdown.on('mouseenter', function() {
                    $(this).addClass('show')
                        .children(dropdownMenu).addClass('show');
                });

                dropdown.on('mouseleave', function() {
                    $(this).removeClass('show')
                        .children(dropdownMenu).removeClass('show');
                });
            } else {
                dropdown.off('mouseenter mouseleave');
            }
        }

        $(window).on('resize', adjustNav);

        adjustNav();
    });

    function cekresi() {
        $.confirm({
            title: 'Cek Resi <i class="fas fa-map-marker-alt"></i>',
            type: 'orange',
            typeAnimated: true,
            theme: 'modern',
            columnClass: "col-md-5",
            buttons: {
                confirm: {
                    text: 'Lacak',
                    btnClass: 'btn-green',
                    action: function() {
                        $.ajax({
                            url: "",
                            method: "POST",
                            data: {

                            },
                            success: function(res) {
                                window.location.href = "./terima.php";
                            }
                        });
                    }
                },
                cancel: {
                    text: 'Cancel',
                    btnClass: 'btn-red',
                    action: function() {}
                }
            },
            content: '' +
                '<form id="myForm" action="phps/uploadhasil.php" method="POST" enctype="multipart/form-data">' +
                '<div class="form-group">' +
                '<label for="resi" style="font-size: 12pt;"><b>Input Resi</b></label>' +
                '<input type="text" class="form-control" id="resi" name="resi" style="font-size: 24pt; height: 50px; text-align: center;" required>' +
                '</div>' +
                '</form>'
        });
    }
</script>

<body>
    <header class="header-area overlay">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a href="index.php" class="navbar-brand"><img src="assets/logo.png" alt="andrecepat" style="width:170px;"></a>

                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                </button>

                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li><a href="index.php" class="nav-item nav-link">Home</a></li>
                        <li><a href="#content" class="nav-item nav-link">About Us</a></li>
                        <li><a href="#services" class="nav-item nav-link">Services</a></li>
                        <li><a href="cekresi.php" class="nav-item nav-link">Cek Resi</a></li>
                        <li><a href="cekongkir.php" class="nav-item nav-link">Cek Ongkir</a></li>
                        <li><a href="#contactus" class="nav-item nav-link">Contact Us</a></li>
                        <li><a href="#" class="nav-item nav-link">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="banner">
            <div class="container">
                <h1>CEK RESI</h1>
                <p>Express your online business!</p>
                <button class="button button-primary" onclick="cekresi()">Click Here</button>
            </div>
        </div>
    </header>

    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark" id="contactus">

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">ANDRE CEPAT EXPRESS</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                        consectetur
                        adipisicing elit.</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">PAGE</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#">Home</a>
                    </p>
                    <p>
                        <a href="#content">About Us</a>
                    </p>
                    <p>
                        <a href="#services">Services</a>
                    </p>
                    <p>
                        <a href="cekresi.php">Cek Resi</a>
                    </p>
                    <p>
                        <a href="cekongkir.php">Cek Ongkir</a>
                    </p>
                    <p>
                        <a href="#contactus">Contact Us</a>
                    </p>
                    <p>
                        <a href="#">Login</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Your Account</a>
                    </p>
                    <p>
                        <a href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!">Hel</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact Us</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i>Universitas Kristen Petra</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>info@example.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>+ 01 234 567 88</p>
                    <p>
                        <i class="fas fa-print mr-3"></i>+ 01 234 567 89</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 PT Andre Cepat Express. All rights reserved.
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->