<div class="card">
    <div class="card-header">Top 10 yêu thích</div>
    <div class="card-text">
        <div class="list-group">
            <?php
            foreach ($top10Pro as $top10) {
                ?>
                <ul class="list-group list-group-horizontal">
                <img src="assets/images/<?= $top10['img']?>" alt="" class="img-thumbnail" width="80">               
                <a href="?act=detailPro&id=<?= $top10['id_pro'] ?>" class="list-group-item list-group-item-action">
                    <?= $top10['name_pro'] ?><span class="badge bg-primary text-white"> <?= $top10['view_pro']?> lượt xem</span>
                </a>               
                </ul>
                <?php
            }
            ?>

        </div>
    </div>
</div>
<br>