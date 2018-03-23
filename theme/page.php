<?php
    get_header();
    if (have_posts()) :
        the_post();
?>
    <div id="content-wrapper">
        <div id="main-content-container" class="container">
            <div id="top-image" class="row" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/top-image-blue.jpg)">
                <div id="top-image-text-area">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>

            <section id="main-content" class="row">
                <div class="col-xs-12 col-sm-8">
                    <?php the_content(); ?>
                </div>

                <?php get_sidebar(); ?>

            </section>
        </div>
    </div>

<?php
    endif;
    get_footer();
?>