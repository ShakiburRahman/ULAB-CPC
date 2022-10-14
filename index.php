













<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Font Link -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet"> 

 <!-- Latest compiled and minified CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

 <!-- Latest compiled JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 

  <link rel="stylesheet" href="style.css">

<body>

<!-- Navbar -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light  ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">
      <img src="Img/PngItem_6124768.png" alt="" height="56" width="140">
    </a>
    <!-- <span class="ulab-tooltip" >Welcome to ULAB CPC</span> -->
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        
      </span>
    </button>
    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link  " aria-current="page" href="index.html">Home</a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link " href="Job portal.php">Job Portal</a>
        </li>
     
        <li class="nav-item">
          <a class="nav-link   " aria-current="page" href="CV.html">CV</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Login.html">Login</a>
        </li>
        
      </ul>
     
    </div> -->
  </div>
</nav>



<?php

// if($login==true){
//   echo'
//   <div class="alert alert-danger" role="alert">
//   A simple danger alert—check it out!
// </div>
//   ';
// }
?>

       <!-- Login Form -->
       <form class="Login-form" action="login.php" method="post" autocomplete="on" >
        <div class="Login-Form">
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-1 col-form-label font-weight-bold " >ULAB Email</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" name="ulabEmail" id="inputEmail3" placeholder=name@ulab.edu.bd> 
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-1 col-form-label font-weight-bold">Password</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Enter password">
          </div>
        </div>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-1 pt-0 font-weight-bold" >Choose</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="userType" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1">
                Student
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="userType" id="gridRadios2" value="option2">
              <label class="form-check-label" for="gridRadios2">
                Admin
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="userType" id="gridRadios3" value="option3">
              <label class="form-check-label" for="gridRadios2">
                Company
              </label>
            </div>

           
          </div>
        </fieldset>
        
        <button type="submit" class="btn btn-outline-warning">Sign in</button>

        <br>
        <br>


        <p>
          Forgot password? ? 
          <a href="forgotPass.html">Click here!</a>
        </p>
        <p>
          Don't have any account ? 
          <a href="registrationPage.html">Register here!</a>
        </p>
       

      
      </form>

      <!-- Login Form ENDS -->