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

<div class="col-md-12 row" style="background: #99ffe3;">
        <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                <a class="navbar-brand" href="/"><b>Event Venue</b></a>
                <li style="padding: 8px;float: left;color: black; text-align: center;list-style:none; text-decoration: none;"><a href="{{route('venue_list')}}">Venue List</a></li>
                </div>
            </nav>
        </div>

      
</div>

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
