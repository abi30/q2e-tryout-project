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
            .col-6{
                /* padding:10px; */
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



<div class=" table-responsive justify-content-center ">
  @if($message=Session::get('msg'))
  <div class="container alert alert-success">

  <p>{{$message}}</p>
  @php
    Session::put('msg',""); 
  @endphp
</div>

@endif

<table class="table table-striped w-100">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Vanue Name</th>
      <th scope="col">Place</th>
      <th scope="col">Country</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($venue_list as $key => $vl)
    <tr>
      <th scope="row">{{ ($key+1)}}</th>
      <td>{{$vl->surname}}</td>
      <td>{{$vl->place}}</td>
      <td>{{$vl->country}}</td>
      <td><a href="venue_details/{{$vl->id}}" class="btn btn-primary">Details</a>
      
        <a href="edit_venue/{{$vl->id}}" class="btn btn-warning">edit</a>
      <a href="venue_delete/{{$vl->id}}" class="btn btn-danger">delete</a></td>
    </tr>
    <tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</body>
</html>
