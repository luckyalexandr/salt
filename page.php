<?php get_header(); ?>

<section class="page-section">
    <div class="row">
        <div class="col-12">
	        <?php if ( have_posts() ) : ?>
		        <?php while ( have_posts() ) : the_post(); ?>
                    <h1 class="section-title"><?= the_title(); ?></h1>
                    <br>
			        <?= the_content(); ?>
		        <?php endwhile; ?>
	        <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>