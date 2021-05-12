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

          .own_pic{
          height: 13rem;
        }
         @media only screen and (max-width:480px) {  
         .own_pic{
            height:70%;
          }
        </style>

    </head>
    <body>
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
        <a class="nav-link" href="{{route('venue_list')}}"> {{__('homepage.venues')}}</a>

      
      </li>
      <li class="nav-item">
        <a class="nav-link "href="{{url('event_list')}}"> {{__('homepage.events')}}</a>
      </li>
    </ul>



            <div class="col-md-4">
                  <div class="dropdown">
                      <button class="btn btn-warning dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{__('homepage.language')}}
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="{{url('/switch/de')}}">Germany</a>
                          <a class="dropdown-item" href="{{url('/switch/en')}}">English</a>
                      </div>
                      </div>
                  </div>
    
  </div>
</nav>



  <div class="container manageProduct w-100">   
     

    <div class='m-3'>
 
<div class="row row-cols-1 row-cols-md-2 justify-content-center row-cols-lg-3 g-3">
  
  @foreach($venue_list as $key => $vl)



  <div class="col own_col mt-4">
    <div class="card shadow-lg p-1 mb-5 bg-body rounded w-100 h-100 rounded-3 " style="width: 18rem;">
    <img class="img-thumbnail own_pic" src="{{$vl->website}}">
        <div class="card-body">
            <h5 class="card-title">{{__('homepage.location')}}:<span>{{$vl->surname}}</span> </h5>
            <h5 class="card-text">{{__('homepage.address')}}:<span>{{$vl->road}} {{$vl->house_no}}</span></h5>
            <h4 class="card-title">{{__('homepage.zip')}} :<span>{{$vl->place}}-{{$vl->post_code}}</span></h4>
            <h5 class="card-text">{{__('homepage.contactE')}} :<span>{{$vl->email}}</span></h5>
            <h5 class="card-text">{{__('homepage.contactP')}} :<span>{{$vl->phone}}</span></h5>
            <h6 class="card-text">{{__('homepage.bookable')}} :<span>{{$vl->bookable}}</span></h6>
            <h4 class="card-text">{{__('homepage.country')}} :<span>{{$vl->country}}</span></h4>
            <h5 class="card-text">{{__('homepage.owner')}} : <span>{{$vl->owner}}</span></h5>
            </div>
          
            
            <div class="card-footer text-center">
            
            <a class="btn btn-warning text-white" href ="venue_details/{{$vl->id}}">{{__('homepage.details')}}</a>
            </div>
        </div>
     </div>


@endforeach

    </div>
  </div>
</div>
</div>
    </body>
</html>
