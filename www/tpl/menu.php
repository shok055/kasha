<head>
    <title>Menu</title>
    <style>
        .padding
        {
            padding-top:30px;
        }
        .center
        {
            text-align: center;
        }
        .btn.btn-custom
        {
            background-color:#ccc;
        }
        .custom-icon{
            font-size:24px; color:grey;
        }
        .custom-icon_vk{
            border-radius: 3px;
            background:grey;
            color:white;
            font-size: 18px;
            line-height: 23px;
            height: 21px;
            display: inline-block;
            vertical-align: baseline;
        }
        .input-group_custom{
            width:400px;
            margin: 0 auto;
        }

    </style>
    <link rel="stylesheet" href="<?= Root('i/css/menu-item.css')?>">
</head>

<div class="content">
    <div class="row">
        <div class="col-xs-3"><img src="<?= Root('i/image/Kasha_iz_topora_2.jpg')?>">
            <div class="padding"><font size="6" face="Comic Sans MS">У меня есть :</div>
            <?php foreach ($real_ingredients as $ingredient): ?>
            <div><button type="button" class="btn btn-custom"><?=$ingredient['name']?></button></div>
            <?php endforeach;?>
            <div><img src="<?= Root('i/image/Dash.jpg')?>"></div>
            <div><font size="4" face="Comic Sans MS">Время приготовления :</div>
            <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                </div>
            </div>
        </div>
        <div class="col-xs-8">
            <div class="row">
                <?php foreach($items as $number => $item): ?>
                    <div class="col-xs-4">
                        <div class="thumbnail menu-item">
                            <a href="dish?id=<?= $item['id'] ?>">
                                <?php if($item['img_url']): ?>
                                    <img src="<?= $item['img_url']?>">
                                <?php else: ?>
                                    <img src="<?= Root('i/image/Grey.jpg')?>">
                                <?php endif; ?>
                            </a>
                            <div class="caption">
                                <h3><?= $item['name'] ?> №<?= $number ?></h3>
                                <p class="btn btn-custom" role="button">5 мин</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 center">
            <span class="custom-icon"><i class="fa fa-facebook-square"></i></span>
            <span class="custom-icon"><i class="fa fa-twitter-square"></i></span>
            <span class="custom-icon custom-icon_vk"><i class="fa fa-vk"></i></span>
        </div>
    </div>
</div>
