<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#1393e8" />

    <!-- icons bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />

    <!-- css reset -->
    <link rel="stylesheet" href="src/css/reset.css" />

    <!-- my css -->
    <link rel="stylesheet" href="src/css/style.css" />

    <!-- js -->
    <script src="src/js/script.js" defer></script>

    <title>DanGram | Dashbord</title>
  </head>
  <body>
    <div class="main">
      <!-- header start -->
      <nav>
        <h3><a href="#">DanGram</a></h3>
        <a class="nav-item-container" href="src/pages/chat.php">
          <i class="bi bi-chat-dots"></i>
        </a>
      </nav>
      <div class="story-container">
        <!-- hide scroll bar later -->
        <div class="profile-story">
          <a href="#">
            <img src="public/img/Dani.jpg" />
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
                <img src="public/img/Dani.jpg" />
                <p>userName</p>
              </a>
            </div>
            <a href="#">
              <i id="card-option" class="bi bi-three-dots-vertical"></i>
            </a>
          </div>
          <div class="card-img">
            <img src="public/img/mina1.jpg" />
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

      <!-- menu bottom -->
      <div class="menu-bottom">
        <a href="#"><i class="bi bi-house-door"></i></a>
        <a href="src/pages/search.php"><i class="bi bi-search"></i></a>
        <a href="#"><i class="bi bi-plus-square"></i></a>
        <a href="#"><i class="bi bi-heart"></i></a>
        <a href="src/pages/profile.php"><i class="bi bi-person-circle"></i></a>
      </div>
    </div>
  </body>
</html>
