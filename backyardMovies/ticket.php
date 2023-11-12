<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url("img/pop.jpg");
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
           
        }

        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #008CBA;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h1 {
            color: greenyellow;
            text-align: center;
        }

        .myButton {
            background-color: #008CBA;
            border: none;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        p {
            color: orange;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        select, input[type="submit"] {
            padding: 5px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #008CBA;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h1>JAMROCK CINEMA</h1>
        <div>
            <a href="index.php" class="myButton">Home</a>
        </div>

        <p style="color: orange; font-weight: bold;">TICKETS</p>

        <?php
       // Create a database connection
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $user = 'root';
       $password = ''; //To be completed if you have set a password to root
       $database = 'byardtst'; //To be completed to connect to a database. The database must exist.
       $port = 3306; //Default must be NULL to use default port
       $mysqli = new mysqli('localhost', $user, $password, $database, $port);
    
    // Get data from the form
    $reservation_id = $_POST['reservation_id'];
    $seat_id = $_POST['seat_id'];
    $price = $_POST['price'];

    // SQL statement to insert a new ticket
    $sql = "INSERT INTO Tickets (Reservation_ID, Seat_ID, Price) VALUES ('$reservation_id', '$seat_id', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "New ticket created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;

    }
    $mysqli->close();
       }
?>
<html>
<head>
    <title> New Ticket</title>
</head>
<body>
    <h1>New Ticket</h1>
    <form method="post" action="reservation.php">
        <div>
            <label for="reservation_id">Reservation ID:</label>
            <select name="reservation_id" required>
                <option value="" disabled selected>Select Reservation</option>
                
                <option value="1">Reservation 1</option>
                <option value="2">Reservation 2</option>
            
            </select>
        </div>
        <div>
            <label for="seat_id">Seat ID:</label>
            <select name="seat_id" required>
                <option value="" disabled selected>Select Seat</option>
            
                <option value="1">Seat 1</option>
                <option value="2">Seat 2</option>
            
            </select>
        </div>
        <div><br>
            <label for="price">Price:</label>
            <input type="text" name="price" required>
        </div>
        <div><br>
            <button type="submit">Add Ticket</button>
        </div>
    </form>
</body>
</html>

    </div>
</body>
</html>

</body>
</html>
