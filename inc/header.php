<?php
$depth = '';
if (strpos($_SERVER['SCRIPT_FILENAME'], '/pages/') !== false) {
    $depth = '../';
}
?>

<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar-meowfia d-flex justify-content-between align-items-center">
                    <div class="logo mb-2 mb-md-0">
                        <a href="<?php echo $depth; ?>index.php">
                            <img src="<?php echo $depth; ?>images/meowffia.jpeg" alt="Meowfia" class="logo-img rounded-circle" style="width: 70px; height: 70px; object-fit: cover;">
                        </a>
                    </div>
                    <ul class="list-unstyled d-flex flex-wrap justify-content-center gap-2 gap-md-4 m-0">
                        <li><a href="<?php echo $depth; ?>index.php" class="nav-link px-2 px-md-3">Главная</a></li>
                        <li><a href="<?php echo $depth; ?>pages/catalog.php" class="nav-link px-2 px-md-3">Товары</a></li>
                        <li><a href="<?php echo $depth; ?>pages/delivery.php" class="nav-link px-2 px-md-3">Доставка</a></li>
                        <li><a href="<?php echo $depth; ?>pages/blog.php" class="nav-link px-2 px-md-3">Блог</a></li>
                        <li><a href="<?php echo $depth; ?>index.php#feedback" class="nav-link px-2 px-md-3">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>