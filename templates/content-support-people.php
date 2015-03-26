<div class="row">
    <div class="col-sm-12 columns">
        <ul class="small-block-grid-3">
            <?php while (have_posts()) : the_post(); ?>
            <li>
                <?php
                    $fields = get_fields();
                ?>

            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>