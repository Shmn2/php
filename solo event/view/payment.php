<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        h2 {
            text-align: center;
            color: #333;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="number"],
        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        /* Styles for the payment success popup */
        #paymentSuccessPopup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 9999;
        }
        
        #paymentSuccessPopup h3 {
            color: #4CAF50;
            text-align: center;
        }
        
        #paymentSuccessPopup p {
            color: #333;
            text-align: center;
        }
        
        /* Back button styles */
        .backButton {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .backButton:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Make Payment</h2>
    <form action="../controller/payment_check.php" method="post">
        <label for="amount">Amount:</label><br>
        <input type="number" id="amount" name="amount" required><br><br>
        
        <label for="event_name">Event Name:</label><br>
        <input type="text" id="event_name" name="event_name" required><br><br>
        
        <label for="bkash_number">Bkash Number:</label><br>
        <input type="text" id="bkash_number" name="bkash_number" required><br><br>
        
        <input type="submit" value="Make Payment">
        <div>
    <a href="../view/dashboardCustomer.php" class="backButton">Back to Home</a>
    </div>
    </form>

    <!-- Hidden div for the payment success popup -->
    <div id="paymentSuccessPopup">
        <h3>Payment Successful!</h3>
        <p>Your payment has been successfully processed.</p>
    </div>

   
    
</body>
</html>
