<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUẢN TRỊ WEBSITE</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/jquery-ui.min.css" rel="stylesheet">
    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <header class="row">
            <h1 class="alert alert-danger">QUẢN TRỊ WEBSITE</h1>
        </header>
        <nav class="row">
            <?php require_once 'component/menu.php';?>
        </nav>
        <h3 class="alert alert-success">Sửa loại hàng</h3>

        <form action="" method="post">
            <div class="form-group">
                <label class="form-label">Tên loại</label>
                <input class="form-control" type="text" name="name" value="<?= $oneCategory['name_cat'] ?>">
            </div>
            <br>
            <div class="form-group">
                <button type="submit" name="btn_updateCate" class="btn btn-primary">Sửa</button>
                <button type="reset" class="btn btn-primary">Nhập lại</button>
                <a href="?act=listCategory" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
</body>

</html>
       