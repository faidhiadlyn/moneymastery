<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <title>Registration  | MoneyMastery</title>
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

    <h1>Registration</h1>
<center>
    <?php
// Connect to MySQL (assuming localhost with default username and password)
$conn = mysqli_connect("localhost", "root", "", "moneymastery");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to sanitize user inputs
function sanitizeInput($input) {
    return htmlspecialchars(stripslashes(trim($input)));
}

// Function to hash the password
function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

// User registration
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $username = sanitizeInput($_POST["username"]);
    $email = sanitizeInput($_POST["email"]);
    $password = hashPassword($_POST["password"]);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "User registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// User login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $email = sanitizeInput($_POST["email"]);
    $password = sanitizeInput($_POST["password"]);

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row["password"];

        if (password_verify($password, $hashedPassword)) {
            // Login successful
            echo "Login successful";
            echo "<script>window.location.href = 'dashboard.html';</script>";
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}

// Close the connection
mysqli_close($conn);
?>
</center>

    <a href="Starter.html" id="homeButton">
        <span class="material-symbols-outlined">Back to Login</span>
      </a> 

</body>
</html>