<!DOCTYPE html>
<html>
<head>
<title></title>
<body>
<h1>JAMROCK CINEMA</h1>
<div>
             <title>Customer Registration</title>
    <style>
        
        body {
            background-image: url("img/pexels.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, sans-serif;
            background-color: none;
        }

        
        h1{
            text-align: center;
            color: green;
        }
        
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: paleturquoise;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            opacity: 80%;
            font: bolder;
            font-size: large;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 95%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font: bolder;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

    
    </style>
</head>
<body>

    <div class="container">
        <h1>Customer Registration:</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label>Preferences:</label>
            <select id= preferences name="preferences" required> <br>
                <option value="notification">Notification</option>
                <option value="email">Email</option>
                <option value="phone">Phone</option>
            </select><br><br>
            <input type="submit" value="Register">

        </form>
        <br><br>
    <footer>
        <div>&copy; Jamrock Cinema</div>
    </footer>
<?php

$user = 'root';
$password = '';  
$database = 'byardtst';
$port = 3306;  

$mysqli = new mysqli('localhost', $user, $password, $database, $port);

// Start a PHP session
session_start();

// Handle form submission when the user registers
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $custid='';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $preferences = $_POST["preferences"];
    $password = $_POST["password"]; 

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Store user data in a session
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["phone"] = $phone;
    $_SESSION["username"] = $username;
    $_SESSION["preferences"] = $preferences;

    // Insert user data into the database
   // $insertQuery = "INSERT INTO customer ( customer_id, name, email, phone, username, password, preferences) VALUES (?, ?, ?, ?, ?, ?, ?)";
    //$insertStmt = $mysqli->prepare($insertQuery);
    //$insertStmt->bind_param('customer', $custid, $name, $email, $phone, $username, $hashedPassword, $preferences );
    //$insertStmt->execute();

    $SQL = "INSERT INTO customer ( customer_id, name, email, phone, username, password, preferences) 
    VALUES ('$custid', '$name', '$email', '$phone', '$username', '$hashedPassword', '$preferences' )";
    $result2 = mysqli_query($mysqli, $SQL);
    // Redirect to the payment page
    header("Location: payment.php");
    exit();
}
?>


<?php
$mysqli->close();
?>  
    </div>
</body>
</html>
