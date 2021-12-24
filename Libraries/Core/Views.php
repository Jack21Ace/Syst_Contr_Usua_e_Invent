<?php
// Esta clase sera la que nos de la vista que queremos mostrar
// mediante la funcion getView
class Views
{
    function getView($controller,$view)
    {
        $controller = get_class($controller);
        // validación para la vista de home si el controlador es == home
        if($controller == 'home'){
            // de esta forma mostramos la vista que queremos mostrar
            $view = VIEWS.'/'.$view.'.php';
        }else{
            // 1- concatenamos el controlador que viene con la vista
            $view = VIEWS.$controller.'/'.$view.'.php';
        }
        require_once($view);
    }
}