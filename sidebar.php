<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shophub
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<div class="fluxi-right-ct-1">
	<div class="rts-single-wized search">
		<div class="wized-body mt--0">
			<div class="rts-search-wrapper">
				<input class="Search" type="text" placeholder="Enter Keyword">
				<button><i class="fal fa-search"></i></button>
			</div>
		</div>
	</div>
	<!-- single wizered End -->
	<!-- single wizered start -->
	<div class="rts-single-wized Categories">
		<div class="wized-header">
			<h5 class="title">
				Categories
			</h5>
		</div>
		<div class="wized-body">
			<!-- single categoris -->
			<ul class="single-categories">
				<li><a href="#">Business Solution <i class="far fa-long-arrow-right"></i></a></li>
			</ul>
			<!-- single categoris End -->
			<!-- single categoris -->
			<ul class="single-categories">
				<li><a href="#">Strategy Growth<i class="far fa-long-arrow-right"></i></a></li>
			</ul>
			<!-- single categoris End -->
			<!-- single categoris -->
			<ul class="single-categories">
				<li><a href="#">Finance Solution<i class="far fa-long-arrow-right"></i></a></li>
			</ul>
			<!-- single categoris End -->
			<!-- single categoris -->
			<ul class="single-categories">
				<li><a href="#">Investment Policy<i class="far fa-long-arrow-right"></i></a></li>
			</ul>
			<!-- single categoris End -->
			<!-- single categoris -->
			<ul class="single-categories">
				<li><a href="#">Tax Managment<i class="far fa-long-arrow-right"></i></a></li>
			</ul>
			<!-- single categoris End -->
		</div>
	</div>
	<!-- single wizered End -->
	<!-- single wizered start -->
	<div class="rts-single-wized Recent-post">
		<div class="wized-header">
			<h5 class="title">
				Recent Posts
			</h5>
		</div>
		<div class="wized-body">
			<!-- recent-post -->
			<div class="recent-post-single">
				<div class="thumbnail">
					<a href="#"><img src="assets/images/blog/01.png" alt="Blog_post"></a>
				</div>
				<div class="content-area text-start">
					<div class="user">
						<i class="fal fa-clock"></i>
						<span>15 Jan, 2024</span>
					</div>
					<a class="post-title" href="#">
						<h6 class="title">We would love to share a similar experience</h6>
					</a>
				</div>
			</div>
			<!-- recent-post End -->
			<!-- recent-post -->
			<div class="recent-post-single">
				<div class="thumbnail">
					<a href="#"><img src="assets/images/blog/02.png" alt="Blog_post"></a>
				</div>
				<div class="content-area text-start">
					<div class="user">
						<i class="fal fa-clock"></i>
						<span>15 Jan, 2024</span>
					</div>
					<a class="post-title" href="#">
						<h6 class="title">We would love to share a similar experience</h6>
					</a>
				</div>
			</div>
			<!-- recent-post End -->
			<!-- recent-post -->
			<div class="recent-post-single">
				<div class="thumbnail">
					<a href="#"><img src="assets/images/blog/03.png" alt="Blog_post"></a>
				</div>
				<div class="content-area text-start">
					<div class="user">
						<i class="fal fa-clock"></i>
						<span>15 Jan, 2024</span>
					</div>
					<a class="post-title" href="#">
						<h6 class="title">We would love to share a similar experience</h6>
					</a>
				</div>
			</div>
			<!-- recent-post End -->
		</div>
	</div>
	<!-- single wizered End -->
	<!-- single wizered start -->
	<div class="rts-single-wized">
		<div class="wized-header">
			<h5 class="title">
				Popular Tags
			</h5>
		</div>
		<div class="wized-body">
			<div class="tags-wrapper">
				<a href="#">Services</a>
				<a href="#">Business</a>
				<a href="#">Growth</a>
				<a href="#">Finance</a>
				<a href="#">UI/UX Design</a>
				<a href="#">Solution</a>
				<a href="#">Speed</a>
				<a href="#">Strategy</a>
				<a href="#">Technology</a>
			</div>
		</div>
	</div>
</div>