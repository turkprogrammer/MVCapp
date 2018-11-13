<?php

/*
 * Router
 */
 

 
spl_autoload_register(function ($class_name) {
    include 'application/controllers/'.$class_name . '.php';
});


$url = $_GET['url'];
$url = explode('/', $url);

if (empty($url[0])) {
    //require 'application/controllers/Main.php';
    $controller = new Main;
 
   
} else {
    $path = 'application/controllers/' . $url[0] . '.php';
    if (file_exists($path)) {
        require $path;
        $controller = new $url[0];
    } else {
        //require 'application/controllers/Main.php';
        //$controller = new Main;
        //$controller->index();
        throw new \Exception('Controller not exist!');
    }
}
if(!empty($url[2])){
    if(method_exists($controller, $url[1])) {
        $controller->{$url[1]}($url[2]);
    }else {
        $controller->index();
    }
}else {
    
    if(!empty($url[1])){
        if (method_exists($controller, $url[1])){
            $controller->{$url[1]}();
        }else {
            //$controller->index();
            throw new \Exception('Action not exist!');
        }
    }else {
        $controller->index();
    }
}

