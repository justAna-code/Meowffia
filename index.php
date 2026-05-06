<?php
include 'inc/connect.php';

$sql = "SELECT * FROM `index_page` ORDER BY `sort_order`";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meowfia — всё для хвостика</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'inc/header.php'; ?>

<main class="container my-5">
    <?php
    foreach ($result as $item) {
        echo $item["content"];
    }
    ?>
</main>

<?php include 'inc/footer.php'; ?>

<div class="cat-chat">
    🐱 Напиши дону
    <span class="chat-tooltip">Кликни, чтобы начать разговор</span>
</div>

</body>
</html>