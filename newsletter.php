<?php
//Template Name: Newsletter Page
get_header();
get_sidebar();
?>
    
    <section>
        <div class="newsletter-page">
            <div class="newsletter-page__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="newsletter-page__inner--title">
                                <h2><?php the_field('newsletter_title'); ?></h2>
                                <p><?php the_field('newsletter_description'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 col-12">
                            <div class="newsletter-page__inner--form">
                                <?php echo do_shortcode( '[mc4wp_form id="130"]' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
the_content();
get_footer();
?>