<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2><?php the_title() ?></h2>
    <p><small><?php the_time("d.m.Y - H:i") ?></small></p>
    <?php the_content() ?>
    <a class="more-button xl-more-button" href="./news/">Zurück zur Übersicht...</a>
</article>