<br>
<div class="card">
    <div class="card-header">Tài khoản</div>
    <div class="card-body">
        <img class="card-img-top" src="https://i.pinimg.com/564x/24/21/85/242185eaef43192fc3f9646932fe3b46.jpg"
            alt="Card image">
        <h5 class="card-title">Xin chào: <?php echo $_SESSION['user']; ?></h5>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="admin" class="nav-link">Vào quản trị</a>
            </li>
            <li class="nav-item">
                <a href="?act=logout" class="nav-link">Đăng xuất</a>
            </li>
        </ul>
    </div>
</div>
<br>