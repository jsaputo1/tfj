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
				<div class="header-bottom">
					<div class="post-details">
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'id', 1 ) ); ?>"><h5><?php echo get_the_author_meta( 'display_name', 1 ); ?></h5></a>
						<figure>
							<a href="<?php echo get_the_author_meta( 'url', 1 ); ?>" target="blank">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/twitter-blue.svg'?>" />
							</a>
						</figure>
						<h6><?php echo the_date(); ?></h5>
					</div>
					<div class="share-links">
						<div class="sharethis-inline-share-buttons"></div>
					</div>
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
