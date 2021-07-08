<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
<header>
	<div class="top-header">
		<ul class="container mb-0">
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
	<div class="hero-header container">
		<div class="row">
			<div class="col-lg-5 left">
				<h2><?php echo esc_html((get_field( 'header_title', 'option' ) )); ?></h2>
				<h4><?php echo esc_html((get_field( 'header_subtitle', 'option' ) )); ?></h4>
				<div class="footer">
					<a class="btn btn-primary" href="#">Subscribe</a>
					<div class="icon-list">
					<?php 
					while (have_rows( 'social_links', 'option' )):
						the_row();
						foreach (get_sub_field( 'links', 'option' ) as $link): 
						?>
							<a class="nav-link" href="<?php echo $link['link']; ?>" target="_blank">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/'?><?php echo $link['icon']; ?>-dark.svg" alt="<?php echo $link['icon']; ?>" class="icon">
							</a>
						<?php 
						endforeach;
					endwhile;
					?>
					</div>
				</div>
			</div>
			<div class="col-lg-7 right">
				<img src="<?php echo esc_url((get_field( 'hero_image', 'option' ))['url']); ?>" alt="<?php echo esc_attr((get_field( 'hero_image', 'option' ))['alt']); ?>" />
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg" role="navigation">
		<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-nav-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>
					<?php
					wp_nav_menu( array(
							'theme_location'    => 'primary',
							'depth'             => 1,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'primary-nav-menu',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
					) );
					?>
		</div>
	</nav>
</header>
