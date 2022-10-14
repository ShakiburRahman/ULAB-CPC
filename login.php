<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
<?php
// servername => localhost
		// username => root
		// password => empty
		// database name => universitycpc
		// $conn = mysqli_connect("localhost", "root", "", "universitycpc");
		

    $conn = mysqli_connect("localhost", "root", "", "universitycpc");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
     
}




    // VALUES ('$compName',
		// 	'$jobPosition','$vacancy','$deadline','$cgpaReq','$salary',
		// 	'$jobType','$jobLocation','$reqExper','$prefferedProgram','$jobRespon',
		// 	'$additionalReq','$educationalReq','$compensation','$applicationProcedure')";

  

 $login=false;
  $ulabEmail = $_POST['ulabEmail'];
  $password = $_POST['password'];

    if (isset($_POST['userType'])) { // "group" is mutual name of radio buttons
    switch ($_POST['userType']) {
      case 'option1':  // Value of first radio button

        $sql = "SELECT * FROM `student` Where ulabEmail= '$ulabEmail' AND password='$password'";
        // $result = mysqli_query($sql);
        $result= mysqli_query($conn, $sql);
        $num= mysqli_num_rows($result);

        if($num==1){
          echo "success";
          header('Location: studentHomePage.html');
        }
        else {
          echo '<div class="alert alert-danger">
          <strong>Failed!</strong> Your ULAB EMAIL or Password is Wrong.
          <a href="index.php">GO Back to Login page</a>
        </div>';
           
        }
        break;

      case 'option2':  // Value of second radio button

        $sql = "SELECT * FROM `admin` Where ulabEmail= '$ulabEmail' AND password='$password'";
        // $result = mysqli_query($sql);
        $result= mysqli_query($conn, $sql);
        $num= mysqli_num_rows($result);

        if($num==1){
          echo "success";
          header('Location: adminHomePage.html');
        }
        else {
            echo '<div class="alert alert-danger">
            <strong>Failed!</strong> Your ULAB EMAIL or Password is Wrong.
            <a href="index.php">GO Back to Login page</a>
          </div>';
             
        }
        break;


        case 'option3':  // Value of second radio button
            $sql = "SELECT * FROM `company` Where ulabEmail= '$ulabEmail' AND password='$password'";
            // $result = mysqli_query($sql);
            $result= mysqli_query($conn, $sql);
            $num= mysqli_num_rows($result);
    
            if($num==1){
              echo "success";
              header('Location: companyHomePage.html');
            }
            else {
                echo '<div class="alert alert-danger">
                <strong>Failed!</strong> Your ULAB EMAIL or Password is Wrong.
                <a href="index.php">GO Back to Login page</a>
              </div>';
                 
            }
            break;
    
          break;
      default:
        break;
    }    
  }






    


?>



</body>
</html>


