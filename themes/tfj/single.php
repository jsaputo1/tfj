<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tfj
 */

get_header();
?>

<main id="primary" class="site-main container">
	<div class="row">
		<div class="col-lg-9 main-content border">
			<div class="header">
				<h2><?php the_title(); ?></h2>
				<div class="post-details">
					<h5><?php echo get_the_author_meta('display_name', 1); ?></h5>
					<h6><?php echo the_date(); ?></h5>
				</div>
			</div>
			<div class="body">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="col-lg-3 sidebar border">
			<?php get_sidebar();?>
		</div>
	</div>
</main><!-- #main -->
<?php
get_footer();
