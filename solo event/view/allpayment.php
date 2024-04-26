<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
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
            margin-top: 20px;
        }
        
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #4CAF50;
            color: white;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .back-btn {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Payment Details</h2>
    <table>
        <thead>
            <tr>
                <th>Amount</th>
                <th>Event Name</th>
                <th>Bkash Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once('../model/userModel.php');
            $payments = getAllPayments();
            foreach ($payments as $payment) {
                echo "<tr>";
                echo "<td>" . $payment['amount'] . "</td>";
                echo "<td>" . $payment['event_name'] . "</td>";
                echo "<td>" . $payment['bkash_number'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Back to Home button -->
    <a href="../view/dashboardCustomer.php" class="back-btn">Back to Home</a>
</body>
</html>
