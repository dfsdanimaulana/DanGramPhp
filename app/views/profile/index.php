 <!-- my css -->
 <link rel="stylesheet" href="<?= BASEURL; ?>css/profile.css" />

 <!-- js -->
 <script src="<?= BASEURL; ?>js/script.js" defer></script>
 </head>

 <body>
     <div class="main">
         <!-- nav start -->
         <nav>
             <a href="#">
                 <h3>dnm17_</h3>
             </a>
             <div class="nav-option">
                 <a href="#"><i class="bi bi-plus-square"></i></a>
                 <a href="#"><i class="bi bi-list"></i></a>
             </div>
         </nav>
         <!-- nav end -->

         <!-- profile start -->

         <div class="profile-container">
             <div class="profile">
                 <img src="<?= BASEURL; ?>/img/Dani.jpg" />
                 <div class="profile-status">
                     <a class="stat" href="#">
                         <p>
                             100
                         </p>
                         <p>
                             posts
                         </p>
                     </a>
                     <a class="stat" href="follow.php">
                         <p>
                             2m
                         </p>
                         <p>
                             followers
                         </p>
                     </a>
                     <a class="stat" href="follow.php">
                         <p>
                             300
                         </p>
                         <p>
                             following
                         </p>
                     </a>
                 </div>
             </div>

             <div class="profile-caption">
                 <h6>Dani Maulana</h6>
                 <p>
                     This is Profile Caption
                 </p>
             </div>

             <div class="profile-btn">
                 <a href="#">
                     <div class="btn-follow">
                         Follow
                     </div>
                 </a>
             </div>

         </div>
         <!-- profile end -->

         <!-- post-container start-->
         <div class="post-container">
             <img src="<?= BASEURL; ?>img/mina1.jpg" />
             <img src="<?= BASEURL; ?>img/mina1.jpg" />
             <img src="<?= BASEURL; ?>img/mina1.jpg" />
             <img src="<?= BASEURL; ?>img/mina2.jpg" />
             <img src="<?= BASEURL; ?>img/mina2.jpg" />
             <img src="<?= BASEURL; ?>img/mina1.jpg" />
             <img src="<?= BASEURL; ?>img/mina2.jpg" />
             <img src="<?= BASEURL; ?>img/mina2.jpg" />
             <img src="<?= BASEURL; ?>img/mina1.jpg" />
             <img src="<?= BASEURL; ?>img/mina2.jpg" />
             <img src="<?= BASEURL; ?>img/mina2.jpg" />
             <img src="<?= BASEURL; ?>img/mina2.jpg" />
         </div>
         <!-- post-container end-->
         <!-- menu bottom -->
         <div class="menu-bottom">
             <a href="index.php"><i class="bi bi-house-door"></i></a>
             <a href="search.php"><i class="bi bi-search"></i></a>
             <a href="#"><i class="bi bi-plus-square"></i></a>
             <a href="#"><i class="bi bi-heart"></i></a>
             <a href="#"><i class="bi bi-person-circle"></i></a>
         </div>
     </div>
 </body>

 </html>