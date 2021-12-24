<?php

// capturamos la informacion de la url que declaramos en .htdocs
$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
$arrUrl = explode("/", $url);
print_r($arrUrl);



?>