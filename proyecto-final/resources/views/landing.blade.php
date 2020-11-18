<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{url('css/slicknav.css')}}">
	<link rel="stylesheet" href="{{url('css/flaticon.css')}}">
	<link rel="stylesheet" href="{{url('css/animate.min.css')}}">
	<link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{url('css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{url('css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{url('css/slick.css')}}">
	<link rel="stylesheet" href="{{url('css/nice-select.css')}}">
    <title>Sistema</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Dancing+Script&display=swap');
        .header {
            border-bottom: 2px solid #00c9b7;
            margin-top: 20px !important;
            margin-bottom: 20px !important;
            font-family: 'Dancing Script', cursive;
            font-size: 20px !important;
        }
        .header-container {
            margin-right: 0px !important;
            margin-left: 0px !important;
        }
        .header-container > h2 {

        }
        .bg-light {

            background: #00c9b7 !important;
            -webkit-box-shadow: 5px 9px 43px 1px rgba(0,0,0,0.18); 
            box-shadow: 5px 9px 43px 1px rgba(0,0,0,0.18);
            position: sticky;
            top: 0px;
            z-index: 10;
        }
        .bg-light > a {
            color: #fff !important;
        }
        .navbar-nav > a {
            color: #fff !important;
        }
        .navbar-nav > a:hover {
            text-decoration: underline;
        }
        img {
            height: 400px;
            vertical-align: middle;
            border-style: none;
        }
        body {
            background : #eee ;
        }
        .card {
            border : none !important;
            border-bottom: 3px solid #00c9b7 !important;
        }
        input[type=text] {

            background : #eee ;
            border: none !important;
            box-shadow: 0px 1px 1px #ddd !important;
            autocomplete: off;
        }
        input[type=text]:focus{
            background : #eee ;
            border: none !important;
            box-shadow: 0px 4px 5px #ccc !important;
        }
        .thead-light {

        }
        .table .thead-light th {
            color : #fff !important;
            background: #00c9b7 !important;
            border: none !important;
        }
        footer {
            height: 10px;
            width: 100%;
            margin-top: 60px;
            background:#00c9b7 ;
        }

        @media (max-width: 767px) {
        
           #imagen-seccion{
                width: 100%;
            }
        }



    </style>
  </head>

  @include("navbarlogin")



  <body>
    <div class="slider-area " style= "background: url(/img/fondo_landing.jpg) no-repeat center center fixed;background-size:cover;">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center" style = "height: 550px;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 col-md-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s" style = "color:white;">Cambio Game</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" style = "color:white;" >Publica tu juego</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s" style = "color:white;">¡Tenemos miles de juegos para intercambios, visitanos!</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                    <a href="/login" class="btn hero-btn" style = "color:white;">Registrate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
           
        </div>
    </div>

    <div class="categories-area section-padding30" style = "padding-top: 100px;padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70">
                        <h2>Empieza el intercambio</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <i class="fa fa-cloud" style="font-size: 50px;margin-bottom: 10px"></i>
                        </div>
                        <div class="cat-cap">
                            <h5><a >Busca tu juego favorito</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <i class="fas fa-building" style="font-size: 50px;margin-bottom: 10px;"></i>
                        </div>
                        <div class="cat-cap">
                            <h5><a >Selecciona el juego de intercambio</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-4">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <i class="fas fa-plane" style="font-size: 50px;margin-bottom: 10px;"></i>
                        </div>
                        <div class="cat-cap">
                            <h5><a>Manda la solicitud</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-4">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <i class="fas fa-cube" style="font-size: 50px;margin-bottom: 10px;"></i>
                        </div>
                        <div class="cat-cap">
                            <h5><a>Juego intercambiado!</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="support-company-area pt-100 pb-100 section-bg fix" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img" style="">
                        <img  id= "imagen-seccion" src="/img/fondo_inicio.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-50">
                            <h2>Unete a la comunidad gaming mas grande de México</h2>
                        </div>
                        <div class="support-caption">
                            <p class="pera-top">Nos encargamos de que tu juego llegue seguro y a tiempo a tu casa</p>
                            <a href="/login" class="btn post-btn">Iniciar Busqueda</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer>
        <!--? Footer Start-->
        <div class="footer-area section-bg" style="background: url(/img/fondo_landing.jpg) no-repeat center center fixed;background-size:cover;width:100%">
            <div class="container">
                <div class="footer-top footer-padding">
                    <div class="row d-flex justify-content-between">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-tittle">
                                    <h4 style="color:white">Contacto </h4>
                                    <div class="footer-pera">
                                        <p class="info1"  style="color:white">Recibe información sobre nuestros servicios </p>
                                    </div>
                                </div>
                                <div class="footer-number">
                                    <h4  style="color:white"><span>+521 </span>55 5068 1644</h4>
                                    <p  style="color:white">contacto@progamers.com</p>
                                </div>
                            </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>