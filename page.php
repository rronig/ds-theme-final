<?php
/*
Template Name: Page Template
*/
?>
<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="home-blog">
                        <div class="container">
                            <div class="page-item">
                                <?php
                                    while( have_posts() ): the_post();
                                        ?>
                                            <article>
                                                <h1><?php the_title(); ?></h1>
                                                <?php the_content(); ?>
                                            </article>
                                        <?php
                                    endwhile;
                                ?>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>