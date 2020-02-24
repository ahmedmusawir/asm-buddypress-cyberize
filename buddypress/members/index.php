<?php
/**
 * BuddyPress Members Directory
 *
 * @version 3.0.0
 */

?>
<section id="athlete-index">

  <div class="screen-content">
    <div class="search-menu-container">
      <article class="">
        <?php bp_get_template_part( 'common/search-and-filters-bar' ); ?>
      </article>
    </div>

    <!-- THE FOLLOWING IS LOADING THE MEMEBERS LIST WITH JS [data-bp-list="members"]... DO NOT REMOVE -->
    <div id="members-dir-list" class="members dir-list" data-bp-list="members">

    </div><!-- #members-dir-list -->

  </div><!-- // .screen-content -->

</section>