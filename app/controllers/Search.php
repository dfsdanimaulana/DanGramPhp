<?php

class Search extends Controller {
    public function index(){
        $this->view('template/head');
        $this->view('search/index');
        $this->view('template/navbot');
    }
}