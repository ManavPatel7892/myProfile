<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/owl.theme.default.min.css">
    <link rel="icon" href="images/fav.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Nunito:400,700" rel="stylesheet">
    <link rel="stylesheet" href="lib/animate.css">
    <title>Manav | Portfolio Template</title>
    <!-- loader style -->
    <style>
    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: transparent;
        z-index: 99999;
    }

    .preloader:before,
    .preloader:after {
      content: "";
      position: absolute;
      width: 100%;
      height: 50%;
      background-color: #000;
      transition: transform 0.5s ease, opacity 0.5s ease; /* Changed transition properties */
      opacity: 1; /* Start with full opacity */
    }

    .preloader:before {
      bottom: 0;
    }

    .preloader:after {
      top: 0;
    }

    .preloader.complete:before {
      transform: translateY(100%); /* Slide out the bottom pseudo-element */
      opacity: 0; /* Fade out */
    }

    .preloader.complete:after {
      transform: translateY(-100%); /* Slide out the top pseudo-element */
      opacity: 0; /* Fade out */
    }

    .preloader.complete {
      visibility: hidden;
    }

    .circle {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 120px;
      height: 120px;
      border-radius: 50%;
      border: 10px solid rgba(255, 255, 255, 0.1);
      border-top: 10px solid #ee8683;
      animation: animate 1.5s infinite linear;
      z-index: 99999;
    }

    @keyframes animate {
      0% {
        transform: translate(-50%, -50%) rotate(0deg);
      }
      100% {
        transform: translate(-50%, -50%) rotate(360deg);
      }
    }
    </style>
</head>

<body>
    <div class="preloader">
        <div class="circle"></div>
    </div>

    <nav class="navbar navbar-expand-md  sticky  fixed-top r-nav">
        <div class="container">

            <a class="navbar-brand animated fadeInLeft" href="profile.php">Manav</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarId">
                <span><i class="fas fa-bars hamburger"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarId">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item animated fadeInRight">
                        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item animated fadeInRight">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item animated fadeInRight">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <!-- <li class="nav-item animated fadeInRight">
            <a class="nav-link" href="#testimony">Client</a>
          </li> -->
                    <li class="nav-item animated fadeInRight">
                        <a class="nav-link" href="#work">Portfolio</a>
                    </li>
                    <li class="nav-item animated fadeInRight">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>