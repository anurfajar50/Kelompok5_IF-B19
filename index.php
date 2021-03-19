<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>FOTOGRAPHIE</title>

</head>
<body data-spy="scroll" data-target="#navbar">
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <a class="navbar-brand" href="#">FOTOGRAPHIE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" href="#" >Login</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <section id="home">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/01.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/02.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/03.jpg" class="d-block w-100" alt="...">
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

    <section id="news" class="parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h1>News Foto</h1>
                    <br>
                </div>
                <div class="row gallery-feed">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/01.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/02.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/animal.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/nature (17).jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/04.jpg">
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <img class="img-responsive" src="img/nature (10).jpg">
                    </div>
                </div>
            </div>
        </div>    
    </section>

    <section id="gallery" class="parallax2">
        <div class="container">
            <!-- Button trigger modal -->
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h1>Gallery</h1>
                    <br>
                </div>
                <div class="row gallery-feed1">
                    <div class="col-md-4">
                        <a href="" data-toggle="modal" data-target="#modalnature">
                            <img class="img-responsive" src="img/nature (1).jpg">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="" data-toggle="modal" data-target="#modalanimal">
                            <img class="img-responsive" src="img/animal (3).jpg">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="" data-toggle="modal" data-target="#modalcity">
                            <img class="img-responsive" src="img/city (5).jpg">
                        </a>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" style="height: 650px;" id="modalnature" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" style="width: 100%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nature</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="row gallery-feed">
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/nature (13).jpg">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/nature (21).jpg">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/nature (18).jpg">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/animal.jpg">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/nature (17).jpg">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/04.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" style="height: 650px;" id="modalanimal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" style="width: 100%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Animal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="row gallery-feed">
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/animal (15).jpg">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/animal (4).jpg">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/animal (14).jpg">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/animal (2).jpg">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/animal (16).jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" style="height: 650px;" id="modalcity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" style="width: 100%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">City Escape</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="row gallery-feed">
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/city (1).jpg">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/city (3).jpg">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/city (4).jpg">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/city (6).jpg">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/city (7).jpg">
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <img class="img-responsive" src="img/city (8).jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" parallax3>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h1>About</h1>
                    <br>
                    <div class="container-fluid">
                        <div class="mx-auto text-center">
                                <h2>Who Are We?</h2>
                                <ul class="gallery text-center">
                                <p>Kita adalah Mahasiswa Universitas Suryakancana, Fakultas Teknik, Program Study Informatika, kita semua suka sekali dengan photograpy, itu lah yang membuat kami membuat web dengan tema photography</p>
                                <li>
                                    <a href="#gambar-1">
                                    <img src="img/DSC.jpg" alt="Fajar">
                                    <span>Fajar</span>
                                    </a>
                                    <div class="overlay" id="gambar-1">
                                        <a href="#about" class="close">X</a>
                                    <img src="img/DSC02128.jpg" alt="">
                                    </div>
                                </li>

                                <li>
                                    <a href="#gambar-1">
                                    <img src="img/DSC.jpg" alt="Fajar">
                                    <span>Fajar</span>
                                    </a>
                                    <div class="overlay" id="gambar-1">
                                        <a href="#about" class="close">X</a>
                                    <img src="img/DSC02128.jpg" alt="">
                                    </div>
                                </li>

                                <li>
                                    <a href="#gambar-1">
                                    <img src="img/DSC.jpg" alt="Fajar">
                                    <span>Fajar</span>
                                    </a>
                                    <div class="overlay" id="gambar-1">
                                        <a href="#about" class="close">X</a>
                                    <img src="img/DSC02128.jpg" alt="">
                                    </div>
                                </li>
                                <div class="clear"></div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" parallax4>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h1>Contact</h1>
                    <br>
                    <form>
                        <div class="mb-3 text-left">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Input Your Name!</div>
                        </div>
                        <div class="mb-3 text-left">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Input Your Email Address!</div>
                        </div>
                        <div class="mb-3 text-left">
                            <label for="exampleInputEmail1" class="form-label">Massage</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">How Can We Help?</div>
                        </div>
                        <div class="mb-3 form-check text-left">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary text-left">Submit Form</button>
                    </form>
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