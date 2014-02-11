<?php
 /*
Template Name: Corporate Join
*/

get_header(); ?>

<section id="main-wrap">

 <div id="intro_wrap">
	<div class="container">
		<div class="slogan black">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Cleanweb-C.png" width="34" height="41" class="CleanwebC"/>

<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content();?>
<?php endwhile; ?>	


<?php

if ( is_page( '1215' )) {    
     gravity_form(3, false, false, false, '', false); 	

} elseif ( is_page( '1218' )) {	
     gravity_form(4, false, false, false, '', false); 

} elseif (is_page( '1220' )) { 
     gravity_form(5, false, false, false, '', false); 
	
} elseif (is_page( '1222' )) { 
     gravity_form(6, false, false, false, '', false); 	

} else { ?>
	Please contact us for assistance.
<?php
}	

?>

	
				</div>
			



		</div>	
	

				
<?php /*check that <section id="main-wrap"> ends in footer */ ?>

<?php get_footer(); ?>
			
		
		

		



	
