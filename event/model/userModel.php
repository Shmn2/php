<?php 
    require_once('db.php');

    function login($username, $password, $usertype){
        $con = dbConnection();
        $sql = "select * from login where username='{$username}' and password='{$password}' and usertype='{$usertype}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

 

    function createEvent($event_name, $event_date, $event_time, $event_place, $event_type, $amount) {
        $con = dbConnection();
        $sql = "INSERT INTO events (event_name, event_date, event_time, event_place, event_type, amount) 
                VALUES ('$event_name', '$event_date', '$event_time', '$event_place', '$event_type', '$amount')";
        
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }
    function getAllEvents(){
        $con = dbConnection();
        $sql = "SELECT * FROM events";
        $result = mysqli_query($con, $sql);
        $events = [];
    
        while($row = mysqli_fetch_assoc($result)){
            array_push($events, $row);
        }
    
        return $events;
    }

    function getEventNameById($event_id){
        $con = dbConnection();
        $sql = "SELECT event_name FROM events WHERE id = $event_id";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row['event_name'];
    }
    

    function makePayment($amount, $event_name, $bkash_number){
        $con = dbConnection();
        $sql = "INSERT INTO payment (amount, event_name, bkash_number) 
                VALUES ('$amount', '$event_name', '$bkash_number')";
        
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }
    function insertSponsorship($company_name, $address,  $details, $reference, $contact_number, $sponsor_for, $email) {
        $con = dbConnection();
        $sql = "INSERT INTO sponsorship_details (company_name, address,  details, reference, contact_number, sponsor_for, email) VALUES ('$company_name', '$address', '$details', '$reference', '$contact_number', '$sponsor_for', '$email')";
    
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function getAllSponsorships(){
        $con = dbConnection();
        $sql = "SELECT * FROM sponsorship_details";
        $result = mysqli_query($con, $sql);
        $sponsorships = [];
    
        while($row = mysqli_fetch_assoc($result)){
            array_push($sponsorships, $row);
        }
    
        return $sponsorships;
    }
    function getAllPayments(){
        $con = dbConnection();
        $sql = "SELECT * FROM payment";
        $result = mysqli_query($con, $sql);
        $payments = [];
    
        while($row = mysqli_fetch_assoc($result)){
            array_push($payments, $row);
        }
    
        return $payments;
    }
    function getAllUser(){
        $con = dbConnection();
        $sql = "select * from login";
        $result = mysqli_query($con, $sql);
        $users = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }

        return $users;
    }

    function getUserById($id){
        $con = dbConnection();
        $sql = "select * from login where id='{$id}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }

    function updateUserpass($password,$email){
        $con = dbConnection();
        $sql = "update login set password = '$password' where email = '$email'";
        if(mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }


    function createUser($user){
        $con = dbConnection();
        $sql = "insert into login values('', '{$user['username']}',  '{$user['password']}','{$user['email']}', '{$user['usertype']}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function deleteUser($id){

    $con = dbConnection();
    $sql = "DELETE FROM login WHERE id = $id";
    if(mysqli_query($con, $sql)){

        return true;
    } else {

        return false;
    }
}
function getUserdetails($username) {
    $con = dbConnection();
    $sql = "select * FROM login WHERE username = '$username'";
    $result = mysqli_query($con, $sql);
    $name = [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($name, $row);
    }
    return $name;
}

    

function updateUser($user){
    $con = dbConnection();
    $id = $user['id']; 
    $username = $user['username']; 
    $password = $user['password']; 
    $email = $user['email']; 
    $usertype = $user['usertype']; 

    $sql = "UPDATE login SET username='$username', password='$password', email='$email', usertype='$usertype' WHERE id=$id";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

?>