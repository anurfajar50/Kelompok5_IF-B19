<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    /* Navbar */
    .navbar-nav {
        padding-right: 100px;
    }
    .nav-item {
        padding-right: 25px;
    }
    .bg-light {
        background-color: rgba(0,0,0,0) !important;
    }
    .bg-nontrans {
        background-color: rgba(255,255,255,1) !important;
    }

    @media screen and (max-width: 575px){
        .bg-light {
            background-color: rgba(255,255,255,1) !important;
        }
        #home {
            margin-top: 55px;
        }
    }
    /* CAROUSEL */
    #myCarousel {
        height: 100vh;
    }
    .carousel-item img {
        height: 100vh;
    }
    /* section */
    section {
        padding-top : 50px;
        padding-bottom : 50px;
    }

    #home {
        padding-top : 0px;
        padding-bottom : 0px;
    }
    #about, #gallery, #contact {
        height: 700px;
    }
    /* Scroll effect */
    html {
        scroll-behavior: smooth;
    }

    /* .buttom */
    .btn-primary-custom{
        background-color: red;
    }

    /* PARALLAX */
    .parallax {
        background-image: url('img/01.png');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .parallax2 {
        background-image: url('img/02.png');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .parallax3 {
        background-image: url('img/03.png');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
  </head>
  <body data-spy="scroll" data-target="#navbar">
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
            </li>
        </div>
        </nav>

        <section id="home">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/03.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="  img/02.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/01.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section id="about" class="bg-secondary parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                <h1>This is About Page</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit consectetur labore incidunt, dignissimos illum temporibus placeat ratione nam odio ad molestias dolorem atque impedit maiores suscipit praesentium officiis itaque adipisci.</p>
                
                <br><br>
                <button type="button" class="btn btn-primary btn-primary-custom btn-lg">This is Button</button>
                </div>
            </div>
        </div>
        </section>

        <section id="gallery" class="bg-success parallax2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                <h1>This is Gallery Page</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit consectetur labore incidunt, dignissimos illum temporibus placeat ratione nam odio ad molestias dolorem atque impedit maiores suscipit praesentium officiis itaque adipisci.</p>
                
                <br><br>
                <button type="button" class="btn btn-primary btn-lg">This is Button</button>
                </div>
            </div>
        </div>
        </section>

        <section id="contact" class="bg-warning parallax3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                <h1>This is Contact Page</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit consectetur labore incidunt, dignissimos illum temporibus placeat ratione nam odio ad molestias dolorem atque impedit maiores suscipit praesentium officiis itaque adipisci.</p>
                
                <br><br>
                <button type="button" class="btn btn-primary btn-lg">This is Button</button>
                </div>
            </div>
        </div>
        </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
        $(document).scroll(function(){
            if ($(window).scrollTop() > 50) {
                $('#navbar').removeClass('bg-light').addClass('bg-nontrans');
            } else if($(window).scrollTop() <= 50){
                $('#navbar').removeClass('bg-nontrans').addClass('bg-light');
            }
        });
    </script>

  </body>
</html>