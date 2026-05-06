<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meowfia — доставка</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<?php include '../inc/header.php'; ?>
<main class="container my-5">
    <div class="text-center mb-5 position-relative">
        <div class="position-absolute top-50 start-0 w-100" style="height: 2px; background: #c59b6c; z-index: 0;"></div>
        <div class="position-relative d-inline-block bg-meowfia-light px-5 py-3 rounded-5" style="z-index: 1;">
            <h1 class="display-4 fw-bold d-inline" style="color: #4a3729;">ДОСТАВКА</h1>
        </div>
    </div>
    <section class="my-5">
        <div class="row">
            <div class="col-12">
                <div class="p-4 bg-meowfia-soft rounded-4">
                    <p class="fs-4 fst-italic mb-4">
                        "Семья Meowfia не любит, когда заказы опаздывают или приходят помятыми. Поэтому наша доставка работает как часы — быстро, аккуратно и с уважением к твоему питомцу."
                    </p>
                    <p class="fs-5">
                        <span class="fw-bold">Дон Котовский</span><br>
                        <span class="text-secondary">Основатель клана</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4">Зоны доставки</h2>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="bg-meowfia-dark text-meowfia-gold">
                            <tr>
                                <th scope="col">РАЙОНЫ</th>
                                <th scope="col">БЕСПЛАТНАЯ ДОСТАВКА</th>
                                <th scope="col">ПЛАТНАЯ ДОСТАВКА</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Беверли Хиллз<br>
                                    Голливуд<br>
                                    Санта-Моника
                                </td>
                                <td>ОТ $50</td>
                                <td>БЕСПЛАТНО</td>
                            </tr>
                            <tr>
                                <td>
                                    Лос-Анджелес<br>
                                    Пасадена<br>
                                    Лонг-Бич
                                </td>
                                <td>ОТ $80</td>
                                <td>$10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-muted mt-3">🚚 При заказе от $50 доставка бесплатно в любую зону центральных районов</p>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4">Условия доставки</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent">🐾 Доставляем с 10:00 до 20:00 ежедневно</li>
                    <li class="list-group-item bg-transparent">🐾 Курьер позвонит за 30 минут</li>
                    <li class="list-group-item bg-transparent">🐾 Можно оплатить картой курьеру</li>
                    <li class="list-group-item bg-transparent">🐾 Упаковываем так, чтобы ничего не помялось</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="row">
            <div class="col-12">
                <div class="contact-block">
                    <h3 class="mb-3">ЕСТЬ ВОПРОСЫ?</h3>
                    <a href="tel:+14248884523" class="text-decoration-none" style="color: inherit;">
                        <h3 class="display-6">+1 (424) 888-45-23</h3>
                    </a>
                    <h3 class="mt-3">ПИШИ В TELEGRAM — @meowfia_support</h3>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include '../inc/footer.php'; ?>
</body>
</html>