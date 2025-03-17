<h1 class="text-primary">Danh sách sản phẩm</h1>
<div class="row">
    <?php if (isset($product)) {
     foreach ($product as $pro) {
        ?>
        <div class="col-sm-3" >
            <div class="card">
                <div class="card-body">
                <img src="assets/images/<?= $pro['img']?>" class="card-img-top" alt="..." >
                    <h5 class="card-title"><a href="?act=detailPro&id=<?= $pro['id_pro']?>" class="nav-link active"><?= $pro['name_pro']?></a></h5>
                    <p class="card-text">
                        <span class="text-danger">
                            <?= number_format($pro['price_pro'])?>đ
                        </span>
                    </p>
                </div>
            </div>
            <br>
        </div>
        
    <?php
    } }
    ?>
  
</div>