<?php // Render non-landing, non-static page assets (eg. blog entries) ?>

<?php get_header(); ?>

<?php 
function more_posts() { // see if there are posts
  global $wp_query;     // following the current one
  return $wp_query->current_post + 1 < $wp_query->post_count;
} ?>

  <main role="main">
    <div class="container">
      <div class="row">

        <!-- <div class="col-sm-10"> -->
          <section class="posts" id="main-wrap">

            <?php // Loop it. ?>
            <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

              <div class="post">
                <h2 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

                <div class="content entry">
                  <?php the_content(); ?>
                </div>

                <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
              </div>

            <?php // put an HR after current post if there's
            // another coming
            if ( more_posts() ):  ?>
              <hr />
            <?php endif; ?>


            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

          </section>

          

          <?php get_sidebar(); ?>
        </div>
    </div>

  </main>

<?php get_footer(); ?>
