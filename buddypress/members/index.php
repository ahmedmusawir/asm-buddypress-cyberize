<?php
/**
 * BuddyPress Members Directory
 *
 * @version 3.0.0
 */

?>
<section id="athlete-index" class="mt-5 pt-5">

  <div class="screen-content">

    <!-- TOP BLUE BAR START -->
    <div class="search-menu-container">
      <article class="">
        <h5 class="text-light pt-3 pl-4">Athletes: </h5>
        <?php //bp_get_template_part( 'common/search-and-filters-bar' ); ?>
      </article>
    </div>
    <!-- TOP BLUE BAR ENDS -->

    <!-- TOP FILTER BAR STARTS -->
    <div class="top-filter-navbar-index">

      <section class="top-page-menu clearfix">
        <h3 class="menu-title float-left">Filters</h3>
        <ul class="list-inline menu-box">

          <li class="list-inline-item">

            <select class="select-filter" id="sports-select" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

              <option value="all">All Sports</option>
              <!-- <option value="FOOTBALL">FootBall</option>
              <option value="GOLF">Golf</option>
              <option value="BASEBALL">Baseball</option>
              <option value="BASKETBALL">Basketball</option>
              <option value="SOCCER">Soccer</option>
              <option value="CHEERLEADING">Cheerleading</option> -->

            </select>

          </li>


          <li class="list-inline-item">

            <select class="select-filter" id="gender-select">

              <option value="all">All Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>

            </select>

          </li>

          <li class="list-inline-item">
            <select class="select-filter" id="avail-select">

              <option value="all">Availablility</option>
              <option value="available">Available</option>
              <option value="committed">Committed</option>

            </select>
          </li>

          <li class="list-inline-item">
            <select class="select-filter" id="class-year-select">

              <option value="all">Class Year</option>
              <option value="2018">2020</option>
              <option value="2019">2021</option>
              <option value="2020">2022</option>
              <option value="2020">2023</option>
              <option value="2020">2024</option>
              <option value="2020">2025</option>
              <option value="2020">2026</option>
              <option value="2020">2027</option>
              <option value="2020">2028</option>
              <option value="2020">2029</option>

            </select>
          </li>

          <li class="list-inline-item">
            <select class="select-filter" id="location-select" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

              <option value="all">Location</option>
              <!-- <option value="USA">USA</option>
              <option value="UK">UK</option>
              <option value="Canada">Canada</option>
              <option value="Domenican-Republic">Domenican Republic</option>
              <option value="Mexico">Mexico</option> -->

            </select>
          </li>

          <li class="list-inline-item">
            <select class="select-filter" id="verify-select">

              <option value="all">Verification</option>
              <option value="verified">Verified</option>
              <option value="unverified">Not Verified</option>

            </select>
          </li>


          <a class="moose-item" href="#" id="ath-filter-reset">
            <li class="list-inline-item">
              <span class="btn-text">RESET FILTERS</span>
            </li>
          </a>

          <!-- <a class="moose-item" href="#" id="athAdvancFilter" data-toggle="modal" data-target="#filterSwitchModal">
            <li class="list-inline-item">
              <span class="btn-text">ADVANCE FILTERS</span>
            </li>
          </a> -->

          <a class="moose-item" href="#" id="athAdvanceFilter" data-toggle="modal">
            <li class="list-inline-item">
              <span class="btn-text">ADVANCE FILTERS</span>
            </li>
          </a>

        </ul>

      </section>



    </div>
    <!-- TOP FILTER BAR ENDS -->

    <!-- TOP ADVANCED FILTER BAR STARTS -->

    <div id="top-advanced-filter" class="d-none">
      <section class="top-page-menu clearfix">
        <div class="row top-row">
          <div class="col-md-2">

            <h3 class="menu-title float-left pt-2 text-light">Other Filters</h3>

          </div>
          <div class="col-md-8">
            <ul class="list-inline menu-box">

              <li class="list-inline-item">
                <select class="select-filter" id="gender-select-adv">

                  <option value="all">All Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>

                </select>

              </li>

              <li class="list-inline-item">
                <select class="select-filter" id="avail-select-adv">

                  <option value="all">Availablility</option>
                  <option value="available">Available</option>
                  <option value="committed">Committed</option>

                </select>
              </li>

              <li class="list-inline-item">
                <select class="select-filter" id="class-year-select-adv">

                  <option value="all">Class Year</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>

                </select>
              </li>

              <li class="list-inline-item">
                <select class="select-filter" id="location-select-adv"
                  data-url="<?php echo admin_url('admin-ajax.php'); ?>">

                  <option value="all">Location</option>

                </select>
              </li>

              <li class="list-inline-item">
                <select class="select-filter" id="verify-select-adv">

                  <option value="all">Verification</option>
                  <option value="verified">Verified</option>
                  <option value="unverified">Not Verified</option>

                </select>
              </li>

              <a class="moose-item" href="#" id="ath-adv-filter-reset">
                <li class="list-inline-item">
                  <span class="btn-text">RESET FILTERS</span>
                </li>
              </a>

            </ul>
          </div>
        </div>

        <div class="row bottom-row">
          <div class="col-md-2">

            <h3 class="menu-title sport-title float-left pt-2">Sports Name</h3>

          </div>
          <div class="col-md-8">
            <ul class="list-inline menu-box menu-box-sports menu-box-GOLF">

              <li class="list-inline-item">

                <select class="select-filter" id="position-golf">

                  <option value="all">Handicap</option>
                  <option value="Plus7-0">+7-0</option>
                  <option value="0-5">0-5</option>
                  <option value="6-and-up">6 and Up</option>

                </select>

              </li>

              <li class="list-inline-item">

                <select class="select-filter" id="wagr-golf">

                  <option value="all">WAGR</option>
                  <option value="1-1000wagr">1-1000</option>
                  <option value="1000-2000wagr">1000-2000</option>
                  <option value="2000-3000wagr">2000-3000</option>
                  <option value="3000-4000wagr">3000-4000</option>
                  <option value="4000-5000wagr">4000-5000</option>
                  <option value="5000-6000wagr">5000-6000</option>
                  <option value="6000-7000wagr">6000-7000</option>

                </select>

              </li>

              <li class="list-inline-item">

                <select class="select-filter" id="national-ranking-golf">

                  <option value="all">National Ranking</option>
                  <option value="1-1000">1-1000</option>
                  <option value="1000-2000">1000-2000</option>
                  <option value="2000-3000">2000-3000</option>
                  <option value="3000-4000">3000-4000</option>
                  <option value="4000-5000">4000-5000</option>
                  <option value="5000-6000">5000-6000</option>
                  <option value="6000-7000">6000-7000</option>
                  <option value="7000-8000">7000-8000</option>
                  <option value="7000-9000">7000-9000</option>
                  <option value="9000-10000">9000-10000</option>

                </select>

              </li>

              <li class="list-inline-item">

                <select class="select-filter" id="swing-hand-golf">

                  <option value="all">Swing Hand</option>
                  <option value="Left">Left</option>
                  <option value="Right">Right</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-golf -->

            <ul class="list-inline menu-box menu-box-sports menu-box-US-FOOTBALL">

              <li class="list-inline-item">

                <select class="select-filter" id="position-us-football">

                  <option value="all">Positions</option>
                  <option value="Center">Center</option>
                  <option value="Offensive-guard">Offensive guard</option>
                  <option value="Offensive-tackle">Offensive tackle</option>
                  <option value="Quarterback">Quarterback</option>
                  <option value="Running-back">Running back</option>
                  <option value="Wide-receiver">Wide receiver</option>
                  <option value="Tight-end">Tight end</option>
                  <option value="Nose-Guard">Nose Guard</option>
                  <option value="Defensive-tackle">Defensive tackle</option>
                  <option value="Defensive-end">Defensive end</option>
                  <option value="Middle-linebacker">Middle linebacker</option>
                  <option value="Outside-linebacker">Outside linebacker</option>
                  <option value="Cornerback">Cornerback</option>
                  <option value="Safety">Safety</option>
                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-us-football -->

            <ul class="list-inline menu-box menu-box-sports menu-box-BASEBALL">

              <li class="list-inline-item">

                <select class="select-filter" id="position-primary-baseball">

                  <option value="all">Primary Positions</option>
                  <option value="Catcher-p">Catcher</option>
                  <option value="1st-Base-p">1st Base</option>
                  <option value="2nd-Base-p">2nd Base</option>
                  <option value="3rd-Base-p">3rd Base</option>
                  <option value="Short-Stop-p">Short Stop</option>
                  <option value="Out-Field-p">Out Field</option>
                  <option value="Left-Field-p">Left Field</option>
                  <option value="Pitcher-p">Pitcher</option>
                  <option value="Relief-Closer-p">Relief Closer</option>

                </select>

              </li>
              <li class="list-inline-item">

                <select class="select-filter" id="position-secondary-baseball">

                  <option value="all">Secondary Positions</option>
                  <option value="Catcher-s">Catcher</option>
                  <option value="1st-Base-s">1st Base</option>
                  <option value="2nd-Base-s">2nd Base</option>
                  <option value="3rd-Base-s">3rd Base</option>
                  <option value="Short-Stop-s">Short Stop</option>
                  <option value="Out-Field-s">Out Field</option>
                  <option value="Left-Field-s">Left Field</option>
                  <option value="Pitcher-s">Pitcher</option>
                  <option value="Relief-Closer-s">Relief Closer</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-baseball -->

            <ul class="list-inline menu-box menu-box-sports menu-box-BASKETBALL">

              <li class="list-inline-item">

                <select class="select-filter" id="position-primary-basketball">

                  <option value="all">Primary Positions</option>
                  <option value="Center-p">Center</option>
                  <option value="Power-Forward-p">Power Forward</option>
                  <option value="Small-Forward-p">Small Forward</option>
                  <option value="Point-Guard-p">Point Guard</option>
                  <option value="Shooting-Guard-p">Shooting Guard</option>

                </select>

              </li>
              <li class="list-inline-item">

                <select class="select-filter" id="position-secondary-basketball">

                  <option value="all">Secondary Positions</option>
                  <option value="Center-s">Center</option>
                  <option value="Power-Forward-s">Power Forward</option>
                  <option value="Small-Forward-s">Small Forward</option>
                  <option value="Point-Guard-s">Point Guard</option>
                  <option value="Shooting-Guard-s">Shooting Guard</option>

                </select>

              </li>
              <li class="list-inline-item">

                <select class="select-filter" id="preferred-hand-basketball">

                  <option value="all">Preferred Hand</option>
                  <option value="Left">Left</option>
                  <option value="Right">Right</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-basketball -->

            <ul class="list-inline menu-box menu-box-sports menu-box-CHEERLEADING">

              <li class="list-inline-item">

                <select class="select-filter" id="position-cheerleading">

                  <option value="all">Positions</option>
                  <option value="Main-base">Main base</option>
                  <option value="Secondary-base">Secondary base</option>
                  <option value="Back-spot">Back spot</option>
                  <option value="Front-spot">Front spot</option>
                  <option value="Additional-spot">Additional spot</option>

                </select>

              </li>

              <a class="moose-item select-filter back-to-filters" href="#" id="">
                <li class="list-inline-item">
                  <span class="btn-text">BACK TO BASE FILTERS</span>
                </li>
              </a>

            </ul>
            <!-- END menu-box-cheerleading -->

          </div>
          <!-- END "col-md-8" -->

        </div>
        <!-- END row bottom-row -->

      </section>
      <!-- END top-page-menu  -->

    </div>
    <!-- END "top-advanced-filter" -->

    <!-- TOP ADVANCED FILTER BAR ENDS -->

    <div class="row asm-index-page-content">

      <div class="col-md-9">

        <!-- NO DATA FOUND START -->

        <div class="no-data-found text-center d-none">
          <h3 class="no-data-title">NO MATCHED DATA FOUND! ... PLEASE CLICK RESET FILTERS & TRY AGAIN</h3>
        </div>

        <!-- NO DATA FOUND END -->

        <!-- THE FOLLOWING IS LOADING THE MEMEBERS LIST WITH JS [data-bp-list="members"]... DO NOT REMOVE -->
        <div id="members-dir-list" class="members dir-list" data-bp-list="members">

        </div><!-- #members-dir-list -->



        <!-- THE LOAD MORE STARTS -->

        <div class="text-center">
          <a id="ath-load-more-btn" class="btn btn-light btn-lg mb-5" data-page="2"
            data-url="<?php echo admin_url('admin-ajax.php'); ?>" data-univ="index">
            <span class="asm-loading pr-3"><i class="fas fa-spinner"></i></span>Load More
          </a>
        </div>

        <!-- THE LOAD MORE ENDS -->

      </div> <!-- end col-md-8 -->

      <div class="col-3">

        <div class="sidebar-container pr-3">
          <?php get_sidebar(); ?>
        </div>

      </div>

    </div> <!-- end row -->




  </div><!-- // .screen-content -->


</section>

<!-- SPORTS CHOICE MODAL FOR ADVANCE FILER START -->

<!-- Modal -->
<div class="modal fade" id="filterSwitchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Choose a Sport ...</h5>
      </div>
      <div class="modal-body">
        <div>

          <div id="modalSportsChoiceBox"></div>

        </div>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      </div>
    </div>
  </div>
</div>

<!-- SPORTS CHOICE MODAL FOR ADVANCE FILER END -->