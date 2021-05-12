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

        
        <nav class="navbar navbar-expand-lg navbar-light badge-warning mt-3">
          <a class="navbar-brand" href="/"><img src="https://data.q2e.at/cdn/images/logo-with-slogan-375x115.png"
                       alt="Logo von Q2E Online-Agentur"
                       height="36"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
         
            <li class="nav-item">
              <a class="nav-link" href="{{route('venue_list')}}">{{__('venue_details.venues')}}</a>
      
            
            </li>
            <li class="nav-item">
              <a class="nav-link "href="{{url('event_list')}}">{{__('venue_details.events')}}</a>
            </li>
          </ul>




          <div class="col-md-4">
                  <div class="dropdown">
                      <button class="btn btn-warning dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{__('venue_details.language')}}
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="{{url('/switch/de')}}">Germany</a>
                          <a class="dropdown-item" href="{{url('/switch/en')}}">English</a>
                      </div>
                      </div>
                  </div>



          
        </div>
      </nav>
    




 <div class="col text-center d-flex justify-content-center">
   <div class="card shadow-lg p-1 mb-5 bg-body rounded rounded-3 m-5 " style="width: 25rem;">
    
    <img class="img-thumbnail own_pic" src="{{$venue_list->website}}">
        
          

            <div class="card-body">
            <h5 class="card-title">{{__('venue_details.location')}}:<span>{{$venue_list->surname}}</span> </h5>
            <h5 class="card-text">{{__('venue_details.address')}}:<span>{{$venue_list->road}} {{$venue_list->house_no}}</span></h5>
            <h4 class="card-title">{{__('venue_details.zip')}} :<span>{{$venue_list->place}}-{{$venue_list->post_code}}</span></h4>
            <h5 class="card-text">{{__('venue_details.contactE')}} :<span>{{$venue_list->email}}</span></h5>
            <h5 class="card-text">{{__('venue_details.contactP')}} :<span>{{$venue_list->phone}}</span></h5>
            <h6 class="card-text">{{__('venue_details.bookable')}} :<span>{{$venue_list->bookable}}</span></h6>
            <h4 class="card-text">{{__('venue_details.country')}} :<span>{{$venue_list->country}}</span></h4>
            <h5 class="card-text">{{__('venue_details.owner')}} : <span>{{$venue_list->owner}}</span></h5>
            </div>









            
            <div class="card-footer text-center">
            <div class="map">
                <iframe src="{{$venue_list->map}}" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                

            </div>
            <a class="btn btn-warning text-white" href ="/home">{{__('venue_details.backH')}}</a>
            </div>
        </div>


     </div>

    </div>



    </body>
</html>
