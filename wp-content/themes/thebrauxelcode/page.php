<?php get_header(); ?>
    <main>
        <div class="wrap">
            <h1><?php the_title(); ?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	            <?php the_content(); ?>
            <?php endwhile; else: ?>
	            <p>No content!</p>
            <?php endif; ?>
        <!-- div.wrap ENDS -->
        </div>
    </main>
<?php get_footer(); ?>