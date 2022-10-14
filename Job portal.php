<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jobs </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Font Link -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet"> 

 <!-- Latest compiled and minified CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

 <!-- Latest compiled JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 

 <!-- Bootstap 5 icon link -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="style.css">

</head>
<body>
 




    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light  ">
      <div class="container-fluid">
        <a class="navbar-brand" href="studentHomePage.html">
          <img src="Img/PngItem_6124768.png" alt="" height="56" width="140">
        </a>
        <!-- <span class="ulab-tooltip" >Welcome to ULAB CPC</span> -->
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link  " aria-current="page" href="studentHomePage.html">Home</a>
              
            </li>
            <li class="nav-item">
              <a class="nav-link active " href="Job portal.html">Job Portal</a>
            </li>
         
            <li class="nav-item">
              <a class="nav-link  " aria-current="page" href="CV.html">CV</a>
            </li>

          
            
          </ul>
         
        </div>
      </div>
       <!-- Profile viewer -->
       <div class="logout">
  <li class="nav-item">
    <a class="nav-link  " aria-current="page" href="index.php">Logout</a>
  </li>
  </a>
  
</div>

    </nav>







<br>
<!-- 
                  Select Department -->

  <!-- <div class="dropdown-center ">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
     Select Department
    </button>
    <ul class="dropdown-menu dropdown-menu-dark">
      <li><a class="dropdown-item " href="#">B.Sc, Computer Science and Engineering</a></li>
      <li><a class="dropdown-item" href="#">B.Sc, Electrical and Electronic Engineering</a></li>
      <li><a class="dropdown-item" href="#">Bachelor of Media Studies and Journalism</a></li>
      <li><a class="dropdown-item" href="#">Bachelor in English</a></li>
      
    </ul>
  </div> -->


  <div class="dept-filter-jobportal" >
  <select class="form-select  form-select-sm ">
      <option>Computer Science and Engineering</option>
      <option>Electrical and Electronic Engineering</option>
      <option>Media Studies and Journalism</option>
      <option>English</option>
    </select> 
 
  </div>


  <?php
// servername => localhost
		// username => root
		// password => empty
		// database name => universitycpc
		// $conn = mysqli_connect("localhost", "root", "", "universitycpc");
		// include 'config.php';

    $conn = mysqli_connect("localhost", "root", "", "universitycpc");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
     
}

		// // Check connection
		// if($conn === false){
		// 	die("ERROR: Could not connect. "
		// 		. mysqli_connect_error());


    // VALUES ('$compName',
		// 	'$jobPosition','$vacancy','$deadline','$cgpaReq','$salary',
		// 	'$jobType','$jobLocation','$reqExper','$prefferedProgram','$jobRespon',
		// 	'$additionalReq','$educationalReq','$compensation','$applicationProcedure')";

$sql= "SELECT * FROM `jobs`";
$result= mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
// echo $num;

while ($row= mysqli_fetch_assoc($result)){
?>
 <div class="jobs-container">
  <div class="job-position"><?= $row["jobPosition"] ?>
</div>
    <div class="row">
      <div class=" col-sm-3 col-md-3" >
        <div class="company-name"><i class="bi bi-wallet-fill"></i><?= $row["compName"] ?></div>
      </div>
      <div class=" col-sm-3 col-md-3" >
        <div class="salary"><i class="bi bi-cash"></i> Salary:<?= $row["salary"] ?></div>
      </div>
      <div class=" col-sm-3 col-md-3" >
        <div class="vacancy"><i class="bi bi-people-fill"></i> Vacancy: <?= $row["vacancy"] ?></div>
      </div>
    </div>
    <div class="row">
      <div class=" col-sm-3 col-md-3" min-height:54px>
        <div class="deadline"><i class="bi bi-calendar-check"></i> <?= $row["deadline"] ?></div>
      </div>
      <div class=" col-sm-3 col-md-3" min-height:54px>
        <div class="job-type"><i class="bi bi-watch"></i> <?= $row["jobType"] ?></div>
      </div>
      <div class=" col-sm-3 col-md-3" >
        <div class="cg-req"><i class="bi bi-check"></i> CGPA Required: <?= $row["cgpaReq"] ?></div>
      </div>
    </div>
    <div class="row">
      <div class=" col-sm-3 col-md-3" style="float:right">
        <a href="jobDetailsPage.html" class="btn btn-outline-secondary jobDetailsPage" >View Details </a>  
      </div>
      
    </div>
  </div>
<?php 
  }
?>
 
</body>
</html> 