<?php
include 'inc/connect.php';

if (isset($_GET['logout'])) {
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Admin Panel"');
    header('Location: index.php');
    exit;
}

if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_PW'] != '123') {
    header('WWW-Authenticate: Basic realm="Admin Panel"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Доступ запрещён';
    exit;
}

$sql = "SELECT * FROM feedback ORDER BY created_at DESC";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Meowfia — Админка</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'inc/header.php'; ?>

<main class="container my-5">
    <div class="text-center mb-4">
        <h1>📋 Заявки от пользователей</h1>
        <p>Всего: <?php echo $result->num_rows; ?></p>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover bg-white">
            <thead class="bg-meowfia-dark text-meowfia-gold">
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>Телефон</th>
                    <th>Email</th>
                    <th>Сообщение</th>
                    <th>Фото</th>
                    <th>Дата</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['message']); ?></td>
                    <td>
                        <?php if ($row['photo']): ?>
                            <a href="<?php echo $row['photo']; ?>" target="_blank">📷 Смотреть</a>
                        <?php else: ?>
                            —
                        <?php endif; ?>
                    </td>
                    <td><?php echo $row['created_at']; ?></td>
                    <td>
                        <a href="delete_feedback.php?id=<?php echo $row['id']; ?>" 
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('Удалить заявку?')">🗑️</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    
    <div class="text-center mt-4">
        <a href="admin.php?logout=1" class="btn btn-sm btn">Выйти</a>
    </div>
</main>

<?php include 'inc/footer.php'; ?>
</body>
</html>