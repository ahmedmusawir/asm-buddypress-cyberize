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
        <h4>Ready to get recruited?</h4>
      </article>
      <article class="col-md-6">
        <div class="membership-box">
          <span class="text">
            Free Membership
          </span>
          <a href="#" class="btn btn-danger">
            UPGRADE
          </a>
        </div>
      </article>
    </div>
    <div id="bottom-task-block" class="row">

      <div class="task-box">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid ipsa fuga aperiam, velit soluta minus
        nesciunt incidunt vitae mollitia accusamus unde eaque! Voluptatem repellat numquam cum laboriosam nihil
        doloremque sit.
      </div>
      <div class="task-box">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid ipsa fuga aperiam, velit soluta minus
        nesciunt incidunt vitae mollitia accusamus unde eaque! Voluptatem repellat numquam cum laboriosam nihil
        doloremque sit.
      </div>
      <div class="task-box">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid ipsa fuga aperiam, velit soluta minus
        nesciunt incidunt vitae mollitia accusamus unde eaque! Voluptatem repellat numquam cum laboriosam nihil
        doloremque sit.
      </div>
      <div class="task-box-large">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid ipsa fuga aperiam, velit soluta minus
        nesciunt incidunt vitae mollitia accusamus unde eaque! Voluptatem repellat numquam cum laboriosam nihil
        doloremque sit.
      </div>

    </div> <!-- #bottom-task-block end -->


  </section>


  <div id="asm-dashboard-content" class="content-area container-fluid">
    <div class="row">

      <main id="main" class="site-main col-sm-12 col-md-12 col-lg-8">

        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae maxime fugiat assumenda, corporis suscipit nam
          enim aperiam consequuntur cupiditate quod sit. Dicta magnam voluptatibus, reiciendis necessitatibus odit ad
          nisi
          ab.
        </p>

      </main><!-- #main -->

      <aside id="asm-dashboard-sidebar" class="asm-sidebar col-sm-12 col-md-12 col-lg-4">

        <?php get_sidebar();  ?>

      </aside><!-- #aside -->

    </div> <!-- END ROW -->
  </div><!-- #primary -->

</div> <!-- #page-asm-dashboard end  -->

<?php
get_footer();