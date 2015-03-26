<?php
/*
Template Name: Sponsorship Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
    <div class="row">
        <div class="small-12 columns">
            <?php get_template_part('templates/page', 'header-sponsorship'); ?>
        </div>
    </div>
    <?php get_template_part('templates/content', 'page-sponsorship'); ?>
<?php endwhile; ?>
