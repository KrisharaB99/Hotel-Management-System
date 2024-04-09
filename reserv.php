<?php

$connection = mysqli_connect('localhost','root','','ck');

mysqli_select_db($connection,"reservation");

$name = $_POST['name'];
$nic = $_POST['nic'];
$rooms = $_POST['rooms'];
$arr = $_POST['arr'];
$dep = $_POST['dep'];

$query = "INSERT INTO `reservation`(`name`,`nic`,`rooms`,`arr`,`dep`) VALUES ('$name','$nic','$rooms','$arr','$dep') ";

mysqli_query($connection,$query);

echo "You have been successfully Reserved with CK_HOUSE, Thank you!...";

?>
