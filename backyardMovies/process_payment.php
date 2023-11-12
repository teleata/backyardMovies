<!DOCTYPE html>
<html>
<body>
<?php
 $cusid='';
 $cost=0; 
  if(isset($_GET['cusid'])){
    $cusid=$_GET['cusid'];
}
if(isset($_GET['cost'])){
    $cost=$_GET['cost'];
}


  $user = 'root';
  $password = ''; //To be completed if you have set a password to root
  $database = 'byardtst'; //To be completed to connect to a database. The database must exist.
  $port = 3306; //Default must be NULL to use default port
  $mysqli = new mysqli('localhost', $user, $password, $database, $port);
  $message="";
  if (isset($_POST['payButton'])) {
    // Retrieve payment information from the form
    $customer_id = $_POST['customer_id'];
    $total_cost = $_POST['total_cost'];
    $cusid= $customer_id;
    $cost= $total_cost;
   

    $SQL = "INSERT INTO reservation( reservation_id, showtime_id, Customer_ID, Total_Cost) 
    VALUES ('', '', '$customer_id', '$total_cost')";
    $result2 = mysqli_query($mysqli, $SQL);
    $message= "Payment Successfull !";
   
    $mysqli->close();
}
?>
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("img/backgrd-image.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-color: #f0f0f0;
        }
        h1{
            text-align: center;
            color: green;
        }

        .container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            margin-top: 10%;
            padding: 20px;
            max-width: 400px;
        }

        .form-group {
            margin: 10px 0;
        }

        label {
            display: block;
            font-weight: bold;
        }


        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-align: center;
            display: center;
        }
       
    </style>
<head>
    <title>Payment Form</title>
</head>

<div class="container">
    <h1>Payment Form</h1>
    <form method="post" action="">
        <label for="cardholder">Cardholder Name:</label>
        <input type="text" id="cardholder" name="cardholder" required><br>

        <label for="cardnumber">Card Number:</label>
        <input type="text" id="cardnumber" name="cardnumber" required><br>

        <label for="expiration">Expiration Date (MM/YY):</label>
        <input type="text" id="expiration" name="expiration" required><br>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required><br>
        <input type="text" id="customer_id"  name="customer_id" value="	<?php echo $cusid; ?>" style="display: none">
        <input type="text" name="total_cost"  id="total_cost" value="	<?php echo $cost; ?>" style="display: none">
 

        <input type="submit" name="payButton" value="Pay Now">
        <br><br>
        <?php
        echo $message;
        ?>

    </form>
    </div>
</body>
</html>