<?php

class Profile extends Controller 
{
    public function index(){
        $this->view('template/head');
        $this->view('profile/index');
        $this->view('template/navbot');
    }
    public function following(){
        $this->view('template/head');
        $this->view('profile/following');

    }
}