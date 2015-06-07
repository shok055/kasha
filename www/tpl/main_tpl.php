<!DOCTYPE html>
<html lang="<?= LANG?>" dir="ltr">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=<?= $g_config['charset']?>" />
        <title><?= $title?></title>
        <?php if (!empty($description)):?><meta name="description" content="<?= $description?>" /><?php endif?>
        <?php if (!empty($keyWords)):?><meta name="keywords" content="<?= $keyWords?>" /><?php endif?>

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= Root('i/image/touch_icon/favicon_144x144.png')?>" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= Root('i/image/touch_icon/favicon_114x114.png')?>" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= Root('i/image/touch_icon/favicon_72x72.png')?>" />
        <link rel="apple-touch-icon-precomposed" href="<?= Root('i/image/touch_icon/favicon_57x57.png')?>" />

        <link rel="icon" href="<?= Root('favicon.ico')?>" type="image/x-icon" />
        <link rel="shortcut icon" href="<?= Root('favicon.ico')?>" type="image/x-icon" />

        <meta http-equiv="cleartype" content="on">

        <link rel="stylesheet" type="less/css" href="<?= Root('i/css/dev/funcs.less')?>" />

        <!-- Следущая строчка нужна для обозначения места вставки объеденённых css/js файлов. Её не следует удалять.-->
        <!-- extraPacker -->
        <?php IncludeCom("dev/bootstrap3")?>
        <?php IncludeCom('dev/jquery')?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
            .content {
                margin:25px auto;
                width: 90%;
            }
        </style>
    </head>
    <body>
        <?= $content?>
    </body>
</html>
