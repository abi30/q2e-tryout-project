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
    <h3 style="text-align:cneter;">Add Venue Form</h3>
    <form action="{{url('/update_venue')}}" method='POST'>
    @csrf
    <div class="row">
      <div class="col-6">
        <input type="hidden" name="id"  value="{{$venue_list->id}}"  class="form-control" aria-label="phone">

        <input type="text" name="surname" class="form-control" placeholder="surname" value="{{$venue_list->surname}}" aria-label="surname">
      </div>
      <div class="col-6">
        <input type="text" name="road" class="form-control" 
        placeholder="road"  value="{{$venue_list->road}}" aria-label="road">
      </div>
      <div class="col-6">
        <input type="text" name="house_no" class="form-control" placeholder="house no" value="{{$venue_list->house_no}}" aria-label="house no">
      </div>
      <div class="col-6">
        <input type="text" name="post_code" class="form-control" placeholder="post code" value="{{$venue_list->post_code}}" aria-label="post code">
      </div>
      <div class="col-6">
        <input type="text" name="place" class="form-control" placeholder="place" value="{{$venue_list->place}}" aria-label="place">
      </div>
      <div class="col-6">
        <select class="form-control" name="country" id="">
        <option value="{{$venue_list->country}}" selected anabled>{{$venue_list->country}}</option>
        <option value="Germany">D</option>
        <option value="Austria">A</option>
        <option value="Switzerland">CH</option>
        </select>
      </div>
      <div class="col-6">
        <input type="text" name="phone" class="form-control" placeholder="phone" value="{{$venue_list->phone}}"  aria-label="phone">
      </div>
      <div class="col-6">
        <input type="email" name="email" class="form-control" placeholder="email" value="{{$venue_list->email}}" aria-label="email">
      </div>
      <div class="col-6">
        <input type="text" name="website" class="form-control" placeholder="website" value="{{$venue_list->website}}" aria-label="website">
      </div>
      <div class="col-6">
        <input type="text" name="owner" class="form-control" placeholder="owner" value="{{$venue_list->owner}}" aria-label="owner">
      </div>
      <div class="col-6">
        <select class="form-control" name="bookable" id="">
        <option value="{{$venue_list->bookable}}"selected anabled>{{$venue_list->bookable}}</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
        </select>
      </div>
      <div class="col-6">
        <textarea name="map"
         id="" cols="30" rows="2" placeholder="place Map">{{$venue_list->map}}</textarea>
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
