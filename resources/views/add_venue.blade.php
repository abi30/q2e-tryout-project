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
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('add_venue_form')}}">Add Venue</a>
          
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('venue_list')}}">Venue list</a>
          
                
                </li>
                <li class="nav-item">
                  <a class="nav-link "href="{{url('event_list')}}">Event list</a>
                </li>
              </ul>
              
            </div>
          </nav>


      
@if($message=Session::get('success'))
<div class="alert alert-success col-md-12 ">

  <p>{{$message}}</p>
</div>
    
@endif

<div class="col-md-12 row" style="padding: 50px;">
    <h3 style="text-align:cneter;">Add Venue Form</h3>
    <form action="{{url('/save_venue')}}" method='POST'>
    @csrf
    <div class="row">
      <div class="col-6">
        <input type="text" name="surname" class="form-control" placeholder="surname" aria-label="surname">
      </div>
      <div class="col-6">
        <input type="text" name="road" class="form-control" placeholder="road" aria-label="road">
      </div>
      <div class="col-6">
        <input type="text" name="house_no" class="form-control" placeholder="house no" aria-label="house no">
      </div>
      <div class="col-6">
        <input type="text" name="post_code" class="form-control" placeholder="post code" aria-label="post code">
      </div>
      <div class="col-6">
        <input type="text" name="place" class="form-control" placeholder="place" aria-label="place">
      </div>
      <div class="col-6">
        <select class="form-control" name="country" id="">
        <option value="" disabled selected>Select Country</option>
        <option value="Germany">D</option>
        <option value="Austria">A</option>
        <option value="Switzerland">CH</option>
        </select>
      </div>
      <div class="col-6">
        <input type="text" name="phone" class="form-control" placeholder="phone" aria-label="phone">
      </div>
      <div class="col-6">
        <input type="email" name="email" class="form-control" placeholder="email" aria-label="email">
      </div>
      <div class="col-6">
        <input type="text" name="website" class="form-control" placeholder="website" aria-label="website">
      </div>
      <div class="col-6">
        <input type="text" name="owner" class="form-control" placeholder="owner" aria-label="owner">
      </div>
      <div class="col-6">
        <select class="form-control" name="bookable" id="">
        <option value="" disabled selected>Select Bookable or Not</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
        </select>
      </div>
      <div class="col-6">
        <textarea name="map" id="" cols="30" rows="2" placeholder="place Map"> </textarea>
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
