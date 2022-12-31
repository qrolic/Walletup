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
            <a href="<?php echo site_url();?>">Home</a> -> <a href="http://localhost/walletup/wordpress/blog/"><?php echo $page_brdcrmb = get_post_meta(get_the_ID(), 'custom', true); ?>blog</a> -> <a href="#" class="current"><?php echo get_the_title(); ?></a>
            <?php } ?>
        </div>
    </div>
    <section>
        <div class="blog">
            <div class="container">
                <div class="blog__inner">
                    <div class="blog__inner--posts">
                        <?php while ( have_posts() ) : the_post(); ?>

                            <div class="blog__inner--posts-content">
                                <div class="blog-image">
                                    <img src="<?php echo the_post_thumbnail_url(); ?>">
                                </div>
                                <div class="blog-title">
                                    <h4><?php echo get_the_title(); ?></h4>
                                </div>
                                <div class="blog-info">
                                    <ul>
                                        <li><i class="fa-solid fa-user"></i><?php echo get_the_author(); ?></li>
                                        <li><i class="fa-solid fa-calendar-days"></i><?php echo get_the_date(); ?></li>
                                    </ul>
                                </div>
                                <div class="blog-description">
                                    <p><?php echo get_the_content( );?></p>
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