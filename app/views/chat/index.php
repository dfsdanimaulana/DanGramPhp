<link rel="stylesheet" href="<?= BASEURL; ?>css/chat.css" />

<title>DanGram | Chat</title>
</head>

<body>
    <div class="main">
        <nav>
            <div class="nav-header">
                <a href="<?= BASEURL; ?>home">
                    <i class="bi bi-arrow-left-short"></i>
                </a>
                <a href="<?= BASEURL; ?>profile">
                    <h6>dnm17_</h6>
                </a>
            </div>

            <a href="#"><i class="bi bi-chat-square-text"></i></a>
        </nav>
        <div class="tabbar">
            <a href="#">
                <div class="chat">Chats</div>
            </a>
            |
            <a href="#">
                <div class="request">Request</div>
            </a>
        </div>
        <div class="chat-body">
            <a href="#">
                <div class="chat-search">
                    <i class="bi bi-search"></i><input type="text" placeholder="Search" style="
                background-color: rgb(66, 63, 63);
                border: none;
                font-size: 15px;
                outline-style: none;
              " />
                </div>
            </a>
            <div class="chat-person">
                <a href="#">
                    <img src="<?= BASEURL; ?>img/Dani.jpg" alt="" />
                </a>
                <a href="<?= BASEURL; ?>chat/chatroom" class="f-2">
                    <p>Dani Maulana</p>
                    <p>3 days ago</p>
                </a>
                <a href="#">
                    <i class="bi bi-camera"></i>
                </a>
            </div>
            <div class="chat-person">
                <a href="#">
                    <img src="<?= BASEURL; ?>img/Dani.jpg" alt="" />
                </a>
                <a href="<?= BASEURL; ?>chat/chatroom" class="f-2">
                    <p>Dani Maulana</p>
                    <p>3 days ago</p>
                </a>
                <a href="#">
                    <i class="bi bi-camera"></i>
                </a>
            </div>
        </div>
    </div>
</body>

</html>