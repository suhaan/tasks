<?php

include_once("../tasks/dbconnect.php");
if(!empty($_POST['uname']) && !empty($_POST['password'])){
 
 if($result = $mysqli->query("SELECT id FROM users WHERE uname='{$_POST['uname']}' AND password='{$_POST['password']}'")){
     while ($row = $result->fetch_assoc()) {
        $userid = $row['id'];
    }
}
 
 if(!empty($userid)){
    $_SESSION['userid'] = $userid;
    header("Location: ../tasks/listtask.php");
    exit;
}
else{
    header("Location: ../tasks/signup.php");
    exit;
}
    
}