<?php
/*
Template Name: Lesson Template
*/
?>
<div class="row">
<div class="small-12 columns">

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php if ( is_user_logged_in() ) : ?>
        <?php get_template_part('templates/resources', 'instructor'); ?>
    <?php endif; ?>
    <?php get_template_part('templates/resources', 'students'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
</div>
</div>
