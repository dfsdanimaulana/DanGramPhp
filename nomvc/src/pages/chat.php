<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- icons bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />

    <link rel="stylesheet" href="../css/reset.css" />
    <link rel="stylesheet" href="../css/chat.css" />

    <title>DanGram | Chat</title>
  </head>
  <body>
    <div class="main">
      <nav>
        <div class="nav-header">
          <a href="../../index.php">
            <i class="bi bi-arrow-left-short"></i>
          </a>
          <a href="profile.php">
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
            <i class="bi bi-search"></i
            ><input
              type="text"
              placeholder="Search"
              style="
                background-color: rgb(66, 63, 63);
                border: none;
                font-size: 15px;
                outline-style: none;
              "
            />
          </div>
        </a>
        <div class="chat-person">
          <a href="#">
            <img src="../../public/img/Dani.jpg" alt="" />
          </a>
          <a href="chat_room.php" class="f-2">
            <p>Dani Maulana</p>
            <p>3 days ago</p>
          </a>
          <a href="#">
            <i class="bi bi-camera"></i>
          </a>
        </div>
        <div class="chat-person">
          <a href="#">
            <img src="../../public/img/Dani.jpg" alt="" />
          </a>
          <a href="chat_room.php" class="f-2">
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
