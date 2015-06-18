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

        .dish-image{
            width: 100%;
            height: auto;
        }
        .step img{
            height:auto; width:auto; max-width:250px; max-height:250px;
        }
        .btn.btn-color {
            background:orange;
        }

    </style>
</head>

<div class="content">
    <div class="row">
        <div class="col-xs-3"><img src="<?= Root('i/image/Kasha_iz_topora_2.jpg')?>">
            <div class="padding"><font size="6">У меня есть :</div>
        </div>
        <div class="col-xs-9">
            <div class="row">
                <div class="col-xs-6">
                    <img  class="dish-image" src="<?= $dish->img_url ?>">
                </div>
                <div class="col-xs-6 padding">
                    <p><h3><?= $dish->name ?></h3></p>
                    <p class="btn btn-custom btn-color" role="button"><?= $dish->timeout ?> мин</p>
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
                    <div><img src="<?= Root('i/image/Dash_2.jpg')?>"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3">
            <?php foreach( $hasIngredients as $key => $ingredient ): ?>
                <div><button type="button" class="btn btn-custom btn-color"><?=$ingredient['name']?></button></div>
            <?php endforeach ?>



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
            <?php foreach($steps as $number=>$step):?>
            <div class="row step">
                <div class="col-xs-4">
                    <div><img src="<?= $step["img_url"] ?>"></div>
                </div>
                <div class="col-xs-8 padding">
                    <p>
                        <h3>Шаг <?= $number+1?></h3>
                        <?= $step["description"] ?>
                    </p>
                </div>
            </div>
            <?php endforeach;?>
            <div class="row">

                <div class="col-xs-8">
                    <div><img src="<?= Root('i/image/Dash_2.jpg')?>"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xs-12 center padding">
            <span class="custom-icon"><a href="http://www.facebook.com/sharer.php?u=104.245.39.17&t=Каша из топора"><i class="fa fa-facebook-square"></i></a></span>
            <span class="custom-icon"><a href="http://twitter.com/home?status=104.245.39.17"><i class="fa fa-twitter-square"></i></a></span>
        </div>
    </div>

</div>