<?php
include_once("../tasks/dbconnect.php");
if(!empty($_GET['action'])){
    if(($_GET['action'] == 'del')){
        $status = '13';
        
    }
    if($_GET['action'] == 'comp'){
        $status = '10';
    }
}
if(!empty($_GET['taskid']) ){
    $mysqli->query("UPDATE user_tasks SET status='$status' WHERE id='{$_GET['taskid']}' AND users_id='$userid'");
}
header("Location: ../tasks/listtask.php");
exit();