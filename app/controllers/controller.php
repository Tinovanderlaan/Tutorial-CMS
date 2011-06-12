<?php

class Controller {
    public $load, $model;
    
    // Instantiate models and load class.
    public function __construct() {
        $this->load     = new Load();
        $this->model    = new Model();
    }
}