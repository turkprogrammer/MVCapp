<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Test extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render('test/index');
    }

    public function view($id = false) {
        echo $id;
        $this->view->render('test/view');
    }

}
