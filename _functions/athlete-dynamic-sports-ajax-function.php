<?php 
/**
 * ATHLETE DYNAMIC SPORTS FILTERS FUNCITON FOR JQUERY AJAX
 */

add_action('wp_ajax_nopriv_athlete_dynamic_sports_ajax_function', 'athlete_dynamic_sports_ajax_function');
add_action('wp_ajax_athlete_dynamic_sports_ajax_function', 'athlete_dynamic_sports_ajax_function');

 function athlete_dynamic_sports_ajax_function() {
   
 $item_count = 0;

 $sports = array();

  $args = array(
    'role' => 'athlete'
  );

  // The Query
  $user_query = new WP_User_Query( $args );

    // User Loop
    if ( ! empty( $user_query->get_results() ) ) {
      foreach ( $user_query->get_results() as $user ) {
        $user_id = $user->id;

        // SPORTS & LOCATION
        $sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );
        // $nationality = xprofile_get_field_data( 11, $user_id, $multi_format = 'array' );
        $item_count++;

        $option = '<option value="' . $sport . '">' . $sport . '</option>';

        array_push($sports, $option);

        // echo '<li>';
        // echo $nationality; 
        // echo '</li>';

        // echo '<pre>';
        // print_r($user);
        // echo '</pre>';
        
      }
    } else {

      echo 'No users found.';
      
    }
        
  $unique_location_list = array_unique($sports);

  foreach ($unique_location_list as $single_option) {
    echo $single_option;
  }

  
  // echo $item_count; 
  // echo '<pre>';
  // // print_r($sports);
  // echo 'UNIQUE LIST:';
  // print_r($unique_location_list);
  // echo '</pre>';


  die();
}