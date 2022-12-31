<?php
//Template Name: About Us
get_header();
get_sidebar();
?>

    <section>
        <div class="about-slider">
            <div class="about-slider__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="about-slider__inner--title">
                                <h4><?php the_field('about_main_title'); ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row swiper aboutus-slider">
                        <?php if( have_rows('about_slider') ): ?>
                            <div class="swiper-wrapper">
                                <?php while( have_rows('about_slider') ) : the_row(); ?>
                                    <div class="col-12 swiper-slide">
                                        <div class="about-slider__inner--content">
                                            <img src="<?php the_sub_field('slide_image'); ?>">
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        <?php else : ?>
                                
                        <?php endif; ?>

                        <div class="col-12">
                            <div class="about-slider__inner--text">
                                <p><?php the_field('about_main_discription'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="about-map">
            <div class="about-map__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="about-map__inner--content">
                                <iframe src="<?php the_field('about_map'); ?>" title="W3Schools Free Online Web Tutorials" height="450"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="about-other">
            <div class="about-other__inner">
                <div class="container">
                    <div class="row justify-content-evenly">
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="about-other__inner--box">
                                <img src="<?php the_field('about_our_vision_image'); ?>">
                                <h5><?php the_field('about_our_vision_title'); ?></h5>
                                <p><?php the_field('about_our_vision_text'); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="about-other__inner--box">
                                <img src="<?php the_field('about_our_mission_image'); ?>">
                                <h5><?php the_field('about_our_mission_title'); ?></h5>
                                <p><?php the_field('about_our_mission_text'); ?></p>
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