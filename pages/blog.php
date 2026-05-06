<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meowfia — полезное</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<?php include '../inc/header.php'; ?>

<main class="container my-5">
    <div class="text-center mb-5 position-relative">
        <div class="position-absolute top-50 start-0 w-100" style="height: 2px; background: #c59b6c; z-index: 0;"></div>
        <div class="position-relative d-inline-block bg-meowfia-light px-5 py-3 rounded-5" style="z-index: 1;">
            <h1 class="display-4 fw-bold d-inline" style="color: #4a3729;">ПОЛЕЗНОЕ</h1>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-md-6 col-lg-4">
            <div class="bg-meowfia-soft p-3 rounded-4 h-100">
                <img src="../images/kitten.jpg" alt="Котик" class="img-fluid rounded-4 mb-3">
                <h3 class="h4">Как выбрать лежанку для кота</h3>
                <p class="text-secondary">Чтобы он не обиделся и не ушёл к другому дону</p>
                <a href="article1.php" class="btn btn-outline-secondary mt-2">Читать →</a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="bg-meowfia-soft p-3 rounded-4 h-100">
                <img src="../images/walk.avif" alt="прогулка с собакой" class="img-fluid rounded-4 mb-3">
                <h3 class="h4">5 правил безопасности хвостиков</h3>
                <p class="text-secondary">Как гулять на районе без проблем</p>
                <a href="article2.php" class="btn btn-outline-secondary mt-2">Читать →</a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="bg-meowfia-soft p-3 rounded-4 h-100">
                <img src="../images/pug.webp" alt="Мопсик" class="img-fluid rounded-4 mb-3">
                <h3 class="h4">Чем кормить мафиозного мопса</h3>
                <p class="text-secondary">Рацион дона Котовского</p>
                <a href="article3.php" class="btn btn-outline-secondary mt-2">Читать →</a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="bg-meowfia-soft p-3 rounded-4 h-100">
                <img src="../images/humanandcat.webp" alt="на чиле" class="img-fluid rounded-4 mb-3">
                <h3 class="h4">Как понять, что кот готов к переговорам</h3>
                <p class="text-secondary">Кошачий язык жестов</p>
                <a href="article4.php" class="btn btn-outline-secondary mt-2">Читать →</a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="bg-meowfia-soft p-3 rounded-4 h-100">
                <img src="../images/toys.jpg" alt="довольная пёса" class="img-fluid rounded-4 mb-3">
                <h3 class="h4">Игрушки, которые не стыдно дарить</h3>
                <p class="text-secondary">Топ-5 подарков для хвостиков</p>
                <a href="article5.php" class="btn btn-outline-secondary mt-2">Читать →</a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="bg-meowfia-soft p-3 rounded-4 h-100">
                <img src="../images/security.webp" alt="очень надёжно" class="img-fluid rounded-4 mb-3">
                <h3 class="h4">Как мы охраняем твой заказ</h3>
                <p class="text-secondary">Секреты доставки Meowfia</p>
                <a href="article6.php" class="btn btn-outline-secondary mt-2">Читать →</a>
            </div>
        </div>
    </div>

    <section class="my-5">
        <div class="row">
            <div class="col-12">
                <div class="contact-block">
                    <h3 class="mb-3">ХОЧЕШЬ ПЕРВЫМ ЧИТАТЬ?</h3>
                    <h3 class="display-6">ПОДПИШИСЬ НА РАССЫЛКУ</h3>
                    <div class="mt-4">
                        <input type="email" class="form-control form-control-lg d-inline-block w-50" placeholder="твой email">
                        <button class="btn btn-light btn-lg ms-2">тык</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../inc/footer.php'; ?>
</body>
</html>