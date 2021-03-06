<?php
/**
 * BuddyPress - Members Home
 *
 * @since   1.0.0
 * @version 3.0.0
 */
?>
<!-- FONT AWESOME 5 PRO -->
<script src="https://kit.fontawesome.com/c8084101a0.js" crossorigin="anonymous"></script>

<!-- MOOSE BP TESTING START -->

<style>
.bp-home {
  /* border: 8px dotted blue; */
}

#item-body {
  /* border: 10px dotted red; */
}
</style>
<div class="bp-home">

  <!-- <h4><strong>home.php under members/ folder</strong></h4> -->

  <?php 
  // $user_id = get_current_user_id();
  $user_id = bp_displayed_user_id();
  // $field = 7;
  // $data = xprofile_get_field_data( $field, $user_id, $multi_format = 'array' );
  // Gender 7

  // FOLLOWING SET IS FOR THE LEFT ATHLETE COLUMN [MEMBER BIO FIELD GROUP]
  $gender = xprofile_get_field_data( 7, $user_id, $multi_format = 'array' );
  $dob = xprofile_get_field_data( 10, $user_id, $multi_format = 'array' );
  $nationality = xprofile_get_field_data( 11, $user_id, $multi_format = 'array' );
  $height = xprofile_get_field_data( 14, $user_id, $multi_format = 'array' );
  $weight = xprofile_get_field_data( 15, $user_id, $multi_format = 'array' );
  $sport = xprofile_get_field_data( 16, $user_id, $multi_format = 'array' );
  $enrollment_year = xprofile_get_field_data( 17, $user_id, $multi_format = 'array' );

  // FOLLOWING SET IS FOR THE CENTER ATHLETE COLUMN

  // VIDEOS
  $video_1 = xprofile_get_field_data( 31, $user_id, $multi_format = 'array' );
  $video_2 = xprofile_get_field_data( 29, $user_id, $multi_format = 'array' );
  $video_3 = xprofile_get_field_data( 32, $user_id, $multi_format = 'array' );
  $video_4 = xprofile_get_field_data( 33, $user_id, $multi_format = 'array' );
  $video_5 = xprofile_get_field_data( 34, $user_id, $multi_format = 'array' );
  
  // ABOUT
  $about = xprofile_get_field_data( 28, $user_id, $multi_format = 'array' );

  // SPORTS INFO
  $sports_info = xprofile_get_field_data( 20, $user_id, $multi_format = 'array' );

  // ACADEMICS
  $school_name = xprofile_get_field_data( 21, $user_id, $multi_format = 'array' );
  $gpa = xprofile_get_field_data( 22, $user_id, $multi_format = 'array' );
  $sat = xprofile_get_field_data( 23, $user_id, $multi_format = 'array' );
  $toefl = xprofile_get_field_data( 24, $user_id, $multi_format = 'array' );

  // INSTAGRAM
  $insta_text = xprofile_get_field_data( 25, $user_id, $multi_format = 'array' );
  $insta_ole = xprofile_get_field_data( 26, $user_id, $multi_format = 'array' );
  
  // INTERVIEW 
  $interview = xprofile_get_field_data( 27, $user_id, $multi_format = 'array' );
  
  
  // echo "<h1>$user_id</h1>";
  // echo "<h1>Data: $data</h1>";

  // echo '<pre>';
  // print_r($data);
  // echo '</pre>';

  ?>

  <!-- MOOSE BP TESTING END -->

  <?php bp_nouveau_member_hook( 'before', 'home_content' ); ?>

  <div id="item-header" role="complementary" data-bp-item-id="<?php echo esc_attr( bp_displayed_user_id() ); ?>"
    data-bp-item-component="members" class="users-header single-headers">

    <?php //bp_nouveau_member_header_template_part(); ?>

  </div><!-- #item-header -->

  <div class="bp-wrap">
    <?php if ( ! bp_nouveau_is_object_nav_in_sidebar() ) : ?>

    <?php //bp_get_template_part( 'members/single/parts/item-nav' ); ?>

    <?php endif; ?>

    <div id="item-body" class="item-body row">
      <!-- LEFT COLUMN START -->
      <article class="col-sm-12 col-md-12 col-lg-4 col-xl-3">
        <div id="item-header-avatar">
          <a href="<?php bp_displayed_user_link(); ?>">

            <div class="athlete-img-box text-center">

              <?php bp_displayed_user_avatar( 'type=full' ); ?>

            </div>
            <h1 class="athlete-title text-center">

              <?php echo bp_core_get_user_displayname( $user_id, true ); ?>

            </h1>
          </a>
        </div><!-- #item-header-avatar -->

        <section class="athlete-meta">

          <div class="athlete-meta-info clearfix px-1 py-3">
            <span class="eye float-left"><i class="fas fa-eye"></i> &nbsp;1,234 Views</span>
            <span class="star float-right"><i class="fas fa-star"></i> &nbsp;4.5</span>
          </div>

        </section>

        <section class="athlete-bio">
          <ul class="list-group">
            <li class="list-group-item">
              <span class="label float-left">GENDER</span>
              <span class="label float-right"><?php echo $gender; ?></span>
            </li>
            <li class="list-group-item">
              <span class="label float-left">DOB</span>
              <span class="label float-right"><?php echo $dob; ?></span>
            </li>
            <li class="list-group-item">
              <span class="label float-left">NATIONALITY</span>
              <span class="label float-right"><?php echo $nationality; ?></span>
            </li>
            <li class="list-group-item">
              <span class="label float-left">HEIGHT</span>
              <span class="label float-right"><?php echo $height; ?></span>
            </li>
            <li class="list-group-item">
              <span class="label float-left">WEIGHT</span>
              <span class="label float-right"><?php echo $weight; ?></span>
            </li>
          </ul>
          <div class="athlete-sports-info">
            <h1 class="float-left">
              <?php echo $sport; ?><br>
              <small class="float-left">SPORT</small>
            </h1>
            <h1 class="float-right">
              <?php echo $enrollment_year; ?><br>
              <small class="float-right">ENROLLMENT YEAR</small>
            </h1>
          </div>
        </section>
      </article>
      <!-- LEFT COLUMN END -->

      <!-- CENTER COLUMN START -->
      <article class="col-sm-12 col-md-12 col-lg-8 col-xl-6">

        <!-- FOLLOWING IS USED FOR THE PROFILE EDIT FUNCTION ONLY -->
        <?php bp_nouveau_member_template_part(); ?>
        <!-- ---------------------------------------------->

        <!-- CUSTOM MOOSE MAGIC STARTS HERE FOR ATHLETE PROFILE  -->
        <section id="top-video-section">

          <div class="embed-responsive embed-responsive-16by9">

            <iframe class="embed-responsive-item"
              src="https://www.youtube.com/embed/<?php echo $video_1; ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
              frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
              <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
            </iframe>

          </div>

          <h1 class="block-header">
            <i class="fab fa-youtube"></i> Videos
          </h1>

          <section class="more-videos-box">

            <div class="row">
              <div class="col-sm-6 col-md-6">

                <div class="embed-responsive embed-responsive-16by9">

                  <iframe class="embed-responsive-item mt-2"
                    src="https://www.youtube.com/embed/<?php echo $video_2; ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                    <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
                  </iframe>

                </div>

              </div>
              <div class="col-sm-6 col-md-6">

                <div class="embed-responsive embed-responsive-16by9">

                  <iframe class="embed-responsive-item mt-2"
                    src="https://www.youtube.com/embed/<?php echo $video_3; ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                    <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
                  </iframe>

                </div>

              </div>
              <div class="col-sm-6 col-md-6">

                <div class="embed-responsive embed-responsive-16by9">

                  <iframe class="embed-responsive-item mt-2"
                    src="https://www.youtube.com/embed/<?php echo $video_4; ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                    <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
                  </iframe>

                </div>

              </div>
              <div class="col-sm-6 col-md-6">

                <div class="embed-responsive embed-responsive-16by9">

                  <iframe class="embed-responsive-item mt-2"
                    src="https://www.youtube.com/embed/<?php echo $video_5; ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                    <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
                  </iframe>

                </div>

              </div>

          </section> <!-- end more-videos-box -->

        </section> <!-- end top-video-section -->

        <section id="about-section">

          <h1 class="block-header">
            <i class="fas fa-user-circle"></i> About
          </h1>

          <p class="text-content">
            <?php echo $about; ?>
          </p>

        </section>

        <section id="sports-info-section">

          <h1 class="block-header">
            <i class="fas fa-trophy"></i> Sports Info
          </h1>

          <p class="text-content">
            <?php echo $sports_info; ?>
          </p>

        </section>

        <section id="academics-section">

          <h1 class="block-header">
            <i class="fas fa-file-certificate"></i> Academics
          </h1>

          <div class="school-box clearfix p-4">
            <span class="school-title float-left">SCHOOL NAME</span>
            <span class="school-name float-right">

              <?php echo $school_name; ?>

            </span>
          </div>

          <h1>GPA</h1>
          <?php echo $gpa; ?>

          <h1>SAT</h1>
          <?php echo $sat; ?>

          <h1>TOEFL</h1>
          <hr>
          <?php echo $toefl; ?>

        </section>

        <section id="instagram-section">

          <h1>Instagram OLE URL</h1>
          <div class="row">

            <div class="col-sm-6 col-md-6 col-lg-6">

              <div class="embed-responsive embed-responsive-1by1">

                <?php echo $insta_ole; ?>

              </div>

            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">

              <div class="embed-responsive embed-responsive-1by1">

                <?php echo $insta_ole; ?>

              </div>

            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">

              <div class="embed-responsive embed-responsive-1by1">

                <?php echo $insta_ole; ?>

              </div>

            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">

              <div class="embed-responsive embed-responsive-1by1">

                <?php echo $insta_ole; ?>

              </div>

            </div>

          </div> <!-- End Row -->

        </section>

        <section id="interview-section">

          <h1>INTERVIEW</h1>
          <?php echo $interview; ?>

        </section>


        <!-- CUSTOM MOOSE MAGIC ENDS HERE FOR ATHLETE PROFILE  -->

      </article>
      <!-- CENTER COLUMN END -->

      <article class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
        <img src="/wp-content/uploads/2020/01/profile-sidebar.png" alt="">
      </article>


    </div><!-- #item-body -->
  </div><!-- // .bp-wrap -->

  <?php bp_nouveau_member_hook( 'after', 'home_content' ); ?>

  <!-- MOOSE BP TESTING START -->

</div> <!-- delete me (bp-moose) -->

<!-- MOOSE BP TESTING END -->