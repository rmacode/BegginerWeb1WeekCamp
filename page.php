<div class="row">
    <div class="small-12 medium-10 medium-offset-1 columns">
        <?php while (have_posts()) : the_post(); ?>
            <p>&nbsp;</p>
            <?php get_template_part('templates/page', 'header'); ?>
            <?php get_template_part('templates/content', 'page'); ?>
        <?php endwhile; ?>

    </div>
</div>
