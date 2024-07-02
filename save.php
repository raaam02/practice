<?php 
$id = $_POST["idd"];
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["pass"];

include("conn.php");

$sql = "UPDATE `user` SET `name` = '$name', `email` = '$email', `pass` = '$password' WHERE `user`.`id` = '$id';";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("location: dash.php");
}
else {
    mysqli_error($conn);
}

mysqli_close($conn);