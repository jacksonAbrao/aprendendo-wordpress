<article>
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?>
        </a>
    <?php endif; ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


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
</article>