<?php

include_once('controller.php');

class TCMS extends Controller {
    public function __construct() {
        parent::__construct();
        
        $p = ( isset($_GET['page']) ) ? htmlentities($_GET['page']) : 'index';

        if ( $p === 'index' || ! method_exists ( $this , $p ) ) {
            $this->index();
        } else {
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