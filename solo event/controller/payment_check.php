<?php
require_once('../model/userModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['amount'], $_POST['event_name'], $_POST['bkash_number'])) {
        $amount = $_POST['amount'];
        $event_name = $_POST['event_name'];
        $bkash_number = $_POST['bkash_number'];
      
        if (makePayment($amount, $event_name, $bkash_number)) {
            echo "payment successfull";
            header("Location: ../view/allpayment.php");
          
        } else {
            echo "<script>alert('Payment failed!');</script>";
        }
    } else {
        echo "<script>alert('Error: One or more required fields are missing.');</script>";
    }
}
?>
