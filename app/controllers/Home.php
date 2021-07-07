<?php

class Home extends Controller
{
    public function index()
    {
        $this->view('template/head');
        $this->view('home/index');
        $this->view('template/navbot');
    }
}
