<?php
/**
 * BuddyPress - Members Loop
 *
 * @since 3.0.0
 * @version 3.0.0
 */

bp_nouveau_before_loop(); ?>
<!-- <script src="https://kit.fontawesome.com/c8084101a0.js" crossorigin="anonymous"></script> -->

<section id="athlete-index-container" class="">

  <?php if ( bp_has_members( bp_ajax_querystring( 'members' ) . '&type=alphabetical' ) ) : ?>

  <?php bp_nouveau_pagination( 'top' ); ?>

  <ul id="members-list-asm" class="<?php bp_nouveau_loop_classes(); ?>">

    <?php while ( bp_members() ) : bp_the_member(); ?>

    <?php 
        $user_id = bp_get_member_user_id();
        $user_id_for_ACF = "user_" . $user_id;

        // ABOUT
        $sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );
        $about = xprofile_get_field_data( 28, $user_id, $multi_format = 'array' );
        $excerpt = substr($about, 0, 200) . '...';
        $nationality = xprofile_get_field_data( 11, $user_id, $multi_format = 'array' );
        $enrollment_year = xprofile_get_field_data( 17, $user_id, $multi_format = 'array' ); 
        $gender = xprofile_get_field_data( 7, $user_id, $multi_format = 'array' );


        $verification = get_field( 'athlete_verification', $user_id_for_ACF );
        $availability = get_field( 'athlete_availability', $user_id_for_ACF );

        // ATHLETE VIEWS
        $total_unique_visitors = visitors_get_unique_visitors_count( $user_id );

        // echo $verification;

        if ( ! $verification || $verification == 'no' ) {

          $v_result = '<span class="verified-status"><i class="fas fa-times-circle"></i> Verified</span>';

          $verify_filter = 'unverified';

        } else {

          $v_result = '<span class="verified-status"><i class="fas fa-check-circle"></i> Verified</span>';

          $verify_filter = 'verified';


        }

        // echo $availability;

        if ( !$availability || $availability == 'yes') {

          $a_result = '<span  class="available-status"><span class="available">Available</span></span>';
          $availability = 'available';

        } else {
          
          $a_result = '<span class="available-status"><span class="committed">Committed</span></span>';
          $availability = 'committed';
          
        }

        /**
         * ADVANCE FILTER CLASSES FOR FILTER ALOGORITHM
         */
       
    ?>
    <?php 
    
    if ($sport == 'US-FOOTBALL') : 

      $us_football_position = xprofile_get_field_data( 136, $user_id, $multi_format = 'array' );

    else :
      
      $us_football_position = '';

    endif; 

    if ($sport == 'BASEBALL') : 

      $baseball_primary_position = xprofile_get_field_data( 210, $user_id, $multi_format = 'array' );
      $baseball_secondary_position = xprofile_get_field_data( 211, $user_id, $multi_format = 'array' );

    else :

      $baseball_primary_position = '';
      $baseball_secondary_position = '';
      
    endif; 

    if ($sport == 'SOFTBALL') : 

      $softball_primary_position = xprofile_get_field_data( 214, $user_id, $multi_format = 'array' );
      $softball_secondary_position = xprofile_get_field_data( 215, $user_id, $multi_format = 'array' );

    else :

      $softball_primary_position = '';
      $softball_secondary_position = '';

    endif; 

    if ($sport == 'BASKETBALL') : 

      $basketball_preferred_hand = xprofile_get_field_data( 203, $user_id, $multi_format = 'array' );
      $basketball_primary_position = xprofile_get_field_data( 206, $user_id, $multi_format = 'array' );
      $basketball_secondary_position = xprofile_get_field_data( 207, $user_id, $multi_format = 'array' );

    else :

      $basketball_preferred_hand = '';
      $basketball_primary_position = '';
      $basketball_secondary_position = '';

    endif; 

    if ($sport == 'CHEERLEADING') : 

      $cheerleading_position = xprofile_get_field_data( 181, $user_id, $multi_format = 'array' );

    else :

      $cheerleading_position = '';

    endif; 

    if ($sport == 'GOLF') : 

      $golf_handicap = xprofile_get_field_data( 301, $user_id, $multi_format = 'array' );
      $golf_wagr = xprofile_get_field_data( 302, $user_id, $multi_format = 'array' );
      $golf_national_ranking = xprofile_get_field_data( 303, $user_id, $multi_format = 'array' );
      $golf_preferred_hand = xprofile_get_field_data( 306, $user_id, $multi_format = 'array' );

    else :

      $golf_handicap = '';
      $golf_wagr = '';
      $golf_national_ranking = '';
      $golf_preferred_hand = '';

    endif; 

    
    
    ?>

    <li <?php bp_member_class( 
        array( 'item-entry-asm', "$sport", "$gender", "$availability", "$verify_filter", "$enrollment_year", "$nationality",
        "$us_football_position",
        "$cheerleading_position",
        "$baseball_primary_position", "$baseball_secondary_position",
        "$softball_primary_position", "$softball_secondary_position",
        "$basketball_preferred_hand", "$basketball_primary_position", "$basketball_secondary_position",
        "$golf_handicap", "$golf_wagr", "$golf_national_ranking", "$golf_preferred_hand", 'animated', 'bounceIn' ) 
        ); 
      ?> data-bp-item-id="<?php bp_member_user_id(); ?>" data-bp-item-component="members">
      <div class="list-wrap-asm row">
        <article class="col-md-3">
          <div class="item-avatar-asm">
            <a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar( bp_nouveau_avatar_args() ); ?></a>
          </div>
        </article>
        <article class="col-md-9">
          <div class="item-asm">

            <ul class="list-inline status-bar float-right">
              <li class="list-inline-item">
                <?php echo $v_result; ?>
              </li>
              <li class="list-inline-item">
                <?php echo $a_result; ?>
              </li>
            </ul>

            <div class="item-block-asm">

              <h2 class="list-title member-name">
                <a href="<?php bp_member_permalink(); ?>"><?php bp_member_name(); ?></a>
                <!-- (<?php echo bp_get_member_user_id(); ?>) -->
                <small>(<?php echo $sport; ?>)</small>
                <!-- VERIFICATION: <?php the_field( 'athlete_verification', $user_id_for_ACF ); ?> -->
                <!-- AVAILABILITY: <?php the_field( 'athlete_availability', $user_id_for_ACF ); ?> -->
              </h2>


              <ul class="list-inline info-bar">
                <li class="list-inline-item"><i class="fas fa-globe"></i> &nbsp;Residence:
                  <?php echo $nationality; ?></li>
                <li class="list-inline-item"><i class="fas fa-eye"></i> &nbsp;
                  <?php echo $total_unique_visitors; ?> Profile Views
                </li>
                <li class="list-inline-item"><i class="fas fa-users-class"></i>&nbsp;Class:
                  <?php echo $enrollment_year; ?> </li>
              </ul>

              <!-- UNIT TEST DATA START -->

              <ul>
                <li class="d-inline-block pr-2">
                  Handicap: <?php echo $golf_handicap; ?>
                </li> |
                <li class="d-inline-block pr-2">
                  WAGR: <?php echo $golf_wagr; ?>
                </li> |
                <li class="d-inline-block pr-2">
                  National Ranking: <?php echo $golf_national_ranking; ?>
                </li> |
                <li class="d-inline-block pr-2">
                  Hand: <?php echo $golf_preferred_hand; ?>
                </li>
              </ul>

              <!-- UNIT TEST DATA END -->

              <div class="text-content">
                <?php echo $excerpt; ?>
                <h5 class="readmore"><a href="<?php bp_member_permalink(); ?>">[View Athlete...]</a></h5>
              </div>


            </div> <!-- end item-block -->

          </div><!-- // .item -->

        </article>

      </div>
    </li>

    <?php endwhile; ?>

  </ul>

  <?php // bp_nouveau_pagination( 'bottom' ); ?>

  <?php
else :

	bp_nouveau_user_feedback( 'members-loop-none' );

endif;
?>

</section>


<?php bp_nouveau_after_loop(); ?>