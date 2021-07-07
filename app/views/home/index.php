<title>DanGram | Home</title>

<!-- my css -->
<link rel="stylesheet" href="<?= BASEURL; ?>css/home.css" />

<!-- js -->
<script src="<?= BASEURL; ?>js/script.js" defer></script>
</head>

<body>
    <div class="main">
        <!-- header start -->
        <nav>
            <h3><a href="#">DanGram</a></h3>
            <a class="nav-item-container" href="<?= BASEURL; ?>chat">
                <i class="bi bi-chat-dots"></i>
            </a>
        </nav>
        <div class="story-container">
            <!-- hide scroll bar later -->
            <div class="profile-story">
                <a href="#">
                    <img src="<?= BASEURL; ?>img/Dani.jpg" />
                    <p>userName</p>
                </a>
            </div>
        </div>
        <!-- header end -->
        <!-- card start -->
        <div class="card-container">
            <div class="card">
                <div class="card-header">
                    <div class="card-profile">
                        <a href="#">
                            <img src="<?= BASEURL; ?>img/Dani.jpg" />
                            <p>userName</p>
                        </a>
                    </div>
                    <a href="#">
                        <i id="card-option" class="bi bi-three-dots-vertical"></i>
                    </a>
                </div>
                <div class="card-img">
                    <img src="<?= BASEURL; ?>img/mina1.jpg" />
                </div>

                <div class="card-body">
                    <div class="card-body-menu">
                        <div class="cbm-option">
                            <a href="#">
                                <i id="cbm-like" class="bi bi-heart"></i>
                                <!-- <i class="bi bi-heart-fill"></i> -->
                            </a>
                            <a href="#">
                                <i id="cbm-comment" class="bi bi-chat"></i>
                            </a>
                            <a href="#">
                                <i id="cbm-share" class="bi bi-cursor"></i>
                            </a>
                        </div>
                        <a href="#">
                            <i id="cbm-keep" class="bi bi-bookmark"></i>
                        </a>
                    </div>
                    <a href="#">
                        <p class="card-like-count">100 likes</p>
                    </a>

                    <div class="card-caption">
                        <a href="#">
                            <span> UserName </span>
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel
                                fuga architecto temporibus praesentium qui odio excepturi id
                                deleniti vero velit.
                            </span>
                        </a>
                    </div>

                    <div class="see-comment"></div>
                    <div class="add-comment"></div>
                    <div class="post-time">
                        <p>2 days ago</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- card end -->