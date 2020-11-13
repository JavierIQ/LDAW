<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
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



    </style>
  </head>

  @include("navbarlogin")



  <body>

   

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