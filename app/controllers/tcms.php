<?php

include_once('controller.php');

class TCMS extends Controller {
    public function __construct() {
        parent::__construct();
        
        if ( ! isset($_GET['page']) ) {
            $this->index();
        } else {
            $p = htmlentities($_GET['page']);
            
            $this->$p();
        }
    }
    
    public function index() {
        $info = $this->model->test();
        $this->load->view('index.php', $info);
    }
    
    public function register() {
        $this->load->view('register.php');
    }
}