<?php
get_header();
get_sidebar();
?>
    <div class="container">
        <div class="custom-breadcrumb">
            <?php if(is_home())
            {
            ?>
            <a href="<?php echo site_url();?>">Home</a>
            <?php
            }
            else
            {
            ?>
            <a href="<?php echo site_url();?>">Home</a> -> <a href="http://localhost/walletup/wordpress/services/"><?php echo $page_brdcrmb = get_post_meta(get_the_ID(), 'custom', true); ?>Services</a> -> <a href="#" class="current"><?php echo get_the_title(); ?></a>
            <?php } ?>
        </div>
    </div>
    <section>
        <div class="services">
            <div class="container">
                <div class="services__inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="services__inner--posts">
                                <?php while ( have_posts() ) : the_post(); ?>

                                    <div class="services__inner--posts-content">
                                        <div class="service-title">
                                            <h4><?php echo get_the_title(); ?></h4>
                                        </div>
                                        <div class="service-description">
                                            <p><?php echo get_the_content( );?></p>
                                        </div>
                                    </div>
                                        
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <div class="service-zigzag">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="service-zigzag__image">
                                    <img src="<?php the_field('zigzag_image'); ?>"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="service-zigzag__text">
                                    <h5><?php the_field('zigzag_title'); ?></h5>
                                    <p><?php the_field('zigzag_description'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center zigzag-two">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="service-zigzag__text">
                                    <h5><?php the_field('zigzag_title_two'); ?></h5>
                                    <p><?php the_field('zigzag_description_two'); ?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="service-zigzag__image">
                                    <img src="<?php the_field('zigzag_image_two'); ?>"/>
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