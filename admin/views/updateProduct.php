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
            <?php require_once 'component/menu.php'; ?>
        </nav>
        <h3 class="alert alert-success">Sửa hàng hóa</h3>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="form-label">Tên hàng hóa</label>
                <input class="form-control" type="text" name="name" value="<?= $oneProduct['name_pro'] ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Ảnh hàng hóa</label>
                <img src="../assets/images/<?= $oneProduct['img'] ?>" alt="" width="200px" height="130px">
                <input class="form-control" type="file" name="img">
            </div>
            <div class="form-group">
                <label class="form-label">Giá hàng hóa</label>
                <input class="form-control" type="text" name="price" value="<?= $oneProduct['price_pro'] ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Chi tiết hàng hóa</label>
                <input class="form-control" type="text" name="detail" value="<?= $oneProduct['detail_pro'] ?>">
            </div>
            <div class="form-group">
                <label class="form-label">Loại hàng hóa</label>
                <select name="cate" id="cate" class="form-select">
                    <?php
                    foreach ($category as $key => $value) {
                        ?>
                        <option value="<?= $value['id_cat'] ?>" <?php if ($value['id_cat'] === $oneProduct['id_cat'])
                              echo 'selected'; ?>>
                            <?= $value['name_cat'] ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <button type="submit" name="btn_update" class="btn btn-primary">Sửa</button>
                <button type="reset" class="btn btn-primary">Nhập lại</button>
                <a href="?act=listProduct" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
</body>

</html>