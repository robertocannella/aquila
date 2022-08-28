<?php
/**
 * Custom template tags for the theme.
 *
 * @package Aquila
 */

/**
 * Gets the thumbnail with Lazy Load.
 * Should be called in the WordPress Loop.
 *
 * @param int|null $post_id               Post ID.
 * @param string   $size                  The registered image size.
 * @param array    $additional_attributes Additional attributes.
 *
 * @return string
 */

function get_the_post_custom_thumbnail($post_id, $size = 'featured-large', $additional_attributes = []):string {
	$custom_thumbnail = '';
	if ( $post_id === null ) {
		$post_id = get_the_ID();
	}
	if ( has_post_thumbnail( $post_id ) ) {
		$default_attr = [
			'loading' => 'lazy',
		];
		$attributes   = array_merge( $additional_attributes, $default_attr );

		$custom_thumbnail = wp_get_attachment_image(
			get_post_thumbnail_id( $post_id ),
			$size,
			false,
			$attributes
		);
	}
		return $custom_thumbnail;
}

function the_post_custom_thumbnail($post_id, $size = 'featured-large', $additional_attr = []):void{
	echo get_the_post_custom_thumbnail($post_id, $size, $additional_attr);
}