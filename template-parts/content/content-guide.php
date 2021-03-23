<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @since Canada_Info  1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php canada_info_post_thumbnail(); ?>
	</header><!-- .entry-header -->
		content single
	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php canada_info_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->



</article><!-- #post-<?php the_ID(); ?> -->
