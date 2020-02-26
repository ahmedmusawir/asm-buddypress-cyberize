<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>
  <section class="univ-single-asm">

    <figure class="featured-img-holder">
      <?php cyberize_post_thumbnail(); ?>
    </figure>

    <div class="entry-content container-fluid">

      <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-8">

          <main class="main-content">
            <!-- UNIVERSITY HEADER -->
            <header class="univ-header row">

              <div class="col-md-9">
                <?php
                if ( is_singular() ) :
                  the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                  the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;
                ?>

                <h3 class="sub-title">
                  Grade: <span class="text-info pl-3">B+</span>
                </h3>
              </div>
              <div class="col-md-3">
                <figure class="university-logo mt-3">
                  <img class="img-fluid" src="/wp-content/uploads/university-logos.png" alt="">
                </figure>
              </div>

            </header>

            <!-- UNIVERSITY HEADER END-->

            <!-- LEFT COL CONTENT -->
            <section class="univ-left-content">
              <h3 class="">School Data:</h3>

              <div class="row mt-5">
                <div class="col-6">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">SAT Range:</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1170 - 1370</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">ACT Range</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>27 - 31</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Acceptance Rate</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>0.9082</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Graduation Rate</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>0.571429</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Full-Time UnderGrad Students</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>23040</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Full-Time Grad Students</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>9082</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Net Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>19082</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">College Settings</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Large City</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-6">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Athletic Association</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1170 - 1370</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Athletic Conference</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>27 - 31</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Athletic Division</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>0.9082</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Male-Female UnderGrad Ratio</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1170 - 1370</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Male-Female Grad Ratio</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>27 - 31</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Men’s Varsity Sports</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>0.9082</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">Women’s Varsity Sports</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>0.9082</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th scope="col">College Type</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>4 Years</td>
                      </tr>
                    </tbody>

                  </table>
                </div>
              </div>
            </section>
            <!-- LEFT COL CONTENT END -->

          </main>

        </div>
        <aside id="univ-right-col" class="col-sm-12 col-md-12 col-lg-4">

          <!-- SINGLE ITEM MAP -->
          <div class="acf-map acf-map-single">

            <?php 

              $mapLocation = get_field('university_address');

            ?>
            <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>"
              data-lng="<?php echo $mapLocation['lng']; ?>">
              <h6 class=""><?php the_title(); ?></h6>
              <?php echo $mapLocation['address']; ?>
            </div>

          </div> <!-- ACF-MAP END -->

          <!-- ADDRESS BLOCK -->
          <section class="address-block">
            <h5>Address:</h5>
            <p>123 New Haven</p>
            <p>CT 06520, United States</p>

            <h5>Official Website:</h5>
            <p><a href="http://google.com">www.yale.edu</a></p>

            <div class="social">
              <i class="fab fa-facebook-square"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-youtube"></i>
              <i class="fab fa-linkedin-in"></i>
            </div>
          </section>
          <!-- ADDRESS BLOCK END -->

          <!-- BUTTON BLOCK -->
          <section class="button-block text-center">
            <i class="fas fa-user-circle"></i>
            <h5>BUILD YOUR</h5>
            <h5>PROFILE NOW</h5>
          </section>
          <!-- BUTTON BLOCK END -->

        </aside>
      </div>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
    </footer><!-- .entry-footer -->
  </section>
</article><!-- #post- -->