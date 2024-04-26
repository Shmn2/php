<?php
require_once('../model/userModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = $_POST["company_name"];
    $address = $_POST["address"];
   
    $details = $_POST["details"];
    $reference = $_POST["reference"];
    $contact_number = $_POST["contact_number"];
    $sponsor_for = $_POST["sponsor_for"];
    $email = $_POST["email"];
    
    

    if(insertSponsorship($company_name, $address, $details, $reference, $contact_number, $sponsor_for, $email)) {
        echo "Sponsorship details inserted successfully!";
        header("Location: ../view/allsponsor.php");
        
    } else {
        echo "Failed to insert sponsorship details.";
    }
}
?>
