<?php
//Template Name: Social Media
get_header();
get_sidebar();
?>

    <section>
        <div class="socialmedia">
            <div class="socialmedia__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="socialmedia__inner--title">
                                <h2><?php the_field('social_media_main_title'); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="socialmedia__inner--content">
                        <div class="row">
                            <?php if( have_rows('social_media_details') ): ?>
                                <?php while( have_rows('social_media_details') ) : the_row(); ?>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                        <div class="socialmedia__inner--content-link">
                                            <a href="<?php the_sub_field('social_link'); ?>"><img src="<?php the_sub_field('social_logo'); ?>"></a>
                                            <a href="<?php the_sub_field('social_link'); ?>"><h5><?php the_sub_field('social_title'); ?></h5></a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php else : ?>  
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="social-gallery">
            <div class="social-gallery__inner">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                            <div class="social-gallery__inner--twitter">
                                <?php echo do_shortcode( '[custom-twitter-feeds feed=1]' ); ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="social-gallery__inner--instagram">
                                <?php echo do_shortcode( '[insta-gallery id="2"]' ); ?>
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