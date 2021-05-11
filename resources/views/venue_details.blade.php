<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event Venue</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <!-- Styles -->
       

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

        .map {
        position: relative;
        padding-bottom: 75%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
        }
        .map iframe{
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important;
        }

        .own_pic{
          height: 13rem;
        }
        @media  only screen and (max-width:480px) {
          
          .own_pic{
            height:70%;
          }


          
        </style>
    </head>
    <body class="antialiased">
      <div class="container">

        <div class="col-md-12 row" style="background: #99ffe3;">
            <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container-fluid">
                    <a class="navbar-brand" href="/"><b>Event Venue</b></a>
                
                    </div>
                </nav>
            </div>      
    </div>
    




 <div class="col text-center d-flex justify-content-center">
   <div class="card shadow-lg p-1 mb-5 bg-body rounded rounded-3 m-5 " style="width: 25rem;">
    {{-- @foreach($venue_list as $key => $vl) --}}

    <img class="img-thumbnail own_pic" src="{{$venue_list->website}}">
        <div class="card-body">
            <h4 class="card-title">Location :{{$venue_list->surname}}</h4>
            <p class="card-text">description :{{$venue_list->road}}</p>
            <h4 class="card-title">Offer Price :{{$venue_list->place}}</h4>
            </div>
          
            
            <div class="card-footer text-center">
            <div class="map">
                <iframe src="{{$venue_list->map}}" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                {{-- {{$venue_list->map}} --}}

            </div>
            <a class="btn btn-warning text-white" href ="/home">back Home</a>
            </div>
        </div>

        {{-- @endforeach --}}
     </div>

    </div>



    </body>
</html>
