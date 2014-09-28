<?php
include_once("../tasks/dbconnect.php");
$name = $_POST['name'];
$descr = $_POST['descr'];
$taskid = $_POST['taskid'];
if(!empty($taskid)){
 
    $mysqli->query("UPDATE `user_tasks` set name='$name',descr='$descr' WHERE id='$taskid' AND users_id='$userid'");
}
else{
    
    //Status 7  active 10 completed 13 deleted
    $insert_row = $mysqli->query("INSERT INTO `user_tasks` (name,descr,status,users_id) VALUES ('$name','$descr','7','$userid')");
    if($insert_row){
          print 'Success! ID of last inserted record is : ' .$mysqli->insert_id .'<br />';
        }else{
          die('Error : ('. $mysqli->errno .') '. $mysqli->error);
        }
}
header("Location: ../tasks/listtask.php");
exit();