<?php 

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["pass"];

include("conn.php");

$sql = "INSERT INTO `user` (`name`, `email`, `pass`) VALUES ('$name', '$email', '$password');";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("location: dash.php");
}
else {
    mysqli_error($conn);
}

mysqli_close($conn);