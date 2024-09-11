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
            background-image: url(img/darkbg.jpg);
            color: rgb(239, 239, 239);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #017177;
        }

        th, td {
            padding: 10px;
            text-align: left;
            color: rgb(212, 212, 212);
        }

        th {
            background-color: #009199;
            color: white;
        }

        h1 { 
            text-align: center;
            color: white;
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

    <h1>Contact Us Responses</h1>

    <?php
    // Assuming you have a MySQL database connection
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

    $order = "id"; // You can change this to the default order column
    $direction = "ASC"; // Default direction

  // Check if an order parameter is provided in the URL
  if (isset($_GET['order'])) {
      $order = mysqli_real_escape_string($conn, $_GET['order']);

  if (isset($_GET['dir']) && $_GET['dir'] == 'desc') {
    $direction = 'ASC';
} else {
    $direction = 'DESC';
}
}
    // Retrieve data from the database
    $sql = "SELECT * FROM ContactUs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th><a href='?order=id&dir=$direction'>ID</a></th>
                    <th><a href='?order=name&dir=$direction'>Name</a></th>
                    <th><a href='?order=email&dir=$direction'>Email</a></th>
                    <th><a href='?order=message&dir=$direction'>Message</a></th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['message']}</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No records found";
    }

    $conn->close();
    ?>


    <a href="dashboardadmin.html" id="homeButton">
        <span class="material-symbols-outlined">Dashboard</span>
      </a> 

</body>
</html>
