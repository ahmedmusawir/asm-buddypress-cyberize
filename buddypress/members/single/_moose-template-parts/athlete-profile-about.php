<?php 
$user_id = bp_displayed_user_id();

 // ABOUT
 $about = xprofile_get_field_data( 28, $user_id, $multi_format = 'array' );
 
?>

<section id="about-section">

  <h1 id="about" class="block-header">
    <!-- <i class="fas fa-user-circle"></i> About -->
    <img class="pb-2" src="/wp-content/uploads/bio-icon-1.png" alt=""> About
  </h1>

  <p class="text-content">
    <?php echo $about; ?>
  </p>

</section>