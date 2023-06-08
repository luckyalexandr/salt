
</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 pb-4">
                <img class="logo" src="<?= get_template_directory_uri() . '/images/logo.png'; ?>" alt="">
            </div>
            <div class="col-md-4 pb-4">
	            <?php
	            $wp_query = new WP_Query( array(
		            'post_type' => 'page',
		            'pagename' => 'contacts',
	            ));
	            ?>
	            <?php if ( have_posts() ) : ?>
		            <?php while ( have_posts() ) : the_post(); ?>
                    <?= the_content(); ?>
		            <?php endwhile; ?>
	            <?php endif; ?>
	            <?php wp_reset_query(); // очищаем запрос ?>
            </div>
            <div class="col-md-4 pb-4">
	            <nav class="footer-menu">
		            <?php wp_nav_menu( array( 'theme_location' => 'in_footer', 'menu_class' => 'nav-menu' ) ); ?>
                </nav>
            </div>
            <div class="col-12 pb-3">
	            <?php
	            $wp_query = new WP_Query( array(
		            'post_type' => 'page',
		            'pagename' => 'copyright',
	            ));
	            ?>
	            <?php if ( have_posts() ) : ?>
		            <?php while ( have_posts() ) : the_post(); ?>
			            <?php echo date('Y') ?> © <?= the_title(); ?>

		            <?php endwhile; ?>
	            <?php endif; ?>
	            <?php wp_reset_query(); // очищаем запрос ?>
            </div>
        </div>
    </div>

</footer>

<!-- Button trigger modal -->
<button type="button" class="btn btn-action" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <img src="<?= get_template_directory_uri() . '/images/action-call-inbound-svgrepo-com.svg'  ?>" alt="">
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
	    <?php
	    $wp_query = new WP_Query( array(
		    'post_type' => 'post',
		    'category_name' => 'forma',
	    ));
	    ?>
	    <?php if ( have_posts() ) : ?>

	    <?php while ( have_posts() ) : the_post(); ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= the_title(); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
	            <?= the_content(); ?>
            </div>
        </div>

		    <?php endwhile; ?>

	    <?php endif; ?>
	    <?php wp_reset_query(); // очищаем запрос ?>

    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>