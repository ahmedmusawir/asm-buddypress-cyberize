<?php
/**
 * ASM DROPDOWN NAVIGATION
 */
?>
<!-- <section id="dropdown-navigation" class="menu-close"> PUT THIS BACK AFTER DEV -->
<section id="dropdown-navigation" class="">

  <div id="dropdown-close-button">
    <i class="fas fa-times-circle"></i>
  </div>

  <header class="dropdown-navigation-header row">

    <div class="col-sm-2 the-logo">
      <img class="img-fluid" src="/wp-content/uploads/logo.png" alt="">
    </div>

    <div class="col-sm-4 social-links-box">
      <ul class="list-inline">
        <li class="list-inline-item">
          <a class="social-icon text-xs-center" target="_blank" href="#">
            <i class="fab fa-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-icon text-xs-center" target="_blank" href="#">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-icon text-xs-center" target="_blank" href="#">
            <i class="fab fa-youtube"></i>
          </a>
        </li>
      </ul>
    </div>

    <div class="col-sm-6 login-box">
      <a href="/register/" class="btn btn-light">JOIN</a>
      <a href="/wp-login.php" class="btn btn-info">LOGIN</a>
    </div>

  </header>

  <main class="dropdown-navigation-body container-fluid">

    <section class="row">
      <div class="col-sm-5 left-menu">
        <h1 class="text-light">Left Menu</h1>
        <?php

          wp_nav_menu( array( 
              'theme_location' => 'global-dropdown-left-menu', 
              'container_class' => 'global-dropdown-left-menu' ) ); 
          ?>

      </div>
      <div class="col-sm-7 right-menu">
        <h3 class="right-menu-title text-light">ATHLETES</h3>
        <section class="row">
          <div class="col-sm-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nobis explicabo error praesentium voluptate,
            inventore esse animi sed eum, cupiditate saepe! Nostrum molestias architecto mollitia. Vero excepturi quos
            quia dolor.
          </div>
          <div class="col-sm-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nobis explicabo error praesentium voluptate,
            inventore esse animi sed eum, cupiditate saepe! Nostrum molestias architecto mollitia. Vero excepturi quos
            quia dolor.
          </div>
        </section>

      </div>
    </section>

  </main>

</section>