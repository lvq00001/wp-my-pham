<?php
if (have_posts()):
    while (have_posts()): ?>
        <p><?php echo get_the_date('l jS F, Y'); ?></p>
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Read more</a>

        <?php
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
        echo $fname . ' ' . $lname;
        ?>

        <?php
        $tags = get_the_tags();
        foreach ($tags as $tag): ?>

            <a href="<?php echo get_tag_link($tag->term_id); ?>">
                <?php echo $tag->name; ?>
            </a>
        <?php endforeach; ?>

    <?php endwhile;
endif; ?>