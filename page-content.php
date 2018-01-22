<?php
/**
 * Template Name: content
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package ultrabootstrap
 */
get_header(); ?>
<div class="spacer">
<div class="container">
<section class="page-section">
          
      <div class="<?php echo $class;?> detail-content">
            
              <?php while ( have_posts() ) : the_post(); ?>
                  <?php the_content(); ?>

              <?php endwhile; // End of the loop. ?> 

              <?php comments_template(); ?>         

          </div> <!-- /.end of detail-content -->

  
</section><!-- /.end of section -->
</div>
</div>
