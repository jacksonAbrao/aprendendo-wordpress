<div>
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?>
        </a>
    <?php endif; ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <P>
        <?php comments_number('0 comentários', 'um comentário', '% comentários'); ?> <br>
        <a href="<?= the_permalink(); ?>">Leia mais</a>
    </P>
    <hr>
</div>