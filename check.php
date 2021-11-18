<?php
include "connection.php";
$date_in = $_POST['date_in'];
$date_out = $_POST['date_out'];
//$rooms = $_POST['rooms'];
$rooms=15;
$totalroom = 15;
$data=[];

$sql = "select sum(room) as reserved_room from reservation where  checkin='$date_in' AND checkout='$date_out'";


// -- $sql = "SELECT SUM(room) AS reserved_room FROM (SELECT room FROM `reservation` WHERE checkin='$date_in' AND checkout='$date_out') AS reserved";
$query= $connect->query($sql);
print_r($query);
$row = mysqli_fetch_array($query);
array_push($data,$row);
//$data as $key=>$value;
print_r($data);
//$data as $key=>$value
$reserved = $data[0]['reserved_room'];
echo $reserved;

if($totalroom<($reserved+$rooms)){
    echo "Rooms not available ";
}else{
//    header("location: form.php");
}