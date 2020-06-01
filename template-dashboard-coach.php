<?php
/**
 *
 * Template Name: Coach Dashboard
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
      <article class="col-md-12">
        <?php 
          $logged_in_user_obj = wp_get_current_user();
          echo '<pre>';
          // print_r($logged_in_user_obj);
          echo '</pre>';
          $athlete_name = $logged_in_user_obj->display_name;
        ?>
        <h4 class="block-title"><?php the_field('top_left_title'); ?> <?php echo $athlete_name; ?>?</h4>
      </article>
      <article class="col-md-6 d-none">
        <?php 
          $logged_in_user_obj = wp_get_current_user();
          // echo '<pre>';
          // print_r($logged_in_user_obj);
          // echo '</pre>';
          $athlete_name = $logged_in_user_obj->display_name;
        ?>
        <h4 class="block-title"><?php the_field('top_left_title'); ?> <?php echo $athlete_name; ?>?</h4>
      </article>
      <article class="col-md-6 d-none">
        <div class="membership-box">
          <h4 class="text">
            <?php the_field('top_right_title'); ?>
          </h4>
          <a href="<?php the_field('top_right_button_url'); ?>" target="_blank" class="btn btn-danger">
            <?php the_field('top_right_button_text'); ?>
          </a>
        </div>
      </article>
    </div>

    <?php 
    $user_id = get_current_user_id();
      // $total_profile_visit = visitors_get_profile_visit_count($user_id);
    ?>

    <div id="bottom-task-block" class="row">

      <div class="task-box task-box-sm text-center">
        <i class="fas fa-tasks"></i>
        <h6 class="text-only">TASKS COMPLETED</h6>
        <h1 class="text-number">
          <span id="total-complete-count">
            <!-- COMPLETED COUNT -->
          </span>
          /12
        </h1>
        <a href="#" class="btn btn-info">View Tasks</a>
      </div>

      <div class="task-box task-box-sm text-center">
        <i class="fas fa-eye"></i>
        <h6 class="text-only">PROFILE VIEWS</h6>
        <!-- <h1 class="text-number"><?php //echo $total_profile_visit; ?></h1> -->
        <h1 class="text-number"><?php //echo $total_profile_visit; ?></h1>
        <a href="#" class="btn btn-info">View Who</a>
      </div>

      <div class="task-box task-box-sm text-center">
        <i class="fas fa-envelope-square"></i>
        <!-- <img src="/wp-content/uploads/dashboard-email-icon.png" alt=""> -->
        <h6 class="text-only">NEW MESSAGES</h6>
        <?php 
        /** 
         * CHECKING TO SEE IF THERE IS NEW MESSAGE
         */
        $new_message = do_shortcode('[fep_shortcode_new_message_count]');
        $new_message_length = strlen($new_message);

        ?>
        <?php if ( $new_message_length != 245 ) : ?>
        <h1 class="text-number"><?php echo $new_message; ?></h1>
        <?php else :?>
        <h1 class="text-number">0</h1>
        <?php endif; ?>
        <a href="#" class="btn btn-info">View Messages</a>
      </div>

      <div class="task-box task-box-lg text-center">

        <i class="fas fa-users pt-5"></i>
        <h1 class="text-only">

          <?php the_field('top_right_title'); ?>

        </h1>

        <a href="<?php the_field('top_right_button_url'); ?>" target="_blank" class="btn btn-primary btn-lg"
          style="width: 80%; background: crimson; border: red;">
          <?php the_field('top_right_button_text'); ?>
        </a>

      </div>

    </div> <!-- #bottom-task-block end -->


  </section> <!-- END #dashboard-task-board -->

  <!-- MOOSE TEST BLOCK START -->

  <li class="list-inline-item">

    <button type="button" id="coach-search-button" class="btn btn-lg btn-success"
      data-target-url="/members/type/athletes/">Search</button>

  </li>

  </ul>
  <!-- MOOSE TEST BLOCK END -->

</div> <!-- #page-asm-dashboard end  -->



<?php
get_footer();