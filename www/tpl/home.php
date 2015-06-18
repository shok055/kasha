
    <!-- Вот так в микроне можно подключать css и js в общий сборщик именно с этой страницы -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>
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
            .btn.btn-color{
                background: orange;
            }
            .no-margin {
                margin: 0;
            }

        </style>
        <!-- Bootstrap -->
       <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="<?= Root('i/css/font-awesome.min.css')?>">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="<?= Root('i/css/components/select2/select2.css')?>">
        <script src="<?= Root('i/js/components/select2/select2.min.js')?>"></script>
        <script src="<?= Root('i/js/controller/home.js')?>"></script>
        <link rel="stylesheet" href="<?= Root('i/css/components/select2/select2-bootstrap.css')?>">


    </head>


    <div class="home-block">
        <div class="container">
            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4 text-center"><img src="<?= Root('i/image/Kasha_iz_topora.jpg')?>"></div>
                <div class="col-xs-4"></div>
            </div>
            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4 text-center padding"><font size="15">У меня есть :</font></div>
                <div class="col-xs-4"></div>
            </div>

            <div class="row">
                <div class="col-xs-3"></div>
                <div class="col-xs-6 padding">
                    <form action="<?= Root('menu')?>" method="get">
                        <div class="input-group input-group_custom">
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-default btn-color no-margin" type="button" value="Найти"/>
                            </span>
                            <select id="ingredients" name="ingredients[]" multiple class="form-control select2-multiple">
                                <?php foreach ($ingredients as $ingredient):?>
                                <option value="<?= $ingredient['id'] ?>"><?= $ingredient['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-xs-3"></div>
            </div>


            <div class="row">
                <div class="col-xs-12 center">
                    <span class="custom-icon"><a href="http://www.facebook.com/sharer.php?u=104.245.39.17&t=Каша из топора"><i class="fa fa-facebook-square"></i></a></span>
                    <span class="custom-icon"><a href="http://twitter.com/home?status=104.245.39.17"><i class="fa fa-twitter-square"></i></a></span>
                </div>
            </div>


        </div>

    </div>




