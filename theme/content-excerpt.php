<article id="post-<?php the_ID(); ?>" <?php post_class('post-excerpt'); ?>>
    <h2><?php the_title(); ?></h2>
    <p><small><?php the_time("d.m.Y - H:i"); ?></small></p>
    <p><?php the_post_thumbnail('excerpt-thumbnail') ?></p>
    <?php the_excerpt(); ?>
    <a class="more-button" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Mehr...</a>
</article>