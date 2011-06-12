<?php

class Load {
    // Used for loading views.
    public function view($file, $data = null) {
        // Turn array of data into separate variables.
        if ( is_array($data) ) {
            extract($data);
        }
        
        include_once('views/' . $file);
    }
}