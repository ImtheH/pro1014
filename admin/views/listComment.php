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
        <h3 class="alert alert-success">Danh sách bình luận</h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nội dung</th>
                    <th>Người bình luận</th>
                    <th>Sản phẩm</th>
                    <th>Ngày bình luận</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($comments as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $value['id_com'] ?></td>
                        <td><?= $value['detail_com'] ?></td>
                        <td><?= $value['user'] ?></td>
                        <td><?= $value['name_pro'] ?></td>
                        <td><?= $value['date_com'] ?></td>
                        <td><a onclick="return confirm('Bạn có muốn xóa ko?')"
                                href="?act=deleteComment&id=<?= $value['id_com'] ?>"><button class="btn btn-primary">Xóa</button></a></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>