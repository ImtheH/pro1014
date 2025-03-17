<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website bán thiết bị điện tử HI TECH</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <style>
        .carousel-inner img {
            height: 400px;
            /* Set your desired height */
            object-fit: cover;
            /* This will ensure the image covers the area while maintaining aspect ratio */
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="row">
            <h1 class="alert alert-success">Website bán thiết bị điện tử HI TECH</h1>
        </header>
        <nav class="row">
            <?php require_once 'layout/menu.php'; ?>
        </nav>
        <div class="row">
            <article class="col-sm-9">
                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <?php
                        foreach ($top10Pro as $key => $value) {
                            ?>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="<?= $key ?>" class="<?php if ($key == 0) {
                                echo "active";
                            } ?>"></button>
                            <?php
                        }
                        ?>

                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <?php
                        foreach ($top10Pro as $key => $value) {
                            ?>
                            <div class="carousel-item <?php if ($key == 0) {
                                echo "active";
                            } ?>">
                                <img src="assets/images/<?= $value['img'] ?>" alt="" class="mx-auto d-block">
                                <div class="carousel-caption">
                                    <h2 class="text-warning"><?= $value['name_pro'] ?></h2>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
                <?php require_once 'layout/hanghoa.php' ?>
            </article>
            <aside class="col-sm-3">
                <?php if (isset($_SESSION['user'])) {
                    require_once 'layout/dadangnhap.php';
                } else {
                    require_once 'layout/dangnhap.php';
                } ?>
                <?php require_once 'layout/loaihang.php'; ?>
                <?php require_once 'layout/top10.php'; ?>
            </aside>
        </div>
        <footer class="row alert alert-success">Copyright &copy; 2024</footer>
    </div>
</body>

</html>