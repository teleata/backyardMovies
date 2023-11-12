<!DOCTYPE html>
<html>
<head>
    <style>
        /* Your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-image: url("img/pngtree.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            padding-bottom: 30%;
        }

        h1 {
            text-align: center;
        }

        .container {
            max-width: 1000px;
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

        <p style="color: orange; font-weight: bold;">RESERVATIONS</p>

        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['SubmitButton'])) {
                // Handle reservation submission
                // ...
            } elseif (isset($_POST['CreateButton'])) {
                $areccusid = $_POST['customer_id'];
                $areccost = $_POST['total_cost'];
                Header("Location: process_payment.php?cusid=".$areccusid ."& cost=" .$areccost);
                // Handle reservation creation
                // ...
            }
        
        }
        ?>

        <form method="POST" action="">
            <table>
                <tr>
                    <th>Reservation ID</th>
                    <th>Showtime ID</th>
                    <th>Customer ID</th>
                    <th>Total Cost</th>
                    <th>Submit</th>
                </tr>
                <tr>
                    <td>
                        
                        Reservation_ID
                    </td>
                    <td>
                        <select name="showtime_id" required>
                            <!-- Add options with Showtime_ID values from database -->
                            <option value="1">Showtime 1</option>
                            <option value="2">Showtime 2</option>
                            <option value="3">Showtime 3</option>
                            <!-- Repeat for other Showtime_ID values -->
                        </select>
                    </td>
                    <td>
                        <select name="customer_id" required>
                            <!-- Add options with Customer_ID values from  database -->
                            <option value="1">Customer 1</option>
                            <option value="2">Customer 2</option>
                            <option value="3">Customer 3</option>
                            <!-- Repeat for other Customer_ID values -->
                        </select>
                    </td>
                    <td>
                        <input type="text" name="total_cost" required>
                    </td>
                    <td>
                        <input type="submit" value="Create" name="CreateButton">
                    </td>
                </tr>
                <!-- Repeat this table row for each reservation entry -->
            </table>
        </form>
    </div>
</body>
</html>
