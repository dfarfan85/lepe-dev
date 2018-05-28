
<?php get_header(); ?>



<!-- contents of the loop -->



<?php 
	if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part( 'blog', get_post_format() );

	endwhile; endif; 
?>

<?php get_footer(); ?>