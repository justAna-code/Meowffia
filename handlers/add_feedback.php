<?php
include '../inc/connect.php';

$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';
$photo_name = '';

if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $upload_dir = '../upload/';
    
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    
    $original_name = basename($_FILES['photo']['name']);
    $ext = pathinfo($original_name, PATHINFO_EXTENSION);
    $new_name = time() . '_' . uniqid() . '.' . $ext;
    $upload_file = $upload_dir . $new_name;
    
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $upload_file)) {
        $photo_name = $upload_file;
    }
}
$sql = "INSERT INTO feedback (name, phone, email, message, photo) VALUES (?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sssss", $name, $phone, $email, $message, $photo_name);

if ($stmt->execute()) {
    header('Location: ../answer.php');
    exit();
} else {
    echo "Ошибка: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>