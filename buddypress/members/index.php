<?php
/**
 * BuddyPress Members Directory
 *
 * @version 3.0.0
 */

?>
<section id="athlete-index" class="mt-5 pt-5">

  <div class="screen-content">

    <!-- TOP BLUE BAR -->
    <div class="search-menu-container">
      <article class="">
        <h5 class="text-light pt-3 pl-4">Athletes: </h5>
        <?php //bp_get_template_part( 'common/search-and-filters-bar' ); ?>
      </article>
    </div>

    <!-- TOP FILTER BAR -->
    <div class="top-filter-navbar-index">

      <section class="top-page-menu clearfix">
        <h3 class="menu-title float-left">Filters</h3>
        <ul class="list-inline menu-box">
          <a href="#top-video-section">

            <li class="list-inline-item moose-item" id="all">
              <span class="btn-text">ALL</span>
            </li>

          </a>
          <a href="#top-video-section">

            <li class="list-inline-item moose-item" id="FOOTBALL">
              <span class="btn-text">US FOOTBALL</span>
            </li>

          </a>
          <a href="#about-section">
            <li class="list-inline-item moose-item" id="GOLF">
              <span class="btn-text">GOLF</span>
            </li>
          </a>
          <a href="#sports-stats-section">
            <li class="list-inline-item moose-item" id="BASEBALL">
              <span class="btn-text">BASEBALL</span>
            </li>
          </a>
          <a href="#academics-section">
            <li class="list-inline-item moose-item" id="BASKETBALL">
              <span class="btn-text">BASKETBALL</span>
            </li>
          </a>
          <a href="#instagram-section">
            <li class="list-inline-item moose-item" id="SOCCER">
              <span class="btn-text">SOCCER</span>
            </li>
          </a>
          <a href="#interview-section">
            <li class="list-inline-item moose-item" id="CHEERLEADING">
              <span class="btn-text">CHEERLEADING</span>
            </li>
          </a>
        </ul>

      </section>
    </div>


    <div class="row asm-index-page-content">

      <div class="col-md-9">
        <!-- THE FOLLOWING IS LOADING THE MEMEBERS LIST WITH JS [data-bp-list="members"]... DO NOT REMOVE -->
        <div id="members-dir-list" class="members dir-list" data-bp-list="members">

        </div><!-- #members-dir-list -->
      </div> <!-- end col-md-8 -->

      <div class="col-3">

        <div class="sidebar-container pr-3">
          <?php get_sidebar(); ?>
        </div>

      </div>

    </div> <!-- end row -->




  </div><!-- // .screen-content -->

</section>