<!DOCTYPE html>
<html lang="en">
<heda>
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
   

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


      <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }



#myTable {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-top: 4px;
}

#myTable td, #myTable th {
    border: 1px solid #ddd;
    padding: 8px;
}

#myTable tr:nth-child(even){background-color: #f2f2f2;}

#myTable tr:hover {background-color: #ddd;}

#myTable th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}



.center {
    margin: auto;
    width: 45%;
    border: 5px solid #73AD21;
    padding: 20px;
}

.device{
  cursor: pointer;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}





.overlay {
    height: 100%;
    width: 100%;
    display: none;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}


/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #F7F9F9;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

  </style>
    
    </heda>


<body style="background-color:#7f8c8d">



	<div class="container-fluid">




<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../css/1.jpg" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>MTDF</h3>
        <p>Convenient and Efficient</p>
      </div>   
    </div>

    <div class="carousel-item">
      <img src="../css/2.jpg" alt="Chicago" >
      <div class="carousel-caption">
        <h3>MTDF</h3>
        <p>User Friendly</p>
      </div>   
    </div>

    <div class="carousel-item">
      <img src="../css/3.jpg" alt="New York" >
      <div class="carousel-caption">
        <h3>MTDF</h3>
        <p>Incredible Experiance</p>
      </div>   
    </div>
  </div>
    
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand">
    <img src="../css/logo.png" alt="logo" style="width:80px; height: 40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/admin">Home</a>
    <!-- </li> -->
    <li class="nav-item">
      <p class="nav-link" id="myBtn" style="cursor: pointer;">ADMIN</p>
    </li>
     <li class="nav-item">
      <!-- <a class="nav-link" href="admin/create">ADD </a> -->
      <a class="nav-link" href="admin/create" style="cursor: pointer;">ADD </a>

    </li>
  
  </ul>
  
        
  <!-- <li>
            <form class="search-form" role="search" style="width: 400px;" >
                <div class="form-group waves-light" mdbRippleRadius>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </li> -->

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for version.." title="Type in a name">




<div class="card-body" style="margin-left: 300px;">
<div class="dropdown">
	<h8 class="card-title" style="color: red;" >John Doe</h8>
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Profile Option
    </button>
    <div class="dropdown-menu dropdown-menu-right">

      <a class="dropdown-item" href="#">View Profile</a>

      <a class="dropdown-item" href="{{ route('logout') }}"> Log Out</a>
    </div>



 


 <!-- <div class="card-body" style="margin-left: 800px;">
<h8 class="card-title" style="color: red;" >John Doe</h8>
 <a href="#" class="btn btn-primary">See Profile</a>
    </div>-->





</nav>

 <div class="col" style="background-color:orange;"><center>Mobile Test Device Fram</center></div>

	<div class="container">
	<div class="row">
	  @section('body')
	  @show
	</div>
	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


<footer class="navbar navbar-expand-sm bg-dark navbar-dark">
<!--<footer class="navbar-nav8">-->
  <p style="color:#E5E7E9; text-align: center;">&#169; 2018 MTDF All Rights Reserved. | Privacy policy | Web Design & Development by DECIDERS</p>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand">
    <img src="../css/logo.png" alt="logo" style="width:80px; height: 40px;">
  </a>
</footer>


    </body>
    </html>
  