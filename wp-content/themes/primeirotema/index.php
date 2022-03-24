<?php get_header(); ?>

<section>
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <article>
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?>
                        </a>
                    <?php endif; ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </article>

                <p>
                    <?= get_the_date(); ?> | <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>"><?= the_author(); ?></a>
                </p>

                <P>
                    <?php the_excerpt(); ?>
                </P>

                <P>
                    <?php comments_number('0 comentários', 'um comentário', '% comentários'); ?> | <a href="<?= the_permalink(); ?>">Leia mais</a>
                </P>
                <hr>

            <?php endwhile; ?>
        <?php endif; ?>

        <div class="paginacao">
            <div class="pagina_anterior"><?php previous_post_link('%link', '<i class="fas fa-angle-double-left"></i> Página Anterior'); ?></div>
            <div class="pagina_proxima"><?php next_post_link('%link', 'Próxima Página <i class="fas fa-angle-double-right"></i>'); ?></div>
        </div>
    </div>
    <?php get_sidebar(); ?>

    <div style="clear:both"></div>

</section>

<?php get_footer(); ?>