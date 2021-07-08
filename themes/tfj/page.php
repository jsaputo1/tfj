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
					<div class="col-md-3">
						<figure>
							<a href="<?php echo the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>
						</figure>
					</div>
					<div class="col-md-9 body">
						<div class="header">
							<h6><?php print_r( get_the_category()[0]->name );?></h6>
							<a href="<?php echo the_permalink(); ?>">
								<h3><?php echo the_title(); ?></h3>
								<?php echo the_excerpt(); ?>
							</a>
						</div>
						<div class="footer">
							<div class="post-details">
								<h5><?php echo get_the_author_meta('display_name', 1); ?></h5>
								<h6><?php echo the_date(); ?></h5>
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
