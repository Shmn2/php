<?php

    
    require_once('../model/userModel.php');

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $usertype = $_REQUEST['usertype'];

    if($username == "" || $password == ""|| $usertype == ""){
        echo "null usernamepassword";
    }else {

        $status = login($username, $password, $usertype);

        if($status){
            setcookie('flag', 'true', time()+3000, '/');
            header('location: ../view/profile.php');
        }else{
            echo "invalid User!";
        }    
    }
?>