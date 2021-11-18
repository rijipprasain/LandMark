<?php
include "../connection.php";
$id = $_POST['reserved_id'];

$name = $_POST['name'];
$checkin = date("Y-m-d H:i:s",strtotime($_POST['checkin']));
$checkout = date("Y-m-d H:i:s",strtotime($_POST['checkout']));
$room = $_POST['rooms'];
$guests = $_POST['guests'];
$plan = $_POST['plan'];
$groupname = $_POST['groupname'];

$phone = $_POST['phone'];
$email = $_POST['email'];

print_r($_POST);

$sql = "UPDATE `reservation` SET `name` = '$name', `date` = CURRENT_DATE(), `checkin` = '$checkin', `checkout` = '$checkout', `room` = '$room', `guests` = '$guests', `plan` = '$plan', `group_name` = '$groupname', `phone` = '$phone', `email` = '$email' WHERE `reservation`.`reserve_id` = $id";
mysqli_query($connect,$sql);
  header("location: index.php");