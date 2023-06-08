<?php
/*
Template Name: Gallery Page
*/
?>
<section class="page-section">
	<div class="row">
		<div class="col-12">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<h1 class="section-title"><?= the_title(); ?></h1>
					<br>

					<?php

					$args = array(
						'numberposts' => -1, // Using -1 loads all posts
						'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager
						'order'=> 'ASC',
						'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos
						'post_parent' => $post->ID, // Important part – ensures the associated images are loaded
						'post_status' => null,
						'post_type' => 'attachment'
					);

					$images = get_children( $args );
// continued below …
					?>

				<?php if($images){ ?>
					<div id=”slider”>
						<?php foreach($images as $image){ ?>
							<img src=”<?php echo $image->guid; ?>” alt=”<?php echo $image->post_title; ?>” title=”<?php echo $image->post_title; ?>” />
						<?php } ?>
					</div>
				<?php } ?>

					<?= the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
