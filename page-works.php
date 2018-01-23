<?php
/**
 * Template Name: works
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package ultrabootstrap
 */
get_header(); ?>

<?php
/* （ステップ1）データの取得 */
$query = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'category_name' => 'works',
    )
);
?>

  <section id="fh5co-testimony" class="testimony_top" data-section="testimony">
    <div class="container">
      <div class="row">
        <div class="animate-box">
          <div class="works_box fh5co-heading">
            <h2>WORKS</h2>
            <p style="text-align: center;">Construction examples of proacessing</p>
          </div>
        </div>

<?php
/* （ステップ2）データの表示 */
if ( $query->have_posts() ) : ?>
    <div>
        <?php while ( $query->have_posts() ) : $query->the_post();?>
          <div class="col-lg-6 col-md-6">
            <div class="fh5co-blog animate-box">
              <a href="<?php the_permalink(); ?>">
              <?php if ( has_post_thumbnail() ) : ?>
                  <p><?php the_post_thumbnail(); ?></p>
              <?php endif; ?>  
              </a>
              <div class="blog-text work-text">
                <p><?php the_title(); ?> /<?php the_date('Y.m'); ?></p>
              </div> 
            </div>
          </div>
        <?php endwhile; ?>
    </div>
<?php endif; wp_reset_postdata(); ?>


<!--         <div class="col-lg-6 col-md-6">
          <div class="fh5co-blog animate-box">
            <a href="single_1.html"><img class="img-responsive" src="images/business_07.jpg" alt=""></a>
            <div class="blog-text work-text">
              <p>MASON　/  Hair Salon / 2017.11</p>
            </div> 
          </div>
        </div> -->


      </div>
    </div>
  </section>

<?php 
  $page_info = get_page_by_path('business');
  $page = get_post($page_info);
  echo $page->post_content;
?>
