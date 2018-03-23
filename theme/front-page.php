<?php get_header(); ?>

<div id="content-wrapper">
    <section id="home" style="background-image: url(<?php bloginfo( 'template_url' );?>/assets/background-home.jpg)">
        <div class="container ol-container">
            <div id="home-overlay" class="row wow fadeIn" data-wow-delay="0.75s">
                <a href="<?php bloginfo( 'url' ); ?>/">
                    <img class="img-responsive home-image" src="<?php bloginfo( 'template_url' ); ?>/assets/ieee-sb-logo-home.svg" alt="IEEE Student Branch Regensburg Logo"/>
                </a>

                <a class="down-arrow-anchor wow fadeIn" data-wow-delay="1.5s" href="#get-in-touch">
                    <img class="down-arrow-floating" src="<?php bloginfo( 'template_url' ); ?>/assets/down-arrow.svg" alt="Scroll to next section"/>
                </a>
            </div>
        </div>
    </section>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/adjust-home-height.js"></script>

    <div id="main-content-container" class="container">

        <section id="get-in-touch" class="row front-page-section">
            <div class="front-page-section-header wow fadeIn">
                <h1>Get in touch:</h1>
            </div>
            <?php ieee_sb_custom_theme_social_menu() ?>
        </section>

        <section id="news" class="row front-page-section">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div class="front-page-section-header">
                    <h1>Neuigkeiten</h1>
                </div>

                <?php
                $posts = get_posts('posts_per_page=3');
                foreach ($posts as $post){
                    setup_postdata($post);
                    get_template_part('content', 'excerpt');
                }
                ?>
                <a class="more-button xl-more-button" href="./news/">Lese alle unsere News...</a>
            </div>

        </section>

        <section id="sponsors" class="row front-page-section">
            <div class="front-page-section-header">
                <h1>Unser Sponsor</h1>
            </div>
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <a href="http://www.syskron.com/de/" target="_blank">
                    <img class="img-responsive" src="<?php bloginfo( 'template_url' ); ?>/assets/syskron-logo.png" alt="Syskron Logo" />
                </a>
            </div>
        </section>

        <section id="about" class="row front-page-section">
            <div class="front-page-section-header">
                <h1>Wer sind wir?</h1>
            </div>
            <div class="front-page-section-header-image" style="background-image: url(<?php bloginfo( 'template_url' );?>/assets/header_sb_rbg_blue.jpg)"></div>

            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <p>
                    Mit rund 425000 Mitgliedern in mehr als 160 Ländern ist das Institute of Electrical and Electronics Engineers (IEEE)
                    der grösste technische Berufsverband der Welt. Seit April 2014 ist die IEEE durch den Student Branch auch auf dem Campus Regensburg vertreten:
                    wir haben mittlerweile mehr als zwanzig feste Mitglieder an der Ostbayerischen Technischen Hochschule und Universität. Und seit November 2015
                    sind wir auch ein eingetragener Verein.
                </p>
                <p>
                    Wir bieten jedes Semester verschiedene Veranstaltungen an, die von Fachvorträgen und Soft-Skill-Trainings bis hin zu Spielabenden reichen. Damit
                    finden wir für euch eine gute Mischung aus Informativem und Spiel und Spaß. Ebenfalls verfügen wir über ein weitreichendes Netzwerk zu
                    Professoren und Wirtschaft - wir können euch bspw. bei Themen rund um Bachelor- und Masterarbeit beraten oder euch mit unserer Jobbörse die
                    nächste Praktikantenstelle vermitteln. Und bei "Professoren Privat" bekommt ihr einen direkten Einblick in den Alltag der Professoren.
                </p>
            </div>

            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="front-page-section-header">
                    <h2 class="text-center">Wir sind für euch da</h2>
                </div>
                <ul class="excom-list">
                    <li class="member wow bounceInRight">
                        <img src="<?php bloginfo( 'template_url' );?>/assets/lars.jpg" alt="Lars Hemala" />
                        <h4>Lars Hemala</h4>
                        <p>Chair</p>
                    </li>
                    <li class="member wow bounceInRight">
						<img src="<?php bloginfo( 'template_url' );?>/assets/katja.jpg" alt="Katja-Maja Krödel" />
                        <h4>Katja-Maja Krödel</h4>
                        <p>Vice-Chair</p>
                    </li>
                    <li class="member wow bounceInRight">
                        <img src="<?php bloginfo( 'template_url' );?>/assets/quirin.jpg" alt="Quirin Stangl" />
                        <h4>Quirin Stangl</h4>
                        <p>Treasurer</p>
                    </li>
                    <li class="member wow bounceInRight">
                        <img src="<?php bloginfo( 'template_url' );?>/assets/andreas.jpg" alt="Andreas Weinzierl" />
                        <h4>Andreas Weinzierl</h4>
                        <p>Secretary</p>
                    </li>
                    <li class="member wow bounceInRight">
                        <img src="<?php bloginfo( 'template_url' );?>/assets/sebastian.jpg" alt="Sebastian Bock" />
                        <h4>Sebastian Bock</h4>
                        <p>Past-Chair</p>
					</li>
                </ul>
            </div>

            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <a class="more-button xxl-more-button mobile-align-center" href="./mitglieder">Lerne alle unsere Mitglieder kennen...</a>
                <a class="more-button xxl-more-button mobile-align-center" href="./veranstaltungen">Nimm an unseren Veranstaltungen teil...</a>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>