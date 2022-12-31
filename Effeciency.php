<?php
//Template Name: Effeciency
get_header();
get_sidebar();
?>

    <section>
        <div class="effeciency">
            <div class="effeciency__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="effeciency__inner--title">
                                <h2><?php the_field('effeciency_main_title'); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="effeciency__inner--zigzag">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="effeciency__inner--zigzag-image">
                                    <img src="<?php the_field('effeciency_zigzag_one_image'); ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="effeciency__inner--zigzag-text">
                                    <h3><?php the_field('effeciency_zigzag_one_title'); ?></h3>
                                    <p><?php the_field('effeciency_zigzag_one_description'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="effeciency__inner--zigzag">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-12 order">
                                <div class="effeciency__inner--zigzag-text">
                                    <h3><?php the_field('effeciency_zigzag_two_title'); ?></h3>
                                    <p><?php the_field('effeciency_zigzag_two_description'); ?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="effeciency__inner--zigzag-image">
                                    <img src="<?php the_field('effeciency_zigzag_two_image'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="effeciency-factsheet">
            <div class="effeciency-factsheet__inner">
                <div class="container">
                    <div class="row">
                        <?php if( have_rows('effeciency_factsheet') ): ?>
                            <?php while( have_rows('effeciency_factsheet') ) : the_row(); ?>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="effeciency-factsheet__inner--box">
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

    <section>
        <div class="other-zigzag">
            <div class="other-zigzag__inner">
                <div class="container">
                    <div class="other-zigzag__inner--content three">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="other-zigzag__inner--content-image">
                                    <img src="<?php the_field('effeciency_zigzag_three_image'); ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="other-zigzag__inner--content-text">
                                    <h3><?php the_field('effeciency_zigzag_three_title'); ?></h3>
                                    <p><?php the_field('effeciency_zigzag_three_description'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="other-zigzag__inner--content four">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-12 order">
                                <div class="other-zigzag__inner--content-text">
                                    <h3><?php the_field('effeciency_zigzag_four_title'); ?></h3>
                                    <p><?php the_field('effeciency_zigzag_four_description'); ?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="other-zigzag__inner--content-image">
                                    <img src="<?php the_field('effeciency_zigzag_four_image'); ?>">
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