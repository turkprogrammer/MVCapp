<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Main extends Controller {

    function __construct() {
        parent::__construct();
        }

    public function index() {
        $this->view->render('main/index');
    }
    
    public function about() {
         $this->view->render('main/about');
    }

}
