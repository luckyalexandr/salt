<?php get_header(); ?>

<section class="slider-section">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
	    <?php
	    $wp_query = new WP_Query( array(
		    'post_type' => 'post',
		    'category_name' => 'slajder',
            'order' => 'ASC'
	    ));
        $i = 0;
	    ?>
	    <?php if ( have_posts() ) : ?>

		    <?php while ( have_posts() ) : the_post(); ?>
                <?php $i++; ?>
                <div class="carousel-item <?= $i == 1 ? 'active' : '' ?>">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="d-block w-100" alt="...">
                    <a href="#" class="slide-text">
                        <h3 class="slide-title">
		                    <?php the_title(); ?>
                        </h3>
                        <div>
		                    <?php the_content(); ?>
                        </div>
                    </a>
                </div>
		    <?php endwhile; ?>

	    <?php endif; ?>

	    <?php wp_reset_query(); // очищаем запрос ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class="about">
    <div class="row">
        <div class="col-12">
	        <?php
	        $wp_query = new WP_Query( array(
		        'post_type' => 'page',
		        'pagename' => 'o-produkte',
	        ));
	        ?>
	        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <h2 class="section-title"><?= the_title(); ?></h2>
            <div class="about-text">
                <?= the_content(); ?>
            </div>

            <?php endwhile; ?>

            <?php endif; ?>

	        <?php wp_reset_query(); // очищаем запрос ?>
        </div>
    </div>
</section>

<section class="advantage">
    <div class="row">
        
        <div class="col-12">
        <?php
        $wp_query = new WP_Query( array(
            'post_type' => 'page',
            'pagename' => 'advantages',
        ));
        ?>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <h2 class="section-title"><?= the_title(); ?></h2>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_query(); // очищаем запрос ?>
        </div>
        <div class="col-md-3">
            <img src="<?= get_stylesheet_directory_uri() . '/images/mbridelivery_99588.svg' ?>" alt="">
            <?php
            $wp_query = new WP_Query( array(
                'post_type' => 'page',
                'pagename' => 'delivery',
            ));
            ?>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                        <p><?= the_title(); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); // очищаем запрос ?>
        </div>
        <div class="col-md-3">
            <img src="<?= get_template_directory_uri() . '/images/drink-glass-milky-svgrepo-com.svg'; ?>" alt="">
	        <?php
	        $wp_query = new WP_Query( array(
		        'post_type' => 'page',
		        'pagename' => 'ingredients',
	        ));
	        ?>
	        <?php if ( have_posts() ) : ?>
		        <?php while ( have_posts() ) : the_post(); ?>
                    <p><?= the_title(); ?></p>
		        <?php endwhile; ?>
	        <?php endif; ?>
	        <?php wp_reset_query(); // очищаем запрос ?>
        </div>
        <div class="col-md-3">
            <img src="<?= get_stylesheet_directory_uri() . '/images/agriculture-svgrepo-com.svg' ?>" alt="">
	        <?php
	        $wp_query = new WP_Query( array(
		        'post_type' => 'page',
		        'pagename' => 'from-nature',
	        ));
	        ?>
	        <?php if ( have_posts() ) : ?>
		        <?php while ( have_posts() ) : the_post(); ?>
                    <p><?= the_title(); ?></p>
		        <?php endwhile; ?>
	        <?php endif; ?>
	        <?php wp_reset_query(); // очищаем запрос ?>
        </div>
        <div class="col-md-3">
            <img src="<?= get_stylesheet_directory_uri() . '/images/certificate-svgrepo-com.svg' ?>" alt="">
	        <?php
	        $wp_query = new WP_Query( array(
		        'post_type' => 'page',
		        'pagename' => 'certificates',
	        ));
	        ?>
	        <?php if ( have_posts() ) : ?>
		        <?php while ( have_posts() ) : the_post(); ?>
                    <p><?= the_title(); ?></p>
		        <?php endwhile; ?>
	        <?php endif; ?>
	        <?php wp_reset_query(); // очищаем запрос ?>
        </div>
    </div>
</section>

<section class="feedback">
    <div class="row">
        <div class="col-12">
	        <?php
	        $wp_query = new WP_Query( array(
		        'post_type' => 'post',
		        'category_name' => 'forma',
	        ));
	        ?>
	        <?php if ( have_posts() ) : ?>

		        <?php while ( have_posts() ) : the_post(); ?>
                    <h2 class="section-title"><?= the_title(); ?></h2>

                <div class="text-center">
	                <?= the_content(); ?>
                </div>
		        <?php endwhile; ?>

	        <?php endif; ?>
	        <?php wp_reset_query(); // очищаем запрос ?>
        </div>
    </div>
</section>

<section class="gallery">
	<div class="row">
        <div class="col-12">
			<?php
			$wp_query = new WP_Query( array(
				'post_type' => 'page',
				'pagename' => 'gallery',
			));
			?>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
                    <h2 class="section-title"><?= the_title(); ?></h2>
                <?= the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>

			<?php wp_reset_query(); // очищаем запрос ?>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>