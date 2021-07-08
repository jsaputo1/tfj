<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tfj
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary">
	<div class="twitter-feed">
		<a class="twitter-timeline" href="https://twitter.com/TheFantasyJones?ref_src=twsrc%5Etfw" data-tweet-limit="3">Tweets by TheFantasyJones</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
	</div>
</aside><!-- #secondary -->
