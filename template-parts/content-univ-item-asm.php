<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("col-md-12 univ-post-item item animated bounceIn"); ?>>

  <div class="entry-content row">

    <section class="col-sm-5">

      <?php if (has_post_thumbnail()) : ?>

      <figure class="featured-image-box">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( 'featured-size' ); ?>
        </a>
      </figure>

      <?php else : ?>

      <figure class="featured-image-box">
        <a href="<?php the_permalink(); ?>">
          <img class="attachment-featured-size size-featured-size wp-post-image"
            src="/wp-content/uploads/image-not-found-500x300.jpg" alt="" width="500" height="300">
        </a>
      </figure>

      <?php endif; ?>

    </section>



    <section id="university-item-box" class="col-sm-7">

      <div class="university-text">
        <?php

        $mapLocation = get_field('university_address');

    
        if ( is_singular() ) :
          the_title( '<h1 class="entry-title">', '</h1>' );
        else :
          the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;

      ?>
        <h5 class="university-address">
          <strong><?php echo $mapLocation['address']; ?></strong>
        </h5>
      </div>
      <div class="university-item-content">

        <?php if (get_field('university_logo') ) : ?>
        <figure class="university-logo">
          <img class="img-fluid" src="<?php the_field('university_logo'); ?>" alt="">
        </figure>
        <?php else : ?>
        <figure class="university-logo">
          <img class="img-fluid" src="/wp-content/uploads/no-logo.jpg" alt="">
        </figure>
        <?php endif; ?>

        <a class="detail-link" href="<?php the_permalink(); ?>">
          <span class="btn btn-primary btn-sm">
            View Details
          </span>
        </a>

        <?php
        // <!-- CONTENT -->
          // the_excerpt();
        ?>
      </div>

    </section>

    <hr>


  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->