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
        #ex1Slider .slider-handle {
            background:orange;
        }
        .btn.btn-color{
            background: orange;
        }

    </style>
    <link rel="stylesheet" href="<?= Root('i/css/menu-item.css')?>">
    <link rel="stylesheet" href="<?= Root('i/css/components/bootstrap-slider/bootstrap-slider.min.css')?>">
    <script src="<?= Root('i/js/components/bootstrap-slider/bootstrap-slider.min.js')?>"></script>
    <script>
        ingredients=<?= json_encode($ingredients)?>;
    </script>
    <script src="<?= Root('i/js/controller/menu.js')?>"></script>
</head>

<div class="content">
    <div class="row">
        <div class="col-xs-3"><img src="<?= Root('i/image/Kasha_iz_topora_2.jpg')?>">
            <div class="padding"><font size="6">У меня есть :</div>
            <?php foreach ($real_ingredients as $ingredient): ?>
            <div><button type="button" class="btn btn-custom btn-color"><?=$ingredient['name']?></button></div>
            <?php endforeach;?>
            <div><img src="<?= Root('i/image/Dash.jpg')?>"></div>
            <div><font size="4">Время приготовления :</div>
            <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-max="120" data-slider-step="1" data-slider-value="40"/>

        </div>
        <div class="col-xs-8">
            <div class="row js-ajax-reload">
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
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 center">
            <span class="custom-icon"><a href="http://www.facebook.com/sharer.php?u=104.245.39.17&t=Каша из топора"><i class="fa fa-facebook-square"></i></a></span>
            <span class="custom-icon"><a href="http://twitter.com/home?status=104.245.39.17"><i class="fa fa-twitter-square"></i></a></span>
        </div>
    </div>
</div>
