<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
			<div class="row">
				<div class="col-lg-8 col-12">
					<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content', 'page');

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
				<div class="col-lg-4 col-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
