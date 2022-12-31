<?php
//Template Name: Homepage
get_header();
get_sidebar();
?>

    <!--Banner start-->
        <section>
            <div class="banner">
                <div class="banner__inner">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner__inner--title">
                                    <h1><?php the_field('banner_main_title'); ?></h1>
                                </div>
                            </div>
                        </div>
                        <div class="banner__inner--content">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="banner__inner--content-box">
                                        <div class="icon">
                                            <img src="<?php the_field('banner_box_image_one'); ?>">
                                        </div>
                                        <div class="text">
                                            <h4><?php the_field('banner_box_title_one'); ?></h4>
                                            <p><?php the_field('banner_box_text_one'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="banner__inner--content-box">
                                        <div class="icon">
                                            <img src="<?php the_field('banner_box_image_two'); ?>">
                                        </div>
                                        <div class="text">
                                            <h4><?php the_field('banner_box_title_two'); ?></h4>
                                            <p><?php the_field('banner_box_text_two'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="banner__inner--content-box">
                                        <div class="icon">
                                            <img src="<?php the_field('banner_box_image_three'); ?>">
                                        </div>
                                        <div class="text">
                                            <h4><?php the_field('banner_box_title_three'); ?></h4>
                                            <p><?php the_field('banner_box_text_three'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                    <div class="banner__inner--content-box">
                                        <div class="icon">
                                            <img src="<?php the_field('banner_box_image_four'); ?>">
                                        </div>
                                        <div class="text">
                                            <h4><?php the_field('banner_box_title_four'); ?></h4>
                                            <p><?php the_field('banner_box_text_four'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--Banner end-->

    <!--StartedZigzag start-->
        <section>
            <div class="started-zigzag">
                <div class="started-zigzag__inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-12 order">
                                <div class="started-zigzag__inner--text">
                                    <h2><?php the_field('started_zigzag_title'); ?></h2>
                                    <a href="<?php the_field('started_zigzag_btn_link'); ?>"><?php the_field('started_zigzag_btn_text'); ?></a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-12">
                                <div class="started-zigzag__inner--image">
                                    <img src="<?php the_field('started_zigzag_image'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--StartedZigzag end-->

    <!--Important Zigzag start-->
        <section>
            <div class="importantzigzag">
                <div class="importantzigzag__inner">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="importantzigzag__inner--image">
                                    <img src="<?php the_field('important_zigzag_image'); ?>">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-12">
                                <div class="importantzigzag__inner--text">
                                    <h2><?php the_field('important_zigzag_title'); ?></h2>
                                    <p><?php the_field('important_zigzag_text'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--Important Zigzag end-->

    <!--Secrets start-->
        <section>
            <div class="secrets">
                <div class="secrets__inner">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-12 order">
                                <div class="secrets__inner--text">
                                    <h2><?php the_field('secrets_main_title'); ?></h2>
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="content-box">
                                                    <div class="icon">
                                                        <img src="<?php the_field('secrets_content_box_image_one'); ?>">
                                                    </div>
                                                    <div class="text">
                                                        <h4><?php the_field('secrets_content_box_title_one'); ?></h4>
                                                        <p><?php the_field('secrets_content_box_text_one'); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="content-box">
                                                    <div class="icon">
                                                        <img src="<?php the_field('secrets_content_box_image_two'); ?>">
                                                    </div>
                                                    <div class="text">
                                                        <h4><?php the_field('secrets_content_box_title_two'); ?></h4>
                                                        <p><?php the_field('secrets_content_box_text_two'); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="content-box">
                                                    <div class="icon">
                                                        <img src="<?php the_field('secrets_content_box_image_three'); ?>">
                                                    </div>
                                                    <div class="text">
                                                        <h4><?php the_field('secrets_content_box_title_three'); ?></h4>
                                                        <p><?php the_field('secrets_content_box_text_three'); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="content-box">
                                                    <div class="icon">
                                                        <img src="<?php the_field('secrets_content_box_image_four'); ?>">
                                                    </div>
                                                    <div class="text">
                                                        <h4><?php the_field('secrets_content_box_title_four'); ?></h4>
                                                        <p><?php the_field('secrets_content_box_text_four'); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="secrets__inner--image">
                                    <img src="<?php the_field('secrets_main_image'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--Secrets end-->

    <!--Advancement start-->
        <section>
            <div class="advancement">
                <div class="advancement__inner">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="advancement__inner--image">
                                    <img src="<?php the_field('advancement_image'); ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="advancement__inner--text">
                                   <h2><?php the_field('advancement_title'); ?></h2>
                                   <a href="<?php the_field('advancement_btn_link'); ?>"><?php the_field('advancement_btn_text'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--Advancement end-->

    <!--Post start-->
        <section>
            <div class="walletup-post">
                <div class="walletup-post__inner">
                    <div class="container">
                        <div class="row justify-content-between">
                            <?php $args = array(
                            'post_type' => 'post' ,
                            'orderby' => 'date' ,
                            'order' => 'DESC' ,
                            'category_name' => 'category-one',
                            'paged' => get_query_var('paged'),
                            // 'post_parent' => $parent
                            ); ?>
                            <?php $posts = new WP_Query( $args ) ?>
                            <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                                    <div class="walletup-post__inner--content">
                                        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                        <div class="discription">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                        <div class="link-btn">
                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/post-arrow.png"></a>
                                        </div>
                                    </div>
                            <?php endwhile;
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--Post end-->

    <!--Effecient start-->
        <section>
            <div class="effecient">
                <div class="effecient__inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="effecient__inner--text">
                                    <h2><?php the_field('effecient_title'); ?></h2>
                                    <p><?php the_field('effecient_text'); ?></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="effecient__inner--image">
                                    <img src="<?php the_field('effecient_image'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--Effecient end-->

    <!--Steps start-->
        <section>
            <div class="step">
                <div class="step__inner">
                    <div class="before-image">
                        <img src="<?php the_field('step_before_image'); ?>">
                    </div>
                    <div class="container">
                        <div class="row justify-content-around">
                            <div class="col-lg-5 col-md-6 col-12">
                                <div class="step__inner--box step-one">
                                    <h4><?php the_field('step_box_one_title'); ?></h4>
                                    <p><?php the_field('step_box_one_text'); ?></p>
                                    <div class="arrow-link">
                                        <a href="<?php the_field('step_box_one_link'); ?>"><img src="<?php the_field('step_box_arrow_image'); ?>"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-12">
                                <div class="step__inner--box step-two">
                                    <h4><?php the_field('step_box_two_title'); ?></h4>
                                    <p><?php the_field('step_box_two_text'); ?></p>
                                    <div class="arrow-link">
                                        <a href="<?php the_field('step_box_two_link'); ?>"><img src="<?php the_field('step_box_arrow_image'); ?>"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-12">
                                <div class="step__inner--box step-three">
                                    <h4><?php the_field('step_box_three_title'); ?></h4>
                                    <p><?php the_field('step_box_three_text'); ?></p>
                                    <div class="arrow-link">
                                        <a href="<?php the_field('step_box_three_link'); ?>"><img src="<?php the_field('step_box_arrow_image'); ?>"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-12">
                                <div class="step__inner--box step-four">
                                    <h4><?php the_field('step_box_four_title'); ?></h4>
                                    <p><?php the_field('step_box_four_text'); ?></p>
                                    <div class="arrow-link">
                                        <a href="<?php the_field('step_box_four_link'); ?>"><img src="<?php the_field('step_box_arrow_image'); ?>"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="after-image">
                        <img src="<?php the_field('step_after_image'); ?>">
                    </div>
                </div>
            </div>
        </section>
    <!--Steps end-->

    <!--slider start-->
        <section>
            <div class="client-say">
                <div class="client-say__inner">
                    <div class="before-image">
                        <img src="<?php the_field('client_slider_before_image'); ?>">
                    </div>
                    <div class="container">
                        <div class="swiper client-slider">
                            <?php
                            
                            if( have_rows('client_slider') ): ?>
                            <div class="swiper-wrapper">

                            <?php while( have_rows('client_slider') ) : the_row(); ?>
                            <div class="col-5 swiper-slide">
                                <div class="client-say__inner--content">
                                    <h3><?php the_sub_field('client_name'); ?></h3>
                                    <h6><?php the_sub_field('client_title'); ?></h6>
                                    <p><?php the_sub_field('client_description'); ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            </div>
                            <div class="swiper-button-next"><img src="<?php the_field('client_slider_right_arrow'); ?>"></div>
                            <div class="swiper-button-prev"><img src="<?php the_field('client_slider_left_arrow'); ?>"></div>
                            <?php else : ?>
                                
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="after-image">
                        <img src="<?php the_field('client_slider_after_image'); ?>">
                    </div>
                </div>
            </div>
        </section>
    <!--slider end-->

    <!--Newsletter start-->
        <section>
            <div class="newsletter">
                <div class="newsletter__inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="newsletter__inner--title">
                                    <h3>Newsletter Registration</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-12 col-12">
                                <div class="newsletter__inner--form">
                                    <?php echo do_shortcode( '[mc4wp_form id="130"]' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--Newsletter end-->

<?php
the_content();
get_footer();
?>