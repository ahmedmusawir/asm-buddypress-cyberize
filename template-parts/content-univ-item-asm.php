<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize
 */

?>
<?php 
/**
 * Collecting University Categories
 */

$tax_list = get_the_terms(get_the_ID(), 'school-type'); // THIS IS FOR CPT TAXONOMIES
// $cat_list = get_the_category(); // THIS IS GOOD FOR REGULAR POSTS
$school_type = $tax_list[0]->name;
echo '<pre>';
// echo print_r($tax_list);
// echo $tax_list[0]->name;
echo '</pre>';

?>
<article id="post-<?php the_ID(); ?>" <?php post_class("post-item item animated bounceIn  $school_type"); ?>>

  <div class="entry-content">

    <?php if (has_post_thumbnail()) : ?>

    <div class="FL-post-item-footer">
      <?php cyberize_entry_footer(); ?>
    </div>

    <figure class="featured-image-box">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'blog-size' ); ?>
      </a>
    </figure>



    <?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				?>

    <div class="entry-meta">
      <?php
        // cyberize_posted_by();
        // cyberize_posted_on();
			?>
    </div><!-- .entry-meta -->

    <div class="pr-3 d-flex justify-content-between university-item-content">

      <a class="detail-link" href="<?php the_permalink(); ?>"><span class="btn btn-primary btn-sm">View
          Details</span></a>
      <figure class="university-logo">
        <img class="img-fluid" src="<?php the_field('university_logo'); ?>" alt="">
        <!-- <img class="img-fluid" src="/wp-content/uploads/university-logos.png" alt=""> -->
      </figure>

      <?php
        // <!-- CONTENT -->
          // the_excerpt();
        ?>
    </div>

    <hr>

    <?php else : ?>

    <div class="FL-post-item-footer">
      <?php cyberize_entry_footer(); ?>
    </div>

    <?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif;

				?>
    <div class="entry-meta">
      <?php
        // cyberize_posted_by();
        // cyberize_posted_on();
      ?>
    </div><!-- .entry-meta -->

    <div class="pr-3 pt-3 pb-3 d-flex justify-content-between university-item-content">

      <a class="detail-link" href="<?php the_permalink(); ?>"><span class="btn btn-primary btn-sm">View
          Details</span></a>
      <figure class="university-logo">
        <img class="img-fluid" src="<?php the_field('university_logo'); ?>" alt="">
        <!-- <img class="img-fluid" src="/wp-content/uploads/university-logos.png" alt=""> -->
      </figure>

      <?php
      // <!-- CONTENT -->
        // the_excerpt();
      ?>
    </div>

    <?php endif; ?>

  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->