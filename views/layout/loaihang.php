<div class="card">
    <div class="card-header" style="border-bottom:0px">Danh mục</div>
    <div class="card-text">
        <div class="list-group">
            <?php
            foreach ($category as $cat) {
                ?>
                <a href="?act=<?= $cat['id_cat'] ?>" class="list-group-item list-group-item-action">
                    <?= $cat['name_cat'] ?>
                </a>
                <?php
            }
            ?>

        </div>
    </div>
    <div class="card-footer" style="border-top:0px">
        <form action="" method="POST">
            <div class="row">
                <div class="col-sm-8">
                    <input type="text" name="search" class="form-control" placeholder="Tìm tên sản phẩm">
                </div>
                <div class="col-sm-4">
                    <button type="submit" name="btn" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>
<br>