<?php
//Template Name: Application
get_header();
get_sidebar();
?>

    <section>
        <div class="waitlist">
            <div class="before-image">
                <img src="<?php the_field('waitlist_before_image'); ?>">
            </div>
            <div class="waitlist__inner">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="waitlist__inner--text">
                                <h2><?php the_field('waitlist_title'); ?></h2>
                                <p><?php the_field('waitlist_description'); ?></p>
                                <a href="<?php the_field('waitlist_btn_link'); ?>"><?php the_field('waitlist_btn_text'); ?></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="waitlist__inner--image">
                                <img src="<?php the_field('waitlist_image'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="our-mission">
            <div class="before-image">
                <img src="<?php the_field('mission_before_image'); ?>">
            </div>
            <div class="our-mission__inner">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-12 order">
                            <div class="our-mission__inner--image">
                                <img src="<?php the_field('mission_image'); ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="our-mission__inner--text">
                                <h5><?php the_field('mission_subtitle'); ?></h5>
                                <h2><?php the_field('mission_title'); ?></h2>
                                <p><?php the_field('mission_description'); ?></p>
                                <a href="<?php the_field('mission_btn_link'); ?>"><?php the_field('mission_btn_text'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="after-image">
                <img src="<?php the_field('mission_after_image'); ?>">
            </div>
        </div>
    </section>

    <section>
        <div class="feature">
            <div class="before-image">
                <img src="<?php the_field('feature_before_image'); ?>">
            </div>
            <div class="feature__inner">
                <div class="container-fluid">
                    <div class="feature__inner--content">
                        <div class="col-12">
                            <div class="feature__inner--content-title">
                                <h3><?php the_field('feature_main_title'); ?></h3>
                            </div>
                        </div>
                        <div class="swiper feature-slider">
                            <div class="feature-slider__number">
                                <span class="feature-slider__number-current">01</span> / 
                                <span class="feature-slider__number-total">0<?php echo count( get_field( 'feature_slider' ) );  ?></span>
                            </div>

                            <?php if( have_rows('feature_slider') ): ?>  
                                <div class="swiper-wrapper">
                                    <?php while( have_rows('feature_slider') ) : the_row(); ?>
                                    <div class="swiper-slide">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-12 col-12 order">
                                                <div class="feature__inner--content-text">
                                                    <h2><?php the_sub_field('title'); ?></h2>
                                                    <p><?php the_sub_field('description'); ?></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <div class="feature__inner--content-image">
                                                    <img src="<?php the_sub_field('image'); ?>">
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php else : ?>
                                
                            <?php endif; ?>
                            <div class="elements"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="application">
            <div class="before-image">
                <img src="<?php the_field('application_before_image'); ?>">
            </div>
            <div class="application__inner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="application__inner--title">
                                <h2><?php the_field('application_main_title'); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php $args = array(
                            'post_type' => 'Application' ,
                            'orderby' => 'date' ,
                            'order' => 'DESC' ,
                            'paged' => get_query_var('paged'),
                        ); ?>
                        <?php $posts = new WP_Query( $args ) ?>
                        <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                            <div class="col-lg-4 col-md-6 col-12 mobile-space">
                                <div class="application__inner--post">
                                    <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                    <div class="discription">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                    <div class="link-btn">
                                        <a href="<?php the_permalink(); ?>">Read More <img src="<?php echo get_template_directory_uri(); ?>/image/application-arrow.png"></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="download">
            <div class="before-image">
                <img src="<?php the_field('download_before_image'); ?>">
            </div>
            <div class="download__inner">
                <div class="container-fluid">
                    <div class="download__inner--content">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-12 order">
                                <div class="download__inner--content-text">
                                    <h2><?php the_field('download_title'); ?></h2>
                                    <div class="download-btn">
                                        <a href="#" class="image-one"><img src="<?php the_field('download_btn_one_image'); ?>"></a>
                                        <a href="#" class="image-two"><img src="<?php the_field('download_btn_two_image'); ?>"></a>
                                    </div>
                                    <p><?php the_field('download_description'); ?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="download__inner--content-image">
                                    <img src="<?php the_field('download_image'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>