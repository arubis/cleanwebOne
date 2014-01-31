<?php // Render non-landing, non-static page assets (eg. blog entries) ?>

<?php get_header(); ?>

  <main role="main">

    <section class="posts">

      <?php // Loop it. ?>
      <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

        <div class="row">
          <div class="post col-sm-8 col-sm-offset-2">
            <h2 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

            <div class="entry">
              <?php the_content(); ?>
            </div>

            <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


        </div>

      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

    </section>

  </main>

<?php get_footer(); ?>
