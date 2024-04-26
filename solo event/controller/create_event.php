<?php
    require_once('../model/userModel.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the form fields are set in $_POST
        if(isset($_POST['event_name'], $_POST['event_date'],$_POST['event_time'], $_POST['event_place'], $_POST['event_type'], $_POST['amount'])) {
            $event_name = $_POST['event_name'];
            $event_date = $_POST['event_date'];
            $event_time = $_POST['event_time'];
            $event_place = $_POST['event_place'];
            $event_type =  $_POST['event_type']; // You need to get the event type from your form
                      
            $amount = $_POST['amount'];

            if (createEvent($event_name, $event_date, $event_time, $event_place, $event_type, $amount)) {
                header("Location: ../view/payment.php");
            } else {
                echo "Error creating event";
            }
        } else {
            echo "Error: One or more required fields are missing.";
        }
    } else {
        // Redirect to the event creation page if accessed directly
        header("Location: ../view/home.php");
        exit();
    }
?>
