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
                padding:10px;
            }
        </style>
    </head>
    <body class="antialiased">

<div class="col-md-12 row" style="background: #99ffe3;">
        <div class="col-md-6">
        <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                <a class="navbar-brand" href="/"><b>Event Venue</b></a>
            
                </div>
            </nav>
        </div>

        <div class="col-md-6" style="text-align: right; padding-top: 10px;">
            <ul>
                <li style="padding: 8px;float: left;color: black; text-align: center;list-style:none; text-decoration: none;"><a href="{{route('add_venue_form')}}">Add Venue</a></li>
                <li style="padding: 8px;float: left;color: black; text-align: center;list-style:none; text-decoration: none;"><a href="{{route('venue_list')}}">Venue List</a></li>
            </ul>
        </div>
</div>



<div class="col-md-12 row">
  @if($message=Session::get('msg'))
<div class="container alert alert-success">

  <p>{{$message}}</p>
  @php
    Session::put('msg',""); 
  @endphp
</div>
    
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Event Name</th>
      <th scope="col">Place</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($event_list as $key => $vl)
    <tr>
      <th scope="row">{{ ($key+1)}}</th>
      <td>{{$vl->name}}</td>
      <td>{{$vl->surname}}</td>
     
      <td><a href="venue_details/{{$vl->venue_id}}" class="btn btn-primary">Details</a></td>
    </tr>
    <tr>
 @endforeach
  </tbody>
</table>
</div>
    </body>
</html>
