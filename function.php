<?php

include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$insert = mysqli_query($connect, "insert into list set username='$username', password='$password'");

?>