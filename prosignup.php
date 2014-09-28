<?php
include_once("../tasks/dbconnect.php");


    $uname = $_POST['uname'];
    $password = $_POST['password'];
    if(!empty($uname) && !empty($password)){
        $insert_row = $mysqli->query("INSERT INTO `users` (uname,password) VALUES ('$uname','$password')");
        if($insert_row){
          print 'Success! ID of last inserted record is : ' .$mysqli->insert_id .'<br />';
        }else{
          die('Error : ('. $mysqli->errno .') '. $mysqli->error);
        }
        header("Location: ../tasks/login.php");
        exit;
    }
     header("Location: ../tasks/signup.php");
     exit;
