<!DOCTYPE html>
<html>
<head>
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("img/photo.jpg");
            background-color: #f0f0f0;
            background-repeat: no-repeat;
            background-size: cover;
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
    footer {
            text-align: center;
        }
       
    </style>
</head>
<!DOCTYPE html>
<html>
<body>
<header>
    <h1>Welcome to Jamrock Cinema</h1>
    </header>
<?php
   $cusid='';
   $cost=0; 
	if(isset($_GET['cusid'])){
		$cusid=$_GET['cusid'];
    
	}
    if(isset($_GET['cost'])){
		$cost=$_GET['cost'];
        
	}
    
    if (isset($_POST['SubmitButton'])) {
        
        Header("Location: process_payment.php? cusid=".$cusid."& cost=".$cost);
        // Handle reservation creation
        // ...
    }
    ?>
    <div id="payform" class="container">
        <h1>Payment Page</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="customer_id">Customer ID</label>
             <input type="text" id="customer_id"  name="customer_id"  value=" <?php echo $cusid; ?>"required>
            </div>

            <div class="form-group">
                <label for="total_cost">Total Cost</label>
                <input type="text" name="total_cost"  id="total_cost"  value=" <?php echo $cost; ?>"required>
            </div>

            <div class="form-group">
                <label for="payment_method">Payment Method</label>
                <select name="payment_method">
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>

                </select>
            </div>

            <button type="submit" name= "SubmitButton">Submit Payment</button>
        </form>
        <br><br>

    <footer>
        <div>&copy; Jamrock Cinema</div>
    </footer>   
    </div>
</body>
</html>
