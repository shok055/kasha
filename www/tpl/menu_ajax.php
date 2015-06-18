<?php foreach($items as $number => $item): ?>
    <div class="col-xs-4">
        <div class="thumbnail menu-item">
            <a href="dish?id=<?= $item['id'].genIngredients($ingredients) ?>">
                <?php if($item['img_url']): ?>
                    <img src="<?= $item['img_url']?>">
                <?php else: ?>
                    <img src="<?= Root('i/image/Grey.jpg')?>">
                <?php endif; ?>
            </a>
            <div class="caption">
                <h3><?= $item['name'] ?></h3>
                <p class="btn btn-custom btn-color" role="button"><?= $item["timeout"]?> мин</p>
            </div>
        </div>
    </div>
    <?php if (($number+1) % 3 == 0): ?>
        </div><div class="row">
    <?php endif;?>
<?php endforeach; ?>