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
			<h2>Activity</h2>
			<?php
			$args = array( 
				'post_type'   => 'post', 
				'order'       => 'ASC',
				);
			$latest_posts = get_posts( $args ); 
			?>
        	<?php 
			foreach ( $latest_posts as $post ) : setup_postdata( $post ); 
				?>
				<div class="card row">
					<div class="col-4 col-sm-3">
						<figure>
							<a href="<?php echo the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>
						</figure>
					</div>
					<div class="col-8 col-sm-9 body">
						<div class="header">
							<h6><?php print_r( get_the_category()[0]->name );?></h6>
							<a href="<?php echo the_permalink(); ?>" class="post-link">
								<h3><?php echo the_title(); ?></h3>
								<div class="desktop"><?php echo the_excerpt(); ?></div>
								<div class="mobile"><p><?php echo wp_trim_words( get_the_excerpt(), 10, '...' ); ?><p></div>
							</a>
						</div>
						<div class="footer">
							<div class="post-details">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'id', 1 ) ); ?>"><h5><?php echo get_the_author_meta('display_name', 1); ?></h5></a>
								<h6><?php echo the_date(); ?></h5>
							</div>
							<div class="share-links">
								<div class="sharethis-inline-share-buttons"></div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="col-lg-3 sidebar border">
			<?php get_sidebar();?>
		</div>
	</div>
</main><!-- #main -->
<?php
get_footer();
