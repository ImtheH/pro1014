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
        <h3 class="alert alert-success">Thêm mới hàng hóa</h3>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="form-label">Mã hàng hóa</label>
                <input value="auto number" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label class="form-label">Tên hàng hóa</label>
                <input class="form-control" name="name" type="text" required>
            </div>
            <div class="form-group">
                <label class="form-label">Ảnh hàng hóa</label>
                <input class="form-control" name="img" type="file" required>
            </div>
            <div class="form-group">
                <label class="form-label">Giá hàng hóa</label>
                <input class="form-control" name="price" type="text" required>
            </div>
            <div class="form-group">
                <label class="form-label">Chi tiết hàng hóa</label>
                <input class="form-control" name="detail" type="text" required>
            </div>
            <div class="form-group">
                <label class="form-label">Loại hàng hóa</label>
                <select name="cate" class="form-select">
                        <?php 
                        foreach ($category as $key => $value) {
                        ?>
                            <option value="<?= $value['id_cat']?>"><?= $value['name_cat']?></option>
                        <?php
                        }
                        ?>
                    </select>
            </div>
            <br>
            <div class="form-group">
                <button type="submit" name="btn_insert" class="btn btn-primary">Thêm mới</button>
                <button type="reset" class="btn btn-primary">Nhập lại</button>
                <a href="?act=listProduct" class="btn btn-primary">Danh sách</a>
            </div>
        </form>
    </div>
</body>

</html>
            