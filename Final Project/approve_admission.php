<?php
include 'db_connection.php';

$id = $_GET['id'];
$conn->query("UPDATE admission_requests SET status = 'Approved' WHERE id = $id");
header('Location: ex.php');
?>
