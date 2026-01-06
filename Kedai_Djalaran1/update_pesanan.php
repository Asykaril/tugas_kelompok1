<?php
$conn = new mysqli("localhost","root","","kedai_djalaran");

$id = $_GET['id'];
$status = $_GET['s'];

$conn->query("UPDATE pesanan SET status='$status' WHERE id=$id");

header("Location: dashboard.php");
