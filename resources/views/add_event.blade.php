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
                    <a class="nav-link" href="{{route('venue_list')}}">Venue list</a>
            
                  
                  </li>
                  <li class="nav-item">
                    <a class="nav-link "href="{{url('event_list')}}">Event list</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link "href="{{url('add_event')}}">Add Event</a>
                  </li>
                </ul>
                
              </div>
            </nav>
            

@if($message=Session::get('success'))
<div style="margin-left: -15px;" class="alert alert-success col-md-12 ">

  <p>{{$message}}</p>
</div>
    
@endif

<div class="col-md-12 row" style="padding: 50px;">
    <h3 style="text-align:cneter;">ADD EVENT FORM</h3>
    <form action="{{url('/save_event')}}" method='POST'>
    @csrf
    <div class="row">
      <div class="col-6">
        <input type="text" name="name" class="form-control" placeholder="Event name" aria-label="name">
      </div>
     
     
      <div class="col-6">
        <select class="form-control" name="place" id="">
        <option value="" disabled selected>Select place</option>

        @foreach ($venue_list as $venue)

        <option value="{{$venue->id}}">{{$venue->surname}}</option>
            
        @endforeach
       
        </select>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-success">Save</button>
      </div>
    </div>
    </form>
    </div>




</div>



    </body>
</html>
