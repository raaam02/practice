<?php 

$id = $_GET["id"];

include("conn.php");

$sql = "DELETE FROM `user` WHERE `user`.`id` = $id";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("location: dash.php");
}
else {
    mysqli_error($conn);
}

mysqli_close($conn);