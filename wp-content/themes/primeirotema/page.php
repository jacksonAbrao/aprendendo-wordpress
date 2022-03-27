<?php get_header(); ?>

<section>
    <div class="container">
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                
                <P>
                    <?php the_content(); ?>
                </P>
            </article>

        <?php endwhile; ?>
    </div>
    <?php get_sidebar(); ?>

    <div style="clear:both"></div>

</section>

<?php get_footer(); ?>