<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tfj
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="container">
			<p><?php echo esc_html( (get_field( 'footer_text', 'option' ) ) ); ?></p>
			<ul class="mb-0">
				<?php 
				while (have_rows( 'social_links', 'option' )):
					the_row();
					foreach (get_sub_field( 'links', 'option' ) as $link): 
					?>
						<li>
							<a class="nav-link" href="<?php echo $link['link']; ?>" target="_blank">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/'?><?php echo $link['icon']; ?>.svg" alt="<?php echo $link['icon']; ?>" class="icon">
							</a>
						</li>
					<?php 
					endforeach;
				endwhile;
				?>
			</ul>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
