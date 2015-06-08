<head>
    <title>Блюдо <?= $dish->name ?></title>

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
</head>

<div class="content">
    <div class="row">
        <div class="col-xs-3"><img src="<?= Root('i/image/Kasha_iz_topora_2.jpg')?>">
            <div class="padding"><font size="6" face="Comic Sans MS">У меня есть :</div>
        </div>
        <div class="col-xs-9">
            <div class="row">
                <div class="col-xs-6">
                    <div><img src="<?= $dish->img_url ?>"></div>
                </div>
                <div class="col-xs-6 padding">
                    <p><h3><?= $dish->name ?></h3></p>
                    <p class="btn btn-custom" role="button"><?= $dish->timeout ?> мин</p>
                    <p class="padding"><em><h5>Ингредиенты :<h5></em></p>
                    <p class="padding">
                        <?php foreach( $ingredients as $key => $ingredient ): ?>
                            <p><h5><?=$ingredient['name']?><h5></p>
                        <?php endforeach ?>
                    </p>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div><img src="Пунктир_2.jpg"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3">
            <?php foreach( $hasIngredients as $key => $ingredient ): ?>
                <div><button type="button" class="btn btn-custom"><?=$ingredient['name']?></button></div>
            <?php endforeach ?>
            <div><img src="Пунктир.jpg"></div>
            <div><font size="4" face="Comic Sans MS">Время приготовления :</div>
            <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                </div>
            </div>
        </div>
        <div class="col-xs-9">
            <div class="row">
                <div class="col-xs-11">
                    <?= $dish->description ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-11">
                    <div class="center"><h1>Приготовление<h1></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <div><img src="square_2.jpg"></div>
                </div>
                <div class="col-xs-8 padding">
                    <p><h3>Шаг 1</h3></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 padding">
                    <div><img src="square_2.jpg"></div>
                </div>
                <div class="col-xs-8 padding">
                    <p><h3>Шаг 2</h3></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 padding">
                    <div><img src="square_2.jpg"></div>
                </div>
                <div class="col-xs-8 padding">
                    <p><h3>Шаг 3</h3></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3"></div>
            <div class="col-xs-9">
                <div><img src="Пунктир_2.jpg"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 center padding">
            <span class="custom-icon"><i class="fa fa-facebook-square"></i></span>
            <span class="custom-icon"><i class="fa fa-twitter-square"></i></span>
            <span class="custom-icon custom-icon_vk"><i class="fa fa-vk"></i></span>
        </div>
    </div>

</div>