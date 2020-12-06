<?php
include ('inc/connection.php');

$query = "delete from categories where id = {$_GET['id']}";

mysqli_query($conn, $query);

header("location:manage_category.php");


?>