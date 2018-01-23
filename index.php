<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ultrabootstrap
 */

get_header(); ?>





<!--     <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

      <?php if ( is_home() && ! is_front_page() ) : ?>
        <header>
          <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
      <?php endif; ?>
<div class="container">
  <div class="row post-list">
      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php


          get_template_part( 'template-parts/content', get_post_format() );
        ?>

      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>
</div>
</div>
    </main> -->


    <section id="fh5co-home" data-section="home" class='main_img bg-slider'>
      <div class="overlay main_img"></div>
      <div class="container" style="width:100%;">
        <div class="text-wrap main_img" style="margin:0px;">
          <div class="text-inner">
            <div class="row box">
              <div class="col-md-10 col-md-offset-1 to-animate" style="color: #fff;>
                <h2 style="font-size: 17px; margin-top: 150px;">Bring the weather exposed walls to the interior.</h2>
                  <br>
                  <p style="font-size:10px;margin-top: 48px;">s o t o c h i k u</p>
                  <h1 style="font-size: 25px;">外&nbsp;&nbsp;&nbsp;&nbsp;築</h1>
                  <br>
                  <br>
<img src="<?php echo get_template_directory_uri(); ?>/images/gf_logo_b.png" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive" style="width: 110px; margin:0 auto;"/>
              </div>
            </div>
          </div>

          <div>
            <ul class='sns'>
              <li class='sns_imag'><a href="http://www.gridframe.co.jp/"  target="_blank">
<img src="<?php echo get_template_directory_uri(); ?>/images/g_logo.png" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive" />
              </li>
              <li class='sns_imag'><a href="https://www.facebook.com/pg/Gridframe1998/about/"  target="_blank">
<img src="<?php echo get_template_directory_uri(); ?>/images/f_logo.png" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive" />
              </li>
              <li class='sns_imag'><a href="http://instagram.com/_gridframe_" target="_blank">
<img src="<?php echo get_template_directory_uri(); ?>/images/i_logo.png" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive" />
              </li>
              <li class='sns_imag'><a href="http://d.hatena.ne.jp/yogosiurubi/" target="_blank">
<img src="<?php echo get_template_directory_uri(); ?>/images/b_logo.png" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive" />
              </li>
            </ul>
          </div>

        </div>
      </div>
    </section>

<?php //get_footer(); ?>