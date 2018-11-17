<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller {
    function __construct() {
     $this->view = new View;    
    }
    public function loadModel($name) {
        $path = 'application/models/'.$name.'php';
        $modelname = $name;
        if (file_exists($path)){
            require $path;
             $this->model =new $modelname;
        }
       
    }
}
