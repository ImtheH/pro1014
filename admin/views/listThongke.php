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
        <h3 class="alert alert-success">Thống kê</h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá trung bình</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($thongke as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $value['id_cat'] ?></td>
                        <td><?= $value['name_cat'] ?></td>
                        <td><?= $value['countsp'] ?></td>
                        <td><?= $value['maxprice'] ?></td>
                        <td><?= $value['minprice'] ?></td>
                        <td><?= $value['avgprice'] ?></td>                      
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <a href="?act=bieudo" class="btn btn-primary">Biểu đồ</a>
    </div>
</body>

</html>