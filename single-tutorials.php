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
            <a href="<?php echo site_url();?>">Home</a> -> <a href="http://localhost/walletup/wordpress/tutorials/"><?php echo $page_brdcrmb = get_post_meta(get_the_ID(), 'custom', true); ?>Tutorials</a> -> <a href="#" class="current"><?php echo get_the_title(); ?></a>
            <?php } ?>
        </div>
    </div>
    <section>
        <div class="tutorials">
            <div class="tutorials__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tutorials__inner--title">
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <h2><?php echo get_the_title(); ?></h2>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <div class="tutorials__inner--content">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-12 tutorials-sidebar mobile-hide">
                                <div class="tutorials__inner--content-menu">
                                    <?php if( get_field('tutorials') ): $i = 0; ?>
                                        <ul id="mainNav">
                                            <?php while( has_sub_field('tutorials') ) : $i++; ?>
                                            <li><a href="#element<?php echo $i; ?>"><?php the_sub_field('title'); ?></a></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php else : ?>
                                
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7 col-sm-12 col-12">
                                <div class="tutorials__inner--content-text">
                                    <?php if( get_field('tutorials') ): $i = 0; ?>
                                        <?php while( has_sub_field('tutorials') ) : $i++; ?>
                                        <div class="content element">
                                            <?php the_sub_field('tutorial'); ?>
                                        </div>
                                        <?php endwhile; ?>
                                    <?php else : ?>
                                
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-2 col-12 tutorials-sidebar">
                                <div class="tutorials__inner--content-sidebar">
                                    <?php if ( is_active_sidebar( 'tutorials-sidebar' ) ) { ?>

                                        <aside class="widget-area" role="complementary">
                                            <?php dynamic_sidebar( 'tutorials-sidebar' ) ?>
                                        </aside>

                                    <?php } ?>
                                    <?php $terms = get_terms(
                                        array(
                                            'taxonomy'   => 'tutorials-category', // Custom Post Type Taxonomy Slug
                                            'hide_empty' => false,
                                            'order'      => 'asc'
                                        )
                                    );

                                    echo '<ul>';
 
                                    foreach ($terms as $term) {
                                            echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
                                        }
                                    echo '</ul>'; ?>

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