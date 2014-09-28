<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "tasks");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$userid = $_SESSION['userid'];