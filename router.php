<?php
//RewriteCond $1 !^(index\.php|robots\.txt|favicon\.ico|sitemap\.xml|i/.*|tmp/.*|upl/.*|lib/ckeditor4/.*)
//RewriteRule ^(.*)$ /index.php?q=$1 [L,QSA]


    // router.php

//|robots\.txt|favicon\.ico|sitemap\.xml|i/.*|tmp/.*|upl/.*|lib/ckeditor4/.*
    //var_dump($_SERVER);
    if (preg_match('/^\/(index\.php|robots\.txt|favicon\.ico|i\/.*|tmp\/.*)/', $_SERVER["REQUEST_URI"])) {
        return false;    // serve the requested resource as-is.
    } else {
        preg_match('/^\/(.*)$/',$_SERVER["REQUEST_URI"],$var);
        $_GET["q"] = $var[1];
        require 'www/index.php';
    }