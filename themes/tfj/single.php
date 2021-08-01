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
		<div class="col-lg-9 main-content">
			<section class="post border">
				<div class="header">
					<h2><?php the_title(); ?></h2>
					<div class="header-bottom">
						<div class="post-details">
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'id' ) ); ?>"><h5><?php echo get_the_author_meta( 'display_name' ); ?></h5></a>
							<figure>
								<a href="<?php echo get_the_author_meta( 'url' ); ?>" target="blank">
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
				<div class="footer">
					<?php $tags = get_the_tags(); 
					foreach( $tags as $tag ) : ?>
						<a href="<?php echo get_tag_link($tag->term_id); ?>" class="btn btn-light"><?php echo $tag->name; ?></a>
					<?php endforeach; ?>
				</div>
			</section>
			<section class="sub-post border">
				<div class="row">
					<div class="col-12">
						<h3>About Author</h3>
						<div class="card">
							<div class="card-header">
								<figure>
									<img src="<?php echo get_avatar_url( get_the_author_meta( 'id' ) ); ?>">
								</figure>
								<div class="text">
									<a href="<?php echo get_author_posts_url( get_the_author_meta( 'id' ) ); ?>"><h5><?php echo get_the_author_meta('display_name'); ?></h5></a>
									<a href="<?php echo get_the_author_meta( 'url' ); ?>" target="blank">
										<span>
											<h6>Follow on Twitter</h6>
											<img src="<?php echo get_template_directory_uri() . '/assets/images/twitter-blue.svg'?>" class="icon" />
										</span>	
									</a>
								</div>
							</div>
							<div class="card-body">
								<p class="col-lg-9"><?php echo get_the_author_description(); ?></p>
							</div>
							<div class="card-footer">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'id' ) ); ?>"><h5>More from <?php echo get_the_author_meta('display_name' ); ?></h5></a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="col-lg-3 sidebar border">
			<?php get_sidebar();?>
		</div>
	</div>
</main><!-- #main -->
<?php
get_footer();
