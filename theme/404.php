<?php get_header(); ?>

    <div id="content-wrapper">
        <div id="main-content-container" class="container">
            <div id="top-image" class="row" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/top-image-blue.jpg)">
                <div id="top-image-text-area">
                    <h1>404</h1>
                </div>
            </div>

            <section id="main-content" class="row">
                <div class="col-xs-12 col-sm-8">
                    <h2>Wir haben hier leider nichts für dich</h2>
                    <p>
                        Hast dich vertippt? Leider konnten wir unter der eingebenen Adresse nichts finden.
                    </p>
                    <a class="more-button xl-more-button" href="/">Zurück zur Startseite...</a>
                </div>

                <?php get_sidebar(); ?>

            </section>
        </div>
    </div>

<?php get_footer(); ?>