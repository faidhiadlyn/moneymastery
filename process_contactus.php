<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <title>Contact Us Responses | MoneyMastery</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            margin: 20px;
            background-image: url(img/registration.jpg);
            color: black;
        }

        h1 { 
            text-align: center;
            color: black;
        }


        #homeButton {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px;
            background-color: #01b3bc;
            color: #000000;
            text-decoration: none;
            border-radius: 5px;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.5);
  }
  
    </style>
</head>
<body>

    <h1>Feedback</h1>
<center>
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moneymastery";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Insert data into the database
    $sql = "INSERT INTO contactus (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
mysqli_close($conn);

?></center>
    <a href="dashboard.html" id="homeButton">
        <span class="material-symbols-outlined">Back to Dashboard</span>
      </a> 

</body>
</html>





