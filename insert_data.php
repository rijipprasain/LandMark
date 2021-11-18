<?php
include 'connection.php';

$name = $_POST['name'];
$checkin = date("Y-m-d H:i:s",strtotime($_POST['checkin']));
$checkout = date("Y-m-d H:i:s",strtotime($_POST['checkout']));
$room = $_POST['rooms'];
$guests = $_POST['guests'];
$plan = $_POST['plan'];
$groupname = $_POST['groupname'];

$phone = $_POST['phone'];
$email = $_POST['email'];

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

$sql = "INSERT INTO `reservation` (`reserve_id`, `name`, `checkin`, `checkout`, `room`, `guests`, `plan`, `group_name`, `phone`, `email`)"
    ."VALUES (NULL, '$name', '$checkin', '$checkout', '$room', '$guests', '$plan', '$groupname', '$phone', '$email');";

mysqli_query($connect,$sql);

//header('location: reserved.php');

