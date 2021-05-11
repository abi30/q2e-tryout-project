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
        @media  only screen and (max-width:480px) {
          
          .own_pic{
            height:70%;
          }
        </style>
    </head>
    <body class="antialiased">
      <div class="container">


    
      <div class="col-md-12 row" style="background: #99ffe3;">
        <div class="col-md-6">
        <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                <a class="navbar-brand" href="#"><b>Event Venue</b></a>
            
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





{{-- <table class="table">
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
      <a href="venue" class="btn btn-warning">edit</a>
      <a href="venue_delete/{{$vl->id}}" class="btn btn-danger">delete</a></td>
    </tr>
    <tr>
 @endforeach
 <tr>
   <th scope="row">1</th>
      <td>Cox Bazar Sea</td>
      <td>Cox Bazar</td>
      <td>Bangladesh</td>
      <td><a href="" class="btn btn-primary">Details View</a></td>
    </tr>
    <tr> 
    </tbody>
  </table>
   --}}
  





  <div class="container manageProduct w-100" >   
     

    <div class='m-3'>
 
<div class="row row-cols-1 row-cols-md-2 justify-content-center row-cols-lg-3 g-3">
  
  @foreach($venue_list as $key => $vl)



  <div class="col own_col text-center mt-4">
    <div class="card shadow-lg p-1 mb-5 bg-body rounded w-100 h-100 rounded-3 " style="width: 18rem;">
    <img class="img-thumbnail own_pic" src="{{$vl->website}}">
        <div class="card-body">
            <h4 class="card-title">Location :{{$vl->surname}} </h4>
            <p class="card-text">description :{{$vl->surname}}</p>
            <h4 class="card-title">Offer Price :{{$vl->surname}}</h4>
            </div>
          
            
            <div class="card-footer text-center">
            
            <a class="btn btn-warning text-white" href ="venue_details/{{$vl->id}}">Details</a>
            </div>
        </div>
     </div>


@endforeach

    </div>
  </div>
</div>
</div>

</div>
    </body>
</html>
