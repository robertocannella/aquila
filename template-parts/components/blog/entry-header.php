<?php
/**
 * Template for entry header
 *
 * @package 'Aquila'
 */

$the_post_id = get_the_ID();
$hide_page_title = get_post_meta($the_post_id, '_hide_page_title', true);
$has_post_thumbnail = get_the_post_thumbnail($the_post_id);
?>

<header class="entry-header">
	<?php
	// Featured image
	if ( $has_post_thumbnail ) {
		?>
        <div class="entry-image mb-3">
            <a class="d-block" href="<?php echo esc_url( get_permalink() ); ?>">
                <figure class="img-container">
					<?php
					the_post_custom_thumbnail(
						$the_post_id,
						'featured-thumbnail',
						[
							'sizes' => '(max-width: 350px) 350px, 233px',
							'class' => 'attachment-featured-large size-featured-image'
						]
					)
					?>
                </figure>
            </a>
        </div>
		<?php
	}
	?>
</header>
