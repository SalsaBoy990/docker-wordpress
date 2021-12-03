<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gulacsi_Bulma
 */

get_header();
?>

<main id="primary" class="site-main">

  <section>
    <div class="owl-carousel owl-theme owl-loading">
      <div class="carousel-item-1">
        <h1 class="title is-1"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
        <?php $gulacsi_bulma_description = get_bloginfo('description', 'display');
        if ($gulacsi_bulma_description || is_customize_preview()) :
        ?>
          <p class="site-description"><?php echo $gulacsi_bulma_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                      ?></p>
        <?php endif; ?>
        <button class="button is-primary is-medium">CTA</button>
      </div>
      <div class="carousel-item-2">
        <div> Your Content</div>
      </div>
      <div class="carousel-item-3">
        <div> Your Content</div>
      </div>
    </div>
  </section>

  <?php
  if (have_posts()) :

    if (is_home() && !is_front_page()) :
  ?>
      <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
      </header>
  <?php
    endif;

    /* Start the Loop */
    while (have_posts()) :
      the_post();

      /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
      get_template_part('template-parts/content', get_post_type());

    endwhile;

    the_posts_navigation();

  else :

    get_template_part('template-parts/content', 'none');

  endif;
  ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
