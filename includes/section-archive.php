<?php
if (have_posts()):
    while (have_posts()): ?>
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Read more</a>
    <?php endwhile;
endif; ?>