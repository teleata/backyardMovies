<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("img/backgrd-image.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }

        h1 {
            text-align: center;
            color: green;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.6);
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        a {
            font-family: Arial;
            color: blue;
            font-size: 17px;
            font-weight: bold;
            text-decoration: none;
        }

        a.myButton {
            display: inline-block;
            margin-right: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>JAMROCK CINEMA</h1>
        <div>
            <a href="index.php" class="myButton">Home</a>
        </div>

        <p style="color: orange; font-weight: bold;">CINEMAS</p>
        <?php
    

    // Connect to the database
    $user = 'root';
    $password = ''; 
    $database = 'byardtst';
    $port = 3306;
    $mysqli = new mysqli('localhost', $user, $password, $database, $port);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Process form submissions
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['SubmitButton'])) {
            // Handle cinema submission

    } elseif (isset($_POST['CreateButton'])) {
        // Handle cinema creation
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $website = $_POST['website'];

        $sql = "INSERT INTO cinema (Name, Address, Phone, Website) VALUES ('$name', '$address', '$phone', '$website')";

        if ($mysqli->query($sql) === TRUE) {
            echo "Cinema created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }
}
 ?>

        <form method="POST" action="">
            <table>
                <tr>
                    <th>Cinema ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Website</th>
                    <th>Submit</th>
                </tr>
                <tr>
                    <td>
                        
                        Cinema_ID
                    </td>
                    <td>
                        <input type="text" name="name" required>
                    </td>
                    <td>
                        <input type="text" name="address" required>
                    </td>
                    <td>
                        <input type="text" name="phone" required>
                    </td>
                    <td>
                        <input type="text" name="website" required>
                    </td>
                    <td>
                        <input type="submit" value="Create" name="CreateButton">
                    </td>
                </tr>
                <tr>
                    
            </table>
        </form>
    </div>
</body>

</html>
