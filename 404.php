<?php get_header(); ?>

    <div id='primary' class='container bg-white'>
        <main id='main' class='site-main mt-5 p-3' role='main'>

            <section class='error-404 not-found'>

                <header class='page-header'>
                    <h1 class='page-title'>Spiacente, la pagina che stai cercando non esiste</h1>
                </header>

                <div class='page-content text-center'>
                    <p>Sembra che tu abbia digitato un indirizzo sbagliato. Prova uno dei link in basso</p>

                    <?php the_widget('WP_Widget_Recent_Posts'); ?>

                    <div class='widget widget_categories'>
                        <h3>Categorie più visitate</h3>
                        <ul>
                            <?php
                                wp_list_categories(array(
                                    'orderby' => 'count',
                                    'order' => 'DESC',
                                    'show_count' => 1,
                                    'title_li' => '',
                                    'number' => '5'
                                ));
                            ?>
                        </ul>
                    </div>

                    <?php the_widget('WP_Widget_Archives', 'after_title=</h2>$archive_content'); ?>
                    
                </div>

            </section>

        </main>
    </div>

<?php get_footer(); ?>
