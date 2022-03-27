<?php get_header(); ?>

<section>
    <div class="container">

        <h1>Você pesquisou por: <?php the_search_query(); ?></h1>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>

                <?php get_template_part('template_parts/post'); ?>

            <?php endwhile; ?>
        <?php endif; ?>

        <div class="paginacao">
            <div class="pagina_anterior"><?php previous_posts_link('<i class="fas fa-angle-double-left"></i> Página Anterior'); ?></div>
            <div class="pagina_proxima"><?php next_posts_link('Próxima Página <i class="fas fa-angle-double-right"></i>'); ?></div>
        </div>
    </div>
    <?php get_sidebar(); ?>

    <div style="clear:both"></div>

</section>

<?php get_footer(); ?>