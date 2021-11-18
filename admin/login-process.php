<?php
include "../connection.php";
$username= $_POST['username'];
$password = $_POST['password'];
//to prevent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string ( $connect, $username );
$password = mysqli_real_escape_string ( $connect, $password );

$sql = "SELECT * FROM `admin`";
//parse and execute the statement
$query = mysqli_query($connect,$sql);

while($row = mysqli_fetch_array($query)) {
    if ($row['username'] == $username && $row['password'] == sha1($password)) {
        echo "Login Success!!! Welcome " . $row['username'];
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('location: index.php');
    }else{
        echo "Failed to login";
    }
}