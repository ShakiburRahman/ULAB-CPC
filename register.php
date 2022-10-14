<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
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
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "universitycpc");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$ulabID= $_REQUEST['ulabID'];
		$ulabEmail= $_REQUEST['ulabEmail'];
		$password= $_REQUEST['password'];
		
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO student (`name`, `ulabID`, `ulabEmail`, `password`) 
 			VALUES ('$name',
			'$ulabID','$ulabEmail','$password')";


//  INSERT INTO `jobs` (`compName`, `jobPosition`, `vacancy`, `deadline`, `cgpaReq`, `salary`, `jobType`, `jobLocation`,
//  `reqExper`, `prefferedProgram`, `jobRespon`, `additionalReq`, `educationalReq`, `compensation`, `applicationProcedure`, `JobsID`) 
// VALUES ('sad', 'asd', 'asd', '2022-10-14', 'asd', 'sad', 'asd', 'asd', 'asd', 'sad', 'sda', 'sad', 'sad', 'sad', 'asd', '');
		
		if(mysqli_query($conn, $sql)){
            echo '<div class="alert alert-success">
            <strong>Success!</strong> You have successfully registered.
            <a href="index.php">GO to Login page</a>
          </div>';
		} else{
			// echo "ERROR: Hush! Sorry $sql. "
			// 	. mysqli_error($conn);

            echo '<div class="alert alert-danger">
            <strong>Failed!</strong> Failed To Register.
            <a href="registrationPage.php">GO back to Registration page</a>
          </div>';
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

<br>
<p class="insertpage">


</p>

</html>
