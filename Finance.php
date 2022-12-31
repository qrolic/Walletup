<?php
//Template Name: Finance
get_header();
get_sidebar();
?>

    <section>
        <div class="finance">
            <div class="finance__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="finance__inner--title">
                                <h2><?php the_field('finance_main_title'); ?></h2>
                                <p><?php the_field('finance_main_description'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="finance__inner--zigzag">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="finance__inner--zigzag-video">
                                    <video controls width="100%">
                                        <source src="<?php the_field('finance_zigzag_video'); ?>" type="video/webm">
                                        <source src="<?php the_field('finance_zigzag_video'); ?>" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="finance__inner--zigzag-text">
                                    <p><?php the_field('zigzag_video_content'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="finance__inner--zigzag">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-12 order">
                                <div class="finance__inner--zigzag-text">
                                    <p><?php the_field('zigzag_image_content'); ?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="finance__inner--zigzag-image">
                                    <img src="<?php the_field('finance_zigzag_image'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="call-action">
            <div class="call-action__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="call-action__inner--content">
                                <h4><?php the_field('finance_call_to_action_title'); ?></h4>
                                <p><?php the_field('finance_call_to_action_description'); ?></p>
                                <a href="<?php the_field('finance_call_to_action_btn_link'); ?>"><?php the_field('finance_call_to_action_btn_text'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="factsheet">
            <div class="factsheet__inner">
                <div class="container">
                    <div class="row">
                        <?php if( have_rows('finance_factsheet') ): ?>
                            <?php while( have_rows('finance_factsheet') ) : the_row(); ?>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="factsheet__inner--box">
                                    <h5><?php the_sub_field('title'); ?></h5>
                                    <p><?php the_sub_field('text'); ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                                
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
the_content();
get_footer();
?>