<?php // Super simple page template file. It gets the header and the footer.
      // Then it puts them in a box. ?>

<?php get_header(); ?>

<?php 
function more_posts() { // see if there are posts
  global $wp_query;     // following the current one
  return $wp_query->current_post + 1 < $wp_query->post_count;
} ?>

<main role="main">
  <section class="pages" id="main-wrap">

    <?php // Loop it. ?>
    <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

      <div class="row">
        <div class="page col-sm-10 col-sm-offset-1"><?php //Alas, would that this were semantic. Sass's @import doesn't play nice.?>
          <!-- <h2 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2> -->

          <div class="entry content">
            <?php the_content(); ?>
          </div>

          <?php // don't really need author/ts for pages ?>
        </div>
      </div>

      <?php // put an HR after current post if there's
            // another coming
      if ( more_posts() ):  ?>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <hr />
        </div>
      </div>
      <?php endif; ?>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

  </section>

</main>

<?php get_footer(); ?>
