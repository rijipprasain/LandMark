<?php
include '../connection.php';

$sql = "SELECT * FROM `reservation`";

//parse and execute the statement
$query = mysqli_query($connect,$sql);

$data = array();
while($row = mysqli_fetch_array($query)){
    array_push($data, $row);
}
