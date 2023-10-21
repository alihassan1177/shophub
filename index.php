<?php

/**
 *
 * @package shophub
 */

get_header();
?>

<main id="primary" class="site-main">

	<div class="container-fluid">
		<div class="row">
			<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post();
			?>
					<div class="col-lg-4">
						<?php get_template_part('template-parts/content-post-card', get_post_type()) ?>
					</div>
				<?php
				}
			} else { ?>
				<div class="col-12">
					<p><?php _e("No Results found") ?></p>
				</div>
			<?php
			}

			the_posts_navigation([
				'prev_text'					 => __('prev chapter'),
				'next_text'					 => __('next chapter'),
				'in_same_term'				 => true,
				'taxonomy'					 => __('post_tag'),
				'screen_reader_text' => __('Continue Reading'),
			]);
			?>
		</div>

	</div>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
