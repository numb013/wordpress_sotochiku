<?php
/**
 * The template for displaying all single posts.
 *
 * @package ultrabootstrap
 */

get_header(); ?>



<section id="fh5co-testimony" class="testimony_top" data-section="testimony">
    <div class="fh5co-testimony">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-heading text-center">
            <div class="<?php echo $class;?> detail-content">
              <?php while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>
              <?php endwhile; // End of the loop. ?> 
              <?php //comments_template(); ?>         
            </div> <!-- /.end of detail-content -->
        </div>
    </div>    </div>
  </div>
</section>