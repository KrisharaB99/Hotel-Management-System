<?php

$connection = mysqli_connect('localhost','root','','ck');

mysqli_select_db($connection,"contact");

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$query = "INSERT INTO `contact`(`name`,`email`,`msg`) VALUES ('$name','$email','$msg') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>