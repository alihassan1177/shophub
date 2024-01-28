<?php

/**
 *
 * @package shophub
 */

get_header();
?>

<div class="single-case-studies-bread-crumb-area area-2 pt--120 pb--120 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-inner">
					<div class="pagimation">
						<a href="#">Home</a><i class="fa-regular fa-chevron-right"></i>
						<a href="#">Blog</a><i class="fa-regular fa-chevron-right"></i>
						<a href="#" class="current">Blog Grid</a>
					</div>
					<h1 class="title split-collab">Fluxi Blog</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="rts-service-banner-area rts-section-gap inner">
	<div class="fluxi-hero-section inner grid-2 rts-section-gapBottom inner-post">
		<div class="container py-5">
			<div class="row gx-5 sticky-coloum-wrap">
				<div class="col-lg-8 col-12">
					<div class="row">
						<?php
						if (have_posts()) {
							while (have_posts()) {
								the_post();
						?>
								<div class="col-lg-6">
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
				<div class="col-lg-4 col-12 sticky-coloum-item">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
