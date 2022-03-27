<?php
    if(post_password_required()){
        return;
    }

    if(have_comments()){
        foreach($comments as $comment) {
            ?>
            <div class="comment-box">
                <div class="comment-author">
                    <?= get_avatar($comment, 60); ?>
                    <?= $comment->comment_author; ?>
                </div>
                <div class="comment-content">
                    <?= $comment->comment_content; ?>
                </div>
            </div>
            <?php
        }
        the_comments_pagination();
    }

    comment_form(array(
        'comment_field' => '<p><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
        'fields' => array(
            'author' => '<p><input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" /></p>',
            'email' => '<p><input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" /></p>',
            'url' => '<p><input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></p>'
        ),
        'class_submit' => 'btn btn-primary',
        'label_submit' => 'Enviar',
        'title_reply' => 'Deixe um comentário'
    ));
?>