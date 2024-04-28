<?php

if(isset($_POST['name'])){
    
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    
    if($con->query($sql) == true){
        echo "Successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();

} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="shikarpur-image">
 
    <div class="container">
    
    <h1>Welcome to shikarpur Karachi Trip Form</h1>
    <p>Enter you details and submit this form to confim your participation</p>


    <form action="index.php" method="post">

<input type="text" name="name" id="name" placeholder="Enter your name">
<input type="text" name="age" id="age" placeholder="Enter your Age">
<input type="text" name="gender" id="gender" placeholder="Enter your gender">
<input type="text" name="email" id="email" placeholder="Enter your eamil">
<input type="text" name="phone" id="phone" placeholder="Enter your phone">
<textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
<button class="btn">Submit</button>
    </form>
 </div>
</body>
</html>