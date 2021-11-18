 <?php
include '../connection.php';
$id = $_GET['id'];

$sql = "DELETE FROM `reservation` WHERE `reservation`.`reserve_id` = $id";

//parse and execute the statement
$query = mysqli_query($connect,$sql);
header('location: index.php');