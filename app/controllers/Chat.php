<?php

class Chat extends Controller {
    public function index(){
        $this->view('template/head');
        $this->view('chat/index');
    }
    public function chatroom(){
        $this->view('template/head');
        $this->view('chat/chatroom');
    }
}