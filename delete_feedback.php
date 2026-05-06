<?php
include 'inc/connect.php';

$id = $_GET['id'] ?? 0;

$sql = "SELECT photo FROM feedback WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row && $row['photo'] && file_exists($row['photo'])) {
    unlink($row['photo']);
}

$sql = "DELETE FROM feedback WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

header('Location: admin.php');
exit();
?>