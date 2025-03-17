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
                <div class="mt-4 p-5 bg-info rounded">
                    <h1>LỜI MỞ ĐẦU</h1>
                    <p>

                        Trong bối cảnh công nghệ số ngày càng phát triển mạnh mẽ, việc xây dựng các trang web thương mại
                        điện tử đã trở thành một phần quan trọng trong hoạt động kinh doanh của nhiều doanh nghiệp. Nhận
                        thức được tầm quan trọng này, em - sinh viên trường Cao đẳng FPT Polytechnic - đã thực hiện dự
                        án
                        mẫu " Xây dựng website bán thiết bị điện tử Hi TECH " nhằm áp dụng những kiến thức đã học vào
                        thực
                        tiễn và đồng thời đáp ứng nhu cầu ngày càng cao của thị trường.
                        Dự án này không chỉ giúp em củng cố và nâng cao kiến thức về lập trình web, mà còn giúp em hiểu
                        rõ
                        hơn về quy trình phát triển một trang web thương mại điện tử hoàn chỉnh. Từ việc phân tích yêu
                        cầu,
                        thiết kế giao diện, lập trình chức năng đến kiểm thử và triển khai, em đã có cơ hội trải nghiệm
                        toàn
                        bộ các bước trong quá trình xây dựng một sản phẩm thực tế.
                        Website bán thiết bị điện tử mà em thiết kế sẽ cung cấp một giao diện thân thiện, dễ sử dụng,
                        cùng
                        với các chức năng như giỏ hàng, thanh toán trực tuyến, quản lý sản phẩm và đơn hàng. Đặc biệt,
                        trang
                        web còn được tối ưu hóa về mặt bảo mật và hiệu suất để mang lại trải nghiệm tốt nhất cho người
                        dùng.
                        Em hy vọng rằng dự án này sẽ không chỉ là một bài tập học thuật mà còn là một sản phẩm có thể
                        ứng
                        dụng thực tiễn, góp phần nâng cao kiến thức và kỹ năng cho bản thân em. Em xin gửi lời cảm ơn
                        chân
                        thành đến quý thầy cô đã hướng dẫn và hỗ trợ em trong suốt quá trình thực hiện dự án.
                        Mong rằng dự án mẫu này sẽ nhận được sự đánh giá cao và góp ý từ quý thầy cô và các bạn để em có
                        thể
                        hoàn thiện hơn trong tương lai.

                    </p>
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

</html>