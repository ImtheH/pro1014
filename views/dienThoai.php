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