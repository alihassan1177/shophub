<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shophub
 */

?>

<div class="single-blog-area-style-one" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?= get_permalink() ?>" class="thumbnail">
		<?php the_shophub_get_post_thumbnail(get_the_ID()) ?>
	</a>
	<div class="inner-content-wrapper">
		<a href="<?= get_permalink() ?>">
			<h6 class="title">
				<?php
				the_title('<a class="text-decoration-none" href="' . esc_url(get_permalink()) . '" >', '</a>');
				?>
			</h6>
		</a>
		<div class="bottom-area">
			<span class="admin">Amir Nisi</span>
			<span class="date">• 25 October, 2023</span>
		</div>
	</div>
</div>


