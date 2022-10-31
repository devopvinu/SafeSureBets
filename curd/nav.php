<?php


include('dump.php');

?>








<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <!-- font awsome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>



</style>

</head>
<body>

<div class="container-fluid p-2">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
             <img src=""  alt=""  class="logo">
             <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
            <li class="nav-item">
             <a href="" class="txt "> Welcome guest </a>
         </li>
    </ul>
        </div>
        </div> 
    </nav>

    <!-- second child -->


  <div class="container-fluid">
    <div class="row">
      <div class="col-2 bg-success">
      
      <div class="btn-group-vertical p-3 " role="group" aria-label="Vertical button group">
 
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-primary dropdown-toggle m-2" data-bs-toggle="dropdown" aria-expanded="false">
      Bets Tab
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="nav.php?yesterday_table">Yesterday</a></li>
      <li><a class="dropdown-item" href="nav.php?today_table">Today</a></li>
      <li><a class="dropdown-item" href="nav.php?tomorrow_table">Tomorrow</a></li>
    </ul>
  </div>
  <button type="button " class="btn btn-primary m-2">Button</button>
  <button type="button" class="btn btn-primary m-2">Button</button>
  <button type="button" class="btn btn-primary m-2">Button</button>
  <button type="button" class="btn btn-primary m-2">Button</button>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-primary dropdown-toggle m-2" data-bs-toggle="dropdown" aria-expanded="false">
      Dropdown
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Dropdown link</a></li>
      <li><a class="dropdown-item" href="#">Dropdown link</a></li>
    </ul>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-primary dropdown-toggle m-2" data-bs-toggle="dropdown" aria-expanded="false">
      Dropdown
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Dropdown link</a></li>
      <li><a class="dropdown-item" href="#">Dropdown link</a></li>
    </ul>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-primary dropdown-toggle m-2" data-bs-toggle="dropdown" aria-expanded="false">
      Dropdown
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Dropdown link</a></li>
      <li><a class="dropdown-item" href="#">Dropdown link</a></li>
    </ul>
  </div>
</div>
    
    
    </div>
      <div class="col-11 m-3">

      <?php
   if(isset($_GET['yesterday_table'])){
    getyesterday();
   }

   if(isset($_GET['today_table'])){
    gettoday();
   }

   if(isset($_GET['tomorrow_table'])){
    gettomorrow();
   }

  ?>


    </div>
    </div>
  
   








<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>