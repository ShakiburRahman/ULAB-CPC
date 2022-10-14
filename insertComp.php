<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
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
		$compName = $_REQUEST['compName'];
		$jobPosition= $_REQUEST['jobPosition'];
		$vacancy= $_REQUEST['vacancy'];
		$deadline= $_REQUEST['deadline'];
		$cgpaReq= $_REQUEST['cgpaReq'];
		$salary= $_REQUEST['salary'];
		$jobType= $_REQUEST['jobType'];
		$jobLocation= $_REQUEST['jobLocation'];
		$reqExper= $_REQUEST['reqExper'];
		$prefferedProgram= $_REQUEST['prefferedProgram'];
		$jobRespon= $_REQUEST['jobRespon'];
		$additionalReq= $_REQUEST['additionalReq'];
		$educationalReq= $_REQUEST['educationalReq'];
		$compensation= $_REQUEST['compensation'];
		$applicationProcedure= $_REQUEST['applicationProcedure'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO jobs (`compName`, `jobPosition`, `vacancy`, `deadline`, `cgpaReq`, `salary`, `jobType`, `jobLocation`,
	  `reqExper`, `prefferedProgram`, `jobRespon`, `additionalReq`, `educationalReq`, `compensation`, `applicationProcedure`) 
 			VALUES ('$compName',
			'$jobPosition','$vacancy','$deadline','$cgpaReq','$salary',
			'$jobType','$jobLocation','$reqExper','$prefferedProgram','$jobRespon',
			'$additionalReq','$educationalReq','$compensation','$applicationProcedure')";


//  INSERT INTO `jobs` (`compName`, `jobPosition`, `vacancy`, `deadline`, `cgpaReq`, `salary`, `jobType`, `jobLocation`,
//  `reqExper`, `prefferedProgram`, `jobRespon`, `additionalReq`, `educationalReq`, `compensation`, `applicationProcedure`, `JobsID`) 
// VALUES ('sad', 'asd', 'asd', '2022-10-14', 'asd', 'sad', 'asd', 'asd', 'asd', 'sad', 'sda', 'sad', 'sad', 'sad', 'asd', '');
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " to view the updated data</h3>";
				

			echo nl2br("\n$compName\n $jobPosition\n "
				. "$vacancy\n $deadline\n $cgpaReq");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

<br>
<p class="insertpage">

<a  href="companyHomePage.html">Go Back</a>
</p>

</html>
