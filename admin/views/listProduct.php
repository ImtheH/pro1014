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
        <h3 class="alert alert-success">Danh sách hàng hóa</h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Ảnh</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Lượt xem</th>
                    <th>Danh mục</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($products as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $value['id_pro'] ?></td>
                        <td><img src="../assets/images/<?= $value['img'] ?>" alt="" width="200px" height="130px" class="rounded"></td>
                        <td><?= $value['name_pro'] ?></td>
                        <td><?= number_format($value['price_pro']) ?>đ</td>
                        <td><?= $value['view_pro'] ?></td>
                        <td><?= $value['name_cat'] ?></td>
                        <td><a href="?act=updateProduct&id=<?= $value['id_pro'] ?>"><button class="btn btn-primary">Sửa</button></a></td>
                        <td><a onclick="return confirm('Bạn có muốn xóa ko?')"
                                href="?act=deleteProduct&id=<?= $value['id_pro'] ?>"><button class="btn btn-primary">Xóa</button></a></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>