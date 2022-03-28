<?php get_header(); ?>

<section>
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                </article>

                <p>
                    <?= get_the_date(); ?> | <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>"><?= the_author(); ?></a>
                </p>

                <P>
                    <?php the_content(); ?>
                </P>

                <P>
                    <?php comments_number('0 comentários', 'um comentário', '% comentários'); ?>
                </P>
                <hr>
                <h3>Posts Relacionados</h3>
                <?php
                    $categories = get_the_category();
                    $cp_query = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post__not_in' => array(get_the_ID()),
                        'cat' => $categories[0]->term_id
                    ));
                    if($cp_query->have_posts()) {
                        while($cp_query->have_posts()){
                            $cp_query->the_post();

                            get_template_part('template_parts/related_post');
                    }
                    wp_reset_postdata();
                }

                ?>
                <hr>

                <?php
                    if(comments_open()){
                        comments_template();
                    }
                ?>

            <?php endwhile; ?>
        <?php endif; ?>

        <div class="paginacao">
            <div class="pagina_anterior"><?php previous_post_link(); ?></div>
            <div class="pagina_proxima"><?php next_post_link(); ?></div>
        </div>
    </div>
    <?php get_sidebar(); ?>

    <div style="clear:both"></div>

</section>

<?php get_footer(); ?>