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
            <a href="<?php echo site_url();?>">Home</a> -> <a href="http://localhost/walletup/wordpress/blog/"><?php echo $page_brdcrmb = get_post_meta(get_the_ID(), 'custom', true); ?> blog </a>
            <?php } ?>
        </div>
    </div>
    <section>
        <div class="blog-list">
            <div class="container">
                <div class="blog-list__inner">
                    <div class="blog-list__inner--posts">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="blog-list__inner--posts-content">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-12">
                                        <a href="#" class="image"><img src="<?php echo the_post_thumbnail_url(); ?>"></a>
                                    </div>
                                    <div class="col-lg-7 col-md-6 col-12">
                                        <a href="<?php the_permalink() ?>" class="title"><h4><?php echo get_the_title(); ?></h4></a>
                                        <div class="description">
                                            <p><?php echo the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="blog-list__inner--sidebar">
                        <div class="blog-list__inner--sidebar-content">
                            <?php if ( is_active_sidebar( 'blog-list-sidebar' ) ) { ?>

                                <aside class="widget-area" role="complementary">
                                    <?php dynamic_sidebar( 'blog-list-sidebar' ) ?>
                                </aside>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>