<?php

class Profile extends Controller 
{
    public function index(){
        $this->view('template/head');
        $this->view('profile/index');
    }
}