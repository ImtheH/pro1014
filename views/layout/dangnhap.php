<?php
if (isset($_SESSION['login_errors'])) {
    $errors = $_SESSION['login_errors'];
    unset($_SESSION['login_errors']);
    echo "<script>";
    foreach ($errors as $error) {
        echo "alert('$error');";
    }
    echo "</script>";
}
?>
<br>
<div class="card">
    <div class="card-header">Tài khoản</div>
    <div class="card-body">
        <form action="index.php?act=login" method="post">
            <div class="form-group">
                <label class="form-label">Tên đăng nhập</label>
                <input class="form-control" name="user" type="text">
            </div>
            <div class="form-group">
                <label class="form-label">Mật khẩu</label>
                <input class="form-control" name="pass" type="password">
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-info" name="btn_login">Đăng nhập</button>
            </div>
        </form>
        <br>
        <button class="btn btn-info"><a href="?act=dangky" class="nav-link">Đăng ký thành viên</a></button>
    </div>
</div>
<br>