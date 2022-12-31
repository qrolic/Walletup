<?php
//Template Name: Partners
get_header();
get_sidebar();
?>

    <section>
        <div class="partner">
            <div class="partner__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="partner__inner--title">
                                <h4><?php the_field('partner_main_title'); ?></h4>
                                <p><?php the_field('partner_main_text'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="our-partner">
            <div class="our-partner__inner">
                <div class="container">
                    <div class="our-partner__inner--content">
                        <div class="row">
                            <?php if( have_rows('partner_box') ): ?>

                                <?php while( have_rows('partner_box') ) : the_row(); ?>

                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="our-partner__inner--content-box">
                                            <img src="<?php the_sub_field('image'); ?>">
                                            <h5><?php the_sub_field('title'); ?></h5>
                                            <p><?php the_sub_field('description'); ?></p>
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

<?php
the_content();
get_footer();
?>