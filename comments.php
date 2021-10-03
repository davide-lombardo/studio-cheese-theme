<div class="comments-wrapper">
    <div class="comments" id="comments">
        <div class="comments-header">
            <h2 class=comments-reply-title>
                <?php
                    if ( ! have_comments() ) {
                        echo "Lascia un commento";
                    }
                    else {
                        echo get_comments_number(). " Commenti";
                    }
                ?>
            </h2> <!-- comments-reply-title -->
            <div class="comments-inner">
                <?php
                    wp_list_comments(
                        array(
                            'avatar_size'  =>  80,
                            'style'        =>  'div',
                        )
                    );
                ?>
            </div> <!-- comments-inner -->

            <hr class='' area-hidden="true">
                <?php
                    if ( comments_open() ){
                        comment_form(
                            array(
                                'class_form'          => '',
                                'title_reply_before'  => '<h2 id="reply-tile" class="comment-reply-title">',
                                'title_reply_after'   => '</h2>',
                            )
                        );
                    }
                    else {
                        echo get_comments_number(). " Commenti";
                    }
                ?>
        </div>
    </div>
</div>