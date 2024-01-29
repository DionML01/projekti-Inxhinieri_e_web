<?php
include 'includes/dbconnect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$query = "DELETE FROM posts WHERE post_id = :id";
$query = $pdo->prepare($query);
$query->execute(['id' => $id]);
header("Location: index.php?page=posts");

?>
