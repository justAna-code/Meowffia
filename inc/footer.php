<?php
$depth = '';
if (strpos($_SERVER['SCRIPT_FILENAME'], '/pages/') !== false) {
    $depth = '../';
}
?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5 class="text-meowfia-gold">Навигация</h5>
                <ul class="list-unstyled">
                    <li><a href="<?php echo $depth; ?>index.php">Главная</a></li>
                    <li><a href="<?php echo $depth; ?>pages/catalog.php">Товары</a></li>
                    <li><a href="<?php echo $depth; ?>pages/delivery.php">Доставка</a></li>
                    <li><a href="<?php echo $depth; ?>pages/blog.php">Блог</a></li>
                    <li><a href="<?php echo $depth; ?>index.php#feedback">Контакты</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="text-meowfia-gold">Информация</h5>
                <p>Зоомагазин "Meowfia"<br>ИП Котовский К.К.<br> © Все хвосты защищены</p>
            </div>
            <div class="col-md-3">
                <div class="footer_social">
                    <h5 class="text-meowfia-gold"> 𓃠 Мы в соц сетях</h5>
                    <div class="d-flex gap-3 justify-content-center justify-content-md-start">
                        <a href="https://vk.com" target="_blank">
                            <img src="<?php echo $depth; ?>images/vk.png" alt="ВКонтакте" style="width: 30px; height: 30px;">
                        </a>
                        <a href="https://t.me" target="_blank">
                            <img src="<?php echo $depth; ?>images/tg.png" alt="Telegram" style="width: 35px; height: 35px;">
                        </a>
                        <a href="https://instagram.com" target="_blank">
                            <img src="<?php echo $depth; ?>images/insta.png" alt="Instagram" style="width: 30px; height: 30px;">
                        </a>
                    </div>
                </div>
                <div class="footer_add mt-3">
                    <small>При создании учебного сайта использовались изображения с портала pinterest.com. Вдохновлялись котами и собаками со всего мира.</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Скрытая ссылка на админку -->
<div style="text-align: center; margin-top: 10px;">
    <a href="admin.php" style="opacity: 0.2; font-size: 10px; text-decoration: none;">🔒</a>
</div>
</footer>

<div class="cat-chat">
    𓃠 Спроси у дона
    <span class="chat-tooltip">Напиши нам на почту hello@meowfia.com</span>
</div>