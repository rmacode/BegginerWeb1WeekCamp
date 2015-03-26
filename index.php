<div class="row">
    <div class="small-12 columns">
        <?php get_template_part('templates/page', 'header'); ?>

        <?php if (!have_posts()) : ?>
          <p><?php _e('Sorry, no results were found.', 'roots'); ?> </p>
          <?php get_search_form(); ?>
        <?php endif; ?>

        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/content', get_post_format()); ?>
        <?php endwhile; ?>
    </div>
</div>