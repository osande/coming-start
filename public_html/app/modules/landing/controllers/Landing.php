<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends Assets {

    public function index() {
        $this->load->view('landing');
    }

}
