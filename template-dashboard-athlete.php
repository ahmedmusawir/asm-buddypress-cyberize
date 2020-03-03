<?php
/**
 *
 * Template Name: Athlete Dashboard
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<div id="page-asm-dashboard">

  <header id="general-page-header" class="text-center">
    <section class="top-page-menu clearfix">

      <h3 class="menu-title float-left">DASHBOARD</h3>

    </section>
  </header>

  <section id="dashboard-task-board">

    <div id="top-task-block" class="row">
      <article class="col-md-6">
        <h4 class="block-title">Ready to get recruited?</h4>
      </article>
      <article class="col-md-6">
        <div class="membership-box">
          <h4 class="text">
            Free Membership
          </h4>
          <a href="#" class="btn btn-danger">
            UPGRADE
          </a>
        </div>
      </article>
    </div>
    <div id="bottom-task-block" class="row">

      <div class="task-box task-box-sm text-center">
        <i class="fas fa-tasks"></i>
        <h6 class="text-only">TASKS COMPLETED</h6>
        <h1 class="text-number">2/12</h1>
        <a href="#" class="btn btn-info">View Tasks</a>
      </div>

      <div class="task-box task-box-sm text-center">
        <i class="fas fa-eye"></i>
        <h6 class="text-only">PROFILE VIEWS</h6>
        <h1 class="text-number">129</h1>
        <a href="#" class="btn btn-info">View Tasks</a>
      </div>

      <div class="task-box task-box-sm text-center">
        <i class="fas fa-envelope-square"></i>
        <h6 class="text-only">NEW MESSAGES</h6>
        <h1 class="text-number">19</h1>
        <a href="#" class="btn btn-info">View Tasks</a>
      </div>

      <div class="task-box task-box-lg text-center">
        <img class="img-fluid" src="/wp-content/uploads/Screen-Shot-2020-03-03-at-7.11.26-PM.png" alt="">
      </div>

    </div> <!-- #bottom-task-block end -->


  </section>


  <div id="asm-dashboard-content" class="content-area container-fluid">
    <div class="row">

      <main id="main" class="site-main col-sm-12 col-md-12 col-lg-8">

        <div class="row task-item">

          <div class="col-sm-3 text-center video-box">
            <img src="/wp-content/uploads/Screen-Shot-2019-09-25-at-4.44.01-AM@2x.png" alt="" class=" w-100">
          </div>
          <div class="col-sm-6 text-center text-box">
            <h3>1. Welcome Video</h3>
            <p>
              Watch this video to learn how to get recruited.
            </p>
          </div>
          <div class="col-sm-3 text-center icon-box">
            <h4>COMPLETE</h4>
            <i class="fas fa-check-circle"></i>
          </div>

        </div>
        <div class="row task-item mt-4">

          <div class="col-sm-3 text-center video-box">
            <img src="/wp-content/uploads/Screen-Shot-2019-09-25-at-4.51.48-AM@2x.png" alt="" class=" w-100">
          </div>
          <div class="col-sm-6 text-center text-box">
            <h3>2. Build your profile</h3>
            <p>
              Watch this video to learn how to get recruited.
            </p>
          </div>
          <div class="col-sm-3 text-center icon-box">
            <h4>STARTED</h4>
            <i class="fas fa-clock text-warning"></i>
          </div>

        </div>
        <div class="row task-item mt-4">

          <div class="col-sm-3 text-center video-box">
            <img src="/wp-content/uploads/Screen-Shot-2019-09-25-at-4.51.40-AM@2x.png" alt="" class=" w-100">
          </div>
          <div class="col-sm-6 text-center text-box">
            <h3>3. Search universities</h3>
            <p>
              Watch this video to learn how to get recruited.
            </p>
          </div>
          <div class="col-sm-3 text-center icon-box">
            <h4>TO DO</h4>
            <i class="fas fa-exclamation-circle text-danger"></i>
          </div>

        </div>


      </main><!-- #main -->

      <aside id="asm-dashboard-sidebar" class="asm-sidebar col-sm-12 col-md-12 col-lg-4">

        <?php get_sidebar();  ?>

      </aside><!-- #aside -->

    </div> <!-- END ROW -->
  </div><!-- #primary -->

</div> <!-- #page-asm-dashboard end  -->

<?php
get_footer();