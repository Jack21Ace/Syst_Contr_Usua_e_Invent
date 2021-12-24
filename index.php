<?php

require_once('Config/Config.php');

# Indicamos que si no hay ningun parametro en la url
# home sera igual a home
$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
$arrUrl = explode('/', $url);
$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = '';

# validación de controlador
if (!empty($arrUrl[1])) {
    if ($arrUrl[1] != "") {
        $method = $arrUrl[1];
    }
}

# validar si existen parametros
if (!empty($arrUrl[2])) {
    if ($arrUrl[2] != "") {
        # se inicializa un ciclo en 2 pues es la posición donde se almacenan los parametros
        for ($i = 2; $i < count($arrUrl); $i++) {
            $params .= $arrUrl[$i] . ',';
        }
        $params = trim($params, ',');
    }
}

// Archivo para el auto cargadod e las paginas
require_once('Libraries/Core/Autoload.php');

// parte del archivo load
require_once('Libraries/Core/Load.php');
