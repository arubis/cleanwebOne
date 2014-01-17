<?php // Super simple page template file. It gets the header and the footer.
      // Then it puts them in a box. ?>

<?php get_header(); ?>

<main role="main">
  <section id="main-wrap">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="page container">

        <div class="row">
          <div class="page title content">
            <h1 id="post-title"><?php the_title(); ?></h1>
          </div>
        </div><!-- /row -->
          
          <?php  $layoutType=get_post_meta(get_the_id(), 'layout-type', true); ?>

        <div class="row">                
          <div class="page content">
            <?php the_content(''); ?>
          </div>
        </div><!-- /row -->
        
      </div><!-- /page container -->
    <?php endwhile; ?>    
  </section>
</main>

<?php get_footer(); ?>