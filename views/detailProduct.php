
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


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
                <h1><?= $productOne['name_pro'] ?></h1>
                <img src="assets/images/<?= $productOne['img'] ?>" alt="" />
                <h1>
                    <span class="text-danger">
                        <?= number_format($productOne['price_pro']) ?>đ
                    </span>
                </h1>
                <h3 class="text-info">
                    <?= $productOne['detail_pro'] ?>
                </h3>
                <br>
                <div class="card">
                    <div class="card-header">Bình luận</div>
                    <div class="card-body">
                        <?php
                        foreach ($comments as $com) {
                            ?>
                            <div class="d-flex justify-content-between">
                                <div><?= $com['detail_com'] ?></div>
                                <div>
                                    <?= $com['user'] ?>,
                                    <?= $com['date_com'] ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="card-footer">
                        <form id="commentForm">
                            <input type="hidden" name="id_pro" value="<?= $productOne['id_pro'] ?>">
                            <div class="row">
                                <div class="col-sm-8">
                                    <input type="text" name="detail" class="form-control" placeholder="Nhập bình luận"
                                        required>
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary">Gửi bình luận</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="card">
                        <div class="card-header">Hàng cùng loại</div>
                        <div class="card-body">
                            <?php
                            foreach ($relatedProduct as $related) {
                            ?>
                                <li><a href="?act=detailPro&id=<?= $related['id_pro']?>"><?=$related['name_pro'] ?></a></li>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
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

<script>
    $(document).ready(function () {
        $('#commentForm').on('submit', function (event) {
            event.preventDefault();

            $.ajax({
                url: 'index.php?act=addComment',
                method: 'POST',
                data: $(this).serialize(),
                success: function (response) {
                    if (response === "Bạn cần đăng nhập để có thể bình luận") {
                        alert(response);
                    } else{
                        location.reload();
                    }
                }
            });
        });
    });
</script>

</html>