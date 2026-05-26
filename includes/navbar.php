<nav class="navbar navbar-expand-lg navbar-dark tf-navbar">
    <div class="container">
        <a class="navbar-brand fw-bold" href="dashboard.php">
            Tre Fratelli
        </a>

        <div class="d-flex gap-2">
            <a href="?lang=it" class="btn btn-sm btn-outline-light">IT</a>
            <a href="?lang=en-gb" class="btn btn-sm btn-outline-light">EN</a>
            <a href="?lang=pt-pt" class="btn btn-sm btn-outline-light">PT</a>
            <a href="../logout.php" class="btn btn-sm btn-warning">
                <?= $text['logout'] ?>
            </a>
        </div>
    </div>
</nav>