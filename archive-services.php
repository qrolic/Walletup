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
            <a href="<?php echo site_url();?>">Home</a> -> <a href="http://localhost/walletup/wordpress/services/"><?php echo $page_brdcrmb = get_post_meta(get_the_ID(), 'custom', true); ?> Services </a>
            <?php } ?>
        </div>
    </div>
    <section>
        <div class="all-services">
            <div class="all-services__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="all-services__inner--title">
                                <h4>Our <span class="green">Services</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="all-services__inner--content">
                        <div class="row">
                            <?php if( have_posts() ): ?>

                                <?php while( have_posts() ) : the_post(); ?>

                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="all-services__inner--content-box">
                                            <img src="<?php echo the_post_thumbnail_url(); ?>" class="box-logo">
                                            <a href="<?php the_permalink() ?>"><h5><?php the_title(); ?></h5></a>
                                            <div class="description">
                                                <p><?php echo the_excerpt(); ?></p>
                                            </div>
                                            <!-- <div class="service-btn">
                                                <a href="<?php the_sub_field('service_btn_link'); ?>"><img src="<?php the_sub_field('service_btn_image'); ?>"></a>
                                            </div> -->
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
get_footer();
?>