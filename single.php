<?php
    $post_type = ( 'posts' === get_post_type() ) ? 'single' : get_post_type();
    get_template_part('templates/content', $post_type);
