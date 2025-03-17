<?php
if (isset($_SESSION['register_errors'])) {
    $errors = $_SESSION['register_errors'];
    unset($_SESSION['register_errors']);
    echo "<script>";
    foreach ($errors as $error) {
        echo "alert('$error');";
    }
    echo "</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="card">
        <div class="card-header">Đăng ký tài khoản</div>
        <div class="card-body">
            <form action="index.php?act=dangky" method="post">
                <div class="form-group">
                    <label class="form-label">Tên đăng nhập</label>
                    <input class="form-control" name="user" type="text" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Mật khẩu</label>
                    <input class="form-control" name="pass" type="password" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Nhập lại mật khẩu</label>
                    <input class="form-control" name="re_pass" type="password" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input class="form-control" name="email" type="email" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Địa chỉ</label>
                    <input class="form-control" name="diachi" type="text" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Điện thoại</label>
                    <input class="form-control" name="dienthoai" type="number" required>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-info" name="btn_register">Đăng ký</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>