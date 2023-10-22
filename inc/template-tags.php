<?php

if (!function_exists('shophub_get_post_thumbnail')) {
	function shophub_get_post_thumbnail($post_id, $size = "featured-image", $additional_attributes = [])
	{
		$custom_thumbnail = "";

		if ($post_id == null) {
			$post_id = get_the_ID();
		}
		$default_attributes = [
			"loading" => "lazy",
			"class" => "post-card-image"
		];

		$attributes  = array_merge($additional_attributes, $default_attributes);

		$custom_thumbnail = wp_get_attachment_image(get_post_thumbnail_id($post_id), $size, false, $attributes);
		return $custom_thumbnail;
	}
}

if (!function_exists('the_shophub_get_post_thumbnail')) {
	function the_shophub_get_post_thumbnail($post_id, $size = "featured-image", $additional_attributes = [])
	{
		echo shophub_get_post_thumbnail($post_id, $size, $additional_attributes);
	}
}
